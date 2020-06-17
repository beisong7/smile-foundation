<header class="main-header header-style-one">
    <section class="header-top">
        <div class="container">
            <div class="header">
                <div class="header-top-left">
                    <ul>
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
                <div class="header-top-right">
                    <ul>
                        <li>
                            <a href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i> {{ _('mails@smileplanetef.org') }}</a></li>
                        <li><p><i class="fa fa-phone" aria-hidden="true"></i>{{ _('+234 703 346 1426') }}</p></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--/header_top_area-->

    <!--/Header Top-->
    <section class="mainmenu-area">
        <div class="container">
            <div class="logo pull-left" style="padding-top: 10px">
                <a href="{{ route('home') }}"><img src="{{ url('images/spef_1.png') }}" alt="" style="height: 60px; width: auto"></a>
            </div>
            <nav class="main-menu pull-left">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="navbar-collapse collapse clearfix">
                    <ul class="navigation clearfix">
                        <li class="{{ @$navbar['home'] }}"><a href="#">Home</a></li>
                        <li class="{{ @$navbar['about'] }}"><a href="#">About</a></li>
                        <li class="{{ @$navbar['cause'] }}"><a href="#">Causes</a></li>
                        <li class="{{ @$navbar['events'] }}"><a href="#">Event</a></li>
                        <li class="{{ @$navbar['contact'] }}"><a href="#">Contact</a></li>
                    </ul>
                    <ul class="mobile-menu clearfix">

                        <li class="{{ @$navbar['home'] }}"><a href="#">Home</a></li>
                        <li class="{{ @$navbar['about'] }}"><a href="#">About</a></li>
                        <li class="{{ @$navbar['cause'] }}"><a href="#">Causes</a></li>
                        <li class="{{ @$navbar['events'] }}"><a href="#">Event</a></li>
                        <li class="{{ @$navbar['contact'] }}"><a href="#">Contact</a></li>
                    </ul>
                </div>
            </nav>
            {{--<div class="signup">--}}
                {{--<ul><li><a href="#"><i class="fa fa-arrow-circle-down" aria-hidden="true"></i>login</a></li>--}}
                    {{--<li><a href="#"><span></span><i class="fa fa-user" aria-hidden="true"></i>signup</a></li></ul>--}}
            {{--</div>--}}
        </div>
    </section>
    <!--Main-Mane-->
    <section class="bounce-in-header">
        <div class="container">
            <div class="logo pull-left" style="padding-top: 10px">
                <a href="index-2.html#"><img src="{{ url('images/spef_1.png') }}" alt="" style="height: 60px; width: auto"></a>
            </div>
            <nav class="main-menu pull-left">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="navbar-collapse collapse clearfix">
                    <ul class="navigation clearfix">
                        <li class="{{ @$navbar['home'] }}"><a href="#">Home</a></li>
                        <li class="{{ @$navbar['about'] }}"><a href="#">About</a></li>
                        <li class="{{ @$navbar['cause'] }}"><a href="#">Causes</a></li>
                        <li class="{{ @$navbar['events'] }}"><a href="#">Event</a></li>
                        <li class="{{ @$navbar['contact'] }}"><a href="#">Contact</a></li>
                    </ul>
                    <ul class="mobile-menu clearfix">

                        <li class="{{ @$navbar['home'] }}"><a href="#">Home</a></li>
                        <li class="{{ @$navbar['about'] }}"><a href="#">About</a></li>
                        <li class="{{ @$navbar['cause'] }}"><a href="#">Causes</a></li>
                        <li class="{{ @$navbar['events'] }}"><a href="#">Event</a></li>
                        <li class="{{ @$navbar['contact'] }}"><a href="#">Contact</a></li>
                    </ul>
                </div>
            </nav>
            {{--<div class="signup">--}}
                {{--<ul><li><a href="#"><i class="fa fa-arrow-circle-down" aria-hidden="true"></i>login</a></li>--}}
                    {{--<li><a href="#"><span></span><i class="fa fa-user" aria-hidden="true"></i>signup</a></li></ul>--}}
            {{--</div>--}}
        </div>
    </section>
    <!--/Main-Menu-->
</header>