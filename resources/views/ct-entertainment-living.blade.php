@extends('layouts.main')

@section('title')
    About us
    @endsection
@section('header-extra')
    <link rel="stylesheet" href="{{asset('css/accordion-slider.css')}}">

    @endsection

@section('page-content')

    <!-- PAGE HEADER SECTION-->
    <div class="bg-art-entertainment">
        <div class="container-fluid">
            <h1 class="header-style">Arts, Entertainment and Living</h1>
        </div>
    </div>

    <!-- TOPICS HEADING TEASER -->
    <section class="ga-background">
        <div class="container-fluid">
            <div class="row">
                <div class="container special-textbox col-lg-12 col-md-12 col-xs-12">
                    <h2 class="conference-topic-title">Arts, Entertainment and Living</h2>
                    <p class="text-center conference-topic-content">As humankind is entering a more digital age, imagination and artisan sense has been more transformed with digitization and technology. What would be the unexplored opportunities, ways of living and threats? <br>The panel is collaborating with influential artist entrepreneurs and industry leaders to explore the topics and come up with several factors and items that we shall be looking into in year 2018 and years forward. </p>
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
                        <h2 class="text-center">Electronic Sports and Future</h2>
                        <p class="lead text-center">Future of Entertainment: Simulation, Virtuality and Reality </p>
                        <p class="text-justify venue-inner-content">What are we envisioning with media and entertainment? How would entertainment affect performance of human species in a city in future? Are we developing more cross-sectoral partnership and simulations with the support of electronic sports? What are the lesson learnt from the current development of virtual reality technology?</p>
                    </div>
                </div>
                <div class="container col-lg-6 col-md-6 col-xs-12">
                    <div class="row">
                        <img class="img-responsive" src="{{asset('img/panel-arts-1.jpg')}}" alt="">
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
                        <img class="img-responsive" src="{{asset('img/panel-arts-2.png')}}" alt="">
                    </div>
                </div>
                <div class="container col-lg-6 col-md-6 col-xs-12 special-content">
                    <div class="special-textbox">
                        <h2 class="text-center">Cinematic Industry and Imagination</h2>
                        <p class="lead text-center">Future of Cinematic Industry and Imagination </p>
                        <p class="text-justify venue-inner-content">How can human imagination be brought to another level of the game through arts and entertainment in daily living, dynamically? Are we learning something from movie industry and creating our “imaginary future” based on our cinematic thinking? Where will imagination lead us to?</p>
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
                        <h2 class="text-center">Social Engineering and Relationship </h2>
                        <p class="lead text-center">Social Engineering and Human Networking: Future of Relationship in Life and Business</p>
                        <p class="text-justify venue-inner-content">How are our behaviors and gradually moved by social networks and media? And how will that impact the ways we live with others and doing business? What can we know more about the people we network to predict our how future city would look like?</p>
                    </div>
                </div>
                <div class="container col-lg-6 col-md-6 col-xs-12">
                    <div class="row">
                        <img class="img-responsive" src="{{asset('img/panel-arts-3.jpg')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

