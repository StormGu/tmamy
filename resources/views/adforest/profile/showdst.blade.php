@extends('adforest.layout.master')

@section('content')
    @include('adforest.home.slider')








    <div class="profile-data">
        <div class="container">

            <div class="image" data-user="avatar" data-type="B">
                <img id="imgAvatar" src="khaled.jpg">
                <div class="editable-image">
                    <div class="hover-button">
                        <i class="icon icon-camera"></i>
                        <a href="javascript:;" data-modal="changeAvatar">
                            Change Image</a>
                        <a data-do="delete">
                            Remove Image</a>
                    </div>
                </div>
            </div>



            <div class="details">
                <h3>Khaled Mofed </h3>
                <p class=""></p>





            </div>
            <ul class="st-social">
                <li><em>6</em><span>ADS</span></li>
                <li><em>128</em><span>Views</span></li>
                <li>
                    <em class="MyCounter">11</em>
                    <span>
                                        Likes</span>
                </li>
            </ul>

            <ul class="st-social rig100">
                <form action="{{ url('profile/SubscribeStore')}}" method="post">
                    {{ csrf_field() }}
                    <input type="hidden" name="store_id" value="{{ $store_id }}">
                    <input type="hidden" name="user_id" value="{{ Auth::id() }}">
                    <button type="submit" class="btn btn-default1 rig">@if(\App\Models\UserFollower::where('user_id', Auth::id())->count() == 0)  Subscribe Store @else
                            <a style="" href="{{ url('profile/disSubscribeStore/'. Auth::id() )}}">Unsubscribe Store </a>     @endif </button>
                </form>
                <form action="{{ url('profile/likeStore')}}" method="post">
                    {{ csrf_field() }}
                    <input type="hidden" name="store_id" value="{{ $store_id }}">
                    <input type="hidden" name="user_id" value="{{ Auth::id() }}">
                    <button type="submit" class="btn btn-default1 rig">@if(\App\Models\StoreLike::where('user_id', Auth::id())->count() == 0) Like Store @else
                              <a style="" href="{{ url('profile/dislikeStore/'. Auth::id() )}}"> DisLike Store </a> @endif </button></button>
                </form>

            </ul>
            <ul class="socail-share">
                <li>
                    <a href="javascript:;" target="_blank">
                        <i class="fa fa-facebook" aria-hidden="true"></i>
                    </a>
                </li>
                <li>
                    <a href="javascript:;" target="_blank">
                        <i class="fa fa-twitter" aria-hidden="true"></i>
                    </a>
                </li>
                <li>
                    <a href="javascript:;" target="_blank">
                        <i class="fa fa-google" aria-hidden="true"></i>
                    </a>
                </li>
                <li>
                    <a href="javascript:;" target="_blank">
                        <i class="fa fa-linkedin" aria-hidden="true"></i>
                    </a>
                </li>
                <li>
                    <a href="javascript:;" target="_blank">
                        <i class="fa fa-pinterest-p" aria-hidden="true"></i>
                    </a>
                </li>
            </ul>
            <div class="info">
                <p>
                    <i class="fa fa-calendar" aria-hidden="true"></i>
                    29 Aug 2015
                </p>
                <p>
                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                    Palestine Gaza
                </p>
                <p>
                    <i class="fa fa-mobile" aria-hidden="true"></i>
                    0599111111
                </p>
                <p>
                    <i class="fa fa-phone" aria-hidden="true"></i>
                    2887799
                </p>
            </div>

        </div>
    </div>

    <div class="profile-admin-menu">
        <div class="container">
            <ul class="st-bar-menu site_links">
                <li class=""><a href="#">
                        My Ads</a></li>
                <li><a href="#">
                        My Stores</a></li>

                <li><a href="#">
                        Notifications</a></li>
                <li><a href="#">
                        Social</a></li>
                <li><a href="#">
                        Financial</a></li>
                <li><a href="#">
                        Promote</a></li>
                <li><a href="#">
                        Power</a></li>
                <li class="menusettings"><a href="#"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                        Setting</a></li>
            </ul>

        </div>
    </div>
    <div class="container">


        <div id="ContentPlaceHolder1_ContentPlaceHolderMain_UserAds_UserMenu" class="ps-admin-sidemenu">
            <h4>Status</h4>
            <ul class="site_links">
                <li class="active" data-status="" data-count="0"><a href="#">
                        All</a></li>

                <li data-status="1" data-count="0"><a href="#">Approved</a></li>

                <li data-status="2" data-count="0"><a href="#">Blocked</a></li>

                <li data-status="5" data-count="0"><a href="#">Drafts Ads</a></li>

                <li data-status="4" data-count="0"><a href="#">Expired</a></li>

                <li data-status="0" data-count="0"><a href="#">Rejected</a></li>

                <li data-status="3" data-count="0"><a href="#">Waiting Approved</a></li>

                <li data-status="6" data-count="0"><a href="#">Waiting Edit Approval</a></li>

            </ul>
        </div>



        <div class="pf-content">
            <div class="pf-content-header ">

                <div class="account-filter">
                    <h4 data-title="">All Advertisement</h4>
                    <div class="filter-select">
                        <label for="ddlCat">
                            All Category
                        </label>
                        <select name="ctl00$ctl00$ContentPlaceHolder1$ContentPlaceHolderMain$UserAds$ddlCategories" id="ContentPlaceHolder1_ContentPlaceHolderMain_UserAds_ddlCategories" class="select-normal" tabindex="-1" style="display: none;">
                            <option value="-1">All Category</option>

                        </select><span class="select2 select2-container select2-container--default" dir="ltr"><span class="selection"><span class="select2-selection select2-selection--single" tabindex="0" role="combobox" aria-autocomplete="list" aria-haspopup="true" aria-expanded="false" aria-owns="select2-ContentPlaceHolder1_ContentPlaceHolderMain_UserAds_ddlCategories-results" aria-labelledby="select2-ContentPlaceHolder1_ContentPlaceHolderMain_UserAds_ddlCategories-container"><span class="select2-selection__rendered" id="select2-ContentPlaceHolder1_ContentPlaceHolderMain_UserAds_ddlCategories-container">All Category</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                    </div>
                    <div class="filter-search">
                        <i class="fa fa-search"></i>
                        <label class="placeholder placeholder-h" for="TxtTitle">Search</label>
                        <input name="ctl00$ctl00$ContentPlaceHolder1$ContentPlaceHolderMain$UserAds$TxtTitle" type="text" id="ContentPlaceHolder1_ContentPlaceHolderMain_UserAds_TxtTitle" class="TxtTitle">
                    </div>
                </div>

            </div>
            <div id="AdvContainer">

                    @foreach($Adve as $key)
                        <div class="col-md-4">
                            <div class="white category-grid-box-1 ">
                                <!-- Image Box -->
                                <div class="image">

                                    <img alt="Tour Package"
                                         src="{{ url( $key->image_filename) }}"
                                         class="img-responsive">
                                </div>
                                <!-- Short Description -->
                                <div class="short-description-1 ">
                                    <!-- Category Title -->

                                    <!-- Ad Title -->
                                    <h3>
                                        <a target="" href="{{ url('adv/'. $key->id) }}">{{ $key->title }}</a>
                                    </h3>
                                    <!-- Location -->
                                </div>
                                <!-- Ad Meta Stats -->
                                <div class="ad-info-1">
                                    <ul class="pull-left">
                                        <li><i class="fa fa-thumbs-up"></i> 123</li>
                                        <li><i class="fa fa-buysellads"></i> 123</li>
                                    </ul>

                                </div>
                            </div>
                        </div>
                        @endforeach




            </div>
            <img id="loader" alt="" src="/Files/ajax-loader.gif" style="float: right; display: none;">
        </div>

        <input type="hidden" name="ctl00$ctl00$ContentPlaceHolder1$ContentPlaceHolderMain$UserAds$hdnPageCount" id="ContentPlaceHolder1_ContentPlaceHolderMain_UserAds_hdnPageCount">
        <input type="hidden" name="ctl00$ctl00$ContentPlaceHolder1$ContentPlaceHolderMain$UserAds$hdnUserID" id="ContentPlaceHolder1_ContentPlaceHolderMain_UserAds_hdnUserID" value="2981">
        <input type="hidden" name="ctl00$ctl00$ContentPlaceHolder1$ContentPlaceHolderMain$UserAds$hdnrowsPerPage" id="ContentPlaceHolder1_ContentPlaceHolderMain_UserAds_hdnrowsPerPage" value="9">





        <aside id="promoted-adv" class="STICKY">

            <h2 class="promoted-adv-title uppercase">
                <span class="glyphicon glyphicon-bullhorn" aria-hidden="true"></span>        Sponsored
            </h2>
            <a id="ContentPlaceHolder1_Promoted_HLPromote" class="new btn bordered-style" href="http://www.daleelii.com/en/ps/Promote">Promote Now</a>
            <div class="sponsored" data-id="PromoteResult">





                <div class="adv">
                    <div class="category-title" data-category="shopping">
                        <i class="fa fa-opencart" aria-hidden="true"></i>
                        <span class="colored" title=" Mobile Phones > Models > Apple > iPhone 6 Plus"> Mobile Phones &gt; Models &gt; Apple &gt; iPhone 6 Plus</span>
                    </div>
                    <div class="cover">

                        <a href="">
                            <img src="ilan.jpg">
                        </a>

                    </div>
                    <h3>
                        <a href="">
                            Apple iphone 6 plus New
                        </a>
                    </h3>
                    <p class="attr attr-location">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                        <span class="country">Gaza</span>
                        <span class="city">AL-Remal</span>
                    </p>
                    <p class="attr attr-price">

                        <i class="fa fa-forumbee" aria-hidden="true"></i>
                        <span class="amount">900</span>
                        <span class="currency">$</span>

                    </p>
                </div>







                <div class="adv">
                    <div class="category-title" data-category="restaurants">
                        <i class="fa fa-opencart" aria-hidden="true"></i>
                        <span class="colored" title=" Fast Food"> Fast Food</span>
                    </div>
                    <div class="cover">

                        <a href="">
                            <img src="ilan2.jpg">
                        </a>

                    </div>
                    <h3>
                        <a href="">
                            Rosemary Boneless Chicken
                        </a>
                    </h3>
                    <p class="attr attr-location">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                        <span class="country">Rafah</span>
                        <span class="city">Al-Juneina</span>
                    </p>
                    <p class="attr attr-price">

                        <i class="fa fa-forumbee" aria-hidden="true"></i>
                        <span class="amount">39</span>
                        <span class="currency">₪</span>

                    </p>
                </div>







                <div class="adv">
                    <div class="category-title" data-category="shopping">
                        <i class="fa fa-opencart" aria-hidden="true"></i>
                        <span class="colored" title=" Home Appliances > Family Appliances > Cleaning Appliances > Vacuum Cleaners"> Home Appliances &gt; Family Appliances &gt; Cleaning Appliances &gt; Vacuum Cleaners</span>
                    </div>
                    <div class="cover">

                        <a href="">
                            <img src="ilan.jpg">
                        </a>

                    </div>
                    <h3>
                        <a href="">
                            مكنسة كهربائية Panasonic فاخرة
                        </a>
                    </h3>
                    <p class="attr attr-location">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                        <span class="country">Beit Lahiya</span>
                        <span class="city">Al-Balad</span>
                    </p>
                    <p class="attr attr-price">

                        <i class="fa fa-forumbee" aria-hidden="true"></i>
                        <span class="amount">130</span>
                        <span class="currency">₪</span>

                    </p>
                </div>







                <div class="adv">
                    <div class="category-title" data-category="shopping">
                        <i class="fa fa-opencart" aria-hidden="true"></i>
                        <span class="colored" title=" Cameras &amp; Photos > Digital Cameras > SLR > Canon"> Cameras &amp; Photos &gt; Digital Cameras &gt; SLR &gt; Canon</span>
                    </div>
                    <div class="cover">

                        <a href="">
                            <img src="ilan2.jpg">
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







                <div class="adv">
                    <div class="category-title" data-category="shopping">
                        <i class="fa fa-opencart" aria-hidden="true"></i>
                        <span class="colored" title=" Mobile Phones > Models > Samsung > Galaxy Star 2 Plus"> Mobile Phones &gt; Models &gt; Samsung &gt; Galaxy Star 2 Plus</span>
                    </div>
                    <div class="cover">

                        <a href="">
                            <img src="ilan.jpg">
                        </a>

                    </div>
                    <h3>
                        <a href="View/7247/Samsung-Galaxy-Star-2-plus-">
                            Samsung Galaxy Star 2 plus
                        </a>
                    </h3>
                    <p class="attr attr-location">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                        <span class="country">Beit Lahiya</span>
                        <span class="city">Al-Balad</span>
                    </p>
                    <p class="attr attr-price">

                        <i class="fa fa-forumbee" aria-hidden="true"></i>
                        <span class="amount">390</span>
                        <span class="currency">₪</span>

                    </p>
                </div>





            </div>

        </aside>
    </div>

@endsection