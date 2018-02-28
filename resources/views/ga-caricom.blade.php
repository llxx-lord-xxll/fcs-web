@extends('layouts.main')

@section('title')
    About us
    @endsection
@section('header-extra')
    <link rel="stylesheet" href="{{asset('css/accordion-slider.css')}}">

    @endsection

@section('page-content')

    <!-- PAGE HEADER SECTION-->
    <div class="bg-image-caricom">
        <div class="container-fluid">
            <h1 class="header-style">The Caribbean Community (CARICOM)</h1>
        </div>
    </div>

    <!-- TOPICS HEADING TEASER -->
    <section class="ga-background">
        <div class="container-fluid">
            <div class="row">
                <div class="container special-textbox col-lg-12 col-md-12 col-xs-12">
                    <h2 class="conference-topic-title">The Caribbean Community (CARICOM)</h2>
                    <p class="text-center conference-topic-content"> The Caribbean Community (CARICOM) is an organization of fifteen Caribbean nations and dependencies whose main objective is to promote economic integration and cooperation among its members, to ensure that the benefits of integration are equitably shared, and to coordinate foreign policy. The organization was established in 1973. Its major activities involve coordinating economic policies and development planning; devising and instituting special projects for the less-developed countries within its jurisdiction; operating as a regional single market for many of its members (Caricom Single Market); and handling regional trade disputes. The secretariat headquarters is in Georgetown, Guyana. CARICOM is an official United Nations Observer. </p>
                </div>
            </div>
        </div>
    </section>

    <!-- End of Heading Topic -->

    <!--Global Agenda Topics Details -->

    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="container col-lg-6 col-md-6 col-xs-12 special-content">
                    <p class="text-justify venue-inner-content">In July 2012, CARICOM announced that they were considering making French and Dutch official languages. In 2001, the heads of government signed a revised Treaty of Chaguaramas that cleared the way to transform the idea of a common market CARICOM into a Caribbean (CARICOM) Single Market and Economy. Part of the revised treaty establishes and implements the Caribbean Court of Justice.</p>
                </div>
                <div class="container col-lg-6 col-md-6 col-xs-12">
                    <div class="row">
                        <div id="carcom-union-slider" class="fcs-img-form-slider">
                            <img class="fcs-form-slider-photo" src="{{asset('img/caricom-1.jpg')}}" alt="">
                            <img class="fcs-form-slider-photo" src="{{asset('img/caricom-2.png')}}" alt="">
                            <img class="fcs-form-slider-photo" src="{{asset('img/caricom-3.jpg')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- End of contents -->
@endsection

