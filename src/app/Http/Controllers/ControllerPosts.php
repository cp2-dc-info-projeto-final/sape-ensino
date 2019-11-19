<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PostRequest; 
use App\Posts;
use App\posts_escola;
use App\anexos;
use Image;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ControllerPosts extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function insert(PostRequest $request, $eid){

        $validated = $request->validated();

        $new_post = new Posts;

        $new_post->titulo = $validated['titulopub'];
        $new_post->text = $validated['textopub'];
        $new_post->dono = Auth::user()->id;

        $new_post->save();

        $posts_escola = new posts_escola;

        $posts_escola->id_post = $new_post->id;
        $posts_escola->id_escola = $eid;

        $posts_escola->save();

       if($request->hasFile('files'))
        {
           foreach($request->file('files') as $file)
           {
               $anexo = new anexos;
               $name = time().'.'.$file->getClientOriginalName();
               $file->storeAs('post_files', $name);  
               $anexo->dir = $name;
               $anexo->id_post = $new_post->id;
               $anexo->save();
           }
        }

        return back()->with('success', 'Aviso criado com sucesso!');;
    }

}
