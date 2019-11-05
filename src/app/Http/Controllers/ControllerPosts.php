<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PostRequest; 
use App\Posts;
use App\posts_escola;
use Illuminate\Support\Facades\Auth;

class ControllerPosts extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function insert(PostRequest $request, $eid){
        $new_post = new Posts;

        $new_post->titulo = $request['titulopub'];
        $new_post->text = $request['textopub'];
        $new_post->dono = Auth::user()->id;

        $new_post->save();

        $posts_escola = new posts_escola;

        $posts_escola->id_post = $new_post->id;
        $posts_escola->id_escola = $eid;

        $posts_escola->save();

        return back();
    }

}
