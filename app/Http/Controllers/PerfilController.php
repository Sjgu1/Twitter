<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Tweet;
use Carbon\Carbon;
use Carbon\CarbonInterval;
use App\Categoria;



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


    public function administrar() {
        $usuarios = User::all();
        $categorias = Categoria::all();

        return view('admin/administrar', ['users' => $usuarios, 'categorias'=> $categorias]); 

    }

    public function administrarUsuario($username) {
        $usuario = User::where('username', $username)->first();

        return view('admin/administrarUsuario', ['user' => $usuario]); 

    }

    public function administrarCategoria($categoria) {
        $categ = Categoria::where('id', $categoria)->first();

        return view('admin/administrarCategoria', ['categoria' => $categ]); 

    }

    public function crearUsuario(Request $request) {
        
        $nuevoUsuario = new User([
            'username' => $request->username,
            'email' => $request->email,
            'name' => $request->username,
            'fondo' => $request->fondo,
            'password' =>  bcrypt($request->password),
            'descripcion' => $request->descripcion,
            'avatar' => $request->avatar
        ]);
        $user = User::where('username', $nuevoUsuario->username)->first();
        if($user != null){
            $request->session()->flash('alert-danger', 'Ya existe un usuario con el mismo nombre.');
            return back();
        }

        $email = User::where('email', $nuevoUsuario->email)->first();
        if($email != null){
            $request->session()->flash('alert-danger', 'Ya existe un usuario con el mismo email.');
            return back();
        }

        $nuevoUsuario->save();
       
        $request->session()->flash('alert-success', 'Usuario creado con éxito');
        return back();

    }

    public function actualizarUsuario(Request $request, $username) {

        $user = User::where('username', $username)->first();

        if($user == null){
            $request->session()->flash('alert-danger', 'No se ha podido encontrar el usuario.');
            return back();
        }

        if($user->username != $request->username){
            $existe = User::where('username', $request->username)->first();
            if($existe != null){
                $request->session()->flash('alert-danger', 'Ya existe un usuario con el mismo nombre.');
                return back();
            }else{
                $user->username = $request->username;
            }
        }

        if($user->email != $request->email){
            $existeEmail = User::where('email', $request->email)->first();
            if($existeEmail != null){
                $request->session()->flash('alert-danger', 'Ya existe un usuario con el mismo email.');
                return back();
            }else{
                $user->email = $request->email;
            }
        }

        if($user->name != $request->name){    
            $user->name = $request->name;           
        }

        if($user->descripcion != $request->descripcion){    
            $user->descripcion = $request->descripcion;           
        }

        if($user->fondo != $request->fondo){    
            $user->fondo = $request->fondo;           
        }

        if($user->avatar != $request->avatar){    
            $user->avatar = $request->avatar;           
        }
        
        $user->save();
       
        $request->session()->flash('alert-success', 'Usuario actualizado con éxito');
        $url = '/administrar/usuario/'. $user->username;
        return redirect($url);

    }

    public function eliminarUsuario( $username) {
        $user = User::where('username', $username)->first();

        if($user == null){
            return back();
        }


        if($user->id == 1){
            return back();
        }

        $user->conversacion1()->delete();
        $user->conversacion2()->delete();
        $user->mensajes()->delete();
        //$user->seguidos()->delete();
       // $user->seguidores()->delete();
        $user->tweets()->delete();
        //$user->likes()->delete();
       // $user->retweets()->delete();
        $user->delete();
       
        return redirect('/administrar/general');

    }


    public function crearCategoria(Request $request) {
        
        $categoria = new Categoria([
            'name' => $request->name
        ]);

        $categoriaExiste = Categoria::where('name', $categoria->name)->first();
        if($categoriaExiste != null){
            $request->session()->flash('alert-danger', 'Ya existe una categoria con el mismo nombre.');
            return back();
        }


        $categoria->save();
       
        $request->session()->flash('alert-success', 'Categoría creada con éxito');
        return back();

    }

    public function actualizarCategoria(Request $request, $categoria) {

        $categoriaEncontrada = Categoria::where('id', $categoria)->first();

        if($categoriaEncontrada == null){
            $request->session()->flash('alert-danger', 'No se ha podido encontrar la categoria.');
            return back();
        }

        if($categoriaEncontrada->name != $request->name){
            $existe = Categoria::where('name', $request->name)->first();
            if($existe != null){
                $request->session()->flash('alert-danger', 'Ya existe una categoría con el mismo nombre.');
                return back();
            }else{
                $categoriaEncontrada->name = $request->name;
            }
        }
        
        if($request->tweet != null || $request->tweet != ""){
            $tweetEncontrado = Tweet::where('id', $request->tweet)->first();
            if($tweetEncontrado == null){
                $request->session()->flash('alert-danger', 'No Existe el tweet que buscas.');
                return back();
            }else{
                foreach($categoriaEncontrada->tweets as $comprobar){
                    if($comprobar->id == $tweetEncontrado->id){
                        $request->session()->flash('alert-danger', 'El tweet que buscas ya pertenece a esta categoría.');
                        return back();
                    }
                }
                $categoriaEncontrada->tweets()->attach($tweetEncontrado->id);
            }
        }

        
        $categoriaEncontrada->save();
       
        $request->session()->flash('alert-success', 'Categoría actualizada con éxito');
        $url = '/administrar/categoria/'. $categoriaEncontrada->id;
        return redirect($url);

    }

    public function eliminarCategoria( $categoria) {
        $categoriaEncontrada = Categoria::where('id', $categoria)->first();

        if($categoriaEncontrada == null){
            return back();
        }

        $categoriaEncontrada->delete();
       
        return redirect('/administrar/general');

    }

    public function eliminarTweetCategoria( $categoria, $tweet) {
        $categoriaEncontrada = Categoria::where('id', $categoria)->first();

        if($categoriaEncontrada == null){
            return back();
        }
        $tweetEncontrado = Tweet::where('id', $tweet)->first();
        if($tweetEncontrado == null){
            return back();
        }

        $categoriaEncontrada->tweets()->detach($tweetEncontrado->id);
       
        return back();

    }
}
