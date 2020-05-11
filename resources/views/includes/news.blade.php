<section class="section-padding section-1-bg">
    <div class="container ">
        <div class="heading-div-1 text-center">
            <h2>LATEST NEWS</h2>
            <img src="images/underline-1.png" alt="116x22"/>
        </div>
        <div class="row">
            @foreach($events as $event)
                <div class="col-md-4 news-col section-bottom-space30">
                    <div class="news-div">
                        <img src="{{ $event->pic() }}" alt="image" class="img-responsive image-bottom-space20" />
                        <div class="news-div-1">
                            <div class="list-img text-center">
                                <ul class="content-ul news-ul">
                                    <li><a href="#"><img src="images/70x70.png" alt="70x70"/></a></li>
                                    <li>

                                        <p><a href="#">{{ date('M', strtotime($event->date)) }} <br/> <span>{{ date('j', strtotime($event->date)) }}</span></a></p>
                                    </li>
                                </ul>
                            </div>
                            <div class="list-content">
                                <h4><a href="#">{{ $event->title }}</a></h4>
                                <p class="content-top-space1">
                                    {{ $event->shortInfo() }}
                                </p>
                                <div class="btn-top-space text-center btn1-div">
                                    <a href="{{ $event->link() }}" target="_blank" class="btn btn-1">READ MORE</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>