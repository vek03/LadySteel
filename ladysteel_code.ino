// Código do LadySteel
// Dispositivo disfarçado emissor de denúncias de violência doméstica
// Integrantes: João Pedro Cabral, Mariane Souza e Victor Cardoso

//=========================================================================

// Bibliotecas Incluídas:
#include <WiFiManager.h>

#include <MySQL_Generic.h>
#include <TinyGPSPlus.h>
#include <iomanip>
#include <iostream>
#include <string>

// Declaração de local do std
using namespace std;

//Instanciando objetos das bibliotecas
TinyGPSPlus gps;
MySQL_Connection conn((Client *)&client);
MySQL_Query *query_mem;

//Incluindo Abas
#include "Credentials.h"
#include "Components.h"
#include "Server.h"
#include "Class.h"

//=========================================================================

//Função padrão que inicia as demais
void setup() 
{ 
    led.Verde();
    
    Serial.begin(115200);
    Serial2.begin(9600);

    delay(3000);
    
    Serial.println("====================================================================");
    Serial.println("\nINICIANDO LADYSTEEL NO ESP32...\n");
    delay(1000);  
    geral.conect_wifi();
    bd.server_conect();
    
    device.activate();
    victim.getVitimaEsp(device.getId());
    device.updatedAt();

    MYSQL_DISPLAY("====================================================================");
    delay(3000);
} 

//=========================================================================

//Função padrão que será executada em loop
void loop() 
{ 
    MYSQL_DISPLAY("Iniciando Loop...");

    //Pegando coordenadas atuais
    report.getCoordinates();

    //Testando Wifi
    geral.test_wifi();

    //Testando Conexão com Servidor
    bd.test_server();

    //Se o botão for pressionado:
    if (digitalRead(button.buttonPin)) 
    {
        report.setReport(victim);
    }

    //Atribui quanto tempo se decorreu desde o setup
    unsigned long currentMillis = millis();
  
    //Se o dispositivo estiver ligado a mais de 12 horas, atualiza o status
    if(currentMillis - previousMillis > intervalo)
    {
        device.updatedAt(); 
              
        previousMillis = currentMillis;
    }

    if(locate.testGPS())
     {
        led.Magenta();
        MYSQL_DISPLAY("\nGPS ON.");
     }
     else
     {4
        MYSQL_DISPLAY("\nGPS OFF...");
        led.Branco();
     }

     MYSQL_DISPLAY("\nFinalizando Loop...");
     MYSQL_DISPLAY("================================================");
}

//=========================================================================
