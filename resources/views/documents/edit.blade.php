@extends('layouts.app')

@section('content')

<div class="panel panel-flat">
  <div class="panel-heading">
    <h6 class="panel-title">
      Editar documento
    </h6>
  </div>
  <div class="panel-body">

     {!! Form::model($document,[
                        'route' => ['documentos.update', $document->id],
                        'class' => 'form-horizontal',
                        'method' => 'patch'
                      ]) !!}
    
    {!! Form::token() !!}
    @include('documents.fields')
    {!! Form::close() !!}
  </div>

</div>

@endsection