@extends('tutorials.layouts.base')

@section('title')
<x-volver-button /> 
<div class="mb-4 bg-teal-800">
    <x-titulo-h1 :texto="$title" colorTexto="text-teal-100" /> 
</div>
@endsection

@section('blockquote')
    <x-comentario-blockquote :texto="$blockquote" />
@endsection

@section('content')
<a>Este es un enlace inline </a>
<p class="bg-blue-200 inline">Este es un texto inline.</p>
<span class="bg-teal-200 block">Este es un texto block.</span>
<div class="flex">
   <div>1</div>
   <div>2</div>
   <div>3</div>
   <div>4</div>
   <div>5</div>
</div>
@endsection


</html>
