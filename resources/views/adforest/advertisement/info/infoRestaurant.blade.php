@extends('adforest.layout.master')

@section('content')
    <section class="section-padding error-page pattern-bgs gray ">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-xs-12 col-sm-12">
                    <div class="single-ad">
                        <div class="ad-box">
                            <h1>{{ $object->title }}</h1>
                            <div class="short-history">
                                <ul>
                                    <li>
                                        @lang('advertisement.created_at'):
                                        <b>{{ \Carbon\Carbon::parse($object->created_at)->formatLocalized('%d %B %Y, %H:%M') }}</b>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="flexslider single-page-slider">
                            <div class="flex-viewport">
                                <ul class="slides slide-main">
                                    <li class="flex-active-slide"><img
                                                src="{{ url('image/700×400/advertisements/' . $object->id.'/'. $object->image_filename) }}"/>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- Listing Slider Thumb -->
                        <div class="flexslider" id="carousels">
                            <div class="flex-viewport">
                                <ul class="slides slide-thumbnail">
                                    <li class="flex-active-slide">
                                        <img draggable="false"
                                             src="{{ url('image/120×90/advertisements/ .  $object->id.'/'.$object->image_filename) }}">
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="clearfix"></div>


                        <div class="ad-box margin-top-10">

                            <!-- Ad Specifications -->
                            <div class="specification">
                                <!-- Heading Area -->
                                <div class="heading-panel">
                                    <h3 class="main-title text-left">
                                        @lang('advertisement.the_meal')
                                    </h3>
                                </div>
                                <p>
                                    {{ $object->details }}
                                </p>
                            </div>
                        </div>
                        <div class="ad-box margin-top-10">

                            <!-- Ad Specifications -->
                            <div class="specification">
                                <!-- Heading Area -->
                                <div class="heading-panel">
                                    <h3 class="main-title text-left">
                                        @lang('advertisement.restaurants')
                                    </h3>
                                </div>
                                <p>
                                    {{ $restaurant->resturant_details  }}
                                </p>
                            </div>
                        </div>
                        <div class="ad-box margin-top-10">

                            <!-- Ad Specifications -->
                            <div class="specification">
                                <!-- Heading Area -->
                                <div class="heading-panel">
                                    <h3 class="main-title text-left">
                                        @lang('advertisement.location')
                                    </h3>
                                </div>
                                <p>
                                <div class="desc-points">

                                    <ul>
                                        <li><b>{{ $restaurant->address_main }}</b></li>
                                        <li><b>@lang('advertisement.address')</b> : {{ $restaurant->address_main }}</li>
                                        <li><b>@lang('advertisement.address_details')</b> : {{ $restaurant->address_details }}</li>
                                        <li><b>@lang('advertisement.phone')</b> : {{ $restaurant->phone_no }}</li>
                                        <li><b>@lang('advertisement.fax')</b> : {{ $restaurant->fax }}</li>
                                        <li><b>@lang('advertisement.email')</b> : {{ $restaurant->email }}</li>
                                        <li><b>@lang('advertisement.web')</b> : {{ $restaurant->web }}</li>
                                    </ul>

                                </div>

                                </p>
                            </div>
                        </div>

                        <div class="clearfix"></div>

                        <div class="ad-box margin-top-10">

                            <!-- Short Features  -->
                            <div id="disqus_thread"></div>
                            <script>

                                /**
                                 *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
                                 *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
                                /*
                                 var disqus_config = function () {
                                 this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
                                 this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                                 };
                                 */
                                (function () { // DON'T EDIT BELOW THIS LINE
                                    var d = document, s = d.createElement('script');
                                    s.src = 'https://tmamystore.disqus.com/embed.js';
                                    s.setAttribute('data-timestamp', +new Date());
                                    (d.head || d.body).appendChild(s);
                                })();
                            </script>
                            <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments
                                    powered by Disqus.</a></noscript>


                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="white-bg user-contact-info margin-bottom-20">
                        <div class="text-center">
                            <img class="image margin-top-40" alt=""
                                 src="@if ($object->customer->profile->avatar_status == 1){{ url($object->customer->profile->avatar) }} @else {{ Gravatar::get($object->customer->email) }} @endif"
                                 alt="{{ $object->customer->name }}" width="100" height="100"/>
                            <br>
                            <br>
                            <a href="{{ url('profile/'.$object->customer->id) }}">{{ $object->customer->name }}</a>
                            <br>
                            <form action="{{ url('profile/follower')}}" method="post">
                                {{ csrf_field() }}
                                <input type="hidden" name="user_id" value="{{ $object->user_id }}">
                                <input type="hidden" name="user_followers_id" value="{{ Auth::id() }}">
                                @if(\App\Models\UserFollower::where('user_followers_id', Auth::id())->count() == 0)
                                    <button type="submit"
                                            class="btn btn-default btn-sm "> @lang('common.follow')</button>
                                @elseif(\App\Models\UserFollower::where('user_followers_id', Auth::id())->count() > 0)
                            </form>
                            <form action="{{ url('profile/unfollower') }}" method="post">
                                {{ csrf_field() }}
                                <input type="hidden" name="user_id" value="{{ $object->user_id }}">
                                <input type="hidden" name="user_followers_id" value="{{ Auth::id() }}">
                                <button type="submit" class="btn btn-default btn-sm"> unFollow</button>
                            </form>
                            @endif

                            <button type="button" class="btn btn-default btn-sm" data-toggle="modal"
                                    data-target="#myModal">Messages
                            </button>


                        </div>
                        <div class="ad-listing-meta">
                            <ul>
                                <li><i class="fa fa-calendar"></i> <span
                                            class="color">{{ \Carbon\Carbon::parse($object->customer->created_at)->formatLocalized('%d %B %Y') }}</span>
                                </li>
                                {{--<li><i class="fa fa-anchor"></i> <span class="color"></span></li>--}}
                                <li><i class="fa fa-mobile"></i> <span
                                            class="color">{{ $object->customer->mobile_no }}</span></li>
                                {{--<li><i class="fa fa-phone"></i> <span class="color">{{ $object->customer->phone_no }}</span></li>--}}
                                <li><i class="fa fa-envelope"></i> <span
                                            class="color">{{ $object->customer->email }}</span>
                                </li>
                            </ul>
                            <div id="itemMap" style="width: 100%; height: 370px; margin-bottom:5px;">
                                {!! Mapper::render() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
