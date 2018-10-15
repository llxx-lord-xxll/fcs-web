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

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.min.js"></script>

@endsection