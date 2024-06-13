<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LivreController;
use App\Http\Controllers\RayonController;
use App\Http\Controllers\CategorieController;

Route::get('/', [LivreController::class,'index']);

        /*voir detail*/
Route::get('/detail-livre/{id}', [LivreController::class, 'DetailLivre']);

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

/*Suppression d'un rayon */
Route::get('/supprimer-rayon/{id}', [RayonController::class, 'SupprimerRayon']);

/* Ajouter un livre */
Route::get('/livres/ajouter', [LivreController::class, 'AjouterLivre']);
Route::post('/ajouter/livre-traitement', [LivreController::class, 'AjouterLivreTraitement']);

/*Affichage des livres */
Route::get('/livres', [LivreController::class, 'ListeLivre']);

/*Modifier un livre*/
Route::post('/modifier/livre-traitement/', [LivreController::class, 'ModifierLivreTraitement']);
Route::get('/modifier-livre/{id}', [LivreController::class, 'ModifierLivre']);

/*Suppression d'un livre */
Route::get('/supprimer-livre/{id}', [LivreController::class, 'SupprimerLivre']);

 /*Inscription*/
 Route::get('/register', [AuthController::class, 'register'])->name('register');
 Route::post('/register', [AuthController::class, 'AuthentificationRegister'])->name('register');


/*Connection*/
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'AuthentificationLogin'])->name('login');


/*Décinnection*/
Route::get('logout', [AuthController::class, 'logout'])->name('logout');



/*recherche de livre*/
Route::get('/livres/search', [LivreController::class, 'search'])->name('livres.search');
