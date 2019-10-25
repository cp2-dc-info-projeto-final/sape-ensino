<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{ 
    
    use Notifiable;
    //use \Tightenco\Parental\HasChildren;

   
    /*
    protected $childColumn = 'cargo';

    protected $childTypes = [
        'Diretor' => \App\Diretor::class,
        'Professor' => \App\User::class,
        'Aluno' => \App\User::class,
    ];*/
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'matricula', 'cargo', 'profile_picture', 'bio'
    ];
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    #Um pra um

    

    #Muitos pra um


    
    #Muitos pra Muitos

    public function escolas(){
        return $this->belongsToMany('App\Escolas', 'aluno_escolas', 'escolas', 'users');
    }

    public function turmas(){
        return $this->belongsToMany('App\Turmas', 'aluno_turmas', 'turma_id', 'aluno_id');;
    }
}
