<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Escolas;
use App\aluno_escolas;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ControladorEscola extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    protected function getUserId(){
        return Auth::user()->id;
    }


    protected function insert()
    {   
        $escolas = new Escolas;

        $escolas->nome = request('nome');
        $escolas->descricao = request('descricao');
        $escolas->password = md5(request('password'));
        $escolas->diretor = $this->getUserId();
        $escolas->codigo = $escolas->gerarCodigo();
        
        $escolas->save();

    }
    public function getInsert(){
        $this->insert();
        return redirect()->route('Sescolas');
    }

    public function showescolas(){
        if (Auth::User()->cargo == "Diretor"){
        $diretor = DB::table('escolas')
        ->select('escolas.nome', 'escolas.descricao', 'users.name')
        ->join('users', 'users.id', '=', 'escolas.diretor')
        ->where('escolas.diretor','=', $this->getUserId())
        ->get('name', 'diretor');
        } else {
        $diretor = DB::table('escolas')
        ->select('escolas.nome', 'escolas.descricao', 'users.name')
        ->join('users', 'users.id', '=', 'escolas.diretor')
        ->join('aluno_escolas', 'escolas.id', '=', 'id_escolas')
        ->where('aluno_escolas.id_aluno', '=', $this->getUserId())
        ->get('name', 'diretor');
        }
        return view('Paginas.escolas')->with(array('diretor' => $diretor));
    }

    public function entrarEscola(){
        $escolas = Escolas::select('codigo', 'id')->where('codigo', request('CodEscola'))->first();
        if ($escolas && $escolas->exists()){

            $alunoescolas = new aluno_escolas;
            $alunoescolas->id_aluno =  $this->getUserId();
            $alunoescolas->id_escolas = $escolas->id;
            $alunoescolas->save();

            return redirect()->route('Sescolas');

        } else {
            return abort(404); // COLOCAR ERROR DE ESCOLA NÃO ENCONTRADA
        }

        
    }
}
