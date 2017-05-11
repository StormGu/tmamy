<!--Header Area Start-->
<header>
    <div class="container">
        <div class="row">
            <div class="col-md-3 rtl">
                <div class="logo">
                    <a href="{{ url('/') }}"><img src="{{ url(config('settings.site_logo')) }}" /></a>
                </div>
            </div>
            <div class="col-md-7 ltr">
                @include('adforest.partials.search')
            </div>
            <div class="col-md-2 ltr" >

                <a class="btn btn-danger margin-top-30" href="{{ url('AddAdv') }}" style="padding: 15px 12px !important;">@lang('advertisement.post_free_ad')</a>
            </div>
        </div>
    </div>
</header>
<!--End of Header Area-->
<!--Mainmenu Area Start-->
<div class="mainmenu-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 ">
                <div class="mainmenu">
                    <nav>
                        <ul id="nav">
                            @foreach(\App\Models\Category::parents()->limit(11)->pluck('name', 'id') as $category_id => $category)
                                <li><a href="{{ url('category/' . $category_id) }}">{{$category}}</a>
                                    @if(\App\Models\Category::whereParentId($category_id)->whereHas('advertisements')->count())
                                    <div class="megamenu">
                                        <div class="megamenu-image clearfix">
                                            <div class="col-md-3 mega-banner">
                                                <div class="border-list">
                                                    @foreach(\App\Models\Category::whereParentId($category_id)->limit(15)->pluck('name', 'id') as $child_id => $child_name)
                                                        <a href="{{ url('category/' . $child_id) }}" class="mega-title">{{$child_name}}</a>
                                                        @if($loop->iteration % 5 == 0)
                                                </div>
                                            </div>
                                            <div class="col-md-3 mega-banner">
                                                <div class="border-list">
                                                    @endif
                                                    @endforeach

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                        @endif
                                </li>
                            @endforeach

                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Mobile Menu Area start -->
    <div class="mobile-menu-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="mobile-menu">
                        <nav id="dropdown">
                            <ul>
                                <li><a href="">HOME</a>
                                    <ul>
                                        <li><a href="">Home</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Mobile Menu Area end -->
</div>
<!--End of Mainmenu Area-->