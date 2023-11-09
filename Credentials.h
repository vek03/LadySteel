//=============================================================================

//Arquivo de variáveis de conexão do Servidor e constantes globais
//Credentials.h

//=============================================================================

#ifndef Credentials_h

  //Definições
  #define Credentials_h
  #define MYSQL_DEBUG_PORT      Serial
  #define _MYSQL_LOGLEVEL_      1
  
  //BD
  char user[]               = "BD_USER";                      // usuario MySQL
  char password[]           = "BD_PASSWORD";                  // senha MySQL
  char server[]             = "BD_HOST";                      // url do servidor
  char default_database[]   = "BD_NAME";                      // nome do bd
  uint16_t server_port      = 3306;                           // porta MySQL
  
  //QUERY
  unsigned long QUERY_POPULATION = 800000;              
  char query[128];
  
  //INTERVALO DE ATUALIZAÇÃO DE STATUS
  unsigned long previousMillis = 0;   // tempo de inicio
  const long intervalo = 1800000;    // intervalo em milissegundos

#endif    //Credentials_h
