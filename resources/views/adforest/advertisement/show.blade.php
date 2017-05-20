@extends('adforest.layout.oldmaster')

@section('content')
    <div class="container">
        <!-- Modal -->
        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">
                <form action="{{ url('profile/Message') }}" method="post">
                    <!-- Modal content-->
                    {{ csrf_field() }}
                    <div class="modal-content">
                        <div class="modal-header">

                            <h4 class="modal-title">Message</h4>
                        </div>
                        <div class="modal-body">
                            <input type="hidden" name="to_user_id" value="{{ $object->user_id }}">
                            <input type="hidden" name="form_user_id" value="{{ Auth::id() }}">
                            <textarea name="messages" class="form-control" rows="5" id="comment"
                                      placeholder="Enter Your Message"></textarea>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default1 rig1" data-dismiss="modal"><a>Close</a>
                            </button>
                            <button type="submit" class="btn btn-default1 rig1"><a>Send</a></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <section class="section-padding error-page pattern-bgs gray ">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-xs-12 col-sm-12">
                    <div class="single-ad">
                        <div class="ad-box featured-border">
                            <h1>{{ $object->title }}</h1>
                            <div class="short-history">
                                <ul>
                                    <li>
                                        @lang('advertisement.created_at'):
                                        <b>{{ \Carbon\Carbon::parse($object->created_at)->formatLocalized('%d %B %Y, %H:%M') }}</b>
                                    </li>
                                </ul>
                            </div>
                            <div class="featured-ribbon">
                                <span>@lang('advertisement.Featured')</span>
                            </div>
                        </div>

                        <div class="flexslider single-page-slider">
                            <div class="flex-viewport">
                                <ul class="slides slide-main">
                                    <li class="flex-active-slide"><img
                                                src="{{ url('image/700×400/' . $object->id.'/'. $object->image_filename) }}"/>
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
                                             src="{{ url('image/120×90/' .  $object->id.'/'.$object->image_filename) }}">
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="example_parent_element" style="margin:0 auto; width:900px;">

                            <div class="a2a_kit a2a_kit_size_32 a2a_floating_style a2a_vertical_style"
                                 style="margin-left:-100px; top:150px;">
                                <a class="a2a_button_facebook"></a>
                                <a class="a2a_button_twitter"></a>
                                <a class="a2a_button_google_plus"></a>
                                <a class="a2a_button_pinterest"></a>
                                <a class="a2a_dd" href="https://www.addtoany.com/share"></a>
                            </div>

                            <script async src="https://static.addtoany.com/menu/page.js"></script>

                        </div>

                        <div class="clearfix"></div>


                        <div class="ad-box">

                            @if($features->count())
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
                                </div>
                            @endif

                            @if($features->count())
                                <div class="short-features">
                                    <div class="heading-panel">
                                        <h3 class="main-title text-left">
                                            @lang('advertisement.properties')
                                        </h3>
                                    </div>
                                    <div class="desc-points">
                                        <ul>
                                            @foreach($features as $feature)
                                                <li>{{ $feature->name }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                        @endif

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
                <div class="col-md-4">
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
    <div class="container">
        <div class="row">

        </div><!-- /row -->
        {{--@foreach(\App\Models\Comment::where('advertisement_id', $object->id )->get() as $key)--}}
        {{--<div class="row">--}}

        {{--<div class="col-sm-1">--}}
        {{--<div class="thumbnail">--}}
        {{--<img class="img-responsive user-photo" src="https://ssl.gstatic.com/accounts/ui/avatar_2x.png">--}}
        {{--</div><!-- /thumbnail -->--}}
        {{--</div><!-- /col-sm-1 -->--}}

        {{--<div class="col-sm-11">--}}
        {{--<div class="panel panel-default">--}}
        {{--<div class="panel-heading">--}}
        {{--<strong>{{ $key->user->name }}</strong> <span--}}
        {{--class="text-muted">{{ $key->created_at }}</span>--}}
        {{--</div>--}}
        {{--<div class="panel-body">--}}
        {{--{{ $key->text }}--}}
        {{--</div><!-- /panel-body -->--}}
        {{--</div><!-- /panel panel-default -->--}}
        {{--</div><!-- /col-sm-5 -->--}}
        {{--</div><!-- /row -->--}}
        {{--@endforeach--}}
        {{----}}
    </div><!-- /container -->

    {{--<div class="container">--}}
    {{--<div class="panel panel-default">--}}
    {{--<form action="{{url('comment')}}" method="post">--}}
    {{--{{ csrf_field() }}--}}
    {{--<div class="form-group">--}}
    {{--<input type="hidden" name="advertisement_id" value="{{ $object->id }}">--}}
    {{--<input type="hidden" name="user_id" value="{{ Auth::id() }}">--}}
    {{--<textarea name="comment" class="form-control" rows="5" id="comment"--}}
    {{--placeholder="Enter Your Message"></textarea>--}}
    {{--</div>--}}

    {{--<button type="submit" class="btn btn-default">Submit</button>--}}
    {{--</form>--}}
    {{--</div>--}}
    {{--</div>--}}
@endsection
