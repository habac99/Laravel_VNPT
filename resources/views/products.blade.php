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
                        <img width="300px" height="300px" src="{{asset($product->logo)}}">
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
                            <a href="{{$product->apple_link}}" target="_blank"> <img width="90%"  class="mx-auto d-block" alt="app store" src="https://vnptproject.blob.core.windows.net/imagecontainer/162-1621378_appstore-logo-available-on-the-app-store.png"></a>
                            <a href="{{$product->google_link}}" target="_blank"> <img width="90%" class="mx-auto d-block" alt="play store" src="https://vnptproject.blob.core.windows.net/imagecontainer/1280px-Google_Play_Store_badge_EN.svg.png"></a>
                        </div>
                    </div>

                </div>
                @endforeach



            </div>
            <div class="justify-content-center">
                {!! $products->links()!!}
            </div>

        </div>
    </div>
    <script type="text/javascript">

        $(document).ready(function (){
            $(".pagination").addClass('justify-content-center');


        })
        $('.pagination a').unbind('click').on('click', function(e) {
            e.preventDefault();
            var page = $(this).attr('href').split('page=')[1];
            getPosts(page);
        });

        function getPosts(page)
        {
            $.ajax({
                type: "GET",
                url: '?page='+ page,
                success: (function(data) {
                    $('body').html(data);
                    history.replaceState('','','?page='+ page);
                }),
            })

        }
    </script>
@endsection
