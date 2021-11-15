@extends('client.layouts.header')
@section('title')
eBooks
@stop
@section('content')
<!-- Start Banner Area -->
<section class="ebooks-banner relative">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row height align-items-center justify-content-center">
            <div class="col-lg-10">
                <div class="banner-content text-center">
                    <h1 class="text-white">eBooks</h1>
                    <h3 class="text-white">Join Packt, the new community for e-learning.</h3>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Banner Area -->

<!-- Start Products Area -->
<section class="section-gap history-area">
    <div class="container">
        <div class="row ">
            <div class="col-lg-6 col-md-8">
                <div class="section-title">
                    <h2>Popular eBooks</h2>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($products as $product)
                <div class="col-md-4">
                <div class="ibox">
                    <div class="ibox-content product-box">
                    <div class="product-imitation">
                        <img src="https://static.packt-cdn.com/products/{{$product->isbn13}}/cover/smaller"  onerror="this.onerror=null;this.src='https://www.packtpub.com/media/catalog/product/cache/abd628df6af33f734d56624223a191f5/9/7/9781800204584-original_105.png';" alt="" style="width: 200px;height: 250px;">
                    </div>
                    <div class="product-desc">
                        <span class="product-price">
                        ${{$product->price}}
                        </span>
                        <h2 class="ebook-name">{{ \Illuminate\Support\Str::limit($product->title, 49, $end='...') }}</h2>
                        <div class="m-t text-center">
                        <a href="{{route('client.ebook.detail',$product->isbn13)}}" class="genric-btn primary circle arrow">View Details<span class="lnr lnr-arrow-right"></span></a>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            @endforeach
        </div>
        <div class="row">
                {!! $products->links() !!}
        </div>
    </div>
</section>
<!-- End History Area -->

<!-- Start Projects Area -->
<section class="section-gap projects-area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8">
                <div class="section-title text-center">
                    <h2 class="text-white" style="font-style: italic;font-size: 34px; font-weight: 900;"> Dream it.
                        Believe it. Build it.</h2>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Start Projects Area -->
@stop