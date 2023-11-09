//=============================================================================

//Arquivo das classes padrões
//Dispositivo, Vitima e Denuncia

//=============================================================================

// Classe Dispositivo
class Dispositivo
{
    // Variáveis da classe
    protected: int id = 1;      // codigo do dispositivo

    //Construtor
    public:
      Dispositivo()
      {
        //Inicializa a classe
      }

    //função que atualiza o status do dispositivo
    void updatedAt()
    {
        led.Azul();
        Serial.println("-------------------------------------------------------------------");
        MYSQL_DISPLAY("\nATUALIZANDO STATUS...");
        Serial.println("");
        bd.updatedAt(id);
        Serial.println("-------------------------------------------------------------------");
        Serial.println("");
    }

    void activate()
    {
      Serial.println("-------------------------------------------------------------------\n");

      led.Azul();

      if(bd.isActive(id))
      {
        led.Verde();
        Serial.println("\nDispositivo ON!");
      }
      else
      {
        Serial.println("\nDispositivo OFF! Reiniciando...");
        led.Vermelho();
        ESP.restart();
      }
      
      Serial.println("-------------------------------------------------------------------\n");
    }

    //Getter do id do dispositivo
    public: int getId()
    {
        return id;  
    }
};

//=========================================================================

//Classe Vítima
class User
{
    // Variáveis da classe
    protected: int id;          // código da vitima

    //Construtor
    public:
      User()
      {
          //Inicializa a classe
      }

    //Função que traz as informações da vítima
    void getVitimaEsp(int id_device)
    {
        led.Azul();
        Serial.println("-------------------------------------------------------------------");
        Serial.println("");
        Serial.println("BUSCANDO PROPRIETÁRIA:");
        Serial.println("");

        String id_ = bd.selectVitima(id_device);
        
        id = atoi(id_.c_str());

        delay(500);
        Serial.println("-------------------------------------------------------------------");
        Serial.println("\nEXIBINDO DADOS DA VITIMA:");
        Serial.println("");
        Serial.println("id: " + String(id));
        Serial.println("\n-------------------------------------------------------------------");
        Serial.println("");
    }

    //Getter do id da vitima
    public: int getId()
    {
        return id;  
    }
};

//=========================================================================

 //Classe Denúncia
class Denuncia
{
    // Variáveis da classe
    protected: double latitude  = 0;
    protected: double longitude = 0;

    //Construtor
    public: 
      Denuncia()
      {
          //Inicializa a classe
      }

    //Função que irá pegar as coordenadas do dispositivo
    void getCoordinates()
    {
        Serial.println();
        while (Serial2.available() > 0)
          if (gps.encode(Serial2.read()))
          
        if (millis() > 5000 && gps.charsProcessed() < 10)
        {
            Serial.println(F("Sem sinal de GPS: Verifique a conexão."));
        }
          
        if(locate.testGPS())
        {          
              latitude = locate.getLatitude();
              longitude = locate.getLongitude();
              Serial.println("Latitude: " + String(latitude, 8));
              Serial.println("Longitude: " + String(longitude, 8));
              Serial.println("");
        }
    }

    //Função que irá realizar a denúncia 
    void setReport(User victim)
    {
        led.Azul();
        bd.insertReport(victim.getId(), latitude, longitude);
    }
};

//=========================================================================


// Declarando objetos de instância para cada classe:
Dispositivo device;
User victim;
Denuncia report;

//=========================================================================
