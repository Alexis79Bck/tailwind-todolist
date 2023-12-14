@extends('tutorials.layouts.base')

@section('title')
<x-volver-button /> 
    <div class="mb-4 bg-orange-200">
        <x-titulo-h1 :texto="$title" colorTexto="text-orange-800" /> 
    </div>
@endsection

@section('blockquote')
    <x-comentario-blockquote :texto="$blockquote" />
@endsection

@section('content')
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4  gap-3">
        <div class="bg-blue-500 text-center sm:col-span-2 md:col-span-3 lg:col-span-4 "> A </div>
        <div class="bg-teal-500 text-center"> B </div>
        <div class="bg-purple-500 text-center"> C </div>
        <div class="bg-rose-500 text-center row-span-2"> D </div>
        <div class="bg-yellow-700 text-center row-span-4"> E </div>
        <div class="bg-green-400 text-center"> F </div>
    </div>
@endsection
