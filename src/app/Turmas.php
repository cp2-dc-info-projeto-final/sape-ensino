<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Turmas extends Model
{
    protected $table = 'turmas';


    

    public function users(){
        return $this->hasMany('App\Turmas', 'aluno_turmas');
    }
}
