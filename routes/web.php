<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LivreController;
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

  /*Modifier une catégorie*/
Route::post('/modifier/categorie-traitement/', [CategorieController::class, 'ModifierCategorieTraitement']);
Route::get('/modifier-categorie/{id}', [CategorieController::class, 'ModifierCategorie']);

    /*Suppression d'une categorie */
Route::get('/supprimer-categorie/{id}', [CategorieController::class, 'SupprimerCategorie']);

 /* Ajouter un rayon */
 Route::get('/rayons/ajouter', [RayonController::class, 'AjouterRayon']);
 Route::post('/ajouter/rayon-traitement', [RayonController::class, 'AjouterRayonTraitement']);

 /*Affichage des rayons */
Route::get('/rayons', [RayonController::class, 'ListeRayon']);

/*Modifier un rayon*/
Route::post('/modifier/rayon-traitement/', [RayonController::class, 'ModifierRayonTraitement']);
Route::get('/modifier-rayon/{id}', [RayonController::class, 'ModifierRayon']);

/*Suppression d'une categorie */
Route::get('/supprimer-rayon/{id}', [RayonController::class, 'SupprimerRayon']);

/* Ajouter un livre */
Route::get('/livres/ajouter', [LivreController::class, 'AjouterLivre']);
Route::post('/ajouter/livre-traitement', [LivreController::class, 'AjouterLivreTraitement']);
