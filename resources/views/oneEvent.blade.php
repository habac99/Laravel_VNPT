@extends('master')
@section('title')
   {{$event[0]->name}}
@endsection
@section('content')
    <div class="banner-breadcrumb">
        <div class="white-border"></div>
        <a href="#">{{$event[0]->name}} </a>

    </div>
    <div id="primary" class="news-main-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    {!! $event[0]->full_description !!}
                </div>
                @include('sidebar')
            </div>
        </div>
    </div>
@endsection
