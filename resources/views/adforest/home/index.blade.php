@extends('adforest.layout.oldmaster')

@section('content')
    @include('adforest.home.slider')

    <!--Features Electronics Tab Area Start-->
    <div class="features-tab-area electronic">
        <div class="container" style="width: 1300px !important;">
            <div class="row">
                <div class="col-lg-12">
                    <div class="" style="margin-top: -391px;
    margin-bottom: 40px;
    border-radius: 4px 4px;
    opacity: 0.8;
    z-index: 289;
    margin-left: 130px;
    position: absolute;
    width: 1000px;">
                        {!! Form::open(['url' => url('search'), 'method' => 'get',  'style' => 'border-radius: 0px;background-color: #fff;']) !!}
                        <div class="input-group col-md-12 col-xs-12 col-sm-12">
                            {!! Form::text('keyword', isset($keyword)?$keyword:'', ['placeholder' => __('common.searchPlaceholder'), 'class' => 'form-control']) !!}

                            <span class="input-group-btn">
<button class="btn btn-theme" type="button" style="padding: 15px">
<span class=" glyphicon glyphicon-search"></span>
</button>
</span>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-lg-3 col-md-3 hidden-sm rtl" style="    width: 270px !important;">
                    <img src="{{ asset('adforest/logo/add-friend3.png') }}" style="display:none; margin-top: -66px;">

                    <aside class="widget widget-banner">
                        <div class="side-divv">
                            <ul style="    background: #ddd;">

                                <li style="background: #06776f;
    border-bottom: 4px solid #9ea7af;
    border-right: 1px solid #343a45;
    font-size: 19px;
    font-weight: 100;
    padding: 1px;
    text-align: left;
    text-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
    vertical-align: middle;"><a class="active" href=""
                                style="  margin-left:35px;  color: #ffffff;">@lang('category.main_categories')</a>
                                </li>
                                @foreach(\App\Models\Category::parents()->has('advertisements')->withCount('advertisements')->get() as $category)
                                    <li style="border-left: 3px solid #6e6f72;" data-category="realestate">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <a href="{{ url('category/'. $category->id) }}"
                                                   style="margin-left: -34px;">
                                                    <img src="{{ asset('adforest/logo/'.$category->name.'.png') }}"
                                                         style="width: 30px;
    height: 30px;
    margin-top: -1px;
    margin-left: 20px;">
                                                </a>
                                            </div>
                                            <div class="col-lg-9">
                                                <div class="row">
                                                    <div class="col-lg-8">
                                                        <a href="{{ url('category/'. $category->id) }}"
                                                           style="margin-left: -47px;">{{ $category->name }}</a>
                                                    </div>
                                                    <div class="col-lg-4" style="    margin-top: 35px;">
                                                        <a href="{{ url('category/'. $category->id) }}"
                                                           class="rits">{{ $category->advertisements_count }}</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach

                            </ul>
                        </div>

                        <div class="app-img"><a href=""><img src="{{ asset('adforest/logo/add-friend2.png') }}"> </a>
                        </div>
                        <div class="app-img"><a href=""><img src="{{ asset('adforest/logo/add-friend.png') }}"> </a>
                        </div>
                    </aside>

                </div>

                <div class="col-lg-6 col-md-9 col-sm-12" style="width: 750px !important;">

                    @foreach(\App\Models\Category::parents()->has('advertisements')->get() as $category)
                        <div class="features-tab clearfix">
                            <h3 class="medic"
                                @if ($category->bgcolor != '') style="color: {{ $category->bgcolor }} !important;" @endif>
                                @if($category->image != '')
                                    <img src="{{ url($category->image) }}" alt="icon" class="img-icon">
                                @endif
                                {{ $category->name }}
                            </h3>
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
                                    <div class="row">
                                        <section class="properties white-bg">
                                            <div class="single-p-slide">
                                                @foreach (\App\Models\Advertisement::whereCategoryId($category->id)->approved()->get() as $adv)
                                                    <div class="col-md-4 moons">
                                                        <div class="img" style="padding: 2px;
    min-height: 133px;">
                                                            <a href="{{ url('adv/'. $adv->id) }}">
                                                                <img class="img-responsive myimg"
                                                                     src="{{ url('image/190×140/' . $adv->id . '/' . $adv->image_filename) }}">
                                                            </a>
                                                        </div>
                                                        <div class="detail-sec">
                                                            <a style="color: #000000;font-size: 12px;font-weight: bold" href="{{ url('adv/'. $adv->id) }}">{{ $adv->title }}</a>
                                                            <br>
                                                            <span style="font-size: 12px;" class="locate"><i class="fa fa-map-marker"></i> Dubai,Uae</span>
                                                            <div class="share-p"><i class="fa fa-money"></i> <span class="price font-montserrat">70000/Year AED</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </section>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    @endforeach

                </div>


                <div class="col-lg-3 col-md-3 hidden-sm rtl"
                     style="    width: 270px !important;">
                    <img src="{{ asset('adforest/logo/add-friend1.png') }}" style=" display:none;   margin-top: -66px">
                    {{--<section class="button">--}}
                    {{--<a href="#" class="btn bordered-style active">--}}
                    {{--<i class="icon-plane"></i>--}}
                    {{--Invite Friends--}}
                    {{--</a>--}}
                    {{--</section>--}}
                    <aside id="promoted-adv" class="STICKY">


                        <h2 class="promoted-adv-title uppercase">
                            Sponsored
                        </h2>
                        <a id="ContentPlaceHolder1_Promoted_HLPromote"
                           class="new btn bordered-style" href="">Promote
                            Now</a>
                        <div class="sponsored" data-id="PromoteResult">


                            @foreach(\App\Models\Store::where('store_account_type_id', 1)->limit(2)->get() as $advm )


                                {{--<div class="adv">--}}
                                    {{--<div class="mbotn1" data-category="shopping">--}}

                                        {{--<img src="{{ url($advm->category->image) }}">--}}
                                        {{--<span class="colored" title=" cars / rent"> {{ $advm->category->name }}</span>--}}

                                    {{--</div>--}}
                                    {{--<div class="cover">--}}

                                        {{--<a href="{{ url('profile/ShowStoresDetails/' . $advm->id) }}">--}}
                                            {{--<img src="{{ url('image/190×244/' . $advm->logo_file_name) }}">--}}
                                        {{--</a>--}}

                                    {{--</div>--}}
                                    {{--<p>{{ $advm->name }}</p>--}}
                                    {{--<a id="ContentPlaceHolder1_Promoted_HLPromote"--}}
                                       {{--class="new btn bordered-style"--}}
                                       {{--href="{{ url('profile/ShowStoresDetails/' . $advm->id) }}">Show Store</a>--}}

                                {{--</div>--}}
                            @endforeach
                            <div class="adv">
                                <div class="category-title" data-category="shopping">
                                    <i class="fa fa-opencart" aria-hidden="true"></i>
                                    <span class="colored"
                                          title=" Cameras &amp; Photos > Digital Cameras > SLR > Canon"> Cameras &amp; Photos &gt; Digital Cameras &gt; SLR &gt; Canon</span>
                                </div>
                                <div class="cover">

                                    <a href="">
                                        <img src="adforest/img/ilan2.jpg">
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