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
    <div class="imagen border-4 rounded-md border-purple-800 bg-cover bg-center"></div>
    <hr class="h-px my-8 border-1 border-stone-900">
    <p class="text-center">Background Estatico.</p>
    
    <div class="imagen-fixed mx-auto border-2 rounded-md border-amber-600 bg-fixed bg-content bg-center"></div>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus aut quae officia facilis repudiandae. Nostrum sed
        ea facilis harum, molestias rerum! Dicta debitis in molestiae consectetur, nisi ratione ex. Blanditiis.</p>
    <p>Sapiente ut possimus deserunt quod fugit in iure nobis, voluptate ducimus perferendis porro soluta totam? Minima
        repellat maxime quasi molestiae, ipsam nobis maiores quis perspiciatis minus nostrum alias voluptates earum.</p>
    <p>Sed sequi quas ea, tempora non asperiores recusandae fuga ducimus cum nisi illum quia nostrum aut error. Debitis sed
        repudiandae cum quia commodi minima sint soluta aspernatur est, porro iste!</p>
    <p>Vitae doloribus iste natus magni, nesciunt, rem repudiandae id corrupti corporis quo voluptatem. Perferendis dolore
        vitae dolor eligendi provident similique. Tenetur rerum expedita nostrum obcaecati exercitationem necessitatibus,
        animi officia? Laboriosam.</p>
    <p>Ad omnis odio laudantium rerum, facilis rem repudiandae quod ea nobis! Odit numquam illo hic culpa? Deleniti
        voluptatem accusantium neque doloribus nisi, consectetur consequuntur sit, aut unde, aliquid eos! Repellendus!</p>
    <p>Enim illo amet temporibus, voluptatem ipsum dicta, quisquam similique vero laborum rerum ut itaque aliquid
        accusantium dolore quibusdam explicabo nihil veritatis illum deleniti molestiae assumenda error repudiandae quidem
        culpa. Quos.</p>
    <p>Quod iste tempore eaque earum rerum sint dicta commodi dolorem voluptates molestias. Esse minima voluptas quia, iste
        doloribus, aspernatur dolore labore, distinctio ex iusto incidunt saepe modi itaque tenetur sed.</p>
    <hr class="h-px my-8 border-1 border-stone-900">
    <p class="text-center">Variaciones de Opacidad.</p>
    <div class="columns-5">
        <div class="h-24 bg-amber-600 bg-opacity-100"></div>
        <div class="h-24 bg-amber-600 bg-opacity-75"></div>
        <div class="h-24 bg-amber-600 bg-opacity-50"></div>
        <div class="h-24 bg-amber-600 bg-opacity-25"></div>
        <div class="h-24 bg-amber-600 bg-opacity-0"></div>    
    </div>
    <div class="columns-5">
        <div class="h-24 bg-red-600 bg-opacity-100"></div>
        <div class="h-24 bg-red-600 bg-opacity-75"></div>
        <div class="h-24 bg-red-600 bg-opacity-50"></div>
        <div class="h-24 bg-red-600 bg-opacity-25"></div>
        <div class="h-24 bg-red-600 bg-opacity-0"></div>    
    </div>
    <div class="columns-5">
        <div class="h-24 bg-green-600 bg-opacity-100"></div>
        <div class="h-24 bg-green-600 bg-opacity-75"></div>
        <div class="h-24 bg-green-600 bg-opacity-50"></div>
        <div class="h-24 bg-green-600 bg-opacity-25"></div>
        <div class="h-24 bg-green-600 bg-opacity-0"></div>    
    </div>
   
@endsection

@section('customCSS')
    <style>
        .imagen {
            background-image: url("{{ asset('assets/images/portfolio-gray-bg.jpg') }}");
            height: 480px;
            width: 640px;
            margin-left: auto;
            margin-right: auto;
        }
        .imagen-fixed {
            background-image: url("{{ asset('assets/images/computer-blue-blur-bg.jpg') }}");
            height: 640px;
            width: 920px;
        }
    </style>
@endsection
