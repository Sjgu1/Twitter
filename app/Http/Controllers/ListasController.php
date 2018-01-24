<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Lista;

class ListasController extends Controller
{
    public function index($username, $nombre){
        $user =  User::where('username', $username)->first();

        if($user == null){
            return view('404'); 
        }

        $lista =  Lista::where('nombre', $nombre)->first();
        return view('listas/lista', ['lista'=> $lista, 'user'=>$user]); 

    }

    public function suscriptores($username, $nombre){
        $user =  User::where('username', $username)->first();

        if($user == null){
            return view('404'); 
        }

        $lista =  Lista::where('nombre', $nombre)->first();
        return view('listas/listaSuscri', ['lista'=> $lista, 'user'=>$user]); 

    }

    public function miembros($username, $nombre){
        $user =  User::where('username', $username)->first();

        if($user == null){
            return view('404'); 
        }
        $lista =  Lista::where('nombre', $nombre)->first();
        return view('listas/listaMembers', ['lista'=> $lista, 'user'=>$user]); 

    }

    public function addLista(Request $request){
        $user=Auth::user();
        $lista = new Lista([
            'nombre' => $request->nombre,
            'descripcion'=> $request->descripcion
        ]);
        $lista->usuario()->associate($user);
        $lista->save();
    }
}
