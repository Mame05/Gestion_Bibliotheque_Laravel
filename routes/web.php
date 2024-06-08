<?php

use App\Http\Controllers\CategorieController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

    /* Routes pour ajouter une catégorie */
Route::get('/categorie/ajouter', [CategorieController::class, 'AjouterCategorie']);
Route::post('/ajouter/categorie-traitement', [CategorieController::class, 'AjouterCategorieTraitement']);
      
