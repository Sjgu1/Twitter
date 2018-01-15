<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Conversation extends Model
{
    public function usuarios()
    {
        return $this->belongsToMany('App\User', 'conversacion_usuario');
    }

    public function mensajes() {
        return $this->hasMany('App\Message'); 
    }
}
