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
    {!! RecaptchaV3::initJs() !!}
    @stack('scripts')
    @livewireStyles
</head>
<style>
    body {
        background-image: url({{asset('images/DrawKit-cooking-kitchen-food-vector-illustrations-03.svg')}});
        background-repeat: repeat-y;
        background-attachment: fixed;
        background-size: 120%;
        background-position-y: -100px;
        background-position-x: 50%;
    }
</style>
<body class="font-serif antialiased min-h-screen flex flex-col">
<!-- Page Content -->
<header>
    <div class="relative w-full bg-primary-400 bg-opacity-95 pb-8">
        <div class="mx-auto container 2xl:px-56 pt-4 px-2">
            <nav class="flex justify-between items-center mx-2">
                <a href="/" class="text-white text-3xl">GoedeLunch.nl</a>
                <div class="flex justify-end">
                    @auth
                        <form action="{{route('logout')}}" method="POST">
                            @csrf
                            <button type="submit" class="text-white text-lg mr-4 hover:bg-white px-4 py-2 hover:text-primary-300 transition ease-in duration-100"
                               >Log uit</button>
                        </form>
                    @endauth
                    <a class="text-white text-lg hover:bg-white px-4 py-2 hover:text-primary-300 transition ease-in duration-100"
                       href="{{route('recipes.create')}}">Voeg toe</a>
                </div>
            </nav>
            {{ $header }}
        </div>
    </div> {{-- Header part --}}
</header>

<main class="pb-8 bg-white bg-opacity-95 flex-grow">
    {{ $slot }}
</main>
@livewireScripts
</body>
</html>
