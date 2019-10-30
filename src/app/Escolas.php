<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Escolas extends Model
{
    protected $table = 'escolas';

    protected $hidden = [
        'password', 'codigo',
    ];
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

    public static function showescolas(){
        if (Auth::User()->cargo == "Diretor"){
            $escolas = DB::table('escolas')
            ->select('escolas.nome', 'escolas.descricao', 'users.name', 'escolas.id')
            ->join('users', 'users.id', '=', 'escolas.diretor')
            ->where('escolas.diretor','=', Auth::user()->id)
            ->get('name', 'diretor');
            } else {
            $escolas = DB::table('escolas')
            ->select('escolas.nome', 'escolas.descricao', 'users.name', 'escolas.id')
            ->join('users', 'users.id', '=', 'escolas.diretor')
            ->join('aluno_escolas', 'escolas.id', '=', 'id_escolas')
            ->where('aluno_escolas.id_aluno', '=', Auth::user()->id)
            ->get('name', 'diretor');
            }

        return $escolas;
    }
    #Um pra um

    #Um pra muitos
    public function diretor(){
        return $this->belongsTo('App\Diretor', 'diretor'); //Escola só tem 1 diretor
    }

    public function Turmas(){
        return $this->hasMany('App\Turmas', 'escola_id');
    }
    #Muitos pra muitos
    public function users(){
        return $this->belongsToMany('App\User', 'aluno_escolas', 'aluno_id', 'escola_id'); // Escola tem Varios Alunos
    }


    
}
