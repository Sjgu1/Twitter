<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tweet extends Model
{
        /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'fecha', 'mensaje', 'multimedia', 'descripcion', 'fondo'
    ];

    public function user() {
        return $this->belongsTo('App\User');
    }

}
