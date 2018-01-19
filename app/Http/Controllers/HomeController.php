<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use App\User;
use App\Tweet;
use Carbon\Carbon;
use Carbon\CarbonInterval;



class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    /*public function index()
    {
        return view('home');
    }*/

    public function index() {
        
        Carbon::setLocale('es');
        $id = Auth::id();
        $user = User::find($id);
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
        $rtPorUsuario = $user->retweets;
        foreach($rtPorUsuario as $tweet){
            $tweet->esRT = true;
            $tweet->userRT = $user;
            $tweet->fechaRT = DB::table('tweet_user_rt')->where('id_tweet','=', $user->id)->where('id_user', '=',$tweet->id)->pluck('created_at')->get(0);
        } 
        $merge = $merge->merge($rtPorUsuario);

        $likePorUsuario = $user->likes;
        foreach($likePorUsuario as $tweet){

            $tweet->esLike = true;
            $tweet->userLike = $user;
            $tweet->fechaRT = DB::table('tweet_user_like')->where('id_tweet','=', $user->id)->where('id_user', '=',$tweet->id)->pluck('created_at')->get(0);
        } 
        $merge = $merge->merge($likePorUsuario);

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
        //$merge = $user->tweets;

        //dd(Auth::user(), Auth::Guest());
        //$retweets = DB::table('tweet_user_rt')->where('id_user', 1)->get();
        //$retweets = $merge->merge($follows);
        //$user->nuevo= true;
        //print_r($rtPorUsuario);
        return view('home', ['conectado'=> $user,'users' => $users, 'seguidos'=>$follows, 'seguidores'=>$followers, 'tweets'=>$merge ,'tweetsEscritos'=>$escritos]); 
    }

    public function seguir($seguido){
        $id = Auth::id();
        $seguidor = User::find($id);
        $seguidor->seguidos()->attach($seguido);
        return back();
    }
    public function dejarDeSeguir($seguido){
        $id = Auth::id();
        $seguidor = User::find($id);
        $seguidor->seguidos()->detach($seguido);
        return back();
    }

    public function nuevoTweet(Request $request){

        $tweet = new Tweet([
            'fecha' =>  Carbon::now(),
            'mensaje' => $request->mensaje
        ]);
        $user = Auth::user();
        $tweet->user()->associate($user);
        $tweet->save();
     }

     
     public function addRespuesta(Request $request){
        error_log("prueas");
        return Redirect::back()->with('message','Operation Successful !');
         }

    public function addRT($tweet){
        Auth::user()->retweets()->attach($tweet);
        return back();         
     }
    public function removeRT($tweet){
        Auth::user()->retweets()->detach($tweet);
        return back();         
     }

     public function addLike($tweet){
        Auth::user()->likes()->attach($tweet);
        return back();         
     }
    public function removeLike($tweet){
        Auth::user()->likes()->detach($tweet);
        
        return back();         
    }

    public function removeTweet($tweet){
        
        $tw= Tweet::find($tweet);
        if($tw == null){
            return view('404');

        }
        if(Auth::id() ==  $tw->user->id){
            
            $tw->delete();
        }

        return redirect("/");
    }

     
}
