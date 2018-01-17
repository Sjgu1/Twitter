<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('nav', function($view){
            $id = Auth::id();
            $user = User::find($id);
            /*$convers;
            $merge;
            foreach($user->conversacion1 as $conver){
                if($conver->usuario1->id==$id){
                    $merge=$conver->usuario2;            
                }
                $convers = $convers->merge($merge);
            }
            foreach($user->conversacion2 as $conver){
                if($conver->usuario2->id==$id){
                    $merge=$conver->usuario1;
                }
                $convers = $convers->merge($merge);
            }*/
            $convers=$user->conversacion1;
            $conver2=$user->conversacion2;
            $convers = $convers->merge($conver2);
            $view->with('convers', $convers);
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
