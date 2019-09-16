<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use \App\User;
use Illuminate\Support\Facades\Storage;
use Image;

class ControladorPerfil extends Controller
{

    public function __construct() {
        $this->middleware('auth');
    }

    public function showperfil(){
        return view('Paginas.Perfil.perfil')->with('user', Auth::user()); 
     }

     protected function updatePic(User $user, Request $request){
        $request->validate([
            'profile_picture' => ['image', 'mimes:jpeg,jpg,png', 'max:2048'],
        ]);

        $oldPath = $user->profile_picture;
        if($oldPath != 'default.jpg'){
            Storage::delete('images/'.$oldPath);
        }


        if($request->hasfile('profile_picture')){
            $profileImage = $request->file('profile_picture');
            
            $uploadpath = time().'.'.$profileImage->guessExtension();

            $img = Image::make($profileImage->getRealPath());
            $img->resize(200, 200)->save(public_path('storage/images').'/'.$uploadpath); 
            //$request->profile_picture->storeAs('images', $uploadpath);


        } else {
            $uploadpath = 'default.jpg';
        }

        
        $user->profile_picture = $uploadpath;
        $user->save();
    }

    public function update(Request $request){
        $user = Auth::user();
        $this->updatePic($user, $request);

        return back();
    }
}

