<footer>
    @if (!Auth::user())
    
        <hr class="border-2 border-red-300">
        <div class="bottom-0 static w-full">
            <div class="bg-red-400 font-bold grid grid-cols-1 md:grid-cols-2 px-3 w-full">
                <div class="flex items-center justify-center lg:items-start lg:justify-start pt-2">
                    <img class="footer py-2 w-52 hover:w-56" src="{{ asset('img/logos/logoTres.png') }}">
                </div>
                <div class="grid grid-cols-3 justify-center lg:flex lg:justify-end lg:space-x-4 place-items-center">
                    <a href="https://twitter.com/LadySteel461386?t=jocU3oaxCapXrYixzkLjiA&s=08" target="_blank"><img class="my-2 w-11 hover:w-10 hover:border-red-500 hover:border-2 hover:rounded-full" src="{{ asset('img/icons/twitter.png') }}"></a>
                    <a href="https://www.instagram.com/ladysteel_tcc/?utm_source=qr&igshid=MzNlNGNkZWQ4Mg%3D%3D" target="_blank"><img class="my-2 w-11 hover:w-10 hover:border-red-500 hover:border-2 hover:rounded-full" src="{{ asset('img/icons/instagram.png') }}"></a>
                    <a href="https://api.whatsapp.com/send?phone=5511932212110" target="_blank"><img class="my-2 w-11 hover:w-10 hover:border-red-500 hover:border-2 hover:rounded-full" src="{{ asset('img/icons/whatsapp.png') }}"></a>
                </div>
            </div>

            <hr class="border-2 border-red-300">
            <div class="bg-red-400 p-5">
                <div class="max-w-7xl mt-5 mx-auto">
                    <div class="grid grid-cols-1 md:grid-cols-3 text-center">
                        <div class="mb-2 px-10 hover:text-rose-100">
                            <h4 class="font-black pb-4 text-3xl">LadySteel</h4>
                            <p class="text-justify text-lg  hover:text-rose-300">
                            Buscando um meio de auxiliar no
                            combate a um fenômeno social
                            de tamanha proporção como a
                            violência doméstica contra a
                            mulher, o LadySteel foi criado. <br><br>
                            </p>
                        </div>

                        <div class="mb-5 hover:text-rose-100">
                            <a href="https://www.planalto.gov.br/ccivil_03/_ato2004-2006/2006/lei/l11340.htm" target="_blank">
                                <h4 class="font-black pb-4 text-3xl">A Lei</h4>
                                <p class="text-lg hover:text-rose-300">
                                Acesse a Lei Maria da Penha<br> 
                                <strong class="hover:text-red-100"> Lei 11.340/2006</strong><br>
                                </p>
                            </a>    
                        </div>
                        <div class="mb-5 hover:text-rose-100">
                            <h4 class="font-black pb-4 text-3xl">Contato</h4>
                            <div  class=" hover:text-rose-300">
                                <a target="_blank" href="https://wa.me/5511932212110">
                                    <p class="text-lg"><strong>Phone:</strong>
                                    +55 (11) 9 3221-2110 <br>   
                                </a>
                            </div>   
                            <div  class=" hover:text-rose-300"> 
                                <a target="_blank" href="mailto:ladysteelmvj@gmail.com?subject=Mensagem ao LadySteel">
                                    <p class="text-lg"><strong>E-mail:</strong>
                                    ladysteelmvj@gmail.com<br></p>
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
                        @2023 Copyright <strong><span class="hover:text-rose-300">LadySteel</span></strong> | Todos
                        os Direitos Reservados
                        <a href="{{ route('disfarce') }}">
                            <button>
                                <img class="h-6 info w-6 rotate" src="{{ asset('img/icons/borboleta.png') }}">
                            </button>
                        </a>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    @else

        <div class="relative bottom-0 w-full bg-red-400 px-10 py-3">
            <hr class="fixed border-red-300">
            <div class="text-center text-lg">
                @2023 Copyright <strong><span>LadySteel</span></strong> | Todos os Direitos Reservados
                <a href="{{ route('disfarce') }}">
                  <button>
                    <img class="h-6 info w-6 rotate" src="{{ asset('img/icons/borboleta.png') }}">
                  </button>
                </a>
            </div>
            
            <hr class="fixed border-red-300">
        </div>

    @endif
</footer>