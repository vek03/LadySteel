<x-guest-layout>
    <div class="bg-white overflow-hidden py-5 rounded-xl shadow-lg">
        <p class="font-extrabold md:pt-5 md:px-40 mt-4 pb-5 sm:px-36 px-28 md:text-4xl text-3xl text-black text-center">
            Login
        </p>
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

        <form method="POST" action="{{ route('login') }}">
            @csrf


            <!-- Email Address -->
            <div class="mt-9 px-8">
                <x-text-input id="email" class="block mt-1 w-full font-normal p-2.5 text-base bg-gray-50 border-2 border-gray-500" type="email" name="email" placeholder="E-mail" :value="old('email')" required autofocus autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="relative w-full mt-9 mb-8 px-8">
                <x-text-input id="password" class="block mt-1 w-full font-normal p-2.5 text-base bg-gray-50 border-2 border-gray-500" type="password" name="password" placeholder="Senha" required autocomplete="current-password" />
                <button type="button" class="absolute top-0 sm:right-[8%] right-[10%]  p-3 text-sm font-medium text-black">
                    <svg id="ver_senha" type="button" onclick="mostrarSenha('password', 'eye')" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6  cursor-pointer">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                        <path id="eye" stroke-linecap="round" stroke-linejoin="round" d="M3.98 8.223A10.477 10.477 0 001.934 12C3.226 16.338 7.244 19.5 12 19.5c.993 0 1.953-.138 2.863-.395M6.228 6.228A10.45 10.45 0 0112 4.5c4.756 0 8.773 3.162 10.065 7.498a10.523 10.523 0 01-4.293 5.774M6.228 6.228L3 3m3.228 3.228l3.65 3.65m7.894 7.894L21 21m-3.228-3.228l-3.65-3.65m0 0a3 3 0 10-4.243-4.243m4.242 4.242L9.88 9.88"/>
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                </button>
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                


                @if (Route::has('password.request'))
                <a class="grid-cols-3 flex justify-end text-sm text-red-500 hover:text-gray-900" href="{{ route('password.request') }}">
                    {{ __('Esqueceu a senha?') }}
                </a>
                @endif

                <!-- Remember Me -->
                <div class="block mt-4">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-red-500 shadow-sm focus:ring-red-500 hover:border-red-500" name="remember">
                        <span class="ml-2 text-sm text-gray-600">{{ __('Lembrar-se de mim') }}</span>
                    </label>
                </div>
            </div>

            <div class="flex flex-col items-center mb-5 px-8">
                <button class="bg-red-500 block font-bold p-2.5 rounded text-lg text-white w-full  hover:bg-red-600">
                    Entrar
                </button>
            </div>
        </form>
    </div>
</x-guest-layout>