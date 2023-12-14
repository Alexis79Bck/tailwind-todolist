@extends('tutorials.layouts.base')

@section('title')
<x-volver-button /> 
    <div class="mb-4 bg-amber-200">
        <x-titulo-h1 :texto="$title" colorTexto="text-amber-800" /> 
    </div>
@endsection

@section('blockquote')
    <x-comentario-blockquote :texto="$blockquote" />
@endsection

@section('content')
    <div class="grid grid-cols-3 gap-6">
        <div class="col-span-2">
            <iframe class="w-full aspect-video" src="https://www.youtube.com/embed/C660GarxAos?si=0CjX7XSorilo-oqn"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen>
            </iframe>

            <div class="bg-rose-700 aspect-square">
                <p>
                <h1 class="text-white text-center font-bold text-4xl">ASPECT RATIO 1/1 </h1>
                </p>
            </div>

            <div class="bg-purple-700 aspect-[12/5]">
                <p>
                <h1 class="text-white text-center font-bold text-4xl">ASPECT RATIO 12/5 </h1>
                </p>
            </div>

        </div>

        <div class="bg-indigo-300">

        </div>
    </div>
@endsection
