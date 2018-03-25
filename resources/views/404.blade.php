@extends('layouts.main')

@section('title')
    404 Not Found
@endsection


@section('page-content')

    <div class="bg-image-error">
        <div class="container-fluid">
            <h1 class="header-style">Not Found</h1>
        </div>
    </div>

    <!-- 404 Error Section -->
    <section class="container-fluid">
        <div class="row error-section">
            <div class="col-md-12">

                <h1>404</h1>
                <h2><i class="fa fa-frown-o" aria-hidden="true"></i> Oh! The page cannot be found...</h2>
                <h3>The link might be incorrect...</h3>
                <h4>or the page was deleted</h3>
                    <div class="error-button">

                    </div>
            </div>
        </div>
    </section>

@endsection

