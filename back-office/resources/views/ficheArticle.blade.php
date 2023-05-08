@extends('layouts.layout')
    @section('meta')
    <meta name="description" content="{{$article->titre}}" />
    @endsection
    @section('title')
    <title>{{$article->titre}}</title>
    @endsection
    @section('content')   
        <div class="container px-6 mx-auto grid">
            <!-- General elements -->
           
            <div class="grid gap-6 mb-8 xl:grid-cols-12">
                <div class="min-w-0 p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
               <center>
                    <h3>
                        {{strtoupper($article->Categorie->designation)}}: 
                    </h3>
               </center>
                    <h1
                    class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
                        <strong >{{strtoupper($article->titre)}}</strong>
                    </h1>
                    <img src="{{$article->image}}" />
                    <p >
                        <?php echo $article->contenu ?>
                    </p>
                    <br>
                    <a class="inline-flex items-center w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200"
                       href="/modifArticle/{{$article->idarticle}}">
                        <input type="button" class="px-5 py-3 font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple" value="Modification"/>
                    </a>
                    <a class="inline-flex items-center w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200"
                       href="/deleteArticle/{{$article->idarticle}}">
                        <input type="button" class="px-5 py-3 font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple" value="Supprimer"/>
                    </a>
                </div>
            </div>
        </div>
    @endsection
