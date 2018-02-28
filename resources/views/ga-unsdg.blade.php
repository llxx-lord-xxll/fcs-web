@extends('layouts.main')

@section('title')
    About us
    @endsection
@section('header-extra')
    <link rel="stylesheet" href="{{asset('css/accordion-slider.css')}}">

    @endsection

@section('page-content')

    <!-- PAGE HEADER SECTION-->
    <div class="bg-image-unsdg">
        <div class="container-fluid">
            <h1 class="header-style">The Sustainable Development Goals (SDGs)</h1>
        </div>
    </div>

    <!-- TOPICS HEADING TEASER -->
    <section class="ga-background">
        <div class="container-fluid">
            <div class="row">
                <div class="container special-textbox col-lg-12 col-md-12 col-xs-12">
                    <h2 class="conference-topic-title">The Sustainable Development Goals (SDGs)</h2>
                    <p class="text-center conference-topic-content"> The Sustainable Development Goals (SDGs) are a collection of 17 global goals set by the United Nations. The broad goals are interrelated though each has its own targets to achieve. The total number of targets is 169. The SDGs cover a broad range of social and economic development issues. These include poverty, hunger, health, education, climate change, gender equality, water, sanitation, energy, environment and social justice. The SDGs are also known as "Transforming our World: the 2030 Agenda for Sustainable Development" or 2030 Agenda in short. The goals were developed to replace the Millennium Development Goals (MDGs) which ended in 2015. Unlike the MDGs, the SDG framework does not distinguish between "developed" and "developing" nations. Instead, the goals apply to all countries.</p>
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
                        <p class="text-justify venue-inner-content">Implementation of the SDGs started worldwide in 2016. This process can also be called "Localizing the SDGs". All over the planet, individual people, universities, governments and institutions and organizations of all kinds work on several goals at the same time. In each country, governments must translate the goals into national legislation, develop a plan of action, establish budgets and at the same time be open to and actively search for partners. Poor countries need the support of rich countries and coordination at the international level is crucial. </p>
                    </div>
                </div>
                <div class="container col-lg-6 col-md-6 col-xs-12">
                    <div class="row">
                        <img class="img-responsive" src="{{asset('img/unsdgs-2.png')}}" alt="">
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
                        <img class="img-responsive" src="{{asset('img/unsdgs-3.jpg')}}" alt="">
                    </div>
                </div>
                <div class="container col-lg-6 col-md-6 col-xs-12 special-content">
                    <div class="special-textbox">
                        <p class="text-justify venue-inner-content">In January 2013, the 30-member UN General Assembly Open Working Group on Sustainable Development Goals was established to identify specific goals for the SDGs. The Open Working Group (OWG) was tasked with preparing a proposal on the SDGs for consideration during the 68th session of the General Assembly, September 2013 – September 2014. On 19 July 2014, the OWG forwarded a proposal for the SDGs to the Assembly. After 13 sessions, the OWG submitted their proposal of 17 SDGs and 169 targets to the 68th session of the General Assembly in September 2014. On 5 December 2014, the UN General Assembly accepted the Secretary General's Synthesis Report, which stated that the agenda for the post-2015 SDG process would be based on the OWG proposals.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of More Content-->



    <!-- End of contents -->

@endsection

