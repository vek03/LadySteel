<x-app-layout>
    @inject('calendar', '\Carbon\Carbon')
    <header class="bg-rose-100 grid h-full place-items-center pt-12 px-1.5">
        <div class="pb-16 px-1 py-7 ">
            <div class="bg-white border-2 border-red-500 divide-red-500 grid grid-cols-1 info max-w-md lg:divide-x-2 lg:grid-cols-2 md:max-w-screen-xl mx-auto overflow-hidden py-8 rounded-xl">
                <div class="md:flex place-items-center">
                    <div class="align-center text-center">
                        <div class="md:px-32 px-4">
                            <p class="font-extrabold md:px-10 md:text-5xl mt-4 text-3xl text-black">
                                Meu Perfil
                            </p>
                            <div class="card md:my-10 my-5">
                                <img class="md:w-80 mx-auto rounded-full w-80" src="{{ asset( Auth::user()->img ) }}">
                                <button data-modal-target="defaultModal" data-modal-toggle="defaultModal" type="button">
                                    <div class="overlay rounded-full">
                                        <h1>
                                            <img src="{{ asset('img/icons/draw.png') }}" class="w-36">
                                        </h1>
                                    </div>
                                </button>    
                            </div>
                            <p class="font-bold md:text-4xl mt-4 text-2xl text-black">
                                {{Auth::user()->name}} {{Auth::user()->lastname}}
                            </p>
                            <p class="font-medium md:text-2xl mt-1 text-black text-xl">
                                {{Auth::user()->username}}
                            </p>
                            <br>
                        </div>
                    </div>
                </div>
                <div class="md:flex place-items-center justify-center">
                    <div class="align-center text-center">
                        <div class="px-6">
                            @if (!empty(session('status')))   
                            <div x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
                                class="flex items-center bg-red-500 text-white text-sm font-bold px-3 py-1 my-2 rounded" role="alert">
                                <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.432 0c1.34 0 2.01.912 2.01 1.957 0 1.305-1.164 2.512-2.679 2.512-1.269 0-2.009-.75-1.974-1.99C9.789 1.436 10.67 0 12.432 0zM8.309 20c-1.058 0-1.833-.652-1.093-3.524l1.214-5.092c.211-.814.246-1.141 0-1.141-.317 0-1.689.562-2.502 1.117l-.528-.88c2.572-2.186 5.531-3.467 6.801-3.467 1.057 0 1.233 1.273.705 3.23l-1.391 5.352c-.246.945-.141 1.271.106 1.271.317 0 1.357-.392 2.379-1.207l.6.814C12.098 19.02 9.365 20 8.309 20z"/></svg>
                                <p class="m-2 text-lg font-medium leading-tight text-white">
                                    {{ session('status') }}
                                </p>
                            </div>
                        @endif

                            <div class="font-semibold grid grid-cols-2 text-2xl text-red-500 w-full px-5 py-2">
                                <a href="{{ route('vitima.edit') }}" class="flex items-end justify-start cursor-pointer">
                                    <img src="{{ asset('img/icons/draw.png') }}" class="w-7 hover:w-8">
                                    <p class="max-[640px]:invisible hover:text-red-600">&nbsp;&nbsp;Editar</p>
                                </a>
                                @include('vitima.partials.inativar-vitima')
                            </div>
                            <hr class="border-1 border-red-500">
                        </div>
                        <div class="px-8">
                            <div>
                                <p class="font-medium md:text-3xl mt-3 pb-4 pt-5 text-black text-left text-xl">
                                    <strong>Email: </strong>{{ Auth::user()->email }}
                                </p>
                                
                                <p class="font-medium md:text-3xl mt-3 pb-4 text-black text-left text-xl">
                                    <strong>Data de Nascimento: </strong>{{ $calendar->parse(Auth::user()->birthday)->format('d/m/Y')}}

                                <p class="font-medium md:text-3xl  mt-3 pb-4 text-black text-left text-xl">
                                    <strong>ID Dispositivo: </strong>{{ Auth::user()->id_device}}
                                </p>
                                <div class="grid grid-cols-2">
                                    <p class="font-medium md:text-3xl  mt-3 pb-4 text-black text-left text-xl ml-0">
                                        <strong>Senha: </strong>••••••••
                                    </p>
                                    <a href="{{ route('vitima.edit-password') }}" class="flex items-center justify-end cursor-pointer">
                                        <img src="./img/icons/draw.png" class="md:w-6 w-5 hover:w-7">
                                    </a>
                                </div>
                                <p class="font-medium md:text-3xl  mt-3 pb-4 text-black text-left text-xl">
                                    <strong>Contato 1: </strong>{{ Auth::user()->contacts()->first()->contact }}
                                </p>

                                <p class="font-medium md:text-3xl  mt-3 pb-4 text-black text-left text-xl">
                                    <strong>Contato 2: </strong>{{ Auth::user()->contacts()->orderBy('id', 'desc')->first()->contact }}
                                </p>

                                <p class="font-medium md:text-3xl  mt-3 pb-4 text-black text-left text-xl">
                                    <strong>Mensagem: </strong>{{ Auth::user()->message}}
                                </p>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Main modal -->
    <div id="defaultModal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative w-full max-w-2xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow">
                <!-- Modal header -->
                <p class="font-extrabold md:px-10 md:text-4xl mt-4 py-3 px-2 text-3xl text-black text-center">
                    Alterar Avatar
                </p>     
                <div class="flex items-start justify-between">
                    <button type="button" class="text-red-500 bg-transparent hover:bg-rose-200 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="defaultModal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                        <span class="sr-only">Fechar Janela</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="md:px-2 px-2">
                    <hr class="border-1 border-red-500">
                </div>
                <form method="POST" action="{{ route('vitima.update') }}">
                    @csrf
                    @method('patch')
                    <div class="px-6 py-10">
                        <div class="grid grid-rows-8 gap-4 justify-center">
                                <ul class="grid w-full gap-6 md:grid-cols-4 grid-col-1">     
                                    <li>
                                        <input type="radio" id="one" class="hidden peer" @if(Auth::user()->img === 'img/avatares/avatar-one.png') checked @endif type="radio" name="img" value="img/avatares/avatar-one.png">
                                        <label for="one" class="inline-flex items-center justify-between rounded-full border-4 w-full border-rose-400 hover:border-red-500 cursor-pointer  peer-checked:border-red-500">                           
                                            <div class="block">
                                                <img class="md:w-28 mx-auto rounded-full w-28  border-4" src="{{ asset('img/avatares/avatar-one.png') }}">        
                                            </div>
                                        </label>
                                    </li>
                                    <li>
                                        <input type="radio" id="two" class="hidden peer" @if(Auth::user()->img === 'img/avatares/avatar-two.png') checked @endif type="radio" name="img" value="img/avatares/avatar-two.png">
                                        <label for="two" class="inline-flex items-center justify-between rounded-full border-4 w-full border-rose-400 hover:border-red-500 cursor-pointer  peer-checked:border-red-500">                           
                                            <div class="block">
                                                <img class="md:w-28 mx-auto rounded-full w-28  border-4" src="{{ asset('img/avatares/avatar-two.png') }}">        
                                            </div>
                                        </label>
                                    </li>
                                    <li>
                                        <input type="radio" id="three" class="hidden peer" @if(Auth::user()->img === 'img/avatares/avatar-three.png') checked @endif type="radio" name="img" value="img/avatares/avatar-three.png">
                                        <label for="three" class="inline-flex items-center justify-between rounded-full border-4 w-full border-rose-400 hover:border-red-500 cursor-pointer  peer-checked:border-red-500">                           
                                            <div class="block">
                                                <img class="md:w-28 mx-auto rounded-full w-28  border-4" src="{{ asset('img/avatares/avatar-three.png') }}">        
                                            </div>
                                        </label>
                                    </li>
                                    <li>
                                        <input type="radio" id="four" class="hidden peer" @if(Auth::user()->img === 'img/avatares/avatar-four.png') checked @endif type="radio" name="img" value="img/avatares/avatar-four.png">
                                        <label for="four" class="inline-flex items-center justify-between rounded-full border-4 w-full border-rose-400 hover:border-red-500 cursor-pointer  peer-checked:border-red-500">                           
                                            <div class="block">
                                                <img class="md:w-28 mx-auto rounded-full w-28 border-4" src="{{ asset('img/avatares/avatar-four.png') }}">        
                                            </div>
                                        </label>
                                    </li>
                                    <li>
                                        <input type="radio" id="five" class="hidden peer" @if(Auth::user()->img === 'img/avatares/avatar-five.png') checked @endif type="radio" name="img" value="img/avatares/avatar-five.png">
                                        <label for="five" class="inline-flex items-center justify-between rounded-full border-4 w-full border-rose-400 hover:border-red-500 cursor-pointer  peer-checked:border-red-500">                           
                                            <div class="block">
                                                <img class="md:w-28 mx-auto rounded-full w-28  border-4" src="{{ asset('img/avatares/avatar-five.png') }}">        
                                            </div>
                                        </label>
                                    </li>
                                    <li>
                                        <input type="radio" id="six" class="hidden peer" @if(Auth::user()->img === 'img/avatares/avatar-six.png') checked @endif type="radio" name="img" value="img/avatares/avatar-six.png">
                                        <label for="six" class="inline-flex items-center justify-between rounded-full border-4 w-full border-rose-400 hover:border-red-500 cursor-pointer  peer-checked:border-red-500">                           
                                            <div class="block">
                                                <img class="md:w-28 mx-auto rounded-full w-28  border-4" src="{{ asset('img/avatares/avatar-six.png') }}">        
                                            </div>
                                        </label>
                                    </li>
                                    <li>
                                        <input type="radio" id="seven" class="hidden peer" @if(Auth::user()->img === 'img/avatares/avatar-seven.png') checked @endif type="radio" name="img" value="img/avatares/avatar-seven.png">
                                        <label for="seven" class="inline-flex items-center justify-between rounded-full border-4 w-full border-rose-400 hover:border-red-500 cursor-pointer peer-checked:border-red-500">                           
                                            <div class="block">
                                                <img class="md:w-28 mx-auto rounded-full w-28  border-4" src="{{ asset('img/avatares/avatar-seven.png') }}">        
                                            </div>
                                        </label>
                                    </li>
                                    <li>
                                        <input type="radio" id="eight" class="hidden peer" @if(Auth::user()->img === 'img/avatares/avatar-eight.png') checked @endif type="radio" name="img" value="img/avatares/avatar-eight.png">
                                        <label for="eight" class="inline-flex items-center justify-between rounded-full border-4 w-full border-rose-400 hover:border-red-500 cursor-pointer peer-checked:border-red-500">                           
                                            <div class="block">
                                                <img class="md:w-28 mx-auto rounded-full w-28  border-4" src="{{ asset('img/avatares/avatar-eight.png') }}">        
                                            </div>
                                        </label>
                                    </li>  
                                </ul>      
                        </div>
                    </div>
                    <!-- Modal footer -->
                    <div class="md:px-2 px-2">
                        <hr class="border-1 border-red-500">
                    </div>
                    <div class="flex text-center items-center p-6 space-x-12 rounded-b">
                        <button type="submit" class="bg-red-500 hover:bg-red-600 block border-2 border-red-500 font-bold info-two p-2.5 rounded text-lg text-white w-6/12">
                            Alterar
                        </button> 
                        <button data-modal-hide="defaultModal" class="bg-white block border-2 border-red-500 hover:bg-red-100 font-bold info-two p-2.5 rounded text-lg text-red-500 w-6/12">
                            Fechar
                        </button>                    
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>