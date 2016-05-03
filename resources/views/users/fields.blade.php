<div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
    {!! Form::label('name', 'Nombre', ['class' => 'col-sm-2 control-label']) !!}
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
    {!! Form::label('email', 'Email', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-10">

        {!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Email' ]) !!}

        @if ($errors->has('email'))
        <span class="help-block">
            <strong>{{ $errors->first('email') }}</strong>
        </span>
        @endif
    </div>
</div>
<div class="form-group {{ $errors->has('role_list') ? ' has-error' : '' }}">
    {!! Form::label('role_list', 'Roles', ['class' => 'col-sm-2 control-label']) !!}
   <div class="col-sm-10">
        @if(!isset($user))
            {!! Form::select('role_list[]', $roles, null, ['class' =>'form-control basic-multiple' ,'multiple']); !!}
        @else
            {!! Form::select('role_list[]', $roles, $user->roles_list, ['class' =>'form-control basic-multiple','multiple']); !!}
        @endif
        @if ($errors->has('role_list'))
        <span class="help-block">
            <strong>{{ $errors->first('role_list') }}</strong>
        </span>
        @endif
    </div>
</div>

<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
        {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
        <a href="{!! route('users.index') !!}" class="btn btn-default">Cancel</a>
    </div>
</div>
@section('app-js')
<script type="text/javascript">
    $(function(){
        $("select.basic-multiple").select2();
    });
</script>
@endsection