<div class="teamcarosule">
    @foreach($volunteers as $volunteer)
        <div class="team-item">
            <!-- Start single-item -->
            <div class="single-item wow fadeInUp">
                <div class="img-holder" style="">
                    <figure style="height: 240px; overflow: hidden">
                        <a href="#"><img src="{{ url('https://smileplanetef.org/public/uploads/'.$volunteer['image']) }}" alt="Images"></a></figure>
                    <!-- Start overlay -->
                    <div class="overlay">
                        <div class="link-icon">
                            <ul class="link">
                                <li>
                                    <a href="{{ !empty($volunteer['fbook'])?"http://facebook.com/".str_replace(" ", "", str_replace("@", "", $volunteer['fbook'])):"#" }}" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                </li>
                                <li>
                                    <a href="{{ !empty($volunteer['igram'])?"http://instagram.com/".str_replace(" ", "", str_replace("@", "", $volunteer['igram'])):"#" }}" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                </li>
                                <li>
                                    <a href="{{ !empty($volunteer['tweeta'])?"http://twitter.com/".str_replace(" ", "", str_replace("@", "", $volunteer['tweeta'])):"#" }}" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- End overlay -->
                </div>
                <div class="text">
                    <h4 style="font-size: 14px"><a href="#">{{ $volunteer['fname'] . " "  . $volunteer['lname']}}</a></h4>
                    <p>volunteer</p>
                </div>
            </div>
            <!-- End single-item -->
        </div>
    @endforeach

</div>