<!--Mainmenu Area Start-->
<div class="mainmenu-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12  col-md-12 ">
                <div class="mainmenu">
                    <nav>
                        <ul id="nav">
                            <li><a href="{{ url('home') }}">@lang('titles.home')</a></li>
                            @foreach(\App\Models\Category::parents()->pluck('name', 'id') as $category_id => $category)
                                <li>
                                    <a href="">{{ $category }}</a>
                                    <ul class="sub-menu">
                                        @foreach(\App\Models\Category::whereParentId($category_id)->pluck('name', 'id') as $child_id => $child_name)
                                            <li><a href="">{{ $child_name }}</a></li>
                                        @endforeach
                                    </ul>
                                </li>
                            @endforeach
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!--End of Mainmenu Area-->
