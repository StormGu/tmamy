@extends('adforest.layout.master')


@section('breadcrumbs')
    @include('adforest.partials.breadcrumbs', ['breadcrumbs' => $breadcrumbs])
@endsection

@section('content')

    <section class="section-padding gray">
        <!-- Main Container -->
        <div class="container">
            <!-- Row -->
            <div class="row">
                <!-- Middle Content Area -->

                <div class="col-md-12 col-xs-12 col-sm-12">
                    <section class="search-result-item">
                        <a class="image-link" href="#"><img class="image" alt="" src="@if ($object->profile->avatar_status == 1) {{ $object->profile->avatar }} @else {{ Gravatar::get($object->email) }} @endif" alt="{{ $object->name }}"> </a>
                        <div class="search-result-item-body">
                            <div class="row">
                                <div class="col-md-5 col-sm-12 col-xs-12">

                                    <h4 class="search-result-item-heading"><a href="#">{{ $object->name }}</a></h4>
                                    <p class="info">{{ $object->email }}</p>
                                    <p class="description">{{ $object->profile->bio }}</p>

                                </div>
                                <div class="col-md-7 col-sm-12 col-xs-12">
                                    <div class="row ad-history">
                                        <div class="col-md-4 col-sm-4 col-xs-12">
                                            <div class="user-stats">
                                                <h2>374</h2>
                                                <small>@lang('titles.ads')</small>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-4 col-xs-12">
                                            <div class="user-stats">
                                                <h2>980</h2>
                                                <small>@lang('titles.approved_ads')</small>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-4 col-xs-12">
                                            <div class="user-stats">
                                                <h2>413</h2>
                                                <small>@lang('titles.favorite_ads')</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </section>

                    <div class="dashboard-menu-container">
                        <ul>
                            <li class="active">
                                <a href="">
                                    <div class="menu-name"> @lang('profile.profile')</div>
                                </a>
                            </li>

                            <li>
                                <a href="">
                                    <div class="menu-name">@lang('profile.stores')</div>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <div class="menu-name">@lang('profile.ads')</div>
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>
                <!-- Middle Content Area  End -->
            </div>
            <!-- Row End -->

            <br>

            <div class="row">
                <!-- Middle Content Area -->

                <div class="col-md-12 col-xs-12 col-sm-12">

                    <!-- Row -->
                    <div class="profile-section margin-bottom-20">
                        <div class="profile-tabs">
                            <ul class="nav nav-justified nav-tabs">
                                <li class="active"><a href="#profile" data-toggle="tab">Profile</a></li>
                                <li><a href="#edit" data-toggle="tab">Edit Profile</a></li>
                                <li><a href="#payment" data-toggle="tab">Plan Setting</a></li>
                                <li><a href="#settings" data-toggle="tab">Notification Settings</a></li>
                            </ul>
                            <div class="tab-content">
                                <div class="profile-edit tab-pane fade in active" id="profile">
                                    <h2 class="heading-md">Manage your Name, ID and Email Addresses.</h2>
                                    <p>Below are the name and email addresses on file for your account.</p>
                                    <dl class="dl-horizontal">
                                        <dt><strong>Your name </strong></dt>
                                        <dd>
                                            John Doe
                                        </dd>
                                        <dt><strong>Email Address </strong></dt>
                                        <dd>
                                            contact@scriptsbundle.com
                                        </dd>
                                        <dt><strong>Phone Number </strong></dt>
                                        <dd>
                                            (0423) 12-2345-789
                                        </dd>
                                        <dt><strong>Country </strong></dt>
                                        <dd>
                                            England
                                        </dd>
                                        <dt><strong>City </strong></dt>
                                        <dd>
                                            London
                                        </dd>
                                        <dt><strong>You are a </strong></dt>
                                        <dd>
                                            Dealer
                                        </dd>
                                        <dt><strong>Address </strong></dt>
                                        <dd>
                                            Lahore, PK
                                        </dd>
                                    </dl>
                                </div>
                                <div class="profile-edit tab-pane fade" id="edit">
                                    <h2 class="heading-md">Manage your Security Settings</h2>
                                    <p>Manage Your Account</p>
                                    <div class="clearfix"></div>
                                    <form>
                                        <div class="row">
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <label>Your Name </label>
                                                <input type="text" class="form-control margin-bottom-20">
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <label>Email Address <span class="color-red">*</span></label>
                                                <input type="text" class="form-control margin-bottom-20">
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <label>Contact Number <span class="color-red">*</span></label>
                                                <input type="text" class="form-control margin-bottom-20">
                                            </div>
                                            <div class="col-md-6 col-sm-12 col-xs-12 margin-bottom-20">
                                                <label>Country <span class="color-red">*</span></label>
                                                <select class="form-control">
                                                    <option value="0">SriLanka</option>
                                                    <option value="1">Australia</option>
                                                    <option value="2">Bahrain</option>
                                                    <option value="3">Canada</option>
                                                    <option value="4">Denmark</option>
                                                    <option value="5">Germany</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6 col-sm-12 col-xs-12 margin-bottom-20">
                                                <label>City <span class="color-red">*</span></label>
                                                <select class="form-control">
                                                    <option value="0">London</option>
                                                    <option value="1">Edinburgh</option>
                                                    <option value="2">Wales</option>
                                                    <option value="3">Cardiff</option>
                                                    <option value="4">Bradford</option>
                                                    <option value="5">Cambridge</option>
                                                </select>
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <label>Address <span class="color-red">*</span></label>
                                                <textarea class="form-control margin-bottom-20" rows="3"></textarea>
                                            </div>
                                        </div>
                                        <div class="row margin-bottom-20">
                                            <div class="form-group">
                                                <div class="col-md-9">
                                                    <div class="input-group">
                                                <span class="input-group-btn">
                                                <span class="btn btn-default btn-file">
                                                Browse… <input type="file" id="imgInp">
                                                </span>
                                                </span>
                                                        <input type="text" class="form-control" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <img id="img-upload" class="img-responsive" src="images/users/2.jpg"
                                                         alt=""/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="row">
                                            <div class="col-md-8 col-sm-8 col-xs-12">
                                                <div class="form-group">
                                                    <div class="skin-minimal">
                                                        <ul class="list">
                                                            <li>
                                                                <input type="checkbox" id="minimal-checkbox-7">
                                                                <label for="minimal-checkbox-7">i agree <a href="#">Terms
                                                                        of Services</a></label>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-4 col-xs-12 text-right">
                                                <button type="submit" class="btn btn-theme btn-sm">Update My Info
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="profile-edit tab-pane fade" id="payment">
                                    <h2 class="heading-md">Manage your Package Settings</h2>
                                    <p>Below are the payment options for your account.</p>
                                    <br>
                                    <form action="#" id="sky-form" class="sky-form" novalidate>
                                        <!--Checkout-Form-->
                                        <dl class="dl-horizontal">
                                            <dt><strong>Current Plan</strong></dt>
                                            <dd>
                                                Premium
                                            </dd>
                                            <dt><strong>Expiration Date </strong></dt>
                                            <dd>
                                                2nd January 2017
                                            </dd>
                                        </dl>
                                        <div class="row">
                                            <div class="col-sm-12 col-md-12 margin-bottom-20">
                                                <label>Select Plan You Want To Change<span
                                                            class="color-red">*</span></label>
                                                <select class="form-control">
                                                    <option value="0">Free</option>
                                                    <option value="1">Premium</option>
                                                    <option value="2">Advanced</option>
                                                </select>
                                            </div>
                                        </div>
                                        <button class="btn btn-sm btn-default" type="button">Cancel</button>
                                        <button type="submit" class="btn btn-sm btn-theme">Save Changes</button>
                                        <!--End Checkout-Form-->
                                    </form>
                                </div>
                                <div class="profile-edit tab-pane fade" id="settings">
                                    <h2 class="heading-md">Manage your Notifications.</h2>
                                    <p>Below are the notifications you may manage.</p>
                                    <br>
                                    <form>
                                        <div class="skin-minimal">
                                            <ul class="list">
                                                <li>
                                                    <input type="checkbox" id="minimal-checkbox-1">
                                                    <label for="minimal-checkbox-1">Send me email notification when Ad
                                                        is processed</label>
                                                </li>
                                                <li>
                                                    <input type="checkbox" id="minimal-checkbox-2">
                                                    <label for="minimal-checkbox-2">Send me email notification when user
                                                        comment</label>
                                                </li>
                                                <li>
                                                    <input type="checkbox" id="minimal-checkbox-3">
                                                    <label for="minimal-checkbox-3">Send me email notification for the
                                                        latest update</label>
                                                </li>
                                                <li>
                                                    <input type="checkbox" id="minimal-checkbox-4">
                                                    <label for="minimal-checkbox-4"> Receive our monthly
                                                        newsletter</label>
                                                </li>
                                                <li>
                                                    <input type="checkbox" id="minimal-checkbox-5">
                                                    <label for="minimal-checkbox-5">Email notification</label>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="button-group margin-top-20">
                                            <button class="btn btn-sm btn-default" type="button">Reset</button>
                                            <button type="submit" class="btn btn-sm btn-theme">Save Changes</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Row End -->
                </div>
                <!-- Middle Content Area  End -->
            </div>

        </div>
        <!-- Main Container End -->
    </section>
@endsection