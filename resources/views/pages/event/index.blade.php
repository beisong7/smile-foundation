<?php
$navbar['events'] = 'current';
?>
@extends('layouts.main')

@section('content')

    <section class="slider-section" style="background-image:url('{{ url('images/slider/2.jpg') }}');">
        <div class="container">
            <div class="slider">
                <div class="text team-light">
                    <h2>recent <span>events</span> </h2>
                    <p><a href="{{ route('home') }}">Home</a> <i class="fa fa-angle-right" aria-hidden="true"></i> Events</p>
                </div>
            </div>
        </div>
    </section>

    @if(!empty($events))
        <section class="welcome-seciton page-causes blog-seciton">
            <div class="container mb-5">
                @if(!empty($tag))
                <h5>Showing Tag : <b>{{ $tag }}</b></h5>
                @endif

                <div class="row">
                    @foreach($events as $event)
                        @include('pages.event.single_event')
                    @endforeach

                </div>
            </div>
            <div class="container">
                {{ $events->links() }}
            </div>
        </section>


    @endif


    @include('layouts.newsletter')

@endsection
