<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    protected $table = 'posts';

    protected $fillable = [
        'titulo', 'text', 'dono'
    ];


    public function anexos()
    {
        return $this->hasMany('App\anexos', 'id_post');
    }

    public function postsescola(){
        return $this->belongsToMany('App\Escolas', 'posts_escola', 'id_post', 'id_escola');
    }

    public function user(){
        return $this->belongsTo('App\User', 'dono');
    }
}
