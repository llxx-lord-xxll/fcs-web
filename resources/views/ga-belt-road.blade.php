@extends('layouts.main')

@section('title')
    About us
    @endsection
@section('header-extra')
    <link rel="stylesheet" href="{{asset('css/accordion-slider.css')}}">

    @endsection

@section('page-content')

    <!-- PAGE HEADER SECTION-->
    <div class="bg-image-ga-beltnroad">
        <div class="container-fluid">
            <h1 class="header-style">Belt and Road</h1>
        </div>
    </div>

    <!-- TOPICS HEADING TEASER -->
    <section class="ga-background">
        <div class="container-fluid">
            <div class="row">
                <div class="container special-textbox col-lg-12 col-md-12 col-xs-12">
                    <h2 class="conference-topic-title">BELT AND ROAD</h2>
                    <p class="text-center conference-topic-content"> The Silk Road Economic Belt and the 21st-century Maritime Silk Road, also known as the One Belt and One Road Initiative, (OBOR), The Belt and Road, (B&R) and The Belt and Road Initiative, (BRI, official translation) is a development strategy proposed by Chinese Government that focuses on connectivity and cooperation between Eurasian countries, primarily the People's Republic of China (PRC), the land-based Silk Road Economic Belt (SREB) and the ocean-going Maritime Silk Road (MSR).</p>
                </div>
            </div>
        </div>
    </section>

    <!-- End of Heading Topic -->
    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="container col-lg-6 col-md-6 col-xs-12 special-content">
                    <div class="special-textbox">
                        <p class="text-justify venue-inner-content">The strategy underlines China's push to take a larger role in global affairs with a China-centered trading network. It was unveiled by Xi Jinping in September and October 2013 for SREB and MSR respectively. <br><br> The Belt and Road initiative is geographically structured along 6 corridors, and the maritime silk road.</p>
                    </div>
                </div>
                <div class="container col-lg-6 col-md-6 col-xs-12">
                    <div class="row">
                        <img class="img-responsive" src="{{asset('img/beltnroad-1.jpg')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Global Agenda Topics Details -->
    <!-- More Content-->
    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="container col-lg-6 col-md-6 col-xs-12">
                    <div class="row">
                        <img class="img-responsive" src="{{asset('img/beltnroad-2.jpg')}}" alt="">
                    </div>
                </div>
                <div class="container col-lg-6 col-md-6 col-xs-12 special-content">
                    <div class="special-textbox">
                        <ul class="fcs-ga-list">
                            <li><i class="fa fa-minus" aria-hidden="true"></i>  New Eurasian Land Bridge, running from Western China to Western Russia through Kazakhstan.</li>
                            <li><i class="fa fa-minus" aria-hidden="true"></i>  China–Mongolia–Russia Corridor, running from Northern China to Eastern Russia </li>
                            <li><i class="fa fa-minus" aria-hidden="true"></i>  China–Central Asia–West Asia Corridor, running from Western China to Turkey </li>
                            <li><i class="fa fa-minus" aria-hidden="true"></i>  China–Indochina Peninsula Corridor, running from Southern China to Singapore</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of More Content-->
    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="container col-lg-6 col-md-6 col-xs-12 special-content">
                    <div class="special-textbox">
                        <ul class="fcs-ga-list">
                            <li><i class="fa fa-minus" aria-hidden="true"></i>  China–Myanmar–Bangladesh–India Corridor, running from Southern China to Myanmar</li>
                            <li><i class="fa fa-minus" aria-hidden="true"></i>  China–Pakistan Corridor, running from South-Western China to Pakistan </li>
                            <li><i class="fa fa-minus" aria-hidden="true"></i>  Maritime Silk Road, running from the Chinese Coast through Singapore to the Mediterranean </li>
                        </ul>
                    </div>
                </div>
                <div class="container col-lg-6 col-md-6 col-xs-12">
                    <div class="row">
                        <img class="img-responsive" src="{{asset('img/beltnroad-3.jpg"')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Last Content part-->
    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="container col-lg-6 col-md-6 col-xs-12">
                    <div class="row">
                        <img class="img-responsive" src="img/beltnroad-4.jpg')}}" alt="">
                    </div>
                </div>
                <div class="container col-lg-6 col-md-6 col-xs-12 special-content">
                    <div class="special-textbox">
                        <p class="text-justify venue-inner-content">The area of the initiative is primarily Asia and Europe, encompassing around 60 countries. Oceania and East Africa are also included. Anticipated cumulative investment over an indefinite timescale is variously put at US$4 trillion or US$8 trillion. The initiative has been contrasted with the two US-centric trading arrangements, the Trans-Pacific Partnership and the Transatlantic Trade and Investment Partnership.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection

