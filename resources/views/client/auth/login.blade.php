@extends('client.layouts.header')
@section('title')
Login
@stop
@section('content')
<!-- Start Banner Area -->
<section class="ebooks-banner relative"
    style="background: url('https://images.unsplash.com/photo-1618044619888-009e412ff12a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2071&q=80');">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row height align-items-center justify-content-center">
            <div class="col-lg-10">
                <div class="banner-content text-center">
                    <h1 class="text-white">Login</h1>
                    <h3 class="text-white">Join Packt, the new community for e-learning.</h3>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Banner Area -->

<!-- Login Section -->
<section class="section-gap projects-area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8">
                <div class="section-title text-center mt-5 mb-5">
                    <form class="form-horizontal" method="POST" action="{{route('login.user')}}" id="admin-login">
                        {{ csrf_field() }}
                        <div class="mt-10">
                            <input type="email" value="{{ old('email') }}" name="email" placeholder="Email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email address'" required class="single-input @error('email') is-invalid @enderror" required>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mt-10">
                            <input type="password" name="password" placeholder="Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'" required class="single-input  @error('password') is-invalid @enderror" required>
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mt-10">
                            <button type="submit" class="genric-btn default-border circle"><i class="ft-unlock"></i> Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Login Section -->
@stop