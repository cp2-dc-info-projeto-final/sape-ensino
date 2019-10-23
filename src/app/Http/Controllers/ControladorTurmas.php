<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TurmaRequest;
use App\Turmas;

class ControladorTurmas extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    

    protected function insert(TurmaRequest $request)
    {   
    
        $Nturmas = new Turmas;
        $Nturmas->nome = $request['nome'];
        $Nturmas->escola_id = $request['escola_id'];
        $Nturmas->save();
        
        return back();
    }
}
