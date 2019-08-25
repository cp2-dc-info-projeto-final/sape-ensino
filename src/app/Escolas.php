<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Escolas extends Model
{
    protected $table = 'escolas';

    protected $hidden = [
        'password', 'codigo',
    ];
    #Um pra um


    #Um pra muitos
    public function diretor(){
        return $this->belongsTo('App\Diretor'); //Escola só tem 1 diretor
    }
    #Muitos pra muitos
    public function users(){
        return $this->hasMany('App\Escolas', 'aluno_escolas'); // Escola tem Varios Alunos
    }

    public function gerarCodigo(){
        $valido = false;
        $codigo = 0;
        while($valido == false){
            $codigo = random_int(1000, 9999);
            if(Escolas::where('codigo', '=', $codigo)->exists()){
                $valido = false;
            } else {
                $valido = true;
            }
        }
        return $codigo;
    }
}
