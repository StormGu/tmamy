<div class="ad-box margin-top-10">
    <h1>@lang('advertisement.image')</h1>
    <hr>
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="form-group {{ $errors->has('image') ? ' has-error' : '' }}">
                <img id="img">
                <div class="input-group">
                    <span class="input-group-btn">
                    <span class="btn btn-default btn-file">
                    @lang('profile.Browse')
                        <input name="image" type="file" value="{{ old('image') }}" accept="image/*" required/>
                    </span>
                    </span>
                    <input type="text" name="image_old" value="{{ old('image') }}" class="form-control" readonly>
                </div>
                @if ($errors->has('image'))
                    <span class="text-danger">{{ $errors->first('image') }}</span>
                @endif
            </div>
        </div>

    </div>

</div>
