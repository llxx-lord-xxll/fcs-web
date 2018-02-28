@extends('layouts.main')

@section('title')
    About us
    @endsection
@section('header-extra')
    <link rel="stylesheet" href="{{asset('css/accordion-slider.css')}}">

    @endsection

@section('page-content')

    <!-- PAGE HEADER SECTION-->
    <div class="bg-image-india">
        <div class="container-fluid">
            <h1 class="header-style">Make in India</h1>
        </div>
    </div>

    <!-- TOPICS HEADING TEASER -->
    <section class="ga-background">
        <div class="container-fluid">
            <div class="row">
                <div class="container special-textbox col-lg-12 col-md-12 col-xs-12">
                    <h2 class="conference-topic-title">Make in India</h2>
                    <p class="text-center conference-topic-content"> Make in India, a type of Swadeshi movement covering 25 sectors of economy, was launched by the Government of India in 2014 to encourage companies to manufacture their products in India. As per the current policy, 100% FDI is permitted in all the 25 sectors, except for space (74%), defence (49%) and news media (26%). Japan and India announced a US$12 billion "Japan-India Make-in-India Special Finance Facility" fund.</p>
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
                        <p class="text-justify venue-inner-content">After the launch, India received ₹16.40 lakh crore (US$260 billion) worth of investment commitments and investment inquiries worth ₹1.5 lakh crore (US$23 billion) between September 2014 to February 2016. As a result, India emerged as the top destination globally in 2015 for foreign direct investment (FDI), surpassing the USA and China, with US$60.1 billion FDI. Several states launched their own Make in India initiatives, such as Vibrant Gujarat, "Make in Haryana" and "Make in Maharashtra". India received US $60 billion FDI in FY 2016-17.</p>
                    </div>
                </div>
                <div class="container col-lg-6 col-md-6 col-xs-12">
                    <div class="row">
                        <img class="img-responsive" src="{{asset('img/makeinindia-1.jpg')}}" alt="">
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
                        <img class="img-responsive" src="{{asset('img/makeinindia-2.jpg')}}" alt="">
                    </div>
                </div>
                <div class="container col-lg-6 col-md-6 col-xs-12 special-content">
                    <div class="special-textbox">
                        <p class="text-justify venue-inner-content">This initiative converges, synergises and enables other important Government of India schemes, such as Bharatmala, Sagarmala, Dedicated Freight Corridors, Industrial corridors, UDAN-RCS, BharatNet and Digital India.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of More Content-->



    <!-- End of contents -->
@endsection

