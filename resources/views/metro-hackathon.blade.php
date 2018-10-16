@extends('layouts.main')

@section('title')
    Metro-Hackathon
    @endsection


@section('page-content')

    <!-- PAGE HEADER SECTION-->
    <div class="bg-image-metro-hackathon">
        <div class="container-fluid">
            <h1 class="header-style">Metro-Hackathon</h1>
        </div>
    </div>

    <!--Venue History & Details -->

    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="container col-lg-6 col-md-6 col-xs-12 special-content">
                    <div class="special-textbox">
                        <p class="text-justify venue-inner-content">Metro-hackathon develops the bootcamp to bring along delegates like young entrepreneurs, young government leaders and young scholars to foresee better solutions for future. It will be a series of pre-hackathon selection, workshops, 48 hours-hackathon and final pitching with exhibition and dealflow with investors. </p>
                        <h3 class="text-left">The UN SDGs FCS focuses on:</h3>
                        <ul class="text-justify venue-inner-content workshop-inner-list">
                            <li><i class="fa fa-minus" aria-hidden="true"></i> 11: Sustainable Cities and Communities</li>
                            <li><i class="fa fa-minus" aria-hidden="true"></i> 9: Industry, Innovation and Infrastructure</li>
                        </ul>
                    </div>
                </div>
                <div class="container col-lg-6 col-md-6 col-xs-12">
                    <div class="row">
                        <div id="metro-hackathon-slider1" class="fcs-img-form-slider">
                            <img class="fcs-form-slider-photo" src="{{asset('img/metrohackaton-1.jpg')}}" alt="">
                            <img class="fcs-form-slider-photo" src="{{asset('img/metrohackathon-2.jpg')}}" alt="">
                            <img class="fcs-form-slider-photo" src="{{asset('img/metrohackathon-3.jpg')}}" alt="">
                            <img class="fcs-form-slider-photo" src="{{asset('img/metrohackathon-4.jpg')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Sub-Topics 2-->
    <section class="ga-background">
        <div class="container-fluid">
            <div class="row">
                <div class="container col-lg-6 col-md-6 col-xs-12">
                    <div class="row">
                        <div id="metro-hackathon-slider2" class="fcs-img-form-slider">
                            <img class="fcs-form-slider-photo" src="{{asset('img/metrohackathon-6.jpg')}}" alt="">
                            <img class="fcs-form-slider-photo" src="{{asset('img/metrohackathon-7.jpg')}}" alt="">
                            <img class="fcs-form-slider-photo" src="{{asset('img/metrohackathon-8.jpg')}}" alt="">
                            <img class="fcs-form-slider-photo" src="{{asset('img/metrohackathon-9.jpg')}}" alt="">
                            <img class="fcs-form-slider-photo" src="{{asset('img/metrohackathon-10.jpg')}}" alt="">
                        </div>
                    </div>
                </div>
                <div class="container col-lg-6 col-md-6 col-xs-12 special-content">
                    <p class="text-justify venue-inner-content">Metro-hackathon develops the bootcamp to bring along delegates like young entrepreneurs, young government leaders and young scholars to foresee better solutions for future. It will be a series of pre-hackathon selection, workshops, 48 hours-hackathon and final pitching with exhibition and dealflow with investors. </p>
                    <p class="text-justify venue-inner-content"> With the wide partnership of funds, incubators and industries, selected teams and winning ventures will be invited to join venture builder of FCS with equity investing funds. </p>
                </div>
            </div>
        </div>
        </div>
    </section>


    <!-- Hackathon Sponsors-->
    <section id="sponsors">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="uppercase">sponsors &amp; partners</h2>

                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="col-lg-3 col-md-3 col-sm-4 sponsor-partner">
                                    <a href="#"><img src="{{asset('img/launchgarage-logo.PNG')}}" alt="" /></a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- End of Hackathon Sponsors-->

@endsection

