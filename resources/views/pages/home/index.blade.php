@extends('layouts.main')

@section('content')

    <!--================================= NAVIGATION START ==========================================-->

    <!--================================= NAVIGATION END ==========================================-->
    <!--=================================  HEADER START ==========================================-->
    @include('includes.slider')
    <!--================================= HEADER ENDS ============================================-->
    <!--================================= WHAT WE DO START ==========================================-->
    @include('includes.boxes')
    <!--================================= WHAT WE DO ENDS ==========================================-->
    <!--================================= MAKE A CHILD SMILE START ==========================================-->
{{--    @include('includes.article1')--}}
    <!--================================= MAKE A CHILD SMILE ENDS ==========================================-->
    <!--================================= CAUSES START ==========================================-->
    @include('includes.causes')
    <!--================================= CAUSES ENDS ==========================================-->
    <!--================================= ADOPT CHILD START ==========================================-->
    {{--@include('includes.adobt')--}}
    <!--================================= ADOPT CHILD ENDS ==========================================-->
    <!--================================= GALLERY START ==============================================-->
    @include('includes.gallery')
    <!--================================= GALLERY ENDS ==========================================-->
    <!--=================================  CTA START ==========================================-->

    {{--@include('includes.cta')--}}
    <!--================================= CTA ENDS ============================================-->
    <!--================================= FUND NEEDED START ==========================================-->

    {{--@include('includes.funds')--}}
    <!--================================= FUND NEEDED ENDS ==========================================-->
    <!--================================= CARE SENIOR CITIZEN START ==========================================-->

    @include('includes.care')
    <!--================================= CARE SENIOR CITIZEN ENDS ==========================================-->
    <!--================================= COUNTER START ==========================================-->

    {{--@include('includes.counter')--}}
    <!--================================= COUNTER ENDS ==========================================-->
    <!--================================= FREE CAMP START ==========================================-->

    {{--@include('includes.camp')--}}
    <!--================================= FREE CAMP ENDS ==========================================-->
    <!--================================= HELP HOMELESS PEOPLE START ==========================================-->
    {{--@include('includes.homeless')--}}
    <!--================================= HELP HOMELESS PEOPLE ENDS ==========================================-->
    <!--================================= VIDEO START ==========================================-->
    {{--@include('includes.ourvid')--}}
    <!--================================= VIDEO ENDS ============================================-->
    <!--================================= OUR FEATURES START ==========================================-->
    {{--@include('includes.feature')--}}
    <!--================================= OUR FEATURES ENDS ==========================================-->
    <!--================================= OUR VOLUNTEERS START ==========================================-->
    {{--@include('includes.volunteer')--}}
    <!--================================= OUR VOLUNTEERS ENDS ==========================================-->
    <!--================================= CONTACT US START ==========================================-->
    {{--@include('includes.contact)--}}
    <!--================================= CONTACT US ENDS ==========================================-->
    <!--================================= PACKAGES START ==========================================-->
    {{--@include('includes.package')--}}
    <!--================================= PACKAGES ENDS ============================================-->
    <!--=================================  TESTIMONIAL START ==========================================-->
    {{--@include('includes.testimony')--}}
    <!--================================= TESTIMONIAL ENDS ============================================-->
    <!--================================= NEWS START ==========================================-->
    @include('includes.news')
    <!--================================= NEWS ENDS ==========================================-->
    <!--================================= CLIENTS START ==========================================-->
    {{--@include('includes.clients')--}}
    <!--================================= CLIENTS ENDS ==========================================-->
    <!--================================= FOOTER-1 START ==========================================-->
    @include('includes.footer')
    <!--================================= FOOTER-1 ENDS ==========================================-->
    <!-- POPUP FORM -->
    <div id="fadeandscale" class="popup-bg bgimage-property">
        <div>
            <div style="padding:10px 15px 50px 0;">
                <button class="popup_close fadeandscale_close close close-icon-1" title="Close" aria-label="Close"><span aria-hidden="true">x</span></button>
            </div>
            <div class="popup-bg-pad text-center">
                <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="POST" class="popup-form" id="popup-form">
                    <h2 class="donation-h2">DONATION FORM</h2>
                    <div class="row top-space">
                        <div class="col-xs-12 col-sm-12">
                            <input class="name" type="text" name="name" placeholder="Enter Your Name" required autocomplete="off">
                        </div>
                        <div class="col-xs-12 col-sm-12">
                            <input class="email top-space20" type="email" name="email" placeholder="Enter Your Email" required autocomplete="off">
                        </div>
                        <div class="col-xs-12 col-sm-12">
                            <input class="phoneno top-space20" type="text" name="phoneno" placeholder="Enter Your Phone Number" required autocomplete="off">
                        </div>
                        <div class="col-xs-4 col-sm-3">
                            <input class="phoneno  price top-space20" type="text" name="amount" id="amounts" placeholder="Amount" autocomplete="off">
                        </div>
                        <p class="col-xs-2 col-sm-2 or p-white top-space20">or</p>
                        <div class="col-xs-5 col-sm-7">
                            <select name="amount" class="price top-space20" id="price-1" >
                                <option value="0">Choose the amount</option>
                                <option value="10">$10</option>
                                <option value="20">$20</option>
                                <option value="50">$50</option>
                            </select>
                        </div>

                    </div>
                    <input type="hidden" name="cmd" value="_xclick">
                    <input type="hidden" name="item_name" value="DONATION">
                    <input type="hidden" name="business" value="kanimozhi@keenicon.com">
                    <input type="hidden" name="currency_code" value="USD">
                    <input type="hidden" name="return" value="http://localhost/paypal-2/demo-ph/charity.html?success=true">
                    <input type="hidden" name="cancel_return" value="http://localhost/paypal-2/demo-ph/charity.html?cancel=true">
                    <div class="row popup-btn-div top-space20">
                        <div class="col-xs-12 col-sm-12">
                            <button class="popup_close fadeandscale_close btn btn-cancel col-xs-6 col-sm-5" title="Close" aria-label="Close"><span aria-hidden="true">CANCEL</span></button>
                            <button  type="submit" name="submit" id="donate-btn" class="btn donate-bg col-xs-6 col-sm-offset-1 col-sm-6" value="Donate Now">DONATE NOW</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- POPUP MSG BOX -->
    <div id="messageDiv">
        <div id="content">
            <div id="success_btn">
                <a href="#" class="close close-icon">x</a>
                <div class="cancel-head-pad">
                    <h3 class="no-margin">Thank You For Donation</h3>
                </div>
                <div class="text-center btn1-div">
                    <a href="#">
                        <div class="ok-icon close btn-1 btn">OK</div>
                    </a>
                </div>
            </div>
        </div>
        <div id="content-1">
            <div id="cancel_btn">
                <a href="#" class="close close-icon">x</a>
                <div class="cancel-head-pad">
                    <h3 class="no-margin">Sorry, Your Transaction Failed, Please Try Agian.</h3>
                </div>
                <div class="text-center btn1-div">
                    <a href="#">
                        <div class="ok-icon close btn-1 btn">OK</div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div id="fade"></div>

@endsection
