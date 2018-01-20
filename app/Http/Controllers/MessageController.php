<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index($conver){
        $mensajes=$conver->mensajes;
        return view('nav', ['mensajes'=> $mensajes]);
    }
}
