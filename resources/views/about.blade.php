@extends('layouts.main')

@section('title')
    About us
    @endsection
@section('header-extra')
    <link rel="stylesheet" href="{{asset('css/zoomtimeline.css')}}">
    <link rel="stylesheet" href="{{asset('css/history-style.css')}}">
    @endsection
@section('page-content')

    <!-- PAGE HEADER SECTION-->
    <section class="bg-image-about vision-content special-content">
        <div class="container-fluid">
            <h1 class="about-header-style">About Future City Summit</h1>
            <p class="lead text-center">Right place | Right time | Right resources</p>
            <p class="lead text-center">“where imagination thrives for city”</p>
            <p class="text-center ">Future City Summit is an regional convention which rises for a mission to develop connectivity among young talents of all walks for better city development. Every year, future enthusiasts gather in a place to connect, make synergy and take actions. Until now, more than 200 delegates have been joining our work and over 50 speakers are engaged. <br><br> In 2018 annual conference, we would like to present something more seriously with action plans and implementation. <br><br>Also, our innovation does not stop at just convention. <br><br> With the 2 years of convention and relations building, Future City Summit tries to take a step forward to envision itself a multilateral development agency for public private partnership projects in emerging market for future city advocacy. </p>
        </div>
    </section>

    <!-- Timeline-->
    <!--<div class="mwrap-wrapper">-->
    <section class="mcon-otherdemos pat-school" style="padding-bottom: 0; color: #33404c;">
        <div class="container">
            <div class="row " style="margin-bottom: 15px;">
                <div class="col-md-12">
                    <h2 class="uppercase fcs-journey-title">Future City Summit's journey</h2>
                    <p class="lead fcs-journey-timeline">Learn more about how Future City Summit has grown, year upon year, to reach it's third edition.</p>
                </div>
                <div class="" style="text-align: left">
                    <div class="zoomtimeline mode-3dslider auto-init zoomtimeline0 skin-light circuit-the-timeline-on inited ztm-ready" data-options="{startItem: 2}" id="zoomtimeline5">
                        <div class="items">
                        </div>


                        <!-- the preloader START -->
                        <!--       <div class="preloader-wave">
                                   <span></span>
                                   <span></span>
                                   <span></span>
                                   <span></span>
                                   <span></span>
                               </div> -->
                        <!-- the preloader END -->

                        <div class="yearlist-con">
                            <div class="yearlist-container">
                                <div class="yearlist-container-inner">
                                    <div class="yearlist-line"></div>
                                </div>
                            </div>
                        </div>
                        <div class="details-container" style="height: 651px;"><div class="clear"></div>
                            <input type="radio" name="radio_btn" id="it1"/>
                            <label for="it1" class="detail ">
                                <div class="the-year">14th Feb 2016<figure></figure></div>
                                <h3 class="the-heading">Founding </h3><div class="detail-image-con" style=""><div class="detail-image--border"></div><div class="detail-image" style="background-image:url(img/feb-2016.jpg);"></div><div class="detail-image-shadow-con"><div class="detail-image-shadow-left"></div><div class="detail-image-shadow-right"></div></div></div><div class=" detail-excerpt">
                                    <p>
                                        Founding of Future City Summit with a group of 6 final year students of HKU
                                    </p>
                                </div><div class="clear"></div>
                            </label>
                            <input type="radio" name="radio_btn" id="it2"/>
                            <label for="it2" class="detail ">
                                <div class="the-year">Aug 2016<figure></figure></div>
                                <h3 class="the-heading">First Summit</h3><div class="detail-image-con" style=""><div class="detail-image--border"></div><div class="detail-image" style="background-image:url(img/aug-2016.jpg);"></div><div class="detail-image-shadow-con"><div class="detail-image-shadow-left"></div><div class="detail-image-shadow-right"></div></div></div><div class=" detail-excerpt">
                                    <p>
                                        The first Future City Summit
                                    </p>
                                </div><div class="clear"></div>
                            </label>
                            <input type="radio" name="radio_btn" id="it3" checked/>
                            <label for="it3" class="detail ">
                                <a href="http://google.com">
                                </a>
                                <div class="the-year">Sep 2016<figure></figure></div>
                                <h3 class="the-heading">Granted Seed Fund</h3><div class="detail-image-con" style=""><div class="detail-image--border"></div><div class="detail-image" style="background-image:url(img/sept-2016.png);"></div><div class="detail-image-shadow-con"><div class="detail-image-shadow-left"></div><div class="detail-image-shadow-right"></div></div></div>
                                <div class=" detail-excerpt">
                                    <p>
                                        Granted Global Partnership Seed Fund by Vice President Office (Global) of HKU
                                    </p>
                                </div>
                                <div class="clear"></div>
                            </label>
                            <input type="radio" name="radio_btn" id="it4"/>
                            <label for="it4" class="detail ">
                                <div class="the-year">Aug 2017<figure></figure></div>
                                <h3 class="the-heading">Second Summit</h3><div class="detail-image-con" style=""><div class="detail-image--border"></div><div class="detail-image" style="background-image:url(img/aug-2017.jpg);"></div><div class="detail-image-shadow-con"><div class="detail-image-shadow-left"></div><div class="detail-image-shadow-right"></div></div></div><div class=" detail-excerpt">
                                    <p>
                                        The second Future City Summit
                                    </p>
                                </div><div class="clear"></div>
                            </label>
                            <input type="radio" name="radio_btn" id="it5"/>
                            <label for="it5" class="detail">
                                <div class="the-year">Oct 2017<figure></figure></div>
                                <h3 class="the-heading">Chapter Establishment</h3><div class="detail-image-con" style=""><div class="detail-image--border"></div><div class="detail-image" style="background-image:url(img/oct-2017.jpg);"></div><div class="detail-image-shadow-con"><div class="detail-image-shadow-left"></div><div class="detail-image-shadow-right"></div></div></div><div class=" detail-excerpt">
                                    <p>
                                        Establishment of Chapters of Future City Summit in Bangladesh, Vietnam, Cambodia, Indonesia and Russia
                                    </p>
                                </div><div class="clear"></div>
                            </label>
                        </div></div>
                </div>
            </div>
        </div>
    </section>
    <!--</div>-->

    <!-- HISTORy SECTION-->

    <!-- INFO -->
    <section class="global-agenda">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="uppercase ga-row">global agenda</h2>
                </div>
                <div class="container-fluid">
                    <div class="row">
                        <ul class="global-agenda-grid">
                            <li>
                                <img class="img-responsive img-global-agenda" src="img/african-union.png" alt="" />
                                <span class="agenda-more-details"><a href="#">More Details</a></span>
                            </li>
                            <li>
                                <img class="img-responsive img-global-agenda" src="img/ASEAN.png" alt="" />
                                <span class="agenda-more-details"><a href="#">More Details</a></span>
                            </li>
                            <li>
                                <img class="img-responsive img-global-agenda" src="img/Bangladesh-vision-2021.gif" alt="" />
                                <span class="agenda-more-details"><a href="#">More Details</a></span>
                            </li>
                            <li>
                                <img class="img-responsive img-global-agenda" src="img/beltnroad.png" alt="" />
                                <span class="agenda-more-details"><a href="#">More Details</a></span>
                                </a>
                            </li>
                            <li>
                                <img class="img-responsive img-global-agenda" src="img/caricom.png" alt="" />
                                <span class="agenda-more-details"><a href="#">More Details</a></span>
                            </li>
                            <li>
                                <img class="img-responsive img-global-agenda" src="img/makeinindia.png" alt="" />
                                <span class="agenda-more-details"><a href="#">More Details</a></span>
                                </a>
                            </li>
                            <li>
                                <img class="img-responsive img-global-agenda" src="img/unsdgs.png" alt="" />
                                <span class="agenda-more-details"><a href="#">More Details</a></span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Founding Team -->
    <section class="founding-panel">
        <div class="container">
            <div class="row">

                <div class="col-lg-12 panel-section">
                    <h2 class="uppercase">Founding Team</h2>
                </div>

                <div class="container">
                    <div class="row">

                        <!--Speaker 1-->
                        <div class="col-lg-3 col-md-3 col-sm-4">
                            <div class="team-sin text-center">
                                <div class="speaker-img">
                                    <img src="img/founder1-andrekwok.jpg" alt="" />
                                </div>
                                <div class="speaker-content">
                                    <h4>Andre Kwok</h4>
                                    <p>Executive Director</p>
                                </div>
                            </div>
                        </div>

                        <!--Speaker 2-->
                        <div class="col-lg-3 col-md-3 col-sm-4">
                            <div class="team-sin text-center">
                                <div class="speaker-img">
                                    <img src="img/founder2-vincichan.jpg" alt="" />
                                </div>
                                <div class="speaker-content">
                                    <h4>Vinci Chan</h4>
                                    <p>External Relations</p>
                                </div>
                            </div>
                        </div>

                        <!--Speaker 3-->
                        <div class="col-lg-3 col-md-3 col-sm-4">
                            <div class="team-sin text-center">
                                <div class="speaker-img">
                                    <img src="img/founder3-lawrenceyu.jpg" alt="" />
                                </div>
                                <div class="speaker-content">
                                    <h4>Lawrence Yu</h4>
                                    <p>External Relations</p>
                                </div>
                            </div>
                        </div>

                        <!--Speaker 4-->
                        <div class="col-lg-3 col-md-3 col-sm-4">
                            <div class="team-sin text-center">
                                <div class="speaker-img">
                                    <img src="img/founder4-jaylee.jpg" alt="" />
                                </div>
                                <div class="speaker-content">
                                    <h4>Jay Lee</h4>
                                    <p>Finance and Operation</p>
                                </div>
                            </div>
                        </div>
                    </div> <!-- Row End Here-->
                </div> <!-- Container End Here-->

                <!-- Speaker List End Here-->
            </div>
        </div>
        <!-- Speaker Section End Here-->
    </section>
    <!-- HONORARY ADVISORS-->
    <section class="honorary-panel">
        <div class="container">
            <div class="row">

                <div class="col-lg-12 panel-section">
                    <h2 class="uppercase">Honorary Advisors</h2>
                </div>

                <div class="container">
                    <div class="row">

                        <!--Speaker 1-->
                        <div class="col-lg-3 col-md-3 col-sm-4">
                            <div class="team-sin text-center">
                                <div class="speaker-img">
                                    <img src="img/advisor1-srinivas-kollipara.jpg" alt="" />
                                </div>
                                <div class="speaker-content">
                                    <h4>Srinivas Kallipara</h4>
                                    <p>Chief Operation Officer, T-Hub India</p>
                                </div>
                            </div>
                        </div>

                        <!--Speaker 2-->
                        <div class="col-lg-3 col-md-3 col-sm-4">
                            <div class="team-sin text-center">
                                <div class="speaker-img">
                                    <img src="img/advisor2-ada-wong.jpg" alt="" />
                                </div>
                                <div class="speaker-content">
                                    <h4>Ada Ying Kay Wong, JP</h4>
                                    <p>Convenor, Make A Difference</p>
                                </div>
                            </div>
                        </div>

                        <!--Speaker 3-->
                        <div class="col-lg-3 col-md-3 col-sm-4">
                            <div class="team-sin text-center">
                                <div class="speaker-img">
                                    <img src="img/advisor3-lee-george-lam.jpg" alt="" />
                                </div>
                                <div class="speaker-content">
                                    <h4>Dr. Lee George Lam</h4>
                                    <p>Chairman, Cyberport Hong Kong</p>
                                </div>
                            </div>
                        </div>

                        <!--Speaker 4-->
                        <div class="col-lg-3 col-md-3 col-sm-4">
                            <div class="team-sin text-center">
                                <div class="speaker-img">
                                    <img src="img/advisor4-regina-ip.jpg" alt="" />
                                </div>
                                <div class="speaker-content">
                                    <h4>Regina Ip Lau Suk-Yee, GBS, JP</h4>
                                    <p>Co-chair, Executive Committee, Maritime Silk Road Society</p>
                                </div>
                            </div>
                        </div>
                    </div> <!-- Row End Here-->
                </div> <!-- Container End Here-->

                <!-- Speaker List End Here-->
            </div>
        </div>
        <!-- Speaker Section End Here-->
    </section>

    <!-- YOUNG ADVISORS -->
    <section class="young-panel">
        <div class="container">
            <div class="row">

                <div class="col-lg-12 panel-section">
                    <h2 class="uppercase">Young Advisors</h2>
                </div>

                <div class="container">
                    <div class="row">

                        <!--Speaker 1-->
                        <div class="col-lg-3 col-md-3 col-sm-4">
                            <div class="team-sin text-center">
                                <div class="speaker-img">
                                    <img src="img/aaron-frio.jpg" alt="" />
                                </div>
                                <div class="speaker-content">
                                    <h4>Aaron Frio</h4>
                                    <p>Vice President for Operations, Frioland Realty and Development Corporation</p>
                                </div>
                            </div>
                        </div>

                        <!--Speaker 2-->
                        <div class="col-lg-3 col-md-3 col-sm-4">
                            <div class="team-sin text-center">
                                <div class="speaker-img">
                                    <img src="img/christopher-david.jpg" alt="" />
                                </div>
                                <div class="speaker-content">
                                    <h4>Christopher David</h4>
                                    <p>Co-Founder, Veer Immersive Technologies</p>
                                </div>
                            </div>
                        </div>

                        <!--Speaker 3-->
                        <div class="col-lg-3 col-md-3 col-sm-4">
                            <div class="team-sin text-center">
                                <div class="speaker-img">
                                    <img src="img/durrie-hassan.jpg" alt="" />
                                </div>
                                <div class="speaker-content">
                                    <h4>Durrie Hassan</h4>
                                    <p>Executive Director, Carlton Mansfield Capital</p>
                                </div>
                            </div>
                        </div>

                        <!--Speaker 4-->
                        <div class="col-lg-3 col-md-3 col-sm-4">
                            <div class="team-sin text-center">
                                <div class="speaker-img">
                                    <img src="img/jason-lin.jpg" alt="" />
                                </div>
                                <div class="speaker-content">
                                    <h4>Lin JJ Jason</h4>
                                    <p>Team Lead - Startup Ecosystem and Partnership, Deloitte Touche Tohmatsu</p>
                                </div>
                            </div>
                        </div>

                        <!-- Young Advisors 5-->
                        <div class="col-lg-3 col-md-3 col-sm-4">
                            <div class="team-sin text-center">
                                <div class="speaker-img">
                                    <img src="img/john-mak.jpg" alt="" />
                                </div>
                                <div class="speaker-content">
                                    <h4>John Mak</h4>
                                    <p>Co-Founder, Governance Partners Yangon</p>
                                </div>
                            </div>
                        </div>
                        <!-- Young Advisors 6-->
                        <div class="col-lg-3 col-md-3 col-sm-4">
                            <div class="team-sin text-center">
                                <div class="speaker-img">
                                    <img src="img/khagendra.jpg" alt="" />
                                </div>
                                <div class="speaker-content">
                                    <h4>Khagendra Acharya</h4>
                                    <p>Founder, Global Entrepreneurship Bootcamp</p>
                                </div>
                            </div>
                        </div>
                        <!-- Young Advisors 7-->
                        <div class="col-lg-3 col-md-3 col-sm-4">
                            <div class="team-sin text-center">
                                <div class="speaker-img">
                                    <img src="img/koh-onozawa.jpg" alt="" />
                                </div>
                                <div class="speaker-content">
                                    <h4>Koh Onozawa</h4>
                                    <p>Account Director(UK &amp; Spain), Localistico</p>
                                </div>
                            </div>
                        </div>
                        <!-- Young Advisors 8-->
                        <div class="col-lg-3 col-md-3 col-sm-4">
                            <div class="team-sin text-center">
                                <div class="speaker-img">
                                    <img src="img/peggy-tse.jpg" alt="" />
                                </div>
                                <div class="speaker-content">
                                    <h4>Peggy Tse</h4>
                                    <p>Investment Specialist, World Bank IFC</p>
                                </div>
                            </div>
                        </div>
                        <!-- Young Advisors 9-->
                        <div class="col-lg-3 col-lg-offset-3 col-md-3 col-md-offset-3 col-sm-4">
                            <div class="team-sin text-center">
                                <div class="speaker-img">
                                    <img src="img/seb-ko.jpg" alt="" />
                                </div>
                                <div class="speaker-content">
                                    <h4>Sebastian Ko</h4>
                                    <p>Regional Director of Review Services and Senior Legal Counsel, Epiq</p>
                                </div>
                            </div>
                        </div>
                        <!-- Young Advisors 10-->
                        <div class="col-lg-3 col-md-3 col-sm-4">
                            <div class="team-sin text-center">
                                <div class="speaker-img">
                                    <img src="img/william-du.jpg" alt="" />
                                </div>
                                <div class="speaker-content">
                                    <h4>William Du</h4>
                                    <p>Partnership Director, Time Auction </p>
                                </div>
                            </div>
                        </div>
                        <!-- End of Young Advisors-->

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ORGANIZING TEAM -->
    <section class="organizing-panel" id="speakers">
        <div class="container">
            <div class="row">

                <div class="col-lg-12 panel-section">
                    <h2 class="uppercase">Organizing Team</h2>
                </div>

                <div class="container">
                    <div class="row">

                        <!--Speaker 1-->
                        <div class="col-lg-3 col-md-3 col-sm-4">
                            <div class="team-sin text-center">
                                <div class="speaker-img">
                                    <img src="img/oc2018-nazmul.jpg" alt="" />
                                </div>
                                <div class="speaker-content">
                                    <h4>Nazmul Islam</h4>
                                    <p>Technology &amp; Design</p>
                                </div>
                            </div>
                        </div>

                        <!--Speaker 2-->
                        <div class="col-lg-3 col-md-3 col-sm-4">
                            <div class="team-sin text-center">
                                <div class="speaker-img">
                                    <img src="img/oc2018-priya(left).jpg" alt="" />
                                </div>
                                <div class="speaker-content">
                                    <h4>Priya Gandhi</h4>
                                    <p>International Relations</p>
                                </div>
                            </div>
                        </div>

                        <!--Speaker 3-->
                        <div class="col-lg-3 col-md-3 col-sm-4">
                            <div class="team-sin text-center">
                                <div class="speaker-img">
                                    <img src="img/oc2018-russ.jpg" alt="" />
                                </div>
                                <div class="speaker-content">
                                    <h4>Russ Earl Malagen</h4>
                                    <p>Hackathon Design</p>
                                </div>
                            </div>
                        </div>

                        <!--Speaker 4-->
                        <div class="col-lg-3 col-md-3 col-sm-4">
                            <div class="team-sin text-center">
                                <div class="speaker-img">
                                    <img src="img/oc2018-shadman.jpg" alt="" />
                                </div>
                                <div class="speaker-content">
                                    <h4>Shadman Sadab</h4>
                                    <p>International Relations</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

