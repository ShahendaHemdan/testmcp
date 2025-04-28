<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }} - @yield('title', 'Welcome')</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    {{-- TODO: Add compiled CSS link (e.g., Mix or Vite) --}}
    {{-- <link href="{{ mix('css/app.css') }}" rel="stylesheet"> --}}

    <!-- Scripts -->
    {{-- TODO: Add compiled JS link (e.g., Mix or Vite) --}}
    {{-- <script src="{{ mix('js/app.js') }}" defer></script> --}}
    @stack('styles')
</head>
<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100">
        @include('layouts.partials.nav')

        <!-- Page Content -->
        <main>
            @yield('content')
        </main>

        @include('layouts.partials.footer')
    </div>

    @stack('scripts')
</body>
</html> 