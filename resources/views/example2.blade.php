<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{config('app.name')}}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    @vite('resources/css/app.css')
</head>

<body class="antialiased">
    <div class="mb-4">
        <h1 class="text-center"> {{$title}}</h1>        
    </div>
    <div class="container">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4  gap-3">
            <div class="bg-blue-500 text-center sm:col-span-2 md:col-span-3 lg:col-span-4 "> A </div>
            <div class="bg-teal-500 text-center"> B </div>
            <div class="bg-purple-500 text-center"> C </div>
            <div class="bg-rose-500 text-center"> D </div>
            <div class="bg-yellow-700 text-center"> E </div>
            <div class="bg-green-400 text-center"> F </div>
        </div>
    </div>

</body>

</html>
