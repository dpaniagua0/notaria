@extends('layouts.app')

@section('content')

<div class="panel panel-flat">
  <div class="panel-heading">
    <h6 class="panel-title">
      Nuevo servicio
    </h6>
  </div>
  <div class="panel-body">

    {!! Form::open([
    'route' => 'servicios.store',
    'class' => 'form-horizontal',
    'method' => 'POST'
    ]) !!}
    {!! Form::token() !!}
    @include('services.fields')
    {!! Form::close() !!}
  </div>

</div>

@endsection