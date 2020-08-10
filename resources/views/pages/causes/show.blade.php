<?php
$navbar['cause'] = 'current';
?>
@extends('layouts.main')

@section('content')

    <section class="slider-section" style="background-image:url('{{ url('images/slider/2.jpg') }}');">
        <div class="container">
            <div class="slider">
                <div class="text team-light">
                    <h2>our <span>recent</span> causes</h2>
                    <p><a href="{{ route('home') }}">Home</a> <i class="fa fa-angle-right" aria-hidden="true"></i> Causes</p>
                </div>
            </div>
        </div>
    </section>

    <section class="welcome-seciton page-causes">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-sm-8 col-xs-12">
                    <!-- Start single-item -->
                    <div class="causes-item">
                        <div class="img-holder">
                            <figure><img src="{{ $event->image }}" alt="Images"></figure>
                            <h5><i class="fa fa-user" aria-hidden="true"></i>By <span>Smile Planet Foundation</span></h5>
                            @if(!empty($event->location))
                                <h5><i class="fa fa-map-marker" aria-hidden="true"></i>Cause in <span> {{ $event->location }}</span></h5>
                            @endif
                        </div>
                        <div class="text text-bg clearfix">
                            <h2>{{ $event->title }}</h2>
                            <div class="pro-text">


                            <h6 class="" style="margin-top: 100px">Goal</h6>
                            <h3>{{ $event->goal }}</h3>
                            <p>
                                {!! $event->info !!}
                            </p>
                            {{--<a href="#" class="btn-3">Donate now</a>--}}
                        </div>

                    </div>
                    <!-- End single-item -->
                </div>
                </div>

                <div class="col-md-3 col-sm-4 col-xs-12">
                    <!-- Start side-bar -->
                    <div class="side-bar">
                        <div class="side-search">
                            <h5>Looking For A Cause?</h5>
                            <br>
                            <ul class="search-bar">
                                <li>
                                    <form action="#">
                                        <input type="text" placeholder="Enter Your Keyword">
                                        <button type="submit"><i class="fa fa-search"></i></button>
                                    </form>
                                </li>
                            </ul>

                        </div>


                        <div class="category">
                            <h2>Tags</h2>
                            <ul>
                                @if(!empty($event->tags))
                                    @foreach(explode('#', $event->tags) as $value)
                                        @if(!empty($value))
                                            <li><a href="{{ route('cause.tag', trim($value, " ")) }}">{{ trim($value, " ") }}</a></li>
                                        @endif
                                    @endforeach
                                @else
                                    <li><a href="#">No Tags</a></li>
                                @endif
                            </ul>
                        </div>
                        <!--
                        <div class="category">
                            <h2>Archives</h2>
                            <ul>
                                <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>October 2014</a></li>
                                <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> November 2014</a></li>
                                <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>December 2014</a></li>
                                <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>January 2015</a></li>
                                <li>
                                    <a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Feberuary 2015</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>March 2015</a>
                                </li>
                            </ul>
                        </div>
                        -->
                    </div>
                    <!-- Eind side-bar -->
                </div>
            </div>
        </div>
    </section>




    @include('layouts.newsletter')

@endsection


