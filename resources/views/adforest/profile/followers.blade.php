@extends('adforest.layout.oldmaster')

@section('content')
   
        <!-- Main Container -->
        @include('adforest.profile.head')
       

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

                    
   <div class="pf-content">
   
    <div id="AdvContainer" data-tab="Love" style="display: none;"></div>
    <div class="user-list" data-tab="Followers" style="">
   
    




            


            @foreach(\App\Models\UserFollower::where('user_id', $object->id)->get() as $key)

            <div class="adv-advertiser" data-cardcontainer="" data-type="B">
                <div class="cover-data">
                  <img src="eew.jpg" alt="Customers Support" style="display: block;"> 
                </div>
                <div class="image"><a href="{{ url('profile/'. $key->user_followers_id) }}">
                  <img src="eeq.jpg" alt="Customers Support" style="display: block;"> </a>
                </div>
                <div class="username">
                   <a href="{{ url('profile/'. $key->user_followers_id) }}"> {{ $key->user_followers_name }}</a>
                </div>
                       
                <button data-action="Follow" data-followbtn="" class="btn bordered-style active" data-id="807" data-active="false" data-alttext="Following">Follow</button>
                <div class="following">
                    <span class="num">0</span>
                    <span class="type">Following</span>
                </div>
<div class="follower">
                    <span class="num" data-followercounter="">3</span>
                    <span class="type">Follower</span>
                </div>
            </div>
   @endforeach
</div>
    <div class="user-list" data-tab="Following" style="display: none;">
    </div>
    <div class="user-list" data-tab="Subscribes" style="display: none;">
        

        

    </div>
    <div class="user-list" data-tab="Likes" style="display: none;">
    </div>
    <img id="loader" alt="" src="/Files/ajax-loader.gif" style="float: right; display: none;">
</div>

                       




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