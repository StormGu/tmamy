<!--Slider Area Start-->
<div class="slider-area">
    <div class="preview-2">
        <div id="nivoslider" class="slides">
            @foreach(\App\Models\Slider::pluck('filename', 'id') as $image_id => $filename)
                <img src="{{ url('image/1350×430/' . $filename) }}" alt="" title="#slider-direction-{{ $image_id }}"/>
            @endforeach

        </div>

    </div>
</div>
<!--End of Slider Area-->