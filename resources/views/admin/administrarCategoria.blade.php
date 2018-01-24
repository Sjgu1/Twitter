@extends('layouts.app')
@section('content')
	<div class="container" style="margin-top:30px">
    <div class="flash-message">
    @foreach (['danger', 'warning', 'success', 'info'] as $msg)
      @if(Session::has('alert-' . $msg))

      <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
      @endif
    @endforeach
  </div> <!-- end .flash-message -->
		<h2>Categoria: {{$categoria->name}}</h2>
		<div class="row" >
            <br/>        
                <div class=" panel panel-default">
                    <div class="panel-body">
            <div class="row">
            <form class="t1-form" action="/administrar/categoria/{{$categoria->id}}" method="POST">
                        {!! csrf_field() !!}
                
                        <div class="col-md-1">
                </div>
                <div class="col-md-3">
                    <label style="margin-top:10px">Nombre</label>
                    <input type="text" name="name" id="name"  class="form-control" value="{{$categoria->name}}" required>
                    
                </div>
                <div class="col-md-2">
                </div>
                <div class="col-md-3">
                    <label style="margin-top:10px">Insertar tweet:</label>
                    <input type="number" name="tweet" id="tweet"  class="form-control">
                    
                </div>
                <div class="col-md-11 text-center" style="margin-left:30px;">
              <br/>
              <label style="margin-top:10px">Tweets en esta categoría:</label>

              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Usuario</th>
                    <th>Mensaje</th>
                    <th>Eliminar</th>
                  </tr>
                </thead>
                <tbody>
                @foreach($categoria->tweets as $tweet)
                  <tr>
                    <td><a href="/{{$tweet->user->username}}/status/{{$tweet->id}}">{{$tweet->id}}</a> </td>                  
                    <td><a href="/{{$tweet->user->username}}">{{$tweet->user->username}}</a></td>   
                    <td><p>{{$tweet->mensaje}}</p></td>                    
                    <td style="text-align: center;vertical-align: middle;"><a href="/administrar/categoria/{{$categoria->id}}/eliminarTweet/{{$tweet->id}}"><span class="glyphicon glyphicon-trash"></a></td>
                  </tr>
                 @endforeach
                </tbody>
              </table>
                
                </div>
                
                    
                    <br><br>
            </div>
                <a  style="margin-top: 10px" href="{{ action('PerfilController@eliminarCategoria', ['categoria' => $categoria->id ])}}" type="button"  class="btn btn-danger pull-left">Eliminar</a>
                    <button style="margin-top: 10px" type="submit" class="btn btn-default pull-right">Actualizar</button>
                </form>
            </div>
            <!-- ROW END -->

                    </div>
                </div>
	    </div>


@endsection