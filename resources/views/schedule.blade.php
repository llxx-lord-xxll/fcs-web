@extends('layouts.main')

@section('title')
    Schedule
    @endsection


@section('page-content')

    <!-- PAGE HEADER SECTION-->
    <div class="bg-image-schedule">
        <div class="container-fluid">
            <h1 class="header-style">Schedule</h1>
        </div>
    </div>

    <!-- PROGRAM -->
    <section id="program">
        <div class="container">
            <div class="row">

                <div class="col-lg-12">

                    <h2 class="uppercase">Schedule</h2>


                    <!-- SCHEDULE TAB -->
                    <ul id="myTab" class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#day1" id="day1-tab" role="tab" data-toggle="tab" aria-controls="day1" aria-expanded="true">Day 0</a></li>
                        <li role="presentation" class=""><a href="#day2" role="tab" id="day2-tab" data-toggle="tab" aria-controls="day2" aria-expanded="false">Day 1</a></li>
                        <li role="presentation" class=""><a href="#day3" role="tab" id="day3-tab" data-toggle="tab" aria-controls="day3" aria-expanded="false">Day 2</a></li>
                        <li role="presentation" class=""><a href="#day4" role="tab" id="day4-tab" data-toggle="tab" aria-controls="day4" aria-expanded="false">Day 3</a></li>
                        <li role="presentation" class=""><a href="#day5" role="tab" id="day5-tab" data-toggle="tab" aria-controls="day5" aria-expanded="false">Day 4</a></li>
                        <li role="presentation" class=""><a href="#day6" role="tab" id="day6-tab" data-toggle="tab" aria-controls="day6" aria-expanded="false">Day 5</a></li>
                    </ul>

                    <!-- CONTENT -->
                    <div id="myTabContent" class="tab-content">

                        <!-- DAY 1 -->
                        <div role="tabpanel" class="tab-pane fade active in" id="day1" aria-labelledby="day1-tab">
                            <div class="panel-group" id="accordion1" role="tablist" aria-multiselectable="true">

                                <!-- PROGRAM 1-->
                                <div class="panel panel-default">

                                    <!-- Program Heading -->
                                    <div class="panel-heading" role="tab" id="heading1">

                                        <div class="row">
                                            <div class="col-lg-1 col-md-1 col-sm-1">
                                                <p class="date">Whole Day</p>
                                            </div>

                                            <div class="col-lg-11 col-md-11 col-sm-11">

                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordion" href="#Program1" aria-expanded="true" aria-controls="Program1">
                                                        Arrival to Hong Kong and Settle in Accommodation
                                                    </a>
                                                </h4>
                                            </div>
                                        </div>

                                    </div>

                                    <div id="Program1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading1">
                                        <!-- Program Content -->
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-lg-9 col-lg-offset-1 col-md-9 col-sm-12">
                                                    <h4>Arrival to Hong Kong and Settle in Accommodation</h4>
                                                    <div>
                                                        <p><i class="fa fa-lg fa-clock-o"></i> <span class="small">Whole Day</span></p>
                                                        <p><i class="fa fa-lg fa-map-marker"></i> <span class="small">HKU </span></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- End of Day 1-->
                        <!-- Day 2-->
                        <div role="tabpanel" class="tab-pane fade active in" id="day2" aria-labelledby="day2-tab">
                            <div class="panel-group" id="accordion2" role="tablist" aria-multiselectable="true">
                                <!-- PROGRAM 2-->
                                <div class="panel panel-default">

                                    <!-- Program Heading -->
                                    <div class="panel-heading" role="tab" id="heading2">

                                        <div class="row">
                                            <div class="col-lg-1 col-md-1 col-sm-1">
                                                <p class="date">10.30</p>
                                            </div>

                                            <div class="col-lg-11 col-md-11 col-sm-11">

                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordion" href="#Program2" aria-expanded="true" aria-controls="Program2">
                                                        Opening Ceremony
                                                    </a>
                                                </h4>
                                            </div>
                                        </div>

                                    </div>

                                    <div id="Program2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading2">
                                        <!-- Program Content -->
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-lg-9 col-lg-offset-1 col-md-9 col-sm-12">
                                                    <h4>Opening Ceremony</h4>
                                                    <div>
                                                        <p><i class="fa fa-lg fa-clock-o"></i> <span class="small">10:30 - 11:30</span></p>
                                                        <p><i class="fa fa-lg fa-map-marker"></i> <span class="small">Cyberport Hong Kong </span></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                </div>


                                <!-- PROGRAM 3-->
                                <div class="panel panel-default">

                                    <!-- Program Heading -->
                                    <div class="panel-heading" role="tab" id="heading3">

                                        <div class="row">
                                            <div class="col-lg-1 col-md-1 col-sm-1">
                                                <p class="date">11.30</p>
                                            </div>

                                            <div class="col-lg-11 col-md-11 col-sm-11">

                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordion" href="#Program3" aria-expanded="true" aria-controls="Program3">
                                                        Keynote Speaking
                                                    </a>
                                                </h4>
                                            </div>
                                        </div>

                                    </div>

                                    <div id="Program3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading3">
                                        <!-- Program Content -->
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-lg-9 col-lg-offset-1 col-md-9 col-sm-12">
                                                    <h4>Keynote Speaking</h4>


                                                    <div class="col-lg-3 col-md-2 col-xs-6">
                                                        <img class="img-responsive program-speaker" src="{{asset('img/update-speaker.jpg')}}" alt="">
                                                        <h6>Updated Later</h6>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-xs-6">
                                                        <img class="img-responsive program-speaker" src="{{asset('img/update-speaker.jpg')}}" alt="">
                                                        <h6>Updated Later</h6>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-xs-6">
                                                        <img class="img-responsive program-speaker" src="{{asset('img/update-speaker.jpg')}}" alt="">
                                                        <h6>Updated Later</h6>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-xs-6">
                                                        <img class="img-responsive program-speaker" src="{{asset('img/update-speaker.jpg')}}" alt="">
                                                        <h6>Updated Later</h6>
                                                    </div>
                                                    <div>
                                                        <p><i class="fa fa-lg fa-clock-o"></i> <span class="small">11:30 - 12:30</span></p>
                                                        <p><i class="fa fa-lg fa-map-marker"></i> <span class="small">Cyberport, HK</span></p>
                                                    </div>
                                                </div>

                                                <div class="col-lg-2 col-md-2 col-xs-6 fcs-moderator">
                                                    <img class="img-responsive program-speaker" src="{{asset('img/update-speaker.jpg')}}" alt="">
                                                    <p><span>Moderator</span></p>
                                                    <h5>Will be updated later</h5>
                                                    <span class="about-speaker"><i class="fa fa-lg fa-globe"></i> <a class="small" href="#">futurecitysummit.org</a></span>
                                                </div>

                                            </div>
                                        </div>

                                    </div>

                                </div>

                                <!-- PROGRAM 4-->
                                <div class="panel panel-default">

                                    <!-- Program Heading -->
                                    <div class="panel-heading" role="tab" id="heading4">

                                        <div class="row">
                                            <div class="col-lg-1 col-md-1 col-sm-1">
                                                <p class="date">14.30</p>
                                            </div>

                                            <div class="col-lg-11 col-md-11 col-sm-11">

                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordion" href="#Program4" aria-expanded="true" aria-controls="Program4">
                                                        Panel Discussion I
                                                    </a>
                                                </h4>
                                            </div>
                                        </div>

                                    </div>

                                    <div id="Program4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading4">
                                        <!-- Program Content -->
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-lg-9 col-lg-offset-1 col-md-9 col-sm-12">
                                                    <h4>Panel Discussion I : Entrepreneurship For All</h4>


                                                    <div class="col-lg-3 col-md-2 col-xs-6">
                                                        <img class="img-responsive program-speaker" src="{{asset('img/update-speaker.jpg')}}" alt="">
                                                        <h6>Updated Later</h6>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-xs-6">
                                                        <img class="img-responsive program-speaker" src="{{asset('img/update-speaker.jpg')}}" alt="">
                                                        <h6>Updated Later</h6>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-xs-6">
                                                        <img class="img-responsive program-speaker" src="{{asset('img/update-speaker.jpg')}}" alt="">
                                                        <h6>Updated Later</h6>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-xs-6">
                                                        <img class="img-responsive program-speaker" src="{{asset('img/update-speaker.jpg')}}" alt="">
                                                        <h6>Updated Later</h6>
                                                    </div>
                                                    <div>
                                                        <p><i class="fa fa-lg fa-clock-o"></i> <span class="small">14:30 - 15:30</span></p>
                                                        <p><i class="fa fa-lg fa-map-marker"></i> <span class="small">Centennial Campus, HKU</span></p>
                                                    </div>
                                                </div>

                                                <div class="col-lg-2 col-md-2 col-xs-6 fcs-moderator">
                                                    <img class="img-responsive program-speaker" src="{{asset('img/update-speaker.jpg')}}" alt="">
                                                    <p><span>Moderator</span></p>
                                                    <h5>Will be updated later</h5>
                                                    <span class="about-speaker"><i class="fa fa-lg fa-globe"></i> <a class="small" href="#">futurecitysummit.org</a></span>
                                                </div>

                                            </div>
                                        </div>
                                        <!-- End of Panel Discussion One-->
                                        <hr>
                                        <!-- Second Panel Discussion-->
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-lg-9 col-lg-offset-1 col-md-9 col-sm-12">
                                                    <h4>Panel Discussion I : Technology For Future </h4>


                                                    <div class="col-lg-3 col-md-2 col-xs-6">
                                                        <img class="img-responsive program-speaker" src="{{asset('img/update-speaker.jpg')}}" alt="">
                                                        <h6>Updated Later</h6>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-xs-6">
                                                        <img class="img-responsive program-speaker" src="{{asset('img/update-speaker.jpg')}}" alt="">
                                                        <h6>Updated Later</h6>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-xs-6">
                                                        <img class="img-responsive program-speaker" src="{{asset('img/update-speaker.jpg')}}" alt="">
                                                        <h6>Updated Later</h6>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-xs-6">
                                                        <img class="img-responsive program-speaker" src="{{asset('img/update-speaker.jpg')}}" alt="">
                                                        <h6>Updated Later</h6>
                                                    </div>
                                                    <div>
                                                        <p><i class="fa fa-lg fa-clock-o"></i> <span class="small">14:30 - 15:30</span></p>
                                                        <p><i class="fa fa-lg fa-map-marker"></i> <span class="small">Centennial Campus, HKU</span></p>
                                                    </div>
                                                </div>

                                                <div class="col-lg-2 col-md-2 col-xs-6 fcs-moderator">
                                                    <img class="img-responsive program-speaker" src="{{asset('img/update-speaker.jpg')}}" alt="">
                                                    <p><span>Moderator</span></p>
                                                    <h5>Will be updated later</h5>
                                                    <span class="about-speaker"><i class="fa fa-lg fa-globe"></i> <a class="small" href="#">futurecitysummit.org</a></span>
                                                </div>

                                            </div>
                                        </div>

                                        <!-- End of Second Panel-->
                                        <hr>
                                        <!-- Third Panel Discussion-->
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-lg-9 col-lg-offset-1 col-md-9 col-sm-12">
                                                    <h4>Panel Discussion I : Global Development and Resilience </h4>


                                                    <div class="col-lg-3 col-md-2 col-xs-6">
                                                        <img class="img-responsive program-speaker" src="{{asset('img/update-speaker.jpg')}}" alt="">
                                                        <h6>Updated Later</h6>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-xs-6">
                                                        <img class="img-responsive program-speaker" src="{{asset('img/update-speaker.jpg')}}" alt="">
                                                        <h6>Updated Later</h6>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-xs-6">
                                                        <img class="img-responsive program-speaker" src="{{asset('img/update-speaker.jpg')}}" alt="">
                                                        <h6>Updated Later</h6>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-xs-6">
                                                        <img class="img-responsive program-speaker" src="{{asset('img/update-speaker.jpg')}}" alt="">
                                                        <h6>Updated Later</h6>
                                                    </div>
                                                    <div>
                                                        <p><i class="fa fa-lg fa-clock-o"></i> <span class="small">14:30 - 15:30</span></p>
                                                        <p><i class="fa fa-lg fa-map-marker"></i> <span class="small">Centennial Campus, HKU</span></p>
                                                    </div>
                                                </div>

                                                <div class="col-lg-2 col-md-2 col-xs-6 fcs-moderator">
                                                    <img class="img-responsive program-speaker" src="{{asset('img/update-speaker.jpg')}}" alt="">
                                                    <p><span>Moderator</span></p>
                                                    <h5>Will be updated later</h5>
                                                    <span class="about-speaker"><i class="fa fa-lg fa-globe"></i> <a class="small" href="#">futurecitysummit.org</a></span>
                                                </div>

                                            </div>
                                        </div>
                                        <!-- End of Thirds Panel-->
                                        <hr>
                                        <!-- Fourth Panel Discussion-->
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-lg-9 col-lg-offset-1 col-md-9 col-sm-12">
                                                    <h4>Panel Discussion I: Arts, Entertainment and Living</h4>


                                                    <div class="col-lg-3 col-md-2 col-xs-6">
                                                        <img class="img-responsive program-speaker" src="{{asset('img/update-speaker.jpg')}}" alt="">
                                                        <h6>Updated Later</h6>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-xs-6">
                                                        <img class="img-responsive program-speaker" src="{{asset('img/update-speaker.jpg')}}" alt="">
                                                        <h6>Updated Later</h6>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-xs-6">
                                                        <img class="img-responsive program-speaker" src="{{asset('img/update-speaker.jpg')}}" alt="">
                                                        <h6>Updated Later</h6>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-xs-6">
                                                        <img class="img-responsive program-speaker" src="{{asset('img/update-speaker.jpg')}}" alt="">
                                                        <h6>Updated Later</h6>
                                                    </div>
                                                    <div>
                                                        <p><i class="fa fa-lg fa-clock-o"></i> <span class="small">14:30 - 15:30</span></p>
                                                        <p><i class="fa fa-lg fa-map-marker"></i> <span class="small">Centennial Campus, HKU</span></p>
                                                    </div>
                                                </div>

                                                <div class="col-lg-2 col-md-2 col-xs-6 fcs-moderator">
                                                    <img class="img-responsive program-speaker" src="{{asset('img/update-speaker.jpg')}}" alt="">
                                                    <p><span>Moderator</span></p>
                                                    <h5>Will be updated later</h5>
                                                    <span class="about-speaker"><i class="fa fa-lg fa-globe"></i> <a class="small" href="#">futurecitysummit.org</a></span>
                                                </div>

                                            </div>
                                        </div>
                                        <!-- End of Fourth Panel-->
                                        <hr>
                                        <!-- Fifth Panel Discussion-->
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-lg-9 col-lg-offset-1 col-md-9 col-sm-12">
                                                    <h4>Panel Discussion I: Space and Extraterrestrial</h4>


                                                    <div class="col-lg-3 col-md-2 col-xs-6">
                                                        <img class="img-responsive program-speaker" src="{{asset('img/update-speaker.jpg')}}" alt="">
                                                        <h6>Updated Later</h6>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-xs-6">
                                                        <img class="img-responsive program-speaker" src="{{asset('img/update-speaker.jpg')}}" alt="">
                                                        <h6>Updated Later</h6>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-xs-6">
                                                        <img class="img-responsive program-speaker" src="{{asset('img/update-speaker.jpg')}}" alt="">
                                                        <h6>Updated Later</h6>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-xs-6">
                                                        <img class="img-responsive program-speaker" src="{{asset('img/update-speaker.jpg')}}" alt="">
                                                        <h6>Updated Later</h6>
                                                    </div>
                                                    <div>
                                                        <p><i class="fa fa-lg fa-clock-o"></i> <span class="small">14:30 - 15:30</span></p>
                                                        <p><i class="fa fa-lg fa-map-marker"></i> <span class="small">Centennial Campus, HKU</span></p>
                                                    </div>
                                                </div>

                                                <div class="col-lg-2 col-md-2 col-xs-6 fcs-moderator">
                                                    <img class="img-responsive program-speaker" src="{{asset('img/update-speaker.jpg')}}" alt="">
                                                    <p><span>Moderator</span></p>
                                                    <h5>Will be updated later</h5>
                                                    <span class="about-speaker"><i class="fa fa-lg fa-globe"></i> <a class="small" href="#">futurecitysummit.org</a></span>
                                                </div>

                                            </div>
                                        </div>
                                        <!-- End of Fifth Panel-->
                                        <hr>
                                        <!-- Sixth Panel Discussion-->
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-lg-9 col-lg-offset-1 col-md-9 col-sm-12">
                                                    <h4>Panel Discussion I: The Earth, Urban and Energy</h4>


                                                    <div class="col-lg-3 col-md-2 col-xs-6">
                                                        <img class="img-responsive program-speaker" src="{{asset('img/update-speaker.jpg')}}" alt="">
                                                        <h6>Updated Later</h6>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-xs-6">
                                                        <img class="img-responsive program-speaker" src="{{asset('img/update-speaker.jpg')}}" alt="">
                                                        <h6>Updated Later</h6>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-xs-6">
                                                        <img class="img-responsive program-speaker" src="{{asset('img/update-speaker.jpg')}}" alt="">
                                                        <h6>Updated Later</h6>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-xs-6">
                                                        <img class="img-responsive program-speaker" src="{{asset('img/update-speaker.jpg')}}" alt="">
                                                        <h6>Updated Later</h6>
                                                    </div>
                                                    <div>
                                                        <p><i class="fa fa-lg fa-clock-o"></i> <span class="small">14:30 - 15:30</span></p>
                                                        <p><i class="fa fa-lg fa-map-marker"></i> <span class="small">Centennial Campus, HKU</span></p>
                                                    </div>
                                                </div>

                                                <div class="col-lg-2 col-md-2 col-xs-6 fcs-moderator">
                                                    <img class="img-responsive program-speaker" src="{{asset('img/update-speaker.jpg')}}" alt="">
                                                    <p><span>Moderator</span></p>
                                                    <h5>Will be updated later</h5>
                                                    <span class="about-speaker"><i class="fa fa-lg fa-globe"></i> <a class="small" href="#">futurecitysummit.org</a></span>
                                                </div>

                                            </div>
                                        </div>
                                        <!-- End of Sixth Panel-->
                                    </div>

                                </div>

                                <!-- PROGRAM 5-->
                                <div class="panel panel-default">

                                    <!-- Program Heading -->
                                    <div class="panel-heading" role="tab" id="heading5">

                                        <div class="row">
                                            <div class="col-lg-1 col-md-1 col-sm-1">
                                                <p class="date">15.50</p>
                                            </div>

                                            <div class="col-lg-11 col-md-11 col-sm-11">

                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordion" href="#Program5" aria-expanded="true" aria-controls="Program5">
                                                        Workshop Session I
                                                    </a>
                                                </h4>
                                            </div>
                                        </div>

                                    </div>

                                    <div id="Program5" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading5">
                                        <!-- Program Content -->
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-lg-9 col-lg-offset-1 col-md-9 col-sm-12">
                                                    <h4>Workshop Session I</h4>


                                                    <div class="col-lg-3 col-md-2 col-xs-6">
                                                        <img class="img-responsive program-speaker" src="{{asset('img/update-speaker.jpg')}}" alt="">
                                                        <h6>Updated Later</h6>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-xs-6">
                                                        <img class="img-responsive program-speaker" src="{{asset('img/update-speaker.jpg')}}" alt="">
                                                        <h6>Updated Later</h6>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-xs-6">
                                                        <img class="img-responsive program-speaker" src="{{asset('img/update-speaker.jpg')}}" alt="">
                                                        <h6>Updated Later</h6>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-xs-6">
                                                        <img class="img-responsive program-speaker" src="{{asset('img/update-speaker.jpg')}}" alt="">
                                                        <h6>Updated Later</h6>
                                                    </div>
                                                    <div>
                                                        <p><i class="fa fa-lg fa-clock-o"></i> <span class="small">15:50 - 17:00</span></p>
                                                        <p><i class="fa fa-lg fa-map-marker"></i> <span class="small">Centennial Campus, HKU</span></p>
                                                    </div>
                                                </div>

                                                <div class="col-lg-2 col-md-2 col-xs-6 fcs-moderator">
                                                    <img class="img-responsive program-speaker" src="{{asset('img/update-speaker.jpg')}}" alt="">
                                                    <p><span>Moderator</span></p>
                                                    <h5>Will be updated later</h5>
                                                    <span class="about-speaker"><i class="fa fa-lg fa-globe"></i> <a class="small" href="#">futurecitysummit.org</a></span>
                                                </div>

                                            </div>
                                        </div>

                                    </div>

                                </div>
                                <!-- PROGRAM 6-->
                                <div class="panel panel-default">

                                    <!-- Program Heading -->
                                    <div class="panel-heading" role="tab" id="heading6">

                                        <div class="row">
                                            <div class="col-lg-1 col-md-1 col-sm-1">
                                                <p class="date">18:30</p>
                                            </div>

                                            <div class="col-lg-11 col-md-11 col-sm-11">

                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordion" href="#Program6" aria-expanded="true" aria-controls="Program6">
                                                        High Table Dinner
                                                    </a>
                                                </h4>
                                            </div>
                                        </div>

                                    </div>

                                    <div id="Program6" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading6">
                                        <!-- Program Content -->
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-lg-9 col-lg-offset-1 col-md-9 col-sm-12">
                                                    <h4> High Table Dinner</h4>
                                                    <div>
                                                        <p><i class="fa fa-lg fa-clock-o"></i> <span class="small">18:30 - 20:30</span></p>
                                                        <p><i class="fa fa-lg fa-map-marker"></i> <span class="small">St. Johns College</span></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                                <!-- End of Days Program-->
                            </div>
                        </div>
                        <!-- End of Day 2-->
                        <!-- Day 3-->
                        <div role="tabpanel" class="tab-pane fade in" id="day3" aria-labelledby="day3-tab">
                            <div class="panel-group" id="accordion3" role="tablist" aria-multiselectable="true">
                                <!-- PROGRAM 7-->
                                <div class="panel panel-default">

                                    <!-- Program Heading -->
                                    <div class="panel-heading" role="tab" id="heading7">

                                        <div class="row">
                                            <div class="col-lg-1 col-md-1 col-sm-1">
                                                <p class="date">09.30</p>
                                            </div>

                                            <div class="col-lg-11 col-md-11 col-sm-11">

                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordion" href="#Program7" aria-expanded="true" aria-controls="Program7">
                                                        Keynote Speaking
                                                    </a>
                                                </h4>
                                            </div>
                                        </div>

                                    </div>

                                    <div id="Program7" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading7">
                                        <!-- Program Content -->
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-lg-9 col-lg-offset-1 col-md-9 col-sm-12">
                                                    <h4> Keynote Speaking</h4>


                                                    <div class="col-lg-3 col-md-2 col-xs-6">
                                                        <img class="img-responsive program-speaker" src="{{asset('img/update-speaker.jpg')}}" alt="">
                                                        <h6>Updated Later</h6>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-xs-6">
                                                        <img class="img-responsive program-speaker" src="{{asset('img/update-speaker.jpg')}}" alt="">
                                                        <h6>Updated Later</h6>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-xs-6">
                                                        <img class="img-responsive program-speaker" src="{{asset('img/update-speaker.jpg')}}" alt="">
                                                        <h6>Updated Later</h6>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-xs-6">
                                                        <img class="img-responsive program-speaker" src="{{asset('img/update-speaker.jpg')}}" alt="">
                                                        <h6>Updated Later</h6>
                                                    </div>
                                                    <div>
                                                        <p><i class="fa fa-lg fa-clock-o"></i> <span class="small">9:30 - 11:00</span></p>
                                                        <p><i class="fa fa-lg fa-map-marker"></i> <span class="small">Centennial Campus, HKU</span></p>
                                                    </div>
                                                </div>

                                                <div class="col-lg-2 col-md-2 col-xs-6 fcs-moderator">
                                                    <img class="img-responsive program-speaker" src="{{asset('img/update-speaker.jpg')}}" alt="">
                                                    <p><span>Moderator</span></p>
                                                    <h5>Will be updated later</h5>
                                                    <span class="about-speaker"><i class="fa fa-lg fa-globe"></i> <a class="small" href="#">futurecitysummit.org</a></span>
                                                </div>

                                            </div>
                                        </div>

                                    </div>

                                </div>

                                <!-- PROGRAM 8-->
                                <div class="panel panel-default">

                                    <!-- Program Heading -->
                                    <div class="panel-heading" role="tab" id="heading8">

                                        <div class="row">
                                            <div class="col-lg-1 col-md-1 col-sm-1">
                                                <p class="date">11.30</p>
                                            </div>

                                            <div class="col-lg-11 col-md-11 col-sm-11">

                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordion" href="#Program8" aria-expanded="true" aria-controls="Program8">
                                                        Panel Discussion II
                                                    </a>
                                                </h4>
                                            </div>
                                        </div>

                                    </div>

                                    <div id="Program8" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading8">
                                        <!-- Program Content -->
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-lg-9 col-lg-offset-1 col-md-9 col-sm-12">
                                                    <h4>Panel Discussion II : Entrepreneurship For All</h4>


                                                    <div class="col-lg-3 col-md-2 col-xs-6">
                                                        <img class="img-responsive program-speaker" src="{{asset('img/update-speaker.jpg')}}" alt="">
                                                        <h6>Updated Later</h6>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-xs-6">
                                                        <img class="img-responsive program-speaker" src="{{asset('img/update-speaker.jpg')}}" alt="">
                                                        <h6>Updated Later</h6>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-xs-6">
                                                        <img class="img-responsive program-speaker" src="{{asset('img/update-speaker.jpg')}}" alt="">
                                                        <h6>Updated Later</h6>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-xs-6">
                                                        <img class="img-responsive program-speaker" src="{{asset('img/update-speaker.jpg')}}" alt="">
                                                        <h6>Updated Later</h6>
                                                    </div>
                                                    <div>
                                                        <p><i class="fa fa-lg fa-clock-o"></i> <span class="small">11:30 - 12:30</span></p>
                                                        <p><i class="fa fa-lg fa-map-marker"></i> <span class="small">Centennial Campus, HKU</span></p>
                                                    </div>
                                                </div>

                                                <div class="col-lg-2 col-md-2 col-xs-6 fcs-moderator">
                                                    <img class="img-responsive program-speaker" src="{{asset('img/update-speaker.jpg')}}" alt="">
                                                    <p><span>Moderator</span></p>
                                                    <h5>Will be updated later</h5>
                                                    <span class="about-speaker"><i class="fa fa-lg fa-globe"></i> <a class="small" href="#">futurecitysummit.org</a></span>
                                                </div>

                                            </div>
                                        </div>
                                        <!-- End of Panel Discussion One-->
                                        <hr>
                                        <!-- Second Panel Discussion-->
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-lg-9 col-lg-offset-1 col-md-9 col-sm-12">
                                                    <h4>Panel Discussion II : Technology For Future </h4>


                                                    <div class="col-lg-3 col-md-2 col-xs-6">
                                                        <img class="img-responsive program-speaker" src="{{asset('img/update-speaker.jpg')}}" alt="">
                                                        <h6>Updated Later</h6>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-xs-6">
                                                        <img class="img-responsive program-speaker" src="{{asset('img/update-speaker.jpg')}}" alt="">
                                                        <h6>Updated Later</h6>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-xs-6">
                                                        <img class="img-responsive program-speaker" src="{{asset('img/update-speaker.jpg')}}" alt="">
                                                        <h6>Updated Later</h6>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-xs-6">
                                                        <img class="img-responsive program-speaker" src="{{asset('img/update-speaker.jpg')}}" alt="">
                                                        <h6>Updated Later</h6>
                                                    </div>
                                                    <div>
                                                        <p><i class="fa fa-lg fa-clock-o"></i> <span class="small">11:30 - 12:30</span></p>
                                                        <p><i class="fa fa-lg fa-map-marker"></i> <span class="small">Centennial Campus, HKU</span></p>
                                                    </div>
                                                </div>

                                                <div class="col-lg-2 col-md-2 col-xs-6 fcs-moderator">
                                                    <img class="img-responsive program-speaker" src="{{asset('img/update-speaker.jpg')}}" alt="">
                                                    <p><span>Moderator</span></p>
                                                    <h5>Will be updated later</h5>
                                                    <span class="about-speaker"><i class="fa fa-lg fa-globe"></i> <a class="small" href="#">futurecitysummit.org</a></span>
                                                </div>

                                            </div>
                                        </div>

                                        <!-- End of Second Panel-->
                                        <hr>
                                        <!-- Third Panel Discussion-->
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-lg-9 col-lg-offset-1 col-md-9 col-sm-12">
                                                    <h4>Panel Discussion II : Global Development and Resilience </h4>


                                                    <div class="col-lg-3 col-md-2 col-xs-6">
                                                        <img class="img-responsive program-speaker" src="{{asset('img/update-speaker.jpg')}}" alt="">
                                                        <h6>Updated Later</h6>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-xs-6">
                                                        <img class="img-responsive program-speaker" src="{{asset('img/update-speaker.jpg')}}" alt="">
                                                        <h6>Updated Later</h6>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-xs-6">
                                                        <img class="img-responsive program-speaker" src="{{asset('img/update-speaker.jpg')}}" alt="">
                                                        <h6>Updated Later</h6>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-xs-6">
                                                        <img class="img-responsive program-speaker" src="{{asset('img/update-speaker.jpg')}}" alt="">
                                                        <h6>Updated Later</h6>
                                                    </div>
                                                    <div>
                                                        <p><i class="fa fa-lg fa-clock-o"></i> <span class="small">11:30 - 12:30</span></p>
                                                        <p><i class="fa fa-lg fa-map-marker"></i> <span class="small">Centennial Campus, HKU</span></p>
                                                    </div>
                                                </div>

                                                <div class="col-lg-2 col-md-2 col-xs-6 fcs-moderator">
                                                    <img class="img-responsive program-speaker" src="{{asset('img/update-speaker.jpg')}}" alt="">
                                                    <p><span>Moderator</span></p>
                                                    <h5>Will be updated later</h5>
                                                    <span class="about-speaker"><i class="fa fa-lg fa-globe"></i> <a class="small" href="#">futurecitysummit.org</a></span>
                                                </div>

                                            </div>
                                        </div>
                                        <!-- End of Thirds Panel-->
                                        <hr>
                                        <!-- Fourth Panel Discussion-->
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-lg-9 col-lg-offset-1 col-md-9 col-sm-12">
                                                    <h4>Panel Discussion II: Arts, Entertainment and Living</h4>


                                                    <div class="col-lg-3 col-md-2 col-xs-6">
                                                        <img class="img-responsive program-speaker" src="{{asset('img/update-speaker.jpg')}}" alt="">
                                                        <h6>Updated Later</h6>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-xs-6">
                                                        <img class="img-responsive program-speaker" src="{{asset('img/update-speaker.jpg')}}" alt="">
                                                        <h6>Updated Later</h6>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-xs-6">
                                                        <img class="img-responsive program-speaker" src="{{asset('img/update-speaker.jpg')}}" alt="">
                                                        <h6>Updated Later</h6>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-xs-6">
                                                        <img class="img-responsive program-speaker" src="{{asset('img/update-speaker.jpg')}}" alt="">
                                                        <h6>Updated Later</h6>
                                                    </div>
                                                    <div>
                                                        <p><i class="fa fa-lg fa-clock-o"></i> <span class="small">11:30 - 12:30</span></p>
                                                        <p><i class="fa fa-lg fa-map-marker"></i> <span class="small">Centennial Campus, HKU</span></p>
                                                    </div>
                                                </div>

                                                <div class="col-lg-2 col-md-2 col-xs-6 fcs-moderator">
                                                    <img class="img-responsive program-speaker" src="{{asset('img/update-speaker.jpg')}}" alt="">
                                                    <p><span>Moderator</span></p>
                                                    <h5>Will be updated later</h5>
                                                    <span class="about-speaker"><i class="fa fa-lg fa-globe"></i> <a class="small" href="#">futurecitysummit.org</a></span>
                                                </div>

                                            </div>
                                        </div>
                                        <!-- End of Fourth Panel-->
                                        <hr>
                                        <!-- Fifth Panel Discussion-->
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-lg-9 col-lg-offset-1 col-md-9 col-sm-12">
                                                    <h4>Panel Discussion II: Space and Extraterrestrial</h4>


                                                    <div class="col-lg-3 col-md-2 col-xs-6">
                                                        <img class="img-responsive program-speaker" src="{{asset('img/update-speaker.jpg')}}" alt="">
                                                        <h6>Updated Later</h6>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-xs-6">
                                                        <img class="img-responsive program-speaker" src="{{asset('img/update-speaker.jpg')}}" alt="">
                                                        <h6>Updated Later</h6>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-xs-6">
                                                        <img class="img-responsive program-speaker" src="{{asset('img/update-speaker.jpg')}}" alt="">
                                                        <h6>Updated Later</h6>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-xs-6">
                                                        <img class="img-responsive program-speaker" src="{{asset('img/update-speaker.jpg')}}" alt="">
                                                        <h6>Updated Later</h6>
                                                    </div>
                                                    <div>
                                                        <p><i class="fa fa-lg fa-clock-o"></i> <span class="small">11:30 - 12:30</span></p>
                                                        <p><i class="fa fa-lg fa-map-marker"></i> <span class="small">Centennial Campus, HKU</span></p>
                                                    </div>
                                                </div>

                                                <div class="col-lg-2 col-md-2 col-xs-6 fcs-moderator">
                                                    <img class="img-responsive program-speaker" src="{{asset('img/update-speaker.jpg')}}" alt="">
                                                    <p><span>Moderator</span></p>
                                                    <h5>Will be updated later</h5>
                                                    <span class="about-speaker"><i class="fa fa-lg fa-globe"></i> <a class="small" href="#">futurecitysummit.org</a></span>
                                                </div>

                                            </div>
                                        </div>
                                        <!-- End of Fifth Panel-->
                                        <hr>
                                        <!-- Sixth Panel Discussion-->
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-lg-9 col-lg-offset-1 col-md-9 col-sm-12">
                                                    <h4>Panel Discussion II: The Earth, Urban and Energy</h4>


                                                    <div class="col-lg-3 col-md-2 col-xs-6">
                                                        <img class="img-responsive program-speaker" src="{{asset('img/update-speaker.jpg')}}" alt="">
                                                        <h6>Updated Later</h6>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-xs-6">
                                                        <img class="img-responsive program-speaker" src="{{asset('img/update-speaker.jpg')}}" alt="">
                                                        <h6>Updated Later</h6>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-xs-6">
                                                        <img class="img-responsive program-speaker" src="{{asset('img/update-speaker.jpg')}}" alt="">
                                                        <h6>Updated Later</h6>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-xs-6">
                                                        <img class="img-responsive program-speaker" src="{{asset('img/update-speaker.jpg')}}" alt="">
                                                        <h6>Updated Later</h6>
                                                    </div>
                                                    <div>
                                                        <p><i class="fa fa-lg fa-clock-o"></i> <span class="small">11:30 - 12:30</span></p>
                                                        <p><i class="fa fa-lg fa-map-marker"></i> <span class="small">Centennial Campus, HKU</span></p>
                                                    </div>
                                                </div>

                                                <div class="col-lg-2 col-md-2 col-xs-6 fcs-moderator">
                                                    <img class="img-responsive program-speaker" src="{{asset('img/update-speaker.jpg')}}" alt="">
                                                    <p><span>Moderator</span></p>
                                                    <h5>Will be updated later</h5>
                                                    <span class="about-speaker"><i class="fa fa-lg fa-globe"></i> <a class="small" href="#">futurecitysummit.org</a></span>
                                                </div>

                                            </div>
                                        </div>
                                        <!-- End of Sixth Panel-->
                                        <!-- End of Program Content-->
                                    </div>

                                </div>

                                <!-- PROGRAM 9-->
                                <div class="panel panel-default">

                                    <!-- Program Heading -->
                                    <div class="panel-heading" role="tab" id="heading9">

                                        <div class="row">
                                            <div class="col-lg-1 col-md-1 col-sm-1">
                                                <p class="date">14:30</p>
                                            </div>

                                            <div class="col-lg-11 col-md-11 col-sm-11">

                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordion" href="#Program9" aria-expanded="true" aria-controls="Program9">
                                                        Workshop Session II
                                                    </a>
                                                </h4>
                                            </div>
                                        </div>

                                    </div>

                                    <div id="Program9" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading9">
                                        <!-- Program Content -->
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-lg-9 col-lg-offset-1 col-md-9 col-sm-12">
                                                    <h4>Workshop Session II</h4>


                                                    <div class="col-lg-3 col-md-2 col-xs-6">
                                                        <img class="img-responsive program-speaker" src="{{asset('img/update-speaker.jpg')}}" alt="">
                                                        <h6>Updated Later</h6>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-xs-6">
                                                        <img class="img-responsive program-speaker" src="{{asset('img/update-speaker.jpg')}}" alt="">
                                                        <h6>Updated Later</h6>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-xs-6">
                                                        <img class="img-responsive program-speaker" src="{{asset('img/update-speaker.jpg')}}" alt="">
                                                        <h6>Updated Later</h6>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-xs-6">
                                                        <img class="img-responsive program-speaker" src="{{asset('img/update-speaker.jpg')}}" alt="">
                                                        <h6>Updated Later</h6>
                                                    </div>
                                                    <div>
                                                        <p><i class="fa fa-lg fa-clock-o"></i> <span class="small">14:30 - 15:30</span></p>
                                                        <p><i class="fa fa-lg fa-map-marker"></i> <span class="small">Centennial Campus, HKU</span></p>
                                                    </div>
                                                </div>

                                                <div class="col-lg-2 col-md-2 col-xs-6 fcs-moderator">
                                                    <img class="img-responsive program-speaker" src="{{asset('img/update-speaker.jpg')}}" alt="">
                                                    <p><span>Moderator</span></p>
                                                    <h5>Will be updated later</h5>
                                                    <span class="about-speaker"><i class="fa fa-lg fa-globe"></i> <a class="small" href="#">futurecitysummit.org</a></span>
                                                </div>

                                            </div>
                                        </div>

                                    </div>

                                </div>

                                <!-- PROGRAM 10-->
                                <div class="panel panel-default">

                                    <!-- Program Heading -->
                                    <div class="panel-heading" role="tab" id="heading10">

                                        <div class="row">
                                            <div class="col-lg-1 col-md-1 col-sm-1">
                                                <p class="date">15:50</p>
                                            </div>

                                            <div class="col-lg-11 col-md-11 col-sm-11">

                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordion" href="#Program10" aria-expanded="true" aria-controls="Program10">
                                                        Hackathon Briefing
                                                    </a>
                                                </h4>
                                            </div>
                                        </div>

                                    </div>

                                    <div id="Program10" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading10">
                                        <!-- Program Content -->
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-lg-9 col-lg-offset-1 col-md-9 col-sm-12">
                                                    <h4> Hackathon Briefing </h4>
                                                    <div>
                                                        <p><i class="fa fa-lg fa-clock-o"></i> <span class="small">15:50 - 17:30</span></p>
                                                        <p><i class="fa fa-lg fa-map-marker"></i> <span class="small">Centennial Campus, HKU</span></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                </div>

                                <!-- PROGRAM 11-->
                                <div class="panel panel-default">

                                    <!-- Program Heading -->
                                    <div class="panel-heading" role="tab" id="heading11">

                                        <div class="row">
                                            <div class="col-lg-1 col-md-1 col-sm-1">
                                                <p class="date">18:30</p>
                                            </div>

                                            <div class="col-lg-11 col-md-11 col-sm-11">

                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordion" href="#Program11" aria-expanded="true" aria-controls="Program11">
                                                        Tram Welcome Party
                                                    </a>
                                                </h4>
                                            </div>
                                        </div>

                                    </div>

                                    <div id="Program11" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading11">
                                        <!-- Program Content -->
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-lg-9 col-lg-offset-1 col-md-9 col-sm-12">
                                                    <h4>Tram Welcome Party</h4>
                                                    <div>
                                                        <p><i class="fa fa-lg fa-clock-o"></i> <span class="small">18:30 - 20:00</span></p>
                                                        <p><i class="fa fa-lg fa-map-marker"></i> <span class="small">Hong Kong</span></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- End of Day 3-->
                        <!-- DAY 4 -->
                        <div role="tabpanel" class="tab-pane fade in" id="day4" aria-labelledby="day4-tab">
                            <div class="panel-group" id="accordion4" role="tablist" aria-multiselectable="true">
                                <!-- PROGRAM 12-->
                                <div class="panel panel-default">

                                    <!-- Program Heading -->
                                    <div class="panel-heading" role="tab" id="heading12">

                                        <div class="row">
                                            <div class="col-lg-1 col-md-1 col-sm-1">
                                                <p class="date">10.30</p>
                                            </div>

                                            <div class="col-lg-11 col-md-11 col-sm-11">

                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordion" href="#Program12" aria-expanded="true" aria-controls="Program12">
                                                        Track I: Hackathon
                                                    </a>
                                                </h4>
                                            </div>
                                        </div>

                                    </div>

                                    <div id="Program12" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading12">
                                        <!-- Program Content -->
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-lg-9 col-lg-offset-1 col-md-9 col-sm-12">
                                                    <h4> Track I: Hackathon </h4>
                                                    <div>
                                                        <p><i class="fa fa-lg fa-clock-o"></i> <span class="small">10:30 - 16:30</span></p>
                                                        <p><i class="fa fa-lg fa-map-marker"></i> <span class="small">Centennial Campus, HKU</span></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                </div>

                                <!-- PROGRAM 13-->
                                <div class="panel panel-default">

                                    <!-- Program Heading -->
                                    <div class="panel-heading" role="tab" id="heading13">

                                        <div class="row">
                                            <div class="col-lg-1 col-md-1 col-sm-1">
                                                <p class="date">13:30</p>
                                            </div>

                                            <div class="col-lg-11 col-md-11 col-sm-11">

                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordion" href="#Program13" aria-expanded="true" aria-controls="Program13">
                                                        Track II: Industry Visit
                                                    </a>
                                                </h4>
                                            </div>
                                        </div>

                                    </div>

                                    <div id="Program13" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading13">
                                        <!-- Program Content -->
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-lg-9 col-lg-offset-1 col-md-9 col-sm-12">
                                                    <h4> Track II: Industry Visit </h4>
                                                    <div>
                                                        <p><i class="fa fa-lg fa-clock-o"></i> <span class="small">18:30 - 20:00</span></p>
                                                        <p><i class="fa fa-lg fa-map-marker"></i> <span class="small">Hong Kong</span></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                </div>

                                <!-- PROGRAM 14-->
                                <div class="panel panel-default">

                                    <!-- Program Heading -->
                                    <div class="panel-heading" role="tab" id="heading14">

                                        <div class="row">
                                            <div class="col-lg-1 col-md-1 col-sm-1">
                                                <p class="date">19:00</p>
                                            </div>

                                            <div class="col-lg-11 col-md-11 col-sm-11">

                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordion" href="#Program14" aria-expanded="true" aria-controls="Program14">
                                                        Move to Guangzhou
                                                    </a>
                                                </h4>
                                            </div>
                                        </div>

                                    </div>

                                    <div id="Program14" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading14">
                                        <!-- Program Content -->
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-lg-9 col-lg-offset-1 col-md-9 col-sm-12">
                                                    <h4>Move to Guangzhou</h4>
                                                    <div>
                                                        <p><i class="fa fa-lg fa-clock-o"></i> <span class="small">19:00 - 21:30</span></p>
                                                        <p><i class="fa fa-lg fa-map-marker"></i> <span class="small">HK to GZ</span></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                                <!-- End of Program 14 -->
                            </div>
                        </div>

                        <!-- End of Day 4-->
                        <!-- Day 5 -->
                        <div role="tabpanel" class="tab-pane fade in" id="day5" aria-labelledby="day5-tab">
                            <div class="panel-group" id="accordion5" role="tablist" aria-multiselectable="true">

                                <!-- PROGRAM 15-->
                                <div class="panel panel-default">

                                    <!-- Program Heading -->
                                    <div class="panel-heading" role="tab" id="heading15">

                                        <div class="row">
                                            <div class="col-lg-1 col-md-1 col-sm-1">
                                                <p class="date">09.30</p>
                                            </div>

                                            <div class="col-lg-11 col-md-11 col-sm-11">

                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordion" href="#Program15" aria-expanded="true" aria-controls="Program15">
                                                        Keynote Speaking
                                                    </a>
                                                </h4>
                                            </div>
                                        </div>

                                    </div>

                                    <div id="Program15" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading15">
                                        <!-- Program Content -->
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-lg-9 col-lg-offset-1 col-md-9 col-sm-12">
                                                    <h4>Keynote Speaking</h4>


                                                    <div class="col-lg-3 col-md-2 col-xs-6">
                                                        <img class="img-responsive program-speaker" src="{{asset('img/update-speaker.jpg')}}" alt="">
                                                        <h6>Updated Later</h6>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-xs-6">
                                                        <img class="img-responsive program-speaker" src="{{asset('img/update-speaker.jpg')}}" alt="">
                                                        <h6>Updated Later</h6>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-xs-6">
                                                        <img class="img-responsive program-speaker" src="{{asset('img/update-speaker.jpg')}}" alt="">
                                                        <h6>Updated Later</h6>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-xs-6">
                                                        <img class="img-responsive program-speaker" src="{{asset('img/update-speaker.jpg')}}" alt="">
                                                        <h6>Updated Later</h6>
                                                    </div>
                                                    <div>
                                                        <p><i class="fa fa-lg fa-clock-o"></i> <span class="small">9:30 - 11:30</span></p>
                                                        <p><i class="fa fa-lg fa-map-marker"></i> <span class="small">Campus, SYSU</span></p>
                                                    </div>
                                                </div>

                                                <div class="col-lg-2 col-md-2 col-xs-6 fcs-moderator">
                                                    <img class="img-responsive program-speaker" src="{{asset('img/update-speaker.jpg')}}" alt="">
                                                    <p><span>Moderator</span></p>
                                                    <h5>Will be updated later</h5>
                                                    <span class="about-speaker"><i class="fa fa-lg fa-globe"></i> <a class="small" href="#">futurecitysummit.org</a></span>
                                                </div>

                                            </div>
                                        </div>

                                    </div>

                                </div>

                                <!-- PROGRAM 16-->
                                <div class="panel panel-default">

                                    <!-- Program Heading -->
                                    <div class="panel-heading" role="tab" id="heading16">

                                        <div class="row">
                                            <div class="col-lg-1 col-md-1 col-sm-1">
                                                <p class="date">11:30</p>
                                            </div>

                                            <div class="col-lg-11 col-md-11 col-sm-11">

                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordion" href="#Program16" aria-expanded="true" aria-controls="Program16">
                                                        Panel Discussion III
                                                    </a>
                                                </h4>
                                            </div>
                                        </div>

                                    </div>

                                    <div id="Program16" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading16">
                                        <!-- Program Content -->
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-lg-9 col-lg-offset-1 col-md-9 col-sm-12">
                                                    <h4>Panel Discussion III : Entrepreneurship For All</h4>


                                                    <div class="col-lg-3 col-md-2 col-xs-6">
                                                        <img class="img-responsive program-speaker" src="{{asset('img/update-speaker.jpg')}}" alt="">
                                                        <h6>Updated Later</h6>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-xs-6">
                                                        <img class="img-responsive program-speaker" src="{{asset('img/update-speaker.jpg')}}" alt="">
                                                        <h6>Updated Later</h6>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-xs-6">
                                                        <img class="img-responsive program-speaker" src="{{asset('img/update-speaker.jpg')}}" alt="">
                                                        <h6>Updated Later</h6>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-xs-6">
                                                        <img class="img-responsive program-speaker" src="{{asset('img/update-speaker.jpg')}}" alt="">
                                                        <h6>Updated Later</h6>
                                                    </div>
                                                    <div>
                                                        <p><i class="fa fa-lg fa-clock-o"></i> <span class="small">11:30 - 12:30</span></p>
                                                        <p><i class="fa fa-lg fa-map-marker"></i> <span class="small">Campus, SYSU</span></p>
                                                    </div>
                                                </div>

                                                <div class="col-lg-2 col-md-2 col-xs-6 fcs-moderator">
                                                    <img class="img-responsive program-speaker" src="{{asset('img/update-speaker.jpg')}}" alt="">
                                                    <p><span>Moderator</span></p>
                                                    <h5>Will be updated later</h5>
                                                    <span class="about-speaker"><i class="fa fa-lg fa-globe"></i> <a class="small" href="#">futurecitysummit.org</a></span>
                                                </div>

                                            </div>
                                        </div>
                                        <!-- End of Panel Discussion One-->
                                        <hr>
                                        <!-- Second Panel Discussion-->
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-lg-9 col-lg-offset-1 col-md-9 col-sm-12">
                                                    <h4>Panel Discussion III : Technology For Future </h4>


                                                    <div class="col-lg-3 col-md-2 col-xs-6">
                                                        <img class="img-responsive program-speaker" src="{{asset('img/update-speaker.jpg')}}" alt="">
                                                        <h6>Updated Later</h6>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-xs-6">
                                                        <img class="img-responsive program-speaker" src="{{asset('img/update-speaker.jpg')}}" alt="">
                                                        <h6>Updated Later</h6>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-xs-6">
                                                        <img class="img-responsive program-speaker" src="{{asset('img/update-speaker.jpg')}}" alt="">
                                                        <h6>Updated Later</h6>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-xs-6">
                                                        <img class="img-responsive program-speaker" src="{{asset('img/update-speaker.jpg')}}" alt="">
                                                        <h6>Updated Later</h6>
                                                    </div>
                                                    <div>
                                                        <p><i class="fa fa-lg fa-clock-o"></i> <span class="small">11:30 - 12:30</span></p>
                                                        <p><i class="fa fa-lg fa-map-marker"></i> <span class="small">Campus, SYSU</span></p>
                                                    </div>
                                                </div>

                                                <div class="col-lg-2 col-md-2 col-xs-6 fcs-moderator">
                                                    <img class="img-responsive program-speaker" src="{{asset('img/update-speaker.jpg')}}" alt="">
                                                    <p><span>Moderator</span></p>
                                                    <h5>Will be updated later</h5>
                                                    <span class="about-speaker"><i class="fa fa-lg fa-globe"></i> <a class="small" href="#">futurecitysummit.org</a></span>
                                                </div>

                                            </div>
                                        </div>

                                        <!-- End of Second Panel-->
                                        <hr>
                                        <!-- Third Panel Discussion-->
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-lg-9 col-lg-offset-1 col-md-9 col-sm-12">
                                                    <h4>Panel Discussion III : Global Development and Resilience </h4>


                                                    <div class="col-lg-3 col-md-2 col-xs-6">
                                                        <img class="img-responsive program-speaker" src="{{asset('img/update-speaker.jpg')}}" alt="">
                                                        <h6>Updated Later</h6>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-xs-6">
                                                        <img class="img-responsive program-speaker" src="{{asset('img/update-speaker.jpg')}}" alt="">
                                                        <h6>Updated Later</h6>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-xs-6">
                                                        <img class="img-responsive program-speaker" src="{{asset('img/update-speaker.jpg')}}" alt="">
                                                        <h6>Updated Later</h6>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-xs-6">
                                                        <img class="img-responsive program-speaker" src="{{asset('img/update-speaker.jpg')}}" alt="">
                                                        <h6>Updated Later</h6>
                                                    </div>
                                                    <div>
                                                        <p><i class="fa fa-lg fa-clock-o"></i> <span class="small">11:30 - 12:30</span></p>
                                                        <p><i class="fa fa-lg fa-map-marker"></i> <span class="small">Campus, SYSU</span></p>
                                                    </div>
                                                </div>

                                                <div class="col-lg-2 col-md-2 col-xs-6 fcs-moderator">
                                                    <img class="img-responsive program-speaker" src="{{asset('img/update-speaker.jpg')}}" alt="">
                                                    <p><span>Moderator</span></p>
                                                    <h5>Will be updated later</h5>
                                                    <span class="about-speaker"><i class="fa fa-lg fa-globe"></i> <a class="small" href="#">futurecitysummit.org</a></span>
                                                </div>

                                            </div>
                                        </div>
                                        <!-- End of Thirds Panel-->
                                        <hr>
                                        <!-- Fourth Panel Discussion-->
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-lg-9 col-lg-offset-1 col-md-9 col-sm-12">
                                                    <h4>Panel Discussion III: Arts, Entertainment and Living</h4>


                                                    <div class="col-lg-3 col-md-2 col-xs-6">
                                                        <img class="img-responsive program-speaker" src="{{asset('img/update-speaker.jpg')}}" alt="">
                                                        <h6>Updated Later</h6>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-xs-6">
                                                        <img class="img-responsive program-speaker" src="{{asset('img/update-speaker.jpg')}}" alt="">
                                                        <h6>Updated Later</h6>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-xs-6">
                                                        <img class="img-responsive program-speaker" src="{{asset('img/update-speaker.jpg')}}" alt="">
                                                        <h6>Updated Later</h6>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-xs-6">
                                                        <img class="img-responsive program-speaker" src="{{asset('img/update-speaker.jpg')}}" alt="">
                                                        <h6>Updated Later</h6>
                                                    </div>
                                                    <div>
                                                        <p><i class="fa fa-lg fa-clock-o"></i> <span class="small">11:30 - 12:30</span></p>
                                                        <p><i class="fa fa-lg fa-map-marker"></i> <span class="small">Campus, SYSU</span></p>
                                                    </div>
                                                </div>

                                                <div class="col-lg-2 col-md-2 col-xs-6 fcs-moderator">
                                                    <img class="img-responsive program-speaker" src="{{asset('img/update-speaker.jpg')}}" alt="">
                                                    <p><span>Moderator</span></p>
                                                    <h5>Will be updated later</h5>
                                                    <span class="about-speaker"><i class="fa fa-lg fa-globe"></i> <a class="small" href="#">futurecitysummit.org</a></span>
                                                </div>

                                            </div>
                                        </div>
                                        <!-- End of Fourth Panel-->
                                        <hr>
                                        <!-- Fifth Panel Discussion-->
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-lg-9 col-lg-offset-1 col-md-9 col-sm-12">
                                                    <h4>Panel Discussion III: Space and Extraterrestrial</h4>


                                                    <div class="col-lg-3 col-md-2 col-xs-6">
                                                        <img class="img-responsive program-speaker" src="{{asset('img/update-speaker.jpg')}}" alt="">
                                                        <h6>Updated Later</h6>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-xs-6">
                                                        <img class="img-responsive program-speaker" src="{{asset('img/update-speaker.jpg')}}" alt="">
                                                        <h6>Updated Later</h6>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-xs-6">
                                                        <img class="img-responsive program-speaker" src="{{asset('img/update-speaker.jpg')}}" alt="">
                                                        <h6>Updated Later</h6>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-xs-6">
                                                        <img class="img-responsive program-speaker" src="{{asset('img/update-speaker.jpg')}}" alt="">
                                                        <h6>Updated Later</h6>
                                                    </div>
                                                    <div>
                                                        <p><i class="fa fa-lg fa-clock-o"></i> <span class="small">11:30 - 12:30</span></p>
                                                        <p><i class="fa fa-lg fa-map-marker"></i> <span class="small">Campus, SYSU</span></p>
                                                    </div>
                                                </div>

                                                <div class="col-lg-2 col-md-2 col-xs-6 fcs-moderator">
                                                    <img class="img-responsive program-speaker" src="{{asset('img/update-speaker.jpg')}}" alt="">
                                                    <p><span>Moderator</span></p>
                                                    <h5>Will be updated later</h5>
                                                    <span class="about-speaker"><i class="fa fa-lg fa-globe"></i> <a class="small" href="#">futurecitysummit.org</a></span>
                                                </div>

                                            </div>
                                        </div>
                                        <!-- End of Fifth Panel-->
                                        <hr>
                                        <!-- Sixth Panel Discussion-->
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-lg-9 col-lg-offset-1 col-md-9 col-sm-12">
                                                    <h4>Panel Discussion III: The Earth, Urban and Energy</h4>


                                                    <div class="col-lg-3 col-md-2 col-xs-6">
                                                        <img class="img-responsive program-speaker" src="{{asset('img/update-speaker.jpg')}}" alt="">
                                                        <h6>Updated Later</h6>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-xs-6">
                                                        <img class="img-responsive program-speaker" src="{{asset('img/update-speaker.jpg')}}" alt="">
                                                        <h6>Updated Later</h6>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-xs-6">
                                                        <img class="img-responsive program-speaker" src="{{asset('img/update-speaker.jpg')}}" alt="">
                                                        <h6>Updated Later</h6>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-xs-6">
                                                        <img class="img-responsive program-speaker" src="{{asset('img/update-speaker.jpg')}}" alt="">
                                                        <h6>Updated Later</h6>
                                                    </div>
                                                    <div>
                                                        <p><i class="fa fa-lg fa-clock-o"></i> <span class="small">11:30 - 12:30</span></p>
                                                        <p><i class="fa fa-lg fa-map-marker"></i> <span class="small">Campus, SYSU</span></p>
                                                    </div>
                                                </div>

                                                <div class="col-lg-2 col-md-2 col-xs-6 fcs-moderator">
                                                    <img class="img-responsive program-speaker" src="{{asset('img/update-speaker.jpg')}}" alt="">
                                                    <p><span>Moderator</span></p>
                                                    <h5>Will be updated later</h5>
                                                    <span class="about-speaker"><i class="fa fa-lg fa-globe"></i> <a class="small" href="#">futurecitysummit.org</a></span>
                                                </div>

                                            </div>
                                        </div>
                                        <!-- End of Sixth Panel-->
                                        <!-- End of Program Content-->
                                    </div>

                                </div>

                                <!-- PROGRAM 17-->
                                <div class="panel panel-default">

                                    <!-- Program Heading -->
                                    <div class="panel-heading" role="tab" id="heading17">

                                        <div class="row">
                                            <div class="col-lg-1 col-md-1 col-sm-1">
                                                <p class="date">14:00</p>
                                            </div>

                                            <div class="col-lg-11 col-md-11 col-sm-11">

                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordion" href="#Program17" aria-expanded="true" aria-controls="Program17">
                                                        Workshop Session III
                                                    </a>
                                                </h4>
                                            </div>
                                        </div>

                                    </div>

                                    <div id="Program17" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading17">
                                        <!-- Program Content -->
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-lg-9 col-lg-offset-1 col-md-9 col-sm-12">
                                                    <h4>Workshop Session III</h4>


                                                    <div class="col-lg-3 col-md-2 col-xs-6">
                                                        <img class="img-responsive program-speaker" src="{{asset('img/update-speaker.jpg')}}" alt="">
                                                        <h6>Updated Later</h6>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-xs-6">
                                                        <img class="img-responsive program-speaker" src="{{asset('img/update-speaker.jpg')}}" alt="">
                                                        <h6>Updated Later</h6>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-xs-6">
                                                        <img class="img-responsive program-speaker" src="{{asset('img/update-speaker.jpg')}}" alt="">
                                                        <h6>Updated Later</h6>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-xs-6">
                                                        <img class="img-responsive program-speaker" src="{{asset('img/update-speaker.jpg')}}" alt="">
                                                        <h6>Updated Later</h6>
                                                    </div>
                                                    <div>
                                                        <p><i class="fa fa-lg fa-clock-o"></i> <span class="small">14:00 - 15:30</span></p>
                                                        <p><i class="fa fa-lg fa-map-marker"></i> <span class="small">Campus, SYSU</span></p>
                                                    </div>
                                                </div>

                                                <div class="col-lg-2 col-md-2 col-xs-6 fcs-moderator">
                                                    <img class="img-responsive program-speaker" src="{{asset('img/update-speaker.jpg')}}" alt="">
                                                    <p><span>Moderator</span></p>
                                                    <h5>Will be updated later</h5>
                                                    <span class="about-speaker"><i class="fa fa-lg fa-globe"></i> <a class="small" href="#">futurecitysummit.org</a></span>
                                                </div>

                                            </div>
                                        </div>

                                    </div>

                                </div>

                                <!-- PROGRAM 18-->
                                <div class="panel panel-default">

                                    <!-- Program Heading -->
                                    <div class="panel-heading" role="tab" id="heading18">

                                        <div class="row">
                                            <div class="col-lg-1 col-md-1 col-sm-1">
                                                <p class="date">16:00</p>
                                            </div>

                                            <div class="col-lg-11 col-md-11 col-sm-11">

                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordion" href="#Program18" aria-expanded="true" aria-controls="Program18">
                                                        Track I: Hackathon
                                                    </a>
                                                </h4>
                                            </div>
                                        </div>

                                    </div>

                                    <div id="Program18" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading18">
                                        <!-- Program Content -->
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-lg-9 col-lg-offset-1 col-md-9 col-sm-12">
                                                    <h4> Track I: Hackathon </h4>
                                                    <div>
                                                        <p><i class="fa fa-lg fa-clock-o"></i> <span class="small">16:00 - 20:00</span></p>
                                                        <p><i class="fa fa-lg fa-map-marker"></i> <span class="small">Campus, SYSU</span></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                </div>

                                <!-- PROGRAM 19-->
                                <div class="panel panel-default">

                                    <!-- Program Heading -->
                                    <div class="panel-heading" role="tab" id="heading19">

                                        <div class="row">
                                            <div class="col-lg-1 col-md-1 col-sm-1">
                                                <p class="date">15:50</p>
                                            </div>

                                            <div class="col-lg-11 col-md-11 col-sm-11">

                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordion" href="#Program19" aria-expanded="true" aria-controls="Program19">
                                                        Track II: Industry Visit
                                                    </a>
                                                </h4>
                                            </div>
                                        </div>

                                    </div>

                                    <div id="Program19" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading19">
                                        <!-- Program Content -->
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-lg-9 col-lg-offset-1 col-md-9 col-sm-12">
                                                    <h4> Track II: Industry Visit </h4>
                                                    <div>
                                                        <p><i class="fa fa-lg fa-clock-o"></i> <span class="small">15:50 - 19:00</span></p>
                                                        <p><i class="fa fa-lg fa-map-marker"></i> <span class="small">Guangzhou</span></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                                <!-- End of Program 19 -->
                            </div>
                        </div>
                        <!-- End of Day 5-->
                        <!-- Day 6 -->
                        <div role="tabpanel" class="tab-pane fade in" id="day6" aria-labelledby="day6-tab">
                            <div class="panel-group" id="accordion6" role="tablist" aria-multiselectable="true">
                                <!-- PROGRAM 20-->
                                <div class="panel panel-default">

                                    <!-- Program Heading -->
                                    <div class="panel-heading" role="tab" id="heading20">

                                        <div class="row">
                                            <div class="col-lg-1 col-md-1 col-sm-1">
                                                <p class="date">14:30</p>
                                            </div>

                                            <div class="col-lg-11 col-md-11 col-sm-11">

                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordion" href="#Program20" aria-expanded="true" aria-controls="Program20">
                                                        Hackathon Pitching
                                                    </a>
                                                </h4>
                                            </div>
                                        </div>

                                    </div>

                                    <div id="Program20" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading20">
                                        <!-- Program Content -->
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-lg-9 col-lg-offset-1 col-md-9 col-sm-12">
                                                    <h4> Hackathon Pitching </h4>
                                                    <div>
                                                        <p><i class="fa fa-lg fa-clock-o"></i> <span class="small">14:30 - 17:00</span></p>
                                                        <p><i class="fa fa-lg fa-map-marker"></i> <span class="small">Campus, SYSU</span></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                </div>

                                <!-- PROGRAM 21-->
                                <div class="panel panel-default">

                                    <!-- Program Heading -->
                                    <div class="panel-heading" role="tab" id="heading21">

                                        <div class="row">
                                            <div class="col-lg-1 col-md-1 col-sm-1">
                                                <p class="date">10.30</p>
                                            </div>

                                            <div class="col-lg-11 col-md-11 col-sm-11">

                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordion" href="#Program21" aria-expanded="true" aria-controls="Program21">
                                                        Imagination Expo, Project Showcase and Dealflow
                                                    </a>
                                                </h4>
                                            </div>
                                        </div>

                                    </div>

                                    <div id="Program21" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading21">
                                        <!-- Program Content -->
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-lg-9 col-lg-offset-1 col-md-9 col-sm-12">
                                                    <h4>Imagination Expo, Project Showcase and Dealflow</h4>
                                                    <div>
                                                        <p><i class="fa fa-lg fa-clock-o"></i> <span class="small">10:30 - 17:30</span></p>
                                                        <p><i class="fa fa-lg fa-map-marker"></i> <span class="small">Campus, SYSU</span></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                </div>

                                <!-- PROGRAM 22-->
                                <div class="panel panel-default">

                                    <!-- Program Heading -->
                                    <div class="panel-heading" role="tab" id="heading22">

                                        <div class="row">
                                            <div class="col-lg-1 col-md-1 col-sm-1">
                                                <p class="date">18:00</p>
                                            </div>

                                            <div class="col-lg-11 col-md-11 col-sm-11">

                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordion" href="#Program22" aria-expanded="true" aria-controls="Program22">
                                                        Closing Ceremony
                                                    </a>
                                                </h4>
                                            </div>
                                        </div>

                                    </div>

                                    <div id="Program22" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading22">
                                        <!-- Program Content -->
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-lg-9 col-lg-offset-1 col-md-9 col-sm-12">
                                                    <h4> Closing Ceremony</h4>
                                                    <div>
                                                        <p><i class="fa fa-lg fa-clock-o"></i> <span class="small">18:00 - 19:30</span></p>
                                                        <p><i class="fa fa-lg fa-map-marker"></i> <span class="small">Campus, SYSU</span></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                                <!-- End of Program 22 -->
                                <!-- End of Day 6-->
                            </div>
                        </div>

                        <!-- End of Days-->
                    </div>

                </div>

            </div>
        </div>
    </section>

@endsection

