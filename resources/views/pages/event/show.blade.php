<?php
$navbar['event'] = 'current';
?>
@extends('layouts.main')

@section('content')

    <section class="slider-section" style="background-image:url('{{ url('images/slider/2.jpg') }}');">
        <div class="container">
            <div class="slider">
                <div class="text team-light">
                    <h2>our <span>recent</span> Events</h2>
                    <p><a href="{{ route('home') }}">Home</a> <i class="fa fa-angle-right" aria-hidden="true"></i> Events</p>
                </div>
            </div>
        </div>
    </section>

    <section class="blog-seciton blog-pag">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <!-- Start single-item -->
                    <div class="blog-item clearfix">
                        <div class="img-holder">
                            <figure><img src="{{ $event->pic() }}" alt="Images"></figure>
                        </div>
                        <div class="item-text event-item clearfix">
                            <div class="text">
                                <h4 class="we">{{ $event->title }}</h4>
                                <h5 class="road"><i class="fa fa-map-marker" aria-hidden="true"></i>By <span>Smile Planet Foundation</span></h5>
                            </div>
                            <div class="tags clearfix">
                                <p><i class="fa fa-calendar-o" aria-hidden="true"></i>{{ date('j M, Y', strtotime($event->date)) }}   <span>Event Orgaanizer:  SPF</span></p>


                                {{--<a href="#" class="btn-2">Book now</a>--}}
                            </div>
                        </div>
                        <p>
                            {!! $event->detail !!}
                        </p>

                    </div>
                    <!-- End single-item -->

                </div>

            </div>
        </div>
    </section>




    @include('layouts.newsletter')

@endsection


