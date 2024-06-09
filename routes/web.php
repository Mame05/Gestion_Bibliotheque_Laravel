<?php

use App\Http\Controllers\CategorieController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

    /* Routes pour ajouter une catégorie */
Route::get('/categories/ajouter', [CategorieController::class, 'AjouterCategorie']);
Route::post('/ajouter/categorie-traitement', [CategorieController::class, 'AjouterCategorieTraitement']);

   /*Affichage de categorie */
Route::get('/categories', [CategorieController::class, 'ListeCategorie']);
