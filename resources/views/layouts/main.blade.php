<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>

    <title>Future City Summit | Hong Kong - @yield('title' , 'Not Found')</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Future City Summit - Hong Kong">
    <meta name="author" content="Nazmul Islam">

    <!-- viewport settings -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

    <!-- CSS -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/pe-icon-7-stroke.css')}}">
    <link rel="stylesheet" href="{{asset('css/helper.css')}}">
    <link rel="stylesheet" href="{{asset('css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/font-awesome.css')}}">
    <link rel="stylesheet" href="{{asset('css/font.css')}}">
    <link rel="stylesheet" href="{{asset('css/salvattore.css')}}">
    <link rel="stylesheet" href="{{asset('css/jquery.countdown.css')}}">
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('css/jquery.mCustomScrollbar.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.theme.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.transitions.css')}}">
    <link rel="stylesheet" href="{{asset('css/revolution.css')}}">
    <link rel="stylesheet" href="{{asset('css/revolution-extralayers.css')}}">
    <link rel="stylesheet" href="{{asset('css/revolution-extralayers.css')}}">
    <link rel="stylesheet" href="{{asset('css/normalize.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">


    <!-- Font -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('img/favicon.ico')}}">
    @hasSection('header-extra')
            @yield('header-extra')
        @endif
</head>

<body>
<!-- PRELOADING -->
<div id="preload">
    <div class="preload">
        <div class="spinner"></div>
    </div>
</div>

<!-- NAVIGATION -->
<nav id="nav-primary" class="navbar navbar-custom" role="navigation">S
    <div class="container">

        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#nav">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="{{env('APP_URL','#')}}"><img src="{{asset('img/logo.png')}}" alt="logo"></a>
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
                <li  class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown">Contact <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Page 1-1</a></li>
                        <li><a href="#">Page 1-2</a></li>
                        <li><a href="#">Page 1-3</a></li>
                    </ul>
                </li>

            </ul>
        </div>

    </div>
</nav>

<!-- PAGE HEADER SECTION-->
<div class="bg-image" style="background-image: url('@yield('header-bg','../img/bg-header.png')');">
    <div class="container-fluid">
        <h1 class="header-style" >@yield('title' , '404 Not Found')</h1>
    </div>
</div>

<!--CONTACT-->
@hasSection('page-content')

    @yield('page-content')

    @endif


<!-- End of contents -->

<!-- FOOTER -->
<footer id="footer">
    <div class="container">
        <div class="row">
            <div>
                <ul class="footer-list uppercase col-md-15 col-xs-3">
                    <li><a href="">About</a></li>
                    <li><a href="#">FCS 2017</a></li>
                    <li><a href="#">FCS 2016</a></li>
                    <li><a href="#">Local Chapters</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>
            <div>
                <ul class="footer-list uppercase col-md-15 col-xs-3">
                    <li><a href="#">FCS 2018</a></li>
                    <li><a href="#">Schedule</a></li>
                    <li><a href="#">Session Highlights</a></li>
                    <li><a href="#">Speakers</a></li>
                    <li><a href="#">FAQs</a></li>
                </ul>
            </div>
            <div>
                <ul class="footer-list uppercase col-md-15 col-xs-3">
                    <li><a href="#">Venues</a></li>
                    <li><a href="#">Metro-Hackathon</a></li>
                    <li><a href="#">Imagination Expo</a></li>
                    <li><a href="#">Featured Stories</a></li>
                </ul>
            </div>
            <div>
                <ul class="footer-list uppercase col-md-15 col-xs-3">
                    <li><a href="#">Application</a></li>
                    <li><a href="#">Open a Local Chapter</a></li>
                    <li><a href="#">Apply as a Delegate</a></li>
                    <li><a href="#">Become a Partner</a></li>
                    <li><a href="#">Apply as a Local Initiator</a></li>
                </ul>
            </div>
            <div>
                <ul class="footer-list uppercase col-md-15 col-xs-3">
                    <li><a href="#">FCS Plus</a></li>
                    <li><a href="#">Login</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>

<!-- SUBFOOTER -->
<div class="subfooter">
    <div class="container">
        <div class="row">

            <div class="col-lg-3">
                <ul class="list-unstyled list-inline pull-right uppercase">
                    <li><a href="#">Terms</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                </ul>
            </div>

            <div class="col-lg-2">
                <ul class="list-unstyled list-inline uppercase">
                    <li><a href="#"><i class="fa fa-lg fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-lg fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-lg fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fa fa-lg fa-google-plus"></i></a></li>
                </ul>
            </div>

            <div class="col-lg-7">
                <p>Copyright &copy; 2016-2018 All Right Reserved | Future City Summit an imitative by University of Hong Kong</p>
            </div>
        </div>
    </div>
</div>



<script src="{{asset('js/jquery-1.11.1.min.js')}}"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script src="{{asset('js/jquery.themepunch.tools.min.js')}}"></script>
<script src="{{asset('js/jquery.themepunch.revolution.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/jquery.sticky.js')}}"></script>
<script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('js/salvattore.js')}}"></script>
<script src="{{asset('js/jquery.countdown.js')}}"></script>
<script src="{{asset('js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
<script src="{{asset('js/waypoints.min.js')}}"></script>
<script src="{{asset('js/jquery.counterup.min.js')}}"></script>
<script src="{{asset('js/owl.carousel.min.js')}}"></script>
<script src="{{asset('js/retina.js')}}"></script>

<script src="{{asset('js/main.js')}}"></script>




<!-- GOOGLE ANALYTICS -->
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','http://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-XXXXXXX-XX', 'yourdomain.com');
    ga('send', 'pageview');

</script>
@hasSection('scripts')
@yield('scripts')
    @endif

</body>
</html>
