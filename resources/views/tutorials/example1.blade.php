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

    <div class="mb-4 bg-blue-200">
        <h1 class="text-center p-4 font-bold text-3xl text-blue-800"> {{$title}}</h1>        
    </div>
    <div class="container">
        <h1> -- ESTE ES UN TEXTO DENTRO DE H1 --</h1>
        <h2> -- ESTE ES UN TEXTO DENTRO DE H2 --</h2>
        <h3> -- ESTE ES UN TEXTO DENTRO DE H3 --</h3>
        <h4> -- ESTE ES UN TEXTO DENTRO DE H4 --</h4>
        <h5> -- ESTE ES UN TEXTO DENTRO DE H5 --</h5>
        <h6> -- ESTE ES UN TEXTO DENTRO DE H6 --</h6>
    </div>
    
</body>

</html>
