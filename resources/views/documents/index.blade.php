@extends('layouts.app')

@section('content')

<div class="panel panel-flat">
  <div class="panel-heading">
    <h2 class="panel-title">Documentos</h2>
  </div>
  <div class="panel-body">
    <div class="row">
      <div class="col-sm-4">
        <a href="{{ route('documentos.create') }}" class="btn btn-success">Agregar documento</a>
      </div>
    </div>   
    <br>
    <div class="row">
      <div class="col-sm-12">
        @if(count($documents) > 0)
        <table class="table table-bordered table-striped">
          <thead>
            <th>Número de documento</th>
            <th>Fecha de llegada</th>
            <th>Fecha de captura</th>
            <th colspan="2" class="text-center"><i class="icon-cog"></i></th>
          </thead>
          <tbody>
            @foreach($documents as $document)
            <tr>
              <td>{{$document->file_number}}</td>
              <td>{{date("D d, M Y", strtotime($document->arrive_date))}}</td>
              <td>{{date("D d, M Y", strtotime($document->upload_date))}}</td>
              <td class="text-center">
                <a class="btn btn-primary" href="{!! route('documentos.edit', [$document->id]) !!}">
                  <i class="icon-pencil"></i>
                </a>
              </td>
              <td class="text-center">

               <a class="btn btn-danger"  href="{!! route('documentos.delete', [$document->id]) !!}" 
                 onclick="return confirm('Estas seguro de eliminar este documento?')">
                 <i class="icon-bin"></i>
               </a>
             </td>
           </tr>
           @endforeach
         </tbody>
       </table>
       <br>
        {!! $documents->links() !!}
       @else
       <h1 class="alert alert-primary text-center">No hay documentos registrados.</h1>
       @endif
     </div>
   </div>
 </div>
</div>
@endsection