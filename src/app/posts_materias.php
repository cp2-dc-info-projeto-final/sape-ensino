<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class posts_materias extends Model
{
    protected $table = 'posts_materias';

    protected $fillable = [
        'id_post', 'id_materia'
    ];

    public function materia(){
        return $this->hasMany('App\Materias', 'id');
    }   


    public function post(){
        return $this->hasMany('App\Posts', 'id');
    }
}
