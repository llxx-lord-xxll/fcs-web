@extends($template)

@section('title')
    {{$page_title}}
@endsection

@section('header-extra')
    <link rel="stylesheet" href="{{asset('css/zoomtimeline.css')}}">
    <link rel="stylesheet" href="{{asset('css/history-style.css')}}">
    @endsection
@section('page-content')
{!! $data !!}

@endsection

@section('scripts')
    <script type="text/javascript">
        @if(isset($success))
        fbq('track', 'CompleteRegistration');
        @endif

       $(document).ready(function ($) {
       $('#referred_person').parent().css('display','none');
            $(document).on("change", "#chapter_referral" ,function() {
                if($(this).val() === "no")
                {
                    $('#referred_person').parent().css('display','none');
                }
                else
                {
                    $('#referred_person').parent().css('display','flex');
                }

            });

       })

    </script>
    @endsection
