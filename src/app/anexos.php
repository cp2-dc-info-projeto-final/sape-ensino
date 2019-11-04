<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class anexos extends Model
{
    protected $table = 'anexos';

    protected $fillable = [
        'dir', 'id_post'
    ];

    public function posts(){
        return $this->belongsTo('App\Posts', 'id_post');
    }
}
