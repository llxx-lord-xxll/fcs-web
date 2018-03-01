@extends('layouts.main')

@section('title')
    Venue CYBERPORT
@endsection

@section('page-content')
    <!-- PAGE HEADER SECTION-->
    <div class="bg-image-cyberport">
        <div class="container-fluid">
            <h1 class="header-style">cyberport</h1>
        </div>
    </div>

    <!-- TOPICS HEADING TEASER -->
    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="container special-textbox col-lg-12 col-md-12 col-xs-12">
                    <h2 class="conference-topic-title">CYBERPORT</h2>
                    <p class="text-center venue-topic-content"> Cyberport is a business park in Hong Kong consisting of four office buildings, a hotel, and a retail entertainment complex. It describes itself as a "creative digital community" with a cluster of technology and digital content tenants. It is owned and managed by Hong Kong Cyberport Management Company Limited which is wholly owned by the Hong Kong SAR Government.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- End of Heading Topic -->

    <!--Venue History & Details -->

    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="container col-lg-6 col-md-6 col-xs-12">
                    <div class="special-textbox">
                        <p class="text-justify venue-inner-content">As of February 2016, Cyberport has incubated and funded over 320 startup companies since inception in 2007. It has also announced in 2016 that it would set up a Cyberport Macro Fund to support local start-ups after seed stage but generally before or around Series A stage of funding.</p>
                    </div>
                </div>
                <div class="container col-lg-6 col-md-6 col-xs-12">
                    <div class="row">
                        <img class="img-responsive" src="{{asset('img/cyberport-2.jpg')}}" alt="">
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
                        <img class="img-responsive" src="{{asset('img/cyberport-3.jpg')}}" alt="">
                    </div>
                </div>
                <div class="container col-lg-6 col-md-6 col-xs-12">
                    <div class="special-textbox">
                        <p class="text-justify venue-inner-content">Cyberport focuses on building key clusters of digital technology, namely FinTech, eCommerce, IoT/Wearables and Big Data/AI to foster the development of Hong Kong into a “Smart City”.  With a committed team of professionals providing all rounded value added services to support our digital community and an array of state-of-the-art tech facilities, Cyberport is the flagship for Hong Kong’s digital tech industry. </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Sub-Topics 3-->
    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="container col-lg-6 col-md-6 col-xs-12">
                    <div class="special-textbox">
                        <p class="text-justify venue-inner-content">Central to the overall mission of fostering and nurturing Hong Kong’s innovative technology leaders is Cyberport’s third giant leap of empowering global ambition. We work with start-ups and established businesses to fulfill their goals of stepping up onto the global stage. To do so it requires connections to the right investors and industry players; fortunately, that is one area where Cyberport shines.</p>
                    </div>
                </div>
                <div class="container col-lg-6 col-md-6 col-xs-12">
                    <div class="row">
                        <img class="img-responsive" src="{{asset('img/cyberport-4.jpeg')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Full Width Section-->


    <!-- Location Map-->

    <section id="venue-cyberport">
        <div class="col-lg-12 venue-map-text">
            <h2 class="text-center uppercase">How to go?</h2>
        </div>
        <iframe width="100%" height="450" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=Cyberport%20Hong%20Kong&key=AIzaSyDTbHDShHzPnGimpT6ZzUCNps2NbiFNUZg" allowfullscreen></iframe>

    </section>


    <!-- End of Location Map-->

    @endsection