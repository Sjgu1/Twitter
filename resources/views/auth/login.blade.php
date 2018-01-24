@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Login</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div class="row">
        <div style=" border-radius: 25px;border: 2px solid rgb(29, 161, 242);background-color: #f5f5f9;max-height:300px; overflow-x: scroll"class="col-md-10 col-md-offset-1">
            <div class="">
            @foreach($categorias as $categoria)
            <div class="col-md-12">

                <div style="margin-top:10px;margin-right:3px;height: 40px;background-color: #f5f5f5" class="text-center">
                    <h2 >{{$categoria->name}}</h2>      
                </div>
                @foreach($categoria->tweets as $tweet)
                    <div style= " border-radius: 25px;border: 2px solid rgb(29, 161, 242);margin-left:60px; height:300px;margin-top: 10px;background-color: rgba(30, 161, 242, 0.13); margin-right:10px"class="rcorners2 col-md-3">
                    <img style="margin-top:3px;"class="avatar js-action-profile-avatar " src="{{ $tweet->user->avatar }}"alt=""> <label> @ {{$tweet->user->username}}</label>

                        <p style="margin-top:3px;">{{$tweet->mensaje}}</p>
                    </div>
                @endforeach
                </div>
            @endforeach
            </div>
            </div>
        </div>
    </div>
</div>
@endsection
