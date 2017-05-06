<div class="master-slider ms-skin-default" id="masterslider">
    <!-- slide 1 -->
    <div class="ms-slide slide-1" data-delay="5">

        @foreach(\App\Models\Slider::pluck('filename', 'id') as $image_id => $filename)
            <img src="{{ asset('adforest/js/masterslider/style/blank.gif') }}" data-src="{{ url('image/1350×300/' . $filename) }}" />
        @endforeach

    </div>
    <!-- end of slide -->

</div>
<!-- end Master Slider -->