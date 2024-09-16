<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" style="height: 100%">

<head>
    <meta charset="utf-8">

    <meta name="application-name" content="{{ config('app.name') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="{{ asset('img/fav.png') }}">

    <title>{{ $title ?? 'Page Title' }} - {{ env('APP_NAME') }}</title>

    {{-- Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">

    {{-- Styles --}}
    <style>
        [x-cloak] {
            display: none !important;
        }
    </style>

    @filamentStyles
    @vite('resources/sass/app.scss')
</head>

<body class="antialiased h-full flex flex-col">
    @persist('background')
        <div class="fixed w-6/12 right-0 h-screen overflow-hidden z-0 pointer-events-none">
            @foreach (App\Models\Technology::all() as $tech)
                <div class="background-icon w-16 h-16 opacity-0" style="color: {{ $tech->color }};">
                    @svg($tech->icon, 'w-full h-full fill-current')
                </div>
            @endforeach
        </div>
    @endpersist

    {{-- Header --}}
    <header class="px-8 xl:px-16">
        <div class="py-8 xl:py-16">
            <x-nav />
        </div>
    </header>

    {{-- Main --}}
    <main class="px-8 xl:px-16 flex-grow flex flex-col">
        {{ $slot }}
    </main>

    {{-- Scripts --}}
    @filamentScripts
    @vite('resources/js/app.js')
</body>

</html>
