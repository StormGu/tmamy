@extends('site.layout.master')

@section('content')
    @include('site.home.slider')

    <!--Slider Area Start-->
    <div class="slider-area">

        <!--Features Menus Tab Area Start-->
        <div class="features-tab-area Menu">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-3 hidden-sm">
                        <div class="p-widget-title compare">
                            <div class="left-sidebar-title"><h3>Sponsered</h3></div>
                        </div>
                        <aside class="widget widget-banner white-hover">
                            @foreach(\App\Models\Advertisement::sponsered()->get() as $sponsered)
                                <a href="{{ url('adv/'. $sponsered->id) }}" class="brand-img">
                                    <img src="{{ url('image/262×262/' . $sponsered->image_filename ) }}">
                                </a>
                            <br>
                                <a href="{{ url('adv/'. $sponsered->id) }}" >
                                    <h4>
                                    {{ $sponsered->title }}
                                    </h4>
                                </a>
                            @endforeach

                        </aside>
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-12">
                        @foreach(\App\Models\Category::parents()->has('advertisements')->pluck('name', 'id') as $category_id => $category_name)
                            <div>
                                <div class="features-tab clearfix">
                                    <h3>{{ $category_name }}</h3>
                                </div>
                                <div class="clearfix"></div>


                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane active" id="laptop">


                                        <div role="tabpanel" class="tab-pane" id="tivi">
                                            <div class="row">
                                                <div class="single-p-slide">
                                                    @foreach (\App\Models\Advertisement::whereCategoryId($category_id)->approved()->get() as $adv)
                                                        <div class="col-md-4">
                                                            <div class="single-product">
                                                                <a href="{{ url('adv/'. $adv->id) }}">
                                                                    <img src="{{ url('image/190×244/' . $adv->image_filename) }}"/>
                                                                    <i class="fa fa-expand"></i>
                                                                </a>
                                                                <div class="product-info">
                                                                    <h4>
                                                                        <a href="{{ url('adv/'. $adv->id) }}">{{ $adv->title }}</a>
                                                                    </h4>
                                                                    <div>
                                                                        {{ $adv->price }}<br>
                                                                        User: {{ $adv->customer->name }}
                                                                    </div>
                                                                    <a href="{{ url('adv/'. $adv->id) }}"
                                                                       class="n-a-btn"><i
                                                                                class="fa fa-shopping-cart"></i>Details
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endforeach

                                                </div>
                                            </div>
                                        </div>


                                    </div>

                                </div>

                                <!--End of Menus Features Tab Area-->
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection