@extends('adforest.layout.master')

@section('content')
    @include('adforest.home.slider')

    <div class="cu-background">
        <div class="container">
            <ul class="category-breadcrumb">
                <li>
                    <a id="ContentPlaceHolder1_PagesSeries_HyperLink1" href="../../../../">Home Page</a>

                </li>
                <li><a>Help Center</a></li>
            </ul>
        </div>
    </div>


    <div id="help">
        <div class="wHeader">
            <div class="container">
                <div class="helpcenter">
                    <i class="fa fa-leaf" aria-hidden="true"></i>                   <h3>
                        Help Center
                    </h3>
                    <p>
                        It's a knowledge base and customer portal for Daleelii world—all in one.
                    </p>
                </div>

                <ul class="help-breadcrumb"><li> <a href="javascript:;">Help Center</a></li><li> <a href="javascript:;">Daleelii Guidelines</a></li></ul>
            </div>
        </div>
        <div class="container">
            <div class="help-sidemenu">
                <ul>
                    <li class="">
                        <a id="ContentPlaceHolder1_HyperLink2" href="javascript:;">Help Center<i class="icon icon-arrow-right"></i></a>
                        <ul>

                            <li class="active">
                                <a href="javascript:;">Daleelii Guidelines<i class="icon icon-arrow-right"></i></a>
                                <ul><li class="curr"><a href="http://www.daleelii.com/en/ps/help/1.1">{{$data->title}}</a></li><li><a href="http://www.daleelii.com/en/ps/help/1.2">Terms of Use</a></li><li><a href="http://www.daleelii.com/en/ps/help/1.3">About us</a></li><li><a href="http://www.daleelii.com/en/ps/help/1.4">Daleelii Categories</a></li><li><a href="http://www.daleelii.com/en/ps/help/1.5">Users Types</a></li><li><a href="http://www.daleelii.com/en/ps/help/1.6">Stores Types</a></li><li><a href="http://www.daleelii.com/en/ps/help/1.8">Features</a></li><li><a href="http://www.daleelii.com/en/ps/help/1.9">Contact Us</a></li><li><a href="http://www.daleelii.com/en/ps/help/1.10">Customer Support</a></li><li><a href="http://www.daleelii.com/en/ps/help/1.11">Daleelii Developer Community: "Developers"</a></li><li><a href="http://www.daleelii.com/en/ps/help/1.12">Careers</a></li><li><a href="http://www.daleelii.com/en/ps/help/1.13">Resellers and Agents:</a></li><li><a href="http://www.daleelii.com/en/ps/help/1.14">Franchises</a></li><li><a href="javascript:;">Costs of Creating a Store<i class="icon icon-arrow-right"></i></a><ul><li><a href="http://www.daleelii.com/en/ps/help/1.15.1">United Arab Emirates</a></li><li><a href="http://www.daleelii.com/en/ps/help/1.15.2">Palestine</a></li><li><a href="http://www.daleelii.com/en/ps/help/1.15.3">Saudi Arabia</a></li><li><a class="backbutton">Back<i class="icon icon-arrow-left"></i></a></li></ul></li><li><a href="http://www.daleelii.com/en/ps/help/1.16">Terms of Opening Store</a></li><li><a class="backbutton">Back<i class="icon icon-arrow-left"></i></a></li></ul>
                            </li>

                            <li>
                                <a href="javascript:;">Get Started<i class="icon icon-arrow-right"></i></a>
                                <ul><li><a href="http://www.daleelii.com/en/ps/help/2.1">Before Launching An Ad</a></li><li><a href="http://www.daleelii.com/en/ps/help/2.2">During launching an Ad</a></li><li><a href="http://www.daleelii.com/en/ps/help/2.3">After Launching an Ad</a></li><li><a class="backbutton">Back<i class="icon icon-arrow-left"></i></a></li></ul>
                            </li>

                            <li>
                                <a href="http://www.daleelii.com/en/ps/help/3">FAQ Questions</a>

                            </li>

                            <li><a class="backbutton">Back<i class="icon icon-arrow-left"></i></a></li></ul>
                    </li>
                </ul>
            </div>

            <div class="help-content">


                <div class="title">
                    <h5>Daleelii Privacy Policy</h5>
                    <p></p>
                </div>


                <div class="qanda-list">

                    <div class="qanda accordion active">
                        <h6 class="accordion-head" id="H183">
                            <i class="icon icon-arrow-right"></i>
                            Daleelii Privacy Policy
                        </h6>
                        <div class="qanda-content accordion-content">
                            <div class="desc">
                                <p>&nbsp; &nbsp; &nbsp; &nbsp;Your privacy is extremely important to us. We won't ask you for personal information unless we truly need it. We don’t share your personal information with anyone except to comply with the law, develop our products, or protect our rights.</p>
                                <div style="direction: ltr; unicode-bidi: embed;">&nbsp; &nbsp; &nbsp; &nbsp;If you have questions about accessing or correcting your personal data please get in touch with us through any of the ways listed at the Daleelii Help site.</div>
                                <div style="direction: ltr; unicode-bidi: embed;">It is Daleelii's policy to respect your privacy regarding any information we may collect while operating our website.</div>
                                <div style="direction: ltr; unicode-bidi: embed;">&nbsp;</div>
                                <div style="direction: ltr; unicode-bidi: embed;">Our Privacy Policy is a part of our general Terms of Service and has been extracted for your convenience.</div>
                                <div style="direction: ltr; unicode-bidi: embed;">&nbsp;</div>
                                <div style="direction: ltr; unicode-bidi: embed;"><span style="font-size:12.0pt;line-height:115%;Arial&quot;,sans-serif;
color:#0D0D0D">&nbsp; &nbsp; &nbsp;</span>We collect and store the following personal information<span style="font-size:12.0pt;line-height:115%;Arial&quot;,sans-serif;
color:#0D0D0D">:&nbsp;</span>email address, contact information, and (depending on the service used) sometimes financial information;</div>
                                <div style="direction: ltr; unicode-bidi: embed;">&nbsp;We use users' personal information to:</div>
                                <ul>
                                    <li>Provide our services</li>
                                    <li>Resolve disputes, collect fees, and troubleshoot problems;</li>
                                    <li>Encourage safe trading and enforce our policies;</li>
                                    <li>Customize users' experience, measure interest in our services, improve our services and inform users about services and updates;</li>
                                    <li>Communicate marketing and promotional offers to you according to your preferences;</li>
                                    <li>Do other things for users as described when we collect the information.</li>
                                </ul>
                                <div style="direction: ltr; unicode-bidi: embed;"><span style="font-size: 16px; line-height: 18.4px;">&nbsp; &nbsp; &nbsp;&nbsp;</span>We don't sell or rent users' personal information to third parties for their marketing purposes without users' explicit consent. We may disclose personal information to respond to legal requirements, enforce our policies, respond to claims that a posting or other content violates other's rights, or protect anyone's rights, property, or safety.</div>
                            </div>

                        </div>
                    </div>

                    <div id="ContentPlaceHolder1_UpdatePanel1">

                        <div id="ContentPlaceHolder1_pnlHelpful">

                            <p class="answer">
                                Was this answer helpful ?
                                <input type="submit" name="ctl00$ContentPlaceHolder1$btnYes" value="Yes" id="ContentPlaceHolder1_btnYes"> -
                                <input type="submit" name="ctl00$ContentPlaceHolder1$btnNo" value="No" id="ContentPlaceHolder1_btnNo">
                            </p>

                        </div>

                    </div>

                    <h5>

                    </h5>



                </div>


            </div>
        </div>
    </div>

@endsection