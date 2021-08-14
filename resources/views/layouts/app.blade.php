<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>GoedeLunch.nl</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    <link
        href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    @stack('scripts')

</head>
<body class="font-serif antialiased">
<!-- Page Content -->

<header>
    <div class="relative w-full bg-primary-300 h-full pb-8">
        <div class="mx-auto container 2xl:px-56 pt-4 px-2" x-data="{open: false}">
            <nav class="flex justify-between items-center">
                <a href="/" class="text-white text-3xl">GoedeLunch.nl</a>
                <div class="hidden md:block">
                    <a class="text-white text-lg mr-4 hover:bg-white px-4 py-2 hover:text-primary-300 transition ease-in duration-100"
                       href="/login">Login</a>
                    <a class="text-white text-lg mr-4 hover:bg-white px-4 py-2 hover:text-primary-300 transition ease-in duration-100"
                       href="/register">Register</a>
                </div>
                <button class="text-white md:hidden" @click="open = !open">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                </button>
            </nav>
            <div class="absolute bg-white h-max left-0 top-16 w-full z-50 shadow-md " x-show.transition="open" @click.away="open=false">
                <a class="block text-primary-400 w-full text-lg mt-4 pl-4 hover:bg-primary-300 px-4 py-2 hover:text-white transition ease-in duration-100"
                   href="/login">Login</a>
                <a class="block text-primary-400 w-full text-lg mt-4 pl-4 hover:bg-primary-300 px-4 py-2 hover:text-white transition ease-in duration-100"
                   href="/register">Register</a>
            </div>
            {{ $header }}
        </div>
    </div> {{-- Header part --}}
</header>

<main>
    {{ $slot }}
</main>
</body>
</html>
