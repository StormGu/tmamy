@extends('site.layout.master')

@section('content')
    <!--Slider Area Start-->
    <div class="slider-area">

        <div style="    position: relative;
    width: 100%;
    height: auto;
    overflow: hidden;">
            <img src="{{ asset('site/img/ee.jpg') }}" alt="" title="#slider-direction-2" style="    position: relative;
    width: 100%;
    height: auto;
    overflow: hidden;"/>
        </div>
        <!-- direction 1 -->

    </div>
    <!--End of Slider Area-->
    <div class="profile-data">
        <div class="container">

            <div class="image" data-user="avatar" data-type="B">
                <img id="imgAvatar" src="http://www.daleelii.com/Files/Store/12a3c934-f33b-4f13-97ef-3681e0d26f4f.Jpeg">
                <div class="editable-image">
                    <div class="hover-button">
                        <i class="icon icon-camera"></i>
                        <a href="javascript:;" data-modal="changeAvatar">
                            Change Image</a>
                        <a data-do="delete">
                            Remove Image</a>
                    </div>
                </div>
            </div>


            <div class="details">
                <h3>KarmelBuilding </h3>
                <p class="">الكرمل لجميع العقارات في فلسطين</p>


            </div>
            <ul class="st-social">
                <li><em>6</em><span>ADS</span></li>
                <li><em>128</em><span>Views</span></li>
                <li>
                    <em class="MyCounter">11</em>
                    <span>
                                        Likes</span>
                </li>
            </ul>
            <ul class="socail-share">
                <li>
                    <a href="javascript:;" target="_blank">
                        <i class="fa fa-facebook" aria-hidden="true"></i>
                    </a>
                </li>
                <li>
                    <a href="javascript:;" target="_blank">
                        <i class="fa fa-twitter" aria-hidden="true"></i>
                    </a>
                </li>
                <li>
                    <a href="javascript:;" target="_blank">
                        <i class="fa fa-google" aria-hidden="true"></i>
                    </a>
                </li>
                <li>
                    <a href="javascript:;" target="_blank">
                        <i class="fa fa-linkedin" aria-hidden="true"></i>
                    </a>
                </li>
                <li>
                    <a href="javascript:;" target="_blank">
                        <i class="fa fa-pinterest-p" aria-hidden="true"></i>
                    </a>
                </li>
            </ul>
            <div class="info">
                <p>
                    <i class="fa fa-calendar" aria-hidden="true"></i>
                    29 Aug 2015
                </p>
                <p>
                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                    Palestine Gaza
                </p>
                <p>
                    <i class="fa fa-mobile" aria-hidden="true"></i>
                    0599111111
                </p>
                <p>
                    <i class="fa fa-phone" aria-hidden="true"></i>
                    2887799
                </p>
            </div>

        </div>
    </div>




@endsection