@extends('layouts.layouts')

@section('konten')
    {{-- Berita --}}
    <section id="berita" class="py-5" style="margin-top: 100px">
        <div class="container py-5">
            <div class="header-berita text-center">
                <h2 class="fw-bold">Berita kegiatan Sekolah</h2>
            </div>
            <div class="row py-3">
                <div class="col-lg-4">
                    <div class="card border-0">
                        <img src="{{ asset('assets/images/smanja-saroja.jpg') }}" class="img-fluid mb-3 rounded-3"
                            alt="" data-aos="fade-up-right">
                        <div class="konten-berita">
                            <p class="mb-3 text-secondary">22/04/2024</p>
                            <h4 class="fw-bold mb-3">Kegiatan SAROJA di hari Jumat</h4>
                            <p class="text-secondary">#sekolahModern</p>
                            <a href="/detail" class="text-decoration-none text-danger">Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card border-0">
                        <img src="{{ asset('assets/images/smanja-readaton.jpg') }}" class="img-fluid mb-3 rounded-3"
                            alt="" data-aos="fade-down">
                        <div class="konten-berita">
                            <p class="mb-3 text-secondary">07/02/2024</p>
                            <h4 class="fw-bold mb-3">Kegiatan Readaton Di Rabu Pagi</h4>
                            <p class="text-secondary">#sekolahModern</p>
                            <a href="/readaton" class="text-decoration-none text-danger">Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card border-0">
                        <img src="{{ asset('assets/images/smanja-smartren.jpg') }}" class="img-fluid mb-3 rounded-3"
                            alt="" data-aos="fade-up-left">
                        <div class="konten-berita">
                            <p class="mb-3 text-secondary">17/03/2024</p>
                            <h4 class="fw-bold mb-3">Pembukaan Kegiatan Smartren 2024</h4>
                            <p class="text-secondary">#sekolahModern</p>
                            <a href="smartren" class="text-decoration-none text-danger">Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer-berita text-center py-3">
                <a href="" class="btn btn-outline-danger">Berita Lainnya</a>
            </div>
        </div>
    </section>
    {{-- Berita --}}
@endsection
