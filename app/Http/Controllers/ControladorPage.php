<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladorPage extends Controller
{
    public function index(){
        return view('Paginas.index');
    }
}
