@extends('layouts.app')

@section('content')

<div class="panel panel-flat">
  <div class="panel-heading">
    <h6 class="panel-title">
      Nueva documento
    </h6>
  </div>
  <div class="panel-body">

    {!! Form::open([
    'route' => 'documentos.store',
    'class' => 'form-horizontal',
    'method' => 'POST'
    ]) !!}
    {!! Form::token() !!}
    @include('documents.fields')
    {!! Form::close() !!}
  </div>

</div>

@endsection