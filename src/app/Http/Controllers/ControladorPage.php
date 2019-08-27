<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Escolas;
use App\aluno_escolas;
use App\Diretor;

class ControladorPage extends Controller
{
   
    public function index(){
       return view('Paginas.index');
    }

    public function escolas(){
        $escolas = Escolas::all();
        foreach($escolas as $es){
            $diretor = DB::table('escolas')
            ->select('escolas.nome', 'escolas.descricao', 'users.name')
            ->join('users', 'users.id', '=', 'escolas.diretor')
            ->get('name', 'diretor');
        }
        return view('Paginas.escolas')->with(array('diretor' => $diretor));
    }

}
