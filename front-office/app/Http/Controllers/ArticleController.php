<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorie;
use App\Models\Article;

class ArticleController extends Controller
{

    public function liste(){
		return view('listeArticle',['listes'=>Article::all()]);
	}

    public function fiche($id){
        return view('ficheArticle',[
            'article'=>Article::find($id)
        ]);
    }

}
