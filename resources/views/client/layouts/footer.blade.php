<!-- Strat Footer Area -->
<footer class="section-gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <div class="single-footer-widget">
                    <h6 class="text-white text-uppercase mb-20">About Packt</h6>
                    <ul class="footer-nav">
                        <li><a href="#">About us</a></li>
                        <li><a href="#">Our Authors</a></li>
                        <li><a href="#">Careers</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-footer-widget">
                    <h6 class="text-white text-uppercase mb-20">Navigation Links</h6>
                    <ul class="footer-nav">
                        <li><a href="{{ route('client.index') }}">Home</a></li>
                        <li><a href="{{ route('client.experts') }}">Experts</a></li>
                        <li><a href="{{ route('client.ebooks') }}">eBooks</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-footer-widget">
                    <h6 class="text-white text-uppercase mb-20">Accounts</h6>
                    <ul class="footer-nav">
                        <li><a href="">Register</a></li>
                        <li><a href="{{route('login')}}">Login</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-bottom d-flex justify-content-between align-items-center flex-wrap">
            <p class="footer-text m-0">Copyright &copy; 2021 All rights reserved.</p>
            <div class="footer-social d-flex align-items-center">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-github"></i></a>
            </div>
        </div>
    </div>
</footer>
<!-- End Footer Area -->

<script src="{{  URL::asset('/client/js/vendor/jquery-2.2.4.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"
    integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
    crossorigin="anonymous"></script>
<script src="{{  URL::asset('/client/js/vendor/bootstrap.min.js') }}"></script>
<script src="{{  URL::asset('/client/js/jquery.ajaxchimp.min.js') }}"></script>
<script src="{{  URL::asset('/client/js/owl.carousel.min.js') }}"></script>
<script src="{{  URL::asset('/client/js/jquery.nice-select.min.js') }}"></script>
<script src="{{  URL::asset('/client/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{  URL::asset('/client/js/main.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.0.943/pdf.min.js"></script>
<script src="{{  URL::asset('/client/js/pdf-render.js') }}"></script>
<!-- main content area start -->
@yield('custom-js')
<!-- main content area end -->
</body>

</html>