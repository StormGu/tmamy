<div class="ad-box margin-top-10">
    @if (!\Auth::user()->hasRole('Business User') && (isset($hot) && $hot == 1))
        <h1>@lang('advertisement.coupon')</h1>
        <hr>
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="text-danger">
                @lang('advertisement.your_membership_doesnt_allow_you_to_add_hot_deal')
            </div>
            <div class="form-group @if ($errors->has('coupon')) has-error @endif">
                {!! Form::text('coupon', old('coupon'), ['placeholder' => __('advertisement.coupon'), 'class' => 'form-control margin-top-10']) !!}
                @if ($errors->has('coupon'))
                    <span class="text-danger">{{ $errors->first('coupon') }}</span>
                @endif
            </div>
            <div id="coupon_result"></div>

        </div>
        <div class="col-md-2"></div>
        <div class="clearfix"></div>
    @endif

    <h1>@lang('advertisement.billing')</h1>
    <hr>
    <div class="col-md-2"></div>
    <div class="col-md-8">


        <table class="table table-responsive">
            <thead>
            <tr>
                <th></th>
                <th style="width:30%">@lang('advertisement.points')</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>@lang('advertisement.add_advertisement')</td>
                <td>{{ config('settings.normal_adv') }}</td>
            </tr>

            @if ((isset($hot) && $hot == 1) )
                <tr>
                    <td>@lang('advertisement.hotselling')</td>
                    <td>{{ config('settings.hot_adv') }}</td>
                </tr>
            @endif
            </tbody>
        </table>
        <h3>@lang('advertisement.balance')</h3>
        <table class="table table-responsive">
            <thead>
            <tr>
                <th>@lang('advertisement.current_balance')</th>
                <th style="width:30%">{{ $current_points }}</th>
            </tr>
            <tr>
                <th>@lang('advertisement.new_balance')</th>
                <th>
                    <span class="@if($after_points < 0) text-danger @endif"> {{ $after_points }}</span>
                </th>
            </tr>
            </thead>
        </table>
        {!! Form::hidden('hot', $hot) !!}
        {!! Form::hidden('after_points', $after_points) !!}

        <div class="clearfix"></div>

        @if ($errors->has('after_points'))
            <span class="text-danger">{!! $errors->first('after_points') !!}</span>
        @endif

    </div>
    <div class="col-md-2"></div>
    <div class="clearfix"></div>
</div>