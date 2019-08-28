<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Diretor extends User
{
    //use \Tightenco\Parental\HasParent;
    

    public function escolas(){
        return $this->hasMany('App\Escolas');
    }


}
