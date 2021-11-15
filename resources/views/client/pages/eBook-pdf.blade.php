@extends('client.layouts.header')
@section('title')
{{$product->title}}
@stop
@section('content')
<!-- Start Banner Area -->
<section class="bookdetail-banner relative">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row height align-items-center justify-content-center">
            <div class="col-lg-10">
                <div class="banner-content mt-5 text-center">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="https://static.packt-cdn.com/products/{{$product->isbn13}}/cover/smaller" alt=""
                                onerror="this.onerror=null;this.src='https://www.packtpub.com/media/catalog/product/cache/abd628df6af33f734d56624223a191f5/9/7/9781800204584-original_105.png';">
                        </div>
                        <div class="col-md-6 text-left">
                            <h2 class="text-white">{{$product->title}}</h2>
                            <div class="rating text-white">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <span>5</span>
                                <span>(2 reviews total)</span>
                            </div>
                            <span class="text-white"> By {{$product->authors}}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Banner Area -->
<!-- Button Actions -->
<section class="about-generic-area mt-4">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mx-auto text-right">
                <a href="javascript:void(Tawk_API.toggle())" class="genric-btn info circle">Live Chat with Expert</a>
                <a href="{{route('client.chatroom',$product->isbn13)}}" class="genric-btn info circle">Chat Room</a>
                <a href="#" class="genric-btn circle disable">Zoom Call</a>
                <a href="#" class="genric-btn circle disable">Request Translation</a>
            </div>
        </div>
    </div>
</section>
<!-- End Button Actions -->

<!-- PDF Render -->
<section class="about-generic-area">
    <div class="container border-top-generic" style="padding: 20px 10px;">
        <div class="row">
            <div class="col-md-12 mx-auto text-center">
                <div id="navigation_controls" class="mx-auto text-center">
                    <div class="toolbar">
                        <div class="padding">
                            <i id="zoom_in" class="fa fa-search-plus fa-2x"></i>
                        </div>
                        <div class="padding">
                            <i id="zoom_out" class="fa fa-search-minus fa-2x"></i>
                        </div>
                        <input id="current_page" value="1" type="hidden" />
                        <div class="pageHolder purple">
                            <div class="padding" style="font-family:Montserrat, sans-serif;">Page&nbsp;</div>
                            <div class="roundedNumber purple" id="current_page_bottom" style="color:#F36F25;"> 1</div>
                            <div class="padding"> &nbsp;of</div>
                            <div class="padding" style="font-weight: bold;font-size: 14px;color:#F36F25;"
                                id="page_count"> 2</div>
                        </div>
                        <div class="padding">
                            <i id="go_previous" class="fa fa fa-chevron-circle-left fa-2x"></i>
                        </div>
                        <div class="padding">
                            <i id="go_next" class="fa fa fa-chevron-circle-right fa-2x"></i>

                        </div>
                    </div>
                </div>
                <div id="canvas_container" class="mt-2 mx-auto text-center">
                    <canvas id="pdf_renderer"></canvas>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End PDF Render -->

@stop
@section('custom-js')
<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API = Tawk_API || {}, Tawk_LoadStart = new Date();
    (function () {
        var s1 = document.createElement("script"), s0 = document.getElementsByTagName("script")[0];
        s1.async = true;
        s1.src = 'https://embed.tawk.to/5d2c8415bfcb827ab0cbd8d1/default';
        s1.charset = 'UTF-8';
        s1.setAttribute('crossorigin', '*');
        s0.parentNode.insertBefore(s1, s0);
    })();
</script>
<!--End of Tawk.to Script-->
@stop