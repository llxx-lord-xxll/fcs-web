@extends('layouts.main')

@section('title')
    Overview of FCS 2018
    @endsection
@section('header-extra')

    @endsection


@section('page-content')

    <!-- PAGE HEADER SECTION-->
    <section class="bg-img-landing-page">
        <div class="container">
            <div class="row">
                <div>
                    <h1 class="landing-header-style">Future City Summit 2018<br>Cities Beyond Imagination</h1>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <h2 class="landing-header text-center">"Rise Again Little Dragon"</h2>
                    <p class="landing-p text-center">Hong Kong</p>
                    <p class="landing-p text-center">3rd - 4th August</p>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <h2 class="landing-header text-center">"Once Upon A Time in China"</h2>
                    <p class="landing-p text-center">Guangzhou and Foshan</p>
                    <p class="landing-p text-center">5th - 8th August</p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="fcs-newsletter-box">
                    <div id="fcs-newsletter">
                        <h2 class="landing-header text-center">Verify Your Email</h2>
                        <p class="text-center">Get the latest trends and news from us!</p>
                        <form action="" method="post" class="fcs-inline-form">
                            {{csrf_field()}}
                            <input type="text" name="myname" id="myname" placeholder="Your Full Name" value="{{old('myname')}}" required />
                            <input type="email" name="email" id="email" placeholder="Your Email Address" value="{{old('email')}}" required />
                            <input type="submit" value="Submit" />
                        </form>
                        @if($errors->any())
                            @foreach ($errors->all() as $error)
                                <p class="text-center text-danger">{{ $error }}</p>
                            @endforeach
                        @endif
                        @if(isset($success))
                            <p class="text-center text-success">{{ $success }}</p>
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- INFO -->
    <section id="info">
        <div class="container">
            <div class="row">

                <div class="col-lg-12 text-center">
                    <h1 class="uppercase">About Future City Summit and FCS2018</h1>
                    <p class="lead text-center">Future City Summit is an avenue to gather young government leaders, entrepreneurs, investors and scholar, over deep conversations of future cities and collaboration.</p>
                    <p class="lead text-center">A great journey of future cities begins with an idea of gathering bright minds. When we look back, dots are connected. This is the footprint left by every doer together that makes a step of civilisation.</p>
                </div>

                <div class="col-lg-10 col-lg-offset-1 col-md-12 text-center">
                    <div class="row">

                        <div class="feature col-lg-4 col-md-4 col-sm-4">
                            <i class="pe-4x pe-7s-add-user"></i>
                            <h4>Networking of All Stakeholders</h4>
                            <p>It gathers a spectrum of stakeholders from government, corporate, startups, NGO and university to meet and collaborate.</p>
                        </div>

                        <div class="feature col-lg-4 col-md-4 col-sm-4">
                            <i class="pe-4x pe-7s-repeat"></i>
                            <h4>Deal-Flow of Project and Funds</h4>
                            <p>FCS2018 is a mechanism that project owners and funds can meet and be matched accurately to initiate partnership. We make it happen.</p>
                        </div>

                        <div class="feature col-lg-4 col-md-4 col-sm-4">
                            <i class="pe-4x pe-7s-science"></i>
                            <h4>Topics That Matter</h4>
                            <p>We are curious of future, from global policy, A.I., electronic sports, urban planning to social engineering. We are what we talk about.</p>
                        </div>

                    </div>
                </div>

                <!-- Second Section-->
                <div class="col-lg-12 col-md-12 text-center">
                    <div class="row">

                        <div class="feature col-md-15 col-sm-4">
                            <i class="pe-4x pe-7s-user-female"></i>
                            <h4>Fireside Chat</h4>
                            <p>Fireside Chat is a keynote with globally reputable figures, moderated by experienced expert that guides us where we are heading to in the next 5-10 years. What are we imagining for future?</p>
                        </div>

                        <div class="feature col-md-15 col-sm-4">
                            <i class="pe-4x pe-7s-helm"></i>
                            <h4>6 Panels</h4>
                            <p>6-Panels is a compact learning path for insights. Delegates may design their own learning path to absorb the information they need and network with the right people.</p>
                        </div>

                        <div class="feature col-md-15 col-sm-4">
                            <i class="pe-4x pe-7s-settings"></i>
                            <h4>Workshop</h4>
                            <p>It is a 4-sessions of “Asia’s Best Lessons”, provided by international agencies, corporates and top-notch institutes. It is about how we do it, from project structuring to source of financing.</p>
                        </div>
                        <div class="feature col-md-15 col-sm-4">
                            <i class="pe-4x pe-7s-plugin"></i>
                            <h4>Metro-Hackathon</h4>
                            <p>Metro-Hackathon is an intensive design thinking process where all stakeholders come together to address the issues they concern based on UN Sustainable Development Goals.</p>
                        </div>

                        <div class="feature col-md-15 col-sm-4">
                            <i class="pe-4x pe-7s-rocket"></i>
                            <h4>Imagination Expo</h4>
                            <p>Imagination Expo is a marketplace where project owners meet the right funders and partners. Enjoy a time of displaying all efforts you have been putting and the ideas which you would like to showcase. </p>
                        </div>


                    </div>
                </div>
                <!-- End of Second Section-->
            </div>
        </div>
    </section>
    <!-- Landing Gallery-->
    <section class="landing-gallery-section">
        <div class="landing-gallery-grid-section">

            <div class="headline text-center">
                <h2 class="uppercase ">Previous Year Highlights</h2>
            </div>

            <div class="content grid-container">

                <!--  ================== MEDIA BOXES ================== -->

                <div class="filters-container">

                    <ul class="custom-filter" id="filter2">
                        <li><a class="selected" href="#" data-filter="*">All</a></li>
                        <li><a href="#" data-filter=".city-tour">City Tour</a></li>
                        <li><a href="#" data-filter=".hackathon">Hackathon</a></li>
                        <li><a href="#" data-filter=".panel-session">Panel Session</a></li>
                        <li><a href="#" data-filter=".fcs-2016">FCS 2016</a></li>
                        <li><a href="#" data-filter=".fcs-2017">FCS 2017</a></li>
                    </ul>
                </div>

                <div id="landing-gallery-grid">

                    <!-- -------------------------- BOX MARKUP -------------------------- -->
                    <div class="media-box city-tour" data-columns="2">
                        <div class="media-box-image mb-open-popup" data-src="{{asset('img/sharing2-cover-zaki.jpeg')}}">
                            <div data-width="240" data-height="151" data-thumbnail="{{asset('img/sharing2-cover-zaki.jpeg')}}"></div>

                            <div class="thumbnail-overlay">
                            </div>
                        </div>
                    </div>

                    <!-- -------------------------- BOX MARKUP -------------------------- -->
                    <div class="media-box city-tour">
                        <div class="media-box-image mb-open-popup" data-src="{{asset('img/fcs2016-citytour.jpg')}}">
                            <div data-width="240" data-height="151" data-thumbnail="{{asset('img/fcs2016-citytour.jpg')}}"></div>

                            <div class="thumbnail-overlay">
                            </div>
                        </div>
                    </div>

                    <!-- -------------------------- BOX MARKUP -------------------------- -->
                    <div class="media-box hackathon fcs-2016">
                        <div class="media-box-image mb-open-popup" data-src="{{asset('img/fcs2016-hackathon.jpg')}}">
                            <div data-width="240" data-height="151" data-thumbnail="{{asset('img/fcs2016-hackathon.jpg')}}"></div>

                            <div class="thumbnail-overlay ">
                            </div>
                        </div>
                    </div>

                    <!-- -------------------------- BOX MARKUP -------------------------- -->
                    <div class="media-box hackathon fcs-2016">
                        <div class="media-box-image mb-open-popup" data-src="{{asset('img/sharing2-conference-2016-a.jpeg')}}">
                            <div data-width="240" data-height="151" data-thumbnail="{{asset('img/sharing2-conference-2016-a.jpeg')}}"></div>

                            <div class="thumbnail-overlay ">
                            </div>
                        </div>
                    </div>


                    <!-- -------------------------- BOX MARKUP -------------------------- -->
                    <div class="media-box hackathon" data-columns="2">
                        <div class="media-box-image mb-open-popup" data-src="{{asset('img/metrohackaton-1.jpg')}}">
                            <div data-width="240" data-height="151" data-thumbnail="{{asset('img/metrohackaton-1.jpg')}}"></div>

                            <div class="thumbnail-overlay ">
                            </div>
                        </div>
                    </div>

                    <!-- -------------------------- BOX MARKUP -------------------------- -->
                    <div class="media-box panel-session fcs-2016">
                        <div class="media-box-image mb-open-popup" data-src="{{asset('img/fcs2016-panel.jpg')}}">
                            <div data-width="240" data-height="151" data-thumbnail="{{asset('img/fcs2016-panel.jpg')}}"></div>

                            <div class="thumbnail-overlay ">
                            </div>
                        </div>
                    </div>

                    <!-- -------------------------- BOX MARKUP -------------------------- -->
                    <div class="media-box fcs-2017">
                        <div class="media-box-image mb-open-popup" data-src="{{asset('img/sharing3-conference-2017-c.jpeg')}}">
                            <div data-width="240" data-height="151" data-thumbnail="{{asset('img/sharing3-conference-2017-c.jpeg')}}"></div>

                            <div class="thumbnail-overlay ">
                            </div>
                        </div>
                    </div>

                    <!-- -------------------------- BOX MARKUP -------------------------- -->
                    <div class="media-box panel-session fcs-2017">
                        <div class="media-box-image mb-open-popup" data-src="{{asset('img/fcs2017-panel.jpg')}}">
                                <div data-width="240" data-height="151" data-thumbnail="{{asset('img/fcs2017-panel.jpg')}}" ></div>

                            <div class="thumbnail-overlay ">
                            </div>
                        </div>
                    </div>

                    <!-- -------------------------- BOX MARKUP -------------------------- -->
                    <div class="media-box fcs-2017">
                        <div class="media-box-image mb-open-popup" data-src="{{asset('img/metrohackathon-9.jpg')}}">
                                    <div data-width="240" data-height="151" data-thumbnail="{{asset('img/metrohackathon-9.jpg')}}"></div>

                                    <div class="thumbnail-overlay ">
                                    </div>
                                </div>
                            </div>

                            <!-- End of Gallery Image --->

                        </div> <!-- #grid -->

                <!--  ================== END MEDIA BOXES ================== -->

            </div> <!-- grid-container -->

        </div>

    </section>

    <!-- End of Landing Gallery-->
    <!-- Testimonials-->
    <section class="landing-testimonials">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div id="heading-teaser">
                        <div class="heading-teaser teaser-open">&quot;</div>
                        <div class="heading-teaser-content">
                            <p>Hong Kong’s smart city vision must be backed by support for start-ups and imported talents.</p>
                            <div class="sponsor-partner">
                                <a href="#"><img src="{{asset('img/testimonial-scmp.png')}}" alt="" /></a>
                            </div>
                        </div>
                        <div class="heading-teaser teaser-close">&quot;</div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div id="heading-teaser">
                        <div class="heading-teaser teaser-open">&quot;</div>
                        <div class="heading-teaser-content">
                            <p>Definitely a movement for future city development from emerging markets!</p>
                            <div class="sponsor-partner">
                                <a href="#"><img src="{{asset('img/testimonial-dhak-times.png')}}" alt="" /></a>
                            </div>
                        </div>
                        <div class="heading-teaser teaser-close">&quot;</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- End of Testimonials-->
    <!-- PREVIOUS SPEAKERS -->
    <section class="young-panel">
        <div class="container">
            <div class="row">

                <div class="col-lg-12 panel-section text-center">
                    <h2 class="uppercase">Previous Speakers</h2>
                </div>

                <div class="container">
                    <div class="row">

                        <!--Speaker 1-->
                        <div class="col-md-15 col-sm-4">
                            <div class="fcs-team text-center">
                                <div class="speaker-img">
                                    <img src="{{asset('img/speaker-regina-ip.jpg')}}" alt="" />
                                </div>
                                <div class="speaker-content">
                                    <h4>Regina Ip Lau Suk-yee GBS, JP</h4>
                                    <p>Executive Council of Hong Kong</p>
                                </div>
                            </div>
                        </div>

                        <!--Speaker 2-->
                        <div class="col-md-15 col-sm-4">
                            <div class="fcs-team text-center">
                                <div class="speaker-img">
                                    <img src="{{asset('img/speaker-ada-wong.jpg')}}" alt="" />
                                </div>
                                <div class="speaker-content">
                                    <h4>Ada Wong JP</h4>
                                    <p>Chairperson, Make A Difference Institute</p>
                                </div>
                            </div>
                        </div>
                        <!--Speaker 3-->
                        <div class="col-md-15 col-sm-4">
                            <div class="fcs-team text-center">
                                <div class="speaker-img">
                                    <img src="{{asset('img/speaker-winnie-tang.jpg')}}" alt="" />
                                </div>
                                <div class="speaker-content">
                                    <h4>Dr. Winnie Tang JP</h4>
                                    <p>Founder and Honorary President, Smart City Consortium</p>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix visible-sm"></div>
                        <!--Speaker 4-->
                        <div class="col-md-15 col-sm-4">
                            <div class="fcs-team text-center">
                                <div class="speaker-img">
                                    <img src="{{asset('img/speaker-jasper-tsang.jpg')}}" alt="" />
                                </div>
                                <div class="speaker-content">
                                    <h4>Jasper Tsang Yok-sing GBM, JP</h4>
                                    <p>2nd President of the Legislative Council, HK SAR</p>
                                </div>
                            </div>
                        </div>
                        <!--  Speaker 5-->
                        <div class="col-md-15 col-sm-4">
                            <div class="fcs-team text-center">
                                <div class="speaker-img">
                                    <img src="{{asset('img/speaker-Chris-Webster.jpg')}}" alt="" />
                                </div>
                                <div class="speaker-content">
                                    <h4>Prof. Chris Webster</h4>
                                    <p>Dean of Faculty of Architecture, The University of Hong Kong</p>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix visible-lg visible-md"></div>
                        <!--  Speaker 6-->
                        <div class="col-md-15 col-sm-4">
                            <div class="fcs-team text-center">
                                <div class="speaker-img">
                                    <img src="{{asset('img/speaker-daniel-chun.jpg')}}" alt="" />
                                </div>
                                <div class="speaker-content">
                                    <h4>Daniel Chun</h4>
                                    <p>General Manager and EVP of Market Innovations, Remotec Technology</p>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix visible-sm"></div>
                        <!--  Speaker 7-->
                        <div class="col-md-15 col-sm-4">
                            <div class="fcs-team text-center">
                                <div class="speaker-img">
                                    <img src="{{asset('img/speaker-deborah-kuh.jpg')}}" alt="" />
                                </div>
                                <div class="speaker-content">
                                    <h4>Deborah Kuh</h4>
                                    <p>Head of Greening Landscape &amp; Tree Management Section, Development Bureau</p>
                                </div>
                            </div>
                        </div>
                        <!--  Speaker 8-->
                        <div class="col-md-15 col-sm-4">
                            <div class="fcs-team text-center">
                                <div class="speaker-img">
                                    <img src="{{asset('img/speaker-ian-holliday.JPG')}}" alt="" />
                                </div>
                                <div class="speaker-content">
                                    <h4>Prof. Ian Holliday</h4>
                                    <p>Vice President(Teaching and Learning), The University of Hong Kong </p>
                                </div>
                            </div>
                        </div>
                        <!--  Speaker 9-->
                        <div class="col-md-15 col-sm-4">
                            <div class="fcs-team text-center">
                                <div class="speaker-img">
                                    <img src="{{asset('img/speaker-Janos-Barberis.jpeg')}}" alt="" />
                                </div>
                                <div class="speaker-content">
                                    <h4>Mr. Janos Barberis</h4>
                                    <p>Founder, Fintech Hong Kong</p>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix visible-sm"></div>
                        <!-- Speaker 10-->
                        <div class="col-md-15 col-sm-4">
                            <div class="fcs-team text-center">
                                <div class="speaker-img">
                                    <img src="{{asset('img/speaker-chris-sykes.jpg')}}" alt="" />
                                </div>
                                <div class="speaker-content">
                                    <h4>Chris Sykes</h4>
                                    <p>Co-Founder, Dragon Law</p>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix visible-lg visible-md"></div>
                        <!-- Ten Speakers-->
                        <!--Speaker 11-->
                        <div class="col-md-15 col-sm-4">
                            <div class="fcs-team text-center">
                                <div class="speaker-img">
                                    <img src="{{asset('img/speaker-Jonathan-Beard.png')}}" alt="" />
                                </div>
                                <div class="speaker-content">
                                    <h4>Dr. Jonathan Beard</h4>
                                    <p>Head of Transportation and Logistics, Arcadis</p>
                                </div>
                            </div>
                        </div>

                        <!--Speaker 12-->
                        <div class="col-md-15 col-sm-4">
                            <div class="fcs-team text-center">
                                <div class="speaker-img">
                                    <img src="{{asset('img/speaker-Julian-Vella.jpg')}}" alt="" />
                                </div>
                                <div class="speaker-content">
                                    <h4>Julian Vella</h4>
                                    <p>Asia Pacific Regional Leader, KPMG Partner and Asia Pacific Head of Global Infrastructure</p>
                                </div>
                            </div>
                        </div>
                        <!--Speaker 13-->
                        <div class="col-md-15 col-sm-4">
                            <div class="fcs-team text-center">
                                <div class="speaker-img">
                                    <img src="{{asset('img/speaker-Mara-Chiorean.jpg')}}" alt="" />
                                </div>
                                <div class="speaker-content">
                                    <h4>Mara Chiorean</h4>
                                    <p>Executive Director, CSR Asia </p>
                                </div>
                            </div>
                        </div>
                        <!--Speaker 14-->
                        <div class="col-md-15 col-sm-4">
                            <div class="fcs-team text-center">
                                <div class="speaker-img">
                                    <img src="{{asset('img/speaker-reeve-kwan.jpg')}}" alt="" />
                                </div>
                                <div class="speaker-content">
                                    <h4>Reeve Kwan</h4>
                                    <p>Co-Founder, GoGoVan</p>
                                </div>
                            </div>
                        </div>
                        <!-- Speaker 15-->
                        <div class="col-md-15 col-sm-4">
                            <div class="fcs-team text-center">
                                <div class="speaker-img">
                                    <img src="{{asset('img/speaker-Alvin-Yip.jpg')}}" alt="" />
                                </div>
                                <div class="speaker-content">
                                    <h4>Alvin Yip</h4>
                                    <p>Vice Dean of Institute of City Design and Innovation, Central Academy of Fine Arts</p>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix visible-lg visible-md visible-sm"></div>
                        <!-- Speaker 16-->
                        <div class="col-md-15 col-sm-4">
                            <div class="fcs-team text-center">
                                <div class="speaker-img">
                                    <img src="{{asset('img/speaker-Ricky-Kwok(left).jpg')}}" alt="" />
                                </div>
                                <div class="speaker-content">
                                    <h4>Prof. Ricky Kwok</h4>
                                    <p>Associate Vice President(Teaching &amp; Learning), The University of Hong Kong</p>
                                </div>
                            </div>
                        </div>
                        <!-- Speaker 17-->
                        <div class="col-md-15 col-sm-4">
                            <div class="fcs-team text-center">
                                <div class="speaker-img">
                                    <img src="{{asset('img/speaker-sabine-reppert.jpg')}}" alt="" />
                                </div>
                                <div class="speaker-content">
                                    <h4>Sabine Reppert</h4>
                                    <p>Founder and Director, Intent-X </p>
                                </div>
                            </div>
                        </div>
                        <!-- Speaker 18-->
                        <div class="col-md-15 col-sm-4">
                            <div class="fcs-team text-center">
                                <div class="speaker-img">
                                    <img src="{{asset('img/speaker-Waltraut-Ritter.jpg')}}" alt="" />
                                </div>
                                <div class="speaker-content">
                                    <h4>Waltraut Ritter</h4>
                                    <p>Founder &amp; Principal, Knowledge Dialogues</p>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix visible-sm"></div>
                        <!-- Speaker 19-->
                        <div class="col-md-15 col-sm-4">
                            <div class="fcs-team text-center">
                                <div class="speaker-img">
                                    <img src="{{asset('img/speaker-andrew-work.jpg')}}" alt="" />
                                </div>
                                <div class="speaker-content">
                                    <h4>Andrew Work</h4>
                                    <p>Head Content Strategist for Asia Pacific, NexChange</p>
                                </div>
                            </div>
                        </div>
                        <!-- Speaker 20-->
                        <div class="col-md-15 col-sm-4">
                            <div class="fcs-team text-center">
                                <div class="speaker-img">
                                    <img src="{{asset('img/speaker-zhu-baoquan.jpg')}}" alt="" />
                                </div>
                                <div class="speaker-content">
                                    <h4>Zhu Baoquan</h4>
                                    <p>Senior Vice President, CEO of the Property Service Business Headquarters, China Vanke</p>
                                </div>
                            </div>
                        </div>
                        <!-- End of Young Advisors-->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Media Section -->
    <section class="landing-media-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <h2 class="text-center landing-media-header">We are exposed to the Media</h2>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-8">
                    <div class="col-lg-4 col-md-4 col-sm-4 sponsor-partner media-partner">
                        <a href="#"><img src="{{asset('img/media-tobago-5.png')}}" alt="" /></a>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 sponsor-partner media-partner">
                        <a href="#"><img src="{{asset('img/testimonial-dhak-times.png')}}" alt="" /></a>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 sponsor-partner media-partner">
                        <a href="#"><img src="{{asset('img/testimonial-scmp.png')}}" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- End of Media Section-->
    <!-- Conference Partners -->
    <section id="sponsors">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="uppercase text-center">Corporate Supportings</h2>

                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 partner-row">
                                <div class="col-lg-3 col-lg-offset-4 col-md-3 col-md-offset-4 col-sm-4 col-sm-offset-4 sponsor-partner">
                                    <a href="#"><img class="home-partner-logo" src="{{asset('img/logo-nifc.png')}}" alt="" /></a>
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
                                    <a href="#"><img class="home-partner-logo" src="{{asset('img/blue-horse.png')}}" alt="" /></a>
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
                                <div class="col-lg-2 col-lg-offset-2 col-md-2 col-md-offset-2 col-sm-4 col-xs-offset-3 sponsor-partner">
                                    <a href="#"><img src="{{asset('img/launchgarage-logo.PNG')}}" alt="" /></a>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3 sponsor-partner">
                                    <a href="#"><img src="{{asset('img/logo-yitopia.png')}}" alt="" /></a>
                                </div>
                                <div class="col-lg-5 col-md-5 col-sm-5 sponsor-partner">
                                    <a href="#"><img src="{{asset('img/logo-phandeeyar.png')}}" alt="" /></a>
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
                                    <a href="#"><img class="home-partner-logo" src="{{asset('img/sjc-logo.png')}}" alt="" /></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- End of High Table Dinner Host -->
    <!-- Strategic Partners -->
    <section id="sponsors">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="uppercase text-center">Strategic Partners</h2>

                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 partner-row">
                                <div class="col-lg-3 col-lg-offset-1 col-md-3 col-md-offset-1 col-sm-4 sponsor-partner">
                                    <a href="#"><img src="{{asset('img/logo-shaperhk.png')}}" alt="" /></a>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 sponsor-partner">
                                    <a href="#"><img src="{{asset('img/logo-gsd.png')}}" alt="" /></a>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 sponsor-partner">
                                    <a href="#"><img src="{{asset('img/logo-choson-exchange.png')}}" alt="" /></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Strategic Partners-->
    <!-- Supporting Organization -->
    <section id="sponsors">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="uppercase text-center">Supporting Organization</h2>

                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 partner-row">
                                <div class="col-lg-3 col-md-3 col-sm-4 sponsor-partner">
                                    <a href="#"><img src="{{asset('img/logo-aen.png')}}" alt="" /></a>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-4 sponsor-partner">
                                    <a href="#"><img src="{{asset('img/brandhk-logo.png')}}" alt="" /></a>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-4 sponsor-partner">
                                    <a href="#"><img src="{{asset('img/cyberport-logo.png')}}" alt="" /></a>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-4 sponsor-partner">
                                    <a href="#"><img src="{{asset('img/logo-emerald-education .png')}}" alt="" /></a>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-4 sponsor-partner">
                                    <a href="#"><img src="{{asset('img/logo-youthink-center.png')}}" alt="" /></a>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-4 sponsor-partner">
                                    <a href="#"><img src="{{asset('img/logo-oyes.png')}}" alt="" /></a>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-4 sponsor-partner">
                                    <a href="#"><img src="{{asset('img/logo-geb.png')}}" alt="" /></a>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-4 sponsor-partner">
                                    <a href="#"><img src="{{asset('img/YSIs.jpg')}}" alt="" /></a>
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
    <!-- End of Conference Partners -->
    <!-- Venue Section -->
    <section class="landing-venues">
        <div class="container">
            <div class="row">
                <h2 class="uppercase text-center landing-venue-heading">About Venue</h2>
            </div>
        </div>


        <div id="landing-venue">
            <div class="content active" data-slide="1" data-bg="{{asset('img/venue-hku.jpg')}}">
                <div class="info-wrapper">
                    <h3 class="slidetitle">The University of Hong Kong</h3>
                    <p> Alma matar of knowledge, insights and visions of Hong Kong. The University of Hong Kong is the university in Hong Kong with longest history(over 100 years) and impact to society, ranked 2nd in Asia in teaching and learnig quality, with global network of research institutes, corporates and thought leaders.</p>
                </div>
            </div>
            <div class="content" data-slide="2" data-bg="{{asset('img/venue-sysu.jpg')}}">
                <div class="info-wrapper">
                    <h3 class="slidetitle">Sun Yat Sen University</h3>
                    <p>A major Chinese public research university located in Guangdong, People's Republic of China, topping in the Southern China region. It was founded in 1924 by Dr. Sun Yat-sen, a revolutionary and the founding father of the Republic of China. Consistently ranked among the top 10 universities in mainland China, Sun Yat-sen University provides undergraduate and graduate instruction in the humanities, social sciences, natural sciences, technology, medical science, pharmacology and managerial science.</p>
                </div>
            </div>
            <div class="slide-left"><i class="material-icons">chevron_left</i></div>
            <div class="slide-right"><i class="material-icons">chevron_right</i></div>
        </div>
    </section>
    <!-- End of Venue -->
    <!-- DOWNLOAD -->
    <section id="landing-download">
        <div class="container">
            <div class="row">
                <h2 class="uppercase text-center">Materials to Download</h2>
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="row">


                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <div>
                                <img class="img-media-kit" src="{{asset('img/Conference-Booklet-FCS-2017.png')}}" alt="" />
                                <h3 class="text-center">Conference Booklet FCS2017</h3>
                                <a class="button button-small button-line-dark fcs-btn" href="https://drive.google.com/file/d/1nQgBJpwkwH4XA0bOEgq1_wpU6knU3CQk/view">download pdf</a>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <div>
                                <img class="img-media-kit" src="{{asset('img/Marketing-Proposal-FCS2018.png')}}" alt="" />
                                <h3 class="text-center">Marketing Proposal FCS2018</h3>
                                <a class="button button-small button-line-dark fcs-btn" href="https://drive.google.com/file/d/1MuSQCa95J1P7puAF5ClrS4yl_GzLDofE/view?usp=sharing">download pdf</a>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <div>
                                <img class="img-media-kit" src="{{asset('img/Organization-Document-FCS2018.png')}}" alt="" />
                                <h3 class="text-center">Organization Document FCS2018</h3>
                                <a class="button button-small button-line-dark fcs-btn" href="https://drive.google.com/open?id=1JGOlPEPsjUN91LDYszBS92qOgH7e7DRM">download pdf</a>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section id="fcs-call-to-action">
        <div class="container">
            <div class="row">
                <h2 class="fcs-cta-header">Year's mega event coming soon. Take the challenge.</h2>

                <div class="fcs-cta-button">
                    <div class="fcs-cta-title">
                        Be
                    </div>
                    <div class="fcs-cta-content">
                        <a href="{{route('app_delegate')}}">A PROUD DELEGATE!</a>
                    </div>
                </div>
            </div>
        </div>

    </section>


@endsection

@section('scripts')
    <script type="text/javascript" src="{{asset('js/jquery.accordionSlider.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/jquery.isotope.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/jquery.imagesLoaded.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/jquery.transit.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/jquery.easing.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/modernizr.custom.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/jquery.fancybox.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/jquery.mediaBoxes.dropdown.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/jquery.mediaBoxes.js')}}"></script>

    <script type="text/javascript" src='{{asset('js/seedrandom.min.js')}}'></script>
    <!-- GOOGLE ANALYTICS -->
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','http://www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-XXXXXXX-XX', 'yourdomain.com');
        ga('send', 'pageview');

    </script>

    <script>


        $('#landing-gallery-grid').mediaBoxes({
            filterContainer: '#filter2',
            search: '#search',
            columns: 3,
            boxesToLoadStart: 10,
            boxesToLoad: 9,
            horizontalSpaceBetweenBoxes: 20,
            verticalSpaceBetweenBoxes: 20,
            minBoxesPerFilter: 20,
            deepLinkingOnFilter: false,
        });

    </script>

    <script >
        // I'm kinda tempted to turn this into a jquery/css plugin
        $(document).ready(function() {
            Math.seedrandom('pr'); // Make Math.random seed based

            // Set timers and intervals
            var slideInterval = 5000,
                transTimer = 2500;

            // Init vars
            var compact = $("#landing-venue").hasClass("compact");
            var contentAmt = $("#landing-venue .content").length;  // Number of slides
            var loop = true;

            // HEX TO RGB FUNCTION
            function hexToRgb(hex) {
                var result = /^#?([a-f\d]{2})([a-f\d]{2})([a-f\d]{2})$/i.exec(hex);
                return result ? {
                    r: parseInt(result[1], 16),
                    g: parseInt(result[2], 16),
                    b: parseInt(result[3], 16)
                } : null;
            }

            // Styling
            var dullcolors = ["#f44336", "#ec407a", "#ab47bc", "#7e57c2",
                    "#3f51b5", "#2196f3", "#4fc3f7", "#00bcd4",
                    "#66bb6a", "#aed581", "#e6ee9c", "#fff176",
                    "#ffca28", "#ffa726", "#ff5722"],
                fullcolors = ["#8d6e63", "#f50057", "#d500f9", "#651fff",
                    "#3d5afe", "#2979ff", "#00b0ff", "#00e5ff",
                    "#1de9b6", "#00e676", "#76ff03", "#c6ff00",
                    "#ffea00", "#ffc400", "#ff9100", "#ff3d00"];

            // Color each slide
            $(".content").each(function() {
                var bg_img = $(this).attr("data-bg");


                $(this).css({
                    "background" : " url("+bg_img+")",
                    "background-repeat" : "no-repeat",
                    "background-position" : "center",
                    "background-size" : "cover",
                    "-webkit-background-size" : "cover",
                    "-moz-background-size" : "cover"
                })
            });

            // Functionality
            if (loop) { var repeat = setInterval(changeSlide, slideInterval); }

            // Hide or show left right controls | only compact supports those
            if (compact == true) {
                $(".slide-left, .slide-right").show();
            } else {
                $(".slide-left, .slide-right").hide();
            }


            // Physical clicking | Content panels
            $(".content").on("click", function() {
                clearInterval(repeat); // Clear the interval | pause, basically
                $(".playbutton").addClass("paused"); // add the paused class | visual shit
                changeSlide($(this).attr("data-slide"), "clicked"); // changeSlide
            }); // END onClick

            $(".slide-left, .slide-right").on("click", function() {
                var slide = parseInt($("#landing-venue .content.active").attr("data-slide"));
                if ($(this).hasClass("slide-left")) {
                    slide--
                    console.log(slide);
                    if (slide == 0) {
                        slide = contentAmt;
                    }
                } else {
                    slide++
                    if (slide > contentAmt) {
                        slide = 1;
                    }
                }
                $(".playbutton").addClass("paused");
                clearInterval(repeat);
                changeSlide(slide, "clicked");
            });


            // FUNCTIONS -------

            // changeSlide() function
            function changeSlide(clicked, method) {
                var compact = $("#landing-venue").hasClass("compact"); // If compact is added
                // If natural, and not clicked called
                if (method != "clicked") {
                    // Figure slides
                    var currentSlide = $("#landing-venue .content.active").attr("data-slide");
                    var nextSlide = parseInt(currentSlide) + 1;

                    // Check if last slide
                    if (nextSlide > contentAmt) {
                        nextSlide = 1; // Set next slide to be the first slide

                        // Mobile/Fullscreen end slide transition | show all for a time
                        if (compact == true) {
                            // Transitioney stuff
                            $("#landing-venue .content:not(.active)").addClass("transition");
                            setTimeout(function() {
                                $("#landing-venue .content").removeClass("transition");
                            }, transTimer);
                        }
                    }
                } else { // If clicked, not natural
                    nextSlide = clicked;
                } // END if/else

                //Remove and add the active class | Make the slides slide
                $("#landing-venue .content").removeClass("active");
                $("#landing-venue .content[data-slide='"+nextSlide+"']").addClass("active");
            } // END function
        }); // END .ready
        //# sourceURL=pen.js
    </script>

    @endsection
