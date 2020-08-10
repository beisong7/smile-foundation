<?php
$navbar['contact'] = 'current';
?>
@extends('layouts.main')

@section('content')


    <section class="slider-section" style="background-image:url('{{ url('images/slider/2.jpg') }}');">
        <div class="container">
            <div class="slider">
                <div class="text">
                    <h2> contact <span>us</span>  </h2>
                    <p><a href="{{ url('home') }}">Home</a> <i class="fa fa-angle-right" aria-hidden="true"></i> Contact Us</p>
                </div>
            </div>
        </div>
    </section>
    <!--End slider-section-->
    <section class="contact-section contact-page">
        <div class="container">
            <div class="section-title text-center">
                <h2>contact us</h2>
                <p>
                    Write us or send us a direct message
                </p>
            </div>
            <div class="row">
                <div class="col-md-10 col-md-offset-1 col-sm-12">
                    <div class="contact-us">
                        <div class="contaat-item">
                            <div class="icon">
                                <i class="fa fa-home" aria-hidden="true"></i>
                            </div>
                            <div class="text">
                                <h4>Address:</h4>
                                <p>
                                    Suite BA 11, Apo Spark Mall, Opposite Living Faith Church, Durumi II by Area 3 Junction, Abuja.
                                </p>
                            </div>
                        </div>
                        <div class="contaat-item con-pd">
                            <div class="icon">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                            </div>
                            <div class="text">
                                <h4>Email Address:</h4>
                                <p>{{ "mails@smileplanetef.org" }}</p>
                            </div>
                        </div>
                        <div class="contaat-item con-pd">
                            <div class="icon">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                            </div>
                            <div class="text">
                                <h4>Phone</h4>
                                <p>+234 703 324 1426</p>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 col-sm-12">
                            <div class="default-form-2 clearfix">
                                <form id="contact-form" name="contact_form" class="default-form" action="" method="post">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <div class="form-group">
                                                <input type="text" name="form_name" value="" placeholder="Full Name" required="">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <div class="form-group">
                                                <input type="email" name="form_email" value="" placeholder="Email Address" required="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="text" name="form_subject" value="" placeholder="Subject" required="">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="form_phone" value="" placeholder="phone" required="">
                                            </div>
                                            <div class="form-group comments">
                                                <textarea name="form_message" placeholder="Detail" required=""></textarea>
                                            </div>
                                            <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="">
                                            <button class="btn btn-1" type="submit" data-loading-text="Please wait...">Contact Now</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    @include('layouts.newsletter')

@endsection
