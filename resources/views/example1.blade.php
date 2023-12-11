<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Example 1 con Tailwind v3</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    @vite('resources/css/app.css')
</head>

<body class="antialiased">
    {{--  
        Se agrega la clase mx-auto para centrar el contenedor, 
        pero si se desea que la clase container por defecto 
        centre el contenedor, se debe agregar dicha clase en el archivo
        tailwind.config.js que se encuentra en la raiz del proyecto. 
    --}}
    <div class="container">
        <h1> -- ESTE ES UN TEXTO DENTRO DE H1 --</h1>
        <h2> -- ESTE ES UN TEXTO DENTRO DE H2 --</h2>
        <h3> -- ESTE ES UN TEXTO DENTRO DE H3 --</h3>
        <h4> -- ESTE ES UN TEXTO DENTRO DE H4 --</h4>
        <h5> -- ESTE ES UN TEXTO DENTRO DE H5 --</h5>
        <h6> -- ESTE ES UN TEXTO DENTRO DE H6 --</h6>
    </div>
    <hr class="border border-blue-500" height="4px"/>
    <div class="container">
        {{--  
            Cuando se necesita trabajar con grillas (layouts), se debe considerar:
            1.- Utilizar un elemento div con la clase container donde se va a estructurar la grilla.
            2.- El segundo div debe tener la clase grid para indicar que los elementos se dividiran en columnas.
            3.- Para crear la estructura responsiva, se debe emplear prefijos de breakpoints:
                - default: es el breakpoint minimo por defecto, por lo general no se le indica con ningun prefijo.
                - sm	640px	@media (min-width: 640px) { ... }
                - md	768px	@media (min-width: 768px) { ... }
                - lg	1024px	@media (min-width: 1024px) { ... }
                - xl	1280px	@media (min-width: 1280px) { ... }
                - 2xl	1536px	@media (min-width: 1536px) { ... }

                Tambien se puede emplear varias clases que pueden ayudar a estructurar layouts mas complejos, tal como:
                - grid-cols-* (1 - 12): para establecer el numero de columnas que formará la grilla.
                - col-span-* (1 - 12): para establecer el numero de columnas que ocupara la celda donde se aplica.
                - col-start-* : Esta clase indicara a partir de cual columna iniciara la celda, segun el numero de columnas
                                establecida.
                - grid-rows-* : para establecer el numero de filas que formará la grilla.
                - row-span-* : para establecer el numero de filas que ocupara la celda donde se aplica. 
        --}}
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
