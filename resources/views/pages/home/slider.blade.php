<section class="slider-area">
    <div class="homepage-slide1">
        @foreach($banners as $ban)
            <div class="single-slide-item" style=" max-height: 500px; background-image: url('{{ 'https://smileplanetef.org/uploads/'.$ban->gallery->url }}')">
                <div class="slide-item-table">
                    <div class="slide-item-tablecell">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-7">
                                    <div class="slider-heading">
                                        {{--<p class="slider__meta">welcome to oxpitan</p>--}}
                                        <h2 class="slider__title">Lend the helping hand get involved</h2>
                                        <a href="#" class="theme-btn">discover more</a>
                                    </div>
                                </div><!-- col-md-7 -->
                            </div><!-- row -->
                        </div><!-- container -->
                    </div><!-- slide-item-tablecell -->
                </div><!-- slide-item-table -->
            </div><!-- end single-slide-item -->
        @endforeach
    </div><!-- end homepage-slides -->
</section><!-- end slider-area -->