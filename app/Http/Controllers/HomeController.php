<?php

namespace App\Http\Controllers;

use App\Usuario;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    public function viewHome(){
        // $usuario = new Usuario();
        // $listaUsuarios = $usuario->all();
        //dd($listaUsuarios);

        $listaUsuarios = Usuario::all();

        return view('home',["usuarios"=>$listaUsuarios]);
    }
}
