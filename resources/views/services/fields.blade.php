<div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
    {!! Form::label('name', 'Alias', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-10">

        {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nombre' ]) !!}

        @if ($errors->has('name'))
        <span class="help-block">
            <strong>{{ $errors->first('name') }}</strong>
        </span>
        @endif
    </div>
</div>
<div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
    {!! Form::label('display_name', 'Nombre', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-10">

        {!! Form::text('display_name', null, ['class' => 'form-control', 'placeholder' => 'Nombre' ]) !!}

        @if ($errors->has('display_name'))
        <span class="help-block">
            <strong>{{ $errors->first('display_name') }}</strong>
        </span>
        @endif
    </div>
</div>


<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
        {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
        <a href="{!! route('conceptos.index') !!}" class="btn btn-default">Cancel</a>
    </div>
</div>