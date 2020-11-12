<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerPin extends Controller
{
    public function login(){
        return view('login');
    }

    public function validar(Request $request){

        $usuario = $request->input('usuario');
        $contraseña = $request->input('contraseña');
        $key = $request->input('key');

        if($usuario === 'Prof. Toledo'){
            $url = 'homepage';
        }else {
            $url = 'login';
        }
        return view($url);
        
    }

    public function home (){
        return view('homepage');
    }
    public function pintor1 (){
        return view('pintor1');
    }
    public function pintor2 (){
        return view('pintor2');
    }
    public function pintor3 (){
        return view('pintor3');
    }
    public function pintor4 (){
        return view('pintor4');
    }
    public function pintor5 (){
        return view('pintor5');
    }
}
