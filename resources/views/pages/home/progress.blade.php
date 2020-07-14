@if(!empty($featured))
    <section class="progress-section">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-8 col-xs-12">
                    <!-- Start single-item -->
                    <div class="single-item">
                        <div class="text">
                            {{--<h5>help</h5>--}}
                            <h2>{{ $featured->title }}</h2>
                            <h4>{{ $featured->small_title }}</h4>
                            <p>
                                {{ $featured->intro }}
                            </p>
                            <h6>Goal</h6>
                            <p>{{ $featured->goal }}</p>
                            @if(!empty($featured->location))
                                <h6>Location</h6>
                                <p>{{ $featured->location }}</p>
                            @endif
                            {{--<h3>382,542</h3>--}}
                            <a href="#" class="btn-1">Learn More</a>
                        </div>
                        {{--<div class="circular-graph">--}}
                        {{--<div class="inner-box">--}}
                        {{--<div class="graph-outer">--}}
                        {{--<input type="text" class="dial" data-fgColor="#fb5e1c" data-bgColor="#EBEBEB" data-width="200" data-height="200" data-linecap=""  value="87">--}}
                        {{--<span class="value">87</span>--}}
                        {{--<p>completed</p>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                    </div>
                    <!-- Eind single-item -->
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <!-- video-preview start -->
                    @if(!empty($featured->youtube))
                        <div class="video-preview" style="background: url('{{ $featured->image }}') no-repeat scroll 0 / cover;">

                            <ul class="v-container text-center">
                                <li>
                                    <a href="https://www.youtube.com/watch?v=-C_P_iE0Kp0" class="html5lightbox"><i class="fa fa-play" aria-hidden="true"></i></a>
                                </li>
                                <li>
                                    <a href="https://www.youtube.com/watch?v=-C_P_iE0Kp0" class="html5lightbox" id="watch-video"></a>
                                </li>
                            </ul>


                        </div>
                    @else
                        <div class="text-center">
                            <img src="{{ $featured->image }}" alt="" style="width: auto; max-height: 200px">
                        </div>
                    @endif

                    <!-- video-preview end -->
                </div>
            </div>
        </div>
    </section>
@endif
