<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'matricula', 'cargo'
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
        return $this->hasMany('App\Escolas', 'aluno_escolas');
    }

    public function turmas(){
        return $this->hasMany('App\Turmas', 'aluno_turmas');
    }
}
