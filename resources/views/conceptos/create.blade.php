@extends('layouts.app')

@section('content')

<div class="panel panel-flat">
  <div class="panel-heading">
    <h6 class="panel-title">
      Nuevo concepto
    </h6>
  </div>
  <div class="panel-body">

    {!! Form::open([
    'route' => 'conceptos.store',
    'class' => 'form-horizontal',
    'method' => 'POST'
    ]) !!}
    {!! Form::token() !!}
    @include('conceptos.fields')
    {!! Form::close() !!}
  </div>

</div>

@endsection