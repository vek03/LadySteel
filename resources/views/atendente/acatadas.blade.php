<x-app-layout>
    <header class="bg-rose-100 grid h-screen place-items-center pt-12 px-1.5">
        <div class="pb-16 px-1 py-7">
            <div class="bg-white border-2 border-red-500 info max-w-md md:max-w-screen-xl mx-auto overflow-hidden py-5 rounded-xl">
                <p class="font-extrabold md:pb-10 md:px-10 md:text-5xl mt-4 pb-5 px-2 text-4xl text-black text-center">
                    Denúncias Acatadas
                </p>

                <div class="px-8">
                    <hr class="border-1 border-red-500">
                </div> 

                <div class="max-h-96 overflow-y-auto">
                    @if(!empty($reports[0]))
                        @foreach ($reports as $report)
                            <div class="grid grid-cols-1 md:grid-cols-2">                
                                <div class="md:flex">
                                    <div class="align-center text-center">
                                        <div class="px-4">       
                                            <div class="md:px-10">
                                                <p class="font-medium md:text-3xl mt-3 pb-6 pt-2 text-2xl text-black md:text-left text-center">
                                                    <strong>Dispositivo Emissor: </strong>{{ $report->victim->device->id }}    
                                                </p>
                                                <p class="font-medium md:text-3xl  mt-3 pb-6 text-2xl text-black md:text-left text-center">
                                                    <strong>Data da Realização: </strong>{{ $report->created_at->format('d/m/Y') }}  
                                                </p>
                                                <p class="font-medium md:text-3xl  mt-3 pb-6 text-2xl text-black md:text-left text-center">
                                                    <strong>Data do Acato: </strong>{{ $report->updated_at->format('d/m/Y') }}  
                                                </p>
                                            </div>
                                        </div>
                                    </div>    
                                </div>
                                <div class="md:flex mx-auto place-items-center">
                                    <div class="align-center justify-end ml-auto">
                                        <div class="px-4">
                                            <div class="md:pb-0 md:pl-72 pb-4">
                                                <button data-modal-target="small-modal{{ $report->id }}" data-modal-toggle="small-modal{{ $report->id }}" class="bg-white border-2 border-red-500 duration-500 mx-2 navbar-btn rounded-full" type="button">
                                                    <img class="md:w-11 px-2 py-2 w-9" src="{{ asset('img/icons/plus.png') }}">
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
                            <p class="px-4 py-2 text-red-500 md:text-2xl text-2xl">Não há nenhuma denúncia acatada neste momento.</p>
                            <hr class="border-1 border-red-500">
                        </div>    
                    @endif
            </div>
        </div>
    </header>

    @if(!empty($reports[0]))
        @foreach ($reports as $report)
            <!-- Main modal -->
            <div id="small-modal{{ $report->id }}" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                    <div class="relative w-full max-w-2xl max-h-full">
                        <!-- Modal content -->
                        <div class="relative bg-white rounded-lg shadow">
                            <!-- Modal header -->
                            <p class="font-extrabold  md:px-10 md:text-4xl mt-4 py-3 px-2 text-3xl text-black text-center">
                                Detalhes da Denúncia
                            </p>     
                        <div class="flex items-start justify-between">
                        <button type="button" class="text-red-500 bg-transparent hover:bg-rose-200 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="small-modal{{ $report->id }}">
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
                    <div class="px-6">
                        <div class="grid md:grid-rows-1 grid-rows-1 grid-flow-col">
                            <div>
                                <p class="font-medium md:text-2xl md:text-center mt-3 pb-4 text-xl text-black text-center">
                                    <strong>DENÚNCIA</strong>
                                </p>
                            </div>
                        </div>
                        <div class="grid md:grid-rows-1 grid-rows-2 grid-flow-col gap-3">    
                            <div>
                                <p class="font-medium md:text-2xl md:text-center mt-3 pb-4 text-xl text-black text-center">
                                    <strong>Dispositivo Emissor: </strong>{{ $report->victim->device->id }}  
                                </p>
                            </div>
                            <div>
                                <p class="font-medium md:text-2xl md:text-center mt-3 pb-4 text-xl text-black text-center">
                                    <strong>Vítima: </strong>{{ $report->victim->name . ' ' . $report->victim->lastname }}     
                                </p>
                            </div>
                        </div>
   
                        <div class="grid md:grid-rows-1 grid-rows-2 grid-flow-col gap-3">    
                            <div>
                                <p class="font-medium md:text-2xl md:text-center mt-3 pb-4 text-xl text-black text-center">
                                    <strong>Data da Realização: </strong><br>{{ $report->created_at->format('d/m/Y') }}            
                                </p>
                            </div>
                            <div>
                                <p class="font-medium md:text-2xl md:text-center mt-3 pb-4 text-xl text-black text-center">
                                    <strong>Hora da Realização: </strong><br>{{ $report->created_at->format('H:i') }}     
                                </p>
                            </div>
                        </div>

                        <div class="grid md:grid-rows-1 grid-rows-2 grid-flow-col gap-3">    
                            <div>
                                <p class="font-medium md:text-2xl md:text-center mt-3 pb-4 text-xl text-black text-center">
                                    <strong>Data do Acato: </strong><br>{{ $report->updated_at->format('d/m/Y') }}            
                                </p>
                            </div>
                            <div>
                                <p class="font-medium md:text-2xl md:text-center mt-3 pb-4 text-xl text-black text-center">
                                    <strong>Hora do Acato: </strong><br>{{ $report->updated_at->format('H:i') }}     
                                </p>
                            </div>
                        </div>

                        <div>
                            <hr class="border-1 border-red-500">
                        </div>    
                        <div class="grid md:grid-rows-1 grid-rows-1 grid-flow-col">
                            <div>
                                <p class="font-medium md:text-2xl md:text-center mt-3 pb-4 text-xl text-black text-center">
                                    <strong>LOCALIZAÇÃO</strong>
                                </p>
                            </div>
                        </div>

                        <div class="grid md:grid-rows-1 grid-rows-2 grid-flow-col gap-3">    
                            <div>
                                <p class="font-medium md:text-2xl md:text-center mt-3 pb-4 text-xl text-black text-center"> 
                                    <strong>Latitude: </strong>{{ $report->latitude }}       
                                </p>
                            </div>
                            <div>
                                <p class="font-medium md:text-2xl md:text-center mt-3 pb-4 pl-18 text-xl text-black text-center">
                                    <strong>Longitude: </strong>{{ $report->longitude }}  
                                </p>
                            </div>   
                        </div>

                        <div class="map-responsive border-red-500 border-2">
                            <gmp-map center="{{ $report->latitude }},{{ $report->longitude }}" zoom="14" map-id="DEMO_MAP_ID">
                                <gmp-advanced-marker position="{{ $report->latitude }},{{ $report->longitude }}" title="My location">
                                </gmp-advanced-marker>
                            </gmp-map>
                        </div>

                        <div>
                            <br>
                            <hr class="border-1 border-red-500">
                        </div> 

                        <div class="grid md:grid-rows-1 grid-rows-1 grid-flow-col">
                            <div>
                                <p class="font-medium md:text-2xl md:text-center mt-3 pb-4 text-xl text-black text-center">
                                    <strong>PROTOCOLO</strong>
                                </p>
                            </div>
                        </div>

                        <div class="grid md:grid-rows-1 grid-rows-2 grid-flow-col gap-3">    
                            <div>
                                <p class="font-medium md:text-2xl md:text-center mt-3 pb-4 text-xl text-black text-center">
                                    <strong>Protocolo do B.O: </strong><br>@if(!empty($report->protocol()->first()->protocol)) {{ $report->protocol()->first()->protocol }} @else Protocolo Não Enviado @endif            
                                </p>
                            </div>
                            <div>
                                <p class="font-medium md:text-2xl md:text-center mt-3 pb-4 text-xl text-black text-center">
                                    <strong>Situação: </strong><br>{{ $report->protocol()->first()->status }}     
                                </p>
                            </div>
                        </div>

                        </br>
                    </div>
                    <!-- Modal footer -->
                    <div class="md:px-2 px-2">
                        <hr class="border-1 border-red-500">
                    </div>
                    <div class="grid md:grid-rows-1 grid-rows-1 grid-flow-col">    
                        <div class="flex justify-center items-center md:py-6 py-3 rounded-b">  
                            <button data-modal-hide="small-modal{{ $report->id }}" class="bg-white block border-2 border-red-500 font-bold p-2.5 rounded text-lg text-red-500 w-5/12">
                                Fechar
                            </button>  
                        </div>     
                    </div>          
            </div>
            </div>
            </div>
        @endforeach 
    @endif
</x-app-layout>