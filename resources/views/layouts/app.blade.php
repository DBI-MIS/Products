@props(['title'])
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title> {{ isset ($title) ? $title . ' - ' : '' }} {{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <script src="https://cdn.jsdelivr.net/npm/@marcreichel/alpine-typewriter/dist/alpine-typewriter.min.js" defer></script>
        {{-- <link href="https://unpkg.com/filepond@^4/dist/filepond.css" rel="stylesheet" /> --}}

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles
    </head>
    <body class="font-sans antialiased w-full">
        <x-banner />

        
            @include('layouts.partials.header')
            
            {{-- @include('layouts.partials.hero') --}}

            @yield('hero')
            
        
            <main class="flex flex-col mx-[clamp(12px,_-8.8031px_+_6.501vi,_80px)]">
                
                {{ $slot }}
                
            </main>

            @yield('other-contents')
            
            
            
        
            @include('layouts.partials.footer')
        
        

        @stack('modals')

        @livewireScripts
    </body>
</html>
