<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\LoginController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('ajoutArticle',[ArticleController::class, 'ajoutArticlePage'])->name("pageAjoutArticle");
Route::post('insertArticle',[ArticleController::class, 'ajoutArticle'])->name("AjoutArticle");
Route::get('listeArticle',[ArticleController::class, 'liste'])->name("pageListeArticle");
Route::get('/ficheArticle/{id}-{titre}',[ArticleController::class, 'fiche'])->name("ficheArticle");
Route::get('modifArticle/{id}', [ArticleController::class, 'pageModif'])->name('modifArticle');
Route::post('modificationArticle', [ArticleController::class, 'modification'])->name('modifierArticle');
Route::get('/', [LoginController::class, 'loginPage'])->name('pageLogin');
Route::post('login', [LoginController::class, 'login'])->name('login');