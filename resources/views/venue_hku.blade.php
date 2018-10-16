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