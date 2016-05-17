@extends('layouts.app')

@section('content')

<div class="panel panel-flat">
  <div class="panel-heading">
    <h2 class="panel-title">Declaranots Privados</h2>
  </div>
  <div class="panel-body">
    <div class="row">
      <div class="col-sm-4">
        <a href="{{ route('declaranots.create') }}" class="btn btn-success">Agregar declaranot</a>
      </div>
    </div>   
    <br>
    <div class="row">
      <div class="col-sm-12">
        @if(count($declaranots) > 0)
        <table class="table table-bordered table-striped">
          <thead>
            <th>Número de escritura</th>
            <th>Fecha de captura</th>
            <th>Fecha de firma</th>
            <th colspan="2" class="text-center"><i class="icon-cog"></i></th>
          </thead>
          <tbody>
            @foreach($declaranots as $declaranot)
            <tr>
              <td>{{$declaranot->file_number}}</td>
                <td>{{date("D d, M Y", strtotime($declaranot->upload_date))}}</td>
                <td>{{date("D d, M Y", strtotime($declaranot->sign_date))}}</td>
                <td class="text-center">
                <a class="btn btn-primary" href="{!! route('declaranots.edit', [$declaranot->id]) !!}">
                  <i class="icon-pencil"></i>
                </a>
              </td>
              <td class="text-center">

               <a class="btn btn-danger"  href="{!! route('declaranots.delete', [$declaranot->id]) !!}"
                 onclick="return confirm('Estas seguro de eliminar este declaranot?')">
                 <i class="icon-bin"></i>
               </a>
             </td>
           </tr>
           @endforeach
         </tbody>
       </table>
       <br>
        {!! $declaranots->links() !!}
       @else
       <h1 class="alert alert-primary text-center">No hay declaranots registrados.</h1>
       @endif
     </div>
   </div>
 </div>
</div>
@endsection