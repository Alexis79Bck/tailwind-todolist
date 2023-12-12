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

<body>
    <div class="mb-4 bg-indigo-800">
        <h1 class="text-center p-4 font-bold text-3xl text-indigo-100"> {{ $title }}</h1>
    </div>
    <div class="container mx-auto">
        <blockquote
            class="p-4 my-2 border-s-4 border-indigo-400 bg-indigo-50 dark:border-indigo-500 dark:bg-indigo-800">
            <p class="text-xl italic font-medium leading-relaxed text-indigo-900 dark:text-indigo-100">
                {{ $blockquote }}
            </p>
        </blockquote>
    </div>
    <div class="container mx-auto py-12">
        <h1 class="">Titulo de prueba</h1>
        <p class="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae fuga ab earum temporibus magni debitis
            asperiores suscipit aut modi enim? Enim aliquid similique quibusdam inventore sequi, qui repellat earum
            iusto.</p>
        <ul>
            <li><span class="">Elemento #01</span></li>
            <li><span class="">Elemento #02</span></li>
            <li><span class="">Elemento #03</span></li>
        </ul>
    </div>

</body>

</html>
