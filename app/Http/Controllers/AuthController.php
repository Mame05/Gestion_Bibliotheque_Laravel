<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller

{

    /*Inscription*/
    public function register(){
        return view('auth/register');
    }

    public function AuthentificationRegister(Request $request){
       $user = new User();
       $user->name = $request->name;
       $user->email = $request->email;
       $user->password = Hash::make($request->password);
       $user->save();
       return back()->with('success', 'Votre inscription a été effectué avec succés');

    }
    /*C'est pour la connection*/
    public function login(){
        return view('auth/login');
    }

    /*C'est pour authentifier l'utilisateur c'est de vérifuer si il a entrer les bonnes informations*/
    public function AuthentificationLogin(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        if (auth()->attempt($request->only('email','password'))){
            return redirect('/')->with('success', 'connection reussi');
        }
        return back()->with('error','Les identifiants ne corrspondent pas');
    }

    /*C'est pour la deconnection*/
    public function logout(){
        auth()->logout();
        return redirect('/');
    }


}
