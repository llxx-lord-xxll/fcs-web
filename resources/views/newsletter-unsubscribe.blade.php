@extends('layouts.main')

@section('title')
    Unsubscribed successfully
@endsection

@section('page-content')
    <section id="info">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">    <p class="@if($error) bg-danger @else bg-success @endif">{{$msg}}</p> </div>

            </div>
        </div>
    </section>



    @endsection
