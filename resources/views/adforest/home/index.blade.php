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
                    @if(isset($objects))

                        @foreach($objects as $key => $advertisements)
                            @php $category = \App\Models\Category::find($key) @endphp
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
                                                <div class="single-p-slide owl-carousel owl-theme"
                                                     style="opacity: 1; display: block;">


                                                    <div class="owl-wrapper-outer">
                                                        <div class="owl-wrapper"
                                                             style="width: 4720px; left: 0px; display: block;">

                                                            @foreach($advertisements as $adv)
                                                                <div class="owl-item"
                                                                     style="margin-right: 15px; width: 236px;">
                                                                    <div class="owl-item active oo"
                                                                         style="width: 236px;">
                                                                        <div class="image">
                                                                            <a href="{{ url('adv/'. $adv->id) }}">
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
                                                                            <span class="country">@if(isset($adv->country)){{ $adv->country->name }}@endif</span>
                                                                        </p>
                                                                        <p class="attr attr-price oo6">
                                                                            <i class="fa fa-gg" aria-hidden="true"></i>
                                                                            <span class="advprice"><span
                                                                                        class="amount OldPrice">{{ number_format($adv->price, 2) }}</span></span>
                                                                        </p>


                                                                        <div class="user-box oo7" data-type="B">
                                                                            {{--<img class="oo8" src="{{ url("images/profile/$adv->user_id/avatar/avatar.png") }}" style="width: 40px">--}}
                                                                            <a href="{{ url('profile/' . $adv->user_id) }}">
                                                                                <span class="name oo9">@if(isset($adv->user)){{ $adv->user->name }}@endif</span>
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
                                                            <div class="owl-next"><i class="fa fa-angle-right"></i>
                                                            </div>
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
                    @endif


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
                        <div class="clearfix"></div>
                        <div class="sponsored" data-id="PromoteResult">
                            @foreach(\App\Models\Store::where('store_account_type_id', 1)->limit(2)->get() as $store )
                                <div class="adv">
                                    <div class="category-title" data-category="restaurants">
                                        <i class="fa fa-cutlery"></i>
                                        <span class="colored">{{ $store->category->name }}</span>
                                    </div>
                                    <div class="cover">

                                        <a href="{{ url('store/' . $store->id) }}">
                                            <img src="http://www.daleelii.com//Files/Promote/d4ded934-003f-4b42-9828-026e08a02871.jpg?w=260&h=120">
                                        </a>

                                    </div>
                                    <h3>
                                        <a href="{{ url('store/' . $store->id) }}">
                                            {{ $store->title }}
                                        </a>
                                    </h3>
                                </div>
                            @endforeach


                        </div>

                    </aside>


                </div>
            </div>
        </div>
        <!--End of Features Tools Tab Area-->

    </div>
    <!--End of Features Gift Tab Area-->

@endsection