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
		<h2>Administración</h2>
		<br/>
		<div class="row">
			<div>
				<ul class="nav nav-tabs col-sm-12 col-md-12">
					<li class="active">
						<a data-toggle="tab" href="#menu1">Usuarios</a>
					</li>
					<li>
						<a data-toggle="tab" href="#menu2">Categorías</a>
					</li>
				</ul>
			</div>
			<div class="tab-content col-md-12 col-sm-12" style="background-color: white; border: 1px solid  #ddd;">
            <br/>
				<div id="menu1" class="tab-pane fade in active" >
                <input type="text" id="searchUser" placeholder="Buscar ..."></input> <span class=" btn pull-right glyphicon glyphicon-plus"  data-toggle="collapse" data-target="#collapseUsuario"></span>
                <div id="collapseUsuario"class="collapse">
                <br/>
                    <div class=" panel panel-default">
                        <div class="panel-body">
                        <form class="t1-form" action="/administrar/crearUsuario" method="POST">
                        {!! csrf_field() !!}
                            <div class="row">
                                <div style="margin-left:10%" >
                                <div class="col-md-3">
                                    <label for="username">Username:</label>
                                    <input type="text" class=""name="username" id="username" value="{{ old('username') }}" required>
                                </div>
                                <div class=" col-md-3">
                                    <label for="email">Email:</label>
                                    <input type="email" class="" name="email" id="email" value="{{ old('email') }}" required>
                                </div>
                                <div class="col-md-3">
                                    <label for="password">Password:</label>
                                    <input type="password" class="" name="password" id="password" value="{{ old('password') }}" required>
                                </div>
                                </div>
                            </div>
                            <br/>
                            <div class="row">
                                <div style="margin-left:10%" >
                                <div class=" col-md-3">
                                    <label for="email">Avatar:</label>
                                    <input type="url" class="" name="avatar" id="avatar" value="{{ old('avatar') }}" required>
                                </div>
                                <div class="col-md-3">
                                    <label for="fondo">Fondo:</label>
                                    <input type="url" class="" name="fondo"id="fondo" value="{{ old('fondo') }}" required>
                                </div>
                                <div class="col-md-3">
                                    <label for="descripcion">Descripción:</label>
                                    <input type="text" class="" name="descripcion" id="descripcion" value="{{ old('descripcion') }}" required>
                                </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-default pull-right">Crear</button>
                            
                            </form>
                        </div>
                    </div>
                    </div>
                    <br/><br/>
                <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Name</th> 
                    <th>Descripción</th>
                    <th>Avatar</th>
                    <th>Fondo</th>
                    <th>Acciones</th>
                  </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                  <tr>
                    <td>{{$user->username}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->descripcion}}</td>
                    <td><img src="{{$user->avatar}}" height="42" width="42"/></td>
                    <td style="text-align: center;vertical-align: middle;"><a href="{{$user->fondo}}">Enlace</a></td>
                    <td style="text-align: center;vertical-align: middle;"><a href="/administrar/usuario/{{$user->username}}"><span class="glyphicon glyphicon-pencil"></a></td>
                  </tr>
                 @endforeach
                </tbody>
              </table>
				</div>
				<div id="menu2" class="tab-pane fade">
                 <span class=" btn pull-right glyphicon glyphicon-plus"  data-toggle="collapse" data-target="#collapseCategorias"></span>
                    <br/>
                    <div id="collapseCategorias"class="collapse">
                <br/>
                    <div class=" panel panel-default">
                        <div class="panel-body">
                        <form class="t1-form" action="/administrar/crearCategoria" method="POST">
                        {!! csrf_field() !!}
                            <div class="row">
                                <div style="margin-left:10%" >
                                <div class="col-md-12">
                                    <label for="username">Name:</label>
                                    <input type="text" class=""name="name" id="name" value="{{ old('username') }}" required>
                                </div>
                            
                                </div>
                            </div>
                            <br/>
                            <button type="submit" class="btn btn-default pull-right">Crear</button>
                            
                            </form>
                        </div>
                    </div>
                    </div>
                    <br/><br/>
                <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>Nombre</th>
                    <th>Tweets</th>
                    <th>Acciones</th>
                  </tr>
                </thead>
                <tbody>
                @foreach($categorias as $categoria)
                  <tr>
                    <td>{{$categoria->name}}</td>
                    <td>
                    @foreach($categoria->tweets as $tweet)
                    <p><a href="/{{$tweet->user->username}}/status/{{$tweet->id}}">Enlace:</a> {{$tweet->mensaje}}</p>          
                    @endforeach
                    </td>
                    <td style="text-align: center;vertical-align: middle;"><a href="/administrar/categoria/{{$categoria->id}}"><span class="glyphicon glyphicon-pencil"></a></td>
                  </tr>
                 @endforeach
                </tbody>
              </table>
				</div>
			</div>
		</div>
	</div>
</div>


<script>
$("#searchUser").on("keyup", function() {
    var value = $(this).val();

    $("table tr").each(function(index) {
        if (index !== 0) {

            $row = $(this);

            var id = $row.find("td:first").text();

            if (id.indexOf(value) !== 0) {
                $row.hide();
            }
            else {
                $row.show();
            }
        }
    });
});
</script>
@endsection