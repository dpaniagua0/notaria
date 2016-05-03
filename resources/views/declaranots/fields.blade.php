<h6>Información del Declaranot</h6>
<fieldset>
    <div class="row">
        <div class="col-sm-6">
            <div class="form-group {{ $errors->has('file_number') ? ' has-error' : '' }}">
                <div class="col-sm-10">
                    {!! Form::label('file_number', 'Número de escritura',['class' => 'control-label']) !!}

                    {!! Form::text('file_number', null, ['class' => 'form-control', 'placeholder' => 'Número de escritura' ]) !!}

                    @if ($errors->has('file_number'))
                    <span class="help-block">
                        <strong>{{ $errors->first('file_number') }}</strong>
                    </span>
                    @endif
                </div>
            </div>

        </div>

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
    </div>

    <div class="row">
        <div class="col-sm-6">
            <div class="form-group {{ $errors->has('price') ? ' has-error' : '' }}">
                <div class="col-sm-10">
                    {!! Form::label('price', 'Valor de operación',['class' => 'control-label']) !!}

                    {!! Form::text('price', null, ['class' => 'form-control', 'placeholder' => 'Valor de operación' ]) !!}

                    @if ($errors->has('price'))
                    <span class="help-block">
                        <strong>{{ $errors->first('price') }}</strong>
                    </span>
                    @endif
                </div>
            </div>

        </div>

        <div class="col-sm-6">
            <div class="form-group {{ $errors->has('iva_quote') ? ' has-error' : '' }}">
                <div class="col-sm-10">
                    {!! Form::label('iva_quote', 'Iva causado',['class' => 'control-label']) !!}

                    {!! Form::text('iva_quote', null, ['class' => 'form-control', 'placeholder' => 'Iva causado' ]) !!}

                    @if ($errors->has('iva_quote'))
                    <span class="help-block">
                        <strong>{{ $errors->first('iva_quote') }}</strong>
                    </span>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-6">
            <div class="form-group {{ $errors->has('isr_quote') ? ' has-error' : '' }}">
                <div class="col-sm-10">
                    {!! Form::label('isr_quote', 'ISR causado',['class' => 'control-label']) !!}

                    {!! Form::text('isr_quote', null, ['class' => 'form-control', 'placeholder' => 'ISR causado' ]) !!}

                    @if ($errors->has('isr_quote'))
                    <span class="help-block">
                        <strong>{{ $errors->first('isr_quote') }}</strong>
                    </span>
                    @endif
                </div>
            </div>

        </div>

        <div class="col-sm-6">
            <div class="form-group {{ $errors->has('exception') ? ' has-error' : '' }}">
                <div class="col-sm-10">
                    {!! Form::label('exception', 'Tramite exento',['class' => 'control-label']) !!}

                    {!! Form::select('exception', array('1' => 'SI', '2' => 'NO'), null, ['class' => 'form-control basic-single','placeholder' => 'Tramite exento']) !!}

                    @if ($errors->has('iva_quote'))
                    <span class="help-block">
                        <strong>{{ $errors->first('exception') }}</strong>
                    </span>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-6">
            <div class="form-group {{ $errors->has('sign_date') ? ' has-error' : '' }}">
                <div class="col-sm-10">
                    {!! Form::label('sign_date', 'Fecha de firma',['class' => 'control-label']) !!}

                    {!! Form::text('sign_date', null, ['class' => 'form-control datepicker', 'placeholder' => 'Fecha de firma' ]) !!}

                    @if ($errors->has('sign_date'))
                    <span class="help-block">
                        <strong>{{ $errors->first('sign_date') }}</strong>
                    </span>
                    @endif
                </div>
            </div>

        </div>

        <div class="col-sm-6">
            <div class="form-group {{ $errors->has('concepto_id') ? ' has-error' : '' }}">
                <div class="col-sm-10">
                    {!! Form::label('concepto_id', 'I Acto',['class' => 'control-label']) !!}

                    {!! Form::select('concepto_id', $conceptos, null, ['class' => 'form-control basic-single','placeholder' => 'Seleccione concepto' ]) !!}

                    @if ($errors->has('concepto_id'))
                    <span class="help-block">
                        <strong>{{ $errors->first('concepto_id') }}</strong>
                    </span>
                    @endif
                </div>
            </div>
        </div>
    </div>
