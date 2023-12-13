@extends('tutorials.layouts.base')

@section('title')
<div class="mb-4 bg-teal-800">
    <h1 class="text-center p-4 font-bold text-3xl text-teal-100"> {{ $title }}</h1>
</div>
@endsection

@section('blockquote')
<blockquote class="p-4 my-4 border-s-4 border-teal-400 bg-teal-50 dark:border-teal-500 dark:bg-teal-800">
    <p class="text-xl italic font-medium leading-relaxed text-gray-900 dark:text-teal-100">
        {{ $blockquote }}
    </p>
</blockquote>
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
