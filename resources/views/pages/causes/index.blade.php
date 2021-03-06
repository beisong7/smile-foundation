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

    @if(!empty($causes))
        <section class="welcome-seciton page-causes">
            <div class="container mb-5">
                @if(!empty($tag))
                <h5>Showing Tag : <b>{{ $tag }}</b></h5>
                @endif

                <div class="row">
                    @foreach($causes as $cause)
                        @include('pages.causes.single_cause')
                    @endforeach

                </div>
            </div>
            <div class="container">
                {{ $causes->links() }}
            </div>
        </section>


    @endif


    @include('layouts.newsletter')

@endsection
