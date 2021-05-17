<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="" >
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <title>
            LaraWork
        </title>
        <style>
            [x-cloak]{display: none;}
        </style>
        @livewireStyles
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    </head>
    <body>
        <div>
            @include('partials.navbar')
            <livewire:alert/>
            @yield('content')
            @livewireScripts
            @include('partials.footer')
        </div>
    </body>
</html>
