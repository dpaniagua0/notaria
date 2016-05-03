@extends('layouts.app')

@section('content')

<div class="panel panel-flat">
  <div class="panel-heading">
    <h2 class="panel-title">Conceptos</h2>
  </div>
  <div class="panel-body">
    <div class="row">
      <div class="col-sm-4">
        <a href="{{ route('conceptos.create') }}" class="btn btn-success">Agregar concepto</a>
      </div>
    </div>   
    <br>
    <div class="row">
      <div class="col-sm-12">
        @if(count($conceptos) > 0)
        <table class="table table-bordered table-striped">
          <thead>
            <th>Nombre</th>
            <th>Alias</th>
            <th colspan="2" class="text-center"><i class="icon-cog"></i></th>
          </thead>
          <tbody>
            @foreach($conceptos as $concepto)
            <tr>
              <td>{{$concepto->display_name}}</td>
              <td>{{$concepto->name}}</td>
              <td class="text-center">
                <a class="btn btn-primary" href="{!! route('conceptos.edit', [$concepto->id]) !!}">
                  <i class="icon-pencil"></i>
                </a>
              </td>
              <td class="text-center">
               
               <a class="btn btn-danger"  href="{!! route('conceptos.delete', [$concepto->id]) !!}" 
                 onclick="return confirm('Estas seguro de eliminar este concepto?')">
                 <i class="icon-bin"></i>
               </a>
             </td>
           </tr>
           @endforeach
         </tbody>
       </table>
       <br>
        {!! $conceptos->links() !!}
       @else
       <h1 class="alert alert-primary text-center">No hay conceptos registrados.</h1>
       @endif
     </div>
   </div>
 </div>
</div>
@endsection