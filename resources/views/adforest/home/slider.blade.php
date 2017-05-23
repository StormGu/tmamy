<div class="slider-area">
    <div class="preview-2">
        <div id="nivoslider" class="slides">
            @foreach(\App\Models\Slider::pluck('filename', 'id') as $image_id => $filename)
                <img src="{{ url('image/850×300/' . $filename) }}" alt="" title="#slider-direction-1"/>
            @endforeach
        </div>
        <div id="slider-direction-1" class="t-cn slider-direction">
            <div class="slider-progress"></div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div style="background-image: linear-gradient(to left,#3288b7 0,#6cb85f 100%) !important;height: 45px;">
                <div class="row">

                    <div class="col-lg-2">
                    </div>
                    <div class="col-lg-8" style="margin-top: 3px;">
                        <div class="row">
                            <div class="col-lg-2">
                            </div>
                            <div class="col-lg-2" align="right" style="margin-top: 2px;">
                                <a class="new btn bordered-style" href="{{ url('AddAdv') }}"
                                   style="border-radius: 23px;">@lang('advertisement.post_free_ad')</a>
                            </div>
                            <div class="col-lg-2" align="right" style="margin-top: 2px;">
                                <a class="new btn bordered-style" href="" style="border-radius: 23px;">Promote Now</a>
                            </div>
                            <div class="col-lg-2" align="right" style="margin-top: 2px;">
                                <a class="new btn bordered-style" href="" style="border-radius: 23px;">Promote Now</a>
                            </div>
                            <div class="col-lg-2" align="right" style="margin-top: 2px;">
                                <a class="new btn bordered-style" href="" style="border-radius: 23px;">Promote Now</a>
                            </div>
                            <div class="col-lg-2"></div>
                        </div>
                    </div>
                    <div class="col-lg-2"></div>
                </div>

            </div>
        </div>
    </div>
</div>

