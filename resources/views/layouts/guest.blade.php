<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet">
    @livewireStyles
</head>
<body>
    {{ $slot }}

    <!-- Scripts -->
    @livewireScripts
    <script src="{{ mix('/js/app.js') }}" defer></script>
</body>
</html>
