<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{

    public static $current_user = NULL;
    public function prova($nom) {
            return view('saludo', array('usuari'=>$nom));
        }
    public function login(Request $request){
        $usuari= User::where('email', $request->email)->get();
        if(isset($usuari[0])){
            $usuari = $usuari[0];
            if ( $usuari->password == $request->pwd){
                session(['usuari'=>$usuari]);
            return redirect()->route('home');
            }
            return view('login');
        }
        return view('login');    
    }
}
