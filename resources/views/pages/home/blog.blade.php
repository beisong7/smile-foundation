<section class="blog-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <div class="section-heading blog-heading">
                    <div class="section-icon">
                        <img src="{{ url('images/section-icon.png') }}" alt="section-icon">
                    </div>
                    <h2 class="section__title">News and Events</h2>
                    <p class="section__meta">updates</p>
                </div><!-- end section-heading -->
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
        <div class="row recent-post-wrap">
            <div class="col-lg-6">
                <?php $a = 0 ?>
                @foreach($events as $event)
                    @if($a===0)
                            <div class="recent-item">
                                <div class="recent__img">
                                    <span class="meta__date-date">{{ date('j M, Y', strtotime($event->date)) }}</span>
                                    <img src="{{ $event->pic() }}" alt="service-image">
                                </div><!-- end recent__img -->
                                <div class="news__content">
                                    <h3 class="news__content-title"><a href="#">{{ $event->title }}</a></h3>
                                    <ul class="news__content-list">
                                        <li class="news__content-active__dot"><a href="#">Smile Planet Foundation</a></li>
                                    </ul>
                                    <p class="news__content-text">
                                        {{ $event->shortInfo() }}
                                    </p>
                                    <a href="#" class="theme-btn">read more</a>
                                </div><!-- end news__content -->
                            </div><!-- end recent-item-->
                    @endif
                    <?php $a= 1; ?>
                @endforeach

            </div><!-- end col-lg-6 -->
            <div class="col-lg-6">
                <div class="third-recent-box">
                    <ul class="third-recent-item">


                        @foreach($events as $event)
                            <li>
                                <div class="recent__img">
                                    <a href="{{ $event->link() }}"><img src="{{ $event->pic() }}" alt="" style="width: 170px"></a>
                                </div><!-- end recent__img -->
                                <div class="recent__content">
                                    <span>{{ date('j M, Y', strtotime($event->date)) }}</span>
                                    <h4><a href="{{ $event->link() }}">{{ $event->title }} </a></h4>
                                </div>
                            </li>
                        @endforeach




                    </ul>
                </div><!-- end third-recent-box -->
            </div><!-- end col-lg-6 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end blog-area -->