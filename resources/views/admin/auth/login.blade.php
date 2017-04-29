@extends('backpack::layout')
@section('content')
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="box box-default">
            <div class="box-header with-border">
                <div class="box-title">{{ trans('backpack::base.login') }}</div>
            </div>
            <div class="box-body">
                {!! Form::open(['url' => url('admin/login'), 'role' => 'form', 'class' => 'form-horizontal']) !!}
                {!! csrf_field() !!}
                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    {!! Form::label('email', __('backpack::base.email_address'), ['class' => 'col-md-4 control-label']) !!}
                    
                    <div class="col-md-6">
                        {!! Form::text('email', old('email'), ['class' => 'form-control form-control-solid placeholder-no-fix', 'required', 'autofocus', 'placeholder' =>  __('auth.email')]) !!}
                        @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>
                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    {!! Form::label('password', __('backpack::base.password'), ['class' => 'col-md-4 control-label']) !!}
                    <div class="col-md-6">
                        {!! Form::password('password', ['class' => 'form-control', 'required']) !!}
                        @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-6 col-md-offset-4">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="remember"> {{ trans('backpack::base.remember_me') }}
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-6 col-md-offset-4">
                        <button type="submit" class="btn btn-primary">
                        {{ trans('backpack::base.login') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
@endsection