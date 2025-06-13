@extends('template')
@section('titre', 'Page d\’accueil')
@section('content')
<nav class="bg-slate-800">
    <div class="w-full p-6">
        <p class="text-4xl font-bold flex justify-center text-white">Page d'Acceuil Blog</p>
    </div>
</nav>
<div class="pt-3 pr-3 flex justify-end">
    <button class="w-auto text-white bg-green-600 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center"><a href="{{ route('createPost') }}">Créer un Post</a></button>
</div>
<section class="flex flex-wrap gap-6 p-10 justify-evenly">
    @foreach($list as $post)
        <div class="card bg-[#2B292D] h-auto w-80 rounded-xl p-6">
            <p class="text-teal-50 pb-10 text-2xl flex justify-center">n°{{ $post->id }} - {{ $post->title }}</p>
            <p class="text-teal-50 p-5 text-2xl flex justify-center font-semibold">{{ $post->content }}</p>
            <div class="flex justify-around align-bottom">
                <button class="w-auto text-white bg-blue-600 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                    <a href="{{ route('single_post', $post->id) }}">View all</a>
                </button>
                
            </div>
        </div>
    @endforeach
</section>

@endsection

