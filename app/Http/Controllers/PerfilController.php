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
    

    public function sugerenciasUsuarios(){
        $user = User::find(Auth::id());

        return DB::table('users')->distinct()->where('id', '!=', Auth::id())
                ->when($user->seguidos->count(), function ($query) {
                    $user = User::find(Auth::id());
                    return $query->whereNotIn('id', $user->seguidos->modelKeys());
                })->paginate(3);

    }

    public function checkFollowingDeUsuarioConectado($perfilVisitadoId){
        $siguiendo = false;
        foreach(Auth::user()->seguidos as $comprobar){
            if($comprobar->id == $perfilVisitadoId){
                $siguiendo = true;
                break;
            }
        }
        return $siguiendo;
    }

    public function perfil($username) {

        $user =  User::where('username', $username)->first();

        if($user == null){
            return view('404'); 
        }

        Carbon::setLocale('es');
        $id = $user->id;
        $users = $this->sugerenciasUsuarios();
        $follows=$user->seguidos;
        $followers=$user->seguidores;
            
        //Unir tweets propios con los de las personas que sigues
        $tweets = User::find($id)->tweets()->orderBy('fecha', 'desc')->with('user')->get();
        $escritos = User::find($id)->tweets()->orderBy('fecha', 'desc')->count();

        //dd($user);
        //dd(Auth::user(), Auth::Guest());

        return view('perfil/perfil', ['user' => $user,'users' => $users, 'seguidos'=>$follows, 'seguidores'=>$followers, 'tweets'=>$tweets ,'tweetsEscritos'=>$escritos,
        'usuarioConectadoFollowing' => $this->checkFollowingDeUsuarioConectado($id)]); 
    }

    public function perfilSiguiendo($username) {

        $user =  User::where('username', $username)->first();

        if($user == null){
            return view('404'); 
        }

        Carbon::setLocale('es');
        $id = $user->id;
        $users =  $this->sugerenciasUsuarios();
        $follows=$user->seguidos;
        $followers=$user->seguidores;
            
        //Unir tweets propios con los de las personas que sigues
        $tweets = User::find($id)->tweets()->orderBy('fecha', 'desc')->with('user')->get();
        $escritos = User::find($id)->tweets()->orderBy('fecha', 'desc')->count();

        //dd($user);
        //dd(Auth::user(), Auth::Guest());

        return view('perfil/following', ['user' => $user,'users' => $users, 'following'=>$follows, 'followers'=>$followers, 'tweets'=>$tweets ,'tweetsEscritos'=>$escritos,
        'usuarioConectadoFollowing' => $this->checkFollowingDeUsuarioConectado($id)]); 
    }

    public function perfilSeguidores($username) {

        $user =  User::where('username', $username)->first();

        if($user == null){
            return view('404'); 
        }

        Carbon::setLocale('es');
        $id = $user->id;
        $users = $this->sugerenciasUsuarios();
        $follows=$user->seguidos;
        $followers=$user->seguidores;
            
        //Unir tweets propios con los de las personas que sigues
        $tweets = User::find($id)->tweets()->orderBy('fecha', 'desc')->with('user')->get();
        $escritos = User::find($id)->tweets()->orderBy('fecha', 'desc')->count();

        //dd($user);
        //dd(Auth::user(), Auth::Guest());

        return view('perfil/followers', ['user' => $user,'users' => $users, 'following'=>$follows, 'followers'=>$followers, 'tweets'=>$tweets ,'tweetsEscritos'=>$escritos,
        'usuarioConectadoFollowing' => $this->checkFollowingDeUsuarioConectado($id)]); 
    }


}
