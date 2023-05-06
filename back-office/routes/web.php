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

Route::middleware(['check_session'])->group(function () {
Route::get('ajoutArticle',[ArticleController::class, 'ajoutArticlePage'])->name("pageAjoutArticle");
Route::get('insertArticle',[ArticleController::class, 'ajoutArticle'])->name("AjoutArticle");
Route::get('listeArticle',[ArticleController::class, 'liste'])->name("pageListeArticle");
Route::get('/ficheArticle/{id}-{titre}',[ArticleController::class, 'fiche'])->name("ficheArticle");
Route::get('modifArticle/{id}', [ArticleController::class, 'pageModif'])->name('modifArticle');
Route::get('modificationArticle', [ArticleController::class, 'modification'])->name('modifierArticle');
});

Route::get('/', [LoginController::class, 'loginPage'])->name('pageLogin');
Route::post('login', [LoginController::class, 'login'])->name('login');
Route::get('logout', [LoginController::class, 'logout'])->name('logout');