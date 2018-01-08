<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\User;

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
    public function index()
    {
        return view('home');
    }

    public function recomendados() {
        $users = DB::table('users')->paginate(3);
        $id = Auth::id();
        $user = User::find($id);
        $followers=$user->seguidores;
        /*foreach ($user->seguidores as $seguidor) {
            echo seguidor;
        }*/
        return view('home', ['users' => $users, 'seguidores'=>$followers]); 
    }

    public function seguir($seguidor, $seguido){
        $seguidor->user()->attach($seguido);
    }

    public function dejarDeSeguir($seguidor, $seguido){
        $seguidor->user()->detach($seguido);
    }

}
