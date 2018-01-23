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


        //Mis cosas para los rt
        foreach ($tweets as $tweet){
            $tweet->esRT = false;
            $tweet->userRT = false;
            $tweet->fechaRT = $tweet->fecha;
        }
        $rtPorUsuario = $user->retweets;
        foreach($rtPorUsuario as $tweet){
            $tweet->esRT = true;
            $tweet->userRT = $user;
            $tweet->fechaRT = DB::table('tweet_user_rt')->where('id_tweet','=', $user->id)->where('id_user', '=',$tweet->id)->pluck('created_at')->get(0);
        } 
        $tweets = $tweets->merge($rtPorUsuario);
        $tweets = $tweets->sortByDesc('fechaRT');
        //dd($user);
        //dd(Auth::user(), Auth::Guest());

        $listas=$user->listas;
        $sus=$user->suscrito;
        $listas=$listas->merge($sus);

        return view('perfil/perfil', ['conectado'=> Auth::user(),'user' => $user,'users' => $users, 'seguidos'=>$follows, 'seguidores'=>$followers, 'tweets'=>$tweets ,'tweetsEscritos'=>$escritos,
        'usuarioConectadoFollowing' => $this->checkFollowingDeUsuarioConectado($id), 'listas'=>$listas]); 
    }
    public function perfilLikes($username) {

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
        //dd(Tweet::where('id', 2)->first()->likesUsers);

        $listas=$user->listas;
        $sus=$user->suscrito;
        $listas=$listas->merge($sus);

        return view('perfil/likes', ['conectado'=> Auth::user(),'user' => $user,'users' => $users, 'seguidos'=>$follows, 'seguidores'=>$followers, 'tweets'=>$tweets ,'tweetsEscritos'=>$escritos,
        'usuarioConectadoFollowing' => $this->checkFollowingDeUsuarioConectado($id), 'listas'=>$listas]); 
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

        $listas=$user->listas;
        $sus=$user->suscrito;
        $listas=$listas->merge($sus);
        //dd($user);
        //dd(Auth::user(), Auth::Guest());

        return view('perfil/following', ['user' => $user,'users' => $users, 'following'=>$follows, 'followers'=>$followers, 'tweets'=>$tweets ,'tweetsEscritos'=>$escritos,
        'usuarioConectadoFollowing' => $this->checkFollowingDeUsuarioConectado($id), 'listas'=>$listas]); 
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
        $listas=$user->listas;
        $sus=$user->suscrito;
        $listas=$listas->merge($sus);

        return view('perfil/followers', ['user' => $user,'users' => $users, 'following'=>$follows, 'followers'=>$followers, 'tweets'=>$tweets ,'tweetsEscritos'=>$escritos,
        'usuarioConectadoFollowing' => $this->checkFollowingDeUsuarioConectado($id), 'listas'=>$listas]); 
    }
    public function perfilTweet($username, $id) {

        $user =  User::where('username', $username)->first();
        $tweet =  Tweet::where('id', $id)->first();


        if($user->id != $tweet->user->id || $user==null || $tweet== null)
            return view(404);
        return view('tweet/tweet', ['conectado'=> Auth::user(),'user' => $user, 'tweet'=>$tweet ,'usuarioConectadoFollowing' => $this->checkFollowingDeUsuarioConectado($user->id)]);  
    }

    public function buscar(Request $request){


        $users = User::where('username', 'LIKE', '%'.$request->q.'%')->get();
        $users = $users->merge(User::where('name', 'LIKE', '%'.$request->q.'%')->get());
        $users =  $users;


        //dd($user);
        //dd(Auth::user(), Auth::Guest());

        return view('busqueda', ['user' => Auth::user(),'users' => $users, 'busqueda' => $request->q]); 
    }


    public function modificarPerfil(Request $request,  $username){
        error_log($request->perfil_multimedia);
        error_log($request->fondo_multimedia);
        if($request->fondo_multimedia == null && $request->fondo_multimedia != ""){
            DB::table('users')->where('username', Auth::user()->username)->update(['avatar'=> $request->fondo_multimedia]) ;

        }
        if($request->perfil_multimedia != null && $request->perfil_multimedia != "" ){
            DB::table('users')->where('username', Auth::user()->username)->update(['fondo'=> $request->perfil_multimedia]) ;    


        }

        return back();
    }

    public function perfilListas($username) {

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

        $listas=$user->listas;
        $sus=$user->suscrito;
        $listas=$listas->merge($sus);

        return view('perfil/listasSuscri', ['conectado'=> Auth::user(),'user' => $user,'users' => $users, 'seguidos'=>$follows, 'seguidores'=>$followers, 'tweets'=>$tweets ,'tweetsEscritos'=>$escritos,
        'usuarioConectadoFollowing' => $this->checkFollowingDeUsuarioConectado($id), 'listas'=>$listas]); 
    }

    public function perfilMiembro($username) {

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

        $listas=$user->listas;
        $sus=$user->suscrito;
        $listas=$listas->merge($sus);
        $miembro=$user->miembro;

        return view('perfil/listasMember', ['conectado'=> Auth::user(),'user' => $user,'users' => $users, 'seguidos'=>$follows, 'seguidores'=>$followers, 'tweets'=>$tweets ,'tweetsEscritos'=>$escritos,
        'usuarioConectadoFollowing' => $this->checkFollowingDeUsuarioConectado($id), 'listas'=>$listas, 'memberships'=>$miembro]); 
    }

}
