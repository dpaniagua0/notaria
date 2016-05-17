
{!! Form::hidden('user_id', Auth::user()->id) !!}

<!-- Private element uses type 1 -->
{!! Form::hidden('type', '2') !!}

<h6>Información del Declaranot</h6>

<fieldset class="active">
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

                   {!! Form::hidden('upload_date', null, ['class' => 'form-control', 'placeholder' => 'Fecha de captura' ]) !!}
                    @if(isset($declaranot))
                        {{--*/ $upload_date = date('d/m/Y',strtotime($declaranot->upload_date)); /*--}}
                    @else
                        {{--*/ $upload_date = "";/*--}}
                    @endif

                    {!! Form::text('upload_date_fk', $upload_date, ['class' => 'form-control upload_date_fk', 'placeholder' => 'Fecha de captura' ]) !!}

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

                    {!! Form::hidden('sign_date', null, ['class' => 'form-control', 'placeholder' => 'Fecha de firma' ]) !!}

                    @if(isset($declaranot))
                        {{--*/ $sign_date = date('d/m/Y',strtotime($declaranot->sign_date)); /*--}}
                    @else
                        {{--*/ $sign_date = "";/*--}}
                    @endif
                    {!! Form::text('sign_date_fk', $sign_date, ['class' => 'form-control sign_date_fk', 'placeholder' => 'Fecha de firma' ]) !!}

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

    <div class="row">
        <div class="col-sm-6">
            <div class="form-group {{ $errors->has('description') ? ' has-error' : '' }}">
                <div class="col-sm-10">
                    {!! Form::label('description', 'Description',['class' => 'control-label']) !!}

                    {!! Form::textarea('description', null, ['class' => 'form-control', 'placeholder' => 'Description', 'style' => 'resize:none' ]) !!}

                    @if ($errors->has('description'))
                        <span class="help-block">
                        <strong>{{ $errors->first('description') }}</strong>
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

            <!-- Personal info 1 -->
            <div class="form-group {{ $errors->has('enajenantes[0][full_name]') ? ' has-error' : '' }}">
                <div class="col-sm-10">

                    <legend>Información Transmitiente</legend>
                    {!! Form::label('enajenantes[0][full_name]', 'Nombre',['class' => 'control-label']) !!}

                    {!! Form::text('enajenantes[0][full_name]', null, ['class' => 'form-control', 'placeholder' => 'Nombre' ]) !!}

                    @if ($errors->has('enajenantes[0][full_name]'))
                        <span class="help-block">
                        <strong>{{ $errors->first('enajenantes[0][full_name]') }}</strong>
                    </span>
                    @endif
                </div>
            </div>
            <div class="form-group {{ $errors->has('enajenantes[0][rfc]') ? ' has-error' : '' }}">
                <div class="col-sm-10">

                    {!! Form::label('enajenantes[0][rfc]', 'RFC',['class' => 'control-label']) !!}

                    {!! Form::text('enajenantes[0][rfc]', null, ['class' => 'form-control', 'placeholder' => 'RFC' ]) !!}

                    @if ($errors->has('enajenantes[0][rfc]'))
                        <span class="help-block">
                        <strong>{{ $errors->first('enajenantes[0][rfc]') }}</strong>
                    </span>
                    @endif
                </div>
            </div>
            <div class="form-group {{ $errors->has('enajenantes[0][curp]') ? ' has-error' : '' }}">
                <div class="col-sm-10">

                    {!! Form::label('enajenantes[0][curp]', 'Curp',['class' => 'control-label']) !!}

                    {!! Form::text('enajenantes[0][curp]', null, ['class' => 'form-control', 'placeholder' => 'Curp' ]) !!}

                    @if ($errors->has('enajenantes[0][curp]'))
                        <span class="help-block">
                        <strong>{{ $errors->first('enajenantes[0][curp]') }}</strong>
                    </span>
                    @endif
                </div>
            </div>


            <!-- end  -->


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

            <div class="form-group {{ $errors->has('district') ? ' has-error' : '' }}">
                <div class="col-sm-10">
                    {!! Form::label('district', 'Municipio / Localidad',['class' => 'control-label']) !!}

                    {!! Form::text('district', null, ['class' => 'form-control', 'placeholder' => 'Municipio / Localidad' ]) !!}

                    @if ($errors->has('district'))
                        <span class="help-block">
                        <strong>{{ $errors->first('district') }}</strong>
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
        </div>


        <!-- Section two -->

        <div class="col-sm-6">


            <!-- Personal info 2 -->
            <div class="form-group {{ $errors->has('adquirientes[0][full_name]') ? ' has-error' : '' }}">
                <div class="col-sm-10">

                    <legend>Información Aquiriente</legend>
                    {!! Form::label('adquirientes[0][full_name]', 'Nombre',['class' => 'control-label']) !!}

                    {!! Form::text('adquirientes[0][full_name]', null, ['class' => 'form-control', 'placeholder' => 'Nombre' ]) !!}

                    @if ($errors->has('adquirientes[0][full_name]'))
                        <span class="help-block">
                        <strong>{{ $errors->first('adquirientes[0][full_name]') }}</strong>
                    </span>
                    @endif
                </div>
            </div>
            <div class="form-group {{ $errors->has('adquirientes[0][rfc]') ? ' has-error' : '' }}">
                <div class="col-sm-10">

                    {!! Form::label('adquirientes[0][rfc]', 'RFC',['class' => 'control-label']) !!}

                    {!! Form::text('adquirientes[0][rfc]', null, ['class' => 'form-control', 'placeholder' => 'RFC' ]) !!}

                    @if ($errors->has('adquirientes[0][rfc]'))
                        <span class="help-block">
                        <strong>{{ $errors->first('adquirientes[0][rfc]') }}</strong>
                    </span>
                    @endif
                </div>
            </div>
            <div class="form-group {{ $errors->has('adquirientes[0][curp]') ? ' has-error' : '' }}">
                <div class="col-sm-10">

                    {!! Form::label('adquirientes[0][curp]', 'Curp',['class' => 'control-label']) !!}

                    {!! Form::text('adquirientes[0][curp]', null, ['class' => 'form-control', 'placeholder' => 'Curp' ]) !!}

                    @if ($errors->has('adquirientes[0][curp]'))
                        <span class="help-block">
                        <strong>{{ $errors->first('adquirientes[0][curp]') }}</strong>
                    </span>
                    @endif
                </div>
            </div>


            <!-- end  -->


            <div class="form-group {{ $errors->has('street2') ? ' has-error' : '' }}">
                <div class="col-sm-10">

                    {!! Form::label('street2', 'Calle',['class' => 'control-label']) !!}

                    {!! Form::text('street2', null, ['class' => 'form-control', 'placeholder' => 'Calle y Número' ]) !!}

                    @if ($errors->has('street2'))
                        <span class="help-block">
                        <strong>{{ $errors->first('street2') }}</strong>
                    </span>
                    @endif
                </div>
            </div>

            <div class="form-group {{ $errors->has('colony2') ? ' has-error' : '' }}">
                <div class="col-sm-10">
                    {!! Form::label('colony2', 'Colonia',['class' => 'control-label']) !!}

                    {!! Form::text('colony2', null, ['class' => 'form-control', 'placeholder' => 'Colonia' ]) !!}

                    @if ($errors->has('colony2'))
                        <span class="help-block">
                        <strong>{{ $errors->first('colony2') }}</strong>
                    </span>
                    @endif
                </div>
            </div>

            <div class="form-group {{ $errors->has('district2') ? ' has-error' : '' }}">
                <div class="col-sm-10">
                    {!! Form::label('district2', 'Municipio / Localidad',['class' => 'control-label']) !!}

                    {!! Form::text('district2', null, ['class' => 'form-control', 'placeholder' => 'Municipio / Localidad' ]) !!}

                    @if ($errors->has('district2'))
                        <span class="help-block">
                        <strong>{{ $errors->first('district2') }}</strong>
                    </span>
                    @endif
                </div>
            </div>

            <div class="form-group {{ $errors->has('state2') ? ' has-error' : '' }}">
                <div class="col-sm-10">
                    {!! Form::label('state2', 'Estado',['class' => 'control-label']) !!}

                    {!! Form::text('state2', null, ['class' => 'form-control', 'placeholder' => 'Estado' ]) !!}

                    @if ($errors->has('state2'))
                        <span class="help-block">
                        <strong>{{ $errors->first('state2') }}</strong>
                    </span>
                    @endif
                </div>
            </div>

            <div class="form-group {{ $errors->has('zip_code2') ? ' has-error' : '' }}">
                <div class="col-sm-10">
                    {!! Form::label('zip_code2', 'Codígo postal',['class' => 'control-label']) !!}

                    {!! Form::text('zip_code2', null, ['class' => 'form-control', 'placeholder' => 'Codígo postal' ]) !!}

                    @if ($errors->has('zip_code2'))
                        <span class="help-block">
                        <strong>{{ $errors->first('zip_code2') }}</strong>
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
       saveState: true,
       onFinished: function (event, currentIndex)
       {
           var form = $(this);
           form.submit();
       }
    });

    $(".upload_date_fk").datepicker({
        format: "dd-mm-yyyy",
        autoclose: true,
        todayHighlight: true,
        orientation: "bottom",
        todayBtn: "linked",
        todayHighlight: true,
        altField: "#upload_date",
        altFormat: "yy-mm-dd"
    });
    $(".sign_date_fk").datepicker({
        format: "dd-mm-yyyy",
        autoclose: true,
        todayHighlight: true,
        orientation: "bottom",
        todayBtn: "linked",
        todayHighlight: true,
        altField: "#sign_date",
        altFormat: "yy-mm-dd"
    })

    $("select.basic-single").select2();


});
</script>
@endsection