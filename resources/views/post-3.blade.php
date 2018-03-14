@extends('layouts.main')

@section('title')
    From Imagination to Action, A Sharing of The Best Presenter in Future City Summit
    @endsection
@section('header-extra')
    <link rel="stylesheet" href="{{asset('css/accordion-slider.css')}}">

    @endsection

@section('page-content')

    <!-- PAGE HEADER SECTION-->
    <div class="bg-image-humans-fcs-1">
        <div class="container-fluid">
            <h1 class="header-style">Humans of FCS</h1>
        </div>
    </div>
    <!-- HIGHLIGHT -->

    <!-- Stories -->
    <section id="fcs-story-info">
        <article class="fcs-story-article">
            <header class="fcs-article-header">
                <h2>
                    From Imagination to Action, A Sharing of The Best Presenter in Future City Summit
                </h2>
                <div class="fcs-meta">
                    <span class="fcs-pub-date">Posted Feb. 22, 2018</span>
                </div>
            </header>
            <div class="fcs-article-content">
                <div class="row fcs-human-grid1">
                    <img class="img-responsive" src="{{asset('img/sharing3-cover-chai.jpeg')}}" alt="">
                </div>
                <p>Future City Summit(FCS) has been in Hong Kong and impacting emerging market for 2+ years and we are marching towards a better development and agenda in future cities, innovation and public private partnership.</p>

                <p>Meet Ryan Chai M. Cabañez, 21 years-old from Manila, studying in Architecture Faculty in De La Salle–College of Saint Benilde. He participated in FCS2017 as delegate from Manila and won his opportunity to the UN, with insightful knowledge back for his country.</p>
                <p>Chai learnt about Future City Summit from our alumni Russ Earl Malagen(FCS2016), awardee of Connected World Magazine P10NEERS 2018. They first met in Startup Weekend Manila working together on the robotics hack for cleaning up water waste in Manila with IoT capability, increasing values of property and opportunities for housing and business centre. With the encouragement of Russ, Chai joined the FCS in Hong Kong.</p>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 fcs-human-grid2">
                        <img class="img-responsive" src="{{asset('img/sharing3-conference-2017-a.jpeg')}}" alt="">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 fcs-human-grid2">
                        <img class="img-responsive" src="{{asset('img/sharing3-conference-2017-b.jpeg')}}" alt="">
                    </div>
                </div>
                <p>
                    Future City Summit(FCS) 2017 was hosted in August 2017 for 5 days hosting around 120 delegates from the Global South with theme of “Megacities towards 2030”.
                </p>
                <p>Chai was most impressed with knowledge learnt of how technology changes cities and megacities, and roles of government in operating solutions through Public Private Partnership projects. Case studies of cities like Hong Kong and Kuala Lumpur were learnt especially on topics of policy of immigration and urban design.</p>
                <p>“I think the coolest thing about Future City Summit is the introduction of United Nations Sustainable Development Goals for 2030. It gives us framework and guideline to work with, what are the next steps to take to move forward since things are going faster and faster, so does the implementations”</p>
                <div class="row fcs-human-grid1">
                    <img class="img-responsive" src="{{asset('img/sharing3-unsdg.png')}}" alt="">
                </div>
                <p>“Awareness placed a very important role here about future cities. Everyone wanna move in the cities and have a prosperous life. Mobility then becomes a problem over population. There are lots of economic issues happening. If not enough organisation to take charge, or the government does not take charge, there is gonna be a problem.”</p>

                <p>“Philippines, the developing country, gives itself opportunity with these hot problems. We already have had foresights of what we can do from other nations that hopefully we can implement, from the Future City Summit. We can figure out something next 20–30 years.” </p>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 fcs-human-grid2">
                        <img class="img-responsive" src="{{asset('img/sharing3-conference-2017-c.jpeg')}}" alt="">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 fcs-human-grid2">
                        <img class="img-responsive" src="{{asset('img/sharing3-conference-2017-d.jpeg')}}" alt="">
                    </div>
                </div>
                <p>With the seed planted with FCS, Chai has begun to align his projects in school with what he has been doing in the past years including the AquaLap to activate Pasig River to relieve congestion. He has also proposed the Wetland Centre for ferry stations with the Faculty of Architecture. He is soon looking at speculative structures to create productive community for aquaponics fishing and corporate collaboration, meanwhile addressing rising sea level. He is currently leading the studio to build on waters with these proposals.</p>

                <p>“Future City Summit has definitely an influence in the way I think, and the way I should approach problems and consider everything. Architect has to be so many things, philosopher, sociologist, scientist, anthropologist…It(FCS) helps to be able to relate to different professions.”</p>
                <p>"I wouldnt be in this position if it weren't for the team (Chester Chun Yin Fung, Hoachen Zhang, Jeremy Eton Ng and Gulden Timur) that gave their all on this. They performed spectacularly, and delivered the results we needed. At the same time, they were some of the greatest people I've met outside my country."</p>
                <div class="row fcs-human-grid1">
                    <img class="img-responsive fcs-human-img-center" src="{{asset('img/sharing3-un.jpeg')}}" alt="">
                    <div class="row fcs-human-grid1">
                        <p>Meanwhile, winning the Best Presenter in Metro-Hackathon in FCS, Chai was invited to the UN High Level Roundtable Meeting concerning Blended Capital and how stakeholders shall have roles in social entrepreneurship movement.</p>
                        <p>Millennials are inherited with social consciousness and they are already behaviours close to social entrepreneurship. Negotiation is the key for all stakeholders to collaborate but actions shall be taken promptly and efficiently to deliver social impact and reach financial earnings.</p>
                        <p>And there is globally a vast number of leaders solving issues.</p>
                        <p>“I live in the Philippines for the most of my life, and I thought that there wasn’t much hope…you live in a country that’s so down…there are lots of things going on…you wanna help it. Going to united nations just really opened my eyes. Having this opportunity to see this diverse group of people, caring and figuring with compassion to get things done…interacting with a lot of people. Thanks for the Future City Summit, I was able to get this opportunity…”</p>
                        <p>“Really think about what you wanna solve, and don’t think about winning, think about making something new. The world is never running out of problems, but it’s not running out of great thinkers as well.” </p>

                        <p>Learn more about Future City Summit: <a href="{{route('home')}}">www.futurecitysummit.org</a></p>

                    </div>
                </div>
            </div>
        </article>

    </section>

@endsection

