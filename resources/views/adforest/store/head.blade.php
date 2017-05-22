<style>
    .section-padding {
        padding: 0px 0 !important;
    }
</style>

@include('adforest.home.slider')

<div class="profile-data">
    <div class="container">
        <div class="image">
            <img src="{{ url('image/200×200/stores/'. $object->id . '/' . $object->logo_file_name) }}" />
        </div>

        <div class="details">
            <h3>{{ $object->title }}</h3>
        </div>

        <ul class="socail-share">
            @if($object->facebook)
                <li>
                    <a href="{{ $object->facebook }}" target="_blank">
                        <i class="fa fa-facebook" aria-hidden="true"></i>
                    </a>
                </li>
            @endif
            @if($object->twitter)
                <li>
                    <a href="{{ $object->twitter }}" target="_blank">
                        <i class="fa fa-twitter" aria-hidden="true"></i>
                    </a>
                </li>
            @endif
            @if($object->googleplus)
                <li>
                    <a href="{{ $object->googleplus }}" target="_blank">
                        <i class="fa fa-google" aria-hidden="true"></i>
                    </a>
                </li>
            @endif
            @if($object->linkedin)
                <li>
                    <a href="{{ $object->linkedin }}" target="_blank">
                        <i class="fa fa-linkedin" aria-hidden="true"></i>
                    </a>
                </li>
            @endif
            @if($object->pinterest)
                <li>
                    <a href="{{ $object->pinterest }}" target="_blank">
                        <i class="fa fa-pinterest-p" aria-hidden="true"></i>
                    </a>
                </li>
            @endif
        </ul>
        <div class="info">
            <p>
                <i class="fa fa-calendar" aria-hidden="true"></i>
                {{ \Carbon\Carbon::parse($object->created_at)->diffForHumans() }}
            </p>
        </div>
    </div>
</div>
