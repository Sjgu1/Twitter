<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $fillable = [
        'name',
    ];
    

    public function tweets()
    {
        return $this->belongsToMany('App\Tweet', 'tweet_categorias', 'id_tweet','id_categoria')->withTimestamps();;
    }

}