<div class="col-md-12 col-xs-12">

    {!! Form::open(['route' => 'login']) !!}
    {{ csrf_field() }}
    <div class="form-fields">
        <h2>@lang('titles.login')</h2>
        <p>
            <label>@lang('auth.email') <span class="required">*</span></label>
            <input id="email" type="email" class="form-control" name="email"
                   value="{{ old('email') }}" required>
        </p>
        <p>
            {{ Form::label('password', __('auth.password')) }}
            {{ Form::password('password', null, ['class' => 'form-control', 'required']) }}
        </p>
    </div>
    <div class="form-action">
        <input type="submit" value="@lang('auth.login')">

        <label><input type="checkbox"
                      name="remember" {{ old('remember') ? 'checked' : '' }} /> @lang('auth.rememberMe')
        </label>
        @include('partials.socials-icons')
    </div>
    {!! Form::close() !!}
</div>