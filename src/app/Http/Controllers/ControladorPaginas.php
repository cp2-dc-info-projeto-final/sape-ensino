<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Escolas;
use App\posts_escola;
use App\User;
use App\anexos;
class ControladorPaginas extends Controller
{
    public function __construct(){
        $this->escolas = Escolas::all();
    }

   
    public function index(){
       return view('Paginas.index');
    }


    public function showperfil($userid = null){
        if($userid == null)
        {
            return view('Paginas.Perfil.perfil')->with('user', Auth::user()); 
        }
        else {
            return view('Paginas.Perfil.perfil')->with('user', User::find($userid));
        }
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


        $posts_diretor = posts_escola::with('post.user', 'post.anexos')->where('id_escola', '=', $eid)
        ->whereHas('post.user', function($q){
            $q->where('cargo', '=', 'Diretor');
        })
        ->orderBy('created_at', 'DESC')->paginate(5, ['*'], 'posts_D');

        $posts_aluno = posts_escola::with('post.user', 'post.anexos')->where('id_escola', '=', $eid)
        ->whereHas('post.user', function($q){
            $q->where('cargo', '=', 'Aluno');
        })
        ->orderBy('created_at', 'DESC')->paginate(5, ['*'], 'posts_A');

        $escolas = Escolas::find($eid);
        

        return view('Paginas.Escolas.muralE')->with(array('escolas' => $escolas, 'posts_A' => $posts_aluno, 'posts_D' => $posts_diretor ,'Sturmas' => $Sturmas, 'eid' => $eid, 'turmas' => $turmas));
    }

    public function visuturmas()
    {
        return view('Paginas.Turmas.turmas')->with(array('Sturmas' => "true"));
    }
}
