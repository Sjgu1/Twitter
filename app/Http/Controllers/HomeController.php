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
    /*public function index()
    {
        return view('home');
    }*/

    public function index() {
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
        return view('home', ['users' => $users, 'seguidos'=>$follows, 'seguidores'=>$followers]); 
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

}
