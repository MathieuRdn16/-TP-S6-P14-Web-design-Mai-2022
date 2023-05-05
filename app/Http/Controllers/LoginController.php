<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Article;
use \Exception;

class LoginController extends Controller
{
    public function loginPage(){
        return view ('login',[
            'error'=>null
        ]);
    }
    public function login(Request $req){
        $admin=new Admin();
        $admin->email=$req->input('email');
        $admin->mdp=$req->input('mdp');
        try{
            $admin->login();
        }catch(Exception $e){
            return view ('login',[
                'error'=>$e->getMessage()
            ]);
        }
        return view('listeArticle',['listes'=>Article::all()]);
    }
}
