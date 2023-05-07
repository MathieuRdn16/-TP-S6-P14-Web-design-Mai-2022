<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Support\Facades\Cache;
class ArticleController extends Controller
{

    public function liste(){
		$list=Cache::remember('listes',300,function (){
            return Article::all();
        });
        $response = response()->view('listeArticle',['listes'=>$list]);
        $response->header('Cache-Control','max-age=3600 , public ');
        return $response;
        //return view('listeArticle',['listes'=>Article::all()]);
	}

    public function fiche($id){
        $find=Cache::remember('article',120,function () use($id){
            return Article::find($id);
        });
        $response = response()->view('ficheArticle',['article'=>$find]);
        $response->header('Cache-Control','max-age=3600 , public ');
        return $response;
        //return view('ficheArticle',[
        //    'article'=>Article::find($id)
        //]);
    }

}
