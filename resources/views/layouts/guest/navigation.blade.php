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
                @else
                    <a href="{{ route('dashboard') }}">
                        <x-second-logo class="block h-9 w-auto fill-current text-gray-800" />
                    </a>
                @endif
                </div>
            </div>
        </div>
    </div>
</nav>