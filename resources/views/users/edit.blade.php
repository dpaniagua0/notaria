@extends('layouts.app')

@section('content')

<div class="panel panel-flat">
  <div class="panel-heading">
    <h6 class="panel-title">
      Editar usuario
    </h6>
  </div>
  <div class="panel-body">
  {{$user->role_list}}
    {!! Form::model($user,[
                        'route' => ['users.update', $user->id],
                        'class' => 'form-horizontal',
                        'method' => 'patch'
                      ]) !!}

      {!! Form::token() !!}
    @include('users.fields')
    {!! Form::close() !!}
  </div>

</div>

@endsection