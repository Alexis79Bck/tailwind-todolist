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
    <div class="mb-4 bg-amber-200">
        <h1 class="text-center p-4 font-bold text-3xl text-amber-800"> {{$title}}</h1>        
    </div>

    <div class="container mx-auto py-12">
        <div class="grid grid-cols-3 gap-6">
            <div class="col-span-2">
                <iframe class="w-full aspect-video"
                    src="https://www.youtube.com/embed/C660GarxAos?si=0CjX7XSorilo-oqn"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen>
                </iframe>

                <div class="bg-rose-700 aspect-square">
                    <p> <h1 class="text-white text-center font-bold text-4xl">ASPECT RATIO 1/1 </h1></p>
                </div>

                <div class="bg-purple-700 aspect-[12/5]">
                    <p> <h1 class="text-white text-center font-bold text-4xl">ASPECT RATIO 12/5 </h1></p>
                </div>

            </div>
            
            <div class="bg-indigo-300">

            </div>
        </div>
    </div>

</body>

</html>
