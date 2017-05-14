@extends('adforest.layout.oldmaster')

@section('content')
    @include('adforest.home.slider')

    <!--Features Electronics Tab Area Start-->
    <div class="features-tab-area electronic">
        <div class="container" style="width: 1300px !important;">

  <div class="row">
                <div class="col-lg-12"><div class="search-form" style="    margin-top: -391px;
    margin-bottom: 40px;
    /* background-color: #fff; */
    border-radius: 4px 4px;
    opacity: 0.8;
    z-index: 289;
    margin-left: 130px;
    position: absolute;
    width: 1000px;">
                    <form id="search-form" action="/MainSearch" method="post" style="border-radius: 0px;background-color: #fff;">
                        <input type="hidden" name="_token" value="UWJfrxxZgjPu5gCmR1vC1gEUx0FpcrbG47XEly2Y">
                        
                        <input type="search" placeholder="What would you like to search . ." name="s">
                        <button style="border-radius: 0px;" type="submit"><i class="fa fa-search"></i>Search</button>
                    </form>
                </div></div>
            </div>








            <div class="row">
                <div class="col-lg-3 col-md-3 hidden-sm rtl" style="    width: 270px !important;">
 <img src="{{ asset('adforest/logo/add-friend3.png') }}" style="display:none; margin-top: -66px;">
                   
    <aside class="widget widget-banner">
                        <div class="side-divv">
                           <ul style="    background: #ddd;">

  <li style="background: #06776f;
    border-bottom: 4px solid #9ea7af;
    border-right: 1px solid #343a45;
    font-size: 19px;
    font-weight: 100;
    padding: 1px;
    text-align: left;
    text-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
    vertical-align: middle;"><a class="active" href="" style="  margin-left:35px;  color: #ffffff;">most category</a></li>
    <li    style="border-left: 3px solid #6e6f72;" data-category="realestate">
        <div class="row">
            <div class="col-lg-3">
                <a href="#" style="margin-left: -34px;">
                    <img src="{{ asset('adforest/logo/RealEstate.png') }}" style="width: 30px;
    height: 30px;
    margin-top: -1px;
    margin-left: 20px;" >
                </a>
            </div>
            <div class="col-lg-9" >
                <div class="row">
                        <div class="col-lg-8">
                            <a href="#" style="margin-left: -47px;">Real Estate</a>
                        </div>
                        <div class="col-lg-4" style="    margin-top: 35px;">
                            <a href="#" class="rits">452</a>
                        </div>
                </div>
            </div>
        </div>
        
    </li>
                               
 
    <li data-category="shopping" style="border-left: 3px solid #7e4dc4;">
        <div class="row">
            <div class="col-lg-3">
                <img src="{{ asset('adforest/logo/Shopping.png') }}" style="width:30px;height:30px;margin-top: 7px;margin-left: 4px;" >
            </div>
            <div class="col-lg-9" >
               <div class="row">
                        <div class="col-lg-8">
                            <a href="#" style="margin-left: -47px;">Shopping</a>
                        </div>
                        <div class="col-lg-4" style="    margin-top: 35px;">
                            <a href="#" class="rits">452</a>
                        </div>
                </div>
                
            </div>
        </div> 
        
    </li>
    <li data-category="healths" style="border-left: 3px solid #1aaf94;">
        <div class="row">
            <div class="col-lg-3">
                <img src="{{ asset('adforest/logo/Health.png') }}" style="width:30px;height:30px;margin-top: 7px;margin-left: 4px;" >
            </div>
            <div class="col-lg-9" >
               <div class="row">
                        <div class="col-lg-8">
                            <a href="#" style="margin-left: -47px;">Health</a>
                        </div>
                        <div class="col-lg-4" style="    margin-top: 35px;">
                            <a href="#" class="rits">452</a>
                        </div>
                </div>
                
            </div>
        </div> 
        
    </li>

                               
    
    <li data-category="indus"  style="border-left: 3px solid #808990;">
        <div class="row"><div class="col-lg-3">
            <img src="{{ asset('adforest/logo/Industrial.png') }}" style="width:30px;height:30px;margin-top: 7px;margin-left: 4px;" >
        </div>
        <div class="col-lg-9" >
               <div class="row">
                        <div class="col-lg-8">
                            <a href="#" style="margin-left: -47px;">Industrial</a>
                        </div>
                        <div class="col-lg-4" style="    margin-top: 35px;">
                            <a href="#" class="rits">452</a>
                        </div>
                </div>
                
            </div>
         </div> 
        </li>

        <li data-category="agricul"  style="border-left: 3px solid #6cbd45;">
        <div class="row"><div class="col-lg-3">
            <img src="{{ asset('adforest/logo/Agriculture.png') }}" style="width:30px;height:30px;margin-top: 7px;margin-left: 4px;" >
        </div>
        <div class="col-lg-9" >
               <div class="row">
                        <div class="col-lg-8">
                            <a href="#" style="margin-left: -47px;">Agriculture</a>
                        </div>
                        <div class="col-lg-4" style="    margin-top: 35px;">
                            <a href="#" class="rits">2455</a>
                        </div>
                </div>
                
            </div>
         </div> 
        </li>


         <li data-category="Careers"  style="border-left: 3px solid #6b6fb3;">
        <div class="row"><div class="col-lg-3">
            <img src="{{ asset('adforest/logo/Careers.png') }}" style="width:30px;height:30px;margin-top: 7px;margin-left: 4px;" >
        </div>
        <div class="col-lg-9" >
               <div class="row">
                        <div class="col-lg-8">
                            <a href="#" style="margin-left: -47px;">Careers</a>
                        </div>
                        <div class="col-lg-4" style="    margin-top: 35px;">
                            <a href="#" class="rits">2455</a>
                        </div>
                </div>
                
            </div>
         </div> 
        </li>

        <li data-category="serv"  style="border-left: 3px solid #454391;">
        <div class="row"><div class="col-lg-3">
            <img src="{{ asset('adforest/logo/Services.png') }}" style="width:30px;height:30px;margin-top: 7px;margin-left: 4px;" >
        </div>
        <div class="col-lg-9" >
               <div class="row">
                        <div class="col-lg-8">
                            <a href="#" style="margin-left: -47px;">Services</a>
                        </div>
                        <div class="col-lg-4" style="    margin-top: 35px;">
                            <a href="#" class="rits">2455</a>
                        </div>
                </div>
                
            </div>
         </div> 
        </li>

        <li data-category="whols"  style="border-left: 3px solid #ecad6d;">
        <div class="row"><div class="col-lg-3">
            <img src="{{ asset('adforest/logo/Wholesalers.png') }}" style="width:30px;height:30px;margin-top: 7px;margin-left: 4px;" >
        </div>
        <div class="col-lg-9" >
               <div class="row">
                        <div class="col-lg-8">
                            <a href="#" style="margin-left: -47px;">Wholeselers</a>
                        </div>
                        <div class="col-lg-4" style="    margin-top: 35px;">
                            <a href="#" class="rits">2455</a>
                        </div>
                </div>
                
            </div>
         </div> 
        </li>

        
        <li data-category="exhiob"  style="border-left: 3px solid #42a4d4;">
        <div class="row"><div class="col-lg-3">
            <img src="{{ asset('adforest/logo/Exhibition.png') }}" style="width:30px;height:30px;margin-top: 7px;margin-left: 4px;" >
        </div>
        <div class="col-lg-9" >
               <div class="row">
                        <div class="col-lg-8">
                            <a href="#" style="margin-left: -47px;">Exhibition</a>
                        </div>
                        <div class="col-lg-4" style="    margin-top: 35px;">
                            <a href="#" class="rits">4512</a>
                        </div>
                </div>
                
            </div>
         </div> 
        </li>
    

        <li data-category="tende"  style="border-left: 3px solid #52c0ed;">
        <div class="row"><div class="col-lg-3">
            <img src="{{ asset('adforest/logo/Tenders.png') }}" style="width:30px;height:30px;margin-top: 7px;margin-left: 4px;" >
        </div>
        <div class="col-lg-9" >
               <div class="row">
                        <div class="col-lg-8">
                            <a href="#" style="margin-left: -47px;">Tenders</a>
                        </div>
                        <div class="col-lg-4" style="    margin-top: 35px;">
                            <a href="#" class="rits">412</a>
                        </div>
                </div>
                
            </div>
         </div> 
        </li>
                  

        <li data-category="restu"  style="border-left: 3px solid #f49ac1;">
        <div class="row"><div class="col-lg-3">
            <img src="{{ asset('adforest/logo/Restaurant.png') }}" style="width:30px;height:30px;margin-top: 7px;margin-left: 4px;" >
        </div>
        <div class="col-lg-9" >
               <div class="row">
                        <div class="col-lg-8">
                            <a href="#" style="margin-left: -47px;">Restaurant</a>
                        </div>
                        <div class="col-lg-4" style="    margin-top: 35px;">
                            <a href="#" class="rits">412</a>
                        </div>
                </div>
                
            </div>
         </div> 
        </li>           

        <li data-category="vechcl"  style="border-left: 3px solid #636494;">
        <div class="row"><div class="col-lg-3">
            <img src="{{ asset('adforest/logo/Vehicles.png') }}" style="width:30px;height:30px;margin-top: 7px;margin-left: 4px;" >
        </div>
        <div class="col-lg-9" >
               <div class="row">
                        <div class="col-lg-8">
                            <a href="#" style="margin-left: -47px;">Vehicles</a>
                        </div>
                        <div class="col-lg-4" style="    margin-top: 35px;">
                            <a href="#" class="rits">847</a>
                        </div>
                </div>
                
            </div>
         </div> 
        </li>      


     

  
                               
   
    
     


     <li style="border-left: 3px solid #da202f;"><div class="row"><div class="col-lg-3"><img src="{{ asset('adforest/logo/Offers.png') }}" style="width:30px;height:30px;margin-top: 7px;margin-left: 4px;" ></div><div class="col-lg-9" > <a href="#"style="margin-left: -47px;">offers</a></div></div> <a href="#" class="rits">4523</a></li>

    

 
