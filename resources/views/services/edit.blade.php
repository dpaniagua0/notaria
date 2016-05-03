@extends('layouts.app')

@section('content')

<div class="panel panel-flat">
  <div class="panel-heading">
    <h6 class="panel-title">
      Nuevo rol
    </h6>
  </div>
  <div class="panel-body">

    {!! Form::model($service,[
                        'route' => ['servicios.update', $service->id],
                        'class' => 'form-horizontal',
                        'method' => 'patch'
                      ]) !!}

      {!! Form::token() !!}
    @include('services.fields')
    {!! Form::close() !!}
  </div>

</div>

@endsection