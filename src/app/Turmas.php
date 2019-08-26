<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Turmas extends Model
{
    protected $table = 'turmas';


    

    public function users(){
        return $this->belongsToMany('App\Turmas', 'aluno_turmas', 'aluno_id', 'turma_id');
    }
}
