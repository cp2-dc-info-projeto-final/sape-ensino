<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Escolas;
use Auth;

class ControladorEscola extends Controller
{
    protected function insert()
    {   
        $escolas = new Escolas;

        $escolas->nome = request('nome');
        $escolas->descricao = request('descricao');
        $escolas->password = md5(request('password'));
        $escolas->diretor = $escolas->diretor();
        $escolas->codigo = $escolas->gerarCodigo();
        
        $escolas->save();

    }

    public function getInsert(){
        $this->insert();
        return redirect('/');
    }

    public function showescolas(){
        //Fazer Codigo de mostrar escolas;
    }
}
