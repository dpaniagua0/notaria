@extends('layouts.app')

@section('content')

<div class="panel panel-flat">
  <div class="panel-heading">
    <h2 class="panel-title">Usuarios</h2>
  </div>
  <div class="panel-body">
    @if(count($users) > 0)
      <table class="table table-bordered table-striped">
        <thead>
          <th>Nombre</th>
          <th>Email</th>
          <th colspan="2" class="text-center"><i class="icon-cog"></i></th>
        </thead>
        <tbody>
          @foreach($users as $user)
          <tr>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td class="text-center">
              <a class="btn btn-primary" href="{!! route('users.edit', [$user->id]) !!}">
                <i class="icon-pencil"></i>
              </a>
            </td>
            <td class="text-center">
                     
               <a class="btn btn-danger"  href="{!! route('users.delete', [$user->id]) !!}" 
               onclick="return confirm('Estas seguro de eliminar este usuario?')">
                <i class="icon-bin"></i>
              </a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>

       <br>
        {!! $users->links() !!}
    @else
      <h1 class="alert alert-primary text-center">No hay usuarios registrados.</h1>
    @endif
  </div>
</div>
@endsection