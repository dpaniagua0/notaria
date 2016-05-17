@extends('layouts.app')

@section('content')

    <div class="panel panel-flat">
        <div class="panel-heading">
            <h6 class="panel-title text-center">
                Notaria Pública #34
                <br>
                DATOS PARA EL PAGO DE IMPUESTOS E INFORMACION PARA DECLARANOT {{date('Y')}}
            </h6>
        </div>
        <div class="panel-body">

            {!! Form::model($declaranot,[
            'route' => ['declaranotspriv.update', $declaranot->id],
            'class' => 'form-horizontal steps-basic',
            'method' => 'patch',
            'id' => 'wizard'
            ]) !!}
            {!! Form::token() !!}
            @include('declaranotspriv.fields')
            {!! Form::close() !!}
        </div>

    </div>

@endsection

