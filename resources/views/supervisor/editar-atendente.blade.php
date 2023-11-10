<x-app-layout>
    <div class="bg-gradient-to-b from-rose-500 to-rose-50 to-70% tall-0:py-44 tall-1000:py-96 ">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form method="POST" action="{{ route('supervisor.atendente-update', $attendant->id) }}">
                        @csrf
                        @method('patch')
                        <div class="align-center text-center">
                            <p class="font-extrabold md:text-4xl mt-5 text-3xl text-black">Editar Atendente</p>
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

                        <div class="grid grid-cols-2 gap-4 mt-7 mb-5">
                            <div class="sm:col-span-1 col-span-2">
                                <div>
                                    <x-text-input id="name" type="text" name="name" placeholder="Nome" :value="$attendant->name" required autofocus autocomplete="name" />
                                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                </div>
                            </div>
                            <div class="sm:col-span-1 col-span-2">
                                <div>
                                    <x-text-input id="lastname" type="text" name="lastname" placeholder="Sobrenome" :value="$attendant->lastname" required autofocus autocomplete="lastname" />
                                    <x-input-error :messages="$errors->get('lastname')" class="mt-2" />
                                </div>
                            </div>
                            <div class="sm:col-span-1 col-span-2">
                                <div>
                                    <x-text-input id="username" type="text" name="username" placeholder="Nome de Usuário" :value="$attendant->username" required autofocus autocomplete="username" />
                                    <x-input-error :messages="$errors->get('username')" class="mt-2" />
                                </div>
                            </div>
                            <div class="sm:col-span-1 col-span-2">
                                <div>
                                    <x-text-input id="birthday" type="date" name="birthday" placeholder="Data de Nascimento" :value="$attendant->birthday" required autocomplete="2005-12-19" />
                                    <x-input-error :messages="$errors->get('birthday')" class="mt-2" />
                                </div>
                            </div>
                        </div>

                        <div class="grid grid-cols-1 gap-4 mb-4">
                            <div>
                                <x-text-input id="email" type="email" name="email" placeholder="E-mail do Atendente" :value="$attendant->email" required autocomplete="email" />
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>
                        </div>    

                        
                        <div class="flex flex-col items-center mb-5">     
                            <button class="bg-red-500 block border-2 border-red-500 hover:bg-red-600 font-bold p-2.5 rounded text-lg text-white w-8/12 mt-5">
                                Editar
                            </button>       
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
