@extends('site.layout.master')

@section('content')
    <!--Breadcrumbs Start-->
    <div class="breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li><a href="index.html"><i class="fa fa-home"></i>Home</a></li>
                        <li class="active">Details</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--End of Breadcrumbs-->
    <!--Product Details Area Start-->
    <section class="product-details-area">
        <div class="container">
            <div class="row">
                @if($adv_type == 'career_job')
                    @include('site.advertisement.career_job')
                @else

                    <div class="col-md-9">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="product-s-l">
                                    <div class="product-large">
                                        <div class="tab-content">
                                            <div class="tab-pane active in" id="img-1">
                                                <a href="#">

                                                    <img alt="" class="zoom_01"
                                                         src="{{ url('image/410×500/'. $object->image_filename) }}"
                                                         data-zoom-image="{{ url('image/410×500/'. $object->image_filename) }}"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-small">
                                        <ul class="nav nav-tabs bxslider" style="margin: 0px auto !important;"
                                            role="tablist">
                                            <li class="active">
                                                <a href="#img-1" data-toggle="tab">
                                                    <img alt=""
                                                         src="{{ url('image/100×120/'. $object->image_filename) }}"/>
                                                </a>
                                            </li>
                                        </ul>
                                        <!-- BX Slider Navigation -->
                                        <div class="outside">
                                            <p><span id="slider-prev"></span> <span id="slider-next"></span></p>
                                        </div>
                                        <!-- BX Slider Navigation -->
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 scrl scrollbar" id="style-2">


                                <div class="product-right-details force-overflow">
                                    <div class="product-info">
                                        <h4>{{ $object->title }}</h4>
                                        <h5>{{ $object->price }} {{ $object->currency->value }}</h5>
                                    </div>
                                </div>
                                <div class="borderd-para">
                                    <p class="p1">Ad No</p>
                                    <p class="p2">2413</p>
                                </div>
                                <div class="borderd-para">
                                    <p class="p1">Category</p>
                                    <p class="p2">For Rent</p>
                                </div>
                                <div class="borderd-para">
                                    <p class="p1">Sub Category</p>
                                    <p class="p2">Store & Shop</p>
                                </div>
                                <div class="borderd-para">
                                    <p class="p1">Building's Condition</p>
                                    <p class="p2">New</p>
                                </div>


                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="p-details-tab">
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li role="presentation" class="active"><a href="#description"
                                                                                  aria-controls="description" role="tab"
                                                                                  data-toggle="tab">Description</a></li>
                                        <li role="presentation"><a href="#reviews" aria-controls="reviews" role="tab"
                                                                   data-toggle="tab">Feature</a></li>
                                        <li role="presentation"><a href="#tags" aria-controls="tags" role="tab"
                                                                   data-toggle="tab">Location</a></li>
                                    </ul>
                                </div>
                                <div class="clearfix"></div>
                                <div class="tab-content review">
                                    <div role="tabpanel" class="tab-pane active" id="description">
                                        <p>
                                            {{ $object->details }}
                                        </p>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="reviews">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <ul>
                                                    @foreach($features as $key => $feature)
                                                        <li>{{ $feature->name }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="tags">
                                        <div class="product-tag-name">
                                            <form action="mail.php" method="post">
                                                <div class="row form-top">
                                                    <div class="form-group col-sm-12 col-md-12 col-lg-12">
                                                        <label>Add Your Tags:</label>
                                                        <input type="text" class="form-control">
                                                        <a class="add-tag-btn" href="#">ADD Tags</a>
                                                    </div>
                                                </div>
                                            </form>
                                            <p>Use spaces to separate tags. Use single quotes (') for phrases.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>


                    <div class="col-lg-3 col-md-3 hidden-sm rtl">
                        <div class="profile-sidebar">
                            <!-- SIDEBAR USERPIC -->
                            <div class="profile-userpic">
                                <img src="khaled.jpg" class="img-responsive" alt="">
                            </div>
                            <!-- END SIDEBAR USERPIC -->
                            <!-- SIDEBAR USER TITLE -->
                            <div class="profile-usertitle">
                                <div class="profile-usertitle-name">
                                    Marcus Doe
                                </div>
                                <div class="profile-usertitle-job">
                                    Developer
                                </div>
                            </div>
                            <!-- END SIDEBAR USER TITLE -->
                            <!-- SIDEBAR BUTTONS -->
                            <div class="profile-userbuttons">
                                <button type="button" class="btn btn-default1">Follow</button>
                                <button type="button" class="btn btn-default1">Message</button>
                            </div>
                            <!-- END SIDEBAR BUTTONS -->
                            <!-- SIDEBAR MENU -->
                            <div class="profile-usermenu">
                                <ul class="nav">
                                    <li class="active">
                                        <a href="#">
                                            <i class="glyphicon glyphicon-home"></i>
                                            Overview </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="glyphicon glyphicon-user"></i>
                                            Account Settings </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class="glyphicon glyphicon-ok"></i>
                                            Tasks </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="glyphicon glyphicon-flag"></i>
                                            Help </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- END MENU -->
                        </div>
                        <aside class="widget widget-banner white-hover">

                            <a href="#" class="brand-img"><img src="img/banner/banner-19.jpg" alt="">
                            </a>
                        </aside>
                    </div>

                @endif
            </div>
        </div>
    </section>
    <!--End of product-details Area-->
@endsection