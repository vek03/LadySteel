//=============================================================================

//Arquivo de classes de Conexão com o Wifi e com o Servidor
//General e Banco

//=============================================================================

// Classe Geral
class General
{
    //Construtor
    public: 
      General()
      {
          //Inicializando a classe
      }

    //Função que conecta ao WiFi
    void conect_wifi(){
        Serial.println("-------------------------------------------------------------------");
        Serial.println("\nCONECTANDO AO WIFI...\n");

        led.Branco();
        
        WiFi.mode(WIFI_STA); 

        WiFiManager wm;
    
        bool res;
        
        res = wm.autoConnect("LadySteel","12345678"); 

        if(!res) {
            Serial.println("Conexão OFF. Reiniciando...");
            conn.close();
            led.Vermelho();
            ESP.restart();
        } 
        else {
            led.Verde();
            Serial.println("\n\nConexão ON.");
            Serial.println("-------------------------------------------------------------------");
        }
    }

    //Função que testa o WiFi
    void test_wifi(){
      if(WiFi.status() != WL_CONNECTED){
          Serial.println("Conexão OFF. Reconectando...");
          led.Branco();
          conect_wifi();
      }else{
        Serial.println("Conexão ON.");
      }
    }
};

//=========================================================================

// Classe Banco
class Banco
{
    //Variáveis de Instância
    General geral;
  
    //Construtor
    public: 
      Banco()
      {
          //Inicializa a classe
      }

    // Função de conexão ao banco
    void server_conect() 
    { 
        while (!Serial && millis() < 5000);  // espera a Serial
      
        MYSQL_DISPLAY("\nCONECTANDO AO SERVIDOR...\n");
        MYSQL_DISPLAY(MYSQL_MARIADB_GENERIC_VERSION);     // mostra versão do bd
      
        MYSQL_DISPLAY1("IP: ", WiFi.localIP());   // mostra o IP

        // mostra as configurações do bd
        MYSQL_DISPLAY1("\nServer =", server);
        MYSQL_DISPLAY1("Port =", server_port);
        MYSQL_DISPLAY1("User =", user);
        MYSQL_DISPLAY1("PW =", password);
        MYSQL_DISPLAY1("DB =", default_database);

        //conecta ao banco
        test_server();
    }   

    //Função que testa a conexão com o servidor
    void test_server(){
      if (conn.connect(server, server_port, user, password))
      {
        Serial.println("\nServidor ON.");
      }
      else
      {
        led.Vermelho();
        Serial.println("\nServidor OFF. Reconectando...");
        
        geral.test_wifi();

        server_conect(); 
      }
      
      conn.close();
    }

    //função que insere a denúncia no bd
    void insertReport(int id_victim, double lat, double lng)
    {
      MYSQL_DISPLAY("");
      
      // Query
      String INSERT_REPORT = "INSERT INTO " + String(default_database) + ".denuncias(`id_victim`, `latitude`, `longitude`) VALUES (" + String(id_victim) + "," + String(lat,7) + "," + String(lng,7) + ");";
        
      // Instância
      MySQL_Query query_mem = MySQL_Query(&conn);

      // verifica conexão
      if (conn.connect(server, server_port, user, password))
      {
        MYSQL_DISPLAY(INSERT_REPORT);
        
        // executa o Query
        if ( !query_mem.execute(INSERT_REPORT.c_str()) )
        {
          conn.close();
          led.Vermelho();
          MYSQL_DISPLAY("\nErro ao inserir denúncia");
        }
        else
        {
          conn.close();
          led.Verde();
          MYSQL_DISPLAY("\nDenúncia realizada.");
        }
      }
      else
      {
        test_server();
      }
    }

