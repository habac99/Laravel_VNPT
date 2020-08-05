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
                    <div class="a-service-img">
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
{{--<div class="container text-center my-3">--}}
{{--    <h2>Our Certifications</h2>--}}
{{--    <div class="row mx-auto my-auto">--}}
{{--        <div id="recipeCarousel" class="carousel slide w-100" data-ride="carousel">--}}
{{--            <div class="carousel-inner w-100" role="listbox">--}}
{{--                <div class="carousel-item active">--}}
{{--                    <img width="900" height="1200" class="d-block col-3 img-fluid" src="https://cdn.shopify.com/s/files/1/2304/9095/files/NMSDC.png?10873">--}}
{{--                </div>--}}
{{--                <div class="carousel-item">--}}
{{--                    <img class="d-block col-3 img-fluid" src="https://cdn.shopify.com/s/files/1/2304/9095/files/DBE-ACDBE-logo.png?10873">--}}
{{--                </div>--}}
{{--                <div class="carousel-item">--}}
{{--                    <img class="d-block col-3 img-fluid" src="https://cdn.shopify.com/s/files/1/2304/9095/files/MBE_LOGO.png?10873">--}}
{{--                </div>--}}
{{--                <div class="carousel-item">--}}
{{--                    <img class="d-block col-3 img-fluid" src="https://cdn.shopify.com/s/files/1/2304/9095/files/2018_WBENC_logo_text_gray.png?10873">--}}
{{--                </div>--}}
{{--                <div class="carousel-item">--}}
{{--                    <img class="d-block col-3 img-fluid" src="http://novel-mg.com/assets/cert_logo.png">--}}
{{--                </div>--}}
{{--                <div class="carousel-item">--}}
{{--                    <img class="d-block col-3 img-fluid" src="https://www.kriaanet.com/wp-content/uploads/2019/02/300ppi-feat-logo_feat_logo-EDWOSB.png">--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <a class="carousel-control-prev" href="#recipeCarousel" role="button" data-slide="prev">--}}
{{--                <span class="carousel-control-prev-icon" aria-hidden="true"></span>--}}
{{--                <span class="sr-only">Previous</span>--}}
{{--            </a>--}}
{{--            <a class="carousel-control-next" href="#recipeCarousel" role="button" data-slide="next">--}}
{{--                <span class="carousel-control-next-icon" aria-hidden="true"></span>--}}
{{--                <span class="sr-only">Next</span>--}}
{{--            </a>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
{{--<div class="top-content">--}}
{{--    <div class="container-fluid">--}}
{{--        <div id="carousel-example" class="carousel slide" data-ride="carousel">--}}
{{--            <div class="carousel-inner row w-100 mx-auto" role="listbox">--}}
{{--                <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3 active">--}}
{{--                    <img src="https://cdn.shopify.com/s/files/1/2304/9095/files/NMSDC.png?10873" class="img-fluid mx-auto d-block" alt="img1">--}}
{{--                </div>--}}
{{--                <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">--}}
{{--                    <img src="https://cdn.shopify.com/s/files/1/2304/9095/files/DBE-ACDBE-logo.png?10873" class="img-fluid mx-auto d-block" alt="img2">--}}
{{--                </div>--}}
{{--                <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">--}}
{{--                    <img src="https://cdn.shopify.com/s/files/1/2304/9095/files/MBE_LOGO.png?10873" class="img-fluid mx-auto d-block" alt="img3">--}}
{{--                </div>--}}
{{--                <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">--}}
{{--                    <img src="https://cdn.shopify.com/s/files/1/2304/9095/files/2018_WBENC_logo_text_gray.png?10873" class="img-fluid mx-auto d-block" alt="img4">--}}
{{--                </div>--}}
{{--                <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">--}}
{{--                    <img src="http://novel-mg.com/assets/cert_logo.png" class="img-fluid mx-auto d-block" alt="img5">--}}
{{--                </div>--}}
{{--                <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">--}}
{{--                    <img src="https://www.kriaanet.com/wp-content/uploads/2019/02/300ppi-feat-logo_feat_logo-EDWOSB.png" class="img-fluid mx-auto d-block" alt="img6">--}}
{{--                </div>--}}
{{--                <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">--}}
{{--                    <img src="https://cdn.shopify.com/s/files/1/2304/9095/files/MBE_LOGO.png?10873" class="img-fluid mx-auto d-block" alt="img7">--}}
{{--                </div>--}}
{{--                <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">--}}
{{--                    <img src="https://cdn.shopify.com/s/files/1/2304/9095/files/DBE-ACDBE-logo.png?10873" class="img-fluid mx-auto d-block" alt="img8">--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <a class="carousel-control-prev" href="#carousel-example" role="button" data-slide="prev">--}}
{{--                <span class="carousel-control-prev-icon" aria-hidden="true"></span>--}}
{{--                <span class="sr-only">Previous</span>--}}
{{--            </a>--}}
{{--            <a class="carousel-control-next" href="#carousel-example" role="button" data-slide="next">--}}
{{--                <span class="carousel-control-next-icon" aria-hidden="true"></span>--}}
{{--                <span class="sr-only">Next</span>--}}
{{--            </a>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
{{--    <script>--}}
{{--        $('#recipeCarousel').carousel({--}}
{{--            interval :2000--}}
{{--        })--}}

{{--        $('.carousel .carousel-item').each(function(){--}}
{{--            var next = $(this).next();--}}
{{--            if (!next.length) {--}}
{{--                next = $(this).siblings(':first');--}}
{{--            }--}}
{{--            next.children(':first-child').clone().appendTo($(this));--}}

{{--            for (var i=0;i<2;i++) {--}}
{{--                next=next.next();--}}
{{--                if (!next.length) {--}}
{{--                    next = $(this).siblings(':first');--}}
{{--                }--}}

{{--                next.children(':first-child').clone().appendTo($(this));--}}
{{--            }--}}
{{--        });--}}

{{--    </script>--}}
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
                                                <a href="https://dcv.vn/ngay-dau-nam-2020-hanh-huong-den-tam-chuc/"><img width="348" height="209" src="{{$featured_new->cover_image}}" class="attachment-slide-tintuc size-slide-tintuc wp-post-image" alt="Thiết kế không tên"></a>
                                            </div>
                                        </div>
                                        <div class="a-news-title">
                                            <a href="https://dcv.vn/ngay-dau-nam-2020-hanh-huong-den-tam-chuc/">{{$featured_new->name}}</a>
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

{{--                            <div class="owl-item" style="width: 390px;">--}}
{{--                                <div class="item wow slideInUp  animated" data-wow-delay="0s" style="visibility: visible; animation-delay: 0s; animation-name: slideInUp;">--}}
{{--                                    <div class="a-news">--}}
{{--                                        <div class="a-news-img">--}}
{{--                                            <div class="a-news-img-inside">--}}
{{--                                                <a href="https://dcv.vn/ngay-dau-nam-2020-hanh-huong-den-tam-chuc/"><img width="348" height="209" src="https://vnptproject.blob.core.windows.net/imagecontainer/Thiết-kế-không-tên-348x209.png" class="attachment-slide-tintuc size-slide-tintuc wp-post-image" alt="Thiết kế không tên"></a>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="a-news-title">--}}
{{--                                            <a href="https://dcv.vn/ngay-dau-nam-2020-hanh-huong-den-tam-chuc/">NGÀY ĐẦU NĂM 2020 – HÀNH HƯƠNG ĐẾN TAM CHÚC</a>--}}
{{--                                        </div>--}}
{{--                                        <div class="a-news-desc">--}}
{{--                                            <p>--}}
{{--                                            </p><p>Chùa Tam Chúc cổ được xây dựng từ thời&nbsp;nhà Đinh, gắn với truyền thuyết “Tiền Lục nhạc – hậu Thất Tinh”. Dân gian kể lại có 7 ngọn núi gần làng Tam chúc,xuất hiện&nbsp;một đốm sáng lớn tựa như 7 ngôi sao, sáng suốt đêm ngày. Dân làng gọi đó là núi “Thất Tinh”. Ngôi […]</p>--}}
{{--                                            <p></p>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="owl-item" style="width: 390px;">--}}
{{--                                <div class="item wow slideInUp  animated" data-wow-delay="0s" style="visibility: visible; animation-delay: 0s; animation-name: slideInUp;">--}}
{{--                                    <div class="a-news">--}}
{{--                                        <div class="a-news-img">--}}
{{--                                            <div class="a-news-img-inside">--}}
{{--                                                <a href="https://dcv.vn/ngay-dau-nam-2020-hanh-huong-den-tam-chuc/"><img width="348" height="209" src="https://vnptproject.blob.core.windows.net/imagecontainer/Thiết-kế-không-tên-348x209.png" class="attachment-slide-tintuc size-slide-tintuc wp-post-image" alt="Thiết kế không tên"></a>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="a-news-title">--}}
{{--                                            <a href="https://dcv.vn/ngay-dau-nam-2020-hanh-huong-den-tam-chuc/">NGÀY ĐẦU NĂM 2020 – HÀNH HƯƠNG ĐẾN TAM CHÚC</a>--}}
{{--                                        </div>--}}
{{--                                        <div class="a-news-desc">--}}
{{--                                            <p>--}}
{{--                                            </p><p>Chùa Tam Chúc cổ được xây dựng từ thời&nbsp;nhà Đinh, gắn với truyền thuyết “Tiền Lục nhạc – hậu Thất Tinh”. Dân gian kể lại có 7 ngọn núi gần làng Tam chúc,xuất hiện&nbsp;một đốm sáng lớn tựa như 7 ngôi sao, sáng suốt đêm ngày. Dân làng gọi đó là núi “Thất Tinh”. Ngôi […]</p>--}}
{{--                                            <p></p>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="owl-item" style="width: 390px;">--}}
{{--                                <div class="item wow slideInUp  animated" data-wow-delay="0s" style="visibility: visible; animation-delay: 0s; animation-name: slideInUp;">--}}
{{--                                    <div class="a-news">--}}
{{--                                        <div class="a-news-img">--}}
{{--                                            <div class="a-news-img-inside">--}}
{{--                                                <a href="https://dcv.vn/ngay-dau-nam-2020-hanh-huong-den-tam-chuc/"><img width="348" height="209" src="https://vnptproject.blob.core.windows.net/imagecontainer/Thiết-kế-không-tên-348x209.png" class="attachment-slide-tintuc size-slide-tintuc wp-post-image" alt="Thiết kế không tên"></a>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="a-news-title">--}}
{{--                                            <a href="https://dcv.vn/ngay-dau-nam-2020-hanh-huong-den-tam-chuc/">NGÀY ĐẦU NĂM 2020 – HÀNH HƯƠNG ĐẾN TAM CHÚC</a>--}}
{{--                                        </div>--}}
{{--                                        <div class="a-news-desc">--}}
{{--                                            <p>--}}
{{--                                            </p><p>Chùa Tam Chúc cổ được xây dựng từ thời&nbsp;nhà Đinh, gắn với truyền thuyết “Tiền Lục nhạc – hậu Thất Tinh”. Dân gian kể lại có 7 ngọn núi gần làng Tam chúc,xuất hiện&nbsp;một đốm sáng lớn tựa như 7 ngôi sao, sáng suốt đêm ngày. Dân làng gọi đó là núi “Thất Tinh”. Ngôi […]</p>--}}
{{--                                            <p></p>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}



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
















@endsection
