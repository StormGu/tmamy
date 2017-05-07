<!-- =-=-=-=-=-=-= FOOTER =-=-=-=-=-=-= -->
<footer>
    <!-- Footer Content -->
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <!-- Info Widget -->
                    <div class="widget">
                        <div class="logo"><img src="{{ url(config('settings.footer_logo')) }}" width="180" height="40"/>
                        </div>
                        <p>{{ config('settings.description') }}</p>
                        <ul>
                            <li><img src="{{ asset('adforest/images/appstore.png') }}" alt=""></li>
                            <li><img src="{{ asset('adforest/images/googleplay.png') }}" alt=""></li>
                        </ul>
                    </div>
                    <!-- Info Widget Exit -->
                </div>
                <div class="col-md-3  col-sm-6 col-xs-12">
                    <!-- Follow Us -->
                    <div class="widget socail-icons">
                        <h5>@lang('common.followUs')</h5>
                        <ul>
                            @if(Config('settings.facebook_url'))
                                <li><a class="fb" {{ url( Config('settings.facebook_url')) }} target=" _blank"><i
                                                class="fa fa-facebook"></i></a><span>Facebook</span></li>
                            @endif
                            @if(Config('settings.twitter_url'))
                                <li><a class="twitter" {{ url( Config('settings.twitter_url')) }} target=" _blank"><i
                                                class="fa fa-twitter"></i></a><span>Twitter</span>
                                </li>
                            @endif
                            @if(Config('settings.linkedin_url'))
                                <li><a class="linkedin" {{ url( Config('settings.linkedin_url')) }} target=" _blank"><i
                                                class="fa fa-linkedin"></i></a><span>Linkedin</span>
                                </li>
                            @endif
                            @if(Config('settings.google_url'))
                                <li><a class="googleplus" {{ url( Config('settings.google_url')) }} target=" _blank"><i
                                                class="fa fa-google-plus"></i></a><span>Google+</span></li>
                            @endif
                        </ul>
                    </div>
                    <!-- Follow Us End -->
                </div>
                <div class="col-md-6  col-sm-6 col-xs-12">
                    <!-- Newslatter -->
                    <div class="widget widget-newsletter">
                        <h5>@lang('newsletter.signup')</h5>
                        <div class="fieldset">
                            <p>@lang('newsletter.description')</p>
                            <form>
                                <input class="" placeholder="@lang('newsletter.subscribe_placeholder')" type="text">
                                <input class="submit-btn" name="submit" value="@lang('newsletter.subscribe')"
                                       type="submit">
                            </form>
                        </div>
                    </div>
                    <!-- Newslatter -->
                </div>
            </div>
        </div>
    </div>
    <!-- Copyrights -->
    <div class="copyrights">
        <div class="container">
            <div class="copyright-content">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <p>@lang('common.copyrights', ['year' => date('Y')])</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- =-=-=-=-=-=-= FOOTER END =-=-=-=-=-=-= -->