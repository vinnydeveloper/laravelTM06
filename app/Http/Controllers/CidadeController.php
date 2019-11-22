<?php

namespace App\Http\Controllers;

use App\Cidade;

use Illuminate\Http\Request;

class CidadeController extends Controller
{
    
    public function viewCidades(){

        $listaCidades = Cidade::all();

        return view('cidade',["listaCidades"=>$listaCidades]);
    }
}
