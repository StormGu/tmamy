<!-- Ads Listing -->
<div class="white category-grid-box-1 ">
    <!-- Image Box -->
    <div class="image">

        <a href="{{ url('adv/' . $object->id) }}">
            <img alt="{{ $object->title }}"
                 src="{{ url('image/300×300/advertisements/'. $object->id.'/'. $object->image_filename) }}"
                 class="img-responsive">
        </a>
    </div>
    <!-- Short Description -->
    <div class="short-description-1 ">
        <!-- Category Title -->
        <div class="category-title">
            <span><a href="{{ url('category/' . $object->category_id) }}">{{ $object->category->name }}</a></span>
        </div>
        <!-- Ad Title -->
        <h3>
            <a href="{{ url('adv/' . $object->id) }}">{{ $object->title }}</a>
        </h3>
        <!-- Location -->
    </div>
    <!-- Ad Meta Stats -->
    <div class="ad-info-1">
        <ul class="pull-left">
            <li class="fa fa-usd"><span
                        class="ad-price">{{ isset($object->currency->value) ? $object->currency->value : '' }} {{ number_format($object->price, 2) }}</span>
            </li>

        </ul>
        <ul class="">

            <li class="fa fa-heart"><span class="rating-count">{{ $object->love_count }}</span></li>
            <div class="clearfix"></div>
            {{--<li class="imguser">--}}
                {{--<a href="{{ url('profile/' . $object->user_id) }}">--}}
                {{--<img src="@if (isset($object->customer->profile) && $object->customer->profile->avatar_status == 1){{ url($object->customer->profile->avatar) }} @else {{ Gravatar::get($object->customer->email) }} @endif" style="width:30px;height:30px">--}}
                {{--</a>--}}
                {{--<p style="margin-left: 10px"><a href="{{ url('profile/' . $object->user_id) }}">@if (isset($object->customer)) {{ $object->customer->name }} @endif</a></p>--}}

            {{--</li>--}}

        </ul>

    </div>
</div>



