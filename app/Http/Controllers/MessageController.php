<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Message;
use App\Conversation;

class MessageController extends Controller
{
    public function nuevoMensaje(Request $request, $conver){
        error_log($request->mensaje);
        error_log($conver);
        $idConver = Conversation::all();
        dd($idConver);
        error_log($idConver);
        $mensaje = new Message([
            'mensaje' => $request->mensaje,
        ]);
        $user = Auth::user();
        $mensaje->conversacion()->associate($idConver);
        $mensaje->usuario()->associate($user);
        $mensaje->save();
        return back();
     }
}
