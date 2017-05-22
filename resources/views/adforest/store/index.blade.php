@extends('adforest.layout.oldmaster')

@section('breadcrumbs')
    @include('adforest.partials.breadcrumbs', ['breadcrumbs' => $breadcrumbs])
@endsection

@section('content')
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
                        <input name="ctl00$ctl00$ContentPlaceHolder1$ContentPlaceHolderMain$UserAds$TxtTitle" id="ContentPlaceHolder1_ContentPlaceHolderMain_UserAds_TxtTitle" class="TxtTitle" type="text">
                    </div>
                </div>

            </div>
            <div id="AdvContainer"></div>
            <img id="loader" alt="" src="/Files/ajax-loader.gif" style="float: right; display: none;">




            <div class="pf-content">

                <div id="AdvContainer" data-tab="Love" style="display: none;"></div>
                <div class="user-list" data-tab="Followers" style="">



                    <div class="adv-advertiser" data-cardcontainer="" data-type="B">
                        <div class="cover-data">
                            <img src="eew.jpg" alt="Customers Support" style="display: block;">
                        </div>
                        <div class="image"><a href="">
                                <img src="eeq.jpg" alt="Customers Support" style="display: block;"> </a>
                        </div>
                        <div class="username">
                            <a href="http://www.daleelii.com/en/ps/ViewUserProfile?ID=481"> Customers Support </a>
                        </div>

                        <div class="info" style="
    display: inline-flex;
    margin: 0px;
    width: 100%;
    height: 50px;
    background: #f1f1f1;
    padding: 15px;
">
                            <p style="
    margin-right: 15px;
"><i class="fa fa-thumbs-up" aria-hidden="true" style="
    margin-right: 5px;
"></i> 0</p>
                            <p><i class="fa fa-suitcase" aria-hidden="true" style="
    margin-right: 5px;
  "></i> <span> 0 </span>ADS</p>

                        </div>
                        <p style="
    padding: 5px;
    padding-left: 15px;
    color: #00a8e9;
"><i class="fa fa-spinner" aria-hidden="true"></i> Complete</p>
                    </div>




                    <div class="adv-advertiser" data-cardcontainer="" data-type="B">
                        <div class="cover-data">
                            <img src="eew.jpg" alt="Customers Support" style="display: block;">
                        </div>
                        <div class="image"><a href="">
                                <img src="eeq.jpg" alt="Customers Support" style="display: block;"> </a>
                        </div>
                        <div class="username">
                            <a href="http://www.daleelii.com/en/ps/ViewUserProfile?ID=481"> Customers Support </a>
                        </div>
                        <div class="info" style="
    display: inline-flex;
    margin: 0px;
    width: 100%;
    height: 50px;
    background: #f1f1f1;
    padding: 15px;
">
                            <p style="
    margin-right: 15px;
"><i class="fa fa-thumbs-up" aria-hidden="true" style="
    margin-right: 5px;
"></i> 0</p>
                            <p><i class="fa fa-suitcase" aria-hidden="true" style="
    margin-right: 5px;
  "></i> <span> 0 </span>ADS</p>

                        </div>
                        <p style="
    padding: 5px;
    padding-left: 15px;
    color: #00a8e9;
"><i class="fa fa-spinner" aria-hidden="true"></i> Complete</p>
                    </div>



                    <div class="adv-advertiser" data-cardcontainer="" data-type="B">
                        <div class="cover-data">
                            <img src="eew.jpg" alt="Customers Support" style="display: block;">
                        </div>
                        <div class="image"><a href="">
                                <img src="eeq.jpg" alt="Customers Support" style="display: block;"> </a>
                        </div>
                        <div class="username">
                            <a href=""> Customers Support </a>
                        </div>
                        <div class="info" style="
    display: inline-flex;
    margin: 0px;
    width: 100%;
    height: 50px;
    background: #f1f1f1;
    padding: 15px;
">
                            <p style="
    margin-right: 15px;
"><i class="fa fa-thumbs-up" aria-hidden="true" style="
    margin-right: 5px;
"></i> 0</p>
                            <p><i class="fa fa-suitcase" aria-hidden="true" style="
    margin-right: 5px;
  "></i> <span> 0 </span>ADS</p>

                        </div>
                        <p style="
    padding: 5px;
    padding-left: 15px;
    color: yellowgreen;
