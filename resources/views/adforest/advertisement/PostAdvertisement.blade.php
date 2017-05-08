@extends('adforest.layout.master')





@section('content')
    <section class="section-padding  gray ">
        <!-- Main Container -->
        <div class="container">
            <!-- Row -->
            <div class="row">
                <div class="col-md-8 col-lg-8 col-xs-12 col-sm-12">
                    <!-- end post-padding -->
                    <div class="post-ad-form postdetails">
                        <div class="heading-panel">
                            <h3 class="main-title text-left">
                                @lang('advertisement.Post Your Ad')
                            </h3>
                        </div>

                        <form action="PostAdv" method="post" enctype="multipart/form-data" class="submit-form">
                            <!-- Title  -->
                            {{ csrf_field() }}
                            <input name="user_id"  value="{{ Auth::id() }}" class="form-control" placeholder="uea +92-0321-123-456-789" type="hidden">
                            <div class="row">
                                <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">
                                    <label class="control-label">@lang('advertisement.Ad Title') <small>@lang('advertisement.Enter a short title for your Ad')</small></label>
                                    <input name="title" class="form-control" placeholder="Brand new honda civic 2017 for sale" type="text">
                                </div>
                            </div>
                            <div class="row">
                                <!-- Category  -->
                                <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
                                    <label class="control-label">@lang('advertisement.Category') <small>@lang('advertisement.Select suitable category for your ad')</small></label>
                                    <select name="category_id" class="category form-control">
                                        <option value="Select Option"></option>
                                         @foreach($cat as $key)
                                        <option value="{{ $key->id }}">{{ $key->name }}</option>
                                             @endforeach
                                    </select>
                                </div>

                                <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
                                    <label class="control-label">@lang('advertisement.Country') <small>@lang('advertisement.Select Country for your ad')</small></label>
                                    <select name="country_id" class="category form-control">
                                        <option label="Select Option"></option>
                                        @foreach($cou as $key)
                                            <option value="{{ $key->id }}">{{ $key->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <!-- Price  -->
                                <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
                                    <label class="control-label">@lang('advertisement.Price')<small>@lang('advertisement.USD only')</small></label>
                                    <input name="price" class="form-control" placeholder="eg $350" type="text">
                                </div>
                            </div>
                            <!-- end row -->
                            <!-- Image Upload  -->
                            <div class="row">
                                <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">
                                    <label class="control-label">@lang('advertisement.Photos for your ad') <small>@lang('advertisement.Please add images of your ad. ') (350x450)</small></label>
                                    <input type="file" name="image_filename">
                                </div>
                            </div>


                            <!-- end row -->
                            <!-- Ad Description  -->
                            <div class="row">
                                <div class="col-md-12 col-lg-12 col-xs-12  col-sm-12">
                                    <label class="control-label">@lang('advertisement.Ad Description') <small>@lang('advertisement.Post Your Ad')Enter long description for your project</small></label>
                                    <textarea name="details" id="editor1" rows="12" class="form-control" placeholder=""></textarea>
                                </div>
                            </div>
                            <!-- end row -->
                            <!-- Ad Tags  -->

                            <!-- end row -->
                            <!-- Ad Type  -->
                            <div class="row">
                                <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">
                                    <label class="control-label">@lang('advertisement.Type Of Ad')<small>@lang('advertisement.want to buy or sale')</small></label>
                                    <div class="skin-minimal">
                                        <ul class="list">
                                            <li>
                                                <input tabindex="7" type="radio" id="minimal-radio-1" name="minimalradio" value="0">
                                                <label  for="minimal-radio-1">@lang('advertisement.I want to sell') </label>
                                            </li>
                                            <li>
                                                <input tabindex="8" type="radio" id="minimal-radio-2" name="minimalradio" value="1" checked>
                                                <label for="minimal-radio-2">@lang('advertisement.I want to buy')</label>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- Ad Condition  -->

                            <!-- end row -->

                            <!-- end row -->
                            <div class="row">
                                <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
                                    <label class="control-label">@lang('advertisement.Mobile Number')<small>@lang('advertisement.number for conformation')</small></label>
                                    <input name="mobile_no" class="form-control" placeholder="uea +92-0321-123-456-789" type="text">
                                </div>
                                <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
                                    <label class="control-label">@lang('advertisement.Phone Number')<small>@lang('advertisement.number for conformation')</small></label>
                                    <input name="phone_no" class="form-control" placeholder="uea +92-0321-123-456-789" type="text">
                                </div>

                                <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
                                    <label class="control-label">@lang('advertisement.Advertisment Date')</label>
                                    <input name="advertisment_date" class="form-control" placeholder="uea +92-0321-123-456-789" type="date">
                                </div>
                                <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
                                    <label class="control-label">@lang('advertisement.Expiry Date')</label>
                                    <input name="expiry_date" class="form-control" placeholder="uea +92-0321-123-456-789" type="date">
                                </div>

                            </div>


                            <!-- Featured Ad  -->
                          <!--  <div class="row">
                                <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">
                                    <label class="control-label">Make Your Ad Featured  <small class="pull-right" > <a href="">What is featured ad</a></small></label>
                                    <div class="skin-minimal">
                                        <ul class="list">
                                            <li>
                                                <input type="radio" id="bank" name="minimal-radio">
                                                <label  for="bank"> Direct Bank Transfer</label>
                                            </li>
                                            <li>
                                                <input type="radio" id="cheque" name="minimal-radio" checked>
                                                <label for="cheque">Cheque Payment</label>
                                            </li>
                                            <li>
                                                <input type="radio" id="paypal" name="minimal-radio" checked>
                                                <label for="paypal">Paypal</label>
                                            </li>
                                            <li>
                                                <input type="radio" id="card" name="minimal-radio" checked>
                                                <label for="card">Credit Card</label>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- end row -->
                            <button type="submit" class="btn btn-theme pull-right">@lang('advertisement.Publish My Ad')</button>
                        </form>
                    </div>
                    <!-- end post-ad-form-->
                </div>
                <!-- end col -->
                <!-- Right Sidebar -->
                <div class="col-md-4 col-xs-12 col-sm-12">
                    <!-- Sidebar Widgets -->
                    <div class="blog-sidebar">
                        <!-- Categories -->
                        <div class="widget">
                            <div class="widget-heading">
                                <h4 class="panel-title"><a>@lang('advertisement.Saftey Tips') </a></h4>
                            </div>
                            <div class="widget-content">
                                <p class="lead">@lang('advertisement.Posting an ad on') <a href="#">@lang('advertisement.AdForest.com')</a> @lang('advertisement.is free! However, all ads must follow our rules'):</p>
                                <ol>
                                    <li>@lang('advertisement.Make sure you post in the correct category').</li>
                                    <li>@lang('advertisement.Do not post the same ad more than once or repost an ad within 48 hours').</li>
                                    <li>@lang('advertisement.Do not upload pictures with watermarks').</li>
                                    <li>@lang('advertisement.Do not post ads containing multiple items unless its a package deal').</li>
                                    <li>@lang('advertisement.Do not put your email or phone numbers in the title or description').</li>
                                    <li>@lang('advertisement.Make sure you post in the correct category').</li>
                                    <li>@lang('advertisement.Do not post the same ad more than once or repost an ad within 48 hours').</li>
                                    <li>@lang('advertisement.Do not upload pictures with watermarks').</li>
                                    <li>@lang('advertisement.Do not post ads containing multiple items unless its a package deal').</li>
                                </ol>
                            </div>
                        </div>
                        <!-- Latest News -->
                    </div>
                    <!-- Sidebar Widgets End -->
                </div>
                <!-- Middle Content Area  End --><!-- end col -->
            </div>
            <!-- Row End -->
        </div>

        <!-- Main Container End -->
    </section>

@endsection
