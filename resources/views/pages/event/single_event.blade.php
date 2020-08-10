<div class="col-md-3 col-sm-6 col-xs-12">
    <!-- Start single-item -->
    <div class="blog-item">
        <div class="img-holder">
            <figure><a href="#"><img src="{{ $event->pic() }}" alt="Images"></a></figure>
        </div>
        <div class="text">
            <h4><a href="#">{{ $event->title }}</a></h4>
            <div class="row">
                <div class="col-sm-6">
                    <i class="fa fa-user" aria-hidden="true"></i> By <span>smilePlanet</span>
                </div>
                <div class="col-sm-6">
                    <i class="fa fa-calendar" aria-hidden="true"></i> On <span>{{ date('j M, Y', strtotime($event->date)) }}</span>
                </div>
            </div>
            <div class="clearfix"></div>
            <p class="text-justify">{{ $event->shortInfo() }}</p>
            <a href="{{ route('view.event', $event->title) }}"class="dont-btn">Read more</a>
        </div>
    </div>
    <!-- End single-item -->
</div>