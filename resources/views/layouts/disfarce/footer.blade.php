<footer>
        <hr class="border-2 border-red-300">
        <div class="bottom-0 static w-full">
            <div class="bg-red-400 font-bold grid grid-cols-1 md:grid-cols-2 px-3 w-full">
                <div class="flex items-center justify-center lg:items-start lg:justify-start pt-2">
                    <img class="footer py-2 w-40 hover:w-44" src="{{ asset('img/logos/logoDoisSoulFly.png') }}">
                </div>
                <div class="grid grid-cols-3 justify-center lg:flex lg:justify-end lg:space-x-4 place-items-center">
                    <a href="#" target="_blank"><img class="my-2 w-11 hover:w-10 hover:border-red-500 hover:border-2 hover:rounded-full" src="{{ asset('img/icons/twitter.png') }}"></a>
                    <a href="#" target="_blank"><img class="my-2 w-11 hover:w-10 hover:border-red-500 hover:border-2 hover:rounded-full" src="{{ asset('img/icons/instagram.png') }}"></a>
                    <a href="#" target="_blank"><img class="my-2 w-11 hover:w-10 hover:border-red-500 hover:border-2 hover:rounded-full" src="{{ asset('img/icons/whatsapp.png') }}"></a>
                </div>
            </div>

            <hr class="border-2 border-red-300">
            <div class="bg-red-400 p-5">
                <div class="max-w-7xl mt-5 mx-auto">
                    <div class="grid grid-cols-1 md:grid-cols-3 text-center">
                        <div class="mb-2 px-10 hover:text-rose-100">
                            <h4 class="font-black pb-4 text-3xl">SoulFly</h4>
                            <p class="text-justify text-lg  hover:text-rose-300">
                            A confeitaria SoulFly é um verdadeiro
                            refúgio para os amantes de doces e sobremesas.
                            O ambiente acolhedor e aconchegante convida os
                            clientes a relaxar e desfrutar de uma ampla
                            variedade de iguarias feitas com paixão e criatividade. <br><br>
                            </p>
                        </div>

                        <div class="mb-5 hover:text-rose-100">
                            <a href="https://www.tudogostoso.com.br" target="_blank">
                                <h4 class="font-black pb-4 text-3xl">Nossas Receitas</h4>
                                <p class="text-lg hover:text-rose-300">
                                Clique aqui e tenha acesso<br>
                                à nossas deliciosas receitas
                                <br> 
                                <strong class="hover:text-red-100"></strong><br>
                                </p>
                            </a>    
                        </div>
                        <div class="mb-5 hover:text-rose-100">
                            <h4 class="font-black pb-4 text-3xl">Contato</h4>
                            <div  class=" hover:text-rose-300">
                                <a target="_blank" href="https://wa.me/5511932212110">
                                    <p class="text-lg"><strong>Phone:</strong>
                                    +55 (11) 9 1234-1234 <br>   
                                </a>
                            </div>   
                            <div  class=" hover:text-rose-300"> 
                                <a target="_blank" href="#">
                                    <p class="text-lg"><strong>E-mail:</strong>
                                    soulfly@gmail.com<br></p>
                                </a>    
                            </div>    
                        </div>
                    </div>
                </div>
            </div>

            <hr class="border-2 border-red-300">
            <div class="bg-red-400 px-10 py-3 w-full hover:text-rose-100">
                <div>
                    <div class="text-center">
                    <div class="text-lg">
                        @2023 Copyright <strong><span class="hover:text-rose-300">SoulFly</span></strong> | Todos
                        os Direitos Reservados
                        <a href="@if (!Auth::user()) {{ route('index') }} @else {{ route('dashboard') }} @endif">
                            <button>
                                <img class="h-6 info w-6 rotate" src="{{ asset('img/icons/borboleta.png') }}">
                            </button>
                        </a>
                    </div>
                    </div>
                </div>
            </div>
        </div>
</footer>
