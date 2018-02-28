@extends('layouts.main')

@section('title')
    About us
    @endsection
@section('header-extra')
    <link rel="stylesheet" href="{{asset('css/accordion-slider.css')}}">

    @endsection

@section('page-content')
    <!-- PAGE HEADER SECTION-->
    <div class="bg-image-technology">
        <div class="container-fluid">
            <h1 class="header-style">Technology for Future</h1>
        </div>
    </div>

    <!-- TOPICS HEADING TEASER -->
    <section class="ga-background">
        <div class="container-fluid">
            <div class="row">
                <div class="container special-textbox col-lg-12 col-md-12 col-xs-12">
                    <h2 class="conference-topic-title">Technology for Future</h2>
                    <p class="text-center conference-topic-content">Technology overall has been advancing in an exponential rate with latest keywords from cryptocurrency to artificial intelligence. The understanding behind is no longer left in the campus and laboratories but application and commercial market. <br>The panel is having the dialogue with industry leaders and scientists to learn more about the triggering points behind, the next blooming technology and impact to the city development in future.</p>
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
                        <h2 class="text-center">Artificial Intelligence and Future</h2>
                        <p class="lead text-center">Artificial Intelligence and Future</p>
                        <p class="text-justify venue-inner-content">What is the possible meaning of Singularity point of artificial intelligence and where are we heading to with A.I. in future? How should human being and leaders be more aware and ready to collaborate and work with artificial intelligence? </p>
                    </div>
                </div>
                <div class="container col-lg-6 col-md-6 col-xs-12">
                    <div class="row">
                        <img class="img-responsive" src="{{asset('img/panel-tech-1.jpg')}}" alt="">
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
                        <img class="img-responsive" src="{{asset('img/panel-tech-2.jpg')}}" alt="">
                    </div>
                </div>
                <div class="container col-lg-6 col-md-6 col-xs-12 special-content">
                    <div class="special-textbox">
                        <h2 class="text-center">Biotechnology and Human Evolution </h2>
                        <p class="lead text-center">Biotechnology and Human Revolution: Robotics, Health and Cyborg </p>
                        <p class="text-justify venue-inner-content">With a vast growth of biotechnology in human body with robotics, is there any future threat and concerns we may face? What is the opportunity and challenge? How would city development and planning be influenced with the new coming identity as humanoid? </p>
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
                        <h2 class="text-center">Crypto-technology and Blockchain</h2>
                        <p class="lead text-center">Crypto-Technology and Blockchain: Web 3.0 and Future Internet of Things</p>
                        <p class="text-justify venue-inner-content">Investment hype aside, is global economy ready entering new economy of doing business with cryptocurrency? What would be foreseeable impact of crypto-technology and blockchain? What is the thinking of regulations and management behind the technology? Where would government and banks position in the disruption?</p>
                    </div>
                </div>
                <div class="container col-lg-6 col-md-6 col-xs-12">
                    <div class="row">
                        <img class="img-responsive" src="{{asset('img/panel-tech-3.jpg')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- End of contents -->


@endsection

