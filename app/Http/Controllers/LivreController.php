<?php

namespace App\Http\Controllers;

use App\Models\Livre;
use App\Models\Rayon;
use App\Models\Categorie;
use Illuminate\Http\Request;

class LivreController extends Controller
{
    public function AjouterLivre()
    {
        $categories = Categorie::all();
        $rayons = Rayon::all();
        return view('livres/ajouter_liv', compact('categories', 'rayons'));
    }

    public function AjouterLivreTraitement(Request $request)
    {
        $request->validate([
            'titre' => 'required',
            'date_publication' => 'required',
            'nombre_page' => 'required',
            'auteur' => 'required',
            'isbn' => 'required',
            'editeur' => 'required',
            'image' => 'required',
            'disponibilite' => 'required',
            'categorie_id' => 'required|exists:categories,id',
            'rayon_id' => 'required|exists:rayons,id',
        ]);

        $livre = new Livre();
        $livre->titre = $request->titre;
        $livre->date_publication = $request->date_publication;
        $livre->nombre_page = $request->nombre_page;
        $livre->auteur = $request->auteur;
        $livre->isbn = $request->isbn;
        $livre->editeur = $request->editeur;
        $livre->image = $request->input('image');
        $livre->categorie_id = $request->categorie_id;
        $livre->rayon_id = $request->rayon_id;
        $livre->save();
        return redirect('/livres')->with('status', "Le livre a été ajouté avec succés.");
}
}
