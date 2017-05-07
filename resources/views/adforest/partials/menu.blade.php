<!-- Navigation Menu -->
<nav id="menu-1" class="mega-menu">
    <!-- menu list items container -->
    <section class="menu-list-items">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <!-- menu logo -->
                    <ul class="menu-logo">
                        <li><a href="{{ url('/') }}"><img src="{{ url(config('settings.site_logo')) }}" width="180"
                                                          height="40"></a></li>
                    </ul>
                    <!-- menu links -->
                    <ul class="menu-links">
                        <!-- active class -->
                        <li><a href="{{ url('/') }}"> @lang('titles.home')</a></li>
                        @foreach(\App\Models\Category::parents()->limit(5)->pluck('name', 'id') as $category_id => $category)
                            <li>
                                <a href="{{ url('/') }}"> {{$category}} <i
                                            class="fa fa-angle-down fa-indicator"></i></a>
                                <div class="drop-down grid-col-8">
                                    <!--grid row-->
                                    <div class="grid-row">
                                        <!--grid column 3-->
                                        <div class="grid-col-4">
                                            <ul>
                                                @foreach(\App\Models\Category::whereParentId($category_id)->limit(15)->pluck('name', 'id') as $child_id => $child_name)
                                                    <li><a href="">{{ $child_name }}</a></li>
                                                    @if($loop->iteration % 5 == 0)
                                            </ul>
                                        </div>
                                        <div class="grid-col-4">
                                            <ul>
                                                @endif
                                                @endforeach
                                            </ul>
                                        </div>

                                    </div>
                                </div>
                            </li>
                        @endforeach

                        <li><a href="{{ url('contact') }}">@lang('titles.contact') </a></li>
                    </ul>
                    <ul class="menu-search-bar">
                        <li>
                            <a href="PostAdvertisement" class="btn btn-light"><i class="fa fa-plus" aria-hidden="true"></i>
                                Post Free Ad</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</nav>