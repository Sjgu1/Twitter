<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Tweet;
use Carbon\Carbon;
use Carbon\CarbonInterval;



class PerfilController extends Controller
{
    

    public function perfil($username) {

        $user =  User::where('username', $username)->first();

        if($user == null){
            return view('404'); 
        }

        Carbon::setLocale('es');
        $id = Auth::id();
        $users = DB::table('users')->distinct()->where('id', '!=', $id)
                ->when($user->seguidos->count(), function ($query) {
                    $user = User::find(Auth::id());
                    return $query->whereNotIn('id', $user->seguidos->modelKeys());
                })
                ->paginate(3);
        $follows=$user->seguidos;
        $followers=$user->seguidores;
            
        //Unir tweets propios con los de las personas que sigues
        $tweets = User::find($id)->tweets()->orderBy('fecha', 'desc')->with('user')->get();
        $escritos = User::find($id)->tweets()->orderBy('fecha', 'desc')->count();

        //dd($user);
        //dd(Auth::user(), Auth::Guest());

        return view('perfil', ['user' => $user,'users' => $users, 'seguidos'=>$follows, 'seguidores'=>$followers, 'tweets'=>$tweets ,'tweetsEscritos'=>$escritos]); 
    }
}