    //Função que retorna o id da vitima proprietária
    String selectVitima(int id_device)
    {
          String s = "SELECT id FROM " + String(default_database) + ".users WHERE id_device = " + String(id_device) + " AND deleted_at IS NULL ORDER BY created_at;"; // Atribuindo Valor a String
          
          char p[150]; // Declarando a Char Array
          int i;
          
          for (i = 0; i < sizeof(p); i++) {
              p[i] = s[i];
              cout << p[i];
          }
          
          const char *QUERY_POP = p;
          
          sprintf(query, QUERY_POP, QUERY_POPULATION + (( millis() % 100000 ) * 10) );
          
          // Initiate the query class instance
          MySQL_Query query_mem = MySQL_Query(&conn);

          if (conn.connect(server, server_port, user, password))
          {
            // executa o Query
            if ( !query_mem.execute(query) )
            {
              MYSQL_DISPLAY("Erro ao buscar proprietária...");
              conn.close();
              led.Vermelho();
              ESP.restart();
            }
            else
            {
                MYSQL_DISPLAY(s);
              
                column_names *cols = query_mem.get_columns();
              
                // Read the rows and print them
                row_values *row = NULL;

                row = query_mem.get_next_row();

                String vitima;
                
                if (row != NULL) 
                {
                    vitima = String(row->values[0]);
                }else{
                    MYSQL_DISPLAY("Nenhuma vitima encontrada. Reiniciando...");
                    conn.close();
                    led.Vermelho();
                    ESP.restart();
                }

                MYSQL_DISPLAY("\nProprietária OK\n");
                led.Verde();
                conn.close();
                return vitima;
            }
          }
          else
          {
            test_server();
          }
    }
    
    //Função que verifica se o dispositivo foi ativado
    boolean isActive(int id_device)
    {
          MYSQL_DISPLAY("Verificando atividade do dispositivo...\n");
          
          String s = "SELECT deleted_at FROM " + String(default_database) + ".users WHERE id_device = " + String(id_device) + " ORDER BY created_at;"; // Atribuindo Valor a String
          
          char p[150]; // Declarando a Char Array
          int i;
          
          for (i = 0; i < sizeof(p); i++) {
              p[i] = s[i];
              cout << p[i];
          }
          
          const char *QUERY_POP = p;
          
          sprintf(query, QUERY_POP, QUERY_POPULATION + (( millis() % 100000 ) * 10) );
          MYSQL_DISPLAY(query);
          
          // Initiate the query class instance
          MySQL_Query query_mem = MySQL_Query(&conn);

          if (conn.connect(server, server_port, user, password))
          {
            // executa o Query
            if ( query_mem.execute(query) )
            {
                column_names *cols = query_mem.get_columns();
  
                // Read the rows and print them
                row_values *row = NULL;
                
                row = query_mem.get_next_row();
                
                if (row != NULL) 
                {
                  if(String(row->values[0]) != "")
                  {
                    conn.close();
                    return false;
                  }
                  else
                  {
                    conn.close();
                    return true;
                  }
                }
            }
          }
          else
          {
            test_server();
          } 
    }

    // função que atualiza o status do dispositivo parte 1
    void updatedAt(int id_device)
    {
      // Query
    String UPDATE_DEVICE = "UPDATE " + String(default_database) + "." + "dispositivos SET `updated_at` = CURRENT_TIMESTAMP WHERE `id` = " + String(id_device) + ";";
      
      // instância
      MySQL_Query query_mem = MySQL_Query(&conn);

      // testa conexão
      if (conn.connect(server, server_port, user, password))
      {
        MYSQL_DISPLAY(UPDATE_DEVICE);

        // executa o Query
        if ( !query_mem.execute(UPDATE_DEVICE.c_str()) )
        {
          conn.close();
          led.Vermelho();
          MYSQL_DISPLAY("Erro ao atualizar status...");
        }
        else
        {
          conn.close();
          led.Verde();
          MYSQL_DISPLAY("\nStatus OK.\n");
        }
      }
      else
      {
        test_server();
      }
    }
};

//=========================================================================

// Declarando objetos de instância para cada classe:
Banco bd;
General geral;

//=========================================================================
