@extends($template)

@section('title')
    {{$page_title}}
@endsection

@section('header-extra')
    <link rel="stylesheet" href="{{asset('css/zoomtimeline.css')}}">
@endsection
@section('page-content')
    {!! $data !!}

@endsection

