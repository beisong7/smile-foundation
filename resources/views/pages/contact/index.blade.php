<?php
$navbar['contact'] = 'current';
?>
@extends('layouts.main')

@section('content')


    <section class="slider-section" style="background-image:url('{{ url('images/slider/2.jpg') }}');">
        <div class="container">
            <div class="slider">
                <div class="text">
                    <h2>Save <span>people’s</span> Life</h2>
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
                    <div class="video-preview" style="background-image:url('{{ url('images/ab.png') }}');">
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
                        <p>Pellentesque eu malesuada nisi as<br>
                            et condimen tum lorem ipsem vitae<br>
                            arcu eget lobortis cursus.</p>
                    </div>
                    <!-- End single-item -->
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <!-- Start single-item -->
                    <div class="mission-item ab-item">
                        <i class="flaticon-heart-3"></i>
                        <h4><a href="#">become volunteer</a></h4>
                        <p>Pellentesque eu malesuada nisi as<br>
                            et condimen tum lorem ipsem vitae<br>
                            arcu eget lobortis cursus.</p>
                    </div>
                    <!-- End single-item -->
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <!-- Start single-item -->
                    <div class="mission-item ab-item">
                        <i class="flaticon-heart"></i>
                        <h4><a href="#">fund raising</a></h4>
                        <p>Pellentesque eu malesuada nisi as<br>
                            et condimen tum lorem ipsem vitae<br>
                            arcu eget lobortis cursus.</p>
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
                <p>Duis sed odio sit amet nibh vulpuate cursus a sit amet mauris. Morbi accumsan ipsuy veli<br>nec telus aodio tincidunt auctor Class aptent taciti sociosqu adlitora.</p>
                <a href="#" class="btn-3">Apply now</a>
            </div>
        </div>
    </section>
    <!--End volunteer-section -->
    <!--.team-seciton-->
    <section class="team-seciton pad-top">
        <div class="container">
            <div class="section-title text-center">
                <h2>dadicated <span>team</span></h2>
                <p>Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan<br>
                    ipsuy veli. Nam nec tellus a odio tincidunt auctor </p>
            </div>
            <div class="row">
                <div class="teamcarosule">
                    <div class="team-item">
                        <!-- Start single-item -->
                        <div class="single-item wow fadeInUp">
                            <div class="img-holder">
                                <figure><a href="team.html"><img src="images/team/1.jpg" alt="Images"></a></figure>
                                <!-- Start overlay -->
                                <div class="overlay">
                                    <div class="link-icon">
                                        <ul class="link">
                                            <li>
                                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- End overlay -->
                            </div>
                            <div class="text">
                                <h4><a href="team.html">Alina Martin</a></h4>
                                <p>volunteer</p>
                            </div>
                        </div>
                        <!-- End single-item -->
                    </div>
                    <div class="team-item">
                        <!-- Start single-item -->
                        <div class="single-item wow fadeInUp">
                            <div class="img-holder">
                                <figure><a href="team.html"><img src="images/team/2.jpg" alt="Images"></a></figure>
                                <!-- Start overlay -->
                                <div class="overlay">
                                    <div class="link-icon">
                                        <ul class="link">
                                            <li>
                                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- End overlay -->
                            </div>
                            <div class="text">
                                <h4><a href="team.html">Rina jho</a></h4>
                                <p>volunteer</p>
                            </div>
                        </div>
                        <!-- End single-item -->
                    </div>
                    <div class="team-item">
                        <!-- Start single-item -->
                        <div class="single-item wow fadeInUp">
                            <div class="img-holder">
                                <figure><a href="team.html"><img src="images/team/3.jpg" alt="Images"></a></figure>
                                <!-- Start overlay -->
                                <div class="overlay">
                                    <div class="link-icon">
                                        <ul class="link">
                                            <li>
                                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- End overlay -->
                            </div>
                            <div class="text">
                                <h4><a href="team.html">james powel</a></h4>
                                <p>volunteer</p>
                            </div>
                        </div>
                        <!-- End single-item -->
                    </div>
                    <div class="team-item">
                        <!-- Start single-item -->
                        <div class="single-item wow fadeInUp">
                            <div class="img-holder">
                                <figure><a href="team.html"><img src="images/team/4.jpg" alt="Images"></a></figure>
                                <!-- Start overlay -->
                                <div class="overlay">
                                    <div class="link-icon">
                                        <ul class="link">
                                            <li>
                                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- End overlay -->
                            </div>
                            <div class="text">
                                <h4><a href="team.html">natalia alex</a></h4>
                                <p>volunteer</p>
                            </div>
                        </div>
                        <!-- End single-item -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/team-seciton-->


    @include('layouts.newsletter')

@endsection