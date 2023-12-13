@extends('tutorials.layouts.base')

@section('title')
    <div class="mb-4 bg-amber-200">
        <h1 class="text-center p-4 font-bold text-3xl text-amber-800"> {{ $title }}</h1>
    </div>
@endsection

@section('blockquote')
    <blockquote class="p-4 my-4 border-s-4 border-amber-300 bg-amber-50 dark:border-amber-500 dark:bg-amber-800">
        <p class="text-xl italic font-medium leading-relaxed text-gray-900 dark:text-white">
            {{ $blockquote }}
        </p>
    </blockquote>
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
