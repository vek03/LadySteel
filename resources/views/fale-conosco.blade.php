<x-app-layout>
  <div class="bg-gradient-to-tl from-rose-500 from-5% via-rose-100 via-50% to-rose-500 to-100%">
    <header class="dpx-1.5 grid h-full place-items-center">
      <div class="px-1 md:py-24 py-10">
        <div class="bg-white gap-x-1 grid grid-cols-1 max-w-md md:grid-cols-2 md:max-w-screen-md md:py-8 md:px-0 px-8 md:pt-18 pt-5 mx-auto overflow-hidden rounded-xl">
          <div class="md:flex md:pl-5 md:pt-9 mx-auto pt-3">
            <div class="text-center">
              <img class="md:w-4/6 mx-auto w-40 contrast-150" src="{{ asset('img//logos/logoQuatro.png') }}">
              <br>
            </div>
          </div>
          <div class="md:flex place-items-center">
            <div class="align-center text-center">
              <div class="md:pr-12">
                <p class="font-extrabold md:text-4xl mt-4 px-10 text-3xl text-black">
                  Fale Conosco
                </p>
                <p class="font-medium md:text-xl mt-1 px-4 text-gray-700 text-lg">
                  Para entrar em contato conosco,<br>
                  preencha o formulário:
                </p>
                <br>
              </div>

              <form action="{{ route('send') }}" method="post" class="md:pr-12 px-3">
                @csrf
                @if (!empty(session('status')))   
                <div x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
                    class="flex items-center bg-red-500 text-white text-sm font-bold px-3 py-1 mt-5 rounded" role="alert">
                    <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.432 0c1.34 0 2.01.912 2.01 1.957 0 1.305-1.164 2.512-2.679 2.512-1.269 0-2.009-.75-1.974-1.99C9.789 1.436 10.67 0 12.432 0zM8.309 20c-1.058 0-1.833-.652-1.093-3.524l1.214-5.092c.211-.814.246-1.141 0-1.141-.317 0-1.689.562-2.502 1.117l-.528-.88c2.572-2.186 5.531-3.467 6.801-3.467 1.057 0 1.233 1.273.705 3.23l-1.391 5.352c-.246.945-.141 1.271.106 1.271.317 0 1.357-.392 2.379-1.207l.6.814C12.098 19.02 9.365 20 8.309 20z"/></svg>
                    <p class="m-2 text-lg font-medium leading-tight text-white">
                        {{ session('status') }}
                    </p>
                </div>
                @endif
                <div class="mb-8">
                  <input type="text" id="name" name="name" class="bg-gray-50 block border-2 border-gray-400 font-normal p-2.5 rounded text-base text-gray-900 w-full shadow-sm focus:outline-none focus:ring focus:ring-rose-200 focus:border-rose-500" placeholder="Nome" required>
                </div>
                <div class="mb-8">
                  <input type="email" id="email" name="email" class="bg-gray-50 block border-2 border-gray-400 font-normal p-2.5 rounded text-base text-gray-900 w-full shadow-sm focus:outline-none focus:ring focus:ring-rose-200 focus:border-rose-500" placeholder="E-mail" required>
                </div>
                <div class="mb-8">
                  <textarea type="text" id="message" name="message" rows="3" class="bg-gray-50 block border-2 border-gray-400 font-normal p-2.5 rounded text-base text-gray-900 w-full shadow-sm focus:outline-none focus:ring focus:ring-rose-200 focus:border-rose-500" placeholder="Mensagem" required></textarea>
                </div>
                <div class="mb-8">
                  <button type="submit" class="bg-red-500 block border-2 border-red-500 hover:bg-red-600 font-bold p-2.5 rounded text-lg text-white w-full">
                    Enviar
                  </button>
                </div>
              </form>

            </div>
          </div>
        </div>
      </div>
    </header>
  </div>
</x-app-layout>