<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    //Estado -> Cidades
    public function cidades(){
        return $this->hasMany('App\Aluno');
    }
}
