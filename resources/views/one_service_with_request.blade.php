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
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <div class="left-side wow fadeInDown  animated" id="_no-clickjacking-0" style="visibility: visible; animation-name: fadeInDown; opacity: 1; overflow: visible;">
                        <div>
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="">
                                    <a class="nav-link active" href="#home" aria-controls="home" role="tab" data-toggle="tab" aria-expanded="true">
                                        Giới thiệu
                                    </a>
                                </li>
                                <li role="presentation" class="">
                                    <a class="nav-link" href="#profile" aria-controls="profile" role="tab" data-toggle="tab" aria-expanded="false">
                                        Các câu hỏi thường gặp
                                    </a>
                                </li>
                                <li role="presentation" class=""><a class="nav-link" href="#messages" aria-controls="messages" role="tab" data-toggle="tab" aria-expanded="false">
                                        Sử dụng dịch vụ                                                                                            </a></li>
                            </ul>
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="home">
                                {!! $service[0]->full_description!!}
                                </div>
                                <div role="tabpanel" class="tab-pane" id="profile">
                                    <div class="hoidap-desc">
                                        <div class="panel-group" id="accordion">
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1" aria-expanded="false" class="collapsed"><i class="fa fa-plus-square-o" aria-hidden="true"></i>Những lợi thế của DCV</a>
                                                    </h4>
                                                </div>

                                                <div id="collapse1" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body"><i class="fa fa-quote-left" aria-hidden="true"></i>Hiện nay, DCV đang phái cử nhân lực Công nghệ thông tin tới làm việc ngắn và dài hạn tại công ty của khách hàng để thực hiện các công việc sau:
                                                        1. Lập trình viên Java (Java core, Strust, Hibernate, Spring, … )
                                                        2. Lập trình viên PHP
                                                        3. Lập trình viên .Net (C#, VB.net)
                                                        4. Lập trình viên Android
                                                        5. Lập trình viên iOS
                                                        6. Kiểm thử phần mềm
                                                        7. Quản trị dự án
                                                        8. Quản lý hệ thống mạng</div>
                                                </div>
                                            </div>

                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse2" class="" aria-expanded="true"><i class="fa fa-plus-square-o" aria-hidden="true"></i>Phái cử nhân lực CNTT là gì</a>
                                                    </h4>
                                                </div>

                                                <div id="collapse2" class="panel-collapse collapse in" aria-expanded="true" style="">
                                                    <div class="panel-body"><i class="fa fa-quote-left" aria-hidden="true"></i>Tăng năng lực cạnh tranh và tối ưu hóa nguồn lực là bài toán chung của rất nhiều doanh nghiệp. Trong khi đó, việc duy trì các hoạt động không phải là dịch vụ hay sản phẩm chủ chốt khiến doanh nghiệp phải tốn một khoản đầu tư không hề nhỏ cả về nhân lực và vật lực. Trong bối cảnh đó, việc thuê ngoài một đối tác cung cấp các dịch vụ, đặc biệt là các dịch vụ về công nghệ thông tin (CNTT) được xem là một giải pháp hữu hiệu giúp doanh nghiệp tập trung tốt hơn cho các lĩnh vực kinh doanh cốt lõi. Để đáp ứng nhu cầu về nhân sự CNTT, Dịch vụ phái cử nguồn nhân lực CNTT đã ra đời. Hiện nay, trong thị trường phái cử nguồn nhân lực CNTT, Công Cổ phần Truyền số liệu Việt Nam (DCV) là một công ty tiêu biểu cung cấp nhân lực CNTT.</div>
                                                </div>
                                            </div>


                                        </div>
                                    </div>


                                </div>
                                <div role="tabpanel" class="tab-pane" id="messages">
                                    <br>                              <div role="form" class="wpcf7" id="wpcf7-f1195-p1160-o1" lang="vi" dir="ltr">
                                        <div class="screen-reader-response"></div>

                                        <form action="{{route('request_service')}}" method="post" class="wpcf7-form" novalidate="novalidate">
                                            @csrf
                                            <div style="display: none;">
                                                <input type="hidden" name="_wpcf7" value="1195">
                                                <input type="hidden" name="_wpcf7_version" value="4.5.1">
                                                <input type="hidden" name="_wpcf7_locale" value="vi">
                                                <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f1195-p1160-o1">
                                                <input type="hidden" name="_wpnonce" value="c501ca9d47">
                                            </div>
                                            <div class="form-group info">
                                                <h4 class="job-title">Thông tin doanh nghiệp</h4>
                                                <p>
                                                    <span class="wpcf7-form-control-wrap your-copany"><input type="hidden" name="service_name" value="{{$service[0]->service_name}}" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control" aria-required="true" aria-invalid="false" placeholder=""></span><br>
                                                    <span class="wpcf7-form-control-wrap your-copany"><input type="text" name="your-copany" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control" aria-required="true" aria-invalid="false" placeholder="Tên công ty"></span><br>
                                                    <span class="wpcf7-form-control-wrap your-address"><input type="text" name="your-address" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control" aria-required="true" aria-invalid="false" placeholder="Địa chỉ"></span><br>
                                                    <span class="wpcf7-form-control-wrap your-name"><input type="text" name="your-name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control" aria-required="true" aria-invalid="false" placeholder="Người liên hệ"></span><br>
                                                    <span class="wpcf7-form-control-wrap your-phone"><input type="tel" name="your-phone" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-required wpcf7-validates-as-tel form-control" aria-required="true" aria-invalid="false" placeholder="Điện thoại"></span><br>
                                                    <span class="wpcf7-form-control-wrap your-email"><input type="email" name="your-email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email form-control" aria-required="true" aria-invalid="false" placeholder="Email"></span><br>
                                                    <span class="wpcf7-form-control-wrap mota-yeucau"><textarea name="mota-yeucau" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required form-control col-md-5" aria-required="true" aria-invalid="false" placeholder="Mô tả yêu cầu"></textarea></span>
                                                </p>
                                                <div class="clearfix"></div>
                                            </div>
                                            @if(Session::has('success'))
                                                <p class="alert alert-danger p-alert">{{Session::get('success')}}</p>
                                            @endif


                                            <p><input type="submit" value="Gửi" class="wpcf7-form-control wpcf7-submit btn btn-default"><img class="ajax-loader" src="https://dcv.vn/wp-content/plugins/contact-form-7/images/ajax-loader.gif" alt="Đang gửi ..." style="visibility: hidden;"></p>
                                            <div class="wpcf7-response-output wpcf7-display-none"></div>
                                            {{csrf_field()}}
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    </div>
                @include('sidebar')

            </div>
        </div>


    </div>

{{--    @include('bottombar')--}}




@endsection
