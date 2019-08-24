<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Escolas extends Model
{
    protected $table = 'escolas';

    protected $hidden = [
        'password', 'codigo',
    ];


    public function users(){
        return $this->hasMany('App\Escolas', 'aluno_escolas');
    }
}
