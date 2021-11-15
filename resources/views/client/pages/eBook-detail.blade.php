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
                            <ul class="text-white mt-4">
                                <li><i class="fa fa-arrow-right"></i>Advance your knowledge in tech with a Packt
                                    subscription.</li>
                                <li><i class="fa fa-arrow-right"></i>&nbsp;Instant online access to over 7,500+ books
                                    and videos</li>
                                <li><i class="fa fa-arrow-right"></i>&nbsp;Constantly updated with 100+ new titles each
                                    month</li>
                            </ul>
                            <div class="quick-access mt-4">
                                <a href="{{route('client.ebook.pdf',$product->isbn13)}}" class="genric-btn small primary circle">Access Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Banner Area -->

<!-- About Book -->
<section class="about-generic-area">
    <div class="container border-top-generic">
        <h3 class="about-title mb-20">About "{{$product->title}}"</h3>
        <div class="row">
            <div class="col-md-8 text-justify">
                <div class="img-text">
                    <p>{!! $product_data->description !!}</p>
                </div>
            </div>
            <div class="col-md-4 text-justify">
                <div class="col-md-12">
                    <dl>
                        <div>
                            <dt class="">Publication date:</dt>
                            <dd class="">{{$product->publication_date}}</dd>
                        </div>
                        <div>
                            <dt class="">Publisher</dt>
                            <dd class="">Packt</dd>
                        </div>
                        <div>
                            <dt class="">Pages</dt>
                            <dd class="">{{$product_data->pages}}</dd>
                        </div>
                        <div>
                            <dt>ISBN</dt>
                            <dd>{{$product->isbn13}}</dd>
                        </div>
                    </dl>
                </div>
            </div>
        </div>

        <!-- About Author -->
        <div class="mt-4">
            <h3 class="mb-20">About Author(s)</h3>
            <div class="row">
                <div class="col-lg-12">
                    @foreach($product_data->authors as $author)
                        <blockquote class="generic-blockquote text-justify">
                            <h4>{{$author->name}}</h4><br>
                            {!! $author->about !!}
                        </blockquote>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- End About Author -->
        <!-- Subject Matter Expert -->
        <div class="mt-4">
            <h3 class="mb-20">Subject Matter Expert</h3>
            <div class="row">
                <!-- Mentor 1 -->
                <div class="history-tab-wrapper">
                    <div class="row justify-content-between">
                        <div class="col-lg-4">
                            <div class="tab-thumb text-center">
                                <img src="{{$expert->display_picture}}" class="img-fluid mentor-img" alt="">
                                <h2 class="mentor-name">{{$expert->name}}</h2>
                                <p class="mentor-designation">{{$expert->designation}}</p>

                            </div>
                        </div>
                        <div class="col-lg-6 ml-auto">
                            <div class="tab-total-content">
                                <div class="nav ilene-tabs" id="myTab" role="tablist">
                                    <a class="nav-item active" id="nav-home-tab" data-toggle="tab"
                                        href="#nav-{{$expert->id}}-history" role="tab" aria-controls="nav-history"
                                        aria-selected="true">About</a>
                                    <a class="nav-item" id="nav-profile-tab" data-toggle="tab"
                                        href="#nav-{{$expert->id}}-mission" role="tab" aria-controls="nav-mission"
                                        aria-selected="false">Mentorship</a>
                                    <a class="nav-item" id="nav-contact-tab" data-toggle="tab"
                                        href="#nav-{{$expert->id}}-vission" role="tab" aria-controls="nav-vission"
                                        aria-selected="false">Books</a>
                                </div>
                                <div class="tab-content mt-40" id="nav-tabContent">
                                    <div class="tab-pane fade show active" id="nav-{{$expert->id}}-history"
                                        role="tabpanel" aria-labelledby="nav-home-tab">
                                        <div class="single-content text-justify">
                                            {{$expert->about}}
                                            <hr>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="nav-{{$expert->id}}-mission" role="tabpanel"
                                        aria-labelledby="nav-profile-tab">
                                        <div class="single-content">
                                            <div class="">
                                                <ul class="unordered-list">
                                                    <?php $mentorship = explode(",",$expert->mentorship); ?>
                                                    @foreach($mentorship as $topic)
                                                    <li>{{$topic}}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="nav-{{$expert->id}}-vission" role="tabpanel"
                                        aria-labelledby="nav-contact-tab">
                                        <div class="single-content">
                                            <div class="">
                                                @foreach($expert->products as $product)
                                                <ul class="ordered-list">
                                                    <li><a href="{{route('client.ebook.detail',$product->isbn13)}}" class="book-link">{{$product->title}}</a></li>
                                                </ul>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-1"></div>
                    </div>
                </div>
                <!-- END Mentor 1 -->
            </div>
        </div>
        <!-- End Subject Matter Expert -->
    </div>
</section>
<!-- End About Book -->
@stop