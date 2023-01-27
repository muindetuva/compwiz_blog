<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Compwiz Blog</title>
    @vite('resources/css/app.css')
</head>
<body class="antialiased">
<nav class="border-bottom">
    <h1>Compwiz Blog</h1>
</nav>
{{ $slot }}
</body>
</html>
