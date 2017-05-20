<div class="white category-grid-box-1 ">
    <!-- Image Box -->
    <div class="image">
        <a href="{{ url('adv/' . $object->id) }}">
            <img alt="{{ $object->title }}" src="{{ url('image/300×300/' . $object->id.'/'. $object->image_filename) }}""
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
    {{--<p class="location"><i class="fa fa-map-marker"></i> {{ $object->localtion }}--}}
    {{--</p>--}}
    <!-- Rating -->
        <div class="rating">
            {{--<i class="fa fa-star"></i>--}}
            {{--<i class="fa fa-star"></i>--}}
            {{--<i class="fa fa-star"></i>--}}
            {{--<i class="fa fa-star"></i>--}}
            {{--<i class="fa fa-star-o"></i>--}}
            <span class="rating-count">({{ $object->love_count }})</span>
        </div>
        <!-- Price -->
        <span class="ad-price">{{ isset($object->currency->value) ? $object->currency->value : '' }} {{ number_format($object->price, 2) }}</span>
    </div>
    <!-- Ad Meta Stats -->
    <div class="ad-info-1">
        <ul>
            <li><i class="fa fa-eye"></i><a href="{{ url('adv/' . $object->id) }}">{{ $object->view_count }}</a></li>
            <li><i class="fa fa-clock-o"></i>{{ \Carbon\Carbon::parse($object->created_at)->diffForHumans() }}</li>
        </ul>
    </div>
</div>