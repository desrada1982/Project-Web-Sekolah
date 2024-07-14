@extends('layouts.layouts')

@section('konten')
    {{-- Section Prestasi --}}

    <section id="Prestasi" class="section-foto parallax">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center mb-5">
                <div class="d-flex align-items-center">
                    <div class="stripe-putih me-2"></div>
                    <h5 class="fw-bold text-white">Prestasi sekolah</h5>
                </div>
                <div>
                    <a href="" class="btn btn-outline-danger">Prestasi Lainnya</a>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-6">
                    <a class="image-link" href="{{ asset('assets/images/smanja-prestasi1.jpg') }}">
                        <img src="{{ asset('assets/images/smanja-prestasi1.jpg') }}" class="img-fluid" alt="">
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-6">
                    <a class="image-link" href="{{ asset('assets/images/smanja-prestasi2.jpg') }}">
                        <img src="{{ asset('assets/images/smanja-prestasi2.jpg') }}" class="img-fluid" alt="">
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-6">
                    <a class="image-link" href="{{ asset('assets/images/smanja-prestasi3.jpg') }}">
                        <img src="{{ asset('assets/images/smanja-prestasi3.jpg') }}" class="img-fluid" alt="">
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-6">
                    <a class="image-link" href="{{ asset('assets/images/smanja-prestasi4.jpg') }}">
                        <img src="{{ asset('assets/images/smanja-prestasi4.jpg') }}" class="img-fluid" alt="">
                    </a>
                </div>
            </div>
        </div>

        </div>
    </section>
    {{-- Section Prestasi --}}
@endsection
