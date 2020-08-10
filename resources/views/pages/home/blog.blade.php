<section class="blog-seciton">
    <div class="container">
        <div class="section-title text-center">
            {{--<h6>Learn more from our blog</h6>--}}
            <h2>Our <span>Events</span></h2>
        </div>
        <div class="row">

            @foreach($events as $event)

                @include('pages.event.single_event')
            @endforeach

        </div>
    </div>
</section>
