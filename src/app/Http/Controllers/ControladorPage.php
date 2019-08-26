<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
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
            $diretor[$es['nome']] = DB::table('escolas')
            ->join('users', 'escolas.diretor', '=', 'users.id')
            ->where('users.cargo', '=', 'Diretor')
            ->get();
        }
        
        return view('Paginas.escolas')->with(array('escolas' => $escolas, 'diretor' => $diretor));
    }
    
}
