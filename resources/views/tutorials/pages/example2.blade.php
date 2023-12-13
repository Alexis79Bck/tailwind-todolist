@extends('tutorials.layouts.base')

@section('title')
    <div class="mb-4 bg-orange-200">
        <h1 class="text-center p-4 font-bold text-3xl text-orange-800"> {{ $title }}</h1>
    </div>
@endsection

@section('blockquote')
    <blockquote class="p-4 my-4 border-s-4 border-orange-300 bg-orange-50 dark:border-orange-500 dark:bg-orange-800">
        <p class="text-xl italic font-medium leading-relaxed text-gray-900 dark:text-white">
            {{ $blockquote }}
        </p>
    </blockquote>
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
