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
    <div class="bg-red-100">
        <h1> -- ESTE ES UN TEXTO DENTRO DE H1 --</h1>
        <h2> -- ESTE ES UN TEXTO DENTRO DE H2 --</h2>
        <h3> -- ESTE ES UN TEXTO DENTRO DE H3 --</h3>
        <h4> -- ESTE ES UN TEXTO DENTRO DE H4 --</h4>
        <h5> -- ESTE ES UN TEXTO DENTRO DE H5 --</h5>
        <h6> -- ESTE ES UN TEXTO DENTRO DE H6 --</h6>
    </div>
@endsection
