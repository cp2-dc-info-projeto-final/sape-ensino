<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerTurmas extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    

    protected function insert(TurmaRequest $request)
    {   
    
        $Nturmas = new Turmas;

        $Nturmas->nome = $request['nometurma'];
        $Nturmas->escola_id = $request['escola-turma'];
        
        $Nturmas->save();

    }
}
