@extends('template')
@section('titre', 'Page d\’accueil')
@section('content')
<form action="{{ route('form:delete', $post->id) }}" method="post">
    <div class="min-h-screen flex justify-center items-center">
        <div class="card bg-[#2B292D] h-auto w-80 rounded-xl p-6">
            <p class="text-teal-50 p-2 text-2xl flex justify-center">n°{{ $post->id }} - {{ $post->title }}</p>
            <p class="text-teal-50 p-7 text-2xl flex justify-center font-semibold">{{ $post->content }}</p>
            <div class="flex justify-around align-bottom">
                <button type="submit" class="w-auto text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                    Supprimer
                </button>
                <button class="w-auto text-white bg-teal-600 hover:bg-teal-800 focus:ring-4 focus:ring-teal-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center"><a href="{{ route('form:action') }}">Allez a l'acceuil</a></button>
            </div>
        </div>
    </div>
    @csrf
</form>
@endsection