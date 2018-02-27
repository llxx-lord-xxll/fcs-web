@extends('layouts.main')

@section('title')
    Workshop
    @endsection


@section('page-content')

    <!-- PRELOADING -->
    <div id="preload">
        <div class="preload">
            <div class="spinner"></div>
        </div>
    </div>

    <!-- NAVIGATION -->
    <nav id="nav-primary" class="navbar navbar-custom" role="navigation">
        <div class="container">

            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#nav">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="index.html"><img src="img/logo.png" alt="logo"></a>
            </div>

            <div class="collapse navbar-collapse" id="nav">
                <ul class="nav navbar-nav navbar-right uppercase">
                    <li><a data-toggle="elementscroll" href="#info">About</a></li>
                    <li><a data-toggle="elementscroll" href="#speakers">Speakers</a></li>
                    <li><a data-toggle="elementscroll" href="#program">Program</a></li>
                    <li><a data-toggle="elementscroll" href="#venue">Venue</a></li>
                    <li><a data-toggle="elementscroll" href="#register">Register</a></li>
                    <li><a data-toggle="elementscroll" href="#gallery">Gallery</a></li>
                    <li><a data-toggle="elementscroll" href="#sponsors">Sponsors</a></li>
                    <li><a data-toggle="elementscroll" href="#footer">Contact</a></li>
                </ul>
            </div>

        </div>
    </nav>

    <!-- PAGE HEADER SECTION-->
    <div class="bg-image-workshop">
        <div class="container-fluid">
            <h1 class="header-style">workshop</h1>
        </div>
    </div>

    <!-- TOPICS HEADING TEASER -->
    <section class="ga-background">
        <div class="container-fluid">
            <div class="row">
                <div class="container special-textbox col-lg-12 col-md-12 col-xs-12">
                    <p class="text-center conference-topic-content">FCS2018 is a year of leap with faith. We are gathering over 250 young entrepreneurs, government leaders and scholars. <br>We come together to discuss, debate and present the solutions that make our cities better. Workshop is a session that <br> sharpens our mindset and framework of thinkings, for better project development and implementation.  </p>
                    <h2 class="text-justify workshop-heading">Workshop covers:</h2>
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
                        <ol class="workshop-outer-list">
                            <li> <h3>Best Practice and Learnings of PPP Projects</h3>
                                <ul class="workshop-inner-list">
                                    <li><i class="fa fa-minus" aria-hidden="true"></i>  Investment Models and Term sheets</li>
                                    <li><i class="fa fa-minus" aria-hidden="true"></i>  Impact Measurement </li>
                                    <li><i class="fa fa-minus" aria-hidden="true"></i>  Model of Implementation with All Stakeholders</li>
                                </ul>
                            </li>
                            <li> <h3>Marketisation of Opportunity | City Level</h3>
                                <ul class="workshop-inner-list">
                                    <li><i class="fa fa-minus" aria-hidden="true"></i>  Commercialisation of Social Issues and Challenges</li>
                                    <li><i class="fa fa-minus" aria-hidden="true"></i>  Collaboration and Information Sources</li>
                                    <li><i class="fa fa-minus" aria-hidden="true"></i>  Methods of Market Verification</li>
                                </ul>
                            </li>
                        </ol>
                    </div>
                </div>
                <div class="container col-lg-6 col-md-6 col-xs-12">
                    <div class="row">
                        <div id="workshop-first-slider" class="fcs-img-form-slider">
                            <img class="fcs-form-slider-photo" src="img/workshop-1.jpg" alt="">
                            <img class="fcs-form-slider-photo" src="img/workshop-2.jpg" alt="">
                            <img class="fcs-form-slider-photo" src="img/workshop-3.jpg" alt="">
                        </div>
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
                        <div id="workshop-second-slider" class="fcs-img-form-slider">
                            <img class="fcs-form-slider-photo" src="img/workshop-4.jpg" alt="">
                            <img class="fcs-form-slider-photo" src="img/workshop-5.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="container col-lg-6 col-md-6 col-xs-12 special-content">
                    <div class="special-textbox">
                        <ol class="workshop-outer-list">
                            <li><h3>Fund-Raising and Investment Deck Learnings</h3>
                                <ul class="workshop-inner-list">
                                    <li><i class="fa fa-minus" aria-hidden="true"></i>  Fund Raising and Investment Sources for PPPs</li>
                                    <li><i class="fa fa-minus" aria-hidden="true"></i>  Betterment of Investment Deck for Global Funders</li>
                                    <li><i class="fa fa-minus" aria-hidden="true"></i>  Breakthrough Opportunity for Investment Led by Government</li>
                                </ul>
                            </li>
                            <li><h3>Project Governance, Sustainability and Compliance</h3>
                                <ul class="workshop-inner-list">
                                    <li><i class="fa fa-minus" aria-hidden="true"></i>  Project Leadership Structure </li>
                                    <li><i class="fa fa-minus" aria-hidden="true"></i>  Thinking of Project Spinning Off and Sustainability </li>
                                    <li><i class="fa fa-minus" aria-hidden="true"></i>  Compliance of Project to be Funded and Invested</li>
                                </ul>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Full Width Section-->
    <section class="ga-background">
        <div class="container-fluid">
            <div class="row">
                <div class="container special-textbox col-lg-12 col-md-12 col-xs-12">
                    <p class="text-center conference-topic-content">With a stronger framework of project advisory, FCS is also developing avenue for project-sourcing and match-making with impact investors and funders in Hong Kong and mainland China, welcoming all friends and stakeholders to reach us for more details. </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Hackathon Gallery -->


    <!-- End of Hackathon Gallery -->
@endsection

