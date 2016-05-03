@extends('layouts.app')

@section('content')

<div class="panel panel-flat">
  <div class="panel-heading">
    <h2 class="panel-title">Escrituras</h2>
  </div>
  <div class="panel-body">
    <div class="row">
      <div class="col-sm-4">
        <a href="{{ route('escrituras.create') }}" class="btn btn-success">Agregar escritura</a>
      </div>
    </div>   
    <br>
    <div class="row">
      <div class="col-sm-12">
        @if(count($escrituras) > 0)
        <table class="table table-bordered table-striped">
          <thead>
            <th>Número de escritura</th>
            <th>Fecha de llegada</th>
            <th>Fecha de alta</th>
            <th colspan="2" class="text-center"><i class="icon-cog"></i></th>
          </thead>
          <tbody>
            @foreach($escrituras as $escritura)
            <tr>
              <td>{{$escritura->file_number}}</td>
              <td>{{date("D d, M Y", strtotime($escritura->arrive_date))}}</td>
              <td>{{date("D d, M Y", strtotime($escritura->upload_date))}}</td>
              <td class="text-center">
                <a class="btn btn-primary" href="{!! route('escrituras.edit', [$escritura->id]) !!}">
                  <i class="icon-pencil"></i>
                </a>
              </td>
              <td class="text-center">
               
               <a class="btn btn-danger"  href="{!! route('escrituras.delete', [$escritura->id]) !!}" 
                 onclick="return confirm('Estas seguro de eliminar esta escritura?')">
                 <i class="icon-bin"></i>
               </a>
             </td>
           </tr>
           @endforeach
         </tbody>
       </table>
       <br>
        {!! $escrituras->links() !!}
       @else
       <h1 class="alert alert-primary text-center">No hay escrituras registradas.</h1>
       @endif
     </div>
   </div>
 </div>
</div>
@endsection