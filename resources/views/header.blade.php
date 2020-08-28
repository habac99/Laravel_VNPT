<nav class="navbar navbar-expand-sm bg-dark navbar-dark justify-content-center ">
    <!-- Brand -->
    <a class="navbar-brand" href="{{route('home')}}">Trang chủ</a>

    <!-- Links -->
    <ul class="navbar-nav">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                Giới thiệu
            </a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Về Chúng Tôi</a>
                <a class="dropdown-item" href="#">Giá trị cốt lõi</a>
                <a class="dropdown-item" href="#">Con Người</a>
            </div>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                Dịch vụ
            </a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="{{route('get_service',"Phái-cử-nhân-lực-CNTT")}}">Phái Cử Nhân Lực CNTT</a>
                <a class="dropdown-item" href="{{route('get_service',"Gia-Công-Phần-Mềm")}}">Gia Công Phần Mềm</a>
                <a class="dropdown-item" href="{{route('service_type','it-support')}}" >IT Support</a>
                <a class="dropdown-item" href="{{route('get_service',"Nội-dung-số")}}">Nội Dung Số</a>
                <a class="dropdown-item" href="#">BPO-Thuê Ngoài Quy Trình Nghiệp Vụ</a>
            </div>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                Sản Phẩm
            </a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="{{route('getProduct')}}">All products</a>


            </div>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                Tuyển Dụng
            </a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="{{route('chinh-sach')}}">Chính Sách Nhân Sự</a>
                <a class="dropdown-item" href="{{route('tin-tuyen-dung')}}">Thông Tin Tuyển Dụng</a>


            </div>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                Văn Hoá
            </a>
            <div class="dropdown-menu">
{{--                <a class="dropdown-item" href="#">Bản Tin</a>--}}
                <a class="dropdown-item" href="{{route('getAllEvent')}}">Nổi Bật</a>


            </div>
        </li>
    </ul>
</nav>
