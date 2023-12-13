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
    <div class="columns">
        @if (url()->current() !== 'http://127.0.0.1:8000/tutorials')
            <div class="basis-1/12">

                <a href="{{ url('tutorials') }}"
                    class="relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-purple-600 to-blue-500 group-hover:from-purple-600 group-hover:to-blue-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800"
                    role="button">
                    <span
                        class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                        < VOLVER </span>
                </a>

            </div>
        @endif
        <div class="{{ url()->current() === 'http://127.0.0.1/tutorials' ? 'basis-full' : 'basis-11/12' }}">
            @yield('title')
        </div>
    </div>

    <div class="container mx-auto">
        @yield('blockquote')
    </div>

    <div class="container  mx-auto py-12">
        @yield('content')
    </div>

</body>

</html>
