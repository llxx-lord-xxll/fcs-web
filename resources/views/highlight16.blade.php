@extends('layouts.main')

@section('title')
    Hightlights 2016
    @endsection
@section('header-extra')

    @endsection
@section('page-content')


    <!-- PAGE HEADER SECTION-->
    <div class="bg-image-first">
        <div class="container-fluid">
            <h1 class="header-style">Overview of Future City Summit 2016</h1>
        </div>
    </div>

    <!-- Overview & Video Panel -->
    <section class="ga-background">
        <div class="container-fluid">
            <div class="row">
                <div class="container special-textbox col-lg-12 col-md-12 col-xs-12">
                    <p class="text-center conference-topic-content">FCS2016 is a year of origin of Future City Summit with the co-development through the support of Development &amp; Alumni Affairs Office(DAAO), Centre of Development and Resources for Students(CEDARS) and Vice President Office of The University of Hong Kong, founding date being 14th February 2016, Valentine’s Day. <br><br> Everything begins with a group of final year students from The University of Hong Kong and a common heart of entrepreneurship and vision for cities in future. </p>
                </div>
            </div>
        </div>
    </section>


    <!-- INFO -->
    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="container col-lg-6 col-md-6 col-xs-12">
                    <div class="special-textbox">
                        <p class="text-justify venue-inner-content">FCS2016 gathered 80 delegates from around 16 cities in Asia and America, mainly from China, Philippines, Bangladesh, Indonesia and Japan, with the theme of “Asia’s Best Lessons” The conference brought in over 35 speakers from architecture, politics, entrepreneurship and education, including: </p>

                        <ul class="previous-years-list">
                            <li><i class="fa fa-user" aria-hidden="true"></i>  Jasper Tsang Yok-sing, GBM, JP, the 2nd President of the Legislative Council of Hong Kong</li>
                            <li><i class="fa fa-user" aria-hidden="true"></i>  Ada Wong, JP Chairperson, Make A Difference Institute Convenor &amp; Director, Good Lab Foundation </li>
                        </ul>
                    </div>
                </div>
                <div class="container col-lg-6 col-md-6 col-xs-12">
                    <div class="row">
                        <div id="first-fcs-slider" class="fcs-img-form-slider">
                            <img class="fcs-form-slider-photo" src="{{asset('img/fcs2016-citytour.jpg')}}" alt="">
                            <img class="fcs-form-slider-photo" src="{{asset('img/fcs2016-hackathon.jpg')}}" alt="">
                            <img class="fcs-form-slider-photo" src="{{asset('img/fcs2016-hackathon1.jpg')}}" alt="">
                            <img class="fcs-form-slider-photo" src="{{asset('img/fcs2016-hackathon2.jpg')}}" alt="">
                            <img class="fcs-form-slider-photo" src="{{asset('img/fcs2016-keynote.jpg')}}" alt="">
                            <img class="fcs-form-slider-photo" src="{{asset('img/fcs2016-panel.jpg')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Final Info Section-->
    <section class="ga-background">
        <div class="container-fluid">
            <div class="row">
                <div class="container special-textbox col-lg-12 col-md-12 col-xs-12">
                    <p class="text-center conference-topic-content">Metro-hackathon was also set forth as a tradition of FCS for turning delegates’ knowledge and understanding to the world to actions that solve the stressing issues nowadays. <br><br>FCS2016 overall has set a bar of intercity conference in Hong Kong and visioned a stronger commitment of entrepreneurship in city development in future. </p>
                </div>
            </div>
        </div>
    </section>

    <!-- SPONSORS -->
    <section id="sponsors">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="uppercase">sponsors &amp; partners</h2>

                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="col-lg-3 col-md-3 col-sm-4 sponsor-partner">
                                    <a href="#"><img src="{{asset('img/asic-logo.png')}}" alt="" /></a>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-4 sponsor-partner">
                                    <a href="#"><img src="{{asset('img/ayla-logo.png')}}" alt="" /></a>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-4 sponsor-partner">
                                    <a href="#"><img src="{{asset('img/hkpri-logo.png')}}" alt="" /></a>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-4 sponsor-partner">
                                    <a href="#"><img src="{{asset('img/innovation-forum-logo.png')}}" alt="" /></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="col-lg-3 col-md-3 col-sm-4 sponsor-partner">
                                    <a href="#"><img src="{{asset('img/kca-logo.png')}}" alt="" /></a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>


@endsection

