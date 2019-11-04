<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Posts extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    

}
