<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>

    <title>{{\App\Databases\SiteSettings::get_value('title')}} - @yield('title' , 'Not Found')</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Future City Summit - Hong Kong">
    <meta name="author" content="Nazmul Islam">

    <!-- viewport settings -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<script src="{{asset('js/jquery-1.11.1.min.js')}}"></script>
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
    <link rel="stylesheet"  href="{{asset('css/sp-bootstrap.min.css')}}">


    @hasSection('header-extra')
        @yield('header-extra')
    @endif

    <link rel="stylesheet" href="{{asset('css/main.css')}}">

    <link rel="stylesheet" href="{{asset('css/mediaBoxes.css')}}">



    <!-- Font -->

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('img/favicon.ico')}}">

</head>

<body>
<!-- PRELOADING -->
<div id="preload">
</div>

<!-- NAVIGATION -->
<nav id="nav-primary" class="navbar navbar-custom " role="navigation">
    <div class="container">

        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#nav">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="{{env('APP_URL')}}"><img src="{{  \App\Databases\SiteSettings::get_value('logo') }}" alt="logo"></a>
        </div>

        <div class="collapse navbar-collapse" id="nav">
            <ul class="nav navbar-nav navbar-right uppercase">

                @if(isset($menus))
                 {!! $menus !!}
                @endif
            </ul>
        </div>




        <!-- New Menu is Here -->
    </div>
</nav>



<!--CONTACT-->
@hasSection('page-content')

    @yield('page-content')

@endif


<!-- End of contents -->

<!-- FOOTER -->
<div class="sp-footer">
    <footer class="footer footer-default" role="contentinfo">
        <div class="container">
            <nav class="row">
                <div class="col-xs-12 col-md-2">
                    <div class="footer-logo">
                        <a href="#" style="background-image: url({{\App\Databases\SiteSettings::get_footer('logo')}})!important; width:83px!important; height:62px!important;" >fcs</a>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-4 col-md-2">
                    {!! \App\Http\Controllers\WidgetParser::buildFooterMenuWidget(1) !!}
                </div>
                <div class="col-xs-6 col-sm-4 col-md-2">
                    {!! \App\Http\Controllers\WidgetParser::buildFooterMenuWidget(2) !!}
                </div>
                <div class="col-xs-6 col-sm-4 col-md-2">
                    {!! \App\Http\Controllers\WidgetParser::buildFooterMenuWidget(3) !!}
                </div>
                <div class="col-xs-6 col-sm-4 col-md-2">
                    {!! \App\Http\Controllers\WidgetParser::buildFooterMenuWidget(4) !!}
                </div>
                <div class="col-xs-6 col-sm-4 col-md-2">
                    {!! \App\Http\Controllers\WidgetParser::buildFooterMenuWidget(5,'social') !!}
                </div>
            </nav>
            <nav class="row row-small">
                <div class="col-xs-5 col-md-3 col-md-offset-1">
                    {!! \App\Http\Controllers\WidgetParser::buildFooterMenuWidget(6,'subfooter') !!}
                </div>
                <div class="col-xs-7 col-md-8 text-center">
                    <small class="copyright">{{\App\Databases\SiteSettings::get_footer('copyright')}}</small>
                </div>
            </nav>
        </div>
    </footer>
</div>
<!-- End of Footer -->



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
<script src="{{asset('js/bodymovin.min.js')}}" type="text/javascript"></script>
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