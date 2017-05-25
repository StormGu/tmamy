@extends('adforest.layout.master')

@section('content')
    @include('adforest.home.slider')

    @include('adforest.common.message')
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
                        @include('adforest.home.category')
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