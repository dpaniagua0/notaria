@extends('layouts.app')

@section('content')

<div class="panel panel-flat">
  <div class="panel-heading">
    <h6 class="panel-title">
      Editar escritura
    </h6>
  </div>
  <div class="panel-body">

     {!! Form::model($escritura,[
                        'route' => ['escrituras.update', $escritura->id],
                        'class' => 'form-horizontal',
                        'method' => 'patch'
                      ]) !!}
    
    {!! Form::token() !!}
    @include('escrituras.fields')
    {!! Form::close() !!}
  </div>

</div>

@endsection