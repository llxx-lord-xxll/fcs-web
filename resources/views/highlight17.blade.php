@extends('layouts.main')

@section('title')
    Hightlights 2017
    @endsection
@section('header-extra')

    @endsection
@section('page-content')


    <!-- PAGE HEADER SECTION-->
    <div class="bg-image-second">
        <div class="container-fluid">
            <h1 class="header-style">Overview of Future City Summit 2017</h1>
        </div>
    </div>

    <!-- Overview & Video Panel -->
    <section class="ga-background">
        <div class="container-fluid">
            <div class="row">
                <div class="container special-textbox col-lg-12 col-md-12 col-xs-12">
                    <p class="text-center conference-topic-content">FCS2017 is a year of development and strong commitment to bring student-led initiative to a better level, with the theme “Fast Forward to 2030: The New Land of Opportunities and Crisis”. The conference was shaped based on the understanding of need of city development and urban expansion of emerging markets in the global South. </p>
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
                        <p class="text-justify venue-inner-content">FCS2017 brought along 50 speakers from Hong Kong and Singapore with partnership National University of Singapore and delegates of 120 from 25 cities, including Hong Kong, Phnom Penh, Manila, Tokyo, Taipei, Dhaka, and others. </p>
                    </div>
                </div>
                <div class="container col-lg-6 col-md-6 col-xs-12">
                    <div class="row">
                        <div id="second-fcs-slider" class="fcs-img-form-slider">
                            <img class="fcs-form-slider-photo" src="{{asset('img/fcs2017-hackathon.jpg')}}" alt="">
                            <img class="fcs-form-slider-photo" src="{{asset('img/fcs2017-judge.jpg')}}" alt="">
                            <img class="fcs-form-slider-photo" src="{{asset('img/fcs2017-judege2.jpg')}}" alt="">
                            <img class="fcs-form-slider-photo" src="{{asset('img/fcs2017-panel.jpg')}}" alt="">
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
                                    <a href="#"><img src="{{asset('img/aiesec-logo.png')}}" alt="" /></a>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-4 sponsor-partner">
                                    <a href="#"><img src="{{asset('img/asic-logo.png')}}" alt="" /></a>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-4 sponsor-partner">
                                    <a href="#"><img src="{{asset('img/ayla-logo.png')}}" alt="" /></a>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-4 sponsor-partner">
                                    <a href="#"><img src="{{asset('img/hkpri-logo.png')}}" alt="" /></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">

                                <div class="col-lg-3 col-md-3 col-sm-4 sponsor-partner">
                                    <a href="#"><img src="img/innovation-forum-logo.png" alt="" /></a>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-4 sponsor-partner">
                                    <a href="#"><img src="img/san-miguel-logo.png" alt="" /></a>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-4 sponsor-partner">
                                    <a href="#"><img src="img/kca-logo.png" alt="" /></a>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-4 sponsor-partner">
                                    <a href="#"><img src="img/scc-logo.png" alt="" /></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection

