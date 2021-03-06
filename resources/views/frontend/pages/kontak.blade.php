@extends('frontend.layouts.default')

@section('title', ' | Kontak Kami')

@section('content')
<section class="headings" style="background: linear-gradient(rgba(18, 27, 34, 0.6), rgba(18, 27, 34, 0.6)), url({{ $data->kontak_gambar }}) no-repeat center center !important;">
    <div class="text-heading text-center">
        <div class="container">
            <h1>Kontak Kami</h1>
            <h2><a href="/">Home </a> &nbsp;/&nbsp; Kontak Kami</h2>
        </div>
    </div>
</section>
<!-- END SECTION HEADINGS -->

<!-- START SECTION CONTACT US -->
<section class="contact-us">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12 ">

        <div class="property-location mb-5">
            <h3>Lokasi Kami</h3>
            <div class="divider-fade"></div>
            {!! $data->kontak_peta !!}
        </div>
            </div>
            <div class="col-lg-4 col-md-12 bgc" style="background: -webkit-gradient(linear, left top, left bottom, from(rgba(32, 51, 100, 0.8)), to(rgba(32, 51, 100, 0.8))), url() no-repeat center center !important;">
                <div class="call-info">
                    <h3>Kontak Detail</h3>
                    <ul>
                        <li>
                            <div class="info">
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                <p class="in-p">{{ $data->kontak_alamat }}</p>
                            </div>
                        </li>
                        <li>
                            <div class="info">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                                <p class="in-p">{{ $data->kontak_telpon }}</p>
                            </div>
                        </li>
                        <li>
                            <div class="info">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                                <p class="in-p"><a class="text-white" href="mailto:{{ $data->kontak_email }}">{{ $data->kontak_email }}</a></p>
                            </div>
                        </li>
                        <li>
                            <div class="info cll">
                                <i class="fa fa-clock-o" aria-hidden="true"></i>
                                <p class="in-p">{{ $data->kontak_jam_kerja }}</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION CONTACT US -->
@endsection
