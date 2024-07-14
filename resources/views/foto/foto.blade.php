@extends('layouts.layouts')

@section('konten')
    {{-- Section Foto --}}

    <section id="foto" style="margin-top: 100px" class="section-foto parallax">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center mb-5">
                <div class="d-flex align-items-center">
                    <div class="stripe-putih me-2"></div>
                    <h5 class="fw-bold text-white">Foto Kegiatan Sekolah</h5>
                </div>
                <div>
                    <a href="/foto" class="btn btn-outline-danger">Foto Lainnya</a>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-6">
                    <a class="image-link" href="{{ asset('assets/images/smanja-p5.jpg') }}">
                        <img src="{{ asset('assets/images/smanja-p5.jpg') }}" class="img-fluid" alt="">
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-6">
                    <a class="image-link" href="{{ asset('assets/images/smanja-rantangpramuka.jpg') }}">
                        <img src="{{ asset('assets/images/smanja-rantangpramuka.jpg') }}" class="img-fluid" alt="">
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-6">
                    <a class="image-link" href="{{ asset('assets/images/smanja-haribumi.jpg') }}">
                        <img src="{{ asset('assets/images/smanja-haribumi.jpg') }}" class="img-fluid" alt="">
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-6">
                    <a class="image-link" href="{{ asset('assets/images/smanja-nihongo.jpg') }}">
                        <img src="{{ asset('assets/images/smanja-nihongo.jpg') }}" class="img-fluid" alt="">
                    </a>
                </div>
            </div>
        </div>
        </div>
    </section>
    {{-- Section Foto --}}
@endsection
