@if(isset($features) && $features->count())
    <div class="ad-box margin-top-10">
        <h1>@lang('advertisement.features')</h1>
        <hr>
        <div class="col-md-2"></div>
        <div class="col-md-8">
            @foreach($features as $feature)
                <div class="form-group">
                    <h4>{{ $feature->name }}</h4>
                    @foreach(\App\Models\Feature::whereParentId($feature->id)->get() as $child)
                        <div class="col-md-6">{!! Form::checkbox('features[]', $child->id) !!} {{ $child->name }}</div>
                        @if($loop->iteration % 2 == 0)
                            <div class="clearfix"></div>
                        @endif
                    @endforeach
                </div>
            @endforeach
        </div>
        <div class="col-md-2"></div>
        <div class="clearfix"></div>
    </div>
@endif
