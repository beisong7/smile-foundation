<div class="col-md-4 col-sm-6 col-xs-12">
    <!-- Start single-item -->
    <div class="welcome-item">
        <div class="img-holder">
            <figure><a href="#"><img src="{{ $cause->image }}" alt="Images"></a></figure>
            <!-- Start overlay -->
            <div class="overlay">
                <h4><a href="#">{{ $cause->title }}</a></h4>
            </div>
            <!-- End overlay -->
        </div>
        <div class="text">
            <div class="" style="padding: 20px">
                <h4 style="color: #EC1E8D"><b>{{ $cause->title }}</b></h4>
                <p>{{ $cause->intro }}</p>
                <a href="#">Learn More</a>
            </div>
        </div>
    </div>
    <!-- End single-item -->
</div>