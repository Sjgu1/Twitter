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
            $users=User::where('id','!=', $id)->get();
            $convers=$user->conversacion1;
            $conver2=$user->conversacion2;
            $convers = $convers->merge($conver2);
            
            /*foreach((array)$convers as $conver){
                $merge=DB::table('users')->where(['id', '!=', $id],
                ['id', '!=',$conver->usuario1->id],
                ['id','!=', $conver->usuario2->id])->get();
                $users = $users->merge($merge);
            }*/

            $view->with('convers', $convers)->with('users',$users);
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
