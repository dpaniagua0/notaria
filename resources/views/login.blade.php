@extends('layouts.login')

@section('content')
<!-- Simple login form -->
<form role="form" method="POST" action="{{ url('/login') }}">
   {!! csrf_field() !!}

  <div class="panel panel-body login-form">
    <div class="text-center">
      <div class="icon-object border-slate-300 text-slate-300"><i class="icon-reading"></i></div>
      <h5 class="content-group">Iniciar sesión</h5>
    </div>

    <div class="form-group has-feedback has-feedback-left {{ $errors->has('email') ? ' has-error alpaca-invalid' : '' }}">
      <input type="text" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}">
      <div class="form-control-feedback">
        <i class="icon-user text-muted"></i>
      </div> 
      @if ($errors->has('email'))
          <span class="help-block">
            <strong>{{ $errors->first('email') }}</strong>
          </span>
      @endif
    </div>

    <div class="form-group has-feedback has-feedback-left {{ $errors->has('password') ? ' has-error alpaca-invalid' : '' }}">
      <input type="password" class="form-control" placeholder="Contraseña" name="password" value="{{ old('password') }}">
      <div class="form-control-feedback">
        <i class="icon-lock2 text-muted"></i>
      </div>
      @if ($errors->has('password'))
          <span class="help-block">
            <strong>{{ $errors->first('password') }}</strong>
          </span>
      @endif
    </div>

    <div class="form-group">
      <button type="submit" class="btn btn-primary btn-block">Entrar <i class="icon-circle-right2 position-right"></i></button>
    </div>

    <!--<div class="text-center">
      <a href="login_password_recover.html">Forgot password?</a>
    </div>-->
  </div>
</form>
<!-- /simple login form -->
@endsection
