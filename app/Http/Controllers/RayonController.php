<?php

namespace App\Http\Controllers;

use App\Models\Rayon;
use Illuminate\Http\Request;

class RayonController extends Controller
{
    public function AjouterRayon(){
        return view ('rayons/ajouter_ray');

     }

        public function AjouterRayonTraitement(Request $request){
        /*dd($request->all());*/
        $request->validate([
            'section' => 'required',
            'partie' => 'required',
            
        ]);

        $rayon = new Rayon();
        $rayon->section = $request->section;
        $rayon->partie = $request->partie;
        $rayon->save();

        return redirect('/rayons')->with('status', "Le rayon a été ajouté avec succés.");
    }

    public function ListeRayon(){
        $rayons = Rayon::all ();
        return view('rayons/liste_ray', compact('rayons'));
    }

    public function ModifierRayon($id){
        $rayons = Rayon::findOrFail($id);
        return view('rayons/modifier_ray', compact('rayons'));
    
        }
    
        public function ModifierRayonTraitement(Request $request){
        $request->validate([
            'section' => 'required',
            'partie' => 'required',
        ]);
    
        $rayon = Rayon::findOrFail($request->id);
        $rayon->section = $request->section;
        $rayon->partie = $request->partie;
        $rayon->update();
    
        return redirect('/rayons')->with('status', "Le rayon a été modifié avec succés.");
        }

        public function SupprimerRayon($id){
            $rayon = Rayon::findOrFail($id);
            $rayon->delete();
    
            return redirect('/rayons')->with('status', "Le rayon a été supprimé avec succés.");
        }
}
