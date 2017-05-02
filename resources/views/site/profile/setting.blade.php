@extends('site.layout.master')

@section('content')
    <!--Slider Area Start-->
    <div class="slider-area">

        <div style="    position: relative;
    width: 100%;
    height: auto;
    overflow: hidden;">
            <img src="{{ asset('site/img/ee.jpg') }}" alt="" title="#slider-direction-2" style="    position: relative;
    width: 100%;
    height: auto;
    overflow: hidden;"/>
        </div>
        <!-- direction 1 -->

    </div>
    <!--End of Slider Area-->
    <div class="profile-data">
        <div class="container">

            <div class="image" data-user="avatar" data-type="B">
                <img id="imgAvatar" src="http://www.daleelii.com/Files/Store/12a3c934-f33b-4f13-97ef-3681e0d26f4f.Jpeg">
                <div class="editable-image">
                    <div class="hover-button">
                        <i class="icon icon-camera"></i>
                        <a href="javascript:;" data-modal="changeAvatar">
                            Change Image</a>
                        <a data-do="delete">
                            Remove Image</a>
                    </div>
                </div>
            </div>


            <div class="details">
                <h3>KarmelBuilding </h3>
                <p class="">الكرمل لجميع العقارات في فلسطين</p>


            </div>
            <ul class="st-social">
                <li><em>6</em><span>ADS</span></li>
                <li><em>128</em><span>Views</span></li>
                <li>
                    <em class="MyCounter">11</em>
                    <span>
                                        Likes</span>
                </li>
            </ul>
            <ul class="socail-share">
                <li>
                    <a href="javascript:;" target="_blank">
                        <i class="fa fa-facebook" aria-hidden="true"></i>
                    </a>
                </li>
                <li>
                    <a href="javascript:;" target="_blank">
                        <i class="fa fa-twitter" aria-hidden="true"></i>
                    </a>
                </li>
                <li>
                    <a href="javascript:;" target="_blank">
                        <i class="fa fa-google" aria-hidden="true"></i>
                    </a>
                </li>
                <li>
                    <a href="javascript:;" target="_blank">
                        <i class="fa fa-linkedin" aria-hidden="true"></i>
                    </a>
                </li>
                <li>
                    <a href="javascript:;" target="_blank">
                        <i class="fa fa-pinterest-p" aria-hidden="true"></i>
                    </a>
                </li>
            </ul>
            <div class="info">
                <p>
                    <i class="fa fa-calendar" aria-hidden="true"></i>
                    29 Aug 2015
                </p>
                <p>
                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                    Palestine Gaza
                </p>
                <p>
                    <i class="fa fa-mobile" aria-hidden="true"></i>
                    0599111111
                </p>
                <p>
                    <i class="fa fa-phone" aria-hidden="true"></i>
                    2887799
                </p>
            </div>
            <div class="clearfix"></div>

            <div class="row">

                <div class="col-md-9">
                    @if(Session::has('message'))
                        @php $message = Session::get('message') @endphp
                        <div class="alert alert-{{ $message['type'] }}">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                            {{ $message['message'] }}
                        </div>
                    @endif

                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="p-details-tab">
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active"><a href="#description"
                                                                          aria-controls="description" role="tab"
                                                                          data-toggle="tab">Account</a></li>
                                <li role="presentation"><a href="#reviews" aria-controls="reviews" role="tab"
                                                           data-toggle="tab">Passowrd</a></li>
                                <li role="presentation"><a href="#tags" aria-controls="tags" role="tab"
                                                           data-toggle="tab">Social</a></li>
                            </ul>
                        </div>
                        <div class="clearfix"></div>
                        <div class="tab-content review">
                            <div role="tabpanel" class="tab-pane active" id="description">
                                {!! Form::model($object, ['url' => 'setting', 'method' => 'post']) !!}
                                <div class="form-top">
                                    <div class="form-group col-md-12">
                                        {!! Form::label('language_id', __('profile.language')) !!}
                                        {!! Form::select('language_id', \App\Models\Language::all()->pluck('name', 'id'), null, ['class' => 'form-control']) !!}
                                    </div>
                                    <div class="form-group col-md-12">
                                        {!! Form::label('country_id', __('profile.country')) !!}
                                        {!! Form::select('country_id', \App\Models\Country::all()->pluck('name', 'id'), null, ['class' => 'form-control']) !!}
                                    </div>
                                    <div class="form-group col-md-12">
                                        {!! Form::label('city_id', __('profile.city')) !!}
                                        {!! Form::select('city_id', \App\Models\Country::all()->pluck('name', 'id'), null, ['class' => 'form-control']) !!}
                                    </div>
                                    <div class="form-group col-md-12">
                                        {!! Form::label('address', __('profile.address')) !!}
                                        {!! Form::text('address', null, ['class' => 'form-control']) !!}
                                    </div>
                                    <div class="form-group col-md-12">
                                        {!! Form::label('bio', __('profile.bio')) !!}
                                        {!! Form::textarea('bio', null, ['class' => 'form-control']) !!}
                                    </div>
                                    <div class="form-group col-md-12">
                                        {!! Form::label('name', __('profile.name')) !!}
                                        {!! Form::text('name', null, ['class' => 'form-control']) !!}
                                    </div>
                                    <div class="form-group col-md-12">
                                        {!! Form::label('email', __('profile.email')) !!}
                                        {!! Form::text('email', null, ['class' => 'form-control', 'readonly' => 'readonly']) !!}
                                    </div>
                                    <div class="form-group col-md-12">
                                        {!! Form::label('dob', __('profile.dob')) !!}
                                        {!! Form::text('dob', null, ['class' => 'form-control']) !!}
                                    </div>
                                    <div class="form-group col-md-12">
                                        {!! Form::label('mobile_no', __('profile.mobile_no')) !!}
                                        {!! Form::text('mobile_no', null, ['class' => 'form-control']) !!}
                                    </div>
                                    <div class="form-group col-md-12">
                                        {!! Form::label('gender_id', __('profile.gender_id')) !!}
                                        {!! Form::select('gender_id', \App\Models\Constant::where('key', '=', 'gender')->get()->pluck('value'), null, ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                                <div class="submit-form form-group col-sm-12 submit-review">
                                    <p><sup>*</sup> Required Fields</p>
                                    <input value="Submit" class="add-tag-btn" type="submit">
                                </div>
                                {!! Form::close() !!}
                            </div>
                            <div role="tabpanel" class="tab-pane" id="reviews">
                                {!! Form::model($object, ['url' => 'setting', 'method' => 'post']) !!}
                                <div class="form-top">
                                    <div class="form-group col-md-12">
                                        {!! Form::label('password', __('profile.new_password')) !!}
                                        {!! Form::password('password', ['class' => 'form-control']) !!}
                                        @if($errors->first("password"))
                                            {!! $errors->first("password",'<span class="text-danger">:message</span>') !!}
                                        @endif
                                    </div>
                                    <div class="form-group col-md-12">
                                        {!! Form::label('password_confirmation', __('profile.password_confirmation')) !!}
                                        {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
                                        @if($errors->first("password_confirmation"))
                                            {!! $errors->first("password_confirmation",'<span class="text-danger">:message</span>') !!}
                                        @endif
                                    </div>
                                </div>
                                <div class="submit-form form-group col-sm-12 submit-review">
                                    <p><sup>*</sup> Required Fields</p>
                                    <input value="Submit" class="add-tag-btn" type="submit">
                                </div>
                                {!! Form::close() !!}
                            </div>
                            <div role="tabpanel" class="tab-pane" id="tags">
                                {!! Form::model($object, ['url' => 'setting', 'method' => 'post']) !!}
                                <div class="form-top">
                                    <div class="form-group col-md-12">
                                        {!! Form::label('facebook', __('profile.facebook')) !!}
                                        {!! Form::text('facebook', null, ['class' => 'form-control']) !!}
                                        @if($errors->first("facebook"))
                                            {!! $errors->first("facebook",'<span class="text-danger">:message</span>') !!}
                                        @endif
                                    </div>
                                    <div class="form-group col-md-12">
                                        {!! Form::label('twitter', __('profile.twitter')) !!}
                                        {!! Form::text('twitter', null, ['class' => 'form-control']) !!}
                                        @if($errors->first("twitter"))
                                            {!! $errors->first("twitter",'<span class="text-danger">:message</span>') !!}
                                        @endif
                                    </div>
                                    <div class="form-group col-md-12">
                                        {!! Form::label('googleplus', __('profile.googleplus')) !!}
                                        {!! Form::text('googleplus', null, ['class' => 'form-control']) !!}
                                        @if($errors->first("googleplus"))
                                            {!! $errors->first("googleplus",'<span class="text-danger">:message</span>') !!}
                                        @endif
                                    </div>
                                    <div class="form-group col-md-12">
                                        {!! Form::label('linkedin', __('profile.linkedin')) !!}
                                        {!! Form::text('linkedin', null, ['class' => 'form-control']) !!}
                                        @if($errors->first("linkedin"))
                                            {!! $errors->first("linkedin",'<span class="text-danger">:message</span>') !!}
                                        @endif
                                    </div>
                                    <div class="form-group col-md-12">
                                        {!! Form::label('pinterest', __('profile.pinterest')) !!}
                                        {!! Form::text('pinterest', null, ['class' => 'form-control']) !!}
                                        @if($errors->first("pinterest"))
                                            {!! $errors->first("pinterest",'<span class="text-danger">:message</span>') !!}
                                        @endif
                                    </div>
                                </div>
                                <div class="submit-form form-group col-sm-12 submit-review">
                                    <p><sup>*</sup> Required Fields</p>
                                    <input value="Submit" class="add-tag-btn" type="submit">
                                </div>
                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-3">

                </div>
                <div style="clear: both"></div>

            </div>
            <div style="clear: both"></div>
        </div>
        <div style="clear: both"></div>

    </div>
    <div style="clear: both"></div>


@endsection