<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Escolas;
use App\aluno_escolas;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\EscolaRequest;

class ControladorEscola extends Controller
{
    private $escolas;
    
    public function __construct(){
        $this->middleware('auth');
        $this->escolas = Escolas::all();
    }


    protected function insert(EscolaRequest $request)
    {   
    
        $Nescolas = new Escolas;

        $Nescolas->nome = $request['nome'];
        $Nescolas->descricao = $request['descricao'];
        $Nescolas->password = md5($request['password']);
        $Nescolas->diretor = Auth::user()->id;
        $Nescolas->codigo = $Nescolas->gerarCodigo();
        
        $Nescolas->save();
        return redirect(route('Sescolas'));
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
    
    public function newCode($eid){
        $Nescolas = Escolas::all();
        $CurrentEscola = Escolas::find($eid);

        $CurrentEscola->codigo = $Nescolas->gerarCodigo();
        $CurrentEscola->save();

        return back();
    }
}
