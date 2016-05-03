@extends('layouts.app')

@section('content')

<div class="panel panel-flat">
  <div class="panel-heading">
    <h2 class="panel-title">Roles</h2>
  </div>
  <div class="panel-body">
    <div class="row">
      <div class="col-sm-4">
        <a href="{{ route('roles.create') }}" class="btn btn-success">Agregar rol</a>
      </div>
    </div>   
    <br>
    <div class="row">
      <div class="col-sm-12">
        @if(count($roles) > 0)
        <table class="table table-bordered table-striped">
          <thead>
            <th>Alias</th>
            <th>Nombre</th>
            <th>Descripcción</th>
            <th colspan="2" class="text-center"><i class="icon-cog"></i></th>
          </thead>
          <tbody>
            @foreach($roles as $role)
            <tr>
              <td>{{$role->name}}</td>
              <td>{{$role->display_name}}</td>
              <td>{{$role->description}}</td>
              <td class="text-center">
                <a class="btn btn-primary" href="{!! route('roles.edit', [$role->id]) !!}">
                  <i class="icon-pencil"></i>
                </a>
              </td>
              <td class="text-center">

               <a class="btn btn-danger"  href="{!! route('roles.delete', [$role->id]) !!}" 
                 onclick="return confirm('Estas seguro de eliminar este rol?')">
                 <i class="icon-bin"></i>
               </a>
             </td>
           </tr>
           @endforeach
         </tbody>
       </table>
       <br>
        {!! $roles->links() !!}
       @else
       <h1 class="alert alert-primary text-center">No hay roles registrados.</h1>
       @endif
     </div>
   </div>
 </div>
</div>
@endsection