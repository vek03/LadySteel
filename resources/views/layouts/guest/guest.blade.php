<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="icon" type="imagem/ico" href="img/icons/icone.ico">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        <script src="{{ asset('js/main.js') }}"></script>
        @stack('scripts')
    </head>
    <body class="font-sans text-gray-900 antialiased bg-gradient-to-b from-rose-500 from-3% to-rose-50 to-60% ">
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        
        @include('layouts.guest.navigation')    
        <div class="min-h-screen flex flex-col justify-center items-center pt-0">
            <div>
                {{ $slot }}
            </div>    
        </div>
    </body>
</html>