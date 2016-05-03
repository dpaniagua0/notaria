@extends('layouts.app')

@section('content')

<div class="panel panel-flat">
  <div class="panel-heading">
    <h6 class="panel-title">
      Editar concepto
    </h6>
  </div>
  <div class="panel-body">
    {!! Form::model($concepto,[
                        'route' => ['conceptos.update', $concepto->id],
                        'class' => 'form-horizontal',
                        'method' => 'patch'
                      ]) !!}

      {!! Form::token() !!}
    @include('conceptos.fields')
    {!! Form::close() !!}
  </div>

</div>

@endsection