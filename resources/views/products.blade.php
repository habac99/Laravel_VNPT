@extends('master')
@section('title')
    Sản Phẩm
@endsection
@section('content')
    <div class="container-fluid">
        <h2 class="text-center">Danh sách sản phẩm</h2>
        <div class="container">
            <div class="row">
                @foreach($products as $product)
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="container">
                        <img src="{{$product->logo}}">
                    </div>
                    <div class="container justify-content-center" >
                        <div class="container justify-content-center">
                            <h4 class="text-center">{{$product->product_name}}</h4>
                        </div>
                    </div>
                    <div class="container">
                        <p class="text-center app_description">
                            {{$product->short_description}}

                        </p>
                    </div>
                    <div class="row">
                        <div class="col d-flex justify-content-center">
                            <a href="{{$product->apple_link}}" target="_blank"> <img class="mx-auto d-block" alt="app store" src="https://vnptproject.blob.core.windows.net/imagecontainer/162-1621378_appstore-logo-available-on-the-app-store.png"></a>
                            <a href="{{$product->google_link}}" target="_blank"> <img class="mx-auto d-block" alt="play store" src="https://vnptproject.blob.core.windows.net/imagecontainer/1280px-Google_Play_Store_badge_EN.svg.png"></a>
                        </div>
                    </div>

                </div>
                @endforeach
{{--                <div class="col-xl-3 col-md-6 mb-4">--}}
{{--                    <div class="container">--}}
{{--                        <img src="https://vnptproject.blob.core.windows.net/imagecontainer/2018_social_media_popular_app_logo-whatsapp-512.webp">--}}
{{--                    </div>--}}
{{--                    <div class="container justify-content-center" >--}}
{{--                        <div class="container justify-content-center">--}}
{{--                            <h4 class="text-center">Name of the app</h4>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="container">--}}
{{--                        <p class="text-center">--}}
{{--                            this is description of the app--}}

{{--                        </p>--}}
{{--                    </div>--}}
{{--                    <div class="row">--}}
{{--                        <div class="col d-flex justify-content-center">--}}
{{--                            <a href="#"> <img class="mx-auto d-block" alt="app store" src="https://vnptproject.blob.core.windows.net/imagecontainer/162-1621378_appstore-logo-available-on-the-app-store.png"></a>--}}
{{--                            <a href="#"> <img class="mx-auto d-block" alt="play store" src="https://vnptproject.blob.core.windows.net/imagecontainer/1280px-Google_Play_Store_badge_EN.svg.png"></a>--}}
{{--                        </div>--}}
{{--                                                <div class="col">--}}
{{--                                                    <a href="#"> <img class="mx-auto d-block" alt="play store" src="https://vnptproject.blob.core.windows.net/imagecontainer/1280px-Google_Play_Store_badge_EN.svg.png"></a>--}}
{{--                                                </div>--}}
{{--                    </div>--}}

{{--                </div>--}}


            </div>
        </div>
    </div>
@endsection
