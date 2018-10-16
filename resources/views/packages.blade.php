@extends($template)

@section('header-extra')

@endsection

@section('title')
    {{$page_title}}
@endsection


@section('page-content')

    {!! $data !!}

@endsection

@section('scripts')


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


    
    @endsection