</ul>
                         </div>
     
<div class="app-img"><a href=""> <img src="{{ asset('adforest/logo/add-friend2.png') }}" > </a></div>
        <div class="app-img"><a href=""> <img src="{{ asset('adforest/logo/add-friend.png') }}" > </a></div>
                        </aside>








                    <!-- <aside class="widget widget-banner white-hover">
                        <div class="side-div">
                            <ul>
                                <li><a class="active" href="">{{ __('common.main_categories') }}</a></li>
                                @foreach(\App\Models\Category::parents()->has('advertisements')->withCount('advertisements')->get() as $category)
                                    <li><a href="{{ url('category/'. $category->id) }}">{{ $category->name }}</a> <a href="#" class="rits">{{ $category->advertisements_count }}</a></li>
                                @endforeach
                            </ul>
                        </div>

                        <div class="side-div" style="margin-top: 30px;height: 370px;">
                            <ul>
                                <li style="text-align: center;"><a class="active" href="">company fhtsher</a></li>
                                <li style="padding: 8px;"><img src=" adforest/img/bnr.png" style="width: 100%;"></li>
                                <li style="padding: 8px;"><img src=" adforest/img/bnr1.png" style="width: 100%;"></li>
                                <li style="padding: 8px;"><img src=" adforest/img/bnr2.png" style="width: 100%;"></li>
                                <li style="padding: 8px;"><img src=" adforest/img/bnr.png" style="width: 100%;"></li>
                            </ul>
                        </div>
                        <div class="app-img"><a href=""> <img src=" adforest/img/app.png"> </a></div>
                    </aside> -->
                </div>

                <div class="col-lg-6 col-md-9 col-sm-12" style="width: 750px !important;">
                    <!--Features Fashion Tab Area Start-->

                        <div class="features-tab clearfix">
                            <h3  class="medic"><img src="{{ asset('adforest/logo/RealEstate.png') }}" alt="icon" class="img-icon">real estate</h3>
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs navbar-right" role="tablist">
                               <div ><img src="{{ asset('adforest/logo/more11.png') }}"  style="    width: 30px;">  </div>
                            </ul>
<hr class="hr-main hr2">
                        </div>
                                     <div class="clearfix"></div>
                            <div class="tab-content">
<div role="tabpanel" class="tab-pane active" id="men">


<div role="tabpanel" class="tab-pane" id="jewellery">
<div class="row">
 <section class="properties white-bg">
<div class="single-p-slide">
        <div class="col-md-4 moons">
            <!--======= IMAGE =========-->
            <div class="img" style="padding: 2px;
    min-height: 133px;"> <center><img class="img-responsive myimg" src="{{ asset('adforest/img/cars.jpg') }}" alt="" > </center>
            </div>
            <!--======= HOME INNER DETAILS =========-->

            <!--======= HOME DETAILS =========-->
            <div class="detail-sec"> <a href="#." style="    color: #000000;
    font-size: 12px;" class="font-montserrat">sweet home for small family</a><br> <span style="    font-size: 12px;" class="locate"><i class="fa fa-map-marker"></i> Dubai,Uae</span>

              <div class="share-p"> <i class="fa fa-money"></i> <span class="price font-montserrat">70000/Year AED</span></div>
            </div>

        </div>
        <div class="col-md-4 moons">
            <!--======= IMAGE =========-->
            <div class="img" style="padding: 2px;
    min-height: 133px;"> <center><img class="img-responsive myimg" src="{{ asset('adforest/img/house.jpg') }}" alt="" > </center>
            </div>
            <!--======= HOME INNER DETAILS =========-->
        
            <!--======= HOME DETAILS =========-->
            <div class="detail-sec"> <a href="#." style="    color: #000000;
    font-size: 12px;" class="font-montserrat">sweet home for small family</a><br> <span style="    font-size: 12px;" class="locate"><i class="fa fa-map-marker"></i> Dubai,Uae</span>
              
              <div class="share-p"> <i class="fa fa-money"></i> <span class="price font-montserrat">70000/Year AED</span></div>
            </div>
          
        </div>
        <div class="col-md-4 moons">
            <!--======= IMAGE =========-->
            <div class="img" style="padding: 2px;
    min-height: 133px;"> <center><img class="img-responsive myimg" src="{{ asset('adforest/img/1492892557.fdb54e3c509e8609252856da12d49a54.jpg') }}" alt="" > </center>
            </div>
            <!--======= HOME INNER DETAILS =========-->
        
            <!--======= HOME DETAILS =========-->
            <div class="detail-sec"> <a href="#." style="    color: #000000;
    font-size: 12px;" class="font-montserrat">sweet home for small family</a><br> <span style="    font-size: 12px;" class="locate"><i class="fa fa-map-marker"></i> Dubai,Uae</span>
              
              <div class="share-p"> <i class="fa fa-money"></i> <span class="price font-montserrat">70000/Year AED</span></div>
            </div>
          
        </div>
        <div class="col-md-4 moons">
            <!--======= IMAGE =========-->
            <div class="img" style="padding: 2px;
    min-height: 133px;"> <center><img class="img-responsive myimg" src="{{ asset('adforest/img/1492892557.fdb54e3c509e8609252856da12d49a54.jpg') }}" alt="" > </center>
            </div>
            <!--======= HOME INNER DETAILS =========-->
        
            <!--======= HOME DETAILS =========-->
            <div class="detail-sec"> <a href="#." style="    color: #000000;
    font-size: 12px;" class="font-montserrat">sweet home for small family</a><br> <span style="    font-size: 12px;" class="locate"><i class="fa fa-map-marker"></i> Dubai,Uae</span>
              
              <div class="share-p"> <i class="fa fa-money"></i> <span class="price font-montserrat">70000/Year AED</span></div>
            </div>
          
        </div>
        <div class="col-md-4 moons">
            <!--======= IMAGE =========-->
            <div class="img" style="padding: 2px;
    min-height: 133px;"> <center><img class="img-responsive myimg" src="{{ asset('adforest/img/1492892557.fdb54e3c509e8609252856da12d49a54.jpg') }}" alt="" > </center>
            </div>
            <!--======= HOME INNER DETAILS =========-->
        
            <!--======= HOME DETAILS =========-->
            <div class="detail-sec"> <a href="#." style="    color: #000000;
    font-size: 12px;" class="font-montserrat">sweet home for small family</a><br> <span style="    font-size: 12px;" class="locate"><i class="fa fa-map-marker"></i> Dubai,Uae</span>
              
              <div class="share-p"> <i class="fa fa-money"></i> <span class="price font-montserrat">70000/Year AED</span></div>
            </div>
          
        </div>
        <div class="col-md-4 moons">
            <!--======= IMAGE =========-->
            <div class="img" style="padding: 2px;
    min-height: 133px;"> <center><img class="img-responsive myimg" src="{{ asset('adforest/img/1492892557.fdb54e3c509e8609252856da12d49a54.jpg') }}" alt="" > </center>
            </div>
            <!--======= HOME INNER DETAILS =========-->
        
            <!--======= HOME DETAILS =========-->
            <div class="detail-sec"> <a href="#." style="    color: #000000;
    font-size: 12px;" class="font-montserrat">sweet home for small family</a><br> <span style="    font-size: 12px;" class="locate"><i class="fa fa-map-marker"></i> Dubai,Uae</span>
              
              <div class="share-p"> <i class="fa fa-money"></i> <span class="price font-montserrat">70000/Year AED</span></div>
            </div>
          
        </div>
        
</div>
</section>
</div>
</div>
</div>
  </div>



  <div class="features-tab clearfix">
                            <h3 class="resturant"><img src="{{ asset('adforest/logo/Vehicles.png') }}" alt="icon" class="img-icon">Vehicles</h3>
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs navbar-right" role="tablist">
                              <div ><img src="{{ asset('adforest/logo/more8.png') }}" style="    width: 30px;">  </div>
                            </ul>
<hr class="hr-main hr2rest">
                        </div>
                        <div class="clearfix"></div>
 <div class="clearfix"></div>
                            <div class="tab-content">
<div role="tabpanel" class="tab-pane active" id="men">


<div role="tabpanel" class="tab-pane" id="jewellery">
<div class="row">
 <section class="properties white-bg">
