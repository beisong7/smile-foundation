@extends('layouts.main')

@section('content')

    @include('pages.home.slider')

    @include('pages.home.box')


    <section class="service-area text-center">
        <img src="{{ url('images/heart-icon1.png') }}" alt="" class="heart-icon heart-icon-1">
        <img src="{{ url('images/heart-icon2.png') }}" alt="" class="heart-icon heart-icon-2">
        <img src="{{ url('images/heart-icon3.png') }}" alt="" class="heart-icon heart-icon-3">
        <img src="{{ url('images/heart-icon4.png') }}" alt="" class="heart-icon heart-icon-4">
        <img src="{{ url('images/heart-icon5.png') }}" alt="" class="heart-icon heart-icon-5">
        <img src="{{ url('images/heart-icon6.png') }}" alt="" class="heart-icon heart-icon-6">
        <img src="{{ url('images/heart-icon7.png') }}" alt="" class="heart-icon heart-icon-7">
        <img src="{{ url('images/heart-icon8.png') }}" alt="" class="heart-icon heart-icon-8">
        <img src="{{ url('images/heart-icon9.png') }}" alt="" class="heart-icon heart-icon-9">
        <img src="{{ url('images/heart-icon10.png') }}" alt="" class="heart-icon heart-icon-10">
        <img src="{{ url('images/heart-icon11.png') }}" alt="" class="heart-icon heart-icon-11">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="section-heading service-heading">
                        <div class="section-icon">
                            <img src="{{ url('images/section-icon.png') }}" alt="section-icon">
                        </div>
                        <h2 class="section__title">We Believe that We can Save More Lifes with you</h2>
                        <p class="section__meta">help us now</p>
                    </div><!-- end section-heading -->
                </div><!-- end col-lg-8 -->
            </div><!-- end row -->
            <div class="row service-wrap">
                <div class="col">
                    <div class="service-item service-item1">
                        <div class="service-item-inner">
                            <div class="service-icon">
                                <i class="icon-peace-1"></i>
                            </div>
                            <div class="service-content">
                                <h4 class="service__title">hope</h4>
                                <p class="service__desc">
                                    Lorem ipsum is simply free text available
                                    in the market wesbites.
                                </p>
                            </div>
                        </div><!-- end service-item-inner -->
                    </div><!-- end service-item -->
                </div><!-- end col -->
                <div class="col">
                    <div class="service-item service-item2">
                        <div class="service-item-inner">
                            <div class="service-icon">
                                <i class="icon-praying"></i>
                            </div>
                            <div class="service-content">
                                <h4 class="service__title">prayers</h4>
                                <p class="service__desc">
                                    Lorem ipsum is simply free text available
                                    in the market wesbites.
                                </p>
                            </div>
                        </div><!-- end service-item-inner -->
                    </div><!-- end service-item -->
                </div><!-- end col -->
                <div class="col">
                    <div class="service-item service-item3">
                        <div class="service-item-inner">
                            <div class="service-icon">
                                <i class="icon-peace"></i>
                            </div>
                            <div class="service-content">
                                <h4 class="service__title">peace</h4>
                                <p class="service__desc">
                                    Lorem ipsum is simply free text available
                                    in the market wesbites.
                                </p>
                            </div>
                        </div><!-- end service-item-inner -->
                    </div><!-- end service-item -->
                </div><!-- end col -->
                <div class="col">
                    <div class="service-item service-item4">
                        <div class="service-item-inner">
                            <div class="service-icon">
                                <i class="icon-heart"></i>
                            </div>
                            <div class="service-content">
                                <h4 class="service__title">donation</h4>
                                <p class="service__desc">
                                    Lorem ipsum is simply free text available
                                    in the market wesbites.
                                </p>
                            </div>
                        </div><!-- end service-item-inner -->
                    </div><!-- end service-item -->
                </div><!-- end col -->
            </div><!-- end row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="button-shared">
                        <a href="#" class="theme-btn">donate now</a>
                    </div><!-- end button-shared -->
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end service-area -->


    @include('pages.home.cause')


    @include('pages.home.blog')



@endsection
