<x-disfarce-layout>                   
    <div class="bg-gradient-to-tl from-rose-500 from-5% via-rose-50 via-50% to-rose-500 to-90%">
      <header class="grid md:pt-20 pt-12 place-items-center md:px-0 px-5 md:pb-20 pb-20">
        <img class="img-header md:w-1/2 w-90 contrast-150" src="{{ asset('img/logos/soulFlyDois.png') }}">
        <div class="bg-white border-2 border-black info max-w-md md:max-w-5xl mx-auto overflow-hidden rounded-xl shadow-md">
          <div class="md:flex">
            <div class="px-12 py-8">
              <a target="_blank" class="block font-semibold leading-tight mt-2 md:text-2xl text-xl text-black text-justify ">
                Fazendo história e arrasando corações desde 1923, a SoulFly tem o prazer de atender clientes de diferentes países e nacionalidades, levando sempre em conta sua cultura e paladar.<span class="hover:text-rose-500"> Porque, o que não pode faltar nesse imenso banquete, é o amor em compartilhar momentos e sabores!</span>
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
                <img class="h-12 info w-12 hover:w-14 hover:h-14" src="{{ asset('img/icons/cerejas.png') }}">
              </button>
              <p class="font-medium mt-5 text-xl hover:text-red-400">
                Utilizamos sempre ingredientes frescos e de primeira qualidade em nossas deliciosas receitas. 
                <br>
                
              </p>
              <br>
            </div>
          </div>

          <div class="md:flex">
            <div class="text-center">
              <button class="bg-red-500 duration-500 hover:bg-red-400 mx-2 navbar-btn px-3 py-3 rounded-full">
                <img class="h-12 info w-12 hover:w-14 hover:h-14" src="{{ asset('img/icons/trofeu.png') }}">
              </button>
              <p class="font-medium mt-5 text-xl hover:text-red-400">
                Desenvolvemos receitas exclusivas e inovadoras na SoulFly, com direito à prêmios internacionais.
                <br>
               
              </p>
              <br>
            </div>
          </div>

          <div class="md:flex">
            <div class="text-center">
              <button class="bg-red-500 duration-500 hover:bg-red-400 mx-2 navbar-btn px-3 py-3 rounded-full">
                <img class="h-12 info w-12 hover:w-14 hover:h-14" src="{{ asset('img/icons/party.png') }}">
              </button>
              <p class="font-medium mt-5 text-xl hover:text-red-400">
                Todo ano, a SoulFly proporciona um belo festival com as suas mais célebres sobremesas do cardápio VIP.     
                <br>
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
                <a href="@if (!Auth::user()) {{ route('index') }} @else {{ route('dashboard') }} @endif">
                  <button class="bg-red-300 duration-500 mx-2 navbar-btn px-3 py-3 rounded-full">
                    <img class="h-14 info w-14 rotate" src="{{ asset('img/icons/bolo.png') }}">
                  </button>
                </a>
              </div>
              <br>
              <h1 class="font-bold md:text-5xl text-2xl text-black text-center"><strong>"Prefiro comer bem, é o que você leva da vida!"</strong>
                <br><br>
                <strong class="font-semibold md:text-4xl text-black text-xl">
                  — Palmirinha
                </strong>
              </h1>
            </div>
          </div>
        </div>
      </div>
    </div>
</x-disfarce-layout>