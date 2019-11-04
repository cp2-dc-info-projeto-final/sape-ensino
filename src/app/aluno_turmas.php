<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class aluno_turmas extends Model
{
    protected $table = 'aluno_turmas';

    protected $fillable = [
        'id_aluno', 'id_turma'
    ];
}
