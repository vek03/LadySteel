<nav x-data="{ open: false }" class="bg-white border-b border-gray-100 py-3">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between ">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                @if (!Auth::user())
                    <a href="{{ route('index') }}">
                        <x-application-logo class="block h-9 w-auto fill-current text-gray-800" />
                    </a>
                @elseif(Auth::user()->id_type === 1)
                    <a href="{{ route('dashboard') }}">
                        <x-second-logo class="block h-9 w-auto fill-current text-gray-800" />
                    </a>
                @else
                    <a href="{{ route('dashboard') }}">
                        <x-application-logo class="block h-9 w-auto fill-current text-gray-800" />
                    </a>
                @endif
                </div>
            </div>

            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ml-6">

                @if (!Auth::user())
                    <div class="hidden space-x-8 sm:-my-px sm:ml-1 sm:flex">
                        <x-nav-link :href="route('index')" :active="request()->routeIs('index')">
                            {{ __('Home') }}
                        </x-nav-link>
                    </div>

                    <div class="hidden space-x-8 sm:-my-px sm:ml-1 sm:flex">
                        <x-nav-link :href="route('sobre')" :active="request()->routeIs('sobre')">
                            {{ __('Sobre') }}
                        </x-nav-link>
                    </div>

                    <div class="hidden space-x-8 sm:-my-px sm:ml-1 sm:flex">
                        <x-nav-link :href="route('fale-conosco')" :active="request()->routeIs('fale-conosco')">
                            {{ __('Fale Conosco') }}
                        </x-nav-link>
                    </div>

                    
                @endif
                
                
                @if (Auth::user() && Auth::user()->id_type === 1)
                    <div class="hidden space-x-8 sm:-my-px sm:ml-1 sm:flex">
                        <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                            {{ __('Home') }}
                        </x-nav-link>
                    </div>

                    <div class="hidden space-x-8 sm:-my-px sm:ml-1 sm:flex">
                        <x-nav-link :href="route('vitima.profile')" :active="request()->routeIs('vitima.profile')">
                            {{ __('Meu Perfil') }}
                        </x-nav-link>
                    </div>

                    
                @endif


                @if (Auth::user() && Auth::user()->id_type === 2)
                    <div class="hidden space-x-8 sm:-my-px sm:ml-1 sm:flex">
                        <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                            {{ __('Home') }}
                        </x-nav-link>
                    </div>

                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            <button class="bg-white border-2 border-red-500 duration-500 font-bold hover:bg-red-500 hover:text-white mx-3 navbar-btn px-3 py-2 rounded text-red-500 text-xl">
                                <div>{{ __('Denúncias') }}</div>
                            </button>
                        </x-slot>

                        <x-slot name="content">
                            <x-dropdown-link :href="route('atendente.pendentes')">
                                {{ __('Pendentes') }}
                            </x-dropdown-link>

                            <x-dropdown-link :href="route('atendente.acatadas')">
                                {{ __('Acatadas') }}
                            </x-dropdown-link>
                        </x-slot>
                    </x-dropdown>

                @endif


                @if (Auth::user() && Auth::user()->id_type === 3)
                    <div class="invisible lg:visible space-x-8 sm:-my-px sm:ml-1 sm:flex">
                        <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                            {{ __('Home') }}
                        </x-nav-link>
                    </div>

                    <div class="invisible lg:visible space-x-8 sm:-my-px sm:ml-1 sm:flex">
                        <x-nav-link :href="route('supervisor.dispositivos')" :active="request()->routeIs('supervisor.dispositivos')">
                            {{ __('Dispositivos') }}
                        </x-nav-link>
                    </div>

                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            <button class="invisible lg:visible bg-white border-2 border-red-500 duration-500 font-bold hover:bg-red-500 hover:text-white mx-3 navbar-btn px-3 py-2 rounded text-red-500 text-xl">
                                <div>{{ __('Relatório') }}</div>
                            </button>
                        </x-slot>

                        <x-slot name="content">
                            <x-dropdown-link :href="route('supervisor.first')">
                                {{ __('Diário') }}
                            </x-dropdown-link>

                            <x-dropdown-link :href="route('supervisor.second')">
                                {{ __('Semanal') }}
                            </x-dropdown-link>

                            <x-dropdown-link :href="route('supervisor.third')">
                                {{ __('Anual') }}
                            </x-dropdown-link>
                        </x-slot>
                    </x-dropdown>

                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            <button class="invisible lg:visible bg-white border-2 border-red-500 duration-500 font-bold hover:bg-red-500 hover:text-white mx-3 navbar-btn px-3 py-2 rounded text-red-500 text-xl">
                                <div>{{ __('Atendentes') }}</div>
                            </button>
                        </x-slot>

                        <x-slot name="content">
                            <x-dropdown-link :href="route('supervisor.atendente-list')">
                                {{ __('Listar') }}
                            </x-dropdown-link>

                            <x-dropdown-link :href="route('supervisor.atendente-register')">
                                {{ __('Cadastrar') }}
                            </x-dropdown-link>
                        </x-slot>
                    </x-dropdown>
                @endif
                

                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        @if (Auth::user() && Auth::user()->id_type === 3)
                        <button class="flex invisible lg:visible text-sm bg-white border-2 border-red-500 duration-500 hover:bg-red-500 hover:border-4 mx-2 navbar-btn rounded-full">
                        @else
                        <button class="flex text-sm bg-white border-2 border-red-500 duration-500 hover:bg-red-500 hover:border-4 mx-2 navbar-btn rounded-full">
                        @endif
                            <span class="sr-only">Abrir menu do usuário</span>
                            @if (Auth::user()  && Auth::user()->id_type !== 3)
                                <img class="h-12 w-12 rounded-full" src="{{ asset(Auth::user()->img) }}">
                            @else
                                <img class="h-12 w-12 rounded-full" src="{{ asset('img/icons/human.png') }}">
                            @endif
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        @if (!Auth::user())
                            <x-dropdown-link :href="route('login')">
                                {{ __('Entrar') }}
                            </x-dropdown-link>

                            <x-dropdown-link :href="route('register')">
                                {{ __('Cadastrar-me') }}
                            </x-dropdown-link>
                        @else
                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <div class="px-4">
                                    <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                                    <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
                                </div>

                                <x-dropdown-link :href="route('logout')"
                                        onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                    {{ __('Sair') }}
                                </x-dropdown-link>
                            </form>
                        @endif
                    </x-slot>
                </x-dropdown>
            </div>

            <!-- Hamburger -->
            @if(Auth::user() && Auth::user()->id_type === 3)
            <div class="-mr-2 flex items-center lg:hidden">
            @else
            <div class="-mr-2 flex items-center sm:hidden">
            @endif
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 text-red-500 bg-transparent hover:bg-rose-200 rounded-lg focus:outline-none transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden min-[950px]:hidden">
        </br>
        @if (!Auth::user())
            <div class="pt-2 pb-3 space-y-1">
                <x-responsive-nav-link :href="route('index')" :active="request()->routeIs('index')">
                    {{ __('Home') }}
                </x-responsive-nav-link>
            </div>

            <div class="pt-2 pb-3 space-y-1">
                <x-responsive-nav-link :href="route('sobre')" :active="request()->routeIs('sobre')">
                    {{ __('Sobre') }}
                </x-responsive-nav-link>
            </div>

            <div class="pt-2 pb-3 space-y-1">
                <x-responsive-nav-link :href="route('fale-conosco')" :active="request()->routeIs('fale-conosco')">
                    {{ __('Fale Conosco') }}
                </x-responsive-nav-link>
            </div>
        @endif    

        @if (Auth::user() && Auth::user()->id_type === 1)

            <div class="pt-2 pb-3 space-y-1">
                <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                    {{ __('Home') }}
                </x-responsive-nav-link>
            </div>

            <div class="pt-2 pb-3 space-y-1">
                <x-responsive-nav-link :href="route('vitima.profile')" :active="request()->routeIs('vitima.profile')">
                    {{ __('Meu Perfil') }}
                </x-responsive-nav-link>
            </div>

        @endif   

        @if (Auth::user() && Auth::user()->id_type === 2)

            <div class="pt-2 pb-3 space-y-1">
                <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                    {{ __('Home') }}
                </x-responsive-nav-link>
            </div>

            <div class="pt-2 pb-3 space-y-1">
                <x-responsive-nav-link :href="route('atendente.pendentes')" :active="request()->routeIs('atendente.pendentes')">
                    {{ __('Denúncias Pendentes') }}
                </x-responsive-nav-link>
            </div>

            <div class="pt-2 pb-3 space-y-1">
                <x-responsive-nav-link :href="route('atendente.acatadas')" :active="request()->routeIs('atendente.acatadas')">
                    {{ __('Denúncias Acatadas') }}
                </x-responsive-nav-link>
            </div>

        @endif   

        @if (Auth::user() && Auth::user()->id_type === 3)

            <div class="pt-2 pb-3 space-y-1">
                <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                    {{ __('Home') }}
                </x-responsive-nav-link>
            </div>

            <div class="pt-2 pb-3 space-y-1">
                <x-responsive-nav-link :href="route('supervisor.dispositivos')" :active="request()->routeIs('supervisor.dispositivos')">
                    {{ __('Dispositivos') }}
                </x-responsive-nav-link>
            </div>

            <div class="pt-2 pb-3 space-y-1">
                <x-responsive-nav-link :href="route('supervisor.first')" :active="request()->routeIs('supervisor.first')">
                    {{ __('Relatório Diário') }}
                </x-responsive-nav-link>
            </div>

            <div class="pt-2 pb-3 space-y-1">
                <x-responsive-nav-link :href="route('supervisor.second')" :active="request()->routeIs('supervisor.second')">
                    {{ __('Relatório Semanal') }}
                </x-responsive-nav-link>
            </div>

            <div class="pt-2 pb-3 space-y-1">
                <x-responsive-nav-link :href="route('supervisor.third')" :active="request()->routeIs('supervisor.third')">
                    {{ __('Relatório Anual') }}
                </x-responsive-nav-link>
            </div>

            <div class="pt-2 pb-3 space-y-1">
                <x-responsive-nav-link :href="route('supervisor.atendente-list')" :active="request()->routeIs('supervisor.atendente-list')">
                    {{ __('Listar Atendentes') }}
                </x-responsive-nav-link>
            </div>

            <div class="pt-2 pb-3 space-y-1">
                <x-responsive-nav-link :href="route('supervisor.atendente-register')" :active="request()->routeIs('supervisor.atendente-register')">
                    {{ __('Cadastrar Atendentes') }}
                </x-responsive-nav-link>
            </div>

        @endif   


        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            @if (Auth::user())
                <div class="px-4">
                    <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                    <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
                </div>
                </br>
            @endif

            @if (!Auth::user())
                <div class="mt-3 space-y-1">
                    <x-responsive-nav-link :href="route('login')">
                        {{ __('Entrar') }}
                    </x-responsive-nav-link>

                    <x-responsive-nav-link :href="route('register')">
                        {{ __('Cadastrar-me') }}
                    </x-responsive-nav-link>
                </div>

            @else
                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Sair') }}
                    </x-resposive-nav-link>
                </form>
            @endif
        </div>
    </div>
</nav>