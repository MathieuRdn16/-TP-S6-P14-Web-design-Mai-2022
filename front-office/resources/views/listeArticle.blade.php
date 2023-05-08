@extends('layouts.layout')
    @section('title')
    <title>Liste</title>
    @endsection
    @section('content')
    <div class="container px-6 mx-auto grid">
        <!-- General elements -->
        <h2
                class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200"
        >
            Liste des articles.
        </h2>
        <br>
        <div class="flex justify-center flex-1 lg:mr-32">
            <form action="/search" method="get">
                    <input
                        class=" dark:focus:shadow-outline-gray dark:focus:placeholder-gray-600 dark:bg-gray-700 dark:text-gray-200 focus:placeholder-gray-500 focus:bg-white focus:border-purple-300 focus:outline-none focus:shadow-outline-purple form-input"
                        type="text"
                        placeholder="Titre ou résumé...."
                        name="mots"
                    />
                <input type="submit" class="px-5 py-3 font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple" value="Rechercher"/>
             </form>
        </div>
        <div class="grid gap-4 mb-8 xl:grid-cols-4">
            <?php foreach ($listes as $ls){ ?>
                <a
                        class="inline-flex items-center w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200"
                        href="/ficheArticle/{{$ls->idarticle}}-{{$ls->slug()}}"
                >
            <div class="min-w-0 p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
                <h4
                    <strong >{{strtoupper($ls->Categorie->designation)}}: {{$ls->titre}}</strong>
                </h4>
                <p><img src="{{$ls->image}}" alt="{{$ls->Categorie->designation}}"/></p>
                <p class="text-gray-600 dark:text-gray-400">
                    {{$ls->resume}}
                </p>
            </div>
            </a>
                <?php } ?>
            </div>
    </div>
@endsection
