<x-app-layout>
    <div class="bg-gradient-to-b from-rose-500 from-3% to-rose-50 to-90% md:px-0 px-5">
        <header class="h-screen header-login md:pt-12 place-items-center px-1.5">
            <img class="img-header md:w-1/2 md:pt-0 pt-40 w-90 mx-auto contrast-150" src="{{ asset('img/logos/logoDois.png') }}">  
            <div class="bg-white border-2 border-black info max-w-md md:max-w-5xl mx-auto overflow-hidden rounded-xl shadow-md">
                <div class="">
                    <div class="md:px-32 pb-4 pt-1 px-5 grid">
                        <p class="block font-bold leading-tight md:text-4xl  mt-2 text-2xl text-black text-center">
                            Olá, 

                            @if(Auth::user()->id_type === 1)
                                {{ Auth::user()->username }}!
                            @endif

                            @if(Auth::user()->id_type === 2)
                                atendente {{ Auth::user()->name }} {{ Auth::user()->lastname }}!
                            @endif

                            @if(Auth::user()->id_type === 3)
                                supervisor(a) {{ Auth::user()->name }} {{ Auth::user()->lastname }}!
                            @endif
                        </p>
                    </div>
                </div>
            </div>
        </header>  
    </div>    
</x-app-layout>