<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Escolas;
use App\aluno_escolas;
use Illuminate\Support\Facades\Auth;

class ControladorEscola extends Controller
{
    

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
        return redirect(route('Sescolas'));
    }

    public function entrarEscola(){
        /*$alunoescolas = new aluno_escolas;
        $alunoescolas->aluno_id =  $this->getUserId();
        $alunoescolas->escola_id = request('schoolID');
        $alunoescolas->save();*/
    }
}
