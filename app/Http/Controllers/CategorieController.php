<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    public function AjouterCategorie(){
        return view ('categories/ajouter_cat');

     }

        public function AjouterCategorieTraitement(Request $request){
        /*dd($request->all());*/
        $request->validate([
            'libelle' => 'required',
            'description' => 'required',
            
        ]);

        $categorie = new Categorie();
        $categorie->libelle = $request->libelle;
        $categorie->description = $request->description;
        $categorie->save();

        return redirect('/categories')->with('status', "La categorie a été ajouté avec succés.");
    }

    public function ListeCategorie(){
        $categories = Categorie::all ();
          return view('categories/liste_cat', compact('categories'));
    }
}
