<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>talentoskills</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Styles / Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body>
    <header class="container-lg">
        @if (Route::has('login'))
        <nav class="flex justify-end space-x-2 border-style: solid border-2 border-sky-500;">

            @auth
            <a href="{{ url('/dashboard') }}"
                class="font-medium px-3 py-2 text-slate-700 rounded-lg hover:bg-slate-100 hover:text-slate-900">
                Dashboard
            </a>
            @else
            <a href="{{ route('login') }}"
                class="font-medium px-3 py-2 text-slate-700 rounded-lg hover:bg-slate-100 hover:text-slate-900">
                Log in
            </a>

            @if (Route::has('register'))
            <a href="{{ route('register') }}"
                class="font-medium px-3 py-2 text-slate-700 rounded-lg hover:bg-slate-100 hover:text-slate-900">
                Register
            </a>
            @endif
            @endauth
        </nav>
        @endif
    </header>










    <footer class="py-16 text-center text-sm text-black dark:text-white/70">
    </footer>
</body>

</html>