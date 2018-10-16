@extends($template)

@section('title')
    {{$page_title}}
@endsection

@section('page-content')
{!! $data !!}

@endsection