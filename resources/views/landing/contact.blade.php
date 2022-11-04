@extends('layouts.landing')
@section('title')
    Hubungi Kami
@endsection
@section('content')
    <div class="container-fluid bg-primary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
            <h3 class="display-3 font-weight-bold text-white">Contact Us</h3>
            <div class="d-inline-flex text-white">
                <nav aria-label="breadcrumb" class="d-inline-block">
                    <div class="d-inline-flex text-white">
                        <nav aria-label="breadcrumb" class="d-inline-block">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('landing.index') }}">Home</a></li>
                                    <li class="breadcrumb-item active">Contact Us</li>
                                </ol>
                            </nav>
                        </nav>
                    </div>
            </div>
        </div>
    </div>
    <div class="container-fluid pt-5">
        <div class="container">
            <div class="text-center pb-2">
                <p class="section-title px-5"><span class="px-2">Get In Touch</span></p>
                <h1 class="mb-4">Contact Us For Any Query</h1>
            </div>
            <div class="row">
                <div class="col-lg-7 mb-5">
                    <div class="contact-form">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15939.016081398!2d101.7919792!3d2.8871326!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x50ce59e666636a6a!2sRaudhatul%20Daie%20Kindergarten!5e0!3m2!1sid!2sid!4v1667549276965!5m2!1sid!2sid"
                            width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""
                            aria-hidden="false" tabindex="0"></iframe>
                        <h5>Address</h5>
                        <p>33-1 & 33-2, Jalan Seri Putra 1/10, Persiaran Seri Putra 1, Bandar Seri Putra, 43000
                            Kajang,
                            Selangor, Malaysia</p>
                    </div>
                </div>
                <div class="col-lg-5 mb-5">
                    <p>Labore sea amet kasd diam justo amet ut vero justo. Ipsum ut et kasd duo sit, ipsum sea et erat est
                        dolore, magna ipsum et magna elitr. Accusam accusam lorem magna, eos et sed eirmod dolor est eirmod
                        eirmod amet.</p>
                    {{-- <div class="d-flex">
                        <i class="fa fa-map-marker-alt d-inline-flex align-items-center justify-content-center bg-primary text-secondary rounded-circle"
                            style="width: 45px; height: 45px;"></i>
                        <div class="pl-3">
                            <h5>Address</h5>
                            <p>33-1 & 33-2, Jalan Seri Putra 1/10, Persiaran Seri Putra 1, Bandar Seri Putra, 43000 Kajang,
                                Selangor, Malaysia</p>
                        </div>
                    </div> --}}
                    <div class="d-flex">
                        <i class="fa fa-envelope d-inline-flex align-items-center justify-content-center bg-primary text-secondary rounded-circle"
                            style="width: 45px; height: 45px;"></i>
                        <div class="pl-3">
                            <h5>Email</h5>
                            <p>raudhatuldaie@gmail.com
                            </p>
                        </div>
                    </div>
                    <div class="d-flex">
                        <i class="fa fa-phone-alt d-inline-flex align-items-center justify-content-center bg-primary text-secondary rounded-circle"
                            style="width: 45px; height: 45px;"></i>
                        <div class="pl-3">
                            <h5>Phone</h5>
                            <p>+60 11-5000 0688</p>
                        </div>
                    </div>
                    <div class="d-flex">
                        <i class="far fa-clock d-inline-flex align-items-center justify-content-center bg-primary text-secondary rounded-circle"
                            style="width: 45px; height: 45px;"></i>
                        <div class="pl-3">
                            <h5>Opening Hours</h5>
                            <strong>Sunday - Friday:</strong>
                            <p class="m-0">08:00 AM - 05:00 PM </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- <section class="bg-half bg-light d-table w-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 text-center">
                    <div class="page-next-level">
                        <h4 class="title">Hubungi Kami</h4>
                        <div class="page-next">
                            <nav aria-label="breadcrumb" class="d-inline-block">
                                <ul class="breadcrumb bg-white rounded shadow mb-0">
                                    <li class="breadcrumb-item"><a href="/">Beranda</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Hubungi Kami</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="position-relative">
        <div class="shape overflow-hidden text-white">
            <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
            </svg>
        </div>
    </div>
    <section class="section pb-0">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="card contact-detail text-center border-0">
                        <div class="card-body p-0">
                            <div class="icon"><img src="{{ asset('vendor/smpn17/images/icon/call.svg') }}"
                                    class="avatar avatar-small" alt="" /></div>
                            <div class="content mt-3">
                                <h4 class="title font-weight-bold">Telepon</h4>
                                <p class="text-muted">Silahkan hubungi kami untuk pertanyaan, keluhan, dan informasi terkait
                                    {{ config('app.name') }} menggunakan nomor telepon berikut</p>
                                <a href="tel:0284321386" class="text-primary">0284321386</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    <div class="card contact-detail text-center border-0">
                        <div class="card-body p-0">
                            <div class="icon"><img src="{{ asset('vendor/smpn17/images/icon/email.svg') }}"
                                    class="avatar avatar-small" alt="" /></div>
                            <div class="content mt-3">
                                <h4 class="title font-weight-bold">Email</h4>
                                <p class="text-muted">Hubungi kami kapan saja untuk pertanyaan, keluhan, dan informasi
                                    terkait S{{ config('app.name') }} melalui alamat email dibawah ini</p>
                                <a href="mailto:mail@gmail.com" class="text-primary">mail@gmail.com</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    <div class="card contact-detail text-center border-0">
                        <div class="card-body p-0">
                            <div class="icon"><img src="{{ asset('vendor/smpn17/images/icon/location.svg') }}"
                                    class="avatar avatar-small" alt="" /></div>
                            <div class="content mt-3">
                                <h4 class="title font-weight-bold">Lokasi</h4>
                                <p class="text-muted">Jl. Gatot Subroto No.13, Sumurpanggang, Kec. Margadana, Kota Tegal,
                                    Jawa Tengah 52141</p>
                                <a href="https://goo.gl/maps/GHoDxuUTHEKp89Gp7" target="_BLANK"
                                    class="video-play-icon h6 text-primary">Lihat di Google Maps</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid mt-100 mt-60">
            <div class="row">
                <div class="col-12 p-0">
                    <div class="card map border-0">
                        <div class="card-body p-0"><iframe
                                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15844.409398047716!2d109.1103018!3d-6.8783401!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x96faf0a74d3e1872!2sSMP%20Negeri%2017%20Tegal!5e0!3m2!1sid!2sid!4v1665464248667!5m2!1sid!2sid"
                                width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""
                                aria-hidden="false" tabindex="0"></iframe></div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
@endsection
