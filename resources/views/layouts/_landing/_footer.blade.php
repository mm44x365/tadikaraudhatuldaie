    <!-- Footer Start -->
    <div class="container-fluid bg-secondary text-white mt-5 py-5 px-sm-3 px-md-5">
        <div class="row pt-5">
            <div class="col-lg-3 col-md-6 mb-5">
                <a href="" class="navbar-brand font-weight-bold text-primary m-0 mb-4 p-0"
                    style="font-size: 35px; line-height: 35px;">
                    <i class="flaticon-043-teddy-bear"></i>
                    <span class="text-white">{{ config('app.name') }}</span>
                </a>
                <p>Labore dolor amet ipsum ea, erat sit ipsum duo eos. Volup amet ea dolor et magna dolor, elitr rebum
                    duo est sed diam elitr. Stet elitr stet diam duo eos rebum ipsum diam ipsum elitr.</p>
                <div class="d-flex justify-content-start mt-4">
                    {{-- <a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0"
                        style="width: 38px; height: 38px;" href="#"><i class="fab fa-twitter"></i></a> --}}
                    <a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0"
                        style="width: 38px; height: 38px;" href="https://www.facebook.com/raudhatuldaie/"
                        target="_BLANK"><i class="fab fa-facebook-f"></i></a>
                    {{-- <a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0"
                        style="width: 38px; height: 38px;" href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0"
                        style="width: 38px; height: 38px;" href="#"><i class="fab fa-instagram"></i></a> --}}
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h3 class="text-primary mb-4">Quick Links</h3>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-white mb-2" href="{{ route('landing.index') }}"><i
                            class="fa fa-angle-right mr-2"></i>Home</a>
                    <a class="text-white mb-2" href="{{ route('blog.home') }}"><i
                            class="fa fa-angle-right mr-2"></i>Article</a>
                    <a class="text-white" href="{{ route('landing.contact') }}"><i
                            class="fa fa-angle-right mr-2"></i>Contact Us</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h3 class="text-primary mb-4">Maps</h3>
                <div class="d-flex">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15939.016081398!2d101.7919792!3d2.8871326!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x50ce59e666636a6a!2sRaudhatul%20Daie%20Kindergarten!5e0!3m2!1sid!2sid!4v1667549276965!5m2!1sid!2sid"
                        width="300" height="300" frameborder="0" style="border:0;" allowfullscreen=""
                        aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h3 class="text-primary mb-4">Get In Touch</h3>
                <div class="d-flex">
                    <h4 class="fa fa-map-marker-alt text-primary"></h4>
                    <div class="pl-3">
                        <h5 class="text-white">Address</h5>
                        <p>33-1 & 33-2, Jalan Seri Putra 1/10, Persiaran Seri Putra 1, Bandar Seri Putra, 43000 Kajang,
                            Selangor, Malaysia</p>
                    </div>
                </div>
                <div class="d-flex">
                    <h4 class="fa fa-envelope text-primary"></h4>
                    <div class="pl-3">
                        <h5 class="text-white">Email</h5>
                        <p>raudhatuldaie@gmail.com</p>
                    </div>
                </div>
                <div class="d-flex">
                    <h4 class="fa fa-phone-alt text-primary"></h4>
                    <div class="pl-3">
                        <h5 class="text-white">Phone</h5>
                        <p>+60 11-5000 0688</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid pt-5" style="border-top: 1px solid rgba(23, 162, 184, .2);;">
            <p class="m-0 text-center text-white">
                &copy; <a class="text-primary font-weight-bold" href="#">{{ config('app.name') }}</a>. All Rights
                Reserved.
            </p>
        </div>
    </div>
    <!-- Footer End -->
