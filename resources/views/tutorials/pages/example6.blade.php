@extends('tutorials.layouts.base')

@section('title')
    <x-volver-button />
    <div class="mb-4 bg-indigo-800">
        <x-titulo-h1 :texto="$title" colorTexto="text-indigo-100" />
    </div>
@endsection

@section('blockquote')
    <x-comentario-blockquote :texto="$blockquote" />
@endsection

@section('content')
    <h1 class="">Titulo de prueba</h1>
    <p class="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae fuga ab earum temporibus magni debitis
        asperiores suscipit aut modi enim? Enim aliquid similique quibusdam inventore sequi, qui repellat earum
        iusto.</p>
    <ul>
        <li><span class="">Elemento #01</span></li>
        <li><span class="">Elemento #02</span></li>
        <li><span class="">Elemento #03</span></li>
    </ul>
@endsection
