@extends('adforest.layout.master')

@section('breadcrumbs')
    @include('adforest.partials.breadcrumbs', ['breadcrumbs' => $breadcrumbs])
@endsection

@section('content')
    <div class="container">

        <section class="section-padding pattern-bgs gray ">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <!-- end post-pStoreding -->
                        <div class="post-Store-form postdetails">
                            <div class="heStoreing-panel">
                                <h3 class="main-title text-left">
                                    @lang('profile.Post_Your_Store')
                                </h3>
                            </div>
                            @if(isset($object))
                                {!! Form::model($object, ['url' => 'store/' . $object->id, 'method' => 'post', 'files' => true, 'class'=> 'submit-form']) !!}
                            @else
                                {!! Form::open(['url' => url('store'), 'files' =>true, 'class'=> 'submit-form']) !!}
                            @endif

                            <div class="row">
                                <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">
                                    <label class="control-label">@lang('profile.Category')
                                        <small>@lang('profile.Select_suitable_category_for_your_Store')</small>
                                    </label>
                                    {!! Form::select('category_id', $categories , old('category_id'), ['class'=> 'form-control']) !!}
                                    @if ($errors->has('category_id'))
                                        <span class="text-danger">{{ $errors->first('category_id') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">
                                    <label class="control-label">@lang('profile.companyName')
                                        <small>@lang('profile.Enter_a_company_name_for_your_Store')</small>
                                    </label>
                                    {!! Form::text('company_name', old('company_name'), ['class'=> 'form-control']) !!}
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">
                                    <label class="control-label">@lang('profile.Store_Title')
                                        <small>@lang('profile.Enter_a_short_title_for_your_Store')</small>
                                    </label>
                                    {!! Form::text('title', old('title'), ['class'=> 'form-control']) !!}
                                    @if ($errors->has('title'))
                                        <span class="text-danger">{{ $errors->first('title') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-lg-12 col-xs-12  col-sm-12">
                                    <label class="control-label">@lang('profile.StoreDescription.')
                                        <small>@lang('profile.Enter_long_description_for_your_project.')</small>
                                    </label>
                                    {!! Form::textarea('description', old('description'), ['rows' => 3,'class'=>'form-control']) !!}
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
                                    <label class="control-label">@lang('profile.Country')
                                        <small>@lang('profile.Select_Country_for_your_Store')</small>
                                    </label>
                                    {!! Form::select('country_id', $countries , old('country_id'), ['class'=> 'form-control']) !!}
                                </div>
                                {{--<div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">--}}
                                {{--<label class="control-label">@lang('profile.Store Type')--}}
                                {{--<small>@lang('profile.Select_suitable_category_for_your_Store')</small>--}}
                                {{--</label>--}}
                                {{--<select name="store_account_type_id" class="category form-control">--}}
                                {{--<option label=@lang('profile.SelectOption')></option>--}}
                                {{--<option value="1">Financed</option>--}}
                                {{--<option value="1">Free</option>--}}
                                {{--</select>--}}
                                {{--</div>--}}

                            </div>
                            <div class="row">
                                <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">
                                    <label class="control-label">@lang('profile.Photos_for_your_Stores')
                                        <small>@lang('profile.Please_Stored_images_of_your_Store.')(350x450)
                                        </small>
                                    </label>
                                    {!! Form::file('image') !!}
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
                                    <label class="control-label">@lang('profile.Address')
                                        <small>@lang('profile.addressr_for_conformation')</small>
                                    </label>
                                    {!! Form::text('address', old('address'), ['class'=>'form-control']) !!}
                                </div>
                                <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
                                    <label class="control-label">@lang('profile.pob_Number')
                                        <small>@lang('profile.pob_number_for_conformation') </small>
                                    </label>
                                    {!! Form::text('pob', old('pob'), ['class'=>'form-control']) !!}
                                </div>
                                <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
                                    <label class="control-label">@lang('profile.MobileNumber.')
                                        <small>@lang('profile.number_for_conformation.')</small>
                                    </label>
                                    {!! Form::text('mobile_no', old('mobile_no'), ['class'=>'form-control']) !!}
                                </div>
                                <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
                                    <label class="control-label">@lang('profile.PhoneNumber')
                                        <small>@lang('profile.number_for_conformation')</small>
                                    </label>
                                    {!! Form::text('phone_no', old('phone_no'), ['class'=>'form-control']) !!}
                                </div>
                                <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
                                    <label class="control-label">@lang('profile.email')
                                        <small>@lang('profile.email_for_conformation')</small>
                                    </label>
                                    {!! Form::text('email', old('email'), ['class'=>'form-control']) !!}
                                </div>
                                <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
                                    <label class="control-label">@lang('profile.fax_Number')
                                        <small>@lang('profile.fax_number_for_conformation') </small>
                                    </label>
                                    {!! Form::text('fax', old('fax'), ['class'=>'form-control']) !!}
                                </div>

                                <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
                                    <label class="control-label">@lang('profile.url')
                                        <small>@lang('profile.email_for_conformation')</small>
                                    </label>
                                    {!! Form::text('url', old('url'), ['class'=>'form-control']) !!}
                                </div>
                            </div>

                            <button type="submit" class="btn btn-theme pull-right">
                                @lang('profile.Publish_My_Store')
                            </button>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection