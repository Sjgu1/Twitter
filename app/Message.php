<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = [
        'mensaje',
    ];

    public function conversacion()
    {
        return $this->belongsTo('App\Conversation', 'conversation_id');
    }
    //emisor
    public function usuario()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

}
