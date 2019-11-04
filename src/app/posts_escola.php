<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class posts_escola extends Model
{
    protected $table = 'posts_escola';

    protected $fillable = [
        'id_post', 'id_escola'
    ];

    public function escolas(){
        return $this->hasMany('App\Escolas', 'id_escola');
    }   


    public function post(){
        return $this->hasMany('App\Posts', 'id');
    }
}
