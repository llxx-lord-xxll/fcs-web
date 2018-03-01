@extends('layouts.main')

@section('title')
    Theme
    @endsection
@section('header-extra')
    <link rel="stylesheet" href="{{asset('css/zoomtimeline.css')}}">
    <link rel="stylesheet" href="{{asset('css/history-style.css')}}">
    @endsection


@section('page-content')

    <!-- PAGE HEADER SECTION-->
    <div class="bg-image-theme">
        <div class="container-fluid">
            <h1 class="header-style">“Cities Beyond Imagination”</h1>
        </div>
    </div>

    <!-- TOPICS HEADING TEASER -->
    <section class="ga-background">
        <div class="container-fluid">
            <div class="row">
                <div class="container special-textbox col-lg-12 col-md-12 col-xs-12">
                    <h2 class="conference-topic-title">"Cities Beyond Imagination"</h2>
                    <p class="text-center conference-topic-content"> This is the conference about a vision of how cities in future should look like. Future City Summit is a series of keynote, panels, workshops and hackathon with exhibition. It provides all stakeholders a framework of thinking, values and a picture where we possibly head to in future. </p>
                </div>
            </div>
        </div>
    </section>

    <!-- End of Heading Topic -->

    <!--Global Agenda Topics Details -->

    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="container col-lg-6 col-md-6 col-xs-12">
                    <div class="special-textbox">
                        <p class="text-justify venue-inner-content">"When something is important enough, you do it even if the odds are not in your favor." FCS2018 is a year of discussion in imagination over a spectrum of topics, from policy, entrepreneurship, to space technology and arts, hence a theme “Cities Beyond Imagination”. It is also paving a year of leap. FCS is setting forth venture builder and also avenue of project sourcing to match small-scale public private partnership projects along the emerging markets in the global South with impact investors and corporates in Hong Kong and mainland China. </p>
                    </div>
                </div>
                <div class="container col-lg-6 col-md-6 col-xs-12">
                    <div class="row">
                        <img class="img-responsive" src="{{asset('img/city-theme-1.jpg')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- End of contents -->

@endsection

