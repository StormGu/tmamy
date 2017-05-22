@extends('adforest.layout.oldmaster')

@section('template_title', $object->title)

@section('breadcrumbs')
    @include('adforest.partials.breadcrumbs', ['breadcrumbs' => $breadcrumbs])
@endsection

@section('content')
    <section class="section-padding error-page pattern-bgs gray ">
        <div class="container">
            <div class="col-md-9">
                <div class="row margin-bottom-20">
                    <div class="col-md-12">
                        <div class="ad-box">
                            <div class="col-md-2">
                                <div class="text-center">
                                    <img class="image  margin-top-40" alt=""
                                         src="@if ($object->customer->profile->avatar_status == 1){{ url($object->customer->profile->avatar) }} @else {{ Gravatar::get($object->customer->email) }} @endif"
                                         alt="{{ $object->customer->name }}" width="100" height="100"/>
                                </div>
                            </div>
                            <div class="col-md-10">
                                <h1>{{ $object->title }}</h1>
                                <div class="short-history">
                                    <ul>
                                        {{--<li>--}}
                                        {{--<i class="fa fa-anchor"></i> {{ $object->address }}--}}
                                        {{--</li>--}}
                                        <li>
                                            <i class="fa fa-clock-o"></i> {{ \Carbon\Carbon::parse($object->created_at)->formatLocalized('%d %B %Y, %H:%M') }}
                                        </li>
                                        <li>
                                            <i class="fa fa-envelope-o"></i> {{ $object->customer->email }}
                                        </li>
                                    </ul>
                                </div>

                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="ad-box margin-top-20">

                            @if($properties->count())
                                <div class="short-features">
                                    <div class="heading-panel">
                                        <h3 class="main-title text-left">
                                            @lang('advertisement.properties')
                                        </h3>
                                    </div>
                                    @foreach($properties as $property)
                                        <div class="col-sm-4 col-md-4 col-xs-12 no-padding">
                                            <span><strong>{{ $property->label }}</strong>: {{ $property->pivot->property_value }}</span>
                                        </div>
                                    @endforeach
                                    <div class="clearfix"></div>
                                </div>
                            @endif

                        </div>
                        <div class="ad-box margin-top-20">
                            <!-- Ad Specifications -->
                            <div class="specification">
                                <!-- Heading Area -->
                                <div class="heading-panel">
                                    <h3 class="main-title text-left">
                                        @lang('advertisement.description')
                                    </h3>
                                </div>
                                <p>
                                    {{ $object->details }}
                                </p>
                            </div>

                            <div class="clearfix"></div>
                        </div>
                        <div class="ad-box margin-top-20">
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


            </div>
            <div class="col-md-3">
                <div class="white-bg user-contact-info margin-bottom-20">
                    <div class="text-center">
                        <img class="image margin-top-40" alt=""
                             src="@if ($object->customer->profile->avatar_status == 1){{ url($object->customer->profile->avatar) }} @else {{ Gravatar::get($object->customer->email) }} @endif"
                             alt="{{ $object->customer->name }}" width="100" height="100"/>
                        <br>
                        <br>
                        <h3>{{ $object->customer->name }}</h3>
                        <br>
                        <a href="#" class="btn btn-primary btn-sm">@lang('common.follow')</a><br><br>
                        <a href="#" class="btn btn-default btn-sm">@lang('common.message')</a><br><br>
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
                            <li><i class="fa fa-envelope"></i> <span class="color">{{ $object->customer->email }}</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection