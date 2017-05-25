<header>
    <div class="container">
        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-2"></div>
            <div class="col-lg-2" style="">
                <center>
                    <div class="logo" style="width: 87px;">
                        <a href="{{ url('/') }}">
                            <img src="{{ url(config('settings.site_logo')) }}" style="margin-top: -50px;">
                        </a>
                    </div>
                </center>
            </div>
            <div class="col-lg-2"></div>
            <div class="col-lg-3"></div>
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
                <center>
                    <div class="mainmenu">
                        <nav>
                            <ul id="nav">
                                @php $categories = \App\Models\Category::parents()->limit(11)->with('children')->get(); @endphp
                                @foreach($categories as $category)
                                    <li data-category="{{ $category->name }}" style="margin-left: 0px;">
                                        <a href="{{ url('category/' . $category->id) }}">{{ $category->name }}</a>
                                        <div class="megamenu healths" style="opacity: 0.8;">
                                            <div class="megamenu-image clearfix">
                                                <div class="col-md-3 mega-banner">
                                                    <div class="none">
                                                        @foreach($category->children as $child)
                                                            <a href="{{ url('category/' . $child->id) }}"
                                                               class="mega-title">{{$child->name}}</a>
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
                                    </li>
                                @endforeach

                            </ul>
                        </nav>
                    </div>
                </center>
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
                                <li><a href="tamamy.html">HOME</a>
                                    <ul>
                                        <li><a href="tamamy.html">Home 2</a></li>
                                        <li><a href="tamamy.html">Home 3</a></li>
                                        <li><a href="tamamy.html">Home 4</a></li>
                                        <li><a href="tamamy.html">Home 5</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">SHOP</a>
                                    <ul>
                                        <li><a href="shop-grid.html">Shop Grid</a></li>
                                        <li><a href="shop-list.html">Shop List</a></li>
                                        <li><a href="product-details.html">Product Details</a></li>
                                    </ul>
                                </li>
                                <li><a href="about.html">ABOUT</a>
                                <li><a href="#">PAGES</a>
                                    <ul>
                                        <li><a href="account.html">My Account</a></li>
                                        <li><a href="cart.html">Cart</a></li>
                                        <li><a href="checkout.html">Checkout</a></li>
                                        <li><a href="wishlist.html">Wishlist</a></li>
                                        <li><a href="404.html">404 Error</a></li>
                                    </ul>
                                </li>
                                <li><a href="contact.html">CONTACT</a></li>
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
