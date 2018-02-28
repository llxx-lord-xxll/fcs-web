@extends('layouts.main')

@section('title')
    About us
    @endsection
@section('header-extra')
    <link rel="stylesheet" href="{{asset('css/accordion-slider.css')}}">

    @endsection

@section('page-content')

    <!-- PAGE HEADER SECTION-->
    <div class="bg-image-ga-singapore">
        <div class="container-fluid">
            <h1 class="header-style">ASEAN Singapore 2018</h1>
        </div>
    </div>

    <!-- TOPICS HEADING TEASER -->
    <section class="ga-background">
        <div class="container-fluid">
            <div class="row">
                <div class="container special-textbox col-lg-12 col-md-12 col-xs-12">
                    <h2 class="conference-topic-title">ASEAN SINGAPORE 2018</h2>
                    <p class="text-center conference-topic-content"> The Association of Southeast Asian Nations is a regional intergovernmental organisation comprising ten Southeast Asian countries which promotes Pan-Asianism and intergovernmental cooperation and facilitates economic, political, security, military, educational and socio-cultural integration amongst its members and other Asian countries. Since its formation on 8 August 1967 by Indonesia, Malaysia, the Philippines, Singapore and Thailand, the organisation's membership has expanded to include Brunei, Cambodia, Laos, Myanmar and Vietnam. Its principal aims include accelerating economic growth, social progress, and sociocultural evolution among its members, alongside the protection of regional stability and the provision of a mechanism for member countries to resolve differences peacefully. ASEAN is an official United Nations Observer, as well as an active global partner. Communication by members across nations takes place in English. </p>
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
                        <p class="text-justify venue-inner-content">Due to its global influence and regional success, ASEAN has been credited as one of the world's most successful and influential organisations, and an "emerging powerhouse". The organisation received high praises from world leaders and international community, and is dubbed as the centrality in the political, economic, security and socio-cultural architecture of Asia-Pacific. It is lauded as the "best-established intergovernmental institution in Asia" while achieving high approval ratings in its own region. Throughout history, ASEAN has formed a global network of alliance, cooperation and dialogues among countries and sub-regional, regional and international organisations and institutions, solidifying itself as one of the biggest players on the international stage.</p>
                    </div>
                </div>
                <div class="container col-lg-6 col-md-6 col-xs-12">
                    <div class="row">
                        <img class="img-responsive" src="{{asset('img/asean-1.jpg')}}" alt="">
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
                        <img class="img-responsive" src="img/asean-3.jpeg" alt="">
                    </div>
                </div>
                <div class="container col-lg-6 col-md-6 col-xs-12 special-content">
                    <div class="special-textbox">
                        <p class="text-justify venue-inner-content">The group sought economic integration by creating the AEC by the end of 2015 that established a common market. The average economic growth of member states during 1989–2009 was between 3.8% and 7%. This economic growth was greater than the average growth of the Asia-Pacific Economic Cooperation (APEC), which was 2.8%. The ASEAN Free Trade Area (AFTA), which was established on 28 January 1992, includes a Common Effective Preferential Tariff (CEPT) to promote the free flow of goods between member states.</p>
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
                        <p class="text-justify venue-inner-content">RCEP consists of all ten ASEAN countries plus six countries (China, Japan, South Korea, Australia, India, and New Zealand) which have trade agreements with ASEAN countries. RCEP covers 45% of the world's population and about a third of the world's total GDP. For example, 60% of New Zealand's exports are to RCEP countries. RCEP is an extension of ASEAN plus three, and then ASEAN plus six.</p>
                    </div>
                </div>
                <div class="container col-lg-6 col-md-6 col-xs-12">
                    <div class="row">
                        <img class="img-responsive" src="{{asset('img/asean-4.jpg')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- End of contents -->

@endsection

