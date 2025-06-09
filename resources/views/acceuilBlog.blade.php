@extends('template')
@section('titre', 'Page d\’accueil')
@section('content')
<nav class="bg-slate-800">
    <div class="w-full p-6">
        <p class="text-4xl font-bold flex justify-center text-white">Page d'Acceuil Blog</p>
    </div>
</nav>

<section class="flex flex-wrap gap-6 p-10">
    @foreach($list as $post)
        <div class="card bg-[#2B292D] h-auto w-80 rounded-xl p-6">
            <p class="text-teal-50 pb-10 text-2xl flex justify-center">n°{{ $post->id }} - {{ $post->title }}</p>
            <p class="text-teal-50 p-5 text-2xl flex justify-center">{{ $post->content }}</p>
        </div>
    @endforeach
</section>

@endsection

