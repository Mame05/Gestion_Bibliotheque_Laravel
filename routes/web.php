<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RayonController;
use App\Http\Controllers\CategorieController;

Route::get('/', function () {
    return view('welcome');
});

    /* Ajouter une catégorie */
Route::get('/categories/ajouter', [CategorieController::class, 'AjouterCategorie']);
Route::post('/ajouter/categorie-traitement', [CategorieController::class, 'AjouterCategorieTraitement']);

   /*Affichage des categories */
Route::get('/categories', [CategorieController::class, 'ListeCategorie']);

  /*Modification de catégorie*/
Route::post('/modifier/categorie-traitement/', [CategorieController::class, 'ModifierCategorieTraitement']);
Route::get('/modifier-categorie/{id}', [CategorieController::class, 'ModifierCategorie']);

    /*Suppression d'un categorie */
Route::get('/supprimer-categorie/{id}', [CategorieController::class, 'SupprimerCategorie']);

 /* Ajouter un rayon */
 Route::get('/rayons/ajouter', [RayonController::class, 'AjouterRayon']);
 Route::post('/ajouter/rayon-traitement', [RayonController::class, 'AjouterRayonTraitement']);

 /*Affichage des rayons */
Route::get('/rayons', [RayonController::class, 'ListeRayon']);
