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
        if (Auth::User()->cargo == "Diretor"){
        $escolas = DB::table('escolas')
        ->select('escolas.nome', 'escolas.descricao', 'users.name', 'escolas.id')
        ->join('users', 'users.id', '=', 'escolas.diretor')
        ->where('escolas.diretor','=', Auth::user()->id)
        ->get('name', 'diretor');
        } else {
        $escolas = DB::table('escolas')
        ->select('escolas.nome', 'escolas.descricao', 'users.name', 'escolas.id')
        ->join('users', 'users.id', '=', 'escolas.diretor')
        ->join('aluno_escolas', 'escolas.id', '=', 'id_escolas')
        ->where('aluno_escolas.id_aluno', '=', Auth::user()->id)
        ->get('name', 'diretor');
        }
        return view('Paginas.Escolas.escolas')->with(array('escolas' => $escolas));
    }


    public function showmural($eid, $Sturmas = null){
        return view('Paginas.Escolas.muralE')->with(array('Sturmas' => $Sturmas, 'eid' => $eid));
    }
}
