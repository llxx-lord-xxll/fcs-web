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
            
@endsection