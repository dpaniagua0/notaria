@extends('layouts.app')

@section('content')

<div class="panel panel-flat">
  <div class="panel-heading">
    <h2 class="panel-title">Servicios</h2>
  </div>
  <div class="panel-body">
    <div class="row">
      <div class="col-sm-4">
        <a href="{{ route('servicios.create') }}" class="btn btn-success">Agregar servicio</a>
      </div>
    </div>   
    <br>

    <div class="row">
      <div class="col-sm-12">
        @if(count($services) > 0)
        <table class="table table-bordered table-striped">
          <thead>
            <th>Nombre</th>
            <th>Alias</th>
            <th colspan="2" class="text-center"><i class="icon-cog"></i></th>
          </thead>
          <tbody>
            @foreach($services as $service)
            <tr>
              <td>{{$service->display_name}}</td>
              <td>{{$service->name}}</td>
              <td class="text-center">
                <a class="btn btn-primary" href="{!! route('servicios.edit', [$service->id]) !!}">
                  <i class="icon-pencil"></i>
                </a>
              </td>
              <td class="text-center">

               <a class="btn btn-danger"  href="{!! route('servicios.delete', [$service->id]) !!}" 
                 onclick="return confirm('Estas seguro de eliminar este servicio?')">
                 <i class="icon-bin"></i>
               </a>
             </td>
           </tr>
           @endforeach
         </tbody>
       </table>
       <br>
        {!! $services->links() !!}
       @else
       <h1 class="alert alert-primary text-center">No hay servicios registrados.</h1>
       @endif
     </div>
   </div>
 </div>
</div>
@endsection