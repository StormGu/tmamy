<!--Footer Widget Area Start-->
<div class="footer-widget-area">
    <div class="container">
        <div class="row boder-b-footer">
            <div class="footer-border"></div>
            <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12">
                <div class="footer-widget">
                    <h4>Our Support</h4>
                    <ul class="single-widget-list">
                        <li><a href="#">Sitemap</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Your Account</a></li>
                        <li><a href="#">Advanced Search</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12">
                <div class="footer-widget">
                    <h4>My Account</h4>
                    <ul class="single-widget-list">
                        <li><a href="#">My Account</a></li>
                        <li><a href="#">Order History</a></li>
                        <li><a href="#">Returns</a></li>
                        <li><a href="#">Special</a></li>
                        <li><a href="#">Site Map</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-5 col-md-5 col-sm-6 col-xs-12">
                <div class="footer-widget">
                    <h4>BRANDS ARE FAVORITES</h4>
                    <ul class="single-widget-list favorite">
                        <li><span>Tablets:</span> Apple, Samsung, Sony, Asus, HP, Lenovo, <a href="#" class="more">Read
                                more</a> ...
                        </li>
                        <li><span>Phone:</span> Apple, Samsung, Sony, FPT, Asus, BlackBerry, <a href="#" class="more">More</a>
                            ...
                        </li>
                        <li><span>Apple:</span> iPhone, iPad, <a href="#" class="more">More</a> ...</li>
                        <li><span>Notebook:</span> Apple (Macbook), Acer, Dell, HP, Lenovo,, Sony, <a href="#"
                                                                                                      class="more">More</a>
                            ...
                        </li>
                        <li><span>Accessories:</span> Headset, leather bags and bumper, <a href="#"
                                                                                           class="more">More</a> ...
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 hidden-sm col-xs-12">
                <div class="footer-widget">
                    <a href="{{ url('/') }}"><img src="{{ url(config('settings.site_logo')) }}" alt=""></a>
                    <p>Please keep contact with us. There are many products waiting for you to enjoy !</p>
                    <p class="information"><i class="fa fa-circle-o blue"></i>Addresss: 19th Floor, 40 Bank Street, <br>
                        Canary Wharf, London, E14 5NR.</p>
                    <p class="information"><i class="fa fa-circle-o dark-yellow"></i>Email: {{ config('settings.contact_email') }}</p>
                    <p class="information"><i class="fa fa-circle-o lemon"></i>Phone: <span>{{ config('settings.mobile_no') }}</span></p>
                    <p class="information"><i class="fa fa-circle-o yellow"></i>Web: {{ url('/') }}</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-5 col-md-6 hidden-sm hidden-xs">
                <ul class="social-icons">
                    @if(Config('settings.facebook_url'))
                        <li>
                            <i class="fa fa-facebook"></i>
                            <a href="{{ url( Config('settings.facebook_url')) }}" target="_blank">FACEBOOK</a>
                        </li>
                    @endif
                    @if(Config('settings.instagram_url'))
                        <li>
                            <i class="fa fa-instagram"></i>
                            <a href="{{ url( Config('settings.instagram_url')) }} target=" _blank">
                            Instagram
                            </a>
                        </li>
                    @endif
                    @if(Config('settings.twitter_url'))
                        <li><i class="fa fa-flickr"></i>
                            <a href="{{ url( Config('settings.twitter_url')) }} target=" _blank">Flickr</a>
                        </li>
                    @endif
                    @if(Config('settings.youtube_url'))
                        <li><i class="fa fa-youtube-play"></i>
                            <a href="{{ url( Config('settings.youtube_url')) }} target=" _blank">
                            Youtube
                            </a>
                        </li>
                    @endif
                    @if(Config('settings.flickr_url'))
                        <li><i class="fa fa-twitter"></i>
                            <a href="{{ url( Config('settings.flickr_url')) }} target=" _blank">
                            Twitter
                            </a>
                        </li>
                    @endif
                    @if(Config('settings.google_url'))
                        <li><i class="fa fa-google-plus"></i>
                            <a href="{{ url( Config('settings.google_url')) }} target=" _blank">
                            Google
                            </a>
                        </li>
                    @endif

                </ul>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-4 hidden-sm hidden-xs">
                <div class="footer-widget-bottom">
                    <h2>Support Payments</h2>
                    <div class="support-payments">
                        <i class="fa fa-cc-mastercard"></i>
                        <i class="fa fa-cc-amex"></i>
                        <i class="fa fa-cc-discover"></i>
                        <i class="fa fa-cc-visa"></i>
                        <i class="fa fa-cc-mastercard"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--End of Footer Widget Area-->
<!--Footer Area Start-->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p>Copyright © . All Rights Reserved</p>
            </div>
        </div>
    </div>
</footer>
<!--End of Footer Area-->