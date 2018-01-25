<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Lista;
use App\Tweet;
use Carbon\Carbon;
use Carbon\CarbonInterval;

class ListasController extends Controller
{
    public function index($username, $nombre){
        Carbon::setLocale('es');
        $id = Auth::id();
        $userli =  User::where('username', $username)->first();
        $user = User::find($id);

        if($userli == null){
            return view('404'); 
        }

        $lista =  Lista::where('nombre', $nombre)->first();
        $follows=$lista->miembros;
       
        
        //$tweets = $lista->miembros->first()->tweets()->orderBy('fecha', 'desc')->with('user')->get();
        $tweets = User::find($id)->tweets()->orderBy('fecha', 'desc')->with('user')->get();
       
       
       $merge = $tweets;     
       foreach ($follows as $following){
           $followingTweets = User::find($following->id)->tweets()->orderBy('fecha', 'desc')->with('user')->get();

           $merge = $merge->merge($followingTweets);
           
       }
       $merge = $merge->sortByDesc('fecha');

       //Mis cosas para los rt
       foreach ($merge as $tweet){
           $tweet->esRT = false;
           $tweet->userRT = false;
           $tweet->esLike = false;
           $tweet->userLike = false;
           $tweet->fechaRT = $tweet->fecha;


       }
    
       foreach($follows as $siguiendo){
           $rtPorUsuario = $siguiendo->retweets;
           foreach($rtPorUsuario as $tweet){
               $tweet->esRT = true;
               $tweet->userRT = $siguiendo;
               $tweet->fechaRT = DB::table('tweet_user_rt')->where('id_tweet','=', $siguiendo->id)->where('id_user', '=',$tweet->id)->pluck('created_at')->get(0);
           }
           $merge = $merge->merge($rtPorUsuario);
       } 

       foreach($follows as $siguiendo){
           $likePorUsuario = $siguiendo->likes;
           foreach($likePorUsuario as $tweet){
               $tweet->esLike = true;
               $tweet->userLike = $siguiendo;
               $tweet->fechaRT = DB::table('tweet_user_like')->where('id_tweet','=', $siguiendo->id)->where('id_user', '=',$tweet->id)->pluck('created_at')->get(0);
           }
           $merge = $merge->merge($likePorUsuario);
       } 
       $merge = $merge->sortByDesc('fechaRT');

       $recientes=$lista->miembros()->paginate(3);

        return view('listas/lista', ['lista'=> $lista, 'user'=>$userli, 'tweets'=>$merge,'conectado'=> $user,'recientes'=> $recientes]); 

    }

    public function suscriptores($username, $nombre){
        $user=  User::where('username', $username)->first();

        if($user == null){
            return view('404'); 
        }

        $lista =  Lista::where('nombre', $nombre)->first();
        return view('listas/listaSuscri', ['lista'=> $lista, 'user'=>$user]); 

    }

    public function miembros($username, $nombre){
        $user =  User::where('username', $username)->first();
        $lista =  Lista::where('nombre', $nombre)->first();
        
        $users=User::where('id','!=', Auth::id())->whereNotIn('id', $lista->miembros->modelKeys() )->get();

        if($user == null){
            return view('404'); 
        }
        
        return view('listas/listaMembers', ['lista'=> $lista, 'user'=>$user, 'users'=>$users]); 

    }

    public function addLista(Request $request){
        error_log($request->nombre);
        $user=Auth::user();
        $lista = new Lista([
            'nombre' => $request->nombre,
            'descripcion'=> $request->descripcion
        ]);
        $lista->usuario()->associate($user);
        $lista->save();
    }

    public function deleteLista($username,$nombre){

        $lista= Lista::where('nombre', $nombre)->first();
        if($lista == null){
            return view('404');
        }
        $lista->delete();
        return redirect()->action('PerfilController@perfilListas', ['username' => $username]);
    }

    public function addSuscriptor($username,$nombre){
        $lista= Lista::where('nombre', $nombre)->first();
        $user=Auth::user();
        $lista->suscritos()->attach($user);
        return back();
        
    }

    public function removeSuscriptor($username,$nombre){
        $lista= Lista::where('nombre', $nombre)->first();
        $user=Auth::user();
        $lista->suscritos()->detach($user);
        return back();    
    }

    public function addMiembro($username,$nombre){
        $lista= Lista::where('nombre', $nombre)->first();
        $userli =  User::where('username', $username)->first();
        $existe = false;
        foreach($lista->miembros as $miembro){
            if($miembro->id == $userli->id){
                $existe=true;
                break;
            }

        }

        if($existe == false){
            $lista->miembros()->attach($userli);
        }
        
        
        return back();
        
    }

    public function removeMiembro($username,$nombre){

        $lista= Lista::where('nombre', $nombre)->first();
        $userli =  User::where('username', $username)->first();

        $lista->miembros()->detach($userli);

        return back();    
    }

    public function updateLista(Request $request,$id){
        $lista= Lista::where('id', $id)->first();
        error_log($id);
        //dd($request);
        if($lista->nombre != $request->nombre){    
            $lista->nombre=$request->nombre;           
        }
        if($lista->descripcion!= $request->descripcion){
            $lista->descripcion=$request->descripcion;
        }
        $username=Auth::user()->username;
        //dd($lista);
        $lista->save();
        $url = '/'. $username .'/listas'.'/'.$lista->nombre;
        //$url= $url.'/listas'.'/'.$lista->nombre;
        //dd($url);
        return redirect($url);
        
    }
}
