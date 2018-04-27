@extends('layouts.main')

@section('title')
    About us
    @endsection
@section('header-extra')
    <link rel="stylesheet" href="{{asset('css/accordion-slider.css')}}">
    @endsection

@section('page-content')

    <!-- PAGE HEADER SECTION-->
    <div class="bg-image-earth">
        <div class="container-fluid">
            <h1 class="header-style">The Earth, Urban and Energy</h1>
        </div>
    </div>

    <!-- TOPICS HEADING TEASER -->
    <section class="ga-background">
        <div class="container-fluid">
            <div class="row">
                <div class="container special-textbox col-lg-12 col-md-12 col-xs-12">
                    <h2 class="conference-topic-title">The Earth, Urban and Energy</h2>
                    <p class="text-center conference-topic-content">Urbanisation and the innovative design behind leads to a formality that cities connect together for development and growth. It is correlated to the learning of our Earth and the effective use and efficiency of energy development. It impacts the way we design the urban, and the way cities communicate as infrastructure. <br>The panel is having the dialogue with industry leaders and planners to learn more about the critical points and issues in urban planning we face nowadays and foreseeable future. </p>
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
                        <h2 class="text-center">City to City Connectivity and Transportation </h2>
                        <p class="lead text-center">City to City Connectivity and Transportation</p>
                        <p class="text-justify venue-inner-content">How can we assess our urbanisation and its design of connectivity? Are we living in a closer living hour circle due to transportation? What is the myth and long-term impact behind the scene? How infrastructure can be better planned? </p>
                    </div>
                </div>
                <div class="container col-lg-6 col-md-6 col-xs-12">
                    <div class="row">
                        <img class="img-responsive" src="{{asset('img/panel-urban-1.jpg')}}" alt="">
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
                        <img class="img-responsive" src="{{asset('img/panel-urban-2.jpg')}}" alt="">
                    </div>
                </div>
                <div class="container col-lg-6 col-md-6 col-xs-12 special-content">
                    <div class="special-textbox">
                        <h2 class="text-center">Energy and Urban Sustainability </h2>
                        <p class="lead text-center">Energy and Urban Sustainability </p>
                        <p class="text-justify venue-inner-content">What is new about energy sustainability? How do we bring that to a city level movement to faster sustainability in the urban? Is there any better solutions to collectively address energy need in future megacities and support the energy need for technological advancement? </p>
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
                        <h2 class="text-center">Mega City Development and Future </h2>
                        <p class="lead text-center">Mega City Development and Future </p>
                        <p class="text-justify venue-inner-content">How shall we look at the planning of China’s Belt and Road and Greater Bay Area? How can we all learn from this thinking? Is there any transferable knowledge and case studies to other emerging cities in the Global South?</p>
                    </div>
                </div>
                <div class="container col-lg-6 col-md-6 col-xs-12">
                    <div class="row">
                        <img class="img-responsive" src="{{asset('img/panel-urban-energy.jpg')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- End of contents -->

@endsection

