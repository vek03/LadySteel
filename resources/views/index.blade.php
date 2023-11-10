<x-app-layout>                   
    <div class="bg-gradient-to-tl from-rose-500 from-5% via-rose-50 via-50% to-rose-500 to-90%">
      <header class="grid md:pt-20 pt-12 place-items-center md:px-0 px-5 md:pb-20 pb-20">
        <img class="img-header md:w-1/2 w-90 contrast-150" src="{{ asset('img/logos/logoDois.png') }}">
        <div class="bg-white border-2 border-black info max-w-md md:max-w-5xl mx-auto overflow-hidden rounded-xl shadow-md">
          <div class="md:flex">
            <div class="px-12 py-8">
              <a href="http://www.planalto.gov.br/ccivil_03/_ato2004-2006/2006/lei/l11340.htm" target="_blank" class="block font-semibold leading-tight mt-2 md:text-2xl text-xl text-black text-justify ">
                A violência doméstica contra a mulher é definida no artigo 5º da
                Lei
                11.340/2006 de 7 de agosto de 2006 como <span class="hover:text-rose-500">“qualquer ação ou omissão
                baseada no gênero que lhe cause morte, lesão, sofrimento físico,
                sexual ou
                psicológico e dano moral ou patrimonial”</span>.
              </a>
            </div>
          </div>
        </div>
      </header>
    </div>  

    <div class="px-1.5">
      <div class="bg-white md:py-20 py-7 md:px-0 px-5">
        <div class="bg-rose-100 grid grid-cols-1 info-two max-w-md md:grid-cols-3 md:max-w-6xl mx-auto overflow-hidden px-12 py-12 rounded-xl shadow-md">

          <div class="md:flex">
            <div class="text-center">
              <button class="bg-red-500 duration-500 hover:bg-red-400 mx-2 navbar-btn px-3 py-3 rounded-full">
                <img class="h-12 info w-12 hover:w-14 hover:h-14" src="{{ asset('img/icons/globe.png') }}">
              </button>
              <p class="font-medium mt-5 text-xl hover:text-red-400">
                No 1º semestre de 2022, o Brasil registrou mais de 31 mil
                denúncias envolvendo violência doméstica contra a mulher. 
                <br>
                <a href="https://www.gov.br/mdh/pt-br/assuntos/noticias/2022/eleicoes-2022-periodo-eleitoral/brasil-tem-mais-de-31-mil-denuncias-violencia-contra-as-mulheres-no-contexto-de-violencia-domestica-ou-familiar" target="_blank">
                  <strong class="text-red-500 hover:text-red-600">Saiba mais</strong>
                </a>
              </p>
              <br>
            </div>
          </div>

          <div class="md:flex">
            <div class="text-center">
              <button class="bg-red-500 duration-500 hover:bg-red-400 mx-2 navbar-btn px-3 py-3 rounded-full">
                <img class="h-12 info w-12 hover:w-14 hover:h-14" src="{{ asset('img/icons/warning.png') }}">
              </button>
              <p class="font-medium mt-5 text-xl hover:text-red-400">
                O Brasil ocupa o 5º lugar <br> no Ranking Mundial de Feminicídio.
                <br>
                <a href="https://unale.org.br/violencia-contra-a-mulher-brasil-e-o-5o-pais-com-maior-numero-de-feminicidio/#:~:text=Dados%20da%20Organiza%C3%A7%C3%A3o%20Mundial%20da,Guatemala%20e%20da%20Federa%C3%A7%C3%A3o%20Russa." target="_blank">
                  <strong class="text-red-500 hover:text-red-600">Saiba mais</strong>
                </a>
              </p>
              <br>
            </div>
          </div>

          <div class="md:flex">
            <div class="text-center">
              <button class="bg-red-500 duration-500 hover:bg-red-400 mx-2 navbar-btn px-3 py-3 rounded-full">
                <img class="h-12 info w-12 hover:w-14 hover:h-14" src="{{ asset('img/icons/hourglass.png') }}">
              </button>
              <p class="font-medium mt-5 text-xl hover:text-red-400">
                Cerca de 5 mulheres são <br> espancadas a cada 2 minutos; sendo
                seu parceiro responsável por mais de 80% dos casos. 
                <br>
                <a href="https://dossies.agenciapatriciagalvao.org.br/violencia/pesquisa/pesquisa-mulheres-brasileiras-nos-espacos-publico-e-privado-fundacao-perseu-abramosesc-2010/" target="_blank">
                  <strong class="text-red-500 hover:text-red-600">Saiba mais</strong>
                </a>
              </p>
              <br>
            </div>
          </div>

        </div>
      </div>
    </div>

    
    <div class="bg-gradient-to-b  md:px-0 px-0">
      <div class="grid h-full header place-items-center px-1.5 py-16">
        <div class="bg-white border-4 border-white info max-w-md md:max-w-6xl mx-auto overflow-hidden rounded-xl shadow-md">
          <div class="md:flex">
            <div class="px-12 py-8">
              <div class="text-center">
                <a href="{{ route('disfarce') }}">
                  <button class="bg-red-500 duration-500 hover:bg-red-500 mx-2 navbar-btn px-3 py-3 rounded-full">
                    <img class="h-14 info w-14 rotate" src="{{ asset('img/icons/safe.png') }}">
                  </button>
                </a>
              </div>
              <br>
              <h1 class="font-bold md:text-5xl text-2xl text-black text-center"><strong>"A vida começa quando a violência acaba"</strong>
                <br><br>
                <strong class="font-semibold md:text-4xl text-black text-xl">
                  — Maria da Penha
                </strong>
              </h1>
            </div>
          </div>
        </div>
      </div>
    </div>
</x-app-layout>