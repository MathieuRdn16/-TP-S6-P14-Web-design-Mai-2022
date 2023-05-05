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
                </div>
            </div>
        </div>
    @endsection
