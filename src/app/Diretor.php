<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Diretor extends User
{
    public function escolas(){
        return $this->hasMany('App\Escolas');
    }
}
