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
        $livre->disponibilite = $request->disponibilite;
        $livre->categorie_id = $request->categorie_id;
        $livre->rayon_id = $request->rayon_id;
        $livre->save();
        return redirect('/livres')->with('status', "Le livre a été ajouté avec succés.");
    }

    public function ListeLivre(){
        $livres = Livre::all ();
          return view('livres/liste_liv', compact('livres'));
    }

    public function ModifierLivre($id)
    {
        $livres = Livre::findOrFail($id);
        $categories = Categorie::all();
        $rayons = Rayon::all();
        return view('livres/modifier_liv', compact('livres','categories', 'rayons'));
    }

    public function ModifierLivreTraitement(Request $request)
    {
        /*dd($request->all());*/
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

        $livre = Livre::findOrFail($request->id);
        $livre->titre = $request->titre;
        $livre->date_publication = $request->date_publication;
        $livre->nombre_page = $request->nombre_page;
        $livre->auteur = $request->auteur;
        $livre->isbn = $request->isbn;
        $livre->editeur = $request->editeur;
        $livre->image = $request->input('image');
        $livre->disponibilite = $request->disponibilite;
        $livre->categorie_id = $request->categorie_id;
        $livre->rayon_id = $request->rayon_id;
        $livre->update();
        return redirect('/livres')->with('status', "Le livre a été modifié avec succés.");
    }

    public function SupprimerLivre($id){
        $livre = Livre::findOrFail($id);
        $livre->delete();

        return redirect('/livres')->with('status', "Le livre a été supprimé avec succés.");
    }

    public function index(){
    $livres = Livre::with('categorie')->get();
    return view('livres/index', compact('livres'));
    }

    public function DetailLivre($id)
{
    $livre = Livre::with('categorie', 'rayon')->findOrFail($id);
    return view('livres/detail', compact('livre'));
}


}