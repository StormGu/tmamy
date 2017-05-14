
<!--Header Area Start-->
<header>
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
            </div>
            <div class="col-lg-2">
            </div>
            <div class="col-lg-2" style="">
                <div class="logo" style="width: 87px;">
                    <a href="{{ url('/') }}">
                        <img src="{{ url(config('settings.site_logo')) }}" style="margin-top: -50px;">
                    </a>
                </div>
            </div>
            <div class="col-lg-2"></div>
            <div class="col-lg-3"></div>
        </div>
    </div>
</header>

<div class="mainmenu-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 ">
                <div class="mainmenu">
                    <nav>
                        <ul id="nav">
                            @foreach(\App\Models\Category::parents()->limit(11)->pluck('name', 'id') as $category_id => $category)
                                <li data-category="{{ $category }}" style="margin-left: 0px;">
                                    <a href="{{ url('category/' . $category_id) }}">{{ $category }}</a>
                                    @if(\App\Models\Category::whereParentId($category_id)->whereHas('advertisements')->count())
                                        <div class="megamenu healths" style="opacity: 0.8;">
                                            <div class="megamenu-image clearfix">
                                                <div class="col-md-3 mega-banner">
                                                    <div class="none">
                                                        @foreach(\App\Models\Category::whereParentId($category_id)->limit(15)->pluck('name', 'id') as $child_id => $child_name)
                                                            <a href="{{ url('category/' . $child_id) }}"
                                                               class="mega-title">{{$child_name}}</a>
                                                            @if($loop->iteration % 5 == 0)
                                                    </div>
                                                </div>
                                                <div class="col-md-3 mega-banner">
                                                    <div class="none">
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
</div>
