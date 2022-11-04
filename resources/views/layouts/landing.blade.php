<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>{{ config('app.name') }} - @yield('title')</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="{{ config('app.name') }}, Tadika, Kindergarten" name="keywords">
    <meta content="Lorem Ipsum" name="description">

    <!-- Favicon -->
    <link href="{{ asset('vendor/tadika/img/icon.ico') }}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Handlee&family=Nunito&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Flaticon Font -->
    <link href="{{ asset('vendor/tadika/lib/flaticon/font/flaticon.css') }}" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('vendor/tadika/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/tadika/lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('vendor/tadika/css/style.css') }}" rel="stylesheet">
</head>

<body>
    <!-- Navigation:start -->
    @include('layouts._landing._navbar')
    <!-- Navigation:end -->


    <!-- Content:start -->
    @yield('content')
    <!-- Content:end -->

    <!-- Footer:start -->
    @include('layouts._landing._footer')
    <!-- Footer:end -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary p-3 back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('vendor/tadika/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('vendor/tadika/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('vendor/tadika/lib/isotope/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('vendor/tadika/lib/lightbox/js/lightbox.min.js') }}"></script>

    <!-- Contact Javascript File -->
    <script src="{{ asset('vendor/tadika/mail/jqBootstrapValidation.min.js') }}"></script>
    <script src="{{ asset('vendor/tadika/mail/contact.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('vendor/tadika/js/main.js') }}"></script>
</body>

</html>
