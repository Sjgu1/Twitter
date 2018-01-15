<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
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
        //dd(Auth::user(), Auth::Guest());

        return view('home', ['users' => $users, 'seguidos'=>$follows, 'seguidores'=>$followers, 'tweets'=>$merge ,'tweetsEscritos'=>$escritos]); 
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

     
}
