@extends('layouts.main')

@section('title')
    Venue HKU
    @endsection


@section('page-content')

    <!-- PAGE HEADER SECTION-->
    <div class="bg-image-hku">
        <div class="container-fluid">
            <h1 class="header-style">The University of Hong Kong</h1>
        </div>
    </div>


    <!-- VENUE HISTORY - HKU-->
    <section class="ga-background">
        <div class="container-fluid">
            <div class="row">
                <div class="container special-textbox col-lg-12 col-md-12 col-xs-12">
                    <h2 class="conference-topic-title">The University of Hong Kong</h2>
                    <p class="text-center venue-topic-content"> The University of Hong Kong is a public research university located in Pokfulam, Hong Kong. Founded in 1911, it is the oldest tertiary institution in Hong Kong. It is often cited as one of the most prestigious universities in Asia.</p>
                </div>
            </div>
        </div>
    </section>


    <!-- Main Campus-->
    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="container col-lg-6 col-md-6 col-xs-12 special-content">
                    <p class="text-justify venue-inner-content">HKU admits the highest number of top scorers from the Hong Kong Diploma of Secondary Education Examinations. In terms of internationalization, HKU is ranked as the 3rd most international university in the world by the Times Higher Education 2017, 3rd in the world for International Outlook and 7th in the world for International Collaboration. Three broad subject areas are currently ranked #1 in the world for International Outlook by the Times Higher Education, namely, Engineering &amp; Technology, Arts &amp; Humanities, and Clinical, Pre-clinical &amp; Health.</p>
                </div>
                <div class="container col-lg-6 col-md-6 col-xs-12">
                    <div class="row">
                        <img class="img-responsive" src="img/hku-1.jpg" alt="">
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
                        <img class="img-responsive" src="img/hku-3.jpg" alt="">
                    </div>
                </div>
                <div class="container col-lg-6 col-md-6 col-xs-12 special-content">
                    <div class="special-textbox">
                        <p class="text-justify venue-inner-content">HKU's MBA program was considered the best in Asia by the Economist's 2016 ranking where it was ranked 31st worldwide (1st in Asia) while the Global MBA Rankings (2016) ranked it 44th (10th in Asia). HKU's HKU-Fudan IMBA programme came 58th (16th in Asia) in the Financial Times EMBA Rankings(2015). <br>HKU has bred a spectrum of notable alumni and honorary scholars including: Ms. Regina Ip Lau Suk-yee, Daw Aung San Suu Kyi, Carrie Lam Cheng Yuet-ngor and Bill Clinton.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Other Venues -->
    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="container col-lg-6 col-md-6 col-xs-12 special-content">
                    <h2 class="text-center">About St. John’s College</h2>
                    <p class="text-justify venue-inner-content">St. John’s College was founded in 1912 and it was the first residential hall in the University. Its predecessors were St. John’s Hall and St. Stephen’s hall which were for boys and girls respectively. After the Second World War, in 1955, funded by the University and the Anglican Church, they were combined and moved to the current site at the junction of Pokfulam and Pokfield Road.</p>
                </div>
                <div class="container col-lg-6 col-md-6 col-xs-12">
                    <div class="row">
                        <img class="img-responsive" src="img/sjc-1.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- St. Jones College -->
    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="container col-lg-6 col-md-6 col-xs-12">
                    <div class="row">
                        <img class="img-responsive" src="img/sjc-2.png" alt="">
                    </div>
                </div>
                <div class="container col-lg-6 col-md-6 col-xs-12 special-content">
                    <div class="special-textbox">
                        <p class="text-justify venue-inner-content">St. John’s College has bred many brilliant figures contributing in various fields in Hong Kong society. During the studying at the University, they all had great time and gained a lot in the College. Many of them are still keeping the connection with the College and they are very eager to know how the people here are. They would help the students in various ways like to be a mentor and giving a talk sharing their experience, including:
                        <ul class="text-justify venue-inner-content workshop-inner-list">
                            <li><i class="fa fa-minus" aria-hidden="true"></i> Dr. Sarah LIAO Sau-tung, former Secretary for the Environment, Transport and Works</li>
                            <li><i class="fa fa-minus" aria-hidden="true"></i> Sir. YANG Ti-liang, former Chief Justice, former Non-Official Executive Council member</li>
                            <li><i class="fa fa-minus" aria-hidden="true"></i> Ms. Anna WONG Wai-kwan, Director and Senior Fellow of the Hong Kong Securities &amp; Investment Institute, Former CEO of HSBC Broking Services (Asia) Limited, Former Head of Private Banking, Greater China at Credit Suisse.</li>
                        </ul>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- End of St. Jones College -->





    <!-- Google Map Location of HKU-->
    <section id="venue-hku">
        <div class="col-lg-12 venue-map-text">
            <h2 class="text-center uppercase">How to go?</h2>
        </div>
        <iframe width="100%" height="450" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=University%20of%20Hong%20Kong%20&key=AIzaSyCigfKnVpOELbK4gb5Y5FXoEGS_dZQHn6c" allowfullscreen></iframe>

    </section>
    <!-- End of Google Map Location Section-->


@endsection

