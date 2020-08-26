@extends('master')
@section('title')
    {{$id[0]->service_name}}
@endsection
@section('content')
    <div class="banner-breadcrumb">
        <div class="white-border"></div>
        <a href="#">{{$id[0]->service_name}}</a>

    </div>
    <div class="featured_services">
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    @foreach($services as $service)
                    <div class="wow slideInLeft  col-lg-6 col-md-6 col-sm-12 col-xs-12 animated" id="post-1170" style="visibility: visible; animation-name: slideInLeft;">
                        <div class="a-service">
                            <div class="a-service-title a1">
                                <a href="{{route('get_service',$service->alt_name)}}">{{$service->service_name}}</a>
                            </div>
                            <div class="a-service-img">
                                <a href="#"><img width="720" height="391" src="{{asset($service->logo)}}" class="attachment-service size-service wp-post-image" alt="DCV cho thuê tổng đài 1900"></a>
                            </div>
                            <div class="a-service-desc">
                                <p>
                                </p><p>{{$service->short_description}}</p>
                                <p></p>
                            </div>
                            <a href="#" class="viewmore">
                                Đọc thêm                  <i class="fa fa-angle-double-right" aria-hidden="true" style="margin-left: 3px;"></i></a>
                        </div>
                    </div>
                    @endforeach

                </div>
                <div class="justify-content-center">
                    {!! $services->links()!!}
                </div>
            </div>

        </div>


    </div>

@endsection
