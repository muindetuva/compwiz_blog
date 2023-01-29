<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Compwiz Blog</title>
    @vite('resources/css/app.css')
</head>
<body class="antialiased px-2">
<nav class="border-bottom py-3 flex place-items-center">
    <a href="/" class=" text-2xl font-bold">
        <span class="text-yellow-500">Compwiz</span>
        <span class="text-green-500">Blog</span>
    </a>

    <a class="ml-auto font-medium text-sm" href="#">Log In</a>
    <a class="ml-2 text-white font-medium bg-yellow-500 rounded p-1 text-sm" href="#">Register</a>
</nav>
{{ $slot }}
</body>
</html>
