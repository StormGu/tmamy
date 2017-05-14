<div class="slider-area">
    <div class="preview-2">
        <div id="nivoslider" class="slides">
            @foreach(\App\Models\Slider::pluck('filename', 'id') as $image_id => $filename)
                <img src="{{ url('image/850×300/' . $filename) }}" alt="" title="#slider-direction-1"/>
            @endforeach

        </div>
        <!-- direction 1 -->
        <div id="slider-direction-1" class="t-cn slider-direction">
            <div class="slider-progress"></div>
        </div>
    </div>
    <!--End of Slider Area-->


    <div class="row">
        <div class="col-lg-12">
            <div style="background-color: #3e3d3d;height: 40px;">
                <div class="row">
                    <div class="col-lg-2"></div>
                    <div class="col-lg-8">
                        <div class="row">
                            <div class="col-lg-2"></div>
                            <div class="col-lg-2" align="right" style="margin-top: 2px;">
                                <div style="position: relative;" align="right">
                                    <a href="#">
                                        <img src="{{ asset('adforest/logo/11.png') }}"
                                             class="img-responsive" style="width: 176px;margin-top: -6px">
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-2" align="left" style="margin-top: 2px;">
                                <a href="#">
                                    <img src="{{ asset('adforest/logo/22.png') }}" class="img-responsive"
                                         style="width: 176px;margin-top: -6px">
                                </a>
                            </div>
                            <div class="col-lg-2" style="margin-top: 2px;">
                                <a href="#">
                                    <img src="{{ asset('adforest/logo/33.png') }}" class="img-responsive"
                                         style="width: 176px;margin-top: -6px">
                                </a>
                            </div>
                            <div class="col-lg-2" style="margin-top: 2px;">
                                <a href="#">
                                    <img src="{{ asset('adforest/logo/44.png') }}" class="img-responsive"
                                         style="width: 176px;margin-top: -6px">
                                </a>
                            </div>
                            <div class="col-lg-2">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2">
                    </div>
                </div>
            </div>
        </div>
    </div>
