<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Auth\Authenticatable;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;


class User extends Model implements AuthenticatableContract, AuthorizableContract, CanResetPasswordContract
{
    use Notifiable, Authenticatable, Authorizable, CanResetPassword;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

 
    public function tweets() {
        return $this->hasMany('App\Tweet');
    }

    public function retweets()
    {
        return $this->belongsToMany('App\Tweet', 'tweet_user_rt', 'id_tweet','id_user')->withTimestamps();;
    }

    public function likes()
    {
        return $this->belongsToMany('App\Tweet', 'tweet_user_like', 'id_tweet','id_user')->withTimestamps();;
    }
    public function seguidos()
    {
        return $this->belongsToMany('App\User', 'seguidos_seguidores', 'id_seguidor', 'id_seguido');
    }

    public function seguidores()
    {
        return $this->belongsToMany('App\User', 'seguidos_seguidores', 'id_seguido','id_seguidor');
    }

    public function conversacion1()
    {
        return $this->hasMany('App\Conversation', 'user1_id');
    }

    public function conversacion2()
    {
        return $this->hasMany('App\Conversation', 'user2_id');
    }

    public function mensajes()
    {
        return $this->hasMany('App\Message', 'user_id');
    }


}
