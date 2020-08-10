
        {{--@foreach($banners as $ban)--}}
            {{--<div class="single-slide-item" style=" max-height: 500px; background-image: url('{{ 'https://smileplanetef.org/uploads/'.$ban->gallery->url }}')">--}}
            {{--</div>--}}
        {{--@endforeach--}}
<section class="main-slider">
    <div class="tp-banner-container">
        <div class="tp-banner" >
            <ul>

                @if(!empty($sliders))
                    @foreach($sliders as $slider)
                        <li data-transition="fade" data-slotamount="1" data-masterspeed="1000" data-thumb="{{ $slider->photo }}"  data-saveperformance="off"  data-title="">
                            <img src="{{ $slider->photo }}"  alt=""  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">

                            @if(!empty($slider->title))
                                <div class="tp-caption lfl tp-resizeme"
                                     data-x="center" data-hoffset="0"
                                     data-y="center" data-voffset="-100"
                                     data-speed="1500"
                                     data-start="500"
                                     data-easing="easeOutExpo"
                                     data-splitin="none"
                                     data-splitout="none"
                                     data-elementdelay="0.01"
                                     data-endelementdelay="0.3"
                                     data-endspeed="1200"
                                     data-endeasing="Power4.easeIn"
                                     style="z-index: 4; max-width: auto; max-height: auto; white-space: nowrap;">
                                    <div class="grey-title"><h4>{{ $slider->title }}</h4></div>
                                </div>
                            @endif


                            @if(!empty($slider->main_title))
                                <div class="tp-caption lfl tp-resizeme"
                                     data-x="center" data-hoffset="0"
                                     data-y="center" data-voffset="-40"
                                     data-speed="1500"
                                     data-start="500"
                                     data-easing="easeOutExpo"
                                     data-splitin="none"
                                     data-splitout="none"
                                     data-elementdelay="0.01"
                                     data-endelementdelay="0.3"
                                     data-endspeed="1200"
                                     data-endeasing="Power4.easeIn"
                                     style="z-index: 4; max-width: auto; max-height: auto; white-space: nowrap;">
                                    <div class="grey-title">
                                        <h2>
                                            <?php $start = 1; $current = 0; ?>
                                            @foreach(explode(' ', $slider->main_title) as $value)
                                                @if($current===$start)
                                                    <span>{{ $value }}</span>
                                                @else
                                                    {{ $value }}
                                                @endif

                                                <?php $current += 1; ?>
                                            @endforeach

                                        </h2>
                                    </div>
                                </div>
                            @endif


                            @if(!empty($slider->sub_title))
                                <div class="tp-caption lfr tp-resizeme"
                                     data-x="center" data-hoffset="0"
                                     data-y="center" data-voffset="50"
                                     data-speed="1500"
                                     data-start="500"
                                     data-easing="easeOutExpo"
                                     data-splitin="none"
                                     data-splitout="none"
                                     data-elementdelay="0.01"
                                     data-endelementdelay="0.3"
                                     data-endspeed="1200"
                                     data-endeasing="Power4.easeIn"
                                     style="z-index: 4; max-width: auto; max-height: auto; white-space: nowrap;">
                                    <div class="grey-title">
                                        <p>
                                            {{ $slider->sub_title }}
                                        </p>
                                    </div>
                                </div>
                            @endif

                            @if($slider->donate)
                                <div class="tp-caption lfl tp-resizeme"
                                     data-x="center" data-hoffset="0"
                                     data-y="center" data-voffset="100"
                                     data-speed="1500"
                                     data-start="500"
                                     data-easing="easeOutExpo"
                                     data-splitin="none"
                                     data-splitout="none"
                                     data-elementdelay="0.01"
                                     data-endelementdelay="0.3"
                                     data-endspeed="1200"
                                     data-endeasing="Power4.easeIn"
                                     style="z-index: 4; max-width: auto; max-height: auto; white-space: nowrap;"><div class="grey-title"><a href="#" class="btn-3">Donate now</a></div></div>
                            @endif

                            @if($slider->menu)
                                @include('components.donate')
                            @endif

                        </li>
                    @endforeach
                @else

                    <li data-transition="fade" data-slotamount="1" data-masterspeed="1000" data-thumb="{{ url('images/foundation/no_poverty.jpg') }}"  data-saveperformance="off"  data-title="">
                        <img src="{{ url('images/foundation/no_poverty.jpg') }}"  alt=""  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">

                        <div class="tp-caption lfl tp-resizeme"
                             data-x="center" data-hoffset="0"
                             data-y="center" data-voffset="-100"
                             data-speed="1500"
                             data-start="500"
                             data-easing="easeOutExpo"
                             data-splitin="none"
                             data-splitout="none"
                             data-elementdelay="0.01"
                             data-endelementdelay="0.3"
                             data-endspeed="1200"
                             data-endeasing="Power4.easeIn"
                             style="z-index: 4; max-width: auto; max-height: auto; white-space: nowrap;">
                            <div class="grey-title"><h4>Thousand of families need support!</h4></div>
                        </div>

                        <div class="tp-caption lfl tp-resizeme"
                             data-x="center" data-hoffset="0"
                             data-y="center" data-voffset="-40"
                             data-speed="1500"
                             data-start="500"
                             data-easing="easeOutExpo"
                             data-splitin="none"
                             data-splitout="none"
                             data-elementdelay="0.01"
                             data-endelementdelay="0.3"
                             data-endspeed="1200"
                             data-endeasing="Power4.easeIn"
                             style="z-index: 4; max-width: auto; max-height: auto; white-space: nowrap;">
                            <div class="grey-title"><h2>Zero<span>Poverty</span></h2></div>
                        </div>

                        <div class="tp-caption lfr tp-resizeme"
                             data-x="center" data-hoffset="0"
                             data-y="center" data-voffset="50"
                             data-speed="1500"
                             data-start="500"
                             data-easing="easeOutExpo"
                             data-splitin="none"
                             data-splitout="none"
                             data-elementdelay="0.01"
                             data-endelementdelay="0.3"
                             data-endspeed="1200"
                             data-endeasing="Power4.easeIn"
                             style="z-index: 4; max-width: auto; max-height: auto; white-space: nowrap;">
                            <div class="grey-title">
                                <p>
                                    We can achieve zero poverty if we all come together as one, in unity and respect. <br> We can all learn to lean on each other, supporting each other.
                                </p>
                            </div>
                        </div>

                        <div class="tp-caption lfl tp-resizeme"
                             data-x="center" data-hoffset="0"
                             data-y="center" data-voffset="100"
                             data-speed="1500"
                             data-start="500"
                             data-easing="easeOutExpo"
                             data-splitin="none"
                             data-splitout="none"
                             data-elementdelay="0.01"
                             data-endelementdelay="0.3"
                             data-endspeed="1200"
                             data-endeasing="Power4.easeIn"
                             style="z-index: 4; max-width: auto; max-height: auto; white-space: nowrap;"><div class="grey-title"><a href="#" class="btn-3">Donate now</a></div></div>

                        @include('components.donate')

                    </li>

                    <li data-transition="slidedown" data-slotamount="1" data-masterspeed="1000" data-thumb="{{ url('images/foundation/child.jpg') }}"  data-saveperformance="off"  data-title="">
                        <img src="{{ url('images/foundation/child.jpg') }}"  alt=""  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">

                        <div class="tp-caption lft tp-resizeme"
                             data-x="center" data-hoffset="0"
                             data-y="center" data-voffset="-100"
                             data-speed="1500"
                             data-start="500"
                             data-easing="easeOutExpo"
                             data-splitin="none"
                             data-splitout="none"
                             data-elementdelay="0.01"
                             data-endelementdelay="0.3"
                             data-endspeed="1200"
                             data-endeasing="Power4.easeIn"
                             style="z-index: 4; max-width: auto; max-height: auto; white-space: nowrap;">
                            <div class="grey-title">
                                <h4>Supporting Families during COVID-19</h4>
                            </div>
                        </div>


                        <div class="tp-caption lfb tp-resizeme"
                             data-x="center" data-hoffset="0"
                             data-y="center" data-voffset="-40"
                             data-speed="1500"
                             data-start="500"
                             data-easing="easeOutExpo"
                             data-splitin="none"
                             data-splitout="none"
                             data-elementdelay="0.01"
                             data-endelementdelay="0.3"
                             data-endspeed="1200"
                             data-endeasing="Power4.easeIn"
                             style="z-index: 4; max-width: auto; max-height: auto; white-space: nowrap;"><div class="white-title"><h2>KNOCK AND  <span>GIVE</span> </h2></div></div>
                        <div class="tp-caption lfr tp-resizeme"
                             data-x="center" data-hoffset="0"
                             data-y="center" data-voffset="50"
                             data-speed="1500"
                             data-start="500"
                             data-easing="easeOutExpo"
                             data-splitin="none"
                             data-splitout="none"
                             data-elementdelay="0.01"
                             data-endelementdelay="0.3"
                             data-endspeed="1200"
                             data-endeasing="Power4.easeIn"
                             style="z-index: 4; max-width: auto; max-height: auto; white-space: nowrap;">
                            <div class="grey-title">
                                <p>Facing the unfortunate challenges and ensuring COVID-19 does not win the battle over humanity,
                                    <br> Supporting families with relief materials</p>
                            </div>
                        </div>
                        <div class="tp-caption lfl tp-resizeme"
                             data-x="center" data-hoffset="0"
                             data-y="center" data-voffset="100"
                             data-speed="1500"
                             data-start="500"
                             data-easing="easeOutExpo"
                             data-splitin="none"
                             data-splitout="none"
                             data-elementdelay="0.01"
                             data-endelementdelay="0.3"
                             data-endspeed="1200"
                             data-endeasing="Power4.easeIn"
                             style="z-index: 4; max-width: auto; max-height: auto; white-space: nowrap;"><div class="grey-title"><a href="#" class="btn-3">Donate now</a></div></div>
                    </li>

                    <li data-transition="fade" data-slotamount="1" data-masterspeed="1000" data-thumb="{{ url('images/foundation/happy.jpg') }}"  data-saveperformance="off"  data-title="">
                    <img src="{{ url('images/foundation/happy.jpg') }}"  alt=""  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">

                    <div class="tp-caption lfl tp-resizeme"
                         data-x="center" data-hoffset="0"
                         data-y="center" data-voffset="-100"
                         data-speed="1500"
                         data-start="500"
                         data-easing="easeOutExpo"
                         data-splitin="none"
                         data-splitout="none"
                         data-elementdelay="0.01"
                         data-endelementdelay="0.3"
                         data-endspeed="1200"
                         data-endeasing="Power4.easeIn"
                         style="z-index: 4; max-width: auto; max-height: auto; white-space: nowrap;"><div class="grey-title"><h4>Sharing in the Happiness!</h4></div></div>
                    <div class="tp-caption lfl tp-resizeme"
                         data-x="center" data-hoffset="0"
                         data-y="center" data-voffset="-40"
                         data-speed="1500"
                         data-start="500"
                         data-easing="easeOutExpo"
                         data-splitin="none"
                         data-splitout="none"
                         data-elementdelay="0.01"
                         data-endelementdelay="0.3"
                         data-endspeed="1200"
                         data-endeasing="Power4.easeIn"
                         style="z-index: 4; max-width: auto; max-height: auto; white-space: nowrap;"><div class="grey-title"><h2>Smile Planet <span>Foundation</span></h2></div></div>

                    <div class="tp-caption lfr tp-resizeme"
                         data-x="center" data-hoffset="0"
                         data-y="center" data-voffset="50"
                         data-speed="1500"
                         data-start="500"
                         data-easing="easeOutExpo"
                         data-splitin="none"
                         data-splitout="none"
                         data-elementdelay="0.01"
                         data-endelementdelay="0.3"
                         data-endspeed="1200"
                         data-endeasing="Power4.easeIn"
                         style="z-index: 4; max-width: auto; max-height: auto; white-space: nowrap;">
                        <div class="grey-title">
                            <p>
                                Committed to bringing joy and happiness to the lives of children
                                <br>
                                Thank you for the support
                            </p>
                        </div>
                    </div>
                    <div class="tp-caption lfl tp-resizeme"
                         data-x="center" data-hoffset="0"
                         data-y="center" data-voffset="100"
                         data-speed="1500"
                         data-start="500"
                         data-easing="easeOutExpo"
                         data-splitin="none"
                         data-splitout="none"
                         data-elementdelay="0.01"
                         data-endelementdelay="0.3"
                         data-endspeed="1200"
                         data-endeasing="Power4.easeIn"
                         style="z-index: 4; max-width: auto; max-height: auto; white-space: nowrap;"><div class="grey-title"><a href="#" class="btn-3">Donate now</a></div></div>

                    @include('components.slide_event')
                </li>
                @endif
            </ul>
            <div class="tp-bannertimer"></div>

        </div>
    </div>

</section>