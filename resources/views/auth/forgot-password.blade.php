<x-guest-layout>
    <div class="bg-white overflow-hidden rounded-xl shadow-lg mx-5">
        <!-- Session Status -->
        @if (!empty(session('status')))   
            <div x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
                class="flex items-center bg-red-500 text-white text-sm font-bold px-3 py-1 mt-5 rounded" role="alert">
                <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.432 0c1.34 0 2.01.912 2.01 1.957 0 1.305-1.164 2.512-2.679 2.512-1.269 0-2.009-.75-1.974-1.99C9.789 1.436 10.67 0 12.432 0zM8.309 20c-1.058 0-1.833-.652-1.093-3.524l1.214-5.092c.211-.814.246-1.141 0-1.141-.317 0-1.689.562-2.502 1.117l-.528-.88c2.572-2.186 5.531-3.467 6.801-3.467 1.057 0 1.233 1.273.705 3.23l-1.391 5.352c-.246.945-.141 1.271.106 1.271.317 0 1.357-.392 2.379-1.207l.6.814C12.098 19.02 9.365 20 8.309 20z"/></svg>
                <p class="m-2 text-lg font-medium leading-tight text-white">
                    {{ session('status') }}
                </p>
            </div>
        @endif

        <form method="POST" action="{{ route('password.email') }}" class="p-10">
            @csrf

            <div class="align-center text-center">
                <p class="font-extrabold md:text-4xl text-3xl text-black mt-3">Redefinir Senha</p>
                <p class="font-medium md:text-lg mt-1 px-4 text-gray-700 text-lg">
                  Identifique-se para que uma nova chave<br> 
                  de autenticação seja enviada
                  ao seu e-mail.
                </p>
                <br>
            </div>
            <!-- Email Address -->
            <div>
                <x-text-input id="email" class="block mt-6 w-full font-normal p-2.5 text-base bg-gray-50 border-2 border-gray-500 mb-12" type="email" name="email" placeholder="E-mail" :value="old('email')" required autofocus />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <button class="bg-red-500 block font-bold p-2.5 rounded text-lg text-white w-full hover:bg-red-600">
                    Enviar
                </button>
            </div>
        </form>
    </div>    
</x-guest-layout>
