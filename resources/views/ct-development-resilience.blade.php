@extends('layouts.main')

@section('title')
    About us
    @endsection
@section('header-extra')
    <link rel="stylesheet" href="{{asset('css/accordion-slider.css')}}">

    @endsection

@section('page-content')

    <!-- PAGE HEADER SECTION-->
    <div class="bg-image-global">
        <div class="container-fluid">
            <h1 class="header-style">Global Development and Resilience</h1>
        </div>
    </div>

    <!-- TOPICS HEADING TEASER -->
    <section class="ga-background">
        <div class="container-fluid">
            <div class="row">
                <div class="container special-textbox col-lg-12 col-md-12 col-xs-12">
                    <h2 class="conference-topic-title">Global Development and Resilience</h2>
                    <p class="text-center conference-topic-content">Global development and resilience have been one of the leading topics over city connectivity. The way we shape our city depends on the methodology and model of cooperation for global development and design for city resilience. <br> The panel is collaborating leading development agencies and corporates to explore the topics. It explores the better lesson learnt, case studies and better framework for our learnings in future development. </p>
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
                        <h2 class="text-center">Global Policy and Security with Technology</h2>
                        <p class="lead text-center">Next Level of Innovation: What Is the Truth about Innovation for Future?</p>
                        <p class="text-justify venue-inner-content">As we have been emphasizing so much innovation, how much do we truly understand it? Are we developing our place better with innovation? Are we developing global policies that shape our world cities better and safer? What might be the concerns and thinking behind global policy on technology innovation over security?</p>
                    </div>
                </div>
                <div class="container col-lg-6 col-md-6 col-xs-12">
                    <div class="row">
                        <img class="img-responsive" src="{{asset('img/panel-global-1.jpg')}}" alt="">
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
                        <img class="img-responsive" src="{{asset('img/panel-global-2.jpeg')}}" alt="">
                    </div>
                </div>
                <div class="container col-lg-6 col-md-6 col-xs-12 special-content">
                    <div class="special-textbox">
                        <h2 class="text-center">Cyber-world Management and Wars</h2>
                        <p class="lead text-center">Surveillance and Governance at City Level: Threat or Smart City?</p>
                        <p class="text-justify venue-inner-content">With the development of Internet of Things and advancement of “Smart City” everywhere, how does this impose any thinking and considerations concerning data privacy and policy? How would smarter city design with management of cyber world would contribute to more social stability instead of war fares or conflicts over cyber world and physical world?</p>
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
                        <h2 class="text-center">North-South Regional Development</h2>
                        <p class="lead text-center">North-South Regional Development with Policy</p>
                        <p class="text-justify venue-inner-content">How do we learn from the past experience to develop better set of framework on North-South development and cooperation? How can we overcome the future challenges and the past of cultural and historic conflicts for stronger partnership?</p>
                    </div>
                </div>
                <div class="container col-lg-6 col-md-6 col-xs-12">
                    <div class="row">
                        <img class="img-responsive" src="{{asset('img/panel-global-3.jpg')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- End of contents -->
@endsection

