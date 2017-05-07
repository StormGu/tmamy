<div class="slider-area">
    <div class="preview-2">
        <div id="nivoslider" class="slides">
            @foreach(\App\Models\Slider::pluck('filename', 'id') as $image_id => $filename)
                <img src="{{ url('image/850×300/' . $filename) }}" alt="" title="#slider-direction-1"  />
            @endforeach

        </div>
        <!-- direction 1 -->
        <div id="slider-direction-1" class="t-cn slider-direction">
            <div class="slider-progress"></div>
        </div>
    </div>
    <!--End of Slider Area-->
