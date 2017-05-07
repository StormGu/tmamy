<div class="master-slider ms-skin-default" id="masterslider">
    <!-- slide 1 -->

    @foreach(\App\Models\Slider::pluck('filename', 'id') as $image_id => $filename)
        <div class="ms-slide slide-{{ $image_id }}" data-delay="5">
            <img src="{{ asset('adforest/js/masterslider/style/blank.gif') }}"
                 data-src="{{ url('image/850×300/' . $filename) }}"/>
        </div>
@endforeach


<!-- end of slide -->

</div>
<!-- end Master Slider -->

