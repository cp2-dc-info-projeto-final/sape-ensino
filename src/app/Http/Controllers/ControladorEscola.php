<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Escolas;
use Illuminate\Support\Facades\Auth;

class ControladorEscola extends Controller
{
    

    protected function getDiretor(){
        return Auth::user()->id;
    }
    protected function insert()
    {   
        $escolas = new Escolas;

        $escolas->nome = request('nome');
        $escolas->descricao = request('descricao');
        $escolas->password = md5(request('password'));
        $escolas->diretor = $this->getDiretor();
        $escolas->codigo = $escolas->gerarCodigo();
        
        $escolas->save();

    }
    public function getInsert(){
        $this->insert();
        return redirect(route('escolas'));
    }


}
