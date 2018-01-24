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

    public function retweetsUsers()
    {
        return $this->belongsToMany('App\User', 'tweet_user_rt', 'id_user','id_tweet')->withTimestamps();;
    }
    
    public function likesUsers()
    {
        return $this->belongsToMany('App\User', 'tweet_user_like', 'id_user','id_tweet')->withTimestamps();;
    }

    public function respuestas()
    {
        return $this->hasMany('App\Tweet');
    }

    public function esRespuesta()
    {
        return $this->belongsTo('App\Tweet', 'tweet_id');
    }

    public function categorias()
    {
        return $this->belongsToMany('App\Categoria', 'tweet_categorias_like', 'id_categoria','id_tweet')->withTimestamps();;
    }

}
