<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Escolas;
use App\aluno_escolas;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\EscolaRequest;

class ControladorCadEscola extends Controller
{
    private $escolas;
    
    public function __construct(){
        $this->middleware('auth');
        $this->escolas = Escolas::all();
    }

    protected function getUserId(){
        return Auth::user()->id;
    }

    protected function insert(EscolaRequest $request)
    {   
    
        $Nescolas = new Escolas;

        $Nescolas->nome = $request['nome'];
        $Nescolas->descricao = $request['descricao'];
        $Nescolas->password = md5($request['password']);
        $Nescolas->diretor = $this->getUserId();
        $Nescolas->codigo = $Nescolas->gerarCodigo();
        
        $Nescolas->save();

    }

    public function getInsert(EscolaRequest $request){
        $this->insert($request);
        return redirect(route('Sescolas'));
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
        return view('Paginas.Escolas.escolas')->with(array('diretor' => $diretor));
    }

    public function entrarEscola(Request $request){
        //Procura escola baseado no código fornecido
        $escola = $this->escolas->where('codigo', '=', $request['CodEscola'])->first();

        if($escola != null) 
        {
            $escola_id = $escola->id;
                //verifica se já está cadastrado naquela escola.
                if($this->checkAlreadyExist($escola_id))
                {
                   return redirect()->back()->withErrors(['codigo' => 'Você já está cadastrado nessa escola.']);;
                }

            $alunoescolas = new aluno_escolas;
            $alunoescolas->id_aluno = $this->getUserId();
            $alunoescolas->id_escolas = $escola_id;
            $alunoescolas->save();
            return redirect(route('Sescolas'));
        } else 
        {
            return redirect()->back()->withErrors(['codigo' => 'Código Inválido, escola não encontrada.']);
        }
    }
    
    public function checkAlreadyExist($escola_id)
    {
        if(aluno_escolas::where('id_aluno', '=', Auth::user()->id)->where('id_escolas', '=', $escola_id)->exists())
        {
            return true;
        }

        return false;
    }
}
