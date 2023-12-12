<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    @vite('resources/css/app.css')
</head>

<body class="antialiased">
    <div class="mb-4 bg-teal-800">
        <h1 class="text-center p-4 font-bold text-3xl text-teal-100"> {{ $title }}</h1>
    </div>
    <div class="container mx-auto">
        <blockquote class="p-4 my-4 border-s-4 border-teal-400 bg-teal-50 dark:border-teal-500 dark:bg-teal-800">
            <p class="text-xl italic font-medium leading-relaxed text-gray-900 dark:text-teal-100">
                {{ $blockquote }}
            </p>
        </blockquote>
    </div>
    <div class="container mx-auto py-12">
         <a>Este es un enlace inline </a>
         <p class="bg-blue-200 inline">Este es un texto inline.</p>
         <span class="bg-teal-200 block">Este es un texto block.</span>
         <div class="flex">
            <div>1</div>
            <div>2</div>
            <div>3</div>
            <div>4</div>
            <div>5</div>
         </div>
    </div>

</body>

</html>
