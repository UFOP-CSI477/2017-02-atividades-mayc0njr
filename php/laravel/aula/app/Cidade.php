<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cidade extends Model
{
    //Cidade -> Estado
    public function estado(){
        return $this->belongsTo('App\Estado');
    }

    //Cidade -> Alunos
    public function alunos(){
        return $this->hasMany('App\Aluno');
    }
}
