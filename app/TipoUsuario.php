<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoUsuario extends Model
{
    //
    public function usuarios(){
        return $this->hasMany('App\Usuario');
    }
}
