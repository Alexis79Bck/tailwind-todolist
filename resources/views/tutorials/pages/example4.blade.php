@extends('tutorials.layouts.base')

@section('title')
<x-volver-button /> 
    <div class="mb-4 bg-stone-600">
        <x-titulo-h1 :texto="$title" colorTexto="text-stone-100" /> 
    </div>
@endsection

@section('blockquote')
    <x-comentario-blockquote :texto="$blockquote" />
@endsection

@section('content')
    <div class="columns-4">
        <img src="https://random.imagecdn.app/320/200" alt="">
        <img src="https://random.imagecdn.app/240/160" alt="">
        <img src="https://random.imagecdn.app/600/480" alt="">
        <img src="https://random.imagecdn.app/160/160" alt="">
        <img src="https://random.imagecdn.app/600/480" alt="">
        <img src="https://random.imagecdn.app/320/240" alt="">
    </div>

    <div class="columns-2 mt-4">
        <p class="bg-pink-200">Vivamus sagittis est eu neque ultricies, vitae convallis sem ullamcorper. Class
            aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nullam feugiat
            velit vitae leo rhoncus varius. Nunc pellentesque risus sit amet diam tempor rhoncus. Vestibulum auctor
            vitae tellus ut porttitor. Vestibulum id laoreet ligula. Fusce bibendum, quam at condimentum congue,
            ipsum purus convallis turpis, feugiat convallis lectus arcu et nulla. Suspendisse potenti. Donec aliquet
            odio a orci pellentesque, et semper quam vehicula.</p>
        <p class="bg-red-200">Ipsam eius sed obcaecati dicta maxime at, sit modi adipisci provident. Error harum hic
            omnis, voluptatibus provident autem aspernatur vitae illum quibusdam! Illum facilis itaque voluptate
            nulla harum mollitia a quasi reprehenderit autem. Adipisci dicta minus eius soluta et reiciendis error
            placeat voluptatem eveniet?</p>
        <p class="bg-green-200 break-after-column">Atque aliquid nostrum, inventore mollitia error doloribus officiis
            obcaecati
            quisquam quae nobis repellat deserunt ea quo recusandae quasi voluptas, omnis voluptatum ducimus. Ea
            autem perspiciatis adipisci, officia placeat iste
            id laboriosam veniam quaerat, perferendis error. Repellendus quas adipisci doloribus amet facilis
            consequatur tempore est!</p>
        <p class="bg-indigo-200">Et incidunt laboriosam doloribus eaque inventore blanditiis maiores, aliquam saepe
            in officiis obcaecati, neque atque, corrupti illo quaerat nesciunt. Ipsum, officia voluptatem.</p>
        <p class="bg-yellow-200">Nam fermentum quam suscipit varius blandit. Donec eros libero, fermentum vitae nibh
            a, dictum dignissim felis. Curabitur erat leo, laoreet eget malesuada et, aliquam nec dui. Mauris
            rhoncus euismod sapien. Mauris auctor laoreet sem. Nullam ornare sapien vitae libero tempus bibendum. In
            quis lacinia eros. In elit est, lobortis et ligula eget, ultrices suscipit turpis. Pellentesque habitant
            morbi tristique senectus et netus et malesuada fames ac turpis egestas. Integer tincidunt lacus a
            eleifend placerat. Mauris id porta massa. Sed rutrum eros luctus risus molestie eleifend.</p>
        <p class="bg-violet-200">Error vel quia obcaecati delectus natus. Exercitationem eos vitae iusto hic
            dolorem, voluptates odit placeat praesentium! Quos soluta incidunt quam voluptates perspiciatis.</p>
    </div>
@endsection
