<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content=" {{ $metaDescription ?? 'Default meta description' }} ">

    <title>Laravel_9 - {{$title ?? ''}} </title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap"
        rel="stylesheet">

</head>

<body>
    <x-layouts.navigation />
    {{ $slot }}

</body>

</html>
