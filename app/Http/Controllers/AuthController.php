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
       return back()->with('status', 'Votre inscription a été effectué avec succés');

    }
    /*C'est pour la connection*/
    public function login(){
        return view('auth/login');
    }

    /*C'est pour authentifier l'utilisateur c'est de vérifuer si il a entrer les bonnes informations*/
    public function AuthentificationLogin(Request $request){
        $credetials = ["
            'email' => $request->email
            'password' => '$request->password
        "];

        if (Auth::attempt($credetials)){
            return redirect('/')->with('status', 'connection reussi');
        }
        return redirect()->back()->withErrors('Les identifiants ne corrspondent pas');
    }

    /*C'est pour la deconnection*/
    public function logout(){
        auth()->logout();
        return redirect('/');
    }


}
