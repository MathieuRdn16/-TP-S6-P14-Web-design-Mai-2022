<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
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


Route::middleware(['gzip'])->group(function(){
    Route::get('/',[ArticleController::class, 'liste'])->name("pageListeArticle");
    Route::get('/ficheArticle/{id}-{titre}',[ArticleController::class, 'fiche'])->name("ficheArticle");
    Route::get('/search',[ArticleController::class, 'search'])->name("searchArticle");

});