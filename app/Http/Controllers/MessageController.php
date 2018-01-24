<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Message;
use App\Conversation;
use App\User;

class MessageController extends Controller
{
    public function nuevoMensaje(Request $request, $conver){
        error_log($request->mensaje);
        error_log($conver);
        $idConver = Conversation::where('id', $conver)->first();
        $mensaje = new Message([
            'mensaje' => $request->mensaje,
        ]);
        $user = Auth::user();
        $mensaje->conversacion()->associate($idConver);
        $mensaje->usuario()->associate($user);
        $mensaje->save();
        return back();
     }

     public function nuevaConver($idUser){
        error_log($idUser);
        $user2 = User::where('id', $idUser)->first();
        $conver = new Conversation([
            'fechaInicio' =>  Carbon::now()
        ]);
        $user = Auth::user();
        $conver->usuario1()->associate($user);
        $conver->usuario2()->associate($user2);
        $conver->save();
        
        return back()->with('nueva', $conver->id);
     }

     public function deleteConver($idConver){
        error_log($idConver);
        $conver= Conversation::where('id', $idConver)->first();
        $user = Auth::user();

        if($conver == null){
            return view('404');
        }else{
            $conver->delete();
            /*if($conver->usuario1->id==$user->id){
                $conver->usuario1()->dissociate();
                $conver->save();
            }else{
                $conver->usuario2()->dissociate();
                $conver->save();
            }*/
            
        }
        
        return back()->with('nueva', 2);
     }

     public function deleteMensaje($idMensaje){
        error_log($idMensaje);
        $mensaje= Message::where('id', $idMensaje)->first();

        if($mensaje == null){
            return view('404');
        }else{
            $mensaje->delete();
            
        }
        
        return back()->with('nueva', 2);
     }
}
