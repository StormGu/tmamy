@extends('adforest.layout.oldmaster')

@section('content')
    <section class="section-pStoreding  gray ">
        <!-- Main Container -->
        <div class="container">
            <!-- Row -->
            <div class="row">
                <div class="col-md-8 col-lg-8 col-xs-12 col-sm-12">
                    <!-- end post-pStoreding -->
                    <div class="post-Store-form postdetails">
                        <div class="heStoreing-panel">
                            <h3 class="main-title text-left">
                                @lang('profile.Post_Your_Store')
                            </h3>
                        </div>

                        <form action="{{ url('/postnewstores') }}" method="post" enctype="multipart/form-data" class="submit-form">
                            <!-- Title  -->
                            {{ csrf_field() }}
                            <input name="user_id"  value="{{ Auth::id() }}" class="form-control" placeholder="uea +92-0321-123-456-789" type="hidden">
                            <div class="row">
                                <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">
                                    <label class="control-label">@lang('profile.Store_Title')<small>@lang('profile.Enter_a_short_title_for_your_Store')</small></label>
                                    <input name="title" class="form-control" placeholder="Brand new honda civic 2017 for sale" type="text">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">
                                    <label class="control-label">@lang('profile.companyName')<small>@lang('profile.Enter_a_company_name_for_your_Store')</small></label>
                                    <input name="company_name" class="form-control" placeholder="Brand new honda civic 2017 for sale" type="text">
                                </div>
                            </div>
                            <div class="row">
                                <!-- Category  -->
                                <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
                                    <label class="control-label">@lang('profile.Category') <small>@lang('profile.Select_suitable_category_for_your_Store')</small></label>
                                    <select name="category_id" class="category form-control">
                                        <option label=@lang('profile.SelectOption')></option>
                                        @foreach($cat as $key)
                                            <option value="{{ $key->id }}">{{ $key->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
                                    <label class="control-label">@lang('profile.Country') <small>@lang('profile.Select_Country_for_your_Store')</small></label>
                                    <select name="country_id" class="category form-control">
                                        <option label=@lang('profile.SelectOption')></option>
                                        @foreach($cou as $key)
                                            <option value="{{ $key->id }}">{{ $key->name }}</option>
                                        @endforeach
                                    </select>
                                </div>



                            </div>
                            <!-- end row -->
                            <!-- Image UploStore  -->
                            <div class="row">
                                <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">
                                    <label class="control-label">@lang('profile.Photos_for_your_Stores') <small>@lang('profile.Please_Stored_images_of_your_Store.') (350x450)</small></label>
                                    <input type="file" name="logo_file_name">
                                </div>
                            </div>


                            <!-- end row -->
                            <!-- Store Description  -->
                            <div class="row">
                                <div class="col-md-12 col-lg-12 col-xs-12  col-sm-12">
                                    <label class="control-label">@lang('profile.StoreDescription.') <small>@lang('profile.Enter_long_description_for_your_project.')</small></label>
                                    <textarea name="description" id="editor1" rows="12" class="form-control" placeholder=""></textarea>
                                </div>
                            </div>
                            <!-- end row -->
                            <!-- Store Tags  -->

                            <!-- end row -->
                            <!-- Store Type  -->


                            <!-- Store Condition  -->

                            <!-- end row -->

                            <!-- end row -->
                            <div class="row">
                                <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
                                    <label class="control-label">@lang('profile.MobileNumber.')<small>@lang('profile.number_for_conformation.')</small></label>
                                    <input name="mobile_no" class="form-control" placeholder="uea +92-0321-123-456-789" type="text">
                                </div>
                                <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
                                    <label class="control-label">@lang('profile.PhoneNumber')<small>@lang('profile.number_for_conformation')</small></label>
                                    <input name="phone_no" class="form-control" placeholder="uea +92-0321-123-456-789" type="text">
                                </div>
                                <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
                                    <label class="control-label">@lang('profile.Address')<small>@lang('profile.addressr_for_conformation')</small></label>
                                    <input name="address" class="form-control" placeholder="address" type="text">
                                </div>
                                <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
                                    <label class="control-label">@lang('profile.email')<small>@lang('profile.email_for_conformation')</small></label>
                                    <input name="email" class="form-control" placeholder="email" type="email">
                                </div>

                                <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
                                    <label class="control-label">@lang('profile.url')<small>@lang('profile.email_for_conformation')</small></label>
                                    <input name="url" class="form-control" placeholder="url" type="text">
                                </div>
                                <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
                                    <label class="control-label">@lang('profile.pob_Number')<small>@lang('profile.pob_number_for_conformation') </small></label>
                                    <input name="pob" class="form-control" placeholder="uea +92-0321-123-456-789" type="text">
                                </div>
                                <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
                                    <label class="control-label">@lang('profile.fax_Number')<small>@lang('profile.fax_number_for_conformation') </small></label>
                                    <input name="fax" class="form-control" placeholder="uea +92-0321-123-456-789" type="text">
                                </div>


                                <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
                                    <label class="control-label">@lang('profile.Store_Date')</label>
                                    <input name="start_date" class="form-control" placeholder="uea +92-0321-123-456-789" type="date">
                                </div>
                                <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
                                    <label class="control-label">@lang('profile.Expiry_Date')</label>
                                    <input name="expiry_date" class="form-control" placeholder="uea +92-0321-123-456-789" type="date">
                                </div>

                            </div>


                            <!-- Featured Store  -->
                            <!--  <div class="row">
                                  <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">
                                      <label class="control-label">Make Your Store Featured  <small class="pull-right" > <a href="">What is featured Store</a></small></label>
                                      <div class="skin-minimal">
                                          <ul class="list">
                                              <li>
                                                  <input type="rStoreio" id="bank" name="minimal-rStoreio">
                                                  <label  for="bank"> Direct Bank Transfer</label>
                                              </li>
                                              <li>
                                                  <input type="rStoreio" id="cheque" name="minimal-rStoreio" checked>
                                                  <label for="cheque">Cheque Payment</label>
                                              </li>
                                              <li>
                                                  <input type="rStoreio" id="paypal" name="minimal-rStoreio" checked>
                                                  <label for="paypal">Paypal</label>
                                              </li>
                                              <li>
                                                  <input type="rStoreio" id="card" name="minimal-rStoreio" checked>
                                                  <label for="card">Credit Card</label>
                                              </li>
                                          </ul>
                                      </div>
                                  </div>
                              </div>
                              <!-- end row -->
                            <button type="submit" class="btn btn-theme pull-right">@lang('profile.Publish_My_Store')</button>
                        </form>
                    </div>
                    <!-- end post-Store-form-->
                </div>
                <!-- end col -->
                <!-- Right Sidebar -->
                <div class="col-md-4 col-xs-12 col-sm-12">
                    <!-- Sidebar Widgets -->
                    <div class="blog-sidebar">
                        <!-- Categories -->
                        <div class="widget">
                            <div class="widget-heStoreing">
                                <h4 class="panel-title"><a>Saftey Tips </a></h4>
                            </div>
                            <div class="widget-content">
                                <p class="leStore">Posting an Store on <a href="#">StoreForest.com</a> is free! However, all Stores must follow our rules:</p>
                                <ol>
                                    <li>Make sure you post in the correct category.</li>
                                    <li>Do not post the same Store more than once or repost an Store within 48 hours.</li>
                                    <li>Do not uploStore pictures with watermarks.</li>
                                    <li>Do not post Stores containing multiple items unless it's a package deal.</li>
                                    <li>Do not put your email or phone numbers in the title or description.</li>
                                    <li>Make sure you post in the correct category.</li>
                                    <li>Do not post the same Store more than once or repost an Store within 48 hours.</li>
                                    <li>Do not uploStore pictures with watermarks.</li>
                                    <li>Do not post Stores containing multiple items unless it's a package deal.</li>
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