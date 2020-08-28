
@extends('master')
@section('title')
    Sự kiện nổi bật
@endsection
@section('content')
    <div class="banner-breadcrumb">
        <div class="white-border"></div>
        <a href="#">Sự kiện nổi bật</a>

    </div>
    <div id="primary" class="news-main-content">
        <div class="container">
            <div class="row">

                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <div class="left-side">
                        <div class="list-news">
                            @foreach($events as $event)
                                <li class="a-news wow fadeIn  animated" id="post-3217" style="visibility: visible; animation-name: fadeIn;">
                                    <div class="a-news-img">
                                        <div class="a-news-img-inside">
                                            <a href="{{route('getOneEvent',str_replace(' ','-',$event->name))}}" class="display: block;"><img width="738" height="378" src="{{$event->cover_image}}" class="attachment-tintuc size-tintuc wp-post-image" alt="Thiết kế không tên"></a>
                                        </div>
                                    </div>
                                    <div class="a-news-info">
                                        <a href="{{route('getOneEvent',str_replace(' ','-',$event->name))}}">{{$event->name}}</a>
                                        <p>
                                        </p><p>{{$event->short_description}}</p>
                                        <p></p>
                                    </div>
                                </li>
                            @endforeach
                        </div>
                    </div>
                    @foreach($events as $event)
                    @endforeach

                </div>

                @include('sidebar')
            </div>
        </div>
    </div>
    {{$events->links()}}
@endsection
