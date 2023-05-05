<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorie;
use App\Models\Article;

class ArticleController extends Controller
{
    public function ajoutArticlePage(){
        return view('ajoutArticle',['categories'=>Categorie::all()]);
    }

    public function liste(){
		return view('listeArticle',['listes'=>Article::all()]);
	}


    public function ajoutArticle(Request $req){
        $titre=$req->input('titre');
        $resume=$req->input('resume');
        $idCat=$req->input('categorie');
        $contenu=$req->input('contenu');
        $image=$req->input('image');
        $article= new Article();
        $article->contenu=$contenu;
        $article->resume=$resume;
        $article->titre=$titre;
        $article->categorie=$idCat;
        $article->image=$image;
        $article->save();
        return $this->liste();
    }
    public function fiche($id){
        return view('ficheArticle',[
            'article'=>Article::find($id)
        ]);
    }
    public function pageModif($id){
        return view('modifArticle',[
            'article'=>Article::find($id),
            'categories'=> Categorie::all()
        ]);
    }
    public function modification(Request $req){
        $article=Article::find($req->input('idart'));
        $article->update([
            'titre'=>$req->input('titre'),
            'categorie'=>$req->input('categorie'),
            'contenu'=>$req->input('contenu'),
            'resume'=>$req->input('resume'),
            'image'=>$req->input('image')
        ]);
        return $this->fiche($article->idarticle);
    }

}
