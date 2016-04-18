@extends('layouts.app')

@section('content')

<div class="panel panel-flat">
  <div class="panel-heading">
    <h2 class="panel-title">Roles</h2>
  </div>
  <div class="panel-body">
    @if(count($roles) > 0)
      <table class="table table-bordered table-striped">
        <thead>
          <th>Alias</th>
          <th>Nombre</th>
          <th>Descripcción</th>
        </thead>
        <tbody>
          @foreach($roles as $role)
          <tr>
            <td>{{$role->name}}</td>
            <td>{{$role->display_name}}</td>
            <td>{{$role->description}}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
    @else
      <h1 class="alert alert-primary text-center">No hay roles registrados.</h1>
    @endif
  </div>
</div>
@endsection