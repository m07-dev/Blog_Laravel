@extends('template')
@section('titre', 'Page d\’accueil')
@section('content')

<body class="bg-gray-100 min-h-screen flex justify-center items-center">
    <div
        class="bg-white shadow-md border border-gray-200 rounded-lg max-w-sm p-4 sm:p-6 lg:p-8 dark:bg-gray-800 dark:border-gray-700 flex ">
        <form class="space-y-6" action="{{route('form:action')}}" method="post">
            <h3 class="text-xl font-medium text-gray-900 dark:text-white flex justify-center">Crée votre article</h3>
            <div>
                <label for="title" class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300 ">Votre Titre</label>
                <input type="text" name="title" id="title" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required="">
            </div>
            <div>
                <label for="content" class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Contenu du Blog</label>
                <textarea type="content" name="content" id="content" placeholder="Entrez quelque chose..." rows="5" cols="33" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required=""></textarea>
            </div>
            <div class="flex justify-between">
                <button type="submit" class="w-auto text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                    Supprimer
                </button>
                <button type="submit" class="w-auto text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Envoyer</button>
            </div>
            @csrf
            <div class="flex justify-center">
                    <button class="w-auto text-white bg-teal-600 hover:bg-teal-800 focus:ring-4 focus:ring-teal-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center"><a href="{{ route('form:action') }}">Allez a l'acceuil</a></button>
            </div>
        </form>

    </div>
</body>
@endsection