<div class="single-p-slide">
        <div class="col-md-4 moons">
            <!--======= IMAGE =========-->
            <div class="img" style="padding: 2px;
    min-height: 133px;"> <center><img class="img-responsive myimg" src="{{ asset('adforest/img/cars.jpg') }}" alt="" > </center>
            </div>
            <!--======= HOME INNER DETAILS =========-->
        
            <!--======= HOME DETAILS =========-->
            <div class="detail-sec"> <a href="#." style="    color: #000000;
    font-size: 12px;" class="font-montserrat">sweet home for small family</a><br> <span style="    font-size: 12px;" class="locate"><i class="fa fa-map-marker"></i> Dubai,Uae</span>
              
              <div class="share-p"> <i class="fa fa-money"></i> <span class="price font-montserrat">70000/Year AED</span></div>
            </div>
          
        </div>
        <div class="col-md-4 moons">
            <!--======= IMAGE =========-->
            <div class="img" style="padding: 2px;
    min-height: 133px;"> <center><img class="img-responsive myimg" src="{{ asset('adforest/img/house.jpg') }}" alt="" > </center>
            </div>
            <!--======= HOME INNER DETAILS =========-->
        
            <!--======= HOME DETAILS =========-->
            <div class="detail-sec"> <a href="#." style="    color: #000000;
    font-size: 12px;" class="font-montserrat">sweet home for small family</a><br> <span style="    font-size: 12px;" class="locate"><i class="fa fa-map-marker"></i> Dubai,Uae</span>
              
              <div class="share-p"> <i class="fa fa-money"></i> <span class="price font-montserrat">70000/Year AED</span></div>
            </div>
          
        </div>
        <div class="col-md-4 moons">
            <!--======= IMAGE =========-->
            <div class="img" style="padding: 2px;
    min-height: 133px;"> <center><img class="img-responsive myimg" src="{{ asset('adforest/img/1492892557.fdb54e3c509e8609252856da12d49a54.jpg') }}" alt="" > </center>
            </div>
            <!--======= HOME INNER DETAILS =========-->
        
            <!--======= HOME DETAILS =========-->
            <div class="detail-sec"> <a href="#." style="    color: #000000;
    font-size: 12px;" class="font-montserrat">sweet home for small family</a><br> <span style="    font-size: 12px;" class="locate"><i class="fa fa-map-marker"></i> Dubai,Uae</span>
              
              <div class="share-p"> <i class="fa fa-money"></i> <span class="price font-montserrat">70000/Year AED</span></div>
            </div>
          
        </div>
        <div class="col-md-4 moons">
            <!--======= IMAGE =========-->
            <div class="img" style="padding: 2px;
    min-height: 133px;"> <center><img class="img-responsive myimg" src="{{ asset('adforest/img/1492892557.fdb54e3c509e8609252856da12d49a54.jpg') }}" alt="" > </center>
            </div>
            <!--======= HOME INNER DETAILS =========-->
        
            <!--======= HOME DETAILS =========-->
            <div class="detail-sec"> <a href="#." style="    color: #000000;
    font-size: 12px;" class="font-montserrat">sweet home for small family</a><br> <span style="    font-size: 12px;" class="locate"><i class="fa fa-map-marker"></i> Dubai,Uae</span>
              
              <div class="share-p"> <i class="fa fa-money"></i> <span class="price font-montserrat">70000/Year AED</span></div>
            </div>
          
        </div>
        <div class="col-md-4 moons">
            <!--======= IMAGE =========-->
            <div class="img" style="padding: 2px;
    min-height: 133px;"> <center><img class="img-responsive myimg" src="{{ asset('adforest/img/1492892557.fdb54e3c509e8609252856da12d49a54.jpg') }}" alt="" > </center>
            </div>
            <!--======= HOME INNER DETAILS =========-->
        
            <!--======= HOME DETAILS =========-->
            <div class="detail-sec"> <a href="#." style="    color: #000000;
    font-size: 12px;" class="font-montserrat">sweet home for small family</a><br> <span style="    font-size: 12px;" class="locate"><i class="fa fa-map-marker"></i> Dubai,Uae</span>
              
              <div class="share-p"> <i class="fa fa-money"></i> <span class="price font-montserrat">70000/Year AED</span></div>
            </div>
          
        </div>
        <div class="col-md-4 moons">
            <!--======= IMAGE =========-->
            <div class="img" style="padding: 2px;
    min-height: 133px;"> <center><img class="img-responsive myimg" src="{{ asset('adforest/img/1492892557.fdb54e3c509e8609252856da12d49a54.jpg') }}" alt="" > </center>
            </div>
            <!--======= HOME INNER DETAILS =========-->
        
            <!--======= HOME DETAILS =========-->
            <div class="detail-sec"> <a href="#." style="    color: #000000;
    font-size: 12px;" class="font-montserrat">sweet home for small family</a><br> <span style="    font-size: 12px;" class="locate"><i class="fa fa-map-marker"></i> Dubai,Uae</span>
              
              <div class="share-p"> <i class="fa fa-money"></i> <span class="price font-montserrat">70000/Year AED</span></div>
            </div>
          
        </div>
        
</div>
</section>
</div>
</div>
</div>
  </div>






                        <div class="features-tab clearfix">
                            <h3 class="prof"><img src="{{ asset('adforest/logo/Health.png') }}"  alt="icon" class="img-icon">health</h3>
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs navbar-right" role="tablist">
                             <div ><img src={{ asset('adforest/logo/more.png') }} style="    width: 30px;">  </div>
                            </ul>
<hr class="hr-main hr1">
                        </div>

<div class="clearfix"></div>
                            <div class="tab-content">
<div role="tabpanel" class="tab-pane active" id="men">


<div role="tabpanel" class="tab-pane" id="jewellery">
<div class="row">
 <section class="properties white-bg">
<div class="single-p-slide">
        <div class="col-md-4 moons">
            <!--======= IMAGE =========-->
            <div class="img" style="padding: 2px;
    min-height: 133px;"> <center><img class="img-responsive myimg" src="{{ asset('adforest/img/cars.jpg') }}" alt="" > </center>
            </div>
            <!--======= HOME INNER DETAILS =========-->
        
            <!--======= HOME DETAILS =========-->
            <div class="detail-sec"> <a href="#." style="    color: #000000;
    font-size: 12px;" class="font-montserrat">sweet home for small family</a><br> <span style="    font-size: 12px;" class="locate"><i class="fa fa-map-marker"></i> Dubai,Uae</span>
              
              <div class="share-p"> <i class="fa fa-money"></i> <span class="price font-montserrat">70000/Year AED</span></div>
            </div>
          
        </div>
        <div class="col-md-4 moons">
            <!--======= IMAGE =========-->
            <div class="img" style="padding: 2px;
    min-height: 133px;"> <center><img class="img-responsive myimg" src="{{ asset('adforest/img/house.jpg') }}" alt="" > </center>
            </div>
            <!--======= HOME INNER DETAILS =========-->
        
            <!--======= HOME DETAILS =========-->
            <div class="detail-sec"> <a href="#." style="    color: #000000;
    font-size: 12px;" class="font-montserrat">sweet home for small family</a><br> <span style="    font-size: 12px;" class="locate"><i class="fa fa-map-marker"></i> Dubai,Uae</span>
              
              <div class="share-p"> <i class="fa fa-money"></i> <span class="price font-montserrat">70000/Year AED</span></div>
            </div>
          
        </div>
        <div class="col-md-4 moons">
            <!--======= IMAGE =========-->
            <div class="img" style="padding: 2px;
    min-height: 133px;"> <center><img class="img-responsive myimg" src="{{ asset('adforest/img/1492892557.fdb54e3c509e8609252856da12d49a54.jpg') }}" alt="" > </center>
            </div>
            <!--======= HOME INNER DETAILS =========-->
        
            <!--======= HOME DETAILS =========-->
            <div class="detail-sec"> <a href="#." style="    color: #000000;
    font-size: 12px;" class="font-montserrat">sweet home for small family</a><br> <span style="    font-size: 12px;" class="locate"><i class="fa fa-map-marker"></i> Dubai,Uae</span>
              
              <div class="share-p"> <i class="fa fa-money"></i> <span class="price font-montserrat">70000/Year AED</span></div>
            </div>
          
        </div>
        <div class="col-md-4 moons">
            <!--======= IMAGE =========-->
            <div class="img" style="padding: 2px;
    min-height: 133px;"> <center><img class="img-responsive myimg" src="{{ asset('adforest/img/1492892557.fdb54e3c509e8609252856da12d49a54.jpg') }}" alt="" > </center>
            </div>
            <!--======= HOME INNER DETAILS =========-->
        
            <!--======= HOME DETAILS =========-->
            <div class="detail-sec"> <a href="#." style="    color: #000000;
    font-size: 12px;" class="font-montserrat">sweet home for small family</a><br> <span style="    font-size: 12px;" class="locate"><i class="fa fa-map-marker"></i> Dubai,Uae</span>
              
              <div class="share-p"> <i class="fa fa-money"></i> <span class="price font-montserrat">70000/Year AED</span></div>
            </div>
          
        </div>
        <div class="col-md-4 moons">
            <!--======= IMAGE =========-->
            <div class="img" style="padding: 2px;
    min-height: 133px;"> <center><img class="img-responsive myimg" src="{{ asset('adforest/img/1492892557.fdb54e3c509e8609252856da12d49a54.jpg') }}" alt="" > </center>
            </div>
            <!--======= HOME INNER DETAILS =========-->
        
            <!--======= HOME DETAILS =========-->
            <div class="detail-sec"> <a href="#." style="    color: #000000;
    font-size: 12px;" class="font-montserrat">sweet home for small family</a><br> <span style="    font-size: 12px;" class="locate"><i class="fa fa-map-marker"></i> Dubai,Uae</span>
              
              <div class="share-p"> <i class="fa fa-money"></i> <span class="price font-montserrat">70000/Year AED</span></div>
            </div>
          
        </div>
        <div class="col-md-4 moons">
            <!--======= IMAGE =========-->
            <div class="img" style="padding: 2px;
    min-height: 133px;"> <center><img class="img-responsive myimg" src="{{ asset('adforest/img/1492892557.fdb54e3c509e8609252856da12d49a54.jpg') }}" alt="" > </center>
            </div>
            <!--======= HOME INNER DETAILS =========-->
        
            <!--======= HOME DETAILS =========-->
            <div class="detail-sec"> <a href="#." style="    color: #000000;
    font-size: 12px;" class="font-montserrat">sweet home for small family</a><br> <span style="    font-size: 12px;" class="locate"><i class="fa fa-map-marker"></i> Dubai,Uae</span>
              
              <div class="share-p"> <i class="fa fa-money"></i> <span class="price font-montserrat">70000/Year AED</span></div>
            </div>
          
        </div>
        
</div>
</section>
</div>
</div>
</div>
  </div>




    <div class="features-tab clearfix">
                            <h3 class="comm32"><img src="{{ asset('adforest/logo/Shopping.png') }}" alt="icon" class="img-icon">shopping</h3>
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs navbar-right" role="tablist">
                               <div ><img src="{{ asset('adforest/logo/more4.png') }}" style="    width: 30px;">  </div>
                            </ul>
