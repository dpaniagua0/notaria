@extends('layouts.app')

@section('content')

<div class="panel panel-flat">
  <div class="panel-heading">
    <h6 class="panel-title">
      Nuevo usuario
    </h6>
  </div>
  <div class="panel-body">

    {!! Form::open([
    'route' => 'users.store',
    'class' => 'form-horizontal',
    'method' => 'POST'
    ]) !!}
    {!! Form::token() !!}
    @include('users.fields')
    {!! Form::close() !!}
  </div>

</div>

@endsection