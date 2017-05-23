@extends('adforest.layout.master')

@section('content')
    @include('adforest.home.slider')


    <div class="features-tab-area ">
        <div class="container" style="width: 1300px !important;">
            <div class="row">
                <div class="col-lg-12">
                    <div class="search-form" style="margin-top: -308px;
margin-bottom: 40px;
/* background-color: #fff; */
border-radius: 4px 4px;
opacity: 0.8;
z-index: 289;
margin-left: 130px;
position: absolute;
width: 1000px;">
                        {!! Form::open(['url' => url('search'), 'id' => 'search-form', 'method' => 'get',  'style' => 'border-radius: 0px;background-color: #fff;']) !!}
                        {!! Form::text('keyword', isset($keyword)?$keyword:'', ['placeholder' => __('common.searchPlaceholder')]) !!}
                        <button style="border-radius: 0px;" type="submit"><i class="fa fa-search"></i></button>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
            <div class="row">

                <div class="col-lg-9 col-md-9 col-sm-12">


                    @foreach(\App\Models\Category::parents()->has('advertisements')->get() as $category)
                        <div class="features-tab clearfix">
                            <h3 class="medic"
                                @if ($category->bgcolor != '') style="color: {{ $category->bgcolor }} !important;" @endif>
                                @if($category->image != '')
                                    <img src="{{ url($category->image) }}" alt="icon" class="img-icon">
                                @endif
                                {{ $category->name }}
                            </h3>
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs navbar-right" role="tablist">
                                <div>
                                    <a href="{{ url('category/' . $category->id) }}">
                                        <img src="{{ asset('adforest/logo/more11.png') }}" style="width: 30px;">
                                    </a>
                                </div>
                            </ul>
                            <hr class="hr-main hr2">
                        </div>
                        <div class="clearfix"></div>
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="men">
                                <div role="tabpanel" class="tab-pane" id="jewellery">
                                    <div class="">
                                        <section class="properties white-bg">
                                            <div class="single-p-slide owl-carousel owl-theme" style="opacity: 1; display: block;">


                                                <div class="owl-wrapper-outer">
                                                    <div class="owl-wrapper" style="width: 4720px; left: 0px; display: block;">

                                                        @foreach (\App\Models\Advertisement::whereCategoryId($category->id)->approved()->get() as $adv)
                                                            <div class="owl-item" style="margin-right: 15px; width: 236px;">
                                                                <div class="owl-item active oo" style="width: 236px;">
                                                                    <div class="image">
                                                                        <a  href="{{ url('adv/'. $adv->id) }}">
                                                                            <img
                                                                                 class="img-responsive "
                                                                                 src="{{ url('image/200×120/advertisements/' . $adv->id . '/' . $adv->image_filename) }}">
                                                                        </a>
                                                                    </div>
                                                                    <h3>
                                                                        <a class="rtl-text oo4"
                                                                           href="{{ url('adv/'. $adv->id) }}">{{ $adv->title }}</a>
                                                                    </h3>
                                                                    <p class="attr attr-location oo5">
                                                                        <i class="fa fa-map-marker"
                                                                           aria-hidden="true"></i>
                                                                        <span class="country">{{ $adv->country->name }}</span>
                                                                    </p>
                                                                    <p class="attr attr-price oo6">
                                                                        <i class="fa fa-gg" aria-hidden="true"></i>
                                                                        <span class="advprice"><span
                                                                                    class="amount OldPrice">{{ number_format($adv->price, 2) }}</span></span>
                                                                    </p>


                                                                    <div class="user-box oo7" data-type="B">
                                                                        {{--<img class="oo8" src="{{ url("images/profile/$adv->user_id/avatar/avatar.png") }}" style="width: 40px">--}}
                                                                        <a href="{{ url('profile/' . $adv->user_id) }}">
                                                                            <span class="name oo9">{{ $adv->user->name }}</span>
                                                                        </a>
                                                                        <span class="adv-feature oo10"><i
                                                                                    class="icon icon-user"></i></span>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                </div>
                                                <div class="owl-controls clickable">
                                                    <div class="owl-buttons">
                                                        <div class="owl-prev"><i class="fa fa-angle-left"></i></div>
                                                        <div class="owl-next"><i class="fa fa-angle-right"></i></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    @endforeach

                </div>


                <div class="col-lg-3 col-md-3 hidden-sm rtl">

                    <section class="button hidden">
                        <a href="#" class="btn bordered-style active">
                            Invite Frieds
                        </a>
                    </section>

                    <aside id="promoted-adv" class="STICKY">

                        <h2 class="promoted-adv-title uppercase">
                            <i class="fa fa-paper-plane-o" aria-hidden="true"></i>
                            Sponsored
                        </h2>
                        <a class="new btn bordered-style" href="">Promote Now</a>
                        <div class="sponsored" data-id="PromoteResult">

                            <div class="adv">
                                <div class="category-title" data-category="restaurants">
                                    <i class="fa fa-cutlery"></i>
                                    <span class="colored" title=" Burgers"> Burgers</span>
                                </div>
                                <div class="cover">

                                    <a href="View/7195/California-Chicken-Meal">
                                        <img src="img/burgur.jpg" alt="California Chicken Meal">
                                    </a>

                                </div>
                                <h3>
                                    <a href="View/7195/California-Chicken-Meal">
                                        California Chicken Meal
                                    </a>
                                </h3>
                                <p class="attr attr-location">
                                    <i class="fa fa-map-marker"></i>
                                    <span class="country">Dubai</span>
                                    <span class="city">Deira</span>
                                </p>
                                <p class="attr attr-price">

                                    <i class="fa fa-money"></i>
                                    <span class="amount">25</span>
                                    <span class="currency">AED</span>

                                </p>
                            </div>


                            <div class="adv">
                                <div class="category-title" data-category="restaurants">
                                    <i class="fa fa-cutlery"></i>
                                    <span class="colored" title=" American"> American</span>
                                </div>
                                <div class="cover">

                                    <a href="View/7191/Texas-Crunchy-Whopper-Sandwich">
                                        <img src="img/texas.jpg" alt="Texas Crunchy Whopper Sandwich">
                                    </a>

                                </div>
                                <h3>
                                    <a href="View/7191/Texas-Crunchy-Whopper-Sandwich">
                                        Texas Crunchy Whopper Sandwich
                                    </a>
                                </h3>
                                <p class="attr attr-location">
                                    <i class="fa fa-map-marker"></i>
                                    <span class="country">Dubai</span>
                                    <span class="city">Deira</span>
                                </p>
                                <p class="attr attr-price">

                                    <i class="fa fa-money"></i>
                                    <span class="amount">0</span>
                                    <span class="currency">AED</span>

                                </p>
                            </div>


                            <div class="adv">
                                <div class="category-title" data-category="realestate">
                                    <i class="fa fa-home"></i>
                                    <span class="colored" title=" Residential > For Sale > Flat"> Residential &gt; For Sale &gt; Flat</span>
                                </div>
                                <div class="cover">

                                    <a href="http://www.daleelii.com/en/ae/View/7189/شقة-فخمة-للبيع">
                                        <img src="http://www.daleelii.com//Files/Promote/a141286c-137f-4f5c-b82c-3df4cbcd3c9d.jpg?w=260&amp;h=120"
                                             alt="شقة فخمة للبيع">
                                    </a>

                                </div>
                                <h3>
                                    <a href="http://www.daleelii.com/en/ae/View/7189/شقة-فخمة-للبيع">
                                        شقة فخمة للبيع
                                    </a>
                                </h3>
                                <p class="attr attr-location">
                                    <i class="fa fa-map-marker"></i>
                                    <span class="country">Dubai</span>
                                    <span class="city">Deira</span>
                                </p>
                                <p class="attr attr-price">

                                    <i class="fa fa-money"></i>
                                    <span class="amount">185000</span>
                                    <span class="currency">AED</span>

                                </p>
                            </div>


                            <div class="adv">
                                <div class="category-title" data-category="vehicles">
                                    <i class="fa fa-car"></i>
                                    <span class="colored" title=" Cars &amp; SUVs > Ford > Other"> Cars &amp; SUVs &gt; Ford &gt; Other</span>
                                </div>
                                <div class="cover">

                                    <a href="http://www.daleelii.com/en/ae/View/7188/فورد-اسكايب-2011">
                                        <img src="http://www.daleelii.com//Files/Promote/23903ebd-37fe-430a-9b4c-57556ec30f03.jpg?w=260&amp;h=120"
                                             alt="فورد اسكايب 2011">
                                    </a>

                                </div>
                                <h3>
                                    <a href="http://www.daleelii.com/en/ae/View/7188/فورد-اسكايب-2011">
                                        فورد اسكايب 2011
                                    </a>
                                </h3>
                                <p class="attr attr-location">
                                    <i class="fa fa-map-marker"></i>
                                    <span class="country">Dubai</span>
                                    <span class="city">Deira</span>
                                </p>
                                <p class="attr attr-price">

                                    <i class="fa fa-money"></i>
                                    <span class="amount">34000</span>
                                    <span class="currency">AED</span>

                                </p>
                            </div>


                            <div class="adv">
                                <div class="category-title" data-category="vehicles">
                                    <i class="fa fa-car"></i>
                                    <span class="colored" title=" Cars &amp; SUVs > Mercedes - Benz > Other"> Cars &amp; SUVs &gt; Mercedes - Benz &gt; Other</span>
                                </div>
                                <div class="cover">

                                    <a href="http://www.daleelii.com/en/ae/View/7187/مرسدس-2007-كت-2012-ممتاز-من-الداخل-والخارج-إعلان">
                                        <img src="http://www.daleelii.com//Files/Promote/4c7dc028-1377-4399-8633-42330b7f1caf.jpg?w=260&amp;h=120"
                                             alt="مرسدس 2007 كت 2012 ممتاز من الداخل والخارج إعلان">
                                    </a>

                                </div>
                                <h3>
                                    <a href="http://www.daleelii.com/en/ae/View/7187/مرسدس-2007-كت-2012-ممتاز-من-الداخل-والخارج-إعلان">
                                        مرسدس 2007 كت 2012 ممتاز من الداخل والخارج إعلان
                                    </a>
                                </h3>
                                <p class="attr attr-location">
                                    <i class="fa fa-map-marker"></i>
                                    <span class="country">Dubai</span>
                                    <span class="city">Deira</span>
                                </p>
                                <p class="attr attr-price">

                                    <i class="fa fa-money"></i>
                                    <span class="amount">75000</span>
                                    <span class="currency">AED</span>

                                </p>
                            </div>


                            <div class="adv">
                                <div class="category-title" data-category="shopping">
                                    <i class="fa fa-shopping-cart"></i>
                                    <span class="colored"
                                          title=" Computers &amp; Software > Laptops &amp; Notebooks > Laptops > Apple"> Computers &amp; Software &gt; Laptops &amp; Notebooks &gt; Laptops &gt; Apple</span>
                                </div>
                                <div class="cover">

                                    <a href="http://www.daleelii.com/en/ae/View/7184/Macbook-Air-13-inches">
                                        <img src="http://www.daleelii.com//Files/Promote/d4ded934-003f-4b42-9828-026e08a02871.jpg?w=260&amp;h=120"
                                             alt="Macbook Air 13 inches">
                                    </a>

                                </div>
                                <h3>
                                    <a href="http://www.daleelii.com/en/ae/View/7184/Macbook-Air-13-inches">
                                        Macbook Air 13 inches
                                    </a>
                                </h3>
                                <p class="attr attr-location">
                                    <i class="fa fa-map-marker"></i>
                                    <span class="country">Dubai</span>
                                    <span class="city">Deira</span>
                                </p>
                                <p class="attr attr-price">

                                    <i class="fa fa-money"></i>
                                    <span class="amount">3500</span>
                                    <span class="currency">AED</span>

                                </p>
                            </div>


                            <div class="adv">
                                <div class="category-title" data-category="shopping">
                                    <i class="fa fa-shopping-cart"></i>
                                    <span class="colored" title=" Mobile Phones > Models > Apple > iPhone 6 Plus"> Mobile Phones &gt; Models &gt; Apple &gt; iPhone 6 Plus</span>
                                </div>
                                <div class="cover">

                                    <a href="http://www.daleelii.com/en/ae/View/7182/iphone-6-plus">
                                        <img src="http://www.daleelii.com//Files/Promote/07d22891-eeb8-4707-9bde-c868728b5aa9.png?w=260&amp;h=120"
                                             alt="iphone 6 plus">
                                    </a>

                                </div>
                                <h3>
                                    <a href="http://www.daleelii.com/en/ae/View/7182/iphone-6-plus">
                                        iphone 6 plus
                                    </a>
                                </h3>
                                <p class="attr attr-location">
                                    <i class="fa fa-map-marker"></i>
                                    <span class="country">Dubai</span>
                                    <span class="city">Deira</span>
                                </p>
                                <p class="attr attr-price">

                                    <i class="fa fa-money"></i>
                                    <span class="amount">2900</span>
                                    <span class="currency">AED</span>

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