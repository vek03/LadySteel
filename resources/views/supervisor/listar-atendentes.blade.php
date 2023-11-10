<x-app-layout>
    <header class="bg-rose-100 grid h-screen place-items-center pt-12 px-1.5">
        <div class="pb-16 px-1 py-7">
            <div class=" bg-white border-2 border-red-500 info max-w-md md:max-w-screen-xl mx-auto overflow-hidden py-5 rounded-xl">
                <p class="font-extrabold md:pb-10 md:px-10 md:text-5xl mt-4 pb-5 text-4xl text-black text-center">
                    Atendentes
                </p>
                @if (!empty(session('status')))   
                    <div x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
                        class="flex items-center bg-red-500 text-white text-sm font-bold px-3 py-1 mt-5 rounded my-5 mx-10" role="alert">
                        <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.432 0c1.34 0 2.01.912 2.01 1.957 0 1.305-1.164 2.512-2.679 2.512-1.269 0-2.009-.75-1.974-1.99C9.789 1.436 10.67 0 12.432 0zM8.309 20c-1.058 0-1.833-.652-1.093-3.524l1.214-5.092c.211-.814.246-1.141 0-1.141-.317 0-1.689.562-2.502 1.117l-.528-.88c2.572-2.186 5.531-3.467 6.801-3.467 1.057 0 1.233 1.273.705 3.23l-1.391 5.352c-.246.945-.141 1.271.106 1.271.317 0 1.357-.392 2.379-1.207l.6.814C12.098 19.02 9.365 20 8.309 20z"/></svg>
                        <p class="m-2 text-lg font-medium leading-tight text-white">
                            {{ session('status') }}
                        </p>
                    </div>
                @endif

                <div class="px-8">
                    <hr class="border-1 border-red-500">
                </div>

                <div class="max-h-96 overflow-y-auto">

                    @if (!empty($attendants[0]))
                        @foreach ($attendants as $attendant)
                        <div class="grid grid-cols-1 md:grid-cols-2">                
                                <div class="md:flex">
                                    <div class="align-center text-center">
                                        <div class="px-4">       
                                            <div class="md:px-20">
                                                <p class="font-medium md:text-3xl mt-3 pb-6 pt-2 text-2xl text-black md:text-left text-center">
                                                    <strong>Nome: </strong>{{ $attendant->name . ' ' . $attendant->lastname }}   
                                                </p>
                                                <p class="font-medium md:text-3xl  mt-3 pb-6 text-2xl text-black md:text-left text-center">
                                                    <strong>Usuário: </strong>{{ $attendant->username }}     
                                                </p>
                                            </div>
                                        </div>
                                    </div>    
                                </div>

                                <div class="md:flex mx-auto place-items-center">
                                    <div class="align-center justify-end ml-auto">
                                        <div class="px-4">
                                            <div class="md:pb-0 md:pl-56 pb-4">
                                                <button class="bg-white border-2 border-red-500 duration-500 hover:bg-red-500 hover:border-4 mx-2 navbar-btn rounded-full">
                                                    <a href="{{ route('supervisor.atendente-perfil',  $attendant->id) }}"><img class="md:w-12 w-9 rounded-full" src="{{ asset($attendant->img) }}"></a>
                                                </button>
                                            </div>    
                                        </div>   
                                    </div>
                                </div>  
                            </div>    

                            <div class="px-8">
                                <hr class="border-1 border-red-500">
                            </div> 
                    @endforeach
                </div>
                    @else    
                        <div class="px-8 text-center">
                            <p class="px-4 py-2 border text-red-500" colspan="7">Nenhum cliente cadastrado.</p>
                            <hr class="border-1 border-red-500">
                        </div>    
                    @endif
            </div>
        </div>
    </header>
</x-app-layout>