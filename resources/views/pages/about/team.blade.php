<div class="teamcarosule">
    @foreach($volunteers as $volunteer)
        <div class="team-item">
            <!-- Start single-item -->
            <div class="single-item wow fadeInUp">
                <div class="img-holder" style="background-image: url('{{ url('img/user.png') }}'); background-repeat: no-repeat; background-position: center">
                    <figure style="min-height: 268px"><a href="#"><img src="{{ url('https://smileplanetef.org/uploads/'.$volunteer['image']) }}" alt="Images"></a></figure>
                    <!-- Start overlay -->
                    <div class="overlay">
                        <div class="link-icon">
                            <ul class="link">
                                <li>
                                    <a href="{{ url($volunteer['fbook']) }}"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                </li>
                                <li>
                                    <a href="{{ url($volunteer['igram']) }}"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                </li>
                                <li>
                                    <a href="{{ url($volunteer['tweeta']) }}"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- End overlay -->
                </div>
                <div class="text">
                    <h4><a href="#">{{ $volunteer['fname'] . " "  . $volunteer['lname']}}</a></h4>
                    <p>volunteer</p>
                </div>
            </div>
            <!-- End single-item -->
        </div>
    @endforeach

</div>