@extends('adforest.layout.master')

@section('content')
    @include('adforest.home.slider')

    <!--Features Electronics Tab Area Start-->
    <div class="features-tab-area electronic">
        <div class="container" style="width: 1300px !important;">
            <div class="row">
                <div class="col-lg-3 col-md-3 hidden-sm rtl" style="    width: 270px !important;">

                    <aside class="widget widget-banner white-hover">
                        <div class="side-div">
                            <ul>
                                <li><a class="active" href="">most category</a></li>
                                @foreach(\App\Models\Category::parents()->has('advertisements')->pluck('name', 'id') as $category_id => $category_name)
                                    <li><a href="#">{{ $category_name }}</a> <a href="#" class="rits">2455</a></li>
                                @endforeach
                            </ul>
                        </div>

                        <div class="side-div" style="margin-top: 30px;height: 370px;">
                            <ul>
                                <li style="text-align: center;"><a class="active" href="">company fhtsher</a></li>
                                <li style="padding: 8px;"><img src=" img/bnr.png" style="width: 100%;"></li>
                                <li style="padding: 8px;"><img src=" img/bnr1.png" style="width: 100%;"></li>
                                <li style="padding: 8px;"><img src=" img/bnr2.png" style="width: 100%;"></li>
                                <li style="padding: 8px;"><img src=" img/bnr.png" style="width: 100%;"></li>
                            </ul>
                        </div>
                        <div class="app-img"><a href=""> <img src=" img/app.png"> </a></div>
                    </aside>
                </div>

                <div class="col-lg-6 col-md-9 col-sm-12" style="width: 750px !important;">
                    <!--Features Fashion Tab Area Start-->

                    @foreach(\App\Models\Category::parents()->has('advertisements')->pluck('name', 'id') as $category_id => $category_name)
                        <div class="features-tab clearfix">
                            <h3 class="medic"><img src=" icon/real-stat.png" alt="icon"
                                                   class="img-icon">{{ $category_name }}</h3>
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs navbar-right" role="tablist">
                                <div class="more more2">@lang('common.more')</div>
                            </ul>
                            <hr class="hr-main hr2">
                        </div>
                        <div class="clearfix"></div>
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="men">


                                <div role="tabpanel" class="tab-pane" id="jewellery">
                                    <div class="row">
                                        <div class="single-p-slide">
                                            @foreach (\App\Models\Advertisement::whereCategoryId($category_id)->approved()->get() as $adv)
                                                <div class="col-md-4">
                                                    <div class="single-product">
                                                        <a href="{{ url('adv/'. $adv->id) }}">
                                                            <img src="{{ url('image/190×244/' . $adv->image_filename) }}">
                                                            <i class="fa fa-expand"></i>
                                                        </a>
                                                        <div class="product-info">
                                                            <h4>
                                                                <a href="{{ url('adv/'. $adv->id) }}">{{ $adv->title }}</a>
                                                            </h4>

                                                            <button href="{{ url('adv/'. $adv->id) }}"
                                                                    class="n-a-btn">
                                                                <i class="fa fa-shopping-cart"></i>@lang('advertisement.view_details')
                                                            </button>

                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    @endforeach


                </div>


                <div class="col-lg-3 col-md-3 hidden-sm rtl"
                     style="    width: 270px !important;">
                    <section class="button">
                        <a href="#" class="btn bordered-style active">
                            <i class="icon-plane"></i>
                            Invite Friends
                        </a>
                    </section>
                    <aside id="promoted-adv" class="STICKY">


                        <h2 class="promoted-adv-title uppercase">
                            Sponsored
                        </h2>
                        <a id="ContentPlaceHolder1_Promoted_HLPromote"
                           class="new btn bordered-style" href="">Promote
                            Now</a>
                        <div class="sponsored" data-id="PromoteResult">


                            <div class="adv">
                                <div class="mbotn" data-category="shopping">
                                    <img src=" img/carr.png">
                                    <span class="colored"
                                          title=" cars / rent"> Cars / Rent</span>
                                </div>
                                <div class="cover">

                                    <a href="">
                                        <img src=" img/car.png">
                                    </a>

                                </div>
                                <a id="ContentPlaceHolder1_Promoted_HLPromote"
                                   class="new btn bordered-style"
                                   href="">Show Store</a>

                            </div>


                            <div class="adv">
                                <div class="mbotn1" data-category="shopping">
                                    <img src=" img/offers.png">
                                    <span class="colored" title=" cars / rent"> offers / ab hotel</span>
                                </div>
                                <div class="cover">

                                    <a href="">
                                        <img src=" img/car.png">
                                    </a>

                                </div>
                                <a id="ContentPlaceHolder1_Promoted_HLPromote"
                                   class="new btn bordered-style"
                                   href="">Show Store</a>

                            </div>


                            <div class="adv">
                                <div class="category-title" data-category="shopping">
                                    <i class="fa fa-opencart" aria-hidden="true"></i>
                                    <span class="colored"
                                          title=" Cameras &amp; Photos > Digital Cameras > SLR > Canon"> Cameras &amp; Photos &gt; Digital Cameras &gt; SLR &gt; Canon</span>
                                </div>
                                <div class="cover">

                                    <a href="">
                                        <img src=" img/ilan2.jpg">
                                    </a>

                                </div>
                                <h3>
                                    <a href="View/7246/Canon-EOS-600D">
                                        Canon EOS 600D
                                    </a>
                                </h3>
                                <p class="attr attr-location">
                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                    <span class="country">Beit Lahiya</span>
                                    <span class="city">Al-Balad</span>
                                </p>
                                <p class="attr attr-price">

                                    <i class="fa fa-forumbee" aria-hidden="true"></i>
                                    <span class="amount">570</span>
                                    <span class="currency">$</span>

                                </p>
                            </div>


                        </div>

                    </aside>


                </div>
            </div>
        </div>
        <!--End of Features Tools Tab Area-->

    </div>
    <!--End of Features Gift Tab Area-->

    @endsection