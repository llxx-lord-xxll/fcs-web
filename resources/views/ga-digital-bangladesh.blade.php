@extends('layouts.main')

@section('title')
    About us
    @endsection
@section('header-extra')
    <link rel="stylesheet" href="{{asset('css/accordion-slider.css')}}">

    @endsection

@section('page-content')

    <!-- PAGE HEADER SECTION-->
    <div class="bg-image-visionbd">
        <div class="container-fluid">
            <h1 class="header-style">Vision 2021 - Digital Bangladesh</h1>
        </div>
    </div>

    <!-- TOPICS HEADING TEASER -->
    <section class="ga-background">
        <div class="container-fluid">
            <div class="row">
                <div class="container special-textbox col-lg-12 col-md-12 col-xs-12">
                    <h2 class="conference-topic-title">Vision 2021 - Digital Bangladesh</h2>
                    <p class="text-center conference-topic-content"> Vision 2021 was the political manifesto of the Bangladesh Awami League party before winning the National Elections of 2008. It stands as a political vision of Bangladesh for the year 2021, the golden jubilee of the nation. The policy has been criticized as a policy emblematic of technological optimism in the context of Bangladesh and the state repression of media, low internet penetration, inadequate electricity generation. The Vision 2021 is an articulation of where this nation needs to be in 2021 – the year which marks the 50th anniversary of Bangladesh’s independence.</p>
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
                        <p class="text-justify venue-inner-content">Digital Bangladesh implies the broad use of computers, and embodies the modern philosophy of effective and useful use of technology in terms of implementing the promises in education, health, job placement and poverty reduction. The party underscored a changing attitude, positive thinking and innovative ideas for the success of “Digital Bangladesh”.</p>
                    </div>
                </div>
                <div class="container col-lg-6 col-md-6 col-xs-12">
                    <div class="row">
                        <img class="img-responsive" src="{{asset('img/vision2021-1.jpg')}}" alt="">
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
                        <img class="img-responsive" src="{{asset('img/vision2021-2.jpg')}}" alt="">
                    </div>
                </div>
                <div class="container col-lg-6 col-md-6 col-xs-12 special-content">
                    <div class="special-textbox">
                        <p class="text-justify venue-inner-content">The philosophy of “Digital Bangladesh” comprises ensuring people’s democracy and human rights, transparency, accountability, establishing justice and ensuring delivery of government services to the citizens of Bangladesh through maximum use of technology, with the ultimate goal being the overall improvement of the daily lifestyle of general people. This includes all classes of people and does not discriminate people in terms of technology.</p>
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
                        <p class="text-justify venue-inner-content">The government further emphasized on the four elements of “Digital Bangladesh Vision” which are human resource development, people involvement, civil services and use of information technology in business.</p>
                    </div>
                </div>
                <div class="container col-lg-6 col-md-6 col-xs-12">
                    <div class="row">
                        <img class="img-responsive" src="{{asset('img/vision2021-3.jpg')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- End of contents -->
@endsection

