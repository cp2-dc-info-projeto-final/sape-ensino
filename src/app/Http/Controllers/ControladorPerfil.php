<?php

namespace App\Http\Controllers;


use Auth;
use \App\User;
use Illuminate\Support\Facades\Storage;
use Image;
use Illuminate\Http\Request;
use App\Http\Requests\PerfilRequest;

class ControladorPerfil extends Controller
{

    public function __construct() {
        $this->middleware('auth');
    }

    public function showperfil(){
        return view('Paginas.Perfil.perfil')->with('user', Auth::user()); 
    }

    private function apagarfotoantiga(User $user){
        $oldPath = $user->profile_picture;
        if($oldPath != 'default.jpg'){
            Storage::delete('images/'.$oldPath);
        }
    }
    protected function updatePic(User $user, PerfilRequest $request){

        $this->apagarfotoantiga($user);
        $validated = $request->validated();

        if($validated['profile_picture'] != null){
            $profileImage = $validated['profile_picture'];
            
            $uploadpath = time().'.'.$profileImage->guessExtension();

            $img = Image::make($profileImage->getRealPath());
            $img->resize(200, 200)->save(public_path('storage/images').'/'.$uploadpath);
        
        } else {
            $uploadpath = 'default.jpg';
        }

        $user->profile_picture = $uploadpath;
        $user->save();
    }

    public function update(PerfilRequest $request){
        $user = Auth::user();
        $this->updatePic($user, $request);

        return back();
    }
}

