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

  /*Modification de catégorie*/
Route::post('/modifier/categorie-traitement/', [CategorieController::class, 'ModifierCategorieTraitement']);
Route::get('/modifier-categorie/{id}', [CategorieController::class, 'ModifierCategorie']);

    /*Suppression d'un categorie */
Route::get('/supprimer-categorie/{id}', [CategorieController::class, 'SupprimerCategorie']);
