<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class aluno_escolas extends Model
{
    protected $table = 'aluno_escolas';

    protected $fillable = [
        'id_aluno', 'id_escolas'
    ];
}
