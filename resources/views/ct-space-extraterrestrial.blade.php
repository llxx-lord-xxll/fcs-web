@extends('layouts.main')

@section('title')
    About us
    @endsection
@section('header-extra')
    <link rel="stylesheet" href="{{asset('css/accordion-slider.css')}}">

    @endsection

@section('page-content')

    <!-- PAGE HEADER SECTION-->
    <div class="bg-image-space">
        <div class="container-fluid">
            <h1 class="header-style">Space and Extraterrestrial</h1>
        </div>
    </div>

    <!-- TOPICS HEADING TEASER -->
    <section class="ga-background">
        <div class="container-fluid">
            <div class="row">
                <div class="container special-textbox col-lg-12 col-md-12 col-xs-12">
                    <h2 class="conference-topic-title">Space and Extraterrestrial</h2>
                    <p class="text-center conference-topic-content">Space has been one of the latest room of exploration and development, especially with the success thrust and landing of Falcon Heavy by SpaceX. Though cities are built on land, the understanding about space contributes hugely to human species, to learn more about weather and climate, solar system and event extraterrestrial. <br>The panel is having the dialogue with entrepreneurs, educators and government leaders from Asia to explore the future of education, and investing in space technology, how human life and development of cities in future are highly linked to understanding of space.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- End of Heading Topic -->

    <!--Venue History & Details -->

    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="container col-lg-6 col-md-6 col-xs-12 special-content">
                    <div class="special-textbox">
                        <h2 class="text-center">Climate, Exploration and Colonisation</h2>
                        <p class="lead text-center">Climate, Space Exploration and Colonisation</p>
                        <p class="text-justify venue-inner-content">As we are rapidly learning more about the space travel, how much more can we grab hold of climate change? Are we getting more ready to space exploration and even future colonisation? What would be the consequences of human species as we know more about outer space?</p>
                    </div>
                </div>
                <div class="container col-lg-6 col-md-6 col-xs-12">
                    <div class="row">
                        <img class="img-responsive" src="{{asset('img/panel-space-1.jpg')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Sub-Topics 2-->
    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="container col-lg-6 col-md-6 col-xs-12">
                    <div class="row">
                        <img class="img-responsive" src="{{asset('img/panel-space-2.jpg')}}" alt="">
                    </div>
                </div>
                <div class="container col-lg-6 col-md-6 col-xs-12 special-content">
                    <div class="special-textbox">
                        <h2 class="text-center">Future of Space Technology in Asia</h2>
                        <p class="lead text-center">Future of Space Technology in Asia and Our Education</p>
                        <p class="text-justify venue-inner-content">Is Asia prepared to develop stronger sense in science entrepreneurship through what we have learnt in space technology development? What position and values emerging market can take in the space technology industry? </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Sub-Topics 3-->
    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="container col-lg-6 col-md-6 col-xs-12 special-content">
                    <div class="special-textbox">
                        <h2 class="text-center">Solar System, Extraterrestrial and Travel </h2>
                        <p class="lead text-center">Solar System, Extraterrestrial and Travel</p>
                        <p class="text-justify venue-inner-content">How can we know more about our solar system with developing space technology? What is the importance behind that pushing us to move forward beyond the Earth? How will all these change our thinking and imagination in future?</p>
                    </div>
                </div>
                <div class="container col-lg-6 col-md-6 col-xs-12">
                    <div class="row">
                        <img class="img-responsive" src="{{asset('img/panel-space-3.jpg')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- End of contents -->

@endsection