<hr class="hr-main hr2comm32">
                        </div>
                        <div class="clearfix"></div>
<div class="clearfix"></div>
                            <div class="tab-content">
<div role="tabpanel" class="tab-pane active" id="men">


<div role="tabpanel" class="tab-pane" id="jewellery">
<div class="row">
 <section class="properties white-bg">
<div class="single-p-slide">
        <div class="col-md-4 moons">
            <!--======= IMAGE =========-->
            <div class="img" style="padding: 2px;
    min-height: 133px;"> <center><img class="img-responsive myimg" src="{{ asset('adforest/img/cars.jpg') }}" alt="" > </center>
            </div>
            <!--======= HOME INNER DETAILS =========-->

            <!--======= HOME DETAILS =========-->
            <div class="detail-sec"> <a href="#." style="    color: #000000;
    font-size: 12px;" class="font-montserrat">sweet home for small family</a><br> <span style="    font-size: 12px;" class="locate"><i class="fa fa-map-marker"></i> Dubai,Uae</span>

              <div class="share-p"> <i class="fa fa-money"></i> <span class="price font-montserrat">70000/Year AED</span></div>
            </div>

        </div>
        <div class="col-md-4 moons">
            <!--======= IMAGE =========-->
            <div class="img" style="padding: 2px;
    min-height: 133px;"> <center><img class="img-responsive myimg" src="{{ asset('adforest/img/house.jpg') }}" alt="" > </center>
            </div>
            <!--======= HOME INNER DETAILS =========-->

            <!--======= HOME DETAILS =========-->
            <div class="detail-sec"> <a href="#." style="    color: #000000;
    font-size: 12px;" class="font-montserrat">sweet home for small family</a><br> <span style="    font-size: 12px;" class="locate"><i class="fa fa-map-marker"></i> Dubai,Uae</span>

              <div class="share-p"> <i class="fa fa-money"></i> <span class="price font-montserrat">70000/Year AED</span></div>
            </div>

        </div>
        <div class="col-md-4 moons">
            <!--======= IMAGE =========-->
            <div class="img" style="padding: 2px;
    min-height: 133px;"> <center><img class="img-responsive myimg" src="{{ asset('adforest/img/1492892557.fdb54e3c509e8609252856da12d49a54.jpg') }}" alt="" > </center>
            </div>
            <!--======= HOME INNER DETAILS =========-->

            <!--======= HOME DETAILS =========-->
            <div class="detail-sec"> <a href="#." style="    color: #000000;
    font-size: 12px;" class="font-montserrat">sweet home for small family</a><br> <span style="    font-size: 12px;" class="locate"><i class="fa fa-map-marker"></i> Dubai,Uae</span>

              <div class="share-p"> <i class="fa fa-money"></i> <span class="price font-montserrat">70000/Year AED</span></div>
            </div>

        </div>
        <div class="col-md-4 moons">
            <!--======= IMAGE =========-->
            <div class="img" style="padding: 2px;
    min-height: 133px;"> <center><img class="img-responsive myimg" src="{{ asset('adforest/img/1492892557.fdb54e3c509e8609252856da12d49a54.jpg') }}" alt="" > </center>
            </div>
            <!--======= HOME INNER DETAILS =========-->

            <!--======= HOME DETAILS =========-->
            <div class="detail-sec"> <a href="#." style="    color: #000000;
    font-size: 12px;" class="font-montserrat">sweet home for small family</a><br> <span style="    font-size: 12px;" class="locate"><i class="fa fa-map-marker"></i> Dubai,Uae</span>

              <div class="share-p"> <i class="fa fa-money"></i> <span class="price font-montserrat">70000/Year AED</span></div>
            </div>

        </div>
        <div class="col-md-4 moons">
            <!--======= IMAGE =========-->
            <div class="img" style="padding: 2px;
    min-height: 133px;"> <center><img class="img-responsive myimg" src="{{ asset('adforest/img/1492892557.fdb54e3c509e8609252856da12d49a54.jpg') }}" alt="" > </center>
            </div>
            <!--======= HOME INNER DETAILS =========-->

            <!--======= HOME DETAILS =========-->
            <div class="detail-sec"> <a href="#." style="    color: #000000;
    font-size: 12px;" class="font-montserrat">sweet home for small family</a><br> <span style="    font-size: 12px;" class="locate"><i class="fa fa-map-marker"></i> Dubai,Uae</span>

              <div class="share-p"> <i class="fa fa-money"></i> <span class="price font-montserrat">70000/Year AED</span></div>
            </div>

        </div>
        <div class="col-md-4 moons">
            <!--======= IMAGE =========-->
            <div class="img" style="padding: 2px;
    min-height: 133px;"> <center><img class="img-responsive myimg" src="{{ asset('adforest/img/1492892557.fdb54e3c509e8609252856da12d49a54.jpg') }}" alt="" > </center>
            </div>
            <!--======= HOME INNER DETAILS =========-->

            <!--======= HOME DETAILS =========-->
            <div class="detail-sec"> <a href="#." style="    color: #000000;
    font-size: 12px;" class="font-montserrat">sweet home for small family</a><br> <span style="    font-size: 12px;" class="locate"><i class="fa fa-map-marker"></i> Dubai,Uae</span>

              <div class="share-p"> <i class="fa fa-money"></i> <span class="price font-montserrat">70000/Year AED</span></div>
            </div>

        </div>
        
</div>
</section>
</div>
</div>
</div>
  </div>


  <div class="features-tab clearfix">
                            <h3 class="comm33"><img src="{{ asset('adforest/logo/Careers.png') }}" alt="icon" class="img-icon">careers</h3>
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs navbar-right" role="tablist">
                               <div ><img src="{{ asset('adforest/logo/more16.png') }}" style="    width: 30px;">  </div>
                            </ul>
<hr class="hr-main hr2comm33">
                        </div>
                        <div class="clearfix"></div>
<div class="clearfix"></div>
                            <div class="tab-content">
<div role="tabpanel" class="tab-pane active" id="men">


<div role="tabpanel" class="tab-pane" id="jewellery">
<div class="row">
 <section class="properties white-bg">
<div class="single-p-slide">
        <div class="col-md-4 moons">
            <!--======= IMAGE =========-->
            <div class="img" style="padding: 2px;
    min-height: 133px;"> <center><img class="img-responsive myimg" src="{{ asset('adforest/img/cars.jpg') }}" alt="" > </center>
            </div>
            <!--======= HOME INNER DETAILS =========-->

            <!--======= HOME DETAILS =========-->
            <div class="detail-sec"> <a href="#." style="    color: #000000;
    font-size: 12px;" class="font-montserrat">sweet home for small family</a><br> <span style="    font-size: 12px;" class="locate"><i class="fa fa-map-marker"></i> Dubai,Uae</span>

              <div class="share-p"> <i class="fa fa-money"></i> <span class="price font-montserrat">70000/Year AED</span></div>
            </div>

        </div>
        <div class="col-md-4 moons">
            <!--======= IMAGE =========-->
            <div class="img" style="padding: 2px;
    min-height: 133px;"> <center><img class="img-responsive myimg" src="{{ asset('adforest/img/house.jpg') }}" alt="" > </center>
            </div>
            <!--======= HOME INNER DETAILS =========-->

            <!--======= HOME DETAILS =========-->
            <div class="detail-sec"> <a href="#." style="    color: #000000;
    font-size: 12px;" class="font-montserrat">sweet home for small family</a><br> <span style="    font-size: 12px;" class="locate"><i class="fa fa-map-marker"></i> Dubai,Uae</span>

              <div class="share-p"> <i class="fa fa-money"></i> <span class="price font-montserrat">70000/Year AED</span></div>
            </div>

        </div>
        <div class="col-md-4 moons">
            <!--======= IMAGE =========-->
            <div class="img" style="padding: 2px;
    min-height: 133px;"> <center><img class="img-responsive myimg" src="{{ asset('adforest/img/1492892557.fdb54e3c509e8609252856da12d49a54.jpg') }}" alt="" > </center>
            </div>
            <!--======= HOME INNER DETAILS =========-->

            <!--======= HOME DETAILS =========-->
            <div class="detail-sec"> <a href="#." style="    color: #000000;
    font-size: 12px;" class="font-montserrat">sweet home for small family</a><br> <span style="    font-size: 12px;" class="locate"><i class="fa fa-map-marker"></i> Dubai,Uae</span>

              <div class="share-p"> <i class="fa fa-money"></i> <span class="price font-montserrat">70000/Year AED</span></div>
            </div>

        </div>
        <div class="col-md-4 moons">
            <!--======= IMAGE =========-->
            <div class="img" style="padding: 2px;
    min-height: 133px;"> <center><img class="img-responsive myimg" src="{{ asset('adforest/img/1492892557.fdb54e3c509e8609252856da12d49a54.jpg') }}" alt="" > </center>
            </div>
            <!--======= HOME INNER DETAILS =========-->

            <!--======= HOME DETAILS =========-->
            <div class="detail-sec"> <a href="#." style="    color: #000000;
    font-size: 12px;" class="font-montserrat">sweet home for small family</a><br> <span style="    font-size: 12px;" class="locate"><i class="fa fa-map-marker"></i> Dubai,Uae</span>

              <div class="share-p"> <i class="fa fa-money"></i> <span class="price font-montserrat">70000/Year AED</span></div>
            </div>

        </div>
        <div class="col-md-4 moons">
            <!--======= IMAGE =========-->
            <div class="img" style="padding: 2px;
    min-height: 133px;"> <center><img class="img-responsive myimg" src="{{ asset('adforest/img/1492892557.fdb54e3c509e8609252856da12d49a54.jpg') }}" alt="" > </center>
            </div>
            <!--======= HOME INNER DETAILS =========-->

            <!--======= HOME DETAILS =========-->
            <div class="detail-sec"> <a href="#." style="    color: #000000;
    font-size: 12px;" class="font-montserrat">sweet home for small family</a><br> <span style="    font-size: 12px;" class="locate"><i class="fa fa-map-marker"></i> Dubai,Uae</span>

              <div class="share-p"> <i class="fa fa-money"></i> <span class="price font-montserrat">70000/Year AED</span></div>
            </div>

        </div>
        <div class="col-md-4 moons">
            <!--======= IMAGE =========-->
            <div class="img" style="padding: 2px;
    min-height: 133px;"> <center><img class="img-responsive myimg" src="{{ asset('adforest/img/1492892557.fdb54e3c509e8609252856da12d49a54.jpg') }}" alt="" > </center>
            </div>
            <!--======= HOME INNER DETAILS =========-->

            <!--======= HOME DETAILS =========-->
            <div class="detail-sec"> <a href="#." style="    color: #000000;
    font-size: 12px;" class="font-montserrat">sweet home for small family</a><br> <span style="    font-size: 12px;" class="locate"><i class="fa fa-map-marker"></i> Dubai,Uae</span>

              <div class="share-p"> <i class="fa fa-money"></i> <span class="price font-montserrat">70000/Year AED</span></div>
            </div>

        </div>

</div>
</section>
</div>
</div>
</div>
  </div>


 <div class="features-tab clearfix">
                            <h3 class="arti1"><img src="{{ asset('adforest/logo/Agriculture.png') }}" alt="icon" class="img-icon">agriculture</h3>
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs navbar-right" role="tablist">
                               <div ><img src="{{ asset('adforest/logo/more2.png') }}" style="    width: 30px;">  </div>
                                  </ul>
<hr class="hr-main artihr">
                        </div>
<div class="clearfix"></div>
<div class="clearfix"></div>
                            <div class="tab-content">
<div role="tabpanel" class="tab-pane active" id="men">


<div role="tabpanel" class="tab-pane" id="jewellery">
<div class="row">
 <section class="properties white-bg">
<div class="single-p-slide">
        <div class="col-md-4 moons">
            <!--======= IMAGE =========-->
            <div class="img" style="padding: 2px;
    min-height: 133px;"> <center><img class="img-responsive myimg" src="{{ asset('adforest/img/cars.jpg') }}" alt="" > </center>
            </div>
            <!--======= HOME INNER DETAILS =========-->
        
            <!--======= HOME DETAILS =========-->
            <div class="detail-sec"> <a href="#." style="    color: #000000;
    font-size: 12px;" class="font-montserrat">sweet home for small family</a><br> <span style="    font-size: 12px;" class="locate"><i class="fa fa-map-marker"></i> Dubai,Uae</span>
              
              <div class="share-p"> <i class="fa fa-money"></i> <span class="price font-montserrat">70000/Year AED</span></div>
            </div>
          
        </div>
        <div class="col-md-4 moons">
            <!--======= IMAGE =========-->
            <div class="img" style="padding: 2px;
    min-height: 133px;"> <center><img class="img-responsive myimg" src="{{ asset('adforest/img/house.jpg') }}" alt="" > </center>
            </div>
            <!--======= HOME INNER DETAILS =========-->
        
            <!--======= HOME DETAILS =========-->
            <div class="detail-sec"> <a href="#." style="    color: #000000;
    font-size: 12px;" class="font-montserrat">sweet home for small family</a><br> <span style="    font-size: 12px;" class="locate"><i class="fa fa-map-marker"></i> Dubai,Uae</span>
              
              <div class="share-p"> <i class="fa fa-money"></i> <span class="price font-montserrat">70000/Year AED</span></div>
            </div>
          
        </div>
        <div class="col-md-4 moons">
            <!--======= IMAGE =========-->
            <div class="img" style="padding: 2px;
    min-height: 133px;"> <center><img class="img-responsive myimg" src="{{ asset('adforest/img/1492892557.fdb54e3c509e8609252856da12d49a54.jpg') }}" alt="" > </center>
            </div>
            <!--======= HOME INNER DETAILS =========-->
        
            <!--======= HOME DETAILS =========-->
            <div class="detail-sec"> <a href="#." style="    color: #000000;
    font-size: 12px;" class="font-montserrat">sweet home for small family</a><br> <span style="    font-size: 12px;" class="locate"><i class="fa fa-map-marker"></i> Dubai,Uae</span>
              
              <div class="share-p"> <i class="fa fa-money"></i> <span class="price font-montserrat">70000/Year AED</span></div>
            </div>
          
        </div>
        <div class="col-md-4 moons">
            <!--======= IMAGE =========-->
            <div class="img" style="padding: 2px;
    min-height: 133px;"> <center><img class="img-responsive myimg" src="{{ asset('adforest/img/1492892557.fdb54e3c509e8609252856da12d49a54.jpg') }}" alt="" > </center>
            </div>
            <!--======= HOME INNER DETAILS =========-->
        
            <!--======= HOME DETAILS =========-->
            <div class="detail-sec"> <a href="#." style="    color: #000000;
    font-size: 12px;" class="font-montserrat">sweet home for small family</a><br> <span style="    font-size: 12px;" class="locate"><i class="fa fa-map-marker"></i> Dubai,Uae</span>
              
              <div class="share-p"> <i class="fa fa-money"></i> <span class="price font-montserrat">70000/Year AED</span></div>
            </div>
          
        </div>
        <div class="col-md-4 moons">
            <!--======= IMAGE =========-->
            <div class="img" style="padding: 2px;
    min-height: 133px;"> <center><img class="img-responsive myimg" src="{{ asset('adforest/img/1492892557.fdb54e3c509e8609252856da12d49a54.jpg') }}" alt="" > </center>
            </div>
            <!--======= HOME INNER DETAILS =========-->
        
            <!--======= HOME DETAILS =========-->
            <div class="detail-sec"> <a href="#." style="    color: #000000;
    font-size: 12px;" class="font-montserrat">sweet home for small family</a><br> <span style="    font-size: 12px;" class="locate"><i class="fa fa-map-marker"></i> Dubai,Uae</span>
              
              <div class="share-p"> <i class="fa fa-money"></i> <span class="price font-montserrat">70000/Year AED</span></div>
            </div>
          
        </div>
        <div class="col-md-4 moons">
            <!--======= IMAGE =========-->
            <div class="img" style="padding: 2px;
    min-height: 133px;"> <center><img class="img-responsive myimg" src="{{ asset('adforest/img/1492892557.fdb54e3c509e8609252856da12d49a54.jpg') }}" alt="" > </center>
            </div>
            <!--======= HOME INNER DETAILS =========-->
        
            <!--======= HOME DETAILS =========-->
            <div class="detail-sec"> <a href="#." style="    color: #000000;
    font-size: 12px;" class="font-montserrat">sweet home for small family</a><br> <span style="    font-size: 12px;" class="locate"><i class="fa fa-map-marker"></i> Dubai,Uae</span>
              
              <div class="share-p"> <i class="fa fa-money"></i> <span class="price font-montserrat">70000/Year AED</span></div>
            </div>
          
        </div>
        
</div>
</section>
</div>
</div>
</div>
  </div>


   <!--  services -->
                      <div class="features-tab clearfix">
                            <h3 class="artiser"><img src="{{ asset('adforest/logo/Services.png') }}" alt="icon" class="img-icon">services</h3>
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs navbar-right" role="tablist">
                                 <div ><img src="{{ asset('adforest/logo/more15.png') }}" style="    width: 30px;">  </div>
                                  </ul>
<hr class="hr-main artiserhr">
                        </div>
                        <div class="clearfix"></div>
<div class="clearfix"></div>
                            <div class="tab-content">
<div role="tabpanel" class="tab-pane active" id="men">


<div role="tabpanel" class="tab-pane" id="jewellery">
<div class="row">
 <section class="properties white-bg">
<div class="single-p-slide">
        <div class="col-md-4 moons">
            <!--======= IMAGE =========-->
            <div class="img" style="padding: 2px;
    min-height: 133px;"> <center><img class="img-responsive myimg" src="{{ asset('adforest/img/cars.jpg') }}" alt="" > </center>
            </div>
            <!--======= HOME INNER DETAILS =========-->
        
            <!--======= HOME DETAILS =========-->
            <div class="detail-sec"> <a href="#." style="    color: #000000;
    font-size: 12px;" class="font-montserrat">sweet home for small family</a><br> <span style="    font-size: 12px;" class="locate"><i class="fa fa-map-marker"></i> Dubai,Uae</span>
              
              <div class="share-p"> <i class="fa fa-money"></i> <span class="price font-montserrat">70000/Year AED</span></div>
            </div>
          
        </div>
        <div class="col-md-4 moons">
            <!--======= IMAGE =========-->
            <div class="img" style="padding: 2px;
    min-height: 133px;"> <center><img class="img-responsive myimg" src="{{ asset('adforest/img/house.jpg') }}" alt="" > </center>
            </div>
            <!--======= HOME INNER DETAILS =========-->
        
            <!--======= HOME DETAILS =========-->
            <div class="detail-sec"> <a href="#." style="    color: #000000;
    font-size: 12px;" class="font-montserrat">sweet home for small family</a><br> <span style="    font-size: 12px;" class="locate"><i class="fa fa-map-marker"></i> Dubai,Uae</span>
              
              <div class="share-p"> <i class="fa fa-money"></i> <span class="price font-montserrat">70000/Year AED</span></div>
            </div>
          
        </div>
        <div class="col-md-4 moons">
            <!--======= IMAGE =========-->
            <div class="img" style="padding: 2px;
    min-height: 133px;"> <center><img class="img-responsive myimg" src="{{ asset('adforest/img/1492892557.fdb54e3c509e8609252856da12d49a54.jpg') }}" alt="" > </center>
            </div>
            <!--======= HOME INNER DETAILS =========-->
        
            <!--======= HOME DETAILS =========-->
            <div class="detail-sec"> <a href="#." style="    color: #000000;
    font-size: 12px;" class="font-montserrat">sweet home for small family</a><br> <span style="    font-size: 12px;" class="locate"><i class="fa fa-map-marker"></i> Dubai,Uae</span>
              
              <div class="share-p"> <i class="fa fa-money"></i> <span class="price font-montserrat">70000/Year AED</span></div>
            </div>
          
        </div>
        <div class="col-md-4 moons">
            <!--======= IMAGE =========-->
            <div class="img" style="padding: 2px;
    min-height: 133px;"> <center><img class="img-responsive myimg" src="{{ asset('adforest/img/1492892557.fdb54e3c509e8609252856da12d49a54.jpg') }}" alt="" > </center>
            </div>
            <!--======= HOME INNER DETAILS =========-->
        
            <!--======= HOME DETAILS =========-->
            <div class="detail-sec"> <a href="#." style="    color: #000000;
    font-size: 12px;" class="font-montserrat">sweet home for small family</a><br> <span style="    font-size: 12px;" class="locate"><i class="fa fa-map-marker"></i> Dubai,Uae</span>
              
              <div class="share-p"> <i class="fa fa-money"></i> <span class="price font-montserrat">70000/Year AED</span></div>
            </div>
          
        </div>
        <div class="col-md-4 moons">
            <!--======= IMAGE =========-->
            <div class="img" style="padding: 2px;
    min-height: 133px;"> <center><img class="img-responsive myimg" src="{{ asset('adforest/img/1492892557.fdb54e3c509e8609252856da12d49a54.jpg') }}" alt="" > </center>
            </div>
            <!--======= HOME INNER DETAILS =========-->
        
            <!--======= HOME DETAILS =========-->
            <div class="detail-sec"> <a href="#." style="    color: #000000;
    font-size: 12px;" class="font-montserrat">sweet home for small family</a><br> <span style="    font-size: 12px;" class="locate"><i class="fa fa-map-marker"></i> Dubai,Uae</span>
              
              <div class="share-p"> <i class="fa fa-money"></i> <span class="price font-montserrat">70000/Year AED</span></div>
            </div>
          
        </div>
        <div class="col-md-4 moons">
            <!--======= IMAGE =========-->
            <div class="img" style="padding: 2px;
    min-height: 133px;"> <center><img class="img-responsive myimg" src="{{ asset('adforest/img/1492892557.fdb54e3c509e8609252856da12d49a54.jpg') }}" alt="" > </center>
            </div>
            <!--======= HOME INNER DETAILS =========-->
        
            <!--======= HOME DETAILS =========-->
            <div class="detail-sec"> <a href="#." style="    color: #000000;
    font-size: 12px;" class="font-montserrat">sweet home for small family</a><br> <span style="    font-size: 12px;" class="locate"><i class="fa fa-map-marker"></i> Dubai,Uae</span>
              
              <div class="share-p"> <i class="fa fa-money"></i> <span class="price font-montserrat">70000/Year AED</span></div>
            </div>
          
        </div>
        
</div>
</section>
</div>
</div>
</div>
  </div>


    <div class="features-tab clearfix">
                            <h3 class="artiindus"><img src="{{ asset('adforest/logo/Industrial.png') }}" alt="icon" class="img-icon">industrial</h3>
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs navbar-right" role="tablist">
                                <div ><img src="{{ asset('adforest/logo/more10.png') }}" style="    width: 30px;">  </div>
                                  </ul>
<hr class="hr-main artiindushr">
                        </div>
                        <div class="clearfix"></div>
<div class="clearfix"></div>
                            <div class="tab-content">
<div role="tabpanel" class="tab-pane active" id="men">


<div role="tabpanel" class="tab-pane" id="jewellery">
<div class="row">
 <section class="properties white-bg">
<div class="single-p-slide">
        <div class="col-md-4 moons">
            <!--======= IMAGE =========-->
            <div class="img" style="padding: 2px;
    min-height: 133px;"> <center><img class="img-responsive myimg" src="{{ asset('adforest/img/cars.jpg') }}" alt="" > </center>
            </div>
            <!--======= HOME INNER DETAILS =========-->
        
            <!--======= HOME DETAILS =========-->
            <div class="detail-sec"> <a href="#." style="    color: #000000;
    font-size: 12px;" class="font-montserrat">sweet home for small family</a><br> <span style="    font-size: 12px;" class="locate"><i class="fa fa-map-marker"></i> Dubai,Uae</span>
              
              <div class="share-p"> <i class="fa fa-money"></i> <span class="price font-montserrat">70000/Year AED</span></div>
            </div>
          
        </div>
        <div class="col-md-4 moons">
            <!--======= IMAGE =========-->
            <div class="img" style="padding: 2px;
    min-height: 133px;"> <center><img class="img-responsive myimg" src="{{ asset('adforest/img/house.jpg') }}" alt="" > </center>
            </div>
            <!--======= HOME INNER DETAILS =========-->
        
            <!--======= HOME DETAILS =========-->
            <div class="detail-sec"> <a href="#." style="    color: #000000;
    font-size: 12px;" class="font-montserrat">sweet home for small family</a><br> <span style="    font-size: 12px;" class="locate"><i class="fa fa-map-marker"></i> Dubai,Uae</span>
              
              <div class="share-p"> <i class="fa fa-money"></i> <span class="price font-montserrat">70000/Year AED</span></div>
            </div>
          
        </div>
        <div class="col-md-4 moons">
            <!--======= IMAGE =========-->
            <div class="img" style="padding: 2px;
    min-height: 133px;"> <center><img class="img-responsive myimg" src="{{ asset('adforest/img/1492892557.fdb54e3c509e8609252856da12d49a54.jpg') }}" alt="" > </center>
            </div>
            <!--======= HOME INNER DETAILS =========-->
        
            <!--======= HOME DETAILS =========-->
            <div class="detail-sec"> <a href="#." style="    color: #000000;
    font-size: 12px;" class="font-montserrat">sweet home for small family</a><br> <span style="    font-size: 12px;" class="locate"><i class="fa fa-map-marker"></i> Dubai,Uae</span>
              
              <div class="share-p"> <i class="fa fa-money"></i> <span class="price font-montserrat">70000/Year AED</span></div>
            </div>
          
        </div>
        <div class="col-md-4 moons">
            <!--======= IMAGE =========-->
            <div class="img" style="padding: 2px;
    min-height: 133px;"> <center><img class="img-responsive myimg" src="{{ asset('adforest/img/1492892557.fdb54e3c509e8609252856da12d49a54.jpg') }}" alt="" > </center>
            </div>
            <!--======= HOME INNER DETAILS =========-->
        
            <!--======= HOME DETAILS =========-->
            <div class="detail-sec"> <a href="#." style="    color: #000000;
    font-size: 12px;" class="font-montserrat">sweet home for small family</a><br> <span style="    font-size: 12px;" class="locate"><i class="fa fa-map-marker"></i> Dubai,Uae</span>
              
              <div class="share-p"> <i class="fa fa-money"></i> <span class="price font-montserrat">70000/Year AED</span></div>
            </div>
          
        </div>
        <div class="col-md-4 moons">
            <!--======= IMAGE =========-->
            <div class="img" style="padding: 2px;
    min-height: 133px;"> <center><img class="img-responsive myimg" src="{{ asset('adforest/img/1492892557.fdb54e3c509e8609252856da12d49a54.jpg') }}" alt="" > </center>
            </div>
            <!--======= HOME INNER DETAILS =========-->
        
            <!--======= HOME DETAILS =========-->
            <div class="detail-sec"> <a href="#." style="    color: #000000;
    font-size: 12px;" class="font-montserrat">sweet home for small family</a><br> <span style="    font-size: 12px;" class="locate"><i class="fa fa-map-marker"></i> Dubai,Uae</span>
              
              <div class="share-p"> <i class="fa fa-money"></i> <span class="price font-montserrat">70000/Year AED</span></div>
            </div>
          
        </div>
        <div class="col-md-4 moons">
            <!--======= IMAGE =========-->
            <div class="img" style="padding: 2px;
    min-height: 133px;"> <center><img class="img-responsive myimg" src="{{ asset('adforest/img/1492892557.fdb54e3c509e8609252856da12d49a54.jpg') }}" alt="" > </center>
            </div>
            <!--======= HOME INNER DETAILS =========-->
        
            <!--======= HOME DETAILS =========-->
            <div class="detail-sec"> <a href="#." style="    color: #000000;
    font-size: 12px;" class="font-montserrat">sweet home for small family</a><br> <span style="    font-size: 12px;" class="locate"><i class="fa fa-map-marker"></i> Dubai,Uae</span>
              
              <div class="share-p"> <i class="fa fa-money"></i> <span class="price font-montserrat">70000/Year AED</span></div>
            </div>
          
        </div>
        
</div>
</section>
</div>
</div>
</div>
  </div>


    <div class="features-tab clearfix">
                            <h3 class="artiwhol"><img src="{{ asset('adforest/logo/Wholesalers.png') }}" alt="icon" class="img-icon">wholesalers</h3>
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs navbar-right" role="tablist">
                            <div ><img src="{{ asset('adforest/logo/more14.png') }}" style="    width: 30px;">  </div>
                                  </ul>
<hr class="hr-main artiwholhr">
                        </div>
                        <div class="clearfix"></div>  
<div class="clearfix"></div>
                            <div class="tab-content">
<div role="tabpanel" class="tab-pane active" id="men">


