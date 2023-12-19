@extends('tutorials.layouts.base')

@section('title')
    <x-volver-button />
    <div class="mb-4 bg-blue-200">
        <x-titulo-h1 :texto="$title" colorTexto="text-blue-800" />

    </div>
@endsection

@section('blockquote')
    <x-comentario-blockquote :texto="$blockquote" />
@endsection

@section('content')
    <p class="text-center">Bordes.</p>

    <div class="imagen rounded-md border-2 border-purple-800  bg-cover bg-center"></div>

    <hr class="h-px my-8 border-1 border-stone-900">

    <div class="m-6 grid grid-cols-3 gap-4">
        <div class="p-4 bg-zinc-300 border-2 border-red-800 hover:bg-red-300 hover:border-zinc-800">
            <p>Asperiores odit dignissimos quas illum eum totam, quis quaerat magni doloremque quidem laborum ipsam,
                similique aut maxime commodi impedit fugiat est? Sint.</p>
        </div>
        <div class="p-4 bg-zinc-300 border-4 border-yellow-800 hover:bg-yellow-300 hover:border-zinc-800">
            <p>Excepturi doloribus libero consequatur earum, error sapiente? Nesciunt, praesentium asperiores molestiae
                perferendis ducimus autem, ratione tempore hic expedita aut vel impedit eaque!</p>
        </div>
        <div class="p-4 bg-zinc-300 border-8 border-sky-800 hover:bg-sky-300 hover:border-zinc-800">
            <p>Recusandae nostrum nulla quisquam eaque in quod. Cum facere reiciendis adipisci reprehenderit, dolore
                assumenda maxime nam ullam recusandae dolores atque cumque aliquid!</p>
        </div>
        <div class="p-4 bg-zinc-300 border-x-4 border-pink-600 hover:bg-pink-300 hover:border-zinc-800">
            <p>Adipisci delectus neque facere soluta, et alias sapiente enim velit sunt quae? Autem sit unde cupiditate
                fugiat eveniet quidem explicabo neque blanditiis?</p>
        </div>
        <div class="p-4 bg-zinc-300 border-2 border-violet-600 hover:bg-violet-300 hover:border-zinc-800">
            <p>Hic, esse. Rem, quo pariatur obcaecati vero odio nisi culpa laudantium ipsa! Aliquam corporis sequi totam
                similique aliquid aspernatur nulla deserunt in!</p>
        </div>
        <div class="p-4 bg-zinc-300 border-y-8 border-green-800 hover:bg-green-300 hover:border-zinc-800">
            <p>Voluptas molestias at nesciunt eveniet asperiores nostrum tempore nemo! Rem exercitationem asperiores aliquam
                distinctio quibusdam reiciendis earum officia odit dolorem, error voluptate.</p>
        </div>
        <div class="p-4 bg-zinc-300  border-8 border-dotted border-amber-800 hover:bg-amber-300 hover:border-zinc-800">
            <p>Accusantium nesciunt asperiores, quasi maiores impedit laudantium debitis officia ab nisi laborum similique
                aut! Veritatis possimus veniam eveniet, at similique iste repellat?</p>
        </div>
        <div class="p-4 bg-zinc-300 border-2 border-dashed border-indigo-800 hover:bg-indigo-300 hover:border-zinc-800">
            <p>Voluptatibus delectus, earum ex saepe maiores odio minima, ipsa ullam quaerat, nulla excepturi quos deleniti
                odit molestiae quod dicta soluta ea. Eos!</p>
        </div>
        <div class="p-4 bg-zinc-300  border-8 border-double border-rose-800 hover:bg-rose-300 hover:border-zinc-800">
            <p>Suscipit nemo, corporis laborum blanditiis deleniti maiores enim assumenda voluptate, placeat quisquam
                architecto nam perferendis dolores pariatur veniam culpa dignissimos, exercitationem nisi.</p>
        </div>

        <div class="p-4 bg-lime-300  border-8 border-double border-purple-400 rounded-md">
            
        </div>

        <div class="p-4 bg-lime-300  border-8 border-double border-neutral-400 rounded-full">
           
        </div>

        <div class="p-4 bg-lime-300  border-8 border-double border-gray-400 rounded-lg">
           
        </div>

        <div class="w-32 h-32 bg-indigo-300  border-8 border-double border-purple-400 rounded-md">
            
        </div>

        <div class="w-32 h-32 bg-indigo-300  border-8 border-double border-neutral-400 rounded-full">
           
        </div>

        <div class="h-32 bg-indigo-300  border-8 border-double border-gray-400 rounded-lg">
           
        </div>
    </div>
@endsection

@section('customCSS')
    <style>
        .imagen {
            background-image: url("{{ asset('assets/images/portfolio-gray-bg.jpg') }}");
            height: 480px;
            width: 640px;
            margin-left: auto;
            margin-right: auto;
        }
    </style>
@endsection
