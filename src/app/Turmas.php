<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Turmas extends Model
{
    protected $table = 'turmas';

    protected $fillable = [
        'nome', 'escola_id'
    ];

    public function users(){
        return $this->belongsToMany('App\Turmas', 'aluno_turmas', 'aluno_id', 'turma_id');
    }

    public function Escolas(){
        return $this->belongsTo('App\Escolas', 'escola_id');
    }
}
