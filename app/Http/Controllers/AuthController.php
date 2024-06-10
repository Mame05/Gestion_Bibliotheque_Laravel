<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller

{
    /*C'est pour la connection*/
    public function login(){
        return view('auth/login');
    }

    /*C'est pour authentifier l'utilisateur c'est de vérifuer si il a entrer les bonnes informations*/
    public function AuthentificationLogin(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (auth()->attempt($request->only('email','password'))){
            return redirect('/biens');
        }
        return redirect()->back()->withErrors('Les identifiants ne corrspondent pas');
        
    }

    /*C'est pour la deconnection*/
    public function logout(){
        auth()->logout();
        return redirect('/');
    }


}
