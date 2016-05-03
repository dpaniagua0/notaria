<div class="row">
    <div class="col-sm-6">
        <div class="form-group {{ $errors->has('file_number') ? ' has-error' : '' }}">
            <div class="col-sm-10">
                {!! Form::label('file_number', 'Número de documento',['class' => 'control-label']) !!}

                {!! Form::text('file_number', null, ['class' => 'form-control', 'placeholder' => 'Número de documento' ]) !!}

                @if ($errors->has('file_number'))
                <span class="help-block">
                    <strong>{{ $errors->first('file_number') }}</strong>
                </span>
                @endif
            </div>
        </div>

    </div>

    <div class="col-sm-6">
        <div class="form-group {{ $errors->has('client_name') ? ' has-error' : '' }}">
            <div class="col-sm-10">
             {!! Form::label('client_name', 'Nombre del cliente', ['class' => 'control-label']) !!}

             {!! Form::text('client_name', null, ['class' => 'form-control', 'placeholder' => 'Nombre del cliente' ]) !!}

             @if ($errors->has('client_name'))
             <span class="help-block">
                <strong>{{ $errors->first('client_name') }}</strong>
            </span>
            @endif
        </div>
    </div>
</div>
</div>

<div class="row">

    <div class="col-sm-6">
        <div class="form-group {{ $errors->has('upload_date') ? ' has-error' : '' }}">
            <div class="col-sm-10">
             {!! Form::label('upload_date', 'Fecha de captura', ['class' => 'control-label']) !!}

             {!! Form::text('upload_date', null, ['class' => 'form-control datepicker', 'placeholder' => 'Fecha de captura' ]) !!}

             @if ($errors->has('upload_date'))
             <span class="help-block">
                <strong>{{ $errors->first('upload_date') }}</strong>
            </span>
            @endif
        </div>
    </div>
</div>

<div class="col-sm-6">
    <div class="form-group {{ $errors->has('arrive_date') ? ' has-error' : '' }}">
        <div class="col-sm-10">
            {!! Form::label('arrive_date', 'Fecha de llegada',['class' => 'control-label']) !!}

            {!! Form::text('arrive_date', null, ['class' => 'form-control datepicker', 'placeholder' => 'Fecha de llegada' ]) !!}

            @if ($errors->has('arrive_date'))
            <span class="help-block">
                <strong>{{ $errors->first('arrive_date') }}</strong>
            </span>
            @endif
        </div>
    </div>

</div>


</div>

