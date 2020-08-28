@extends('master')
@section('title')
    {{$details[0]->job_name}}
@endsection
@section('content')
    <div class="banner-breadcrumb">
        <div class="white-border"></div>
        <a href="#">{{$details[0]->job_name}}</a>

    </div>
    <div class="hr-chinhsach-main-content">
        {!! $details[0]->details !!}
    </div>
@endsection
