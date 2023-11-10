<x-guest-layout>
    <div class="bg-white md:max-w-screen-md py-4 px-8 md:pt-18 pt-5 rounded-xl m-5 md:m-0 md:my-4">
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="align-center text-center">
                <p class="font-extrabold md:text-4xl text-3xl text-black">Cadastre-se</p>
            </div>


            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4 mb-4">
                <!-- Nome -->
                <div>
                    <div>
                        <x-input-label for="name" :value="__('Nome')" />
                        <x-text-input id="name" type="text" name="name" placeholder="Nome" :value="old('name')" required autofocus autocomplete="name" />
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>
                </div>

                <!-- Sobrenome -->
                <div>
                    <div>
                        <x-input-label for="lastname" :value="__('Sobrenome')" />
                        <x-text-input id="lastname" type="text" name="lastname" placeholder="Sobrenome" :value="old('lastname')" required autofocus autocomplete="lastname" />
                        <x-input-error :messages="$errors->get('lastname')" class="mt-2" />
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-1 gap-4 mt-4">
                <!-- Username -->
                <div class="">
                    <div>
                        <x-input-label for="username" :value="__('Usuário')" />
                        <x-text-input id="username" type="text" name="username" placeholder="Nome de Usuário" :value="old('username')" required autofocus autocomplete="username" />
                        <x-input-error :messages="$errors->get('username')" class="mt-2" />
                    </div>
                </div>

                <!-- Email -->
                <div class="">
                    <x-input-label for="email" :value="__('E-mail')" />
                    <x-text-input id="email" type="email" name="email" placeholder="E-mail" :value="old('email')" required autocomplete="email" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                <!-- Senha -->
                <div>
                    <div class="relative">
                        <x-input-label for="password" :value="__('Senha')" />
                        <x-text-input id="password" type="password" name="password" placeholder="Senha" required autocomplete="password" />
                        <button type="button" class="absolute top-[30%] right-0   p-3 text-sm font-medium text-black">
                            <svg id="ver_senha" type="button" onclick="mostrarSenha('password', 'eye')" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6  cursor-pointer">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                <path id="eye" stroke-linecap="round" stroke-linejoin="round" d="M3.98 8.223A10.477 10.477 0 001.934 12C3.226 16.338 7.244 19.5 12 19.5c.993 0 1.953-.138 2.863-.395M6.228 6.228A10.45 10.45 0 0112 4.5c4.756 0 8.773 3.162 10.065 7.498a10.523 10.523 0 01-4.293 5.774M6.228 6.228L3 3m3.228 3.228l3.65 3.65m7.894 7.894L21 21m-3.228-3.228l-3.65-3.65m0 0a3 3 0 10-4.243-4.243m4.242 4.242L9.88 9.88"/>
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                        </button>
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>
                </div>

                <!-- Confirma Senha -->
                <div>
                    <div class="relative">
                        <x-input-label for="password_confirmation" :value="__('Confirmar Senha')" />
                        <x-text-input id="password_confirmation" type="password" name="password_confirmation" placeholder="Confirmar senha" required autocomplete="password" />
                        <button type="button" class="absolute top-[30%] right-0  p-3 text-sm font-medium text-black">
                            <svg id="ver_senha" type="button" onclick="mostrarSenha('password_confirmation', 'eye2')" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6  cursor-pointer">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                <path id="eye2" stroke-linecap="round" stroke-linejoin="round" d="M3.98 8.223A10.477 10.477 0 001.934 12C3.226 16.338 7.244 19.5 12 19.5c.993 0 1.953-.138 2.863-.395M6.228 6.228A10.45 10.45 0 0112 4.5c4.756 0 8.773 3.162 10.065 7.498a10.523 10.523 0 01-4.293 5.774M6.228 6.228L3 3m3.228 3.228l3.65 3.65m7.894 7.894L21 21m-3.228-3.228l-3.65-3.65m0 0a3 3 0 10-4.243-4.243m4.242 4.242L9.88 9.88"/>
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                        </button>
                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                    </div>
                </div>

            
                <!-- Data de nascimento -->
                <div>
                    <div>
                        <x-input-label for="birthday" :value="__('Data de Nascimento')" />
                        <x-text-input id="birthday" type="date" name="birthday" :value="old('birthday')" required autofocus autocomplete="birthday" />
                        <x-input-error :messages="$errors->get('birthday')" class="mt-2" />
                    </div>
                </div>

                <!-- Id do Dispositivo -->
                <div>
                    <div>
                        <x-input-label for="id_device" :value="__('ID do Dispositivo')" />
                        <x-text-input id="id_device" type="number" name="id_device" :value="old('id_device')" required autofocus autocomplete="id_device"/>
                        <x-input-error :messages="$errors->get('id_device')" class="mt-2" />
                        <p class="text-gray-600 text-sm text-center">Número que está no dispositivo.</p>
                    </div>
                </div>

                <!-- Contato 1 -->
                <div>
                    <x-input-label for="contact" :value="__('Contato Emergencial 1')" />
                    <x-text-input id="contact" type="number" name="contact" minlength="11" maxlength="11" placeholder="( __ ) _______-______" :value="old('contact')" required autofocus autocomplete="contact" />
                    <x-input-error :messages="$errors->get('contact')" class="mt-2" />
                </div>

                <!-- Contato 2 -->
                <div>
                    <x-input-label for="contact2" :value="__('Contato Emergencial 2')" />
                    <x-text-input id="contact2" type="number" name="contact2" minlength="11" maxlength="11" placeholder="( __ ) _______-______" :value="old('contact2')" required autofocus autocomplete="contact2" />
                    <x-input-error :messages="$errors->get('contact2')" class="mt-2" />
                </div>

            </div>

            <!-- Mensagem -->
            <div class="grid grid-cols-1 gap-4">
                <div class="mt-4">
                    <x-input-label for="message" :value="__('Mensagem Automática')" />
                    <div class="mb-8">
                        <textarea id="message" name="message" rows="3" class="bg-gray-50 block border-2 border-gray-400 font-normal p-2.5 rounded text-base text-gray-900 w-full focus:outline-none focus:ring focus:ring-rose-200 focus:border-rose-500 drop-shadow-md" required></textarea>
                        <p class="text-gray-600 text-sm text-center">Essa mensagem será encaminhada aos seus contatos emergenciais <br> caso você realize uma denúncia.</p>
                    </div>
                    <x-input-error :messages="$errors->get('message')" class="mt-2" />
                </div>
            </div>

            <div class="flex flex-col items-center">
                <button class="bg-red-500 block border-2 border-red-500 hover:bg-red-600 font-bold p-2.5 rounded text-lg text-white w-9/12">
                    Criar Cadastro
                </button>
            </div>
        </form>
    </div>
</x-guest-layout>