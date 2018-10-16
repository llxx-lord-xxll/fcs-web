@extends('layouts.main')

@section('header-extra')
    <link rel="stylesheet" href="{{asset('css/jquery.fancybox.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('css/accordion-slider.css')}}">
    @endsection

@section('title')
    Home
@endsection


@section('page-content')
    <!-- FULLSCREEN SLIDER -->

    <div class="tp-banner-container">
        <div class="tp-banner">
            <ul>
                <!-- SLIDE 1 -->
                <li data-transition="slidevertical" data-slotamount="1" data-masterspeed="1000" data-thumb="img/slide_thumb_1.jpg"  data-saveperformance="off"  data-title="Slide">
                    <!-- MAIN IMAGE -->
                    <img src="img/slide_thumb_1.jpg"  alt="fullslide1"  data-bgposition="left top" data-bgfit="cover" data-bgrepeat="no-repeat">
                    <!-- LAYERS -->

                    <!-- LAYER NR. 1 -->
                    <div class="tp-caption light_heavy_70_shadowed lfb ltt tp-resizeme"
                         data-x="center" data-hoffset="250"
                         data-y="center" data-voffset="-70"
                         data-speed="600"
                         data-start="800"
                         data-easing="Power4.easeOut"
                         data-splitin="none"
                         data-splitout="none"
                         data-elementdelay="0.01"
                         data-endelementdelay="0.1"
                         data-endspeed="500"
                         data-endeasing="Power4.easeIn"
                         style="z-index: 2; max-width: auto; max-height: auto; white-space: nowrap;">Future City Summit 2018<br>"Cities Beyond Imagination - Once Upon A Time in China"<br>Guangzhou | Hong Kong | 3rd - 8th August 2018
                    </div>

                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption light_medium_30_shadowed lfb ltt tp-resizeme"
                         data-x="center" data-hoffset="205"
                         data-y="center" data-voffset="-10"
                         data-speed="600"
                         data-start="900"
                         data-easing="Power4.easeOut"
                         data-splitin="none"
                         data-splitout="none"
                         data-elementdelay="0.01"
                         data-endelementdelay="0.1"
                         data-endspeed="500"
                         data-endeasing="Power4.easeIn"
                         style="z-index: 3; max-width: auto; max-height: auto; white-space: nowrap;">
                    </div>


                </li>

                <!-- SLIDE 2 -->
                <li data-transition="slidevertical" data-slotamount="1" data-masterspeed="1000" data-thumb="img/slide_thumb_2.jpg"  data-saveperformance="off"  data-title="Slide">
                    <!-- MAIN IMAGE -->
                    <img src="img/slide_thumb_2.jpg"  alt="fullslide2"  data-bgposition="left top" data-bgfit="cover" data-bgrepeat="no-repeat">
                    <!-- LAYERS -->

                    <!-- LAYER NR. 1 -->
                    <div class="tp-caption light_heavy_70_shadowed lfb ltt tp-resizeme"
                         data-x="center" data-hoffset="270"
                         data-y="center" data-voffset="-70"
                         data-speed="600"
                         data-start="800"
                         data-easing="Power4.easeOut"
                         data-splitin="none"
                         data-splitout="none"
                         data-elementdelay="0.01"
                         data-endelementdelay="0.1"
                         data-endspeed="500"
                         data-endeasing="Power4.easeIn"
                         style="z-index: 2; max-width: auto; max-height: auto; white-space: nowrap;">Future City Summit 2018 <br>"Cities Beyond Imagination - Rise Again Little Dragon"<br>Guangzhou | Hong Kong | 3rd - 8th August 2018
                    </div>

                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption light_medium_30_shadowed lfb ltt tp-resizeme"
                         data-x="center" data-hoffset="230"
                         data-y="center" data-voffset="0"
                         data-speed="600"
                         data-start="900"
                         data-easing="Power4.easeOut"
                         data-splitin="none"
                         data-splitout="none"
                         data-elementdelay="0.01"
                         data-endelementdelay="0.1"
                         data-endspeed="500"
                         data-endeasing="Power4.easeIn"
                         style="z-index: 3; max-width: auto; max-height: auto; white-space: nowrap;">
                    </div>


                </li>

                <!-- SLIDE 3 -->
                <li data-transition="slidevertical" data-slotamount="1" data-masterspeed="1000" data-thumb="img/slide_thumb_3.jpg"  data-saveperformance="off"  data-title="Slide">
                    <!-- MAIN IMAGE -->
                    <img src="img/slide_thumb_3.jpg"  alt="fullslide6"  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
                    <!-- LAYERS -->

                    <!-- LAYER NR. 1 -->
                    <div class="tp-caption light_heavy_70_shadowed lfb ltt tp-resizeme"
                         data-x="center" data-hoffset="215"
                         data-y="center" data-voffset="-70"
                         data-speed="600"
                         data-start="800"
                         data-easing="Power4.easeOut"
                         data-splitin="none"
                         data-splitout="none"
                         data-elementdelay="0.01"
                         data-endelementdelay="0.1"
                         data-endspeed="500"
                         data-endeasing="Power4.easeIn"
                         style="z-index: 2; max-width: auto; max-height: auto; white-space: nowrap;">Future City Summit 2018 <br>- Oriental Express of venture builder and avenue of PPP<br>Guangzhou | Hong Kong | 3rd - 8th August 2018
                    </div>

                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption light_medium_30_shadowed lfb ltt tp-resizeme"
                         data-x="center" data-hoffset="290"
                         data-y="center" data-voffset="40"
                         data-speed="600"
                         data-start="900"
                         data-easing="Power4.easeOut"
                         data-splitin="none"
                         data-splitout="none"
                         data-elementdelay="0.01"
                         data-endelementdelay="0.1"
                         data-endspeed="500"
                         data-endeasing="Power4.easeIn"
                         style="z-index: 3; max-width: auto; max-height: auto; white-space: nowrap;">
                    </div>


                </li>

            </ul>

            <div class="tp-bannertimer"></div>
        </div>
    </div>

    <!-- HIGHLIGHT -->
    <section id="highlight">
        <div class="container-fluid">
            <div class="row">

                <div id="left" class="left col-lg-9 col-md-8 text-right">
                    <h2>Join the conference</h2>
                    <p>An Avenue For Young Entrepreneur | Young Government Leader | Young Scholar</p>
                </div>

                <div id="right" class="col-lg-3 col-md-4 text-left">
                    <div id="countdown"></div>
                </div>

            </div>
        </div>
    </section>

    <!-- INFO -->

    <!-- Panel Discussion Section -->
    <div id="fcs-theme-panel" class="accordion-slider">
        <div class="as-panels">

            <!-- Panel 1 -->
            <div class="as-panel">
                <a href="{{route('panel-techfuture')}}">
                    <img class="as-background" src="css/images/blank.gif" data-src="img/panel-tech-for-future.jpg" data-retina="img/panel-tech-for-future.jpg"/>
                </a>

                <div class="as-layer as-closed as-white panel-counter"
                     data-position="bottomLeft" data-horizontal="8" data-vertical="8">
                    Technology for Future
                </div>

                <h3 class="as-layer as-opened as-black as-padding"
                    data-horizontal="40" data-vertical="10%"
                    data-show-transition="left" data-hide-transition="left">
                    Technology for Future
                </h3>
                <p class="as-layer as-opened as-black as-padding hide-small-screen"
                   data-horizontal="40" data-vertical="34%" data-width="300"
                   data-show-transition="left" data-show-delay="400" data-hide-transition="left" data-hide-delay="500">
                    A struggle with technology, are we mastering future technology wisely?
                </p>
                <p class="as-layer as-opened as-black as-padding hide-small-screen"
                   data-horizontal="center" data-vertical="75%"
                   data-show-transition="left" data-show-delay="700" data-hide-transition="right" data-hide-delay="200">
                    <a href="{{route('panel-techfuture')}}"> Join This Session </a>
                </p>
            </div>

            <!-- Panel 2 -->
            <div class="as-panel">
                <a href="{{route('panel-entrepreneurship')}}">
                    <img class="as-background" src="css/images/blank.gif" data-src="img/panel-entrepreneurship-for-all.jpg" data-retina="img/panel-entrepreneurship-for-all.jpg"/>
                </a>
                <div class="as-layer as-closed as-white panel-counter"
                     data-position="bottomLeft" data-horizontal="8" data-vertical="8">
                    Entrepreneurship For All
                </div>

                <h3 class="as-layer as-opened as-black as-padding"
                    data-horizontal="40" data-vertical="10%"
                    data-show-transition="left" data-hide-transition="left">
                    Entrepreneurship For All
                </h3>

                <p class="as-layer as-opened as-black as-padding hide-small-screen"
                   data-horizontal="40" data-vertical="34%" data-width="300"
                   data-show-transition="left" data-show-delay="400" data-hide-transition="left" data-hide-delay="500">
                    How are we nurturing generation X with entrepreneurship for emerging countries in future?
                </p>
                <p class="as-layer as-opened as-black as-padding hide-small-screen"
                   data-horizontal="center" data-vertical="75%"
                   data-show-transition="left" data-show-delay="700" data-hide-transition="right" data-hide-delay="200">
                    <a href="{{route('panel-entrepreneurship')}}"> Join This Session </a>
                </p>
            </div>

            <!-- Panel 3 -->
            <div class="as-panel">
                <a href="{{route('panel-entertainment-living')}}">
                    <img class="as-background" src="css/images/blank.gif" data-src="img/panel-art-entertainment.jpg" data-retina="img/panel-art-entertainment.jpg"/>
                </a>
                <div class="as-layer as-closed as-white panel-counter"
                     data-position="bottomLeft" data-horizontal="8" data-vertical="8">
                    Arts, Entertainment and Living
                </div>

                <h3 class="as-layer as-opened as-black as-padding"
                    data-horizontal="40" data-vertical="10%"
                    data-show-transition="left" data-hide-transition="left">
                    Arts, Entertainment and Living
                </h3>

                <p class="as-layer as-opened as-black as-padding hide-small-screen"
                   data-horizontal="40" data-vertical="34%" data-width="300"
                   data-show-transition="left" data-show-delay="400" data-hide-transition="left" data-hide-delay="500">
                    How does our imagination in arts and entertainment impact the way we live in future?
                </p>
                <p class="as-layer as-opened as-black as-padding hide-small-screen"
                   data-horizontal="center" data-vertical="75%"
                   data-show-transition="left" data-show-delay="700" data-hide-transition="right" data-hide-delay="200">
                    <a href="{{route('panel-entertainment-living')}}"> Join This Session </a>
                </p>
            </div>

            <!-- Panel 4 -->
            <div class="as-panel">
                <a href="{{route('panel-development-resilience')}}">
                    <img class="as-background" src="css/images/blank.gif" data-src="img/panel-global-development.jpg" data-retina="img/panel-global-development.jpg"/>
                </a>

                <div class="as-layer as-closed as-white panel-counter"
                     data-position="bottomLeft" data-horizontal="8" data-vertical="8">
                    Global Development and Resilience
                </div>

                <h3 class="as-layer as-opened as-black as-padding"
                    data-horizontal="40" data-vertical="10%"
                    data-show-transition="left" data-hide-transition="left">
                    Global Development and Resilience
                </h3>

                <p class="as-layer as-opened as-black as-padding hide-small-screen"
                   data-horizontal="40" data-vertical="34%" data-width="300"
                   data-show-transition="left" data-show-delay="400" data-hide-transition="left" data-hide-delay="500">
                    Are we balancing consciously the use of big data over surveillance, governance and social safety?
                </p>
                <p class="as-layer as-opened as-black as-padding hide-small-screen"
                   data-horizontal="center" data-vertical="75%"
                   data-show-transition="left" data-show-delay="700" data-hide-transition="right" data-hide-delay="200">
                    <a href="{{route('panel-development-resilience')}}"> Join This Session </a>
                </p>
            </div>

            <!-- Panel 5 -->
            <div class="as-panel">
                <a href="{{route('panel-earth-urban-energy')}}">
                    <img class="as-background" src="css/images/blank.gif" data-src="img/panel-urban-energy.jpg" data-retina="img/panel-urban-energy.jpg"/>
                </a>
                <div class="as-layer as-closed as-white panel-counter"
                     data-position="bottomLeft" data-horizontal="8" data-vertical="8">
                    The Earth, Urban and Energy
                </div>

                <h3 class="as-layer as-opened as-black as-padding"
                    data-horizontal="40" data-vertical="10%"
                    data-show-transition="left" data-hide-transition="left">
                    The Earth, Urban and Energy
                </h3>

                <p class="as-layer as-opened as-black as-padding hide-small-screen"
                   data-horizontal="40" data-vertical="34%" data-width="300"
                   data-show-transition="left" data-show-delay="400" data-hide-transition="left" data-hide-delay="500">
                    How do we re-design the cities in Asia for more sustainable and regenerative future?
                </p>
                <p class="as-layer as-opened as-black as-padding hide-small-screen"
                   data-horizontal="center" data-vertical="75%"
                   data-show-transition="left" data-show-delay="700" data-hide-transition="right" data-hide-delay="200">
                    <a href="{{route('panel-earth-urban-energy')}}"> Join This Session </a>
                </p>
            </div>

            <!-- Panel 6 -->
            <div class="as-panel">
                <a href="{{route('panel-space-extraterrestrial')}}">
                    <img class="as-background" src="css/images/blank.gif" data-src="img/panel-space.jpg" data-retina="img/panel-space.jpg"/>
                </a>

                <div class="as-layer as-closed as-white panel-counter"
                     data-position="bottomLeft" data-horizontal="8" data-vertical="8">
                    Space Technology in Asia
                </div>

                <h3 class="as-layer as-opened as-black as-padding"
                    data-horizontal="40" data-vertical="10%"
                    data-show-transition="left" data-hide-transition="left">
                    Space Technology in Asia
                </h3>

                <p class="as-layer as-opened as-black as-padding hide-small-screen"
                   data-horizontal="40" data-vertical="34%" data-width="300"
                   data-show-transition="left" data-show-delay="400" data-hide-transition="left" data-hide-delay="500">
                    How can we prepare our space innovation thinking in Asia?
                </p>
                <p class="as-layer as-opened as-black as-padding hide-small-screen"
                   data-horizontal="center" data-vertical="75%"
                   data-show-transition="left" data-show-delay="700" data-hide-transition="right" data-hide-delay="200">
                    <a href="{{route('panel-space-extraterrestrial')}}"> Join This Session </a>
                </p>
            </div>
            <!-- End of Panel-->

        </div>
    </div>

    <!-- FUNFACTS -->
    <section id="funfacts">
        <div class="funfacts-inner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 col-lg-offset-1">
                        <div id="funfacts-carousel">

                            <div class="item">
                                <i class="pe pe-4x pe-7s-world"></i>
                                <div class="desc">
                                    <p class="number">30</p>
                                    <p class="description">Cities</p>
                                </div>
                            </div>

                            <div class="item">
                                <i class="pe pe-4x pe-7s-micro"></i>
                                <div class="desc">
                                    <p class="number">60</p>
                                    <p class="description">speakers</p>
                                </div>
                            </div>

                            <div class="item">
                                <i class="pe pe-4x pe-7s-display2"></i>
                                <div class="desc">
                                    <p class="number">2</p>
                                    <p class="description">Hosts</p>
                                </div>
                            </div>

                            <div class="item">
                                <i class="pe pe-va pe-4x pe-7s-id"></i>
                                <div class="desc">
                                    <p class="number">250</p>
                                    <p class="description">Delegates</p>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- REGISTER -->
    <section id="register">
        <div class="container">
            <div class="row">

                <div class="col-lg-12">
                    <h2 class="uppercase text-center">Register as Delegate </h2>
                    <p class="lead text-center">For Group Ticketing and special arrangement(e.g. extra schedule and days), please contact: <a href="mailto:community@futurecitysummit.org?Subject=Hello%20again" target="_top"> community@futurecitysummit.org </a></p>
                </div>

                <div class="col-lg-12">
                    <!-- PRICE TABLES -->

                    <div class="col-lg-12">
                        <h2 class="uppercase text-center">STANDARD PACKAGE</h2>
                        <p class="lead text-center">(Dormitory in The University of Hong Kong)</p>
                    </div>


                    <div id="price-carousel">

                        <div class="price-table early-bird">
                            <div class="icon">
                                <i class="pe-5x pe-7s-wristwatch"></i>
                            </div>

                            <div class="table-header">
                                <h3>Early Bird</h3>
                                <p class="price">$400</p>
                                <p class="early-date center-right">Deadline: 1st May, 2018</p>
                            </div>

                            <ul class="desc list-unstyled">
                                <li><strong>6 Nights Accommodation in HK, GZ &amp; FS (HKU Dormitory)</strong></li>
                                <li>Transportation (Transfer to GZ &amp; FS Included)</li>
                                <li>Conference Kit, Industry Visits &amp; Workshops</li>
                                <li>Refreshment &amp; Meals</li>
                            </ul>
                        </div>

                        <div class="price-table standart">
                            <div class="icon">
                                <i class="pe-5x pe-va pe-7s-ribbon"></i>
                            </div>

                            <div class="table-header">
                                <h3>REGULAR</h3>
                                <p class="price">$420</p>
                                <p class="early-date">Deadline: 1st June, 2018</p>
                            </div>

                            <ul class="desc list-unstyled">
                                <li><strong>6 Nights Accommodation in HK, GZ &amp; FS (HKU Dormitory)</strong></li>
                                <li>Transportation (Transfer to GZ &amp; FS Included)</li>
                                <li>Conference Kit, Industry Visits &amp; Workshops</li>
                                <li>Refreshment &amp; Meals</li>
                            </ul>
                        </div>

                        <div class="price-table vip">
                            <div class="icon">
                                <i class="pe-5x pe-va pe-7s-diamond"></i>
                            </div>

                            <div class="table-header">
                                <h3>FINAL</h3>
                                <p class="price">$440</p>
                                <p class="early-date">Deadline: 1st July, 2018</p>
                            </div>

                            <ul class="desc list-unstyled">
                                <li><strong>6 Nights Accommodation in HK, GZ &amp; FS (HKU Dormitory)</strong></li>
                                <li>Transportation (Transfer to GZ &amp; FS Included)</li>
                                <li>Conference Kit, Industry Visits &amp; Workshops</li>
                                <li>Refreshment &amp; Meals</li>
                            </ul>
                        </div>

                    </div>


                </div>
                <!-- End opf Standard Pricing Table-->

                <div class="col-lg-12">
                    <!-- PRICE TABLES -->
                    <div class="col-lg-12">
                        <h2 class="uppercase text-center">EXECUTIVE PACKAGE</h2>
                        <p class="lead text-center">(International 5* Hotel with Shuttle Service in Hong Kong)</p>
                    </div>

                    <div id="executive-price-carousel">

                        <div class="price-table premium-early-bird">
                            <div class="icon">
                                <i class="pe-5x pe-7s-wristwatch"></i>
                            </div>

                            <div class="table-header">
                                <h3>Early Bird</h3>
                                <p class="price">$550</p>
                                <p class="early-date center-right">Deadline: 1st May, 2018</p>
                            </div>

                            <ul class="desc list-unstyled">
                                <li><strong>6 Nights Accommodation in HK, GZ &amp; FS (5&#42; International Hotel in Hong Kong with Shuttle Service)</strong></li>
                                <li>Transportation (Transfer to GZ &amp; FS Included)</li>
                                <li>Conference Kit, Industry Visits &amp; Workshops</li>
                                <li>Refreshment &amp; Meals</li>
                            </ul>
                        </div>

                        <div class="price-table premium-standart">
                            <div class="icon">
                                <i class="pe-5x pe-va pe-7s-ribbon"></i>
                            </div>

                            <div class="table-header">
                                <h3>REGULAR</h3>
                                <p class="price">$570</p>
                                <p class="early-date">Deadline: 1st June, 2018</p>
                            </div>

                            <ul class="desc list-unstyled">
                                <li><strong>6 Nights Accommodation in HK, GZ &amp; FS (5&#42; International Hotel in Hong Kong with Shuttle Service)</strong></li>
                                <li>Transportation (Transfer to GZ &amp; FS Included)</li>
                                <li>Conference Kit, Industry Visits &amp; Workshops</li>
                                <li>Refreshment &amp; Meals</li>
                            </ul>
                        </div>

                        <div class="price-table premium-vip">
                            <div class="icon">
                                <i class="pe-5x pe-va pe-7s-diamond"></i>
                            </div>

                            <div class="table-header">
                                <h3>FINAL</h3>
                                <p class="price">$590</p>
                                <p class="early-date">Deadline: 1st July, 2018</p>
                            </div>

                            <ul class="desc list-unstyled">
                                <li><strong>6 Nights Accommodation in HK, GZ &amp; FS (5&#42; International Hotel in Hong Kong with Shuttle Service)</strong></li>
                                <li>Transportation (Transfer to GZ &amp; FS Included)</li>
                                <li>Conference Kit, Industry Visits &amp; Workshops</li>
                                <li>Refreshment &amp; Meals</li>
                            </ul>
                        </div>

                    </div>
                </div>


                <!-- End of Pricing Table -->

            </div>
        </div>
    </section>

    <!-- End of Executive Register -->




    <!-- GALLERY -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 fcs-section-grid text-center">
                    <h2 class="uppercase">Highlights of Conference Sessions</h2>
                </div>
            </div>
        </div>
    </section>


    <!-- VENUE TO DO LIST -->
    <div class="container-fluid grid-section">

        <div class="content grid-container">

            <!--  ================== MEDIA BOXES ================== -->

            <div class="filters-container text-center partner-row">

                <ul class="media-boxes-filter" id="filter">
                    <li><a class="selected" href="#" data-filter="*">All</a></li>
                    <li><a href="#" data-filter=".city-tour">City Tour </a></li>
                    <li><a href="#" data-filter=".hackathon">Hackathon</a></li>
                    <li><a href="#" data-filter=".panel">Panel Session</a></li>
                    <li><a href="#" data-filter=".htd">High Table Dinner</a></li>
                    <li><a href="#" data-filter=".conference-2016">Conference 2016</a></li>
                    <li><a href="#" data-filter=".conference-2017">Conference 2017</a></li>
                </ul>

            </div>

            <div class="container-fluid partner-row">
                <div class="fcs-gallery">

                    <!-- -------------------------- BOX MARKUP 1 -------------------------- -->
                    <div class="media-box city-tour">
                        <div class="media-box-image">
                            <div data-width="320" data-height="214" data-thumbnail="img/fcs2016-citytour.jpg"></div>

                            <div class="thumbnail-overlay">
                                <a href="#" class="mb-open-popup btn btn-sm btn-default" data-src="img/fcs2016-citytour.jpg" data-title="Dolor sit amet">
                                    <span class="fa fa-search"></span>&nbsp; View Larger
                                </a>
                            </div>
                        </div>

                        <div class="media-box-content">
                            <div class="media-box-title text-center">FCS 2016 City Tour</div>
                        </div>
                    </div>

                    <!-- -------------------------- BOX MARKUP 2 -------------------------- -->
                    <div class="media-box hackathon conference-2016">
                        <div class="media-box-image">
                            <div data-width="320" data-height="214" data-thumbnail="img/fcs2016-hackathon.jpg"></div>

                            <div class="thumbnail-overlay">
                                <a href="#" class="mb-open-popup btn btn-sm btn-default" data-src="img/fcs2016-hackathon.jpg" data-title="Dell consecteture">
                                    <span class="fa fa-search"></span>&nbsp; View Larger
                                </a>
                            </div>
                        </div>

                        <div class="media-box-content">
                            <div class="media-box-title text-center">Hackathon 2016</div>
                        </div>
                    </div>

                    <!-- -------------------------- BOX MARKUP 3 -------------------------- -->
                    <div class="media-box hackathon conference-2016">
                        <div class="media-box-image">
                            <div data-width="320" data-height="214" data-thumbnail="img/fcs2016-hackathon1.jpg"></div>

                            <div class="thumbnail-overlay">
                                <a href="#" class="mb-open-popup btn btn-sm btn-default" data-src="img/fcs2016-hackathon1.jpg" data-title="Sed do eiusmod">
                                    <span class="fa fa-search"></span>&nbsp; View Larger
                                </a>
                            </div>
                        </div>

                        <div class="media-box-content">
                            <div class="media-box-title text-center">Hackathon 2016</div>
                        </div>
                    </div>


                    <!-- -------------------------- BOX MARKUP 4 -------------------------- -->
                    <div class="media-box panel conference-2016">
                        <div class="media-box-image">
                            <div data-width="320" data-height="214" data-thumbnail="img/fcs2016-keynote.jpg"></div>

                            <div class="thumbnail-overlay">
                                <a href="#" class="mb-open-popup btn btn-sm btn-default" data-src="img/fcs2016-keynote.jpg" data-title="Et dolore magna">
                                    <span class="fa fa-search"></span>&nbsp; View Larger
                                </a>
                            </div>
                        </div>

                        <div class="media-box-content">
                            <div class="media-box-title text-center">Keynote Session 2016</div>
                        </div>
                    </div>

                    <!-- -------------------------- BOX MARKUP 5 -------------------------- -->
                    <div class="media-box panel conference-2016">
                        <div class="media-box-image">
                            <div data-width="320" data-height="214" data-thumbnail="img/fcs2016-panel.jpg"></div>

                            <div class="thumbnail-overlay">
                                <a href="#" class="mb-open-popup btn btn-sm btn-default" data-src="img/fcs2016-panel.jpg" data-title="Enim ad minim">
                                    <span class="fa fa-search"></span>&nbsp; View Larger
                                </a>
                            </div>
                        </div>

                        <div class="media-box-content">
                            <div class="media-box-title text-center">Panel Session 2016</div>
                        </div>
                    </div>

                    <!-- -------------------------- BOX MARKUP 6 -------------------------- -->
                    <div class="media-box panel">
                        <div class="media-box-image">
                            <div data-width="320" data-height="214" data-thumbnail="img/fcs2017-delegate.jpg"></div>

                            <div class="thumbnail-overlay">
                                <a href="#" class="mb-open-popup btn btn-sm btn-default" data-src="img/fcs2017-delegate.jpg" data-title="Nostrud exercitation">
                                    <span class="fa fa-search"></span>&nbsp; View Larger
                                </a>
                            </div>
                        </div>

                        <div class="media-box-content">
                            <div class="media-box-title text-center">Panel Session 2017</div>
                        </div>
                    </div>

                    <!-- -------------------------- BOX MARKUP 7 -------------------------- -->
                    <div class="media-box htd">
                        <div class="media-box-image">
                            <div data-width="320" data-height="214" data-thumbnail="img/fcs2017-htd.jpg"></div>

                            <div class="thumbnail-overlay">
                                <a href="#" class="mb-open-popup btn btn-sm btn-default" data-src="img/fcs2017-htd.jpg" data-title="Ullamco laboris">
                                    <span class="fa fa-search"></span>&nbsp; View Larger
                                </a>
                            </div>
                        </div>

                        <div class="media-box-content">
                            <div class="media-box-title text-center">High Table Dinner 2017</div>
                        </div>
                    </div>

                    <!-- -------------------------- BOX MARKUP 8 -------------------------- -->
                    <div class="media-box panel">
                        <div class="media-box-image">
                            <div data-width="320" data-height="214" data-thumbnail="img/fcs2017-panel.jpg"></div>

                            <div class="thumbnail-overlay">
                                <a href="#" class="mb-open-popup btn btn-sm btn-default" data-src="img/fcs2017-panel.jpg" data-title="Nisi ut aliquip">
                                    <span class="fa fa-search"></span>&nbsp; View Larger
                                </a>
                            </div>
                        </div>

                        <div class="media-box-content">
                            <div class="media-box-title text-center">Panel Session 2017</div>
                        </div>
                    </div>

                    <!-- -------------------------- BOX MARKUP 9 -------------------------- -->
                    <div class="media-box hackathon conference-2017">
                        <div class="media-box-image">
                            <div data-width="320" data-height="214" data-thumbnail="img/metrohackathon-5.jpg"></div>

                            <div class="thumbnail-overlay">
                                <a href="#" class="mb-open-popup btn btn-sm btn-default" data-src="img/metrohackathon-5.jpg" data-title="Dell consecteture">
                                    <span class="fa fa-search"></span>&nbsp; View Larger
                                </a>
                            </div>
                        </div>

                        <div class="media-box-content">
                            <div class="media-box-title text-center">Metro-Hackathon</div>
                        </div>
                    </div>

                    <!-- -------------------------- BOX MARKUP 10 -------------------------- -->
                    <div class="media-box hackathon conference-2017">
                        <div class="media-box-image">
                            <div data-width="320" data-height="214" data-thumbnail="img/metrohackathon-6.jpg"></div>

                            <div class="thumbnail-overlay">
                                <a href="#" class="mb-open-popup btn btn-sm btn-default" data-src="img/metrohackathon-6.jpg" data-title="Sed do eiusmod">
                                    <span class="fa fa-search"></span>&nbsp; View Larger
                                </a>
                            </div>
                        </div>

                        <div class="media-box-content">
                            <div class="media-box-title text-center">Metro-Hackathon</div>
                        </div>
                    </div>

                    <!-- -------------------------- BOX MARKUP 11 -------------------------- -->
                    <div class="media-box hackathon conference-2017">
                        <div class="media-box-image">
                            <div data-width="320" data-height="214" data-thumbnail="img/metrohackathon-8.jpg"></div>

                            <div class="thumbnail-overlay">
                                <a href="#" class="mb-open-popup btn btn-sm btn-default" data-src="img/metrohackathon-8.jpg" data-title="Et dolore magna">
                                    <span class="fa fa-search"></span>&nbsp; View Larger
                                </a>
                            </div>
                        </div>

                        <div class="media-box-content">
                            <div class="media-box-title text-center">Metro-Hackathon</div>
                        </div>
                    </div>


                    <!-- -------------------------- BOX MARKUP 12 -------------------------- -->
                    <div class="media-box conference-2016">
                        <div class="media-box-image">
                            <div data-width="320" data-height="214" data-thumbnail="img/sharing1-conference-2016.jpeg"></div>

                            <div class="thumbnail-overlay">
                                <a href="#" class="mb-open-popup btn btn-sm btn-default" data-src="img/sharing1-conference-2016.jpeg" data-title="Nisi ut aliquip">
                                    <span class="fa fa-search"></span>&nbsp; View Larger
                                </a>
                            </div>
                        </div>

                        <div class="media-box-content">
                            <div class="media-box-title text-center">Conference 2016</div>
                        </div>
                    </div>

                    <!-- ------------------------- End of BOX MARKUP -------------------- -->

                </div> <!-- #grid -->
            </div>
        </div>
    </div>
    <!--  ================== END MEDIA BOXES ================== -->


    <!-- End of Hackathon Gallery -->

    <!-- TESTIMONIAL -->
    <section id="testimonial">
        <div class="container-fluid">
            <div class="row">

                <div class="col-lg-6 col-lg-offset-6 col-md-6 col-md-offset-6 no-padding">
                    <div class="testimonial-inner">
                        <div id="testimonial-carousel">
                            <div class="item">
                                <img class="img-circle img-testimonial" src="img/testimonial-jennifer.jpg" alt="">
                                <p class="lead">I am inspired to join hands with FCS to develop stronger commitment with network in Philippines. FCS has been an empowering one for my career and my impact in education in Philippines and even ASEAN. </p>
                                <p class="name">Jennifer Montero, International Relations Office, University of St. La Salle</p>
                            </div>

                            <div class="item">
                                <img class="img-circle img-testimonial" src="img/oc2018-russ.jpg" alt="">
                                <p class="lead">Innovation has never been such important until starting from here after FCS. City innovation and all matters with entrepreneurship happen in the summit and this gains me useful network and important deals with government in Philippines. </p>
                                <p class="name">Russ Earl Malagen, Founder, LX Innovative Solutions</p>
                            </div>

                            <div class="item">
                                <img class="img-circle img-testimonial" src="img/zaki.jpeg" alt="">
                                <p class="lead">Future City Summit has been a growth enabler of mine since 2016. With the participation in Metro-hackathon in FCS, I am inspired to leverage my expertise in property development in Indonesia to social entrepreneurship as Teras 1001 in affordable housing projects in Jakarta.</p>
                                <p class="name">Zaki Yamani, Founder, Teras 1001 </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Conference Partners -->
    <section id="sponsors">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="uppercase text-center">partners</h2>

                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 partner-row">
                                <div class="col-lg-3 col-md-3 col-sm-4 sponsor-partner">
                                    <a href="#"><img src="{{asset('img/geb-logo.png')}}" alt="" /></a>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-4 sponsor-partner">
                                    <a href="#"><img src="{{asset('img/gsc-logo.png')}}" alt="" /></a>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-4 sponsor-partner">
                                    <a href="#"><img src="{{asset('img/gsd-logo-black.png')}}" alt="" /></a>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-4 sponsor-partner">
                                    <a href="#"><img src="{{asset('img/choson-exchange-logo.png')}}" alt="" /></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- End of Conference Partner-->
    <!-- Energy Drinks Sponsors -->
    <section id="sponsors">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="uppercase text-center">Energy Drinks Sponsors</h2>

                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 partner-row">
                                <div class="col-lg-3 col-lg-offset-5 col-md-3 col-md-offset-5 col-sm-4 col-sm-offset-5 col-xs-offset-4 sponsor-partner">
                                    <a href="#"><img class="home-partner-logo" src="img/blue-horse.png" alt="" /></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- End of Energy Drinks Sponsors -->
    <!-- Hackathon Partner-->
    <section id="sponsors">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="uppercase text-center">Hackathon Partner</h2>

                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 partner-row">
                                <div class="col-lg-3 col-lg-offset-5 col-md-3 col-md-offset-5 col-sm-4 col-sm-offset-5 col-xs-offset-4 sponsor-partner">
                                    <a href="#"><img src="img/launchgarage-logo.PNG" alt="" /></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- End of Hackathon Partner -->
    <!-- High Table Dinner Host -->
    <section id="sponsors">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="uppercase text-center">High Table Dinner Host</h2>

                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 partner-row">
                                <div class="col-lg-3 col-lg-offset-4 col-md-3 col-md-offset-4 col-sm-4 col-sm-offset-4 sponsor-partner">
                                    <a href="#"><img class="home-partner-logo" src="img/sjc-logo.png" alt="" /></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- End of High Table Dinner Host -->
    <!-- Supporting Organization -->
    <section id="sponsors">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="uppercase text-center">Supporting Organizations</h2>

                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 partner-row">
                                <div class="col-lg-3 col-lg-offset-3 col-md-3 col-md-offset-3 col-sm-4 col-sm-offset-2 sponsor-partner">
                                    <a href="#"><img src="img/brandhk-logo.png" alt="" /></a>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-4 sponsor-partner">
                                    <a href="#"><img src="img/cyberport-logo.png" alt="" /></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Supporting Organization -->
    <!-- University Host -->


    <section id="sponsors">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="uppercase text-center">University Host</h2>

                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 partner-row">
                                <div class="col-lg-6 col-lg-offset-2 col-md-6 col-md-2 col-sm-6 col-sm-offset-1 sponsor-partner">
                                    <a href="#"><img class="img-responsive" src="{{asset('img/hku-archi-logo.png')}}" alt="" /></a>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-4 sponsor-partner">
                                    <a href="#"><img class="home-university-logo" src="{{asset('img/sysu-logo.png')}}" alt="" /></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of University Host -->
@endsection

@section('scripts')
    <script type="text/javascript" src="{{asset('js/jquery.accordionSlider.min.js')}}"></script>
    <script src="{{asset('js/jquery.isotope.min.js')}}"></script>
    <script src="{{asset('js/jquery.imagesLoaded.min.js')}}"></script>
    <script src="{{asset('js/jquery.transit.min.js')}}"></script>
    <script src="{{asset('js/jquery.easing.js')}}"></script>
    <script src="{{asset('js/modernizr.custom.min.js')}}"></script>
    <script src="{{asset('js/jquery.fancybox.min.js')}}"></script>
    <script src="{{asset('js/jquery.mediaBoxes.dropdown.js')}}"></script>
    <script src="{{asset('js/jquery.mediaBoxes.js')}}"></script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-117105068-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-117105068-1');
    </script>


    <!-- Facebook Pixel Code -->
    <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
            n.callMethod.apply(n,arguments):n.queue.push(arguments)};
            if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
            n.queue=[];t=b.createElement(e);t.async=!0;
            t.src=v;s=b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t,s)}(window,document,'script',
            'https://connect.facebook.net/en_US/fbevents.js');

        fbq('init', '1738317552847133');
        fbq('track', 'PageView');

    </script>

    <noscript>
        <img height="1" width="1"
             src="https://www.facebook.com/tr?id=1738317552847133&ev=PageView&noscript=1"/>
    </noscript>
    <!-- End Facebook Pixel Code -->


    <script type="text/javascript">
        jQuery(document).ready(function($) {
            // instantiate the accordion
            $('#fcs-theme-panel').accordionSlider({
                width: $('#fcs-theme-panel').parent().width(),
                height: 600,
                responsiveMode: 'auto',
                visiblePanels: 6,
                closePanelsOnMouseOut: false,
                mouseWheel:false,
                autoplay: true
            });

            // change the responsive mode
            $('.controls a').click(function(event) {
                event.preventDefault();

                if ($(this).hasClass('auto')) {
                    // change the responsive mode to 'auto' and remove the 'custom-responsive' class
                    $('#fcs-theme-panel').removeClass('custom-responsive');
                    $('#fcs-theme-panel').accordionSlider('responsiveMode', 'auto');

                    // change the arrows' visibility
                    $('.auto-arrow').show();
                    $('.custom-arrow').hide();
                } else if ($(this).hasClass('custom')) {
                    // change the responsive mode to 'custom' and add the 'custom-responsive'
                    // class in order to use it as a reference in the CSS code
                    $('#fcs-theme-panel').addClass('custom-responsive');
                    $('#fcs-theme-panel').accordionSlider('responsiveMode', 'custom');

                    // change the arrows' visibility
                    $('.custom-arrow').show();
                    $('.auto-arrow').hide();
                }
            });
        });
    </script>
    @endsection