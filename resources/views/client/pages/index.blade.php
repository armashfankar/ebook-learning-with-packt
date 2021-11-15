@extends('client.layouts.header')
@section('title')
Packt | Programming Books, eBooks &amp; Videos for Developers
@stop
@section('content')
<!-- Start Banner Area -->
<section class="banner-area relative" id="img">
  <div class="overlay overlay-bg" ></div>
  <div class="container">
    <div class="row fullscreen align-items-center justify-content-center">
      <div class="col-lg-10">
        <div class="banner-content text-center">
          <h1 class="text-white">Lead from <br> front in your <span class="orange">"Career"</span></h1>
          <p class="text-white">Read eBooks & Connet with best "Subject Matter Experts" <br> and identify the next best step for your career.</p>
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
    <div class="m-t text-center">
      <a href="{{ route('client.ebooks') }}" class="genric-btn primary-border circle">Explore More</a>
    </div>
  </div>
</section>
<!-- End History Area -->

<!-- Start Mentor Area -->
<section class="section-gap history-area">
  <div class="container">
    <div class="row ">
      <div class="col-lg-6 col-md-8">
        <div class="section-title">
          <h2>Top Subject Matter Experts</h2>
          <!-- https://analyticsindiamag.com/top-10-programmers-to-follow-on-youtube/ -->
        </div>
      </div>
    </div>
    <!-- Mentor -->
    @foreach($experts as $expert)
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
                <a class="nav-item active" id="nav-home-tab" data-toggle="tab" href="#nav-{{$expert->id}}-history" role="tab" aria-controls="nav-history" aria-selected="true">About</a>
                <a class="nav-item" id="nav-profile-tab" data-toggle="tab" href="#nav-{{$expert->id}}-mission" role="tab" aria-controls="nav-mission" aria-selected="false">Mentorship</a>
                <a class="nav-item" id="nav-contact-tab" data-toggle="tab" href="#nav-{{$expert->id}}-vission" role="tab" aria-controls="nav-vission" aria-selected="false">Books</a>
              </div>
              <div class="tab-content mt-40" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-{{$expert->id}}-history" role="tabpanel" aria-labelledby="nav-home-tab">
                  <div class="single-content text-justify">
                   {{$expert->about}}
                    <hr>
                  </div>
                </div>
                <div class="tab-pane fade" id="nav-{{$expert->id}}-mission" role="tabpanel" aria-labelledby="nav-profile-tab">
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
                <div class="tab-pane fade" id="nav-{{$expert->id}}-vission" role="tabpanel" aria-labelledby="nav-contact-tab">
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
    @endforeach
    <!-- END Mentor -->

    <div class="m-t text-center mt-4">
      <a href="{{ route('client.experts') }}" class="genric-btn primary-border circle">Explore More</a>
    </div>
  </div>
</section>
<!-- End Mentor Area -->

<!-- Start Projects Area -->
<section class="section-gap projects-area">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-6 col-md-8">
        <div class="section-title text-center">
          <h2 class="text-white" style="font-style: italic;font-size: 34px; font-weight: 900;"> Dream it. Believe it. Build it.</h2>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Start Projects Area -->

</div>
@stop