</fieldset>

<h6>Información Adquirientes y Transmitientes</h6>
<fieldset>

    <div class="row">

        <!-- Section one -->
        <div class="col-sm-6">
            <div class="form-group {{ $errors->has('street') ? ' has-error' : '' }}">
                <div class="col-sm-10">
                    {!! Form::label('street', 'Calle',['class' => 'control-label']) !!}

                    {!! Form::text('street', null, ['class' => 'form-control', 'placeholder' => 'Calle y Número' ]) !!}

                    @if ($errors->has('street'))
                    <span class="help-block">
                        <strong>{{ $errors->first('street') }}</strong>
                    </span>
                    @endif
                </div>
            </div>

            <div class="form-group {{ $errors->has('colony') ? ' has-error' : '' }}">
                <div class="col-sm-10">
                    {!! Form::label('colony', 'Colonia',['class' => 'control-label']) !!}

                    {!! Form::text('colony', null, ['class' => 'form-control', 'placeholder' => 'Colonia' ]) !!}

                    @if ($errors->has('colony'))
                        <span class="help-block">
                        <strong>{{ $errors->first('colony') }}</strong>
                    </span>
                    @endif
                </div>
            </div>

            <div class="form-group {{ $errors->has('state') ? ' has-error' : '' }}">
                <div class="col-sm-10">
                    {!! Form::label('state', 'Estado',['class' => 'control-label']) !!}

                    {!! Form::text('state', null, ['class' => 'form-control', 'placeholder' => 'Estado' ]) !!}

                    @if ($errors->has('state'))
                        <span class="help-block">
                        <strong>{{ $errors->first('state') }}</strong>
                    </span>
                    @endif
                </div>
            </div>

            <div class="form-group {{ $errors->has('zip_code') ? ' has-error' : '' }}">
                <div class="col-sm-10">
                    {!! Form::label('zip_code', 'Codígo postal',['class' => 'control-label']) !!}

                    {!! Form::text('zip_code', null, ['class' => 'form-control', 'placeholder' => 'Codígo postal' ]) !!}

                    @if ($errors->has('zip_code'))
                        <span class="help-block">
                        <strong>{{ $errors->first('zip_code') }}</strong>
                    </span>
                    @endif
                </div>
            </div>

            <div class="form-group {{ $errors->has('zip_code') ? ' has-error' : '' }}">
                <div class="col-sm-10">
                    {!! Form::label('zip_code', 'Codígo postal',['class' => 'control-label']) !!}

                    {!! Form::text('zip_code', null, ['class' => 'form-control', 'placeholder' => 'Codígo postal' ]) !!}

                    @if ($errors->has('zip_code'))
                        <span class="help-block">
                        <strong>{{ $errors->first('zip_code') }}</strong>
                    </span>
                    @endif
                </div>
            </div>

        </div>


        <!-- Section two -->

        <div class="col-sm-6">
            <div class="form-group {{ $errors->has('concepto_id') ? ' has-error' : '' }}">
                <div class="col-sm-10">
                    {!! Form::label('concepto_id', 'I Acto',['class' => 'control-label']) !!}

                    {!! Form::select('concepto_id', $conceptos, null, ['class' => 'form-control basic-single','placeholder' => 'Seleccione concepto' ]) !!}

                    @if ($errors->has('concepto_id'))
                    <span class="help-block">
                        <strong>{{ $errors->first('concepto_id') }}</strong>
                    </span>
                    @endif
                </div>
            </div>
        </div>
    </div>
 <!--   <div class="form-group">
        <div class="col-sm-10">
            {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
            <a href="{!! route('documentos.index') !!}" class="btn btn-default">Cancel</a>
        </div>
    </div>-->
</fieldset>





@section('app-js')
<script type="text/javascript">
$(function(){
    $("select.basic-single").select2();

    $('.datepicker').datepicker({
        dateFormat: "yy-mm-dd"
    });

   $('.steps-basic').steps({
        headerTag: "h6",
        bodyTag: "fieldset",
        transitionEffect: "fade",
        titleTemplate: '<span class="number">#index#</span> #title#',
        labels: {
            finish: "Guardar",
            next: "Siguiente",
            previous: "Atrás"
        },
        onFinished: function (event, currentIndex) {
            alert("Form submitted.");
        }

    });
});
</script>
@endsection