<div class="row">
    <div class="col-sm-6">
        <div class="form-group {{ $errors->has('price') ? ' has-error' : '' }}">
            <div class="col-sm-10">
                {!! Form::label('price', 'Cósto',['class' => 'control-label']) !!}

                {!! Form::text('price', null, ['class' => 'form-control', 'placeholder' => 'Cósto' ]) !!}

                @if ($errors->has('price'))
                <span class="help-block">
                    <strong>{{ $errors->first('price') }}</strong>
                </span>
                @endif
            </div>
        </div>

    </div>

    <div class="col-sm-6">
        <div class="form-group {{ $errors->has('user_id') ? ' has-error' : '' }}">
            <div class="col-sm-10">
                {!! Form::label('user_id', 'Tramitante',['class' => 'control-label']) !!}

                {!! Form::select('user_id', $users, null, ['class' => 'form-control basic-single','placeholder' => 'Seleccione tramitante' ]) !!}

                @if ($errors->has('user_id'))
                <span class="help-block">
                    <strong>{{ $errors->first('user_id') }}</strong>
                </span>
                @endif
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-6">
        <div class="form-group {{ $errors->has('service_id') ? ' has-error' : '' }}">
            <div class="col-sm-10">
                {!! Form::label('service_id', 'Tipo de servicio',['class' => 'control-label']) !!}

                {!! Form::select('service_id', $services, null, ['class' => 'form-control basic-single','placeholder' => 'Seleccione servicio' ]) !!}

                @if ($errors->has('service_id'))
                <span class="help-block">
                    <strong>{{ $errors->first('service_id') }}</strong>
                </span>
                @endif
            </div>
        </div>

    </div>

    <div class="col-sm-6">
        <div class="form-group {{ $errors->has('promoter_id') ? ' has-error' : '' }}">
            <div class="col-sm-10">
                {!! Form::label('promoter_id', 'Gestor',['class' => 'control-label']) !!}

                {!! Form::select('promoter_id', $users, null, ['class' => 'form-control basic-single','placeholder' => 'Seleccione gestor' ]) !!}

                @if ($errors->has('promoter_id'))
                <span class="help-block">
                    <strong>{{ $errors->first('promoter_id') }}</strong>
                </span>
                @endif
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-6">
        <div class="form-group {{ $errors->has('status') ? ' has-error' : '' }}">
            <div class="col-sm-10">
                {!! Form::label('status', 'Estado',['class' => 'control-label']) !!}

                {!! Form::select('status', $status, null, ['class' => 'form-control basic-single','placeholder' => 'Seleccione estado' ]) !!}

                @if ($errors->has('status'))
                <span class="help-block">
                    <strong>{{ $errors->first('status') }}</strong>
                </span>
                @endif
            </div>
        </div>
        
        <div class="form-group">
            <div class="col-sm-10">
                <div class="checkbox checkbox-switchery">
                    {{--*/ $checked = ''; /*--}}
                    {{--*/ $has_clg = false; /*--}}
                    @if(isset($document))
                        @if($document->clg_archive || $document->clg_register)
                            {{--*/ $checked = 'checked'; /*--}}
                            {{--*/ $has_clg = true; /*--}}
                        @endif
                    @endif
                    <label>
                        <input type="checkbox" class="switchery clg-box" {{$checked}}>
                        CLG
                    </label>
                </div>

                <div class="row clg-fields">
                    <div class="col-sm-6">
                        <div class="form-group {{ $errors->has('clg_archive') ? ' has-error' : '' }}">
                            <div class="col-sm-10">
                                {!! Form::label('clg_archive', 'Tomo CLG',['class' => 'control-label']) !!}

                                {!! Form::text('clg_archive', null, ['class' => 'form-control basic-single','placeholder' => 'Tomo CLG' ]) !!}

                                @if ($errors->has('service_id'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('clg_archive') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                    </div>

                    <div class="col-sm-6">
                        <div class="form-group {{ $errors->has('clg_register') ? ' has-error' : '' }}">
                            <div class="col-sm-10">
                                {!! Form::label('clg_register', 'Registro CLG',['class' => 'control-label']) !!}

                                {!! Form::text('clg_register', null, ['class' => 'form-control basic-single','placeholder' => 'Registro CLG' ]) !!}

                                @if ($errors->has('clg_register'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('clg_register') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="col-sm-6">
        <div class="form-group">
            <div class="col-sm-10">
                {!! Form::label('observations', 'Observaciones',['class' => 'control-label']) !!}

                {!! Form::textarea('observations', null, ['class' => 'form-control','placeholder' => 'Observaciones', 'style' => 'resize:none' ]) !!}

                
            </div>
        </div>
    </div>
</div>



<div class="form-group">
    <div class="col-sm-10">
        {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
        <a href="{!! route('documentos.index') !!}" class="btn btn-default">Cancel</a>
    </div>
</div>

@section('app-js')
<script type="text/javascript">
$(function(){
    $("select.basic-single").select2();

    $('.datepicker').datepicker({
        dateFormat: "yy-mm-dd"
    });

    var hasClg = "{{$has_clg}}";
    var clgCheckbox = document.querySelector('.switchery');
    var changeField = $('.clg-fields');
    var switchery = new Switchery(clgCheckbox);

    if(hasClg){
        $(changeField).addClass("active-clg");
    }

    clgCheckbox.onchange = function() {
        if(clgCheckbox.checked){
            $(changeField).addClass("active-clg");
        } else {
            $(changeField).removeClass("active-clg");
        }
    };

});
</script>
@endsection