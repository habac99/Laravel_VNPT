@extends('master')
@section('title')
    Trang chủ
@endsection
@section('content')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"></script>
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="https://vnptproject.blob.core.windows.net/imagecontainer/1.jpg" alt="First slide">
            </div>
            <div class="carousel-item ">
                <img class="d-block w-100" src="https://vnptproject.blob.core.windows.net/imagecontainer/2.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="https://vnptproject.blob.core.windows.net/imagecontainer/Group-756.png" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <div class ="feature-services">
        <div class="container">
        <div class="main-title">
            <h3>Dịch vụ nổi bật</h3>
        </div>
        <div class="row">
            @foreach($feature_services as $feature_service )
            <div class="col-lg">
                <div class="a-service">
                    <div class="a-service-title">
                        <a href="{{route('get_service',$feature_service->alt_name)}}">
                           <img class="service-category" src="{{$feature_service->logo}}">

                            <span class="service-name">

                            <!-- Hien thi tieu de -->
                          {{$feature_service->service_name}}
                            </span>
                        </a>

                    </div>
                    <div style="margin-top: 10px" class="a-service-img">
                        <a href="{{route('get_service',$feature_service->alt_name)}}"><img width="720" height="478" src="{{$feature_service->image_link}}" class="attachment-main-service size-main-service wp-post-image" alt="quytrinhbpo-01"></a>
                    </div>

                </div>
                <div class="a-service-desc">
                    <p></p>
                    <p>{{$feature_service->short_description}}</p>
                    <p></p>
                </div>
                <a href="{{route('get_service',$feature_service->alt_name)}}" class="viewmore">
                    Đọc thêm                <i class="fa fa-angle-double-right" aria-hidden="true" style="margin-left: 3px;">
                    </i>
                </a>
            </div>
            @endforeach
        </div>
        </div>
    </div>
    <div class="feature_customer">
        <div class="container">
        <div class="main-title">
            <h3>Dự án tiêu biểu</h3>
        </div>
        <div class="row" style="margin-top: 30px;">
            @php $i = 0 @endphp
            @foreach($feature_customers as $feature_customer)
                @if($i %2 ==0)
                    <div class="clear-fix wow slideInLeft  a-customer col-lg-6 col-md-6 col-sm-12 col-xs-12 animated" style="visibility: visible; animation-name: slideInLeft;">
                        <a href="https://dcv.vn/trung-tam-phan-mem-vien-thong-viettel-tap-doan-vien-thong-quan-doi/" class="a1">{{$feature_customer->name}}</a>
                    </div>
                    @php $i++ @endphp
                    @else
                    <div class="wow slideInRight  a-customer col-lg-6 col-md-6 col-sm-12 col-xs-12 animated" style="visibility: visible; animation-name: slideInRight;">
                        <a href="https://dcv.vn/trung-tam-giai-phap-va-thuong-mai-dien-tu-tong-cong-ty-vien-thong-viettel/" class="a2">{{$feature_customer->name}}</a>
                    </div>
                    @php $i++ @endphp
                @endif

            @endforeach


        </div>
        </div>
    </div>
    <div class="testimonialbox clearfix">
        <div class="container">
            <div class="main-title">
                <h3>Nhận xét của khách hàng</h3>
            </div>
            <div class="row abcd ">
                <div id="owl-demo2" class="owl-carousel owl-theme" style="opacity: 1; display: block;">
                    <div class="owl-wrapper-outer">
                        <div class="owl-wrapper" style="width: 2340px; left: 0px; display: block; transition: all 1000ms ease 0s; transform: translate3d(0px, 0px, 0px);">
                            @foreach($comments as $comment)
                            <div class="owl-item" style="width: 390px;">
                                <div class="item wow slideInUp  animated" data-wow-delay="0s" style="visibility: visible; animation-delay: 0s; animation-name: slideInUp;">
                                    <div class="client-say-wrap">
                                        <a href="javascript:void(0);" class="testimonials-first says-one fadeInLeft animate">
                                            <div class="image-holder">
                                                <img width="164" height="144" src="{{$comment->image}}" class="attachment-tuyen-dung size-tuyen-dung wp-post-image" alt="sinh-vien-nam-3-thuc-tap-nganh-cntt-2016-04">
                                            </div>
                                            <p class="name">{{$comment->name}}</p>
                                            <p class="organization">{{$comment->company}}</p>
                                            <p class="message">“{{$comment->comment}}”</p>

                                        </a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                      </div>
                    <div class="owl-controls clickable" style="display: none;">
                        <div class="owl-pagination"><div class="owl-page active"
                            ><span class=""></span>
                            </div>
                        </div>
                    </div>

                </div>
                <a class="btn prev1"><span class="lnr lnr-chevron-left"></span></a>
                <a class="btn  next1"><span class="lnr lnr-chevron-right"></span></a>
            </div>
{{--            <div class="container-fluid">--}}
{{--                <div id="carouselExample" class="carousel slide" data-ride="carousel" data-interval="9000">--}}
{{--                    <div class="carousel-inner carousel-inner1 row w-100 mx-auto" role="listbox">--}}
{{--                        @foreach($comments as $comment )--}}
{{--                            @if($loop->index == 0 )--}}
{{--                                <div  class="carousel-item carousel-item1 active "  style="width: 390px;">--}}
{{--                            @else--}}
{{--                                <div class="carousel-item col-md-3" style="width: 390px;">--}}
{{--                            @endif--}}
{{--                                    <div style="width: 390px;">--}}
{{--                                        <div class="client-say-wrap">--}}
{{--                                            <a href="javascript:void(0);" class="testimonials-first says-one fadeInLeft animate">--}}
{{--                                                <div class="image-holder">--}}
{{--                                                    <img width="164" height="144" src="{{$comment->image}}" class="attachment-tuyen-dung size-tuyen-dung wp-post-image" alt="sinh-vien-nam-3-thuc-tap-nganh-cntt-2016-04">--}}
{{--                                                </div>--}}
{{--                                                <p class="name">{{$comment->name}}</p>--}}
{{--                                                <p class="organization">{{$comment->company}}</p>--}}
{{--                                                <p class="message">“{{$comment->comment}}”</p>--}}
{{--                                            </a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                           @endforeach--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>
    </div>
    <div class="featured_news">
        <div class="container">
            <div class="main-title">
                <h3>Tin Tức nổi bật </h3>
            </div>
            <div class="row abcd" style="margin-top: 30px; position: relative;">
                <div id="owl-demo" class="owl-carousel owl-theme" style="opacity: 1; display: block;">
                    <div class="owl-wrapper-outer">
                        <div class="owl-wrapper" style="width: 7800px; left: 0px; display: block; transition: all 1000ms ease 0s; transform: translate3d(0px, 0px, 0px);">
                            @foreach($featured_news as $featured_new)
                            <div class="owl-item" style="width: 390px;">
                                <div class="item wow slideInUp  animated" data-wow-delay="0s" style="visibility: visible; animation-delay: 0s; animation-name: slideInUp;">
                                    <div class="a-news">
                                        <div class="a-news-img">
                                            <div class="a-news-img-inside">
                                                <a href="{{route('getOneEvent',$featured_new->name)}}"><img width="348" height="209" src="{{$featured_new->cover_image}}" class="attachment-slide-tintuc size-slide-tintuc wp-post-image" alt="Thiết kế không tên"></a>
                                            </div>
                                        </div>
                                        <div class="a-news-title">
                                            <a href="{{route('getOneEvent',str_replace(' ','-',$featured_new->name) )}}">{{$featured_new->name}}</a>
                                        </div>
                                        <div class="a-news-desc">
                                            <p>
                                            </p><p>{{$featured_new->short_description}}</p>
                                            <p></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="owl-controls clickable" style="display: block;">
                        <div class="owl-pagination">
                            <div class="owl-page active">
                                <span class=""></span>
                            </div><div class="owl-page">
                                <span class=""></span></div><div class="owl-page"><span class=""></span></div><div class="owl-page"><span class=""></span></div></div></div></div>
                <a class="btn prev"><span class="lnr lnr-chevron-left"></span></a>
                <a class="btn next"><span class="lnr lnr-chevron-right"></span></a>
                </div>
            </div>


        </div>
    <script type="text/javascript">

            $('#carouselExample').on('slide.bs.carousel', function (e) {

                var $e = $(e.relatedTarget);
                var idx = $e.index();
                var itemsPerSlide = 3;
                var totalItems = $('.carousel-item').length;

                if (idx >= totalItems-(itemsPerSlide-1)) {
                    var it = itemsPerSlide - (totalItems - idx);
                    for (var i=0; i<it; i++) {
                        // append slides to end
                        if (e.direction=="left") {
                            $('.carousel-item').eq(i).appendTo('.carousel-inner');
                        }
                        else {
                            $('.carousel-item').eq(0).appendTo('.carousel-inner');
                        }
                    }
                }
            });
    </script>
@endsection
