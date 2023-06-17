<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Adilonapsh') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        .divider {
            display: flex;
            flex-direction: row;
            align-items: center;
            align-self: stretch;
            margin-top: 1rem;
            margin-bottom: 1rem;
            height: 1rem;
            white-space: nowrap;
        }

        .divider:before,
        .divider:after {
            content: "";
            flex-grow: 1;
            height: .125rem;
            width: 100%;
        }

        .divider:not(:empty) {
            gap: 1rem;
        }
    </style>
</head>

<body class="antialiased">
    <div class="font-sans text-gray-900 dark:text-gray-100 antialiased">
        {{ $slot }}
    </div>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({});
    </script>
</body>


</html>
