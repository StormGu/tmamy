@extends('site.layout.master')

@section('content')
    @include('site.home.slider')
    <div class="features-tab-area Menu">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 hidden-sm">
                    <aside class="widget widget-banner white-hover">

                        <a href="#" class="brand-img"><img src="{{ asset('site/img/banner/banner-19.jpg') }}" alt=""></a>

                        <a href="#" class="brand-img"><img src="{{ asset('site/img/banner/banner-19.jpg') }}" alt=""></a>
                        <a href="#" class="brand-img"><img src="{{ asset('site/img/banner/banner-19.jpg') }}" alt=""></a>
                        <a href="#" class="brand-img"><img src="{{ asset('site/img/banner/banner-19.jpg') }}" alt=""></a>

                    </aside>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-12">
                    <div class="features-tab clearfix">
                        <h3>Menus</h3>
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs navbar-right" role="tablist">
                            <li role="presentation" class="active"><a href="#laptop" aria-controls="laptop" role="tab" data-toggle="tab">Laptop</a></li>
                            <li role="presentation"><a href="#mobile" aria-controls="mobile" role="tab" data-toggle="tab">mobile</a></li>
                            <li role="presentation"><a href="#smartphone" aria-controls="smartphone" role="tab" data-toggle="tab">smartphone</a></li>
                            <li role="presentation"><a href="#ios" aria-controls="ios" role="tab" data-toggle="tab">ios</a></li>
                            <li role="presentation"><a href="#tivi" aria-controls="tivi" role="tab" data-toggle="tab">tivi</a></li>
                            <li role="presentation"><a href="#speaker" aria-controls="speaker" role="tab" data-toggle="tab">speaker</a></li>
                            <li role="presentation"><a href="#view" aria-controls="view" role="tab" data-toggle="tab"> View all <i class="fa fa-angle-double-right"></i></a></li>
                        </ul>
                    </div>
                    <div class="clearfix"></div>



                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="laptop">


                            <div role="tabpanel" class="tab-pane" id="tivi">
                                <div class="row">
                                    <div class="single-p-slide owl-carousel owl-theme" style="opacity: 1; display: block;">
                                        <div class="owl-wrapper-outer">
                                            <div class="owl-wrapper" style="width: 2640px; left: 0px; display: block;">
                                                <div class="owl-item" style="width: 220px;">
                                                    <div class="col-md-4">
                                                        <div class="single-product">
                                                            <a href="#">

                                                                <img src="{{ asset('site/img/product/tab-p-1.jpg') }}" alt="">
                                                                <i class="fa fa-expand"></i>
                                                            </a>
                                                            <div class="product-info">
                                                                <h4><a href="#">SparkFun Badgers Intel</a></h4>

                                                                <button class="n-a-btn"><i class="fa fa-shopping-cart"></i>Details  </button>

                                                            </div>
                                                        </div>

                                                    </div>
                                                </div><div class="owl-item" style="width: 220px;"><div class="col-md-4">
                                                        <div class="single-product">
                                                            <a href="#">
                                                                <img src="{{ asset('site/img/product/tab-p-2.jpg') }}" alt="">
                                                                <i class="fa fa-expand"></i>
                                                            </a>
                                                            <div class="product-info">
                                                                <h4><a href="#">SparkFun Badgers Intel</a></h4>

                                                                <button class="n-a-btn"><i class="fa fa-shopping-cart"></i>Details  </button>

                                                            </div>
                                                        </div>
                                                    </div></div><div class="owl-item" style="width: 220px;"><div class="col-md-4">
                                                        <div class="single-product">
                                                            <a href="#">
                                                                <img src="{{ asset('site/img/product/tab-p-3.jpg') }}" alt="">
                                                                <i class="fa fa-expand"></i>
                                                            </a>
                                                            <div class="product-info">
                                                                <h4><a href="#">SparkFun Badgers Intel</a></h4>

                                                                <button class="n-a-btn"><i class="fa fa-shopping-cart"></i>Details  </button>

                                                            </div>
                                                        </div>
                                                    </div></div><div class="owl-item" style="width: 220px;"><div class="col-md-4">
                                                        <div class="single-product">
                                                            <a href="#">
                                                                <img src="{{ asset('site/img/product/tab-p-4.jpg') }}" alt="">
                                                                <i class="fa fa-expand"></i>
                                                            </a>
                                                            <div class="product-info">
                                                                <h4><a href="#">SparkFun Badgers Intel</a></h4>

                                                                <button class="n-a-btn"><i class="fa fa-shopping-cart"></i>Details  </button>

                                                            </div>
                                                        </div>
                                                    </div></div><div class="owl-item" style="width: 220px;"><div class="col-md-4">
                                                        <div class="single-product">
                                                            <a href="#">
                                                                <img src="{{ asset('site/img/product/tab-p-5.jpg') }}" alt="">
                                                                <i class="fa fa-expand"></i>
                                                            </a>
                                                            <div class="product-info">
                                                                <h4><a href="#">SparkFun Badgers Intel</a></h4>

                                                                <button class="n-a-btn"><i class="fa fa-shopping-cart"></i>Details  </button>

                                                            </div>
                                                        </div>
                                                    </div></div><div class="owl-item" style="width: 220px;"><div class="col-md-4">
                                                        <div class="single-product">
                                                            <a href="#">
                                                                <img src="{{ asset('site/img/product/tab-p-6.jpg') }}" alt="">
                                                                <i class="fa fa-expand"></i>
                                                            </a>
                                                            <div class="product-info">
                                                                <h4><a href="#">SparkFun Badgers Intel</a></h4>

                                                                <button class="n-a-btn"><i class="fa fa-shopping-cart"></i>Details  </button>

                                                            </div>
                                                        </div>
                                                    </div></div></div></div>





                                        <div class="owl-controls clickable"><div class="owl-buttons"><div class="owl-prev"><i class="fa fa-angle-left"></i></div><div class="owl-next"><i class="fa fa-angle-right"></i></div></div></div></div>
                                </div>
                            </div>





                        </div>

                    </div>

                    <!--End of Menus Features Tab Area-->
                    <!--Features Fashion Tab Area Start-->

                    <div class="features-tab clearfix">
                        <h3>Fashion</h3>
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs navbar-right" role="tablist">
                            <li role="presentation" class="active"><a href="#men" aria-controls="men" role="tab" data-toggle="tab">men</a></li>
                            <li role="presentation"><a href="#women" aria-controls="women" role="tab" data-toggle="tab">women</a></li>
                            <li role="presentation"><a href="#accessorie" aria-controls="accessorie" role="tab" data-toggle="tab">accessories</a></li>
                            <li role="presentation"><a href="#jewellery" aria-controls="jewellery" role="tab" data-toggle="tab">jewellery</a></li>
                            <li role="presentation"><a href="#shoes" aria-controls="shoes" role="tab" data-toggle="tab">shoes</a></li>
                            <li role="presentation"><a href="#jeans" aria-controls="jeans" role="tab" data-toggle="tab">jeans</a></li>
                            <li role="presentation"><a href="#all" aria-controls="all" role="tab" data-toggle="tab"> View all <i class="fa fa-angle-double-right"></i></a></li>
                        </ul>
                    </div>
                    <div class="clearfix"></div>
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="men">


                            <div role="tabpanel" class="tab-pane" id="jewellery">
                                <div class="row">
                                    <div class="single-p-slide owl-carousel owl-theme" style="opacity: 1; display: block;">
                                        <div class="owl-wrapper-outer"><div class="owl-wrapper" style="width: 2640px; left: 0px; display: block;"><div class="owl-item" style="width: 220px;"><div class="col-md-4">
                                                        <div class="single-product">
                                                            <a href="#">

                                                                <img src="{{ asset('site/img/product/tab-p-1.jpg') }}" alt="">
                                                                <i class="fa fa-expand"></i>
                                                            </a>
                                                            <div class="product-info">
                                                                <h4><a href="#">SparkFun Badgers Intel</a></h4>

                                                                <button class="n-a-btn"><i class="fa fa-shopping-cart"></i>Details  </button>

                                                            </div>
                                                        </div>
                                                    </div></div><div class="owl-item" style="width: 220px;"><div class="col-md-4">
                                                        <div class="single-product">
                                                            <a href="#">
                                                                <img src="{{ asset('site/img/product/tab-p-2.jpg') }}" alt="">
                                                                <i class="fa fa-expand"></i>
                                                            </a>
                                                            <div class="product-info">
                                                                <h4><a href="#">SparkFun Badgers Intel</a></h4>

                                                                <button class="n-a-btn"><i class="fa fa-shopping-cart"></i>Details  </button>

                                                            </div>
                                                        </div>
                                                    </div></div><div class="owl-item" style="width: 220px;"><div class="col-md-4">
                                                        <div class="single-product">
                                                            <a href="#">
                                                                <img src="{{ asset('site/img/product/tab-p-3.jpg') }}" alt="">
                                                                <i class="fa fa-expand"></i>
                                                            </a>
                                                            <div class="product-info">
                                                                <h4><a href="#">SparkFun Badgers Intel</a></h4>

                                                                <button class="n-a-btn"><i class="fa fa-shopping-cart"></i>Details  </button>

                                                            </div>
                                                        </div>
                                                    </div></div><div class="owl-item" style="width: 220px;"><div class="col-md-4">
                                                        <div class="single-product">
                                                            <a href="#">
                                                                <img src="{{ asset('site/img/product/tab-p-4.jpg') }}" alt="">
                                                                <i class="fa fa-expand"></i>
                                                            </a>
                                                            <div class="product-info">
                                                                <h4><a href="#">SparkFun Badgers Intel</a></h4>

                                                                <button class="n-a-btn"><i class="fa fa-shopping-cart"></i>Details  </button>

                                                            </div>
                                                        </div>
                                                    </div></div><div class="owl-item" style="width: 220px;"><div class="col-md-4">
                                                        <div class="single-product">
                                                            <a href="#">
                                                                <img src="{{ asset('site/img/product/tab-p-5.jpg') }}" alt="">
                                                                <i class="fa fa-expand"></i>
                                                            </a>
                                                            <div class="product-info">
                                                                <h4><a href="#">SparkFun Badgers Intel</a></h4>

                                                                <button class="n-a-btn"><i class="fa fa-shopping-cart"></i>Details  </button>

                                                            </div>
                                                        </div>
                                                    </div></div><div class="owl-item" style="width: 220px;"><div class="col-md-4">
                                                        <div class="single-product">
                                                            <a href="#">
                                                                <img src="{{ asset('site/img/product/tab-p-6.jpg') }}" alt="">
                                                                <i class="fa fa-expand"></i>
                                                            </a>
                                                            <div class="product-info">
                                                                <h4><a href="#">SparkFun Badgers Intel</a></h4>

                                                                <button class="n-a-btn"><i class="fa fa-shopping-cart"></i>Details  </button>

                                                            </div>
                                                        </div>
                                                    </div></div></div></div>





                                        <div class="owl-controls clickable"><div class="owl-buttons"><div class="owl-prev"><i class="fa fa-angle-left"></i></div><div class="owl-next"><i class="fa fa-angle-right"></i></div></div></div></div>
                                </div>
                            </div>

                        </div>

                    </div>


                    <!--End of Features Fashion Tab Area-->

                    <!--Features Kitchen Tab Area Start-->

                    <div class="features-tab clearfix">
                        <h3>Kitchenware</h3>
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs navbar-right" role="tablist">
                            <li role="presentation" class="active"><a href="#cookwear" aria-controls="cookwear" role="tab" data-toggle="tab">cookwear</a></li>
                            <li role="presentation"><a href="#bakewear" aria-controls="bakewear" role="tab" data-toggle="tab">bakewear</a></li>
                            <li role="presentation"><a href="#dining" aria-controls="dining" role="tab" data-toggle="tab">dining</a></li>
                            <li role="presentation"><a href="#serving" aria-controls="serving" role="tab" data-toggle="tab">serving</a></li>
                            <li role="presentation"><a href="#kitchen" aria-controls="kitchen" role="tab" data-toggle="tab">kitchen tools</a></li>
                            <li role="presentation"><a href="#views" aria-controls="views" role="tab" data-toggle="tab"> View all <i class="fa fa-angle-double-right"></i></a></li>
                        </ul>
                    </div>
                    <div class="clearfix"></div>
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="men">

                            <div role="tabpanel" class="tab-pane" id="jewellery">
                                <div class="row">
                                    <div class="single-p-slide owl-carousel owl-theme" style="opacity: 1; display: block;">
                                        <div class="owl-wrapper-outer"><div class="owl-wrapper" style="width: 2640px; left: 0px; display: block;"><div class="owl-item" style="width: 220px;"><div class="col-md-4">
                                                        <div class="single-product">
                                                            <a href="#">
                                                                <img src="{{ asset('site/img/product/tab-p-1.jpg') }}" alt="">
                                                                <i class="fa fa-expand"></i>
                                                            </a>
                                                            <div class="product-info">
                                                                <h4><a href="#">SparkFun Badgers Intel</a></h4>

                                                                <button class="n-a-btn"><i class="fa fa-shopping-cart"></i>Details  </button>

                                                            </div>
                                                        </div>
                                                    </div></div><div class="owl-item" style="width: 220px;"><div class="col-md-4">
                                                        <div class="single-product">
                                                            <a href="#">
                                                                <img src="{{ asset('site/img/product/tab-p-2.jpg') }}" alt="">
                                                                <i class="fa fa-expand"></i>
                                                            </a>
                                                            <div class="product-info">
                                                                <h4><a href="#">SparkFun Badgers Intel</a></h4>

                                                                <button class="n-a-btn"><i class="fa fa-shopping-cart"></i>Details  </button>

                                                            </div>
                                                        </div>
                                                    </div></div><div class="owl-item" style="width: 220px;"><div class="col-md-4">
                                                        <div class="single-product">
                                                            <a href="#">
                                                                <img src="{{ asset('site/img/product/tab-p-4.jpg') }}" alt="">
                                                                <i class="fa fa-expand"></i>
                                                            </a>
                                                            <div class="product-info">
                                                                <h4><a href="#">SparkFun Badgers Intel</a></h4>

                                                                <button class="n-a-btn"><i class="fa fa-shopping-cart"></i>Details  </button>

                                                            </div>
                                                        </div>
                                                    </div></div><div class="owl-item" style="width: 220px;"><div class="col-md-4">
                                                        <div class="single-product">
                                                            <a href="#">
                                                                <img src="{{ asset('site/img/product/tab-p-5.jpg') }}" alt="">
                                                                <i class="fa fa-expand"></i>
                                                            </a>
                                                            <div class="product-info">
                                                                <h4><a href="#">SparkFun Badgers Intel</a></h4>

                                                                <button class="n-a-btn"><i class="fa fa-shopping-cart"></i>Details  </button>

                                                            </div>
                                                        </div>
                                                    </div></div><div class="owl-item" style="width: 220px;"><div class="col-md-4">
                                                        <div class="single-product">
                                                            <a href="#">
                                                                <img src="{{ asset('site/img/product/tab-p-6.jpg') }}" alt="">
                                                                <i class="fa fa-expand"></i>
                                                            </a>
                                                            <div class="product-info">
                                                                <h4><a href="#">SparkFun Badgers Intel</a></h4>

                                                                <button class="n-a-btn"><i class="fa fa-shopping-cart"></i>Details  </button>

                                                            </div>
                                                        </div>
                                                    </div></div><div class="owl-item" style="width: 220px;"><div class="col-md-4">
                                                        <div class="single-product">
                                                            <a href="#">
                                                                <img src="{{ asset('site/img/product/tab-p-7.jpg') }}" alt="">
                                                                <i class="fa fa-expand"></i>
                                                            </a>
                                                            <div class="product-info">
                                                                <h4><a href="#">SparkFun Badgers Intel</a></h4>

                                                                <button class="n-a-btn"><i class="fa fa-shopping-cart"></i>Details  </button>

                                                            </div>
                                                        </div>
                                                    </div></div></div></div>





                                        <div class="owl-controls clickable"><div class="owl-buttons"><div class="owl-prev"><i class="fa fa-angle-left"></i></div><div class="owl-next"><i class="fa fa-angle-right"></i></div></div></div></div>
                                </div>
                            </div>



                        </div>

                    </div>

                    <!--End of Features Kitchen Tab Area-->


                    <div class="features-tab clearfix">
                        <h3>Tools</h3>
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs navbar-right" role="tablist">
                            <li role="presentation" class="active"><a href="#staplers" aria-controls="staplers" role="tab" data-toggle="tab">Staplers</a></li>
                            <li role="presentation"><a href="#batteries" aria-controls="batteries" role="tab" data-toggle="tab">Drill Batteries</a></li>
                            <li role="presentation"><a href="#blades" aria-controls="blades" role="tab" data-toggle="tab">Saw Blades</a></li>
                            <li role="presentation"><a href="#drill" aria-controls="drill" role="tab" data-toggle="tab">Drill Bits</a></li>
                            <li role="presentation"><a href="#hoses" aria-controls="hoses" role="tab" data-toggle="tab">Hoses</a></li>
                            <li role="presentation"><a href="#v-all" aria-controls="v-all" role="tab" data-toggle="tab"> View all <i class="fa fa-angle-double-right"></i> </a></li>
                        </ul>
                    </div>
                    <div class="clearfix"></div>
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="men">

                            <div role="tabpanel" class="tab-pane" id="jewellery">
                                <div class="row">
                                    <div class="single-p-slide owl-carousel owl-theme" style="opacity: 1; display: block;">
                                        <div class="owl-wrapper-outer"><div class="owl-wrapper" style="width: 2640px; left: 0px; display: block;"><div class="owl-item" style="width: 220px;"><div class="col-md-4">
                                                        <div class="single-product">
                                                            <a href="#">
                                                                <img src="{{ asset('site/img/product/tab-p-1.jpg') }}" alt="">
                                                                <i class="fa fa-expand"></i>
                                                            </a>
                                                            <div class="product-info">
                                                                <h4><a href="#">SparkFun Badgers Intel</a></h4>

                                                                <button class="n-a-btn"><i class="fa fa-shopping-cart"></i>Details  </button>

                                                            </div>
                                                        </div>
                                                    </div></div><div class="owl-item" style="width: 220px;"><div class="col-md-4">
                                                        <div class="single-product">
                                                            <a href="#">
                                                                <img src="{{ asset('site/img/product/tab-p-2.jpg') }}" alt="">
                                                                <i class="fa fa-expand"></i>
                                                            </a>
                                                            <div class="product-info">
                                                                <h4><a href="#">SparkFun Badgers Intel</a></h4>

                                                                <button class="n-a-btn"><i class="fa fa-shopping-cart"></i>Details  </button>

                                                            </div>
                                                        </div>
                                                    </div></div><div class="owl-item" style="width: 220px;"><div class="col-md-4">
                                                        <div class="single-product">
                                                            <a href="#">
                                                                <img src="{{ asset('site/img/product/tab-p-3.jpg') }}" alt="">
                                                                <i class="fa fa-expand"></i>
                                                            </a>
                                                            <div class="product-info">
                                                                <h4><a href="#">SparkFun Badgers Intel</a></h4>

                                                                <button class="n-a-btn"><i class="fa fa-shopping-cart"></i>Details  </button>

                                                            </div>
                                                        </div>
                                                    </div></div><div class="owl-item" style="width: 220px;"><div class="col-md-4">
                                                        <div class="single-product">
                                                            <a href="#">
                                                                <img src="{{ asset('site/img/product/tab-p-4.jpg') }}" alt="">
                                                                <i class="fa fa-expand"></i>
                                                            </a>
                                                            <div class="product-info">
                                                                <h4><a href="#">SparkFun Badgers Intel</a></h4>

                                                                <button class="n-a-btn"><i class="fa fa-shopping-cart"></i>Details  </button>

                                                            </div>
                                                        </div>
                                                    </div></div><div class="owl-item" style="width: 220px;"><div class="col-md-4">
                                                        <div class="single-product">
                                                            <a href="#">
                                                                <img src="{{ asset('site/img/product/tab-p-5.jpg') }}" alt="">
                                                                <i class="fa fa-expand"></i>
                                                            </a>
                                                            <div class="product-info">
                                                                <h4><a href="#">SparkFun Badgers Intel</a></h4>

                                                                <button class="n-a-btn"><i class="fa fa-shopping-cart"></i>Details  </button>

                                                            </div>
                                                        </div>
                                                    </div></div><div class="owl-item" style="width: 220px;"><div class="col-md-4">
                                                        <div class="single-product">
                                                            <a href="#">
                                                                <img src="{{ asset('site/img/product/tab-p-6.jpg') }}" alt="">
                                                                <i class="fa fa-expand"></i>
                                                            </a>
                                                            <div class="product-info">
                                                                <h4><a href="#">SparkFun Badgers Intel</a></h4>

                                                                <button class="n-a-btn"><i class="fa fa-shopping-cart"></i>Details  </button>

                                                            </div>
                                                        </div>
                                                    </div></div></div></div>





                                        <div class="owl-controls clickable"><div class="owl-buttons"><div class="owl-prev"><i class="fa fa-angle-left"></i></div><div class="owl-next"><i class="fa fa-angle-right"></i></div></div></div></div>
                                </div>
                            </div>

                        </div>

                    </div>

                    <!--End of Features Tools Tab Area-->

                    <!--End of Features Gift Tab Area-->


                    <div class="features-tab clearfix">
                        <h3>Wine</h3>
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs navbar-right" role="tablist">
                            <li role="presentation" class="active"><a href="#wine" aria-controls="wine" role="tab" data-toggle="tab">wine Clubs</a></li>
                            <li role="presentation"><a href="#gift" aria-controls="gift" role="tab" data-toggle="tab">gift ideas</a></li>
                            <li role="presentation"><a href="#cavities" aria-controls="cavities" role="tab" data-toggle="tab"> red wine  </a></li>
                            <li role="presentation"><a href="#bottlered" aria-controls="bottlered" role="tab" data-toggle="tab">wine bottlered</a></li>
                            <li role="presentation"><a href="#vw-all" aria-controls="vw-all" role="tab" data-toggle="tab"> View all <i class="fa fa-angle-double-right"></i></a></li>
                        </ul>
                    </div>
                    <div class="clearfix"></div>
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="men">
                            <div role="tabpanel" class="tab-pane" id="women">
                                <div class="row">
                                    <div class="single-p-slide owl-carousel owl-theme" style="opacity: 1; display: block;">
                                        <div class="owl-wrapper-outer"><div class="owl-wrapper" style="width: 2640px; left: 0px; display: block;"><div class="owl-item" style="width: 220px;"><div class="col-md-4">
                                                        <div class="single-product">
                                                            <a href="#">
                                                                <img src="{{ asset('site/img/product/tab-p-4.jpg') }}" alt="">
                                                                <i class="fa fa-expand"></i>
                                                            </a>
                                                            <div class="product-info">
                                                                <h4><a href="#">SparkFun Badgers Intel</a></h4>

                                                                <button class="n-a-btn"><i class="fa fa-shopping-cart"></i>Details  </button>

                                                            </div>
                                                        </div>
                                                    </div></div><div class="owl-item" style="width: 220px;"><div class="col-md-4">
                                                        <div class="single-product">
                                                            <a href="#">
                                                                <img src="{{ asset('site/img/product/tab-p-2.jpg') }}" alt="">
                                                                <i class="fa fa-expand"></i>
                                                            </a>
                                                            <div class="product-info">
                                                                <h4><a href="#">SparkFun Badgers Intel</a></h4>

                                                                <button class="n-a-btn"><i class="fa fa-shopping-cart"></i>Details  </button>

                                                            </div>
                                                        </div>
                                                    </div></div><div class="owl-item" style="width: 220px;"><div class="col-md-4">
                                                        <div class="single-product">
                                                            <a href="#">
                                                                <img src="{{ asset('site/img/product/tab-p-8.jpg') }}" alt="">
                                                                <i class="fa fa-expand"></i>
                                                            </a>
                                                            <div class="product-info">
                                                                <h4><a href="#">SparkFun Badgers Intel</a></h4>

                                                                <button class="n-a-btn"><i class="fa fa-shopping-cart"></i>Details  </button>

                                                            </div>
                                                        </div>
                                                    </div></div><div class="owl-item" style="width: 220px;"><div class="col-md-4">
                                                        <div class="single-product">
                                                            <a href="#">
                                                                <img src="{{ asset('site/img/product/tab-p-6.jpg') }}" alt="">
                                                                <i class="fa fa-expand"></i>
                                                            </a>
                                                            <div class="product-info">
                                                                <h4><a href="#">SparkFun Badgers Intel</a></h4>
                                                                <button class="n-a-btn"><i class="fa fa-shopping-cart"></i>Details  </button>
                                                            </div>
                                                        </div>
                                                    </div></div><div class="owl-item" style="width: 220px;"><div class="col-md-4">
                                                        <div class="single-product">
                                                            <a href="#">
                                                                <img src="{{ asset('site/img/product/tab-p-1.jpg') }}" alt="">
                                                                <i class="fa fa-expand"></i>
                                                            </a>
                                                            <div class="product-info">
                                                                <h4><a href="#">SparkFun Badgers Intel</a></h4>

                                                                <button class="n-a-btn"><i class="fa fa-shopping-cart"></i>Details  </button>

                                                            </div>
                                                        </div>
                                                    </div></div><div class="owl-item" style="width: 220px;"><div class="col-md-4">
                                                        <div class="single-product">
                                                            <a href="#">
                                                                <img src="{{ asset('site/img/product/tab-p-3.jpg') }}" alt="">
                                                                <i class="fa fa-expand"></i>
                                                            </a>
                                                            <div class="product-info">
                                                                <h4><a href="#">SparkFun Badgers Intel</a></h4>

                                                                <button class="n-a-btn"><i class="fa fa-shopping-cart"></i>Details  </button>

                                                            </div>
                                                        </div>
                                                    </div></div></div></div>





                                        <div class="owl-controls clickable"><div class="owl-buttons"><div class="owl-prev"><i class="fa fa-angle-left"></i></div><div class="owl-next"><i class="fa fa-angle-right"></i></div></div></div></div>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>
            </div>
        </div>
        <!--End of Features Gift Tab Area-->
        <!--Newsletter Area Start-->
        <div class="newsletter-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="newsletter">
                            <h4>Newsletter</h4>
                            <p>Please send a letter to us, believe that the information promotion will not slip out of hand you</p>
                            <div class="row">
                                <div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1">
                                    <form id="news-form" action="#">
                                        <input type="text" placeholder="Your Email . ." name="s">
                                        <button type="submit">Subscribe</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End of Newsletter Area-->
        <!--Blog Feature Area Start-->
        <div class="newsletter-feature-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="feature-heading">
                            <h2>Latest Blog</h2>
                        </div>
                        <div class="single-blog">
                            <div class="blog-image white-hover">
                                <a href="#">

                                    <img src="{{ asset('site/img/blog/news-16.jpg') }}" alt="">
                                    <span><i class="fa fa-angle-right"></i></span>
                                </a>
                            </div>
                            <div class="blog-info">
                                <h4><a href="#">Meet the Season's <br>
                                        Must-Have Shoe</a></h4>
                                <div class="post_info">
                                    <p class="date">
                                        <span class="count">August 20, 2015</span>
                                    </p>
                                    <p class="author">By <span><a href="#">Bootexperts</a></span></p>
                                    <p class="comment">
                                        <i class="fa fa-comment-o"></i>
                                        <span><a href="#">1</a></span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="single-blog">
                            <div class="blog-image white-hover">
                                <a href="#">
                                    <img src="{{ asset('site/img/blog/news-17.jpg') }}" alt="">
                                    <span><i class="fa fa-angle-right"></i></span>
                                </a>
                            </div>
                            <div class="blog-info">
                                <h4><a href="#">Sint occaecat <br>
                                        cupidatat love 1</a></h4>
                                <div class="post_info">
                                    <p class="date">
                                        <span class="count">August 20, 2015</span>
                                    </p>
                                    <p class="author">By <span><a href="#">Bootexperts</a></span></p>
                                    <p class="comment">
                                        <i class="fa fa-comment-o"></i>
                                        <span><a href="#">6</a></span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="feature-heading">
                            <h2>Best Seller</h2>
                        </div>
                        <div class="widget-tab-slider-wrapper owl-carousel owl-theme" style="opacity: 0; display: block;">
                            <div class="owl-wrapper-outer"><div class="owl-wrapper" style="width: 400px; left: 0px; display: block;"><div class="owl-item" style="width: 100px;"><div class="widget-tab-slider">
                                            <div class="single-news">
                                                <div class="single-image">
                                                    <a href="#">

                                                        <img src="{{ asset('site/img/product/fashion/1.jpg') }}" alt="">
                                                    </a>
                                                </div>
                                                <div class="product-info">
                                                    <h4><a href="#">SparkFun Badgers Intel</a></h4>
                                                    <h5>$156.87 <span>$186.94</span></h5>
                                                    <div class="rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star grey"></i>
                                                        <i class="fa fa-star grey"></i>
                                                        <i class="fa fa-star grey"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="single-news">
                                                <div class="single-image">
                                                    <a href="#">
                                                        <img src="{{ asset('site/img/product/fashion/1.jpg') }}" alt="">
                                                    </a>
                                                </div>
                                                <div class="product-info">
                                                    <h4><a href="#">SparkFun Badgers Intel</a></h4>
                                                    <h5>$156.87 <span>$186.94</span></h5>
                                                    <div class="rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star grey"></i>
                                                        <i class="fa fa-star grey"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="single-news">
                                                <div class="single-image">
                                                    <a href="#">
                                                        <img src="{{ asset('site/img/product/fashion/8.jpg') }}" alt="">
                                                    </a>
                                                </div>
                                                <div class="product-info">
                                                    <h4><a href="#">SparkFun Badgers Intel</a></h4>
                                                    <h5>$156.87 <span>$186.94</span></h5>
                                                    <div class="rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star grey"></i>
                                                        <i class="fa fa-star grey"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div></div><div class="owl-item" style="width: 100px;"><div class="widget-tab-slider">
                                            <div class="single-news">
                                                <div class="single-image">
                                                    <a href="#">
                                                        <img src="{{ asset('site/img/product/fashion/11.jpg') }}" alt="">
                                                    </a>
                                                </div>
                                                <div class="product-info">
                                                    <h4><a href="#">SparkFun Badgers Intel</a></h4>
                                                    <h5>$156.87 <span>$186.94</span></h5>
                                                    <div class="rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star grey"></i>
                                                        <i class="fa fa-star grey"></i>
                                                        <i class="fa fa-star grey"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="single-news">
                                                <div class="single-image">
                                                    <a href="#">
                                                        <img src="{{ asset('site/img/product/fashion/5.jpg') }}" alt="">
                                                    </a>
                                                </div>
                                                <div class="product-info">
                                                    <h4><a href="#">SparkFun Badgers Intel</a></h4>
                                                    <h5>$156.87 <span>$186.94</span></h5>
                                                    <div class="rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star grey"></i>
                                                        <i class="fa fa-star grey"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="single-news">
                                                <div class="single-image">
                                                    <a href="#">
                                                        <img src="{{ asset('site/img/product/fashion/9.jpg') }}" alt="">
                                                    </a>
                                                </div>
                                                <div class="product-info">
                                                    <h4><a href="#">SparkFun Badgers Intel</a></h4>
                                                    <h5>$156.87 <span>$186.94</span></h5>
                                                    <div class="rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star grey"></i>
                                                        <i class="fa fa-star grey"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div></div></div></div>

                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="feature-heading">
                            <h2>Sale</h2>
                        </div>
                        <div class="widget-tab-slider-wrapper owl-carousel owl-theme" style="opacity: 0; display: block;">
                            <div class="owl-wrapper-outer"><div class="owl-wrapper" style="width: 400px; left: 0px; display: block;"><div class="owl-item" style="width: 100px;"><div class="widget-tab-slider">
                                            <div class="single-news">
                                                <div class="single-image">
                                                    <a href="#">
                                                        <img src="{{ asset('site/img/product/p-2.jpg') }}" alt="">
                                                    </a>
                                                </div>
                                                <div class="product-info">
                                                    <h4><a href="#">SparkFun Badgers Intel</a></h4>
                                                    <h5>$156.87 <span>$186.94</span></h5>
                                                    <div class="rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star grey"></i>
                                                        <i class="fa fa-star grey"></i>
                                                        <i class="fa fa-star grey"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="single-news">
                                                <div class="single-image">
                                                    <a href="#">

                                                        <img src="{{ asset('site/img/product/tab-p-1.jpg') }}" alt="">
                                                    </a>
                                                </div>
                                                <div class="product-info">
                                                    <h4><a href="#">SparkFun Badgers Intel</a></h4>
                                                    <h5>$156.87 <span>$186.94</span></h5>
                                                    <div class="rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star grey"></i>
                                                        <i class="fa fa-star grey"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="single-news">
                                                <div class="single-image">
                                                    <a href="#">
                                                        <img src="{{ asset('site/img/product/tab-p-1.jpg') }}" alt="">
                                                    </a>
                                                </div>
                                                <div class="product-info">
                                                    <h4><a href="#">SparkFun Badgers Intel</a></h4>
                                                    <h5>$156.87 <span>$186.94</span></h5>
                                                    <div class="rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star grey"></i>
                                                        <i class="fa fa-star grey"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div></div><div class="owl-item" style="width: 100px;"><div class="widget-tab-slider">
                                            <div class="single-news">
                                                <div class="single-image">
                                                    <a href="#">
                                                        <img src="{{ asset('site/img/product/tab-p-7.jpg') }}" alt="">
                                                    </a>
                                                </div>
                                                <div class="product-info">
                                                    <h4><a href="#">SparkFun Badgers Intel</a></h4>
                                                    <h5>$156.87 <span>$186.94</span></h5>
                                                    <div class="rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star grey"></i>
                                                        <i class="fa fa-star grey"></i>
                                                        <i class="fa fa-star grey"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="single-news">
                                                <div class="single-image">
                                                    <a href="#">

                                                        <img src="{{ asset('site/img/product/20.jpg') }}" alt="">
                                                    </a>
                                                </div>
                                                <div class="product-info">
                                                    <h4><a href="#">SparkFun Badgers Intel</a></h4>
                                                    <h5>$156.87 <span>$186.94</span></h5>
                                                    <div class="rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star grey"></i>
                                                        <i class="fa fa-star grey"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="single-news">
                                                <div class="single-image">
                                                    <a href="#">
                                                        <img src="{{ asset('site/img/product/tab-p-5.jpg') }}" alt="">
                                                    </a>
                                                </div>
                                                <div class="product-info">
                                                    <h4><a href="#">SparkFun Badgers Intel</a></h4>
                                                    <h5>$156.87 <span>$186.94</span></h5>
                                                    <div class="rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star grey"></i>
                                                        <i class="fa fa-star grey"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div></div></div></div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End of Blog Feature Area-->
        <!--Brand Area Start-->
        <div class="brand-area">
            <div class="container">
                <div class="row">
                    <div class="brand-wrapper owl-carousel owl-theme" style="opacity: 0; display: block;">
                        <div class="owl-wrapper-outer"><div class="owl-wrapper" style="width: 320px; left: 0px; display: block;"><div class="owl-item" style="width: 20px;"><div class="col-md-3">
                                        <div class="single-brand">
                                            {{ asset('site/img/brand/brand-1.png') }}
                                            <a href="#"><img src="{{ asset('site/img/brand/brand-1.png') }}" alt=""></a>
                                        </div>
                                    </div></div><div class="owl-item" style="width: 20px;"><div class="col-md-3">
                                        <div class="single-brand">
                                            <a href="#"><img src="{{ asset('site/img/brand/brand-2.png') }}" alt=""></a>
                                        </div>
                                    </div></div><div class="owl-item" style="width: 20px;"><div class="col-md-3">
                                        <div class="single-brand">
                                            <a href="#"><img src="{{ asset('site/img/brand/brand-3.png') }}" alt=""></a>
                                        </div>
                                    </div></div><div class="owl-item" style="width: 20px;"><div class="col-md-3">
                                        <div class="single-brand">
                                            <a href="#"><img src="{{ asset('site/img/brand/brand-4.png') }}" alt=""></a>
                                        </div>
                                    </div></div><div class="owl-item" style="width: 20px;"><div class="col-md-3">
                                        <div class="single-brand">
                                            <a href="#"><img src="{{ asset('site/img/brand/brand-1.png') }}" alt=""></a>
                                        </div>
                                    </div></div><div class="owl-item" style="width: 20px;"><div class="col-md-3">
                                        <div class="single-brand">
                                            <a href="#"><img src="{{ asset('site/img/brand/brand-2.png') }}" alt=""></a>
                                        </div>
                                    </div></div><div class="owl-item" style="width: 20px;"><div class="col-md-3">
                                        <div class="single-brand">
                                            <a href="#"><img src="{{ asset('site/img/brand/brand-3.png') }}" alt=""></a>
                                        </div>
                                    </div></div><div class="owl-item" style="width: 20px;"><div class="col-md-3">
                                        <div class="single-brand">
                                            <a href="#"><img src="{{ asset('site/img/brand/brand-4.png') }}" alt=""></a>
                                        </div>
                                    </div></div></div></div>







                    </div>
                </div>
            </div>
        </div>
        <!--End of Brand Area-->




    </div>
@endsection