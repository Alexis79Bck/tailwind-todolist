@extends('tutorials.layouts.base')

@section('title')
<div class="bg-lime-300">
    <h1 class="text-center p-4 font-bold text-3xl text-lime-900"> {{ config('app.name') }}</h1>
</div>
@endsection

@section('content')


<div class="grid sm:grid-cols-1 md:grid-cols-3  lg:grid-cols-6  gap-4">
    @foreach ($links as $link)
    <div>
        <a href="{{ url('tutorials/' . $link)}}" class="block p-6 bg-stone-200 border border-gray-600 rounded-lg shadow-lg shadow-zinc-700 hover:shadow-blue-700/50">

            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{$link}}</h5>
            
        </a>
    </div>    
    @endforeach
    
    
    
</div>

@endsection