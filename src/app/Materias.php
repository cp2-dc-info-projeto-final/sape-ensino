<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Materias extends Model
{
  
    public function turmas(){
        return $this->belongsTo('App\Turmas', 'turma_id');
    }
}
