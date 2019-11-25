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

    private function apagarfotoantiga(User $user){
        $oldPath = $user->profile_picture;
        if($oldPath != 'default.jpg'){
            Storage::delete('images/'.$oldPath);
        }
    }
    protected function updatePic(User $user, PerfilRequest $request){
        $validated = $request->validated();

        if($request['profile_picture'] != null){
            $profileImage = $validated['profile_picture'];
            
            $uploadpath = time().'.'.$profileImage->guessExtension();

            $img = Image::make($profileImage->getRealPath());
            $img->resize(200, 200)->save(public_path('storage/images').'/'.$uploadpath);
            
            $this->apagarfotoantiga($user);

        } else {
            $uploadpath = $user->profile_picture;
        }

        $user->profile_picture = $uploadpath;
    }

    public function update(PerfilRequest $request){
        $user = Auth::user();
        $this->updatePic($user, $request);
        
        if($request['name'] != null){
            $user->name = $request['name'];
        }
        if($request['email'] != null){
            $user->email = $request['email'];
        }
        if($request['bio'] != null){
            $user->bio = $request['bio'];
        }

        $user->save();
        
        return back();
    }
}

