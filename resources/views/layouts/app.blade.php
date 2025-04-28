<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Nique - Fine Dining Restaurant">

    <title>{{ config('app.name', 'Nique Restaurant') }} - @yield('title', 'Fine Dining Experience')</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=playfair-display:400,500,600,700|inter:300,400,500,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            color: #333;
        }
        h1, h2, h3, h4, h5, h6 {
            font-family: 'Playfair Display', serif;
        }
        .btn-primary {
            @apply bg-amber-800 text-white px-6 py-3 rounded-sm hover:bg-amber-900 transition duration-300;
        }
        .menu-item {
            @apply border-b border-gray-200 pb-6 mb-6;
        }
    </style>
    @stack('styles')
</head>
<body class="antialiased">
    <div class="min-h-screen bg-white">
        @include('layouts.partials.nav')

        <!-- Page Content -->
        <main>
            @yield('content')
        </main>

        @include('layouts.partials.footer')
    </div>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.12.0/dist/cdn.min.js" defer></script>
    @stack('scripts')
</body>
</html> 