<div role="tabpanel" class="tab-pane" id="jewellery">
<div class="row">
 <section class="properties white-bg">
<div class="single-p-slide">
        <div class="col-md-4 moons">
            <!--======= IMAGE =========-->
            <div class="img" style="padding: 2px;
    min-height: 133px;"> <center><img class="img-responsive myimg" src="{{ asset('adforest/img/cars.jpg') }}" alt="" > </center>
            </div>
            <!--======= HOME INNER DETAILS =========-->
        
            <!--======= HOME DETAILS =========-->
            <div class="detail-sec"> <a href="#." style="    color: #000000;
    font-size: 12px;" class="font-montserrat">sweet home for small family</a><br> <span style="    font-size: 12px;" class="locate"><i class="fa fa-map-marker"></i> Dubai,Uae</span>
              
              <div class="share-p"> <i class="fa fa-money"></i> <span class="price font-montserrat">70000/Year AED</span></div>
            </div>
          
        </div>
        <div class="col-md-4 moons">
            <!--======= IMAGE =========-->
            <div class="img" style="padding: 2px;
    min-height: 133px;"> <center><img class="img-responsive myimg" src="{{ asset('adforest/img/house.jpg') }}" alt="" > </center>
            </div>
            <!--======= HOME INNER DETAILS =========-->
        
            <!--======= HOME DETAILS =========-->
            <div class="detail-sec"> <a href="#." style="    color: #000000;
    font-size: 12px;" class="font-montserrat">sweet home for small family</a><br> <span style="    font-size: 12px;" class="locate"><i class="fa fa-map-marker"></i> Dubai,Uae</span>
              
              <div class="share-p"> <i class="fa fa-money"></i> <span class="price font-montserrat">70000/Year AED</span></div>
            </div>
          
        </div>
        <div class="col-md-4 moons">
            <!--======= IMAGE =========-->
            <div class="img" style="padding: 2px;
    min-height: 133px;"> <center><img class="img-responsive myimg" src="{{ asset('adforest/img/1492892557.fdb54e3c509e8609252856da12d49a54.jpg') }}" alt="" > </center>
            </div>
            <!--======= HOME INNER DETAILS =========-->
        
            <!--======= HOME DETAILS =========-->
            <div class="detail-sec"> <a href="#." style="    color: #000000;
    font-size: 12px;" class="font-montserrat">sweet home for small family</a><br> <span style="    font-size: 12px;" class="locate"><i class="fa fa-map-marker"></i> Dubai,Uae</span>
              
              <div class="share-p"> <i class="fa fa-money"></i> <span class="price font-montserrat">70000/Year AED</span></div>
            </div>
          
        </div>
        <div class="col-md-4 moons">
            <!--======= IMAGE =========-->
            <div class="img" style="padding: 2px;
    min-height: 133px;"> <center><img class="img-responsive myimg" src="{{ asset('adforest/img/1492892557.fdb54e3c509e8609252856da12d49a54.jpg') }}" alt="" > </center>
            </div>
            <!--======= HOME INNER DETAILS =========-->
        
            <!--======= HOME DETAILS =========-->
            <div class="detail-sec"> <a href="#." style="    color: #000000;
    font-size: 12px;" class="font-montserrat">sweet home for small family</a><br> <span style="    font-size: 12px;" class="locate"><i class="fa fa-map-marker"></i> Dubai,Uae</span>
              
              <div class="share-p"> <i class="fa fa-money"></i> <span class="price font-montserrat">70000/Year AED</span></div>
            </div>
          
        </div>
        <div class="col-md-4 moons">
            <!--======= IMAGE =========-->
            <div class="img" style="padding: 2px;
    min-height: 133px;"> <center><img class="img-responsive myimg" src="{{ asset('adforest/img/1492892557.fdb54e3c509e8609252856da12d49a54.jpg') }}" alt="" > </center>
            </div>
            <!--======= HOME INNER DETAILS =========-->
        
            <!--======= HOME DETAILS =========-->
            <div class="detail-sec"> <a href="#." style="    color: #000000;
    font-size: 12px;" class="font-montserrat">sweet home for small family</a><br> <span style="    font-size: 12px;" class="locate"><i class="fa fa-map-marker"></i> Dubai,Uae</span>
              
              <div class="share-p"> <i class="fa fa-money"></i> <span class="price font-montserrat">70000/Year AED</span></div>
            </div>
          
        </div>
        <div class="col-md-4 moons">
            <!--======= IMAGE =========-->
            <div class="img" style="padding: 2px;
    min-height: 133px;"> <center><img class="img-responsive myimg" src="{{ asset('adforest/img/1492892557.fdb54e3c509e8609252856da12d49a54.jpg') }}" alt="" > </center>
            </div>
            <!--======= HOME INNER DETAILS =========-->
        
            <!--======= HOME DETAILS =========-->
            <div class="detail-sec"> <a href="#." style="    color: #000000;
    font-size: 12px;" class="font-montserrat">sweet home for small family</a><br> <span style="    font-size: 12px;" class="locate"><i class="fa fa-map-marker"></i> Dubai,Uae</span>
              
              <div class="share-p"> <i class="fa fa-money"></i> <span class="price font-montserrat">70000/Year AED</span></div>
            </div>
          
        </div>
        
</div>
</section>
</div>
</div>
</div>
  </div>



     <div class="features-tab clearfix">
                            <h3 class="artiexhi"><img src="{{ asset('adforest/logo/Exhibition.png') }}" alt="icon" class="img-icon">exhibitions</h3>
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs navbar-right" role="tablist">
                                  <div ><img src="{{ asset('adforest/logo/more13.png') }}" style="    width: 30px;">  </div>
                                  </ul>
<hr class="hr-main artiexhihr">
                        </div>
                        <div class="clearfix"></div>
<div class="clearfix"></div>
                            <div class="tab-content">
<div role="tabpanel" class="tab-pane active" id="men">


<div role="tabpanel" class="tab-pane" id="jewellery">
<div class="row">
 <section class="properties white-bg">
<div class="single-p-slide">
        <div class="col-md-4 moons">
            <!--======= IMAGE =========-->
            <div class="img" style="padding: 2px;
    min-height: 133px;"> <center><img class="img-responsive myimg" src="{{ asset('adforest/img/cars.jpg') }}" alt="" > </center>
            </div>
            <!--======= HOME INNER DETAILS =========-->
        
            <!--======= HOME DETAILS =========-->
            <div class="detail-sec"> <a href="#." style="    color: #000000;
    font-size: 12px;" class="font-montserrat">sweet home for small family</a><br> <span style="    font-size: 12px;" class="locate"><i class="fa fa-map-marker"></i> Dubai,Uae</span>
              
              <div class="share-p"> <i class="fa fa-money"></i> <span class="price font-montserrat">70000/Year AED</span></div>
            </div>
          
        </div>
        <div class="col-md-4 moons">
            <!--======= IMAGE =========-->
            <div class="img" style="padding: 2px;
    min-height: 133px;"> <center><img class="img-responsive myimg" src="{{ asset('adforest/img/house.jpg') }}" alt="" > </center>
            </div>
            <!--======= HOME INNER DETAILS =========-->
        
            <!--======= HOME DETAILS =========-->
            <div class="detail-sec"> <a href="#." style="    color: #000000;
    font-size: 12px;" class="font-montserrat">sweet home for small family</a><br> <span style="    font-size: 12px;" class="locate"><i class="fa fa-map-marker"></i> Dubai,Uae</span>
              
              <div class="share-p"> <i class="fa fa-money"></i> <span class="price font-montserrat">70000/Year AED</span></div>
            </div>
          
        </div>
        <div class="col-md-4 moons">
            <!--======= IMAGE =========-->
            <div class="img" style="padding: 2px;
    min-height: 133px;"> <center><img class="img-responsive myimg" src="{{ asset('adforest/img/1492892557.fdb54e3c509e8609252856da12d49a54.jpg') }}" alt="" > </center>
            </div>
            <!--======= HOME INNER DETAILS =========-->
        
            <!--======= HOME DETAILS =========-->
            <div class="detail-sec"> <a href="#." style="    color: #000000;
    font-size: 12px;" class="font-montserrat">sweet home for small family</a><br> <span style="    font-size: 12px;" class="locate"><i class="fa fa-map-marker"></i> Dubai,Uae</span>
              
              <div class="share-p"> <i class="fa fa-money"></i> <span class="price font-montserrat">70000/Year AED</span></div>
            </div>
          
        </div>
        <div class="col-md-4 moons">
            <!--======= IMAGE =========-->
            <div class="img" style="padding: 2px;
    min-height: 133px;"> <center><img class="img-responsive myimg" src="{{ asset('adforest/img/1492892557.fdb54e3c509e8609252856da12d49a54.jpg') }}" alt="" > </center>
            </div>
            <!--======= HOME INNER DETAILS =========-->
        
            <!--======= HOME DETAILS =========-->
            <div class="detail-sec"> <a href="#." style="    color: #000000;
    font-size: 12px;" class="font-montserrat">sweet home for small family</a><br> <span style="    font-size: 12px;" class="locate"><i class="fa fa-map-marker"></i> Dubai,Uae</span>
              
              <div class="share-p"> <i class="fa fa-money"></i> <span class="price font-montserrat">70000/Year AED</span></div>
            </div>
          
        </div>
        <div class="col-md-4 moons">
            <!--======= IMAGE =========-->
            <div class="img" style="padding: 2px;
    min-height: 133px;"> <center><img class="img-responsive myimg" src="{{ asset('adforest/img/1492892557.fdb54e3c509e8609252856da12d49a54.jpg') }}" alt="" > </center>
            </div>
            <!--======= HOME INNER DETAILS =========-->
        
            <!--======= HOME DETAILS =========-->
            <div class="detail-sec"> <a href="#." style="    color: #000000;
    font-size: 12px;" class="font-montserrat">sweet home for small family</a><br> <span style="    font-size: 12px;" class="locate"><i class="fa fa-map-marker"></i> Dubai,Uae</span>
              
              <div class="share-p"> <i class="fa fa-money"></i> <span class="price font-montserrat">70000/Year AED</span></div>
            </div>
          
        </div>
        <div class="col-md-4 moons">
            <!--======= IMAGE =========-->
            <div class="img" style="padding: 2px;
    min-height: 133px;"> <center><img class="img-responsive myimg" src="{{ asset('adforest/img/1492892557.fdb54e3c509e8609252856da12d49a54.jpg') }}" alt="" > </center>
            </div>
            <!--======= HOME INNER DETAILS =========-->
        
            <!--======= HOME DETAILS =========-->
            <div class="detail-sec"> <a href="#." style="    color: #000000;
    font-size: 12px;" class="font-montserrat">sweet home for small family</a><br> <span style="    font-size: 12px;" class="locate"><i class="fa fa-map-marker"></i> Dubai,Uae</span>
              
              <div class="share-p"> <i class="fa fa-money"></i> <span class="price font-montserrat">70000/Year AED</span></div>
            </div>
          
        </div>
        
</div>
</section>
</div>
</div>
</div>
  </div>



     <div class="features-tab clearfix">
                            <h3 class="artiten"><img src="{{ asset('adforest/logo/Tenders.png') }}" alt="icon" class="img-icon">tenders</h3>
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs navbar-right" role="tablist">
                                 <div ><img src="{{ asset('adforest/logo/more132.png') }}" style="    width: 30px;">  </div>
                                  </ul>
<hr class="hr-main artitenhr">
                        </div>
                        <div class="clearfix"></div>
<div class="clearfix"></div>
                            <div class="tab-content">
<div role="tabpanel" class="tab-pane active" id="men">


<div role="tabpanel" class="tab-pane" id="jewellery">
<div class="row">
 <section class="properties white-bg">
<div class="single-p-slide">
        <div class="col-md-4 moons">
            <!--======= IMAGE =========-->
            <div class="img" style="padding: 2px;
    min-height: 133px;"> <center><img class="img-responsive myimg" src="{{ asset('adforest/img/cars.jpg') }}" alt="" > </center>
            </div>
            <!--======= HOME INNER DETAILS =========-->
        
            <!--======= HOME DETAILS =========-->
            <div class="detail-sec"> <a href="#." style="    color: #000000;
    font-size: 12px;" class="font-montserrat">sweet home for small family</a><br> <span style="    font-size: 12px;" class="locate"><i class="fa fa-map-marker"></i> Dubai,Uae</span>
              
              <div class="share-p"> <i class="fa fa-money"></i> <span class="price font-montserrat">70000/Year AED</span></div>
            </div>
          
        </div>
        <div class="col-md-4 moons">
            <!--======= IMAGE =========-->
            <div class="img" style="padding: 2px;
    min-height: 133px;"> <center><img class="img-responsive myimg" src="{{ asset('adforest/img/house.jpg') }}" alt="" > </center>
            </div>
            <!--======= HOME INNER DETAILS =========-->
        
            <!--======= HOME DETAILS =========-->
            <div class="detail-sec"> <a href="#." style="    color: #000000;
    font-size: 12px;" class="font-montserrat">sweet home for small family</a><br> <span style="    font-size: 12px;" class="locate"><i class="fa fa-map-marker"></i> Dubai,Uae</span>
              
              <div class="share-p"> <i class="fa fa-money"></i> <span class="price font-montserrat">70000/Year AED</span></div>
            </div>
          
        </div>
        <div class="col-md-4 moons">
            <!--======= IMAGE =========-->
            <div class="img" style="padding: 2px;
    min-height: 133px;"> <center><img class="img-responsive myimg" src="{{ asset('adforest/img/1492892557.fdb54e3c509e8609252856da12d49a54.jpg') }}" alt="" > </center>
            </div>
            <!--======= HOME INNER DETAILS =========-->
        
            <!--======= HOME DETAILS =========-->
            <div class="detail-sec"> <a href="#." style="    color: #000000;
    font-size: 12px;" class="font-montserrat">sweet home for small family</a><br> <span style="    font-size: 12px;" class="locate"><i class="fa fa-map-marker"></i> Dubai,Uae</span>
              
              <div class="share-p"> <i class="fa fa-money"></i> <span class="price font-montserrat">70000/Year AED</span></div>
            </div>
          
        </div>
        <div class="col-md-4 moons">
            <!--======= IMAGE =========-->
            <div class="img" style="padding: 2px;
    min-height: 133px;"> <center><img class="img-responsive myimg" src="{{ asset('adforest/img/1492892557.fdb54e3c509e8609252856da12d49a54.jpg') }}" alt="" > </center>
            </div>
            <!--======= HOME INNER DETAILS =========-->
        
            <!--======= HOME DETAILS =========-->
            <div class="detail-sec"> <a href="#." style="    color: #000000;
    font-size: 12px;" class="font-montserrat">sweet home for small family</a><br> <span style="    font-size: 12px;" class="locate"><i class="fa fa-map-marker"></i> Dubai,Uae</span>
              
              <div class="share-p"> <i class="fa fa-money"></i> <span class="price font-montserrat">70000/Year AED</span></div>
            </div>
          
        </div>
        <div class="col-md-4 moons">
            <!--======= IMAGE =========-->
            <div class="img" style="padding: 2px;
    min-height: 133px;"> <center><img class="img-responsive myimg" src="{{ asset('adforest/img/1492892557.fdb54e3c509e8609252856da12d49a54.jpg') }}" alt="" > </center>
            </div>
            <!--======= HOME INNER DETAILS =========-->
        
            <!--======= HOME DETAILS =========-->
            <div class="detail-sec"> <a href="#." style="    color: #000000;
    font-size: 12px;" class="font-montserrat">sweet home for small family</a><br> <span style="    font-size: 12px;" class="locate"><i class="fa fa-map-marker"></i> Dubai,Uae</span>
              
              <div class="share-p"> <i class="fa fa-money"></i> <span class="price font-montserrat">70000/Year AED</span></div>
            </div>
          
        </div>
        <div class="col-md-4 moons">
            <!--======= IMAGE =========-->
            <div class="img" style="padding: 2px;
    min-height: 133px;"> <center><img class="img-responsive myimg" src="{{ asset('adforest/img/1492892557.fdb54e3c509e8609252856da12d49a54.jpg') }}" alt="" > </center>
            </div>
            <!--======= HOME INNER DETAILS =========-->
        
            <!--======= HOME DETAILS =========-->
            <div class="detail-sec"> <a href="#." style="    color: #000000;
    font-size: 12px;" class="font-montserrat">sweet home for small family</a><br> <span style="    font-size: 12px;" class="locate"><i class="fa fa-map-marker"></i> Dubai,Uae</span>
              
              <div class="share-p"> <i class="fa fa-money"></i> <span class="price font-montserrat">70000/Year AED</span></div>
            </div>
          
        </div>
        
</div>
</section>
</div>
</div>
</div>
  </div>





















 </div>





                <div class="col-lg-3 col-md-3 hidden-sm rtl"
                     style="    width: 270px !important;">
                      <img src="{{ asset('adforest/logo/add-friend1.png') }}" style=" display:none;   margin-top: -66px">
                    {{--<section class="button">--}}
                        {{--<a href="#" class="btn bordered-style active">--}}
                            {{--<i class="icon-plane"></i>--}}
                            {{--Invite Friends--}}
                        {{--</a>--}}
                    {{--</section>--}}
                    <aside id="promoted-adv" class="STICKY">


                        <h2 class="promoted-adv-title uppercase">
                            Sponsored
                        </h2>
                        <a id="ContentPlaceHolder1_Promoted_HLPromote"
                           class="new btn bordered-style" href="">Promote
                            Now</a>
                        <div class="sponsored" data-id="PromoteResult">


                       @foreach(\App\Models\Store::where('store_account_type_id', 1)->limit(3)->get() as $advm )


                            <div class="adv">
                                <div class="mbotn1" data-category="shopping">
                                    <img src="">
                                    <span class="colored" title=" cars / rent"> offers / ab hotel</span>
                                </div>
                                <div class="cover">

                                    <a href="">
                                        <img src="{{ url('image/190×244/' . $advm->logo_file_name) }}">
                                    </a>

                                </div>
                                <a id="ContentPlaceHolder1_Promoted_HLPromote"
                                   class="new btn bordered-style"
                                   href="">Show Store</a>

                            </div>
                            @endforeach
                            <div class="adv">
                                <div class="category-title" data-category="shopping">
                                    <i class="fa fa-opencart" aria-hidden="true"></i>
                                    <span class="colored"
                                          title=" Cameras &amp; Photos > Digital Cameras > SLR > Canon"> Cameras &amp; Photos &gt; Digital Cameras &gt; SLR &gt; Canon</span>
                                </div>
                                <div class="cover">

                                    <a href="">
                                        <img src="adforest/img/ilan2.jpg">
                                    </a>

                                </div>
                                <h3>
                                    <a href="View/7246/Canon-EOS-600D">
                                        Canon EOS 600D
                                    </a>
                                </h3>
                                <p class="attr attr-location">
                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                    <span class="country">Beit Lahiya</span>
                                    <span class="city">Al-Balad</span>
                                </p>
                                <p class="attr attr-price">

                                    <i class="fa fa-forumbee" aria-hidden="true"></i>
                                    <span class="amount">570</span>
                                    <span class="currency">$</span>

                                </p>
                            </div>


                        </div>

                    </aside>


                </div>
            </div>
        </div>
        <!--End of Features Tools Tab Area-->

    </div>
    <!--End of Features Gift Tab Area-->

@endsection