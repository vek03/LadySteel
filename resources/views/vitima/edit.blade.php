<x-guest-layout>
    <div class="bg-white md:max-w-screen-md py-4 px-8 md:pt-18 pt-5 rounded-xl m-5 md:m-0 md:my-4">
        <form method="POST" class="space-x-2" action="{{ route('vitima.update') }}">
            @csrf
            @method('patch')
            <div class="align-center text-center">
                <p class="font-extrabold md:text-4xl text-3xl text-black">Editar Informações</p>
            </div>    
            @if (!empty(session('status')))   
                <div x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
                    class="flex items-center bg-red-500 text-white text-sm font-bold px-3 py-1 mt-5 rounded" role="alert">
                    <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.432 0c1.34 0 2.01.912 2.01 1.957 0 1.305-1.164 2.512-2.679 2.512-1.269 0-2.009-.75-1.974-1.99C9.789 1.436 10.67 0 12.432 0zM8.309 20c-1.058 0-1.833-.652-1.093-3.524l1.214-5.092c.211-.814.246-1.141 0-1.141-.317 0-1.689.562-2.502 1.117l-.528-.88c2.572-2.186 5.531-3.467 6.801-3.467 1.057 0 1.233 1.273.705 3.23l-1.391 5.352c-.246.945-.141 1.271.106 1.271.317 0 1.357-.392 2.379-1.207l.6.814C12.098 19.02 9.365 20 8.309 20z"/></svg>
                    <p class="m-2 text-lg font-medium leading-tight text-white">
                        {{ session('status') }}
                    </p>
                </div>
            @endif
            <div class="grid grid-cols-2 gap-4 mt-4 mb-4">
                <!-- Nome -->
                <div class="sm:col-span-1 col-span-2 ">
                    <div>
                        <x-input-label for="name" :value="__('Nome')" />
                        <x-text-input id="name" type="text" name="name" placeholder="Ex: Alex" :value="Auth::user()->name" required autofocus autocomplete="name" />
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>
                </div>   

               <!-- Sobrenome -->
                <div class="sm:col-span-1 col-span-2 ">
                    <x-input-label for="lastname" :value="__('Sobrenome')" />
                    <x-text-input id="lastname" type="text" name="lastname" placeholder="Ex: Silva" :value="Auth::user()->lastname" required autofocus autocomplete="lastname" />
                    <x-input-error :messages="$errors->get('lastname')" class="mt-2" />
                </div>
            
              
                <!-- Username -->
                <div class="sm:col-span-1 col-span-2 ">
                    <x-input-label for="username" :value="__('Usuário')" />
                    <x-text-input id="username" type="text" name="username" placeholder="Ex: @user" :value="Auth::user()->username" required autofocus autocomplete="username" />
                    <x-input-error :messages="$errors->get('username')" class="mt-2" />
                </div>  

               <!-- Senha -->
                <div class="sm:col-span-1 col-span-2 ">
                    <x-input-label for="password" :value="__('Senha')" />
                    <x-text-input id="password" disabled type="password" name="password" placeholder="Senha" value="aaaaaaaaaaa" required autofocus autocomplete="password" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                 <!-- Email -->
                <div class="col-span-2">
                    <div>
                        <x-input-label for="email" :value="__('Email')" />
                        <x-text-input id="email" type="email" name="email" placeholder="Ex: example@example.com" :value="Auth::user()->email" required autocomplete="email" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>
                </div> 
            </div>    
           

            <div class="grid grid-cols-2 gap-4">
                <!-- Data de nascimento -->
                <div class="sm:col-span-1 col-span-2 ">
                    <div>
                        <x-input-label for="birthday" :value="__('Data de Nascimento')" />
                        <x-text-input id="birthday" type="date" name="birthday" placeholder="___ / ___ / _____" :value="Auth::user()->birthday" required autofocus autocomplete="birthday" />
                        <x-input-error :messages="$errors->get('birthday')" class="mt-2" />
                    </div>
                </div>  

                <!-- Id do dispositivo --> 
                <div class="sm:col-span-1 col-span-2 ">
                    <div>
                        <x-input-label for="id_device" :value="__('ID do Dispositivo')" />
                        <x-text-input id="id_device" type="number" name="id_device" :value="Auth::user()->id_device" required autofocus autocomplete="id_device" />
                        <x-input-error :messages="$errors->get('id_device')" class="mt-2" />
                    </div>
                </div>

                <!-- Contato 1 --> 
                <div class="sm:col-span-1 col-span-2 ">
                    <x-input-label for="contact" :value="__('Contato Emergencial 1')" />
                    <x-text-input id="contact" type="number" name="contact" placeholder="Ex: 11912341234" :value="Auth::user()->contacts()->first()->contact"  autofocus autocomplete="contact" />
                    <x-input-error :messages="$errors->get('contact')" class="mt-2" />
                </div>

                <!-- Contato 2 --> 
                <div class="sm:col-span-1 col-span-2 ">
                    <x-input-label for="contact2" :value="__('Contato Emergencial 2')" />
                    <x-text-input id="contact2" type="number" name="contact2" placeholder="Ex: 11912341234" :value="Auth::user()->contacts()->orderBy('contact', 'desc')->first()->contact"  autofocus autocomplete="contact2" />
                    <x-input-error :messages="$errors->get('contact2')" class="mt-2" />
                </div>
            </div>

            <!-- Mensagem -->
            <div class="grid grid-cols-1 gap-4">
                <div class="mt-4">
                    <x-input-label for="message" :value="__('Mensagem de Emergência')" />
                    <div class="mb-8">
                        <textarea id="message" name="message" rows="3" class="bg-gray-50 block border-2 border-gray-400 font-normal p-2.5 rounded text-base text-gray-900 w-full focus:outline-none focus:ring focus:ring-rose-200 focus:border-rose-500 drop-shadow-md" required>{{ Auth::user()->message }}</textarea>   
                        <p class="text-gray-600 text-sm text-center">Essa mensagem será encaminhada aos seus contatos emergenciais <br> caso você realize uma denúncia.</p>
                    </div>
                    <x-input-error :messages="$errors->get('message')" class="mt-2" />
                </div>
            </div>   

            <div class="flex flex-col items-center">     
                <button class="bg-red-500 block border-2 border-red-500 hover:bg-red-600 font-bold p-2.5 rounded text-lg text-white w-9/12">
                    Atualizar Informações
                </button>       
            </div>
        </form>
    </div>
</x-guest-layout>