"><i class="fa fa-spinner" aria-hidden="true"></i>Un Complete</p>
                    </div>









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

        <input name="ctl00$ctl00$ContentPlaceHolder1$ContentPlaceHolderMain$UserAds$hdnPageCount" id="ContentPlaceHolder1_ContentPlaceHolderMain_UserAds_hdnPageCount" type="hidden">
        <input name="ctl00$ctl00$ContentPlaceHolder1$ContentPlaceHolderMain$UserAds$hdnUserID" id="ContentPlaceHolder1_ContentPlaceHolderMain_UserAds_hdnUserID" value="2981" type="hidden">
        <input name="ctl00$ctl00$ContentPlaceHolder1$ContentPlaceHolderMain$UserAds$hdnrowsPerPage" id="ContentPlaceHolder1_ContentPlaceHolderMain_UserAds_hdnrowsPerPage" value="9" type="hidden">





        <aside id="promoted-adv" class="STICKY">



            <h2 class="promoted-adv-title uppercase">
                <span class="glyphicon glyphicon-bullhorn" aria-hidden="true"></span>        Sponsored
            </h2>
            <a id="ContentPlaceHolder1_Promoted_HLPromote" class="new btn bordered-style" href="http://www.daleelii.com/en/ps/Promote" style="padding: 0 8px !important;">Promote Now</a>
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
            <input name="ctl00$ctl00$ContentPlaceHolder1$Promoted$hdnPromoteData" id="ContentPlaceHolder1_Promoted_hdnPromoteData" value="[{&quot;Row_num&quot;:1,&quot;Id&quot;:17,&quot;Title&quot;:&quot;Apple iphone 6 plus New&quot;,&quot;CoverFileName&quot;:&quot;2c891e46-8c47-4415-988e-b07c43297131.jpg&quot;,&quot;Description&quot;:&quot;Apple iphone 6 plus New Apple iphone 6 plus NewApple iphone 6 plus NewApple iphone 6 plus New&quot;,&quot;Link&quot;:&quot;&quot;,&quot;LogoFileName&quot;:&quot;&quot;,&quot;Date&quot;:&quot;2015-06-11T21:13:46.097&quot;,&quot;status&quot;:1,&quot;PromotionItemId&quot;:1463,&quot;PromotionTypeId&quot;:2,&quot;path&quot;:&quot;/Files/Promote/&quot;,&quot;ButtonTitle&quot;:null,&quot;Price&quot;:900.0,&quot;CategoryPath&quot;:&quot; Mobile Phones > Models > Apple > iPhone 6 Plus&quot;,&quot;CityName&quot;:&quot;Gaza&quot;,&quot;RegionName&quot;:&quot;AL-Remal&quot;,&quot;AdvLogo&quot;:&quot;shopping&quot;,&quot;IsPriceShow&quot;:true,&quot;LikeCount&quot;:null,&quot;Symbol&quot;:&quot;$&quot;,&quot;StoreCategory&quot;:null,&quot;StoreType&quot;:null,&quot;StoreLike&quot;:null,&quot;SubCategory&quot;:&quot;Mobile Phones&quot;},{&quot;Row_num&quot;:2,&quot;Id&quot;:2196,&quot;Title&quot;:&quot;Rosemary Boneless Chicken&quot;,&quot;CoverFileName&quot;:&quot;edd98399-4407-4a63-8730-24a65d00cf47.jpg&quot;,&quot;Description&quot;:&quot;Grilled Chicken Thighs with Rosemary and Garlic Souyce&quot;,&quot;Link&quot;:&quot;&quot;,&quot;LogoFileName&quot;:&quot;&quot;,&quot;Date&quot;:&quot;2017-01-11T16:59:53.043&quot;,&quot;status&quot;:4,&quot;PromotionItemId&quot;:7175,&quot;PromotionTypeId&quot;:2,&quot;path&quot;:&quot;/Files/Promote/&quot;,&quot;ButtonTitle&quot;:null,&quot;Price&quot;:39.0,&quot;CategoryPath&quot;:&quot; Fast Food&quot;,&quot;CityName&quot;:&quot;Rafah&quot;,&quot;RegionName&quot;:&quot;Al-Juneina&quot;,&quot;AdvLogo&quot;:&quot;restaurants&quot;,&quot;IsPriceShow&quot;:true,&quot;LikeCount&quot;:null,&quot;Symbol&quot;:&quot;₪&quot;,&quot;StoreCategory&quot;:null,&quot;StoreType&quot;:null,&quot;StoreLike&quot;:null,&quot;SubCategory&quot;:&quot;Fast Food&quot;},{&quot;Row_num&quot;:3,&quot;Id&quot;:2188,&quot;Title&quot;:&quot;مكنسة كهربائية Panasonic فاخرة&quot;,&quot;CoverFileName&quot;:&quot;fbea0500-b3b1-44ef-8de0-33ea2cc160ad.jpg&quot;,&quot;Description&quot;:&quot;&quot;,&quot;Link&quot;:&quot;&quot;,&quot;LogoFileName&quot;:&quot;&quot;,&quot;Date&quot;:&quot;2015-12-31T11:39:16.277&quot;,&quot;status&quot;:4,&quot;PromotionItemId&quot;:7245,&quot;PromotionTypeId&quot;:2,&quot;path&quot;:&quot;/Files/Promote/&quot;,&quot;ButtonTitle&quot;:null,&quot;Price&quot;:130.0,&quot;CategoryPath&quot;:&quot; Home Appliances > Family Appliances > Cleaning Appliances > Vacuum Cleaners&quot;,&quot;CityName&quot;:&quot;Beit Lahiya&quot;,&quot;RegionName&quot;:&quot;Al-Balad&quot;,&quot;AdvLogo&quot;:&quot;shopping&quot;,&quot;IsPriceShow&quot;:true,&quot;LikeCount&quot;:null,&quot;Symbol&quot;:&quot;₪&quot;,&quot;StoreCategory&quot;:null,&quot;StoreType&quot;:null,&quot;StoreLike&quot;:null,&quot;SubCategory&quot;:&quot;Home Appliances&quot;},{&quot;Row_num&quot;:4,&quot;Id&quot;:2187,&quot;Title&quot;:&quot;Canon EOS 600D&quot;,&quot;CoverFileName&quot;:&quot;c7ad0c4e-6687-4078-af03-9be2ee8c704d.jpg&quot;,&quot;Description&quot;:&quot;الكاميرا الاحترافية \nCanon EOS 600D\nالآن فقط بــ 570$ \nبدلاً من 650$ \nعند الشراء احصل على هدية: ذاكرة 16GB من نوع Class 10\nالتفاصيل الفنية \nCanon 600D   Lens 18-55 \nحساس COMS بدقة18 ميجا بكسل\nمعالج الضبط DIGIC4\nشاشة بحجم 3 بوصة ومتحركة وبدقة 1040 نقطة \nعدد 7.3 لقطه فى الثانيه \nتصوير فيديو Full HD بصيغة 1080p\nحساسيةالايزو 100-6400 ويتوسع إلى 12800\nإمكان تكوين الأفلام من لقطات فيديو قصيرة\nتحكم لاسلكي للفلاش الخارجي\nتدعم اللغتين العربية و الانجليزية\n*************\nيونس للمنبيوتر \nغزة - شارع النصر &quot;,&quot;Link&quot;:&quot;&quot;,&quot;LogoFileName&quot;:&quot;&quot;,&quot;Date&quot;:&quot;2015-12-31T11:38:30.193&quot;,&quot;status&quot;:4,&quot;PromotionItemId&quot;:7246,&quot;PromotionTypeId&quot;:2,&quot;path&quot;:&quot;/Files/Promote/&quot;,&quot;ButtonTitle&quot;:null,&quot;Price&quot;:570.0,&quot;CategoryPath&quot;:&quot; Cameras &amp; Photos > Digital Cameras > SLR > Canon&quot;,&quot;CityName&quot;:&quot;Beit Lahiya&quot;,&quot;RegionName&quot;:&quot;Al-Balad&quot;,&quot;AdvLogo&quot;:&quot;shopping&quot;,&quot;IsPriceShow&quot;:true,&quot;LikeCount&quot;:null,&quot;Symbol&quot;:&quot;$&quot;,&quot;StoreCategory&quot;:null,&quot;StoreType&quot;:null,&quot;StoreLike&quot;:null,&quot;SubCategory&quot;:&quot;Cameras &amp; Photos&quot;},{&quot;Row_num&quot;:5,&quot;Id&quot;:2186,&quot;Title&quot;:&quot;Samsung Galaxy Star 2 plus &quot;,&quot;CoverFileName&quot;:&quot;86a55889-db48-475f-b1eb-d57e121a2bdc.jpg&quot;,&quot;Description&quot;:&quot;عرص خاص \nجوالات Samsung Galaxy Star 2 plus \nالسعر 390 شيكل \nبكراتين مجلتنة \nبكامل الأغراض الأصلية ..\nيونس للكمبيوتر \nغزة - شارع النصر - بجوار مطاعم العافية &quot;,&quot;Link&quot;:&quot;&quot;,&quot;LogoFileName&quot;:&quot;&quot;,&quot;Date&quot;:&quot;2015-12-31T11:37:41.613&quot;,&quot;status&quot;:4,&quot;PromotionItemId&quot;:7247,&quot;PromotionTypeId&quot;:2,&quot;path&quot;:&quot;/Files/Promote/&quot;,&quot;ButtonTitle&quot;:null,&quot;Price&quot;:390.0,&quot;CategoryPath&quot;:&quot; Mobile Phones > Models > Samsung > Galaxy Star 2 Plus&quot;,&quot;CityName&quot;:&quot;Beit Lahiya&quot;,&quot;RegionName&quot;:&quot;Al-Balad&quot;,&quot;AdvLogo&quot;:&quot;shopping&quot;,&quot;IsPriceShow&quot;:true,&quot;LikeCount&quot;:null,&quot;Symbol&quot;:&quot;₪&quot;,&quot;StoreCategory&quot;:null,&quot;StoreType&quot;:null,&quot;StoreLike&quot;:null,&quot;SubCategory&quot;:&quot;Mobile Phones&quot;}]" type="hidden">
        </aside>
    </div>
    <section class="section-padding gray">

        <!-- Main Container -->
        <div class="container">
            <!-- Row -->
            <div class="row">
                <!-- Middle Content Area -->
                <br>
                <div class="row margin-bottom-20">
                    <div class="col-md-12">
                        <a href="{{ url('store/create') }}" class="btn btn-primary pull-right">
                            @lang('profile.store_Post_Store')
                        </a>
                    </div>
                </div>
                <!-- Row -->
                <div class="row">
                    <!-- Middle Content Area -->
                    <div class="col-md-3 leftbar-stick blog-sidebar">
                        <!-- Sidebar Widgets -->
                        <div class="user-profile widget">
                            <div class="widget-heading">
                                <h4 class="panel-title"><a>@lang('profile.store')</a></h4>
                            </div>
                            <ul>
                                <li><a href="">@lang('store.all_categories')</a></li>
                            </ul>
                        </div>

                    </div>


                    <div class="col-md-9">
                        <!-- Row -->
                        <div class="row">
                            <!-- Sorting Filters -->
                            <!-- Ads Archive -->
                            <div class="posts-masonry">

                                @forelse ($objects as $object)
                                    <div class="col-md-4">
                                        <div class="white category-grid-box-1 ">
                                            <!-- Image Box -->
                                            <div class="image">
                                                <a href="{{ url('store/'.$object->user_id ) }}">
                                                    <img src="{{ url('image/300×240/stores/' . $object->id . '/'.  $object->logo_file_name) }}"
                                                         class="img-responsive">
                                                </a>
                                            </div>
                                            <!-- Short Description -->
                                            <div class="short-description-1 ">
                                                <!-- Category Title -->
                                                <div class="category-title">
                                                    <span>{{ $object->category->name }}</span>
                                                </div>
                                                <!-- Ad Title -->
                                                <h3>
                                                    <a href="{{ url('store/'.$object->user_id ) }}">{{ $object->title }}</a>
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
                                @empty
                                    <div class="col-md-12">
                                        <section class="advertising">
                                            <div class="banner">
                                                <div class="wrapper">
                                                    <span class="title">@lang('common.no_results')</span>
                                                </div>
                                            </div>
                                        </section>
                                    </div>
                                @endforelse

                            </div>
                            <!-- Ads Archive End -->
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
@endsection