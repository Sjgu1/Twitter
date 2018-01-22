<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Conversation extends Model
{
    protected $fillable = [
        'fechaInicio',
    ];
    //Emisor
    public function usuario1()
    {
        return $this->belongsTo('App\User', 'user1_id');
    }
    
    //Remitente
    public function usuario2()
    {
        return $this->belongsTo('App\User', 'user2_id');
    }

    public function mensajes() {
        return $this->hasMany('App\Message', 'conversation_id'); 
    }
}
