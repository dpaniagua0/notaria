@extends('layouts.login')

@section('content')

<!-- Error title -->
<div class="text-center content-group">
  <h1 class="error-title">403</h1>
  <h5>Oops, un error ha ocurrido. No tienes permisos suficientes!</h5>
</div>
<!-- /error title -->


<!-- Error content -->
<div class="row">
  <div class="col-lg-4 col-lg-offset-4 col-sm-6 col-sm-offset-3">


    <div class="row">
      <div class="col-sm-6 col-sm-offset-3">
        <a href="{{ url('home')}}" class="btn btn-primary btn-block content-group"><i class="icon-circle-left2 position-left"></i> Volver a inicio</a>
      </div>


    </div>
  </div>
</div>
<!-- /error wrapper -->

@endsection