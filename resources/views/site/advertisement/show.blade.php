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
                                                <a href="product-details.html"><img alt="" class="zoom_01"
                                                                                    src="img/product/p-d-1.jpg"
                                                                                    data-zoom-image="img/product/p-d-1.jpg"></a>
                                            </div>
                                            <div class="tab-pane" id="img-2">
                                                <a href="product-details.html"><img alt="" class="zoom_01"
                                                                                    src="img/product/p-d-2.jpg"
                                                                                    data-zoom-image="img/product/p-d-2.jpg"></a>
                                            </div>
                                            <div class="tab-pane" id="img-3">
                                                <a href="product-details.html"><img alt="" class="zoom_01"
                                                                                    src="img/product/p-d-3.jpg"
                                                                                    data-zoom-image="img/product/p-d-3.jpg"></a>
                                            </div>
                                            <div class="tab-pane" id="img-4">
                                                <a href="product-details.html"><img alt="" class="zoom_01"
                                                                                    src="img/product/p-d-4.jpg"
                                                                                    data-zoom-image="img/product/p-d-4.jpg"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-small">
                                        <ul class="nav nav-tabs bxslider" role="tablist">
                                            <li class="active">
                                                <a href="#img-1" data-toggle="tab">
                                                    <img alt="" src="img/product/p-d-1.jpg">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#img-2" data-toggle="tab">
                                                    <img alt="" src="img/product/p-d-2.jpg">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#img-3" data-toggle="tab">
                                                    <img alt="" src="img/product/p-d-3.jpg">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#img-4" data-toggle="tab">
                                                    <img alt="" src="img/product/p-d-4.jpg">
                                                </a>
                                            </li>
                                            <li class="active">
                                                <a href="#img-1" data-toggle="tab">
                                                    <img alt="" src="img/product/p-d-1.jpg">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#img-2" data-toggle="tab">
                                                    <img alt="" src="img/product/p-d-2.jpg">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#img-3" data-toggle="tab">
                                                    <img alt="" src="img/product/p-d-3.jpg">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#img-4" data-toggle="tab">
                                                    <img alt="" src="img/product/p-d-4.jpg">
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
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="product-right-details">
                                    <div class="product-info">
                                        <h4>SparkFun Badgers Intel</h4>
                                        <h5>$156.87</h5>


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
                                <div class="borderd-para">
                                    <p class="p1">AC & Heating Type</p>
                                    <p class="p2">None</p>
                                </div>
                                <div class="borderd-para">
                                    <p class="p1">Area (m2)</p>
                                    <p class="p2">200</p>
                                </div>
                                <div class="borderd-para">
                                    <p class="p1">From</p>
                                    <p class="p2">Owner</p>
                                </div>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">

                            </div>
                        </div>

                    </div>
                    <div class="col-lg-3 col-md-3 hidden-sm rtl">
                        <aside class="widget widget-banner white-hover">
                            <a href="#" class="brand-img"><img src="img/banner/banner-19.jpg" alt="">
                            </a>
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