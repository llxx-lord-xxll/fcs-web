@extends('layouts.main')

@section('title')
    About us
    @endsection
@section('header-extra')
    <link rel="stylesheet" href="{{asset('css/accordion-slider.css')}}">

    @endsection

@section('page-content')

    <!-- PAGE HEADER SECTION-->
    <div class="bg-image-ga-africa">
        <div class="container-fluid">
            <h1 class="header-style">Global Agenda - African Union</h1>
        </div>
    </div>

    <!-- TOPICS HEADING TEASER -->
    <section class="ga-background">
        <div class="container-fluid">
            <div class="row">
                <div class="container special-textbox col-lg-12 col-md-12 col-xs-12">
                    <h2 class="conference-topic-title">AFRICAN UNION</h2>
                    <p class="text-center conference-topic-content"> The African Union (AU) is a continental union consisting of all 55 countries on the African continent, extending slightly into Asia via the Sinai Peninsula in Egypt. It was established on 26 May 2001 in Addis Ababa, Ethiopia, and launched on 9 July 2002 in South Africa, with the aim of replacing the Organisation of African Unity (OAU). The most important decisions of the AU are made by the Assembly of the African Union, a semi-annual meeting of the heads of state and government of its member states. The AU's secretariat, the African Union Commission, is based in Addis Ababa. The African Union was created on May 26, 2001. The AU's future goals include the creation of a free trade area, a customs union, a single market, a central bank, and a common currency (see African Monetary Union), thereby establishing economic and monetary union. The current plan is to establish an African Economic Community with a single currency by 2023. </p>
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
                    <p class="text-justify venue-inner-content">One of the key debates in relation to the achievement of greater continental integration is the relative priority that should be given to integration of the continent as a unit in itself or to integration of the sub-regions. The 1980 Lagos Plan of Action for the Development of Africa and the 1991 treaty to establish the African Economic Community (also referred to as the Abuja Treaty), proposed the creation of Regional Economic Communities(RECs) as the basis for African integration, with a timetable for regional and then continental integration to follow.</p>
                </div>
                <div class="container col-lg-6 col-md-6 col-xs-12">
                    <div class="row">
                        <div id="african-union-slider" class="fcs-img-form-slider">
                            <img class="fcs-form-slider-photo" src="{{asset('img/african-union-1.jpg')}}" alt="">
                            <img class="fcs-form-slider-photo" src="{{asset('img/african-union-2.jpeg')}}" alt="">
                            <img class="fcs-form-slider-photo" src="{{asset('img/african-union-3.jpg')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

