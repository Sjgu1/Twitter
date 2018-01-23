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
		<h2>Usuario: {{$user->username}}</h2>
		<div class="row">
            <br/>        
                <div class=" panel panel-default">
                    <div class="panel-body">
            <div class="row">
            <form class="t1-form" action="/administrar/usuario/{{$user->username}}" method="POST">
                        {!! csrf_field() !!}
                <div class="col-md-4">
                    <div class = "col-md-10">
                    <label>Avatar</label>
                        <img src="{{$user->avatar}}" style="max-height:90px ;margin-bottom:5px" class="img-rounded img-responsive center center-block">                       
                        <input type="utl" name="avatar" id="avatar"  class="form-control" value="{{$user->avatar}}" required>
                        <label style="margin-top:10px" >Fondo</label>
                        <img src="{{$user->fondo}}"style="max-height:90px;margin-bottom:5px"  class="img-rounded img-responsive center center-block">
                        <input type="utl" name="fondo" id="fondo"  class="form-control" value="{{$user->fondo}}" required>
                        </div>     
                    </div>             
                    <div class="col-md-6">
                    <label style="margin-top:10px">Username</label>
                    <input type="text" name="username" id="username"  class="form-control" value="{{$user->username}}" required>
                    <label style="margin-top:15px"> Name</label>
                    <input type="text" name="name" id="name"  class="form-control" value="{{$user->name}}" required>
                    <label style="margin-top:15px">Email</label>
                    <input type="email" name="email" id="email"  class="form-control" value="{{$user->email}}" required>
                    <label style="margin-top:15px">Descripción</label>
                    <input type="text" name="descripcion" id="descripcion" class="form-control" value="{{$user->descripcion}}" required>
                    <br>
                    <a href="" class="btn btn-danger pull-left">Eliminar</a>
                    <button type="submit" class="btn btn-default pull-right">Actualizar</button>
                    <br><br>
                </div>
            </div>
            <!-- ROW END -->

                    </div>
                </div>
	    </div>


@endsection