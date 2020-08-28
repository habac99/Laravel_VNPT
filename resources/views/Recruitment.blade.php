@extends('master')
@section('title')
    Thông tin tuyển dụng
@endsection
@section('content')
    <div class="banner-breadcrumb">
        <div class="white-border"></div>
        <a href="#">Thông tin tuyển dụng</a>

    </div>
    <div class="hr-chinhsach-main-content">

        <div class="newsWrapper tuyendungWrapper">
            <div class="container content">
                <div class="row">
                    <div class="col-xs-12 col-sm-12">
                        <div class="row ttlhtd">
                            <div class="col-xs-12 col-lg-10">
                                <div class="margin-bottom-10" style="font-size: 18px">THÔNG TIN LIÊN HỆ TUYỂN DỤNG</div>
                                <span style="color: #0078ca; font-size: 16px; font-weight: bold"><i class="fa fa-phone" aria-hidden="true"></i>&nbsp;
                            (+84)-2462944447                        </span>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <i class="fa fa-envelope-o" aria-hidden="true"></i>&nbsp;tuyendung@dcv.vn                    </div>
                        </div>
                        <br>

                    </div>
                </div>
                <div class="row contentNews">

                @foreach($posts as $post)

                        <div class="col-xl-3 col-md-6 mb-3 newsItem tdItem">
                            <a href="{{route('job_details', str_replace(' ','-',$post->job_name))}}">
                                <img width="568" height="378" src="{{asset($post->image)}}" class="attachment-tintuc size-tintuc wp-post-image" alt="chuyen vien tuyen dung linh vuc it">    </a>
                            <div class="newsTitle">
                                <a href="{{route('job_details', str_replace(' ','-',$post->job_name))}}">
                                    {{$post->job_name}}        </a>
                            </div>
                            <div class="tuyendungIndicator">
                                <p><i class="fa fa-bookmark-o" aria-hidden="true"></i>Loại hình: <b>
                                        {{$post->type}}           </b></p>
                                <p><i class="fa fa-usd" aria-hidden="true"></i>Mức lương: <b>
                                        {{$post->salary}}$            </b></p>

                                <p><i class="fa fa-tasks" aria-hidden="true"></i>Yêu cầu kinh nghiệm: <b>
                                        &gt; {{$post->experience}} Năm          </b></p>


                                <p></p>
                                <p>
                                    <i class="fa fa-clock-o" aria-hidden="true"></i>Hạn nộp hồ sơ: <b>
                                        <span id="dnn_ctr551_Main_DanhSachTuyenDung_rptObject_lblHan_5" style="color:Red;">{{$post->expire_on}}</span></b>

                                </p>



                            </div>
                        </div>
                @endforeach







                        <div style="clear: both"></div>

                </div>


            </div>
        </div>

        <div class="tdAbout" style="background-image: url(https://dcv.vn/wp-content/uploads/2017/03/tuyen-dung.png);">
            <div class="container ctAbout">
                <div class="ctWrapper">
                    <div class="row">
                        <div class="col-xs-12 ctHeader margin-top-20">
                            Cùng gia nhập gia đình DCV                </div>
                        <div class="col-xs-12 text-justify ctContent margin-top-20">Công ty Cổ phần Truyền Số Liệu là một trong những doanh nghiệp Công nghệ thông tin hàng đầu hiện nay tại thị trường Việt Nam. Chúng tôi chuyên cung cấp các sản phẩm/dịch vụ&nbsp;CNTT và ứng dụng cho các Cơ quan nhà nước, Ngân hàng, các trường Đại học và Doanh nghiệp.</div>
                        <div class="col-xs-12 text-justify margin-top-20" style="font-weight: bold; font-size: 16px; line-height: 28px;">Tổng số nhân sự : <span style="color: #ceec35;">120 người</span></div>
                        <div class="col-xs-12 text-center margin-top-20"><img class="alignnone size-full wp-image-1721" src="http://dcv.vn/wp-content/uploads/2017/03/user-2.png" alt="user" width="483" height="88" srcset="https://dcv.vn/wp-content/uploads/2017/03/user-2.png 483w, https://dcv.vn/wp-content/uploads/2017/03/user-2-300x55.png 300w" sizes="(max-width: 483px) 100vw, 483px"></div>
                        <div class="col-xs-12 margin-top-20"></div>
                        <div class="col-xs-12 ctHeader text-center margin-top-20" style="font-weight: bold;">LÀM HẾT SỨC, CHƠI HẾT MÌNH</div>
                        <div class="col-xs-12 text-center margin-top-20 party">
                            <div class="col-sm-4 col-xs-4"><img class="alignnone size-full wp-image-1724" src="http://dcv.vn/wp-content/uploads/2017/03/party-1.png" alt="party-1" width="133" height="103"></div>
                            <div class="col-sm-4 col-xs-4"><img class="alignnone size-full wp-image-1725" src="http://dcv.vn/wp-content/uploads/2017/03/party-2.png" alt="party-2" width="151" height="103" srcset="https://dcv.vn/wp-content/uploads/2017/03/party-2.png 151w, https://dcv.vn/wp-content/uploads/2017/03/party-2-150x103.png 150w" sizes="(max-width: 151px) 100vw, 151px"></div>
                            <div class="col-sm-4 col-xs-4"><img class="alignnone size-full wp-image-1726" src="http://dcv.vn/wp-content/uploads/2017/03/party3.png" alt="party3" width="147" height="103"></div>
                        </div>
                        <!-- <div class="col-xs-12 text-justify ctContent margin-top-20">
                            Công ty Cổ phần Truyền Số Liệu DCV là một trong những doanh nghiệp Công nghệ thông tin hàng đầu hiện nay tại thị ttdrường Việt Nam. Chúng tôi chuyên cung cấp các sản phẩm phần mềm và ứng dụng cho các Cơ quan nhà nước, Ngân hàng, các trường Đại học và Doanh nghiệp
                        </div>
                        <div class="col-xs-12 text-justify margin-top-20" style="font-weight: bold; font-size: 16px; line-height: 28px">
                            Tổng số nhân sự : <span style="color: #ceec35">80 người</span>
                        </div>
                        <div class="col-xs-12 text-center margin-top-20">
                            <img src="http://trinam.com.vn/images/trinam/tuyendung/icon/user.png">
                        </div>
                        <div class="col-xs-12 margin-top-20">
                            <div style="border-top: 1px solid #fff; width: 90%; margin: auto">
                            </div>
                        </div>
                        <div class="col-xs-12 ctHeader text-center margin-top-20" style="font-weight:bold">
                            LÀM HẾT SỨC, CHƠI HẾT MÌNH
                        </div>
                        <div class="col-xs-12 text-center margin-top-20">
                            <img class="lhschm" src="http://trinam.com.vn/images/trinam/tuyendung/icon/party.png">
                        </div> -->
                    </div>
                </div>
            </div>
        </div>

        <div>
            <div class="container content">
                <div class="row dsTuyenDung">
                    <div class="col-sm-6">
                        <!-- <div class="margin-bottom-20">
                            <div style="border-top: 1px solid #666666; height: 1px; width: 80px; margin-bottom: 10px;"></div>
                            <div class="ttHeader">
                                Quyền lợi nhân viên
                            </div>
                        </div>
                        <img src="http://trinam.com.vn/images/trinam/tuyendung/icon/td1.png">
                        <div class="ttContent1">
                            <div>Được tin tưởng và tạo điều kiện tốt nhất để khẳng định năng lực bản thân. Được đào tạo để nâng cao kiến thức</div>
                        </div>
                        <img src="http://trinam.com.vn/images/trinam/tuyendung/icon/td2.png">
                        <div class="ttContent1">
                            <div>Làm việc trong môi trường năng động, cạnh tranh. Không chỉ làm việc, bạn được học hỏi rất nhiều</div>
                        </div>
                        <img src="http://trinam.com.vn/images/trinam/tuyendung/icon/td3.png">
                        <div class="ttContent1">
                            <div>Mọi đãi ngộ, ghi nhận đánh giá chỉ dựa trên chất lượng công việc. Không cần biết bạn có những bằng cấp gì. Không quan trọng bạn đến từ đâu.</div>
                        </div>
                        <img src="http://trinam.com.vn/images/trinam/tuyendung/icon/td4.png">
                        <div class="ttContent1">
                            <div>Không gian làm việc sáng tạo, tạo sự thoải mái nhất để bạn phát huy được tốt nhất thế mạnh của mình</div>
                        </div>
                        <img src="http://trinam.com.vn/images/trinam/tuyendung/icon/td5.png">
                        <div class="ttContent1">
                            <div>Thu nhập top đầu thị trường. Có thưởng dự án và thưởng Tết dựa trên năng lực và đóng góp cho những dự án của công ty</div>
                        </div>

                        <div class="text-center" style="width: 100%; color: white">
                            <a class="btn bttdhl" href="tel:+84466748746">
                                <div class="margin-top-10 margin-bottom-20" style="font-size: 12px; font-weight: bold">HOTLINE</div>
                                <div style="font-size: 32px; font-weight: bold; line-height: 32px;"><i class="fa fa-phone" aria-hidden="true"></i>&nbsp;&nbsp;0466 748 746</div>
                            </a>
                        </div> -->
                        <div class="margin-bottom-20">
                            <div style="border-top: 1px solid #666666; height: 1px; width: 80px; margin-bottom: 10px;"></div>
                            <div class="ttHeader">
                                Quyền lợi nhân viên
                            </div>
                        </div>
                        <p><img class="alignnone size-full wp-image-1674" src="http://dcv.vn/wp-content/uploads/2017/03/td1.png" alt="td1" width="56" height="52"></p>
                        <div class="ttContent1">
                            <div>Được tin tưởng và tạo điều kiện tốt nhất để khẳng định năng lực bản thân. Được đào tạo để nâng cao kiến thức.</div>
                        </div>
                        <p><img class="alignnone size-full wp-image-1675" src="http://dcv.vn/wp-content/uploads/2017/03/td2.png" alt="td2" width="56" height="53"></p>
                        <div class="ttContent1">
                            <div>Làm việc trong môi trường năng động, cạnh tranh. Không chỉ làm việc, bạn được học hỏi rất nhiều.</div>
                        </div>
                        <p><img class="alignnone size-full wp-image-1676" src="http://dcv.vn/wp-content/uploads/2017/03/td3.png" alt="td3" width="53" height="53"></p>
                        <div class="ttContent1">
                            <div>Mọi đãi ngộ, ghi nhận đánh giá chỉ dựa trên chất lượng công việc. Không cần biết bạn có những bằng cấp gì. Không quan trọng bạn đến từ đâu.</div>
                        </div>
                        <p><img class="alignnone size-full wp-image-1677" src="http://dcv.vn/wp-content/uploads/2017/03/td4.png" alt="td4" width="53" height="51"></p>
                        <div class="ttContent1">
                            <div>Không gian làm việc sáng tạo, tạo sự thoải mái nhất để bạn phát huy được tốt nhất thế mạnh của mình.</div>
                        </div>
                        <p><img class="alignnone size-full wp-image-1678" src="http://dcv.vn/wp-content/uploads/2017/03/td5.png" alt="td5" width="53" height="50"></p>
                        <div class="ttContent1">
                            <div>Thu nhập top đầu thị trường. Có thưởng dự án và thưởng Tết dựa trên năng lực và đóng góp cho những dự án của công ty.</div>
                        </div>
                        <div class="text-center" style="width: 100%; color: white">
                            <a class="btn bttdhl" href="javascript:void(0);">
                                <div class="margin-top-10 margin-bottom-20" style="font-size: 12px; font-weight: bold">HOTLINE</div>
                                <div style="font-size: 32px; font-weight: bold; line-height: 32px;"><i class="fa fa-phone" aria-hidden="true"></i>&nbsp;&nbsp;
                                    (+84)-2462944447</div>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="margin-bottom-20">
                            <div style="border-top: 1px solid #666666; height: 1px; width: 80px; margin-bottom: 10px;"></div>
                            <div class="ttHeader">
                                Quy trình tuyển dụng
                            </div>
                        </div>
                        <p><img class="alignnone size-full wp-image-1679" src="http://dcv.vn/wp-content/uploads/2017/03/td6.png" alt="td6" width="76" height="76"></p>
                        <div class="ttContent2">
                            <h2>Bước 1: Ứng tuyển</h2>
                            <div>Gửi Mẫu thông tin ứng viên hoặc Sơ yếu lý lịch tự thuật (CV) bao gồm các thông tin cá nhân, quá trình học tập, kinh nghiệm, mục tiêu… gửi về mail: <a href="mailto:tuyendung@dcv.vn">tuyendung@dcv.vn</a></div>
                        </div>
                        <p><img class="alignnone size-full wp-image-1680" src="http://dcv.vn/wp-content/uploads/2017/03/td7.png" alt="td7" width="72" height="73"></p>
                        <div class="ttContent2">
                            <h2>Bước 2: Tiếp nhận và sàng lọc hồ sơ</h2>
                            <div>Chúng tôi sẽ tập hợp và chọn những ứng viên có những thông tin gần với yêu cầu của vị trí cần tuyển để mời phỏng vấn</div>
                        </div>
                        <p><img class="alignnone size-full wp-image-1681" src="http://dcv.vn/wp-content/uploads/2017/03/td8.png" alt="td8" width="72" height="72"></p>
                        <div class="ttContent2">
                            <h2>Bước 3: Phỏng vấn</h2>
                            <div>Đây là lần gặp gỡ chính thức đầu tiên giữa ứng viên và Công ty. Thông qua buổi phỏng vấn này, Công ty có thêm các thông tin để đánh giá mức độ phù hợp của ứng viên dự tuyển với công việc cần tuyển.</div>
                        </div>
                        <p><img class="alignnone size-full wp-image-1682" src="http://dcv.vn/wp-content/uploads/2017/03/td9.png" alt="td9" width="74" height="72"></p>
                        <div class="ttContent2">
                            <h2>Bước 4: Thỏa thuận hợp đồng</h2>
                            <div>Trong buổi phóng vấn các ứng viên sẽ thoả thuận về hợp đồng lao động và các vấn đề liên quan, bao gồm: loại hợp đồng, công việc, mức lương, thời gian làm việc.</div>
                        </div>
                        <p><img class="alignnone size-full wp-image-1683" src="http://dcv.vn/wp-content/uploads/2017/03/td10.png" alt="td10" width="74" height="72"></p>
                        <div class="ttContent2">
                            <h2>Bước 5: Hoàn thiện hồ sơ sau khi trúng tuyển</h2>
                            <div>Sau khi trúng tuyển, bạn cần chuẩn bị giấy tờ sau:<br>
                                <i>Sơ yếu lý lịch bản gốc | Giấy khai sinh bản sao hoặc công chứng | Giấy khám sức khỏe có dấu tròn | Chứng minh thư photo có xác nhận của địa phương | Bằng tốt nghiệp bản sao | Giấy chứng nhận sinh viên (nếu có) | Bảng điểm, chứng chỉ bản sao | 02 ảnh 03 x 04, 2 ảnh 04×06.</i></div>
                        </div>
                        <!-- <div class="margin-bottom-20">
                            <div style="border-top: 1px solid #666666; height: 1px; width: 80px; margin-bottom: 10px;"></div>
                            <div class="ttHeader">
                                Quy trình tuyển dụng
                            </div>
                        </div>
                        <img src="http://trinam.com.vn/images/trinam/tuyendung/icon/td6.png">
                        <div class="ttContent2">
                            <h2>Bước 1: Ứng tuyển</h2>
                            <div>Gửi Mẫu thông tin ứng viên hoặc Sơ yếu lý lịch tự thuật (CV) bao gồm các thông tin cá nhân, quá trình học tập, kinh nghiệm, mục tiêu... gửi về  mail: <a href="mailto:tuyendung@trinam.com.vn" target="_top">contact@dcv.vn</a></div>
                        </div>
                        <img src="http://trinam.com.vn/images/trinam/tuyendung/icon/td7.png">
                        <div class="ttContent2">
                            <h2>Bước 2: Tiếp nhận và sàng lọc hồ sơ</h2>
                            <div>Chúng tôi sẽ tập hợp và chọn những ứng viên có những thông tin gần với yêu cầu của vị trí cần tuyển để mời phỏng vấn</div>
                        </div>
                        <img src="http://trinam.com.vn/images/trinam/tuyendung/icon/td8.png">
                        <div class="ttContent2">
                            <h2>Bước 3: Phỏng vấn</h2>
                            <div>Đây là lần gặp gỡ chính thức đầu tiên giữa ứng viên và Công ty. Thông qua buổi phỏng vấn này, Công ty có thêm các thông tin để đánh giá mức độ phù hợp của ứng viên dự tuyển với công việc cần tuyển.</div>
                        </div>
                        <img src="http://trinam.com.vn/images/trinam/tuyendung/icon/td9.png">
                        <div class="ttContent2">
                            <h2>Bước 4: Thỏa thuận hợp đồng</h2>
                            <div>Trong buổi phóng vấn các ứng viên sẽ thoả thuận về hợp đồng lao động và các vấn đề liên quan, bao gồm: loại hợp đồng, công việc, mức lương, thời gian làm việc. </div>
                        </div>
                        <img src="http://trinam.com.vn/images/trinam/tuyendung/icon/td10.png">
                        <div class="ttContent2">
                            <h2>Bước 5: Hoàn thiện hồ sơ sau khi  trúng tuyển</h2>
                            <div>
                                Sau khi trúng tuyển, bạn cần chuẩn bị giấy tờ sau:<br>
                                <i>Sơ yếu lý lịch bản gốc | Giấy khai sinh bản sao hoặc công chứng | Giấy khám sức khỏe có dấu tròn | Chứng minh thư photo có xác nhận của địa phương | Bằng tốt nghiệp bản sao | Giấy chứng nhận sinh viên (nếu có) | Bảng điểm, chứng chỉ bản sao | 02 ảnh 03 x 04, 2 ảnh 04x06.</i>
                            </div>
                        </div> -->
                    </div>
                </div>

            </div>
        </div>

        <style type="text/css">
            .tdAbout {
                background: url(http://trinam.com.vn/images/trinam/tuyendung/bg/about.png) top center no-repeat;
                background-size: cover;
            }
            .tdAbout .ctAbout {
                min-height: 673px;
                padding: 15px;
                margin-right: auto;
                margin-left: auto;
                padding-left: 15px;
                padding-right: 15px;
                color: white;
            }
            .tdAbout .ctWrapper {
                max-width: 540px;
            }
            .tdAbout .ctHeader {
                font-size: 28px;
            }
            .margin-top-20 {
                margin-top: 20px;
            }
            .margin-bottom-20 {
                margin-bottom: 20px;
            }
            .tdAbout .ctContent {
                font-size: 14px;
                line-height: 28px;
            }
            .content {
                min-height: 250px;
                padding: 15px;
                margin-right: auto;
                margin-left: auto;
                padding-left: 15px;
                padding-right: 15px;
            }
            .dsTuyenDung {
                text-align: justify;
            }
            .ttContent1 {
                margin-left: 70px;
                margin-bottom: 20px;
                height: 77px;
            }
            .dsTuyenDung img {
                float: left;
            }
            .ttHeader {
                text-align: left;
                font-size: 22px;
                line-height: 40px;
                color: #404040;
                font-family: Arial;
            }
            .ttContent2 {
                margin-left: 90px;
                margin-bottom: 20px;
            }
            .dsTuyenDung h2 {
                margin: 0px;
                font-size: 18px;
                font-family: Arial;
                font-weight: bold;
                padding: 10px 0;
                position: relative;
                clear: none;
            }
            .bttdhl {
                width: 400px;
                height: 100px;
                background-color: #03a697;
                color: white;
            }
            .bttdhl:hover {
                background-color: #03a697;
            }

            .btnApplyJob{
                margin-top: 0;
            }

            .btnApplyJob:hover{
                margin-top: 0;
            }
            .contentNews a{
                display: block;
                overflow: hidden;
            }
            .contentNews img, .dsTuyenDung img, .party img { transition: all .2s ease-in-out; }
            .contentNews img:hover{ transform: scale(1.1); }
            .dsTuyenDung img:hover, .party img:hover{ transform: scale(1.05); }
            .party img:hover{ transform: scale(1.03); }
            .newsItem.tdItem{
                margin-bottom: 10px;
            }
        </style>

    </div>

@endsection
