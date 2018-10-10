@extends($template)

@section('header-extra')
    <link rel="stylesheet" href="{{asset('css/jquery.fancybox.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('css/accordion-slider.css')}}">
@endsection

@section('title')
    {{$page_title}}
@endsection


@section('page-content')

    {!! $data !!}

@endsection

@section('scripts')
    <script type="text/javascript" src="{{asset('js/jquery.accordionSlider.min.js')}}"></script>
    <script src="{{asset('js/jquery.isotope.min.js')}}"></script>
    <script src="{{asset('js/jquery.imagesLoaded.min.js')}}"></script>
    <script src="{{asset('js/jquery.transit.min.js')}}"></script>
    <script src="{{asset('js/jquery.easing.js')}}"></script>
    <script src="{{asset('js/modernizr.custom.min.js')}}"></script>
    <script src="{{asset('js/jquery.fancybox.min.js')}}"></script>
    <script src="{{asset('js/jquery.mediaBoxes.dropdown.js')}}"></script>
    <script src="{{asset('js/jquery.mediaBoxes.js')}}"></script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-117105068-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-117105068-1');
    </script>


    <!-- Facebook Pixel Code -->
    <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
            n.callMethod.apply(n,arguments):n.queue.push(arguments)};
            if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
            n.queue=[];t=b.createElement(e);t.async=!0;
            t.src=v;s=b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t,s)}(window,document,'script',
            'https://connect.facebook.net/en_US/fbevents.js');

        fbq('init', '1738317552847133');
        fbq('track', 'PageView');

    </script>

    <noscript>
        <img height="1" width="1"
             src="https://www.facebook.com/tr?id=1738317552847133&ev=PageView&noscript=1"/>
    </noscript>
    <!-- End Facebook Pixel Code -->


    <script type="text/javascript">
        jQuery(document).ready(function($) {
            // instantiate the accordion
            $('#fcs-theme-panel').accordionSlider({
                width: $('#fcs-theme-panel').parent().width(),
                height: 600,
                responsiveMode: 'auto',
                visiblePanels: 6,
                closePanelsOnMouseOut: false,
                mouseWheel:false,
                autoplay: true
            });

            // change the responsive mode
            $('.controls a').click(function(event) {
                event.preventDefault();

                if ($(this).hasClass('auto')) {
                    // change the responsive mode to 'auto' and remove the 'custom-responsive' class
                    $('#fcs-theme-panel').removeClass('custom-responsive');
                    $('#fcs-theme-panel').accordionSlider('responsiveMode', 'auto');

                    // change the arrows' visibility
                    $('.auto-arrow').show();
                    $('.custom-arrow').hide();
                } else if ($(this).hasClass('custom')) {
                    // change the responsive mode to 'custom' and add the 'custom-responsive'
                    // class in order to use it as a reference in the CSS code
                    $('#fcs-theme-panel').addClass('custom-responsive');
                    $('#fcs-theme-panel').accordionSlider('responsiveMode', 'custom');

                    // change the arrows' visibility
                    $('.custom-arrow').show();
                    $('.auto-arrow').hide();
                }
            });
        });
    </script>
    @endsection