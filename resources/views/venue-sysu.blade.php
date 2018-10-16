@extends('layouts.main')

@section('title')
    Venue SYSU
    @endsection

@section('page-content')
    <!-- PAGE HEADER SECTION-->
    <div class="bg-image-sysu">
        <div class="container-fluid">
            <h1 class="header-style">Sun Yat Sen University</h1>
        </div>
    </div>

    <!-- VENUE HISTORY - HKU-->
    <section class="ga-background">
        <div class="container-fluid">
            <div class="row">
                <div class="container special-textbox col-lg-12 col-md-12 col-xs-12">
                    <h2 class="conference-topic-title">Sun Yat Sen University</h2>
                    <p class="text-center venue-topic-content"> Sun Yat-sen University (Chinese: 中山大学), abbreviated SYSU, also known as Zhongshan University, is a major Chinese public research university located in Guangdong, People's Republic of China. It was founded in 1924 by Dr. Sun Yat-sen, a revolutionary and the founding father of the Republic of China.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Campus-->
    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="container col-lg-6 col-md-6 col-xs-12">
                    <div class="special-textbox">
                        <p class="text-justify venue-inner-content">Consistently ranked among the top 10 universities in mainland China, Sun Yat-sen University provides undergraduate and graduate instruction in the humanities, social sciences, natural sciences, technology, medical science, pharmacology and managerial science.</p>
                    </div>
                </div>
                <div class="container col-lg-6 col-md-6 col-xs-12">
                    <div class="row">
                        <img class="img-responsive" src="{{asset('img/sysu-2.jpg')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Venue -->

    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="container col-lg-6 col-md-6 col-xs-12">
                    <div class="row">
                        <img class="img-responsive" src="{{asset('img/sysu-3.jpg')}}" alt="">
                    </div>
                </div>
                <div class="container col-lg-6 col-md-6 col-xs-12">
                    <div class="special-textbox">
                        <p class="text-justify venue-inner-content">The university's assets include the world's second fastest supercomputer Tianhe-2, which is valued at 2.4 billion yuan (CNY) (US$390 million). The university also has the largest affiliated hospital system in mainland China. The university’s Zhuhai Campus owns the largest teaching building in Asia measured by acreage.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Venue -->
    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="container col-lg-6 col-md-6 col-xs-12">
                    <div class="special-textbox">
                        <p class="text-justify venue-inner-content"> The university is ranked as one of the top universities in China by all the most influential and widely observed international university rankings, for example, #7 nationwide in Times Higher Education World University Rankings 2015, #6 nationwide in the Academic Ranking of World Universities 2015, and #8 nationwide in U.S. News Global University Ranking 2015. </p>
                    </div>
                </div>
                <div class="container col-lg-6 col-md-6 col-xs-12">
                    <div class="row">
                        <img class="img-responsive" src="{{asset('img/sysu-4.jpg')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Google Map Location of HKU-->
    <section id="venue-sysu">
        <div class="col-lg-12 venue-map-text">
            <h2 class="text-center uppercase">How to go?</h2>
        </div>
        <iframe width="100%" height="450" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJd6HpmFr_AjQR4RmEV0IKF2c&key=AIzaSyBotNvuDbXl1jDXJ4RWeXiSCWfH6OlFAus" allowfullscreen></iframe>

    </section>
    <!-- End of Google Map Location Section-->

@endsection