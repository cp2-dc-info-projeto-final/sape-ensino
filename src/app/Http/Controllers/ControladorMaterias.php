<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Turmas;
use App\Materias;


class ControladorMaterias extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    

    protected function insert(MateriaRequest $request)
    {   
        
    }
}
