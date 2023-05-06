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
