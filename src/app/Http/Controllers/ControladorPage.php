<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ControladorPage extends Controller
{
    public function index(){
        if(Auth::check()){
        return view('Paginas.escolas');
        } else{
        return view('Paginas.index');
        }
    }
    
}
