<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lista extends Model
{
    protected $fillable = [
        'nombre','descripcion',
    ];

    public function usuario()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

    public function miembros()
    {
        return $this->belongsToMany('App\User', 'lista_miembro', 'id_user', 'id_lista');
    }

    public function suscritos()
    {
        return $this->belongsToMany('App\User', 'lista_miembro', 'id_user', 'id_lista');
    }
}
