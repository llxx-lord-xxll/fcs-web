@extends('layouts.main')

@section('header-extra')
    <link rel="stylesheet" href="{{asset('css/accordion-slider.css')}}">
    <link rel="stylesheet" href="{{asset('css/mediaBoxes.css')}}">
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
                    <img src="img/slide_thumb_1.jpg"  alt="fullslide1"  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
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
                         style="z-index: 2; max-width: auto; max-height: auto; white-space: nowrap;">Future City Summit 2018<br>"Cities Beyond Imagination - Rise Again Little Dragon"
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
                         style="z-index: 3; max-width: auto; max-height: auto; white-space: nowrap;">Guangzhou | Hong Kong | 3rd - 7th August 2018
                    </div>


                </li>

                <!-- SLIDE 2 -->
                <li data-transition="slidevertical" data-slotamount="1" data-masterspeed="1000" data-thumb="img/slide_thumb_2.jpg"  data-saveperformance="off"  data-title="Slide">
                    <!-- MAIN IMAGE -->
                    <img src="img/slide_thumb_2.jpg"  alt="fullslide2"  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
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
                         style="z-index: 2; max-width: auto; max-height: auto; white-space: nowrap;">Future City Summit 2018 <br>"Cities Beyond Imagination - Once Upon A Time in China"
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
                         style="z-index: 3; max-width: auto; max-height: auto; white-space: nowrap;">Guangzhou | Hong Kong | 3rd - 7th August 2018
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
                         style="z-index: 2; max-width: auto; max-height: auto; white-space: nowrap;">Future City Summit 2018 <br>- Oriental Express of venture builder and avenue of PPP
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
                         style="z-index: 3; max-width: auto; max-height: auto; white-space: nowrap;">Guangzhou | Hong Kong | 3rd - 7th August 2018
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
                    <p>An Avenue For Young Entrepreneur | Young Government Leader | Young Scholar
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
                <img class="as-background" src="css/images/blank.gif" data-src="img/panel-tech-for-future.jpg" data-retina="img/panel-tech-for-future.jpg"/>


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
                    <a href="ct-technology-future.html"> Join This Session </a>
                </p>
            </div>

            <!-- Panel 2 -->
            <div class="as-panel">
                <img class="as-background" src="css/images/blank.gif" data-src="img/panel-entrepreneurship-for-all.jpg" data-retina="img/panel-entrepreneurship-for-all.jpg"/>

                <div class="as-layer as-closed as-white panel-counter"
                     data-position="bottomLeft" data-horizontal="8" data-vertical="8">
                    Entrepreneurship of All
                </div>

                <h3 class="as-layer as-opened as-black as-padding"
                    data-horizontal="40" data-vertical="10%"
                    data-show-transition="left" data-hide-transition="left">
                    Entrepreneurship of All
                </h3>

                <p class="as-layer as-opened as-black as-padding hide-small-screen"
                   data-horizontal="40" data-vertical="34%" data-width="300"
                   data-show-transition="left" data-show-delay="400" data-hide-transition="left" data-hide-delay="500">
                    How are we nurturing generation X with entrepreneurship for emerging countries in future?
                </p>
                <p class="as-layer as-opened as-black as-padding hide-small-screen"
                   data-horizontal="center" data-vertical="75%"
                   data-show-transition="left" data-show-delay="700" data-hide-transition="right" data-hide-delay="200">
                    <a href="ct-entrepreneurship.html"> Join This Session </a>
                </p>
            </div>

            <!-- Panel 3 -->
            <div class="as-panel">

                <img class="as-background" src="css/images/blank.gif" data-src="img/panel-art-entertainment.jpg" data-retina="img/panel-art-entertainment.jpg"/>

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
                    <a href="ct-entertainment-living.html"> Join This Session </a>
                </p>
            </div>

            <!-- Panel 4 -->
            <div class="as-panel">

                <img class="as-background" src="css/images/blank.gif" data-src="img/panel-global-development.jpg" data-retina="img/panel-global-development.jpg"/>


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
                    <a href="ct-global -development-resilience.html"> Join This Session </a>
                </p>
            </div>

            <!-- Panel 5 -->
            <div class="as-panel">

                <img class="as-background" src="css/images/blank.gif" data-src="img/panel-urban-energy.jpg" data-retina="img/panel-urban-energy.jpg"/>

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
                    <a href="ct-earth-urban-energy.html"> Join This Session </a>
                </p>
            </div>

            <!-- Panel 6 -->
            <div class="as-panel">

                <img class="as-background" src="css/images/blank.gif" data-src="img/panel-space.jpg" data-retina="img/panel-space.jpg"/>


                <div class="as-layer as-closed as-white panel-counter"
                     data-position="bottomLeft" data-horizontal="8" data-vertical="8">
                    Space and Extra-terrestrial
                </div>

                <h3 class="as-layer as-opened as-black as-padding"
                    data-horizontal="40" data-vertical="10%"
                    data-show-transition="left" data-hide-transition="left">
                    Space and Extra-terrestrial
                </h3>

                <p class="as-layer as-opened as-black as-padding hide-small-screen"
                   data-horizontal="40" data-vertical="34%" data-width="300"
                   data-show-transition="left" data-show-delay="400" data-hide-transition="left" data-hide-delay="500">
                    How can we prepare our space innovation thinking in Asia?
                </p>
                <p class="as-layer as-opened as-black as-padding hide-small-screen"
                   data-horizontal="center" data-vertical="75%"
                   data-show-transition="left" data-show-delay="700" data-hide-transition="right" data-hide-delay="200">
                    <a href="ct-space-extraterrestrial.html"> Join This Session </a>
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

                    <h2 class="hidden">funfacts</h2>

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
                    <h2 class="uppercase text-center">register</h2>
                </div>

                <div class="col-lg-12">
                    <!-- PRICE TABLES -->
                    <div id="price-carousel">

                        <div class="price-table early-bird">
                            <div class="icon">
                                <i class="pe-5x pe-7s-wristwatch"></i>
                            </div>

                            <div class="table-header">
                                <h3>Early Bird</h3>
                                <p class="price">$330</p>
                                <p class="early-date center-right">Deadline:15th April, 2018</p>
                            </div>

                            <ul class="desc list-unstyled">
                                <li>5 Nights Accommodation (HK and GZ)</li>
                                <li>Transportation (Transfer to GZ Included)</li>
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
                                <p class="price">$350</p>
                                <p class="early-date">Deadline: 27th May, 2018</p>
                            </div>

                            <ul class="desc list-unstyled">
                                <li>5 Nights Accommodation (HK and GZ)</li>
                                <li>Transportation (Transfer to GZ Included)</li>
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
                                <p class="price">$370</p>
                                <p class="early-date">Deadline:1st July, 2018</p>
                            </div>

                            <ul class="desc list-unstyled">
                                <li>5 Nights Accommodation (HK and GZ)</li>
                                <li>Transportation (Transfer to GZ Included)</li>
                                <li>Conference Kit, Industry Visits &amp; Workshops</li>
                                <li>Refreshment &amp; Meals</li>
                            </ul>
                        </div>

                    </div>
                </div>

                <div class="col-lg-12 text-center">
                    <a class="button button-small button-line-dark html-popup" href="register.html">register now</a>
                </div>

            </div>
        </div>
    </section>


    <!-- GALLERY -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 fcs-section-grid">
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
                    <li><a href="#" data-filter=".keynote">Keynote </a></li>
                    <li><a href="#" data-filter=".panel">Panel Session</a></li>
                    <li><a href="#" data-filter=".htd">High Table Dinner</a></li>
                    <li><a href="#" data-filter=".conference-2016">Conference 2016</a></li>
                    <li><a href="#" data-filter=".conference-2017">Conference 2017</a></li>
                </ul>

            </div>

            <div class="container-fluid partner-row">
                <div id="fcs-gallery">

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
                    <div class="media-box hackathon">
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
                    <div class="media-box hackathon">
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
                    <div class="media-box hackathon">
                        <div class="media-box-image">
                            <div data-width="320" data-height="214" data-thumbnail="img/fcs2016-hackathon2.jpg"></div>

                            <div class="thumbnail-overlay">
                                <a href="#" class="mb-open-popup btn btn-sm btn-default" data-src="img/fcs2016-hackathon2.jpg" data-title="Incididunt ut labore">
                                    <span class="fa fa-search"></span>&nbsp; View Larger
                                </a>
                            </div>
                        </div>

                        <div class="media-box-content">
                            <div class="media-box-title text-center">Hackathon 2016</div>
                        </div>
                    </div>

                    <!-- -------------------------- BOX MARKUP 5 -------------------------- -->
                    <div class="media-box keynote">
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

                    <!-- -------------------------- BOX MARKUP 6 -------------------------- -->
                    <div class="media-box panel">
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

                    <!-- -------------------------- BOX MARKUP 7 -------------------------- -->
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

                    <!-- -------------------------- BOX MARKUP 8 -------------------------- -->
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

                    <!-- -------------------------- BOX MARKUP 9 -------------------------- -->
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

                    <!-- -------------------------- BOX MARKUP 10 -------------------------- -->
                    <div class="media-box hackathon">
                        <div class="media-box-image">
                            <div data-width="320" data-height="214" data-thumbnail="img/metrohackathon-2.jpg"></div>

                            <div class="thumbnail-overlay">
                                <a href="#" class="mb-open-popup btn btn-sm btn-default" data-src="img/metrohackathon-2.jpg" data-title="Ex ea commodo">
                                    <span class="fa fa-search"></span>&nbsp; View Larger
                                </a>
                            </div>
                        </div>

                        <div class="media-box-content">
                            <div class="media-box-title text-center">Metro-Hackathon</div>
                        </div>
                    </div>

                    <!-- -------------------------- BOX MARKUP 11 -------------------------- -->
                    <div class="media-box hackathon">
                        <div class="media-box-image">
                            <div data-width="320" data-height="214" data-thumbnail="img/metrohackathon-3.jpg"></div>

                            <div class="thumbnail-overlay">
                                <a href="#" class="mb-open-popup btn btn-sm btn-default" data-src="img/metrohackathon-3.jpg" data-title="Duis aute irure">
                                    <span class="fa fa-search"></span>&nbsp; View Larger
                                </a>
                            </div>
                        </div>

                        <div class="media-box-content">
                            <div class="media-box-title text-center">Metro-Hackathon</div>
                        </div>
                    </div>

                    <!-- -------------------------- BOX MARKUP 12 -------------------------- -->
                    <div class="media-box hackathon">
                        <div class="media-box-image">
                            <div data-width="320" data-height="214" data-thumbnail="img/metrohackathon-4.jpg"></div>

                            <div class="thumbnail-overlay">
                                <a href="#" class="mb-open-popup btn btn-sm btn-default" data-src="img/metrohackathon-4.jpg" data-title="Dolor sit amet">
                                    <span class="fa fa-search"></span>&nbsp; View Larger
                                </a>
                            </div>
                        </div>

                        <div class="media-box-content">
                            <div class="media-box-title text-center">Metro-Hackathon</div>
                        </div>
                    </div>

                    <!-- -------------------------- BOX MARKUP 13 -------------------------- -->
                    <div class="media-box hackathon">
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

                    <!-- -------------------------- BOX MARKUP 14 -------------------------- -->
                    <div class="media-box hackathon">
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

                    <!-- -------------------------- BOX MARKUP 15 -------------------------- -->
                    <div class="media-box hackathon">
                        <div class="media-box-image">
                            <div data-width="320" data-height="214" data-thumbnail="img/metrohackathon-7.jpg"></div>

                            <div class="thumbnail-overlay">
                                <a href="#" class="mb-open-popup btn btn-sm btn-default" data-src="img/metrohackathon-7.jpg" data-title="Incididunt ut labore">
                                    <span class="fa fa-search"></span>&nbsp; View Larger
                                </a>
                            </div>
                        </div>

                        <div class="media-box-content">
                            <div class="media-box-title text-center">Metro-Hackathon</div>
                        </div>
                    </div>

                    <!-- -------------------------- BOX MARKUP 16 -------------------------- -->
                    <div class="media-box hackathon">
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

                    <!-- -------------------------- BOX MARKUP 17 -------------------------- -->
                    <div class="media-box hackathon">
                        <div class="media-box-image">
                            <div data-width="320" data-height="214" data-thumbnail="img/metrohackathon-9.jpg"></div>

                            <div class="thumbnail-overlay">
                                <a href="#" class="mb-open-popup btn btn-sm btn-default" data-src="img/metrohackathon-9.jpg" data-title="Enim ad minim">
                                    <span class="fa fa-search"></span>&nbsp; View Larger
                                </a>
                            </div>
                        </div>

                        <div class="media-box-content">
                            <div class="media-box-title text-center">Metro-Hackathon</div>
                        </div>
                    </div>

                    <!-- -------------------------- BOX MARKUP 18 -------------------------- -->
                    <div class="media-box hackathon">
                        <div class="media-box-image">
                            <div data-width="320" data-height="214" data-thumbnail="img/metrohackathon-10.jpg"></div>

                            <div class="thumbnail-overlay">
                                <a href="#" class="mb-open-popup btn btn-sm btn-default" data-src="img/metrohackathon-10.jpg" data-title="Nostrud exercitation">
                                    <span class="fa fa-search"></span>&nbsp; View Larger
                                </a>
                            </div>
                        </div>

                        <div class="media-box-content">
                            <div class="media-box-title text-center">Metro-Hackathon</div>
                        </div>
                    </div>

                    <!-- -------------------------- BOX MARKUP 19 -------------------------- -->
                    <div class="media-box hackathon">
                        <div class="media-box-image">
                            <div data-width="320" data-height="214" data-thumbnail="img/metrohackaton-1.jpg"></div>

                            <div class="thumbnail-overlay">
                                <a href="#" class="mb-open-popup btn btn-sm btn-default" data-src="img/metrohackaton-1.jpg" data-title="Ullamco laboris">
                                    <span class="fa fa-search"></span>&nbsp; View Larger
                                </a>
                            </div>
                        </div>

                        <div class="media-box-content">
                            <div class="media-box-title text-center">Metro-Hackathon</div>
                        </div>
                    </div>

                    <!-- -------------------------- BOX MARKUP 20 -------------------------- -->
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

                    <!-- -------------------------- BOX MARKUP 21 -------------------------- -->
                    <div class="media-box conference-2016">
                        <div class="media-box-image">
                            <div data-width="320" data-height="214" data-thumbnail="img/sharing1-conference-2016-1.png"></div>

                            <div class="thumbnail-overlay">
                                <a href="#" class="mb-open-popup btn btn-sm btn-default" data-src="img/sharing1-conference-2016-1.png" data-title="Ex ea commodo">
                                    <span class="fa fa-search"></span>&nbsp; View Larger
                                </a>
                            </div>
                        </div>

                        <div class="media-box-content">
                            <div class="media-box-title text-center">Conference 2016</div>
                        </div>
                    </div>

                    <!-- -------------------------- BOX MARKUP 22 -------------------------- -->
                    <div class="media-box conference-2016">
                        <div class="media-box-image">
                            <div data-width="320" data-height="214" data-thumbnail="img/sharing1-conference-2016-2.png"></div>

                            <div class="thumbnail-overlay">
                                <a href="#" class="mb-open-popup btn btn-sm btn-default" data-src="img/sharing1-conference-2016-2.png" data-title="Duis aute irure">
                                    <span class="fa fa-search"></span>&nbsp; View Larger
                                </a>
                            </div>
                        </div>

                        <div class="media-box-content">
                            <div class="media-box-title text-center">Conference 2016</div>
                        </div>
                    </div>
                    <!-- -------------------------- BOX MARKUP 23 -------------------------- -->
                    <div class="media-box conference-2016">
                        <div class="media-box-image">
                            <div data-width="320" data-height="214" data-thumbnail="img/sharing2-conference-2016-a.jpeg"></div>

                            <div class="thumbnail-overlay">
                                <a href="#" class="mb-open-popup btn btn-sm btn-default" data-src="img/sharing2-conference-2016-a.jpeg" data-title="In reprehenderit">
                                    <span class="fa fa-search"></span>&nbsp; View Larger
                                </a>
                            </div>
                        </div>

                        <div class="media-box-content">
                            <div class="media-box-title text-center">Conference 2016</div>
                        </div>
                    </div>
                    <!-- -------------------------- BOX MARKUP 24  -------------------------- -->
                    <div class="media-box conference-2016">
                        <div class="media-box-image">
                            <div data-width="320" data-height="214" data-thumbnail="img/sharing2-conference-2016-b.jpeg"></div>

                            <div class="thumbnail-overlay">
                                <a href="#" class="mb-open-popup btn btn-sm btn-default" data-src="img/sharing2-conference-2016-b.jpeg" data-title="Enim ad minim">
                                    <span class="fa fa-search"></span>&nbsp; View Larger
                                </a>
                            </div>
                        </div>

                        <div class="media-box-content">
                            <div class="media-box-title text-center">Conference 2016</div>
                        </div>
                    </div>

                    <!-- -------------------------- BOX MARKUP 25 -------------------------- -->
                    <div class="media-box conference-2016">
                        <div class="media-box-image">
                            <div data-width="320" data-height="214" data-thumbnail="img/sharing2-cover-zaki.jpeg"></div>

                            <div class="thumbnail-overlay">
                                <a href="#" class="mb-open-popup btn btn-sm btn-default" data-src="img/sharing2-cover-zaki.jpeg" data-title="Nostrud exercitation">
                                    <span class="fa fa-search"></span>&nbsp; View Larger
                                </a>
                            </div>
                        </div>

                        <div class="media-box-content">
                            <div class="media-box-title text-center">Conference 2016</div>
                        </div>
                    </div>

                    <!-- -------------------------- BOX MARKUP 26 -------------------------- -->
                    <div class="media-box conference-2017">
                        <div class="media-box-image">
                            <div data-width="320" data-height="214" data-thumbnail="img/sharing3-conference-2017-a.jpeg"></div>

                            <div class="thumbnail-overlay">
                                <a href="#" class="mb-open-popup btn btn-sm btn-default" data-src="img/sharing3-conference-2017-a.jpeg" data-title="Ullamco laboris">
                                    <span class="fa fa-search"></span>&nbsp; View Larger
                                </a>
                            </div>
                        </div>

                        <div class="media-box-content">
                            <div class="media-box-title text-center">Conference 2017</div>
                        </div>
                    </div>

                    <!-- -------------------------- BOX MARKUP 27 -------------------------- -->
                    <div class="media-box conference-2017">
                        <div class="media-box-image">
                            <div data-width="320" data-height="214" data-thumbnail="img/sharing3-conference-2017-b.jpeg"></div>

                            <div class="thumbnail-overlay">
                                <a href="#" class="mb-open-popup btn btn-sm btn-default" data-src="img/sharing3-conference-2017-b.jpeg" data-title="Nisi ut aliquip">
                                    <span class="fa fa-search"></span>&nbsp; View Larger
                                </a>
                            </div>
                        </div>

                        <div class="media-box-content">
                            <div class="media-box-title text-center">Conference 2017</div>
                        </div>
                    </div>

                    <!-- -------------------------- BOX MARKUP 28 -------------------------- -->
                    <div class="media-box conference-2017">
                        <div class="media-box-image">
                            <div data-width="320" data-height="214" data-thumbnail="img/sharing3-conference-2017-c.jpeg"></div>

                            <div class="thumbnail-overlay">
                                <a href="#" class="mb-open-popup btn btn-sm btn-default" data-src="img/sharing3-conference-2017-c.jpeg" data-title="Ex ea commodo">
                                    <span class="fa fa-search"></span>&nbsp; View Larger
                                </a>
                            </div>
                        </div>

                        <div class="media-box-content">
                            <div class="media-box-title text-center">Conference 2017</div>
                        </div>
                    </div>

                    <!-- -------------------------- BOX MARKUP 29 -------------------------- -->
                    <div class="media-box conference-2017">
                        <div class="media-box-image">
                            <div data-width="320" data-height="214" data-thumbnail="img/sharing3-conference-2017-d.jpeg"></div>

                            <div class="thumbnail-overlay">
                                <a href="#" class="mb-open-popup btn btn-sm btn-default" data-src="img/sharing3-conference-2017-d.jpeg" data-title="Duis aute irure">
                                    <span class="fa fa-search"></span>&nbsp; View Larger
                                </a>
                            </div>
                        </div>

                        <div class="media-box-content">
                            <div class="media-box-title text-center">Conference 2017</div>
                        </div>
                    </div>
                    <!-- -------------------------- BOX MARKUP 30 -------------------------- -->
                    <div class="media-box conference-2017">
                        <div class="media-box-image">
                            <div data-width="320" data-height="214" data-thumbnail="img/sharing3-cover-chai.jpeg"></div>

                            <div class="thumbnail-overlay">
                                <a href="#" class="mb-open-popup btn btn-sm btn-default" data-src="img/sharing3-cover-chai.jpeg" data-title="In reprehenderit">
                                    <span class="fa fa-search"></span>&nbsp; View Larger
                                </a>
                            </div>
                        </div>

                        <div class="media-box-content">
                            <div class="media-box-title text-center">Conference 2017</div>
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
                        <h2 class="hidden">testimonial</h2>

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
                    <h2 class="uppercase">conference partner</h2>

                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 partner-row">
                                <div class="col-lg-3 col-md-3 col-sm-4 sponsor-partner">
                                    <a href="#"><img src="img/geb-logo.png" alt="" /></a>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-4 sponsor-partner">
                                    <a href="#"><img src="img/gsc-logo.png" alt="" /></a>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-4 sponsor-partner">
                                    <a href="#"><img src="img/gsd-logo-black.png" alt="" /></a>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-4 sponsor-partner">
                                    <a href="#"><img src="img/choson-exchange-logo.png" alt="" /></a>
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
                    <h2 class="uppercase">Energy Drinks Sponsors</h2>

                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 partner-row">
                                <div class="col-lg-3 col-md-3 col-sm-4 sponsor-partner">
                                    <a href="#"><img src="img/blue-horse.png" alt="" /></a>
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
                    <h2 class="uppercase">Hackathon Partner</h2>

                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 partner-row">
                                <div class="col-lg-3 col-md-3 col-sm-4 sponsor-partner">
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
                    <h2 class="uppercase">High Table Dinner Host</h2>

                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 partner-row">
                                <div class="col-lg-3 col-md-3 col-sm-4 sponsor-partner">
                                    <a href="#"><img src="img/sjc-logo.png" alt="" /></a>
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
                    <h2 class="uppercase">Supporting Organization</h2>

                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 partner-row">
                                <div class="col-lg-3 col-md-3 col-sm-4 sponsor-partner">
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
                    <h2 class="uppercase">University Host</h2>

                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 partner-row">
                                <div class="col-lg-3 col-md-3 col-sm-4 sponsor-partner">
                                    <a href="#"><img src="img/sysu-logo.png" alt="" /></a>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-4 sponsor-partner">
                                    <a href="#"><img src="img/hku-archi-logo.png" alt="" /></a>
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