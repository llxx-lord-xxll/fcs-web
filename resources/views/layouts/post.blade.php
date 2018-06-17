@extends('layouts.mainCopy')

@section('title')
    {{$data->post_title}}
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
                    {{$data->post_title}}
                </h2>
                <div class="fcs-meta">
                    <span class="fcs-pub-date">Posted {{\Carbon\Carbon::parse($data->created_at)->format("d M, Y")}}</span>
                </div>
            </header>
            <div class="fcs-article-content">
                {!! $data->post_content !!}
            </div>
        </article>

    </section>

@endsection

