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
    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ullam numquam accusantium libero, tenetur pariatur,
        explicabo illum totam, dignissimos corrupti ratione dicta quasi repudiandae molestias dolorum. Illum perferendis
        animi minus incidunt.</p>
    <div class="imagen border-4 rounded-md border-purple-800 bg-cover bg-center"></div>
@endsection

@section('customCSS')
    <style>
        .imagen {
            background-image: url("{{ asset('assets/images/portfolio-gray-bg.jpg')}}");
            height: 480px;
            width: 640px;
            margin-left: auto;
            margin-right: auto;
        }
    </style>
@endsection
