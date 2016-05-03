@extends('layouts.app')

@section('content')

<div class="panel panel-flat">
  <div class="panel-heading">
    <h6 class="panel-title">
      Nueva escritura
    </h6>
  </div>
  <div class="panel-body">

    {!! Form::open([
    'route' => 'escrituras.store',
    'class' => 'form-horizontal',
    'method' => 'POST'
    ]) !!}
    {!! Form::token() !!}
    @include('escrituras.fields')
    {!! Form::close() !!}
  </div>

</div>

@endsection