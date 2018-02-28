@extends('layouts.main')

@section('title')
    About us
    @endsection
@section('header-extra')
    <link rel="stylesheet" href="{{asset('css/accordion-slider.css')}}">

    @endsection

@section('page-content')

    <!-- PAGE HEADER SECTION-->
    <div class="bg-image-entrepreneurship">
        <div class="container-fluid">
            <h1 class="header-style">Entrepreneurship for All</h1>
        </div>
    </div>

    <!-- TOPICS HEADING TEASER -->
    <section class="ga-background">
        <div class="container-fluid">
            <div class="row">
                <div class="container special-textbox col-lg-12 col-md-12 col-xs-12">
                    <h2 class="conference-topic-title">Entrepreneurship for All</h2>
                    <p class="text-center conference-topic-content">Entrepreneurship is the word of 2010s in the time of industrialisation 4.0 and generation X. From the time of garage style entrepreneurship startup hustling, to becoming a global movement of entrepreneurship, the need of the entrepreneurialism happens from education to industry development. How we do we understand the values behind? And how shall leaders take entrepreneurship to next level of development in coming future, to echo the changing need of a city? <br> The panel is collaborating leading organisations and rating magazines to explore the topics. It is probably one of the deepest discussion and learning in Asia about the future of entrepreneurship education that impacts everyone in the city.</p>
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
                        <h2 class="text-center">Social Impact Investing and Future</h2>
                        <p class="lead text-center">Entrepreneurship in China: Capitalism with China Socialist Values  </p>
                        <p class="text-justify venue-inner-content">In the past 15 years, China has been growing from "Made In China" to "Innovated By China". Do we have any lesson learnt and factors that shape the super China economy? Is there any model to transfer for reference to other emerging markets? </p>
                    </div>
                </div>
                <div class="container col-lg-6 col-md-6 col-xs-12">
                    <div class="row">
                        <img class="img-responsive" src="{{asset('img/panel-ent-1.png')}}" alt="">
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
                        <img class="img-responsive" src="{{asset('img/panel-ent-2.jpg')}}" alt="">
                    </div>
                </div>
                <div class="container col-lg-6 col-md-6 col-xs-12 special-content">
                    <div class="special-textbox">
                        <h2 class="text-center">Education and Future Workforce</h2>
                        <p class="lead text-center">Transformation of Education, Prospect of Future Workforce and Investing on Human</p>
                        <p class="text-justify venue-inner-content">As we are stepping into industrial 4.0 age, are we more prepared with an education where future workforce can be better nurtured? How shall we prepare and develop wiser to nurture our next generation with high flexibility and ability to shape our better future? What is the future of teaching and learning?</p>
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
                        <h2 class="text-center">Investing in Millennials and Future Quality</h2>
                        <p class="lead text-center">Nurturing Generation X of Entrepreneurship: The Quality of Leaders We Need For Cities in Future</p>
                        <p class="text-justify venue-inner-content">As we are now in post-millennial age, what can we learn in the past from investing in entrepreneurs? What can we foresee with the Generation X we are nurturing now? Instead of adults and seniors, where are these millennials and generation x shaping our future cities and heading us to? What quality do they show us that senior generations don’t have but highly needed?</p>
                    </div>
                </div>
                <div class="container col-lg-6 col-md-6 col-xs-12">
                    <div class="row">
                        <img class="img-responsive" src="{{asset('img/panel-ent-3.JPG')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- End of contents -->

@endsection

