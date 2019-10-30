<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Escolas;
use App\aluno_escolas;

class ControladorPaginas extends Controller
{
    public function __construct(){
        $this->escolas = Escolas::all();
    }

   
    public function index(){
       return view('Paginas.index');
    }


    public function showperfil(){
        return view('Paginas.Perfil.perfil')->with('user', Auth::user()); 
    }


    public function showescolas(){
        return view('Paginas.Escolas.escolas');
    }


    public function showmural($eid, $Sturmas = null){
        
        if(Auth::user()->cargo == "Diretor" || Auth::user()->cargo == "Professor"){
            $turmas = Escolas::find($eid)->Turmas;
        }
        elseif(Auth::user()->cargo == "Aluno")
        {
            $turmas = Escolas::find($eid)->Turmas;
        }

        return view('Paginas.Escolas.muralE')->with(array('Sturmas' => $Sturmas, 'eid' => $eid, 'turmas' => $turmas));
    }

    public function visuturmas()
    {
        return view('Paginas.Turmas.turmas')->with(array('Sturmas' => "true"));
    }
}
