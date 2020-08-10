<?php
$navbar['about'] = 'current';
?>
@extends('layouts.main')

@section('content')


    <section class="slider-section" style="background-image:url('{{ url('images/slider/2.jpg') }}');">
        <div class="container">
            <div class="slider">
                <div class="text">
                    <h2>Learn <span>About</span> Us</h2>
                    <p><a href="{{ url('home') }}">Home</a> <i class="fa fa-angle-right" aria-hidden="true"></i> About Us</p>
                </div>
            </div>
        </div>
    </section>
    <!--End slider-section-->
    <!--.video-seciton-->
    <section class="video-seciton">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <!-- Start single-item -->
                    <div class="single-item">
                        <h2>who we <span>are?</span></h2>
                        <p>
                            Smile planet Foundation is a team of dedicated people
                        </p>
                    </div>
                    <!-- End single-item -->
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <!-- video-preview start -->
                    <div class="video-preview" style="background-image:url('{{ url('img/ab.png') }}'); background-repeat: no-repeat; background-position: center">
                        <ul class="v-container text-center">
                            <li>
                                <a href="https://www.youtube.com/watch?v=FW1NygRmuxs" class="html5lightbox"><i class="fa fa-play" aria-hidden="true"></i></a>
                            </li>
                            <li>
                                <a href="https://www.youtube.com/watch?v=FW1NygRmuxs" class="html5lightbox" id="watch-video"></a>
                            </li>
                        </ul>
                    </div>
                    <!-- video-preview end -->
                </div>
            </div>
        </div>
    </section>
    <!--/video-seciton-->
    <!--.mission-seciton-->
    <section class="mission-seciton">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <!-- Start single-item -->
                    <div class="mission-item ab-item">
                        <i class="flaticon-medical"></i>
                        <h4><a href="#">give donation</a></h4>
                        {{--<p>Pellentesque eu malesuada nisi as<br>--}}
                            {{--et condimen tum lorem ipsem vitae<br>--}}
                            {{--arcu eget lobortis cursus.</p>--}}
                    </div>
                    <!-- End single-item -->
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <!-- Start single-item -->
                    <div class="mission-item ab-item">
                        <i class="flaticon-heart-3"></i>
                        <h4><a href="#">become volunteer</a></h4>
                        {{--<p>Pellentesque eu malesuada nisi as<br>--}}
                            {{--et condimen tum lorem ipsem vitae<br>--}}
                            {{--arcu eget lobortis cursus.</p>--}}
                    </div>
                    <!-- End single-item -->
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <!-- Start single-item -->
                    <div class="mission-item ab-item">
                        <i class="flaticon-heart"></i>
                        <h4><a href="#">fund raising</a></h4>
                        {{--<p>Pellentesque eu malesuada nisi as<br>--}}
                            {{--et condimen tum lorem ipsem vitae<br>--}}
                            {{--arcu eget lobortis cursus.</p>--}}
                    </div>
                    <!-- End single-item -->
                </div>
            </div>
        </div>
    </section>
    <!--/mission-seciton-->
    <!--Start volunteer-section -->
    <section class="volunteer-section ab-mar" style="background-image:url('{{ url('images/blog/bg6.jpg') }}');">
        <div class="container">
            <div class="volunteer-item">
                <div class="section-title text-center">
                    <h2>WE HELP many people</h2>
                    <h4>want to become a <span> volunteer!</span></h4>
                </div>
                <p>
                    Becoming a volunteer by clicking the button below.
                </p>
                <a href="https://smileplanetef.org/volunteer" target="_blank" class="btn-3">Apply now</a>
            </div>
        </div>
    </section>
    <!--End volunteer-section -->
    <!--.team-seciton-->
    <section class="team-seciton pad-top">
        <div class="container">
            <div class="section-title text-center">
                <h2>dadicated <span>volunteers</span></h2>
                <p>Meet our volunteers...</p>
            </div>
            <div class="row">
                {{--@include('pages.about.team')--}}
            </div>
        </div>
    </section>
    <!--/team-seciton-->


    @include('layouts.newsletter')

@endsection
