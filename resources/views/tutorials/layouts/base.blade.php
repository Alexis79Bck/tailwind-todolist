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
    @yield('customCSS')
    @vite('resources/css/app.css')
</head>

<body class="antialiased">
    
        <div>
            @yield('title')
        </div>
    

    <div class="container mx-auto">
        @yield('blockquote')
    </div>

    <div class="container  mx-auto py-12">
        @yield('content')
    </div>

</body>

</html>
