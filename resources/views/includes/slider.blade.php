<div class="header1-bgimage-slider" id="home">
    <div class="owl-carousel header-slider">
        @foreach($banners as $ban)
            @if($ban->target === 'foundation')
                <div class="item">
                    <div class=" bgimage-property heading-padding" style="background:url({{'https://smileplanetef.org/uploads/'.$ban->gallery->url}}) no-repeat center;">
                        <div class="container" style="height: 159px">

                        </div>
                    </div>
                </div>
            @endif

        @endforeach
    </div>
</div>