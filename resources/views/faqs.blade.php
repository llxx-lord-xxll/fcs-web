@extends('layouts.main')

@section('title')
    FAQs
    @endsection

@section('page-content')
    <!-- PAGE HEADER SECTION-->
    <div class="bg-image-legal">
        <div class="container-fluid">
            <h1 class="header-style">Frequently Asked Questions</h1>
        </div>
    </div>

    <!-- INFO -->
    <section class="fcs-faq" id="faq">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingOne">
                                <h4 class="panel-title">
                                    <a class="" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        What is included in the packages?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                <div class="panel-body">
                                    This package includes the high-table dinner, entry to the conference sessions, site visit to HK's world-class facility, design-thinking workshop, hackathon and 5-night stay in HKU hall. Lunches are inclusive in the package as well.
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingTwo">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Who can participate in this event?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                <div class="panel-body">
                                    Future City Summit 2018 is a student-led conference aims at connecting people from worldwide, facilitating the exchange of ideas and enabling students to experience cross-cultural working environment. We do welcome all the life-learner as well and you can definitely learn a lot from speeches from our prestigious speakers.
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingThree">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        When will I know my application result?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                <div class="panel-body">
                                    It takes some time for us to review your application. To foster your application process, you may provide a more comprehensive portfolio and CV of yourself through the available spaces on the application form.
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingFour">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        Any other fees will be charged during the event?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                                <div class="panel-body">
                                    No other fee will be charged in our activities. However, probably you need to manage the dinner on your own.
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingFive">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                        What are the places which included in the site-visit activity?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
                                <div class="panel-body">
                                    This includes the site-visit to CLP Power transmission control centre, T-park (a sludge converter), Happy Valley underground stormwater storage system, etc. Other site-visit activities are still being processed.
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingSix">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                        What other places I can stay if I do not live in HKU dorms?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
                                <div class="panel-body">
                                    There is a plenty of choices for the stay in Hong Kong. A cheap one can be Chongqing Mansion in Tsim Sha Tsui or the hostel in Causeway Bay. However, we recommend you to stay in the dorm as you can have chances to communicate with people from worldwide.
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingSeven">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                        Do I need a visa to come to Hong Kong?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseSeven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSeven">
                                <div class="panel-body">
                                    Please visit the Immigration Department, HKSAR for <a href="http://www.immd.gov.hk/eng/services/visas/visit-transit/visit-visa-entry-permit.html" target="_blank">details.</a>
                                </div>
                            </div>
                        </div>

                    </div><!--./panel-group-->

                </div>
            </div>
        </div>

    </section>
    <!-- TESTIMONIAL -->


@endsection

