//=============================================================================

//Arquivo das classes dos componentes
//LED, Button, GPS e SIM

//=============================================================================

//Classe LED
class LED
{
    // Variáveis da classe
    int vermelho;    //Atribui o valor da variável vermelho
    int verde;    //Atribui o valor da variável verde
    int azul;    //Atribui o valor da variável azul

    //Construtor
    public: 
      LED(int r, int g, int b)
      {
        vermelho = r;
        verde = g;
        azul = b;
        pinMode(vermelho, OUTPUT);  //Define a variável vermelho como saída
        pinMode(verde, OUTPUT);     //Define a variável verde como saída
        pinMode(azul, OUTPUT);      //Define a variável azul como saída
      }

    //Função que liga o LED vermelho
    void Vermelho() {
      digitalWrite(vermelho, HIGH);//Coloca vermelho em nível alto
      delay(1000);
      digitalWrite(vermelho, LOW);//Coloca vermelho em nível baixo
      delay(1000);
    }

    //Função que liga o LED verde
    void Verde() {
      digitalWrite(verde, HIGH);//Coloca verde em nível alto
      delay(1000);
      digitalWrite(verde, LOW);//Coloca verde em nível baixo
      delay(1000);
    }

    //Função que liga o LED azul
    void Azul() {
      digitalWrite(azul, HIGH);//Coloca azul em nível alto
      delay(1000);
      digitalWrite(azul, LOW);//Coloca azul em nível baixo
      delay(1000);
    }

    //Função que liga o LED branco
    void Branco() {
      digitalWrite(azul, HIGH);//Coloca azul em nível alto
      digitalWrite(vermelho, HIGH);//Coloca vermelho em nível alto
      digitalWrite(verde, HIGH);//Coloca verde em nível alto
      delay(1000);
      digitalWrite(azul, LOW);//Coloca azul em nível baixo
      digitalWrite(vermelho, LOW);//Coloca vermelho em nível baixo
      digitalWrite(verde, LOW);//Coloca verde em nível baixo
      delay(1000);
    }

    //Função que liga o LED magenta
    void Magenta() {
      digitalWrite(azul, HIGH);//Coloca azul em nível alto
      digitalWrite(vermelho, HIGH);//Coloca vermelho em nível alto
      delay(1000);
      digitalWrite(azul, LOW);//Coloca azul em nível baixo
      digitalWrite(vermelho, LOW);//Coloca vermelho em nível baixo
      delay(1000);
    }

    //Função que liga o LED amarelo
    void Amarelo() {
      digitalWrite(verde, HIGH);//Coloca verde em nível alto
      digitalWrite(vermelho, HIGH);//Coloca vermelho em nível alto
      delay(1000);
      digitalWrite(verde, LOW);//Coloca verde em nível baixo
      digitalWrite(vermelho, LOW);//Coloca vermelho em nível baixo
      delay(1000);
    }

    //Função que liga o LED ciano
    void Ciano() {
      digitalWrite(verde, HIGH);//Coloca verde em nível alto
      digitalWrite(azul, HIGH);//Coloca azul em nível baixo alto
      delay(1000);
      digitalWrite(verde, LOW);//Coloca verde em nível baixo
      digitalWrite(azul, LOW);//Coloca azul  em nível baixo
      delay(1000);
    }
};

//=============================================================================

// Classe Botão
class Button
{
    // Variáveis da classe
    public: int buttonPin;              //Define botão no pino digital
    public: int estadoButton  = 0;      //Variável responsável por armazenar o estado do botão (ligado/desligado)

    //Construtor
    public: 
      Button(int pin)
      {
          buttonPin = pin;
          pinMode(buttonPin , INPUT);  //Define o botão como entrada
      }
};

//=============================================================================

//Classe GPS
class GPS
{
    //Construtor  
    public: 
      GPS()
      {
          //Inicializa a classe
      }

    //Função que retorna a latitude
    double getLatitude()
    {
        return gps.location.lat();
    }

    //Função que retorna a longitude
    double getLongitude()
    {
        return gps.location.lng();
    }

    //Função que testa o GPS
    double testGPS()
    {
        return gps.location.isValid();
    }
};

//=============================================================================

// Declarando objetos de instância para cada classe:
LED led(5, 4, 2);
Button button(18);
GPS locate;

//=========================================================================
