@extends('master')
@section('title')
    {{$service[0]->service_name}}
@endsection
@section('content')
    <div class="banner-breadcrumb">
        <div class="white-border"></div>
        <a href="#">{{$service[0]->service_name}}</a>

    </div>
    <div class="service-detail-content">
        <div class="container">
            <div class="row">
                {!! $service[0]->full_description !!}
                @include('sidebar')
            </div>

        </div>


    </div>

    {{--    @include('bottombar')--}}




@endsection
