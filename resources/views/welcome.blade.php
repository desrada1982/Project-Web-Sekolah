@extends('layouts.layouts')

@section('konten')
    {{-- Hero --}}
    <section id="hero" class="px-0">
        <div class="container text-center text-white">
            <div class="hero-title" data-aos="fade-up">
                <div class="hero-text">Selamat Datang <br> Di SMAN 1 JATILUHUR</div>
            </div>
        </div>
    </section>

    <section id="program" style="margin-top: -45px">
        <div class="container col-xxl-9">
            <div class="row">
                <div class="col-lg-3 col-md-6 col mb-2">
                    <div class="bg-white rounded-3 shadow p-3 d-flex justify-content-between align-item-center">
                        <div>
                            <h5>Pendidikan <br> Berkualitas</h5>
                        </div>
                        <img src="{{ asset('assets/icons/ic-neraca.png') }}" height="50" width="50" alt="">
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col mb-2">
                    <div class="bg-white rounded-3 shadow p-3 d-flex justify-content-between align-item-center">
                        <div>
                            <h5> Pendidikan <br> Berahklah Mulia</h5>
                        </div>
                        <img src="{{ asset('assets/icons/ic-globe.png') }}" height="50" width="50" alt="">
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col mb-2">
                    <div class="bg-white rounded-3 shadow p-3 d-flex justify-content-between align-item-center">
                        <div>
                            <h5>Pendidikan <br> Teknologi</h5>
                        </div>
                        <img src="{{ asset('assets/icons/ic-komputer.png') }}" height="50" width="50" alt="">
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col mb-2">
                    <div class="bg-white rounded-3 shadow p-3 d-flex justify-content-between align-item-center">
                        <div>
                            <h5> Pendidikan <br> Kompetitif</h5>
                        </div>
                        <img src="{{ asset('assets/icons/ic-book.png') }}" height="50" width="50" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Hero --}}

    {{-- Berita --}}
    <section id="berita">
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
                            <a href="" class="text-decoration-none text-danger">Selengkapnya</a>
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
                            <a href="" class="text-decoration-none text-danger">Selengkapnya</a>
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
                            <a href="" class="text-decoration-none text-danger">Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer-berita text-center py-3">
                <a href="{{ url('/berita') }}" class="btn btn-outline-danger">Berita Lainnya</a>
            </div>
        </div>
    </section>
    {{-- Berita --}}

    {{-- JOIN --}}

    <section id="join py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-6">
                    <div class="d-flex align-item-center mb-3">
                        <div class="stripe me-2"></div>
                        <h5>Daftar siswa</h5>
                    </div>
                    <h2 class="fw-bold mb-3" data-aos="fade-right">Ayo!, Gabung bersama kami mewujudkan generasi yang
                        berahklak Mulai,
                        Kompetitif dan juga cerdas</h3>
                        <p data-aos="fade-right">SMAN 1 JATILUHUR merupakan salah satu sekolah terbaik di purwakarta,
                            dengan siswa terbaik
                            SMAN 1 JATILUHUR memiliki banyak prestasi di bidang akademik maupun non akademik
                        </p>
                        <button class=" btn btn-outline-danger">Register</button>
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <img src="{{ asset('assets/images/smanja-ppdb.jpg') }}" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </section>
    {{-- JOIN --}}

    {{-- Section VIDEO --}}

    <section id="video" class="py-5">
        <div class="container py-5">
            <div class="header-berita text-center">
                <h2 class="fw-bold">Video Kegiatan Sekolah</h2>
            </div>
            <div class="row py-5">
                <div class="col-lg-6" data-aos="zoom-in">
                    <iframe width="100%" height="325" src="{{ asset('assets/video/SMANJA-GRAD-2023.mp4') }}"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
                <div class="col-lg-6" data-aos="zoom-in">
                    <iframe width="100%" height="325" src="{{ asset('assets/video/SMANJA-UPACARA-2023.mp4') }}"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </div>
            <div class="footer-berita text-center py-3">
                <a href="" class="btn btn-outline-danger">Video Lainnya</a>
            </div>
        </div>
    </section>

    <section id="visi" class="py-5">
        <div class="container">
            <div class="header-berita text-center">
                <h2 class="fw-bold">Visi Misi dan Tujuan sekolah</h2>
            </div>

            <div class="row py-5">
                <div class="col-lg-4">
                    <h2 class="fw-bold">Visi</h2>

                    <p>Mewujudkan lulusan yang Berakhlak mulia, Mandiri , Kreatif, dan Kompetitif</p>

                </div>
                <div class="col-lg-4">
                    <h2 class="fw-bold">Misi</h2>

                    <p> 1. Menanamkan dasar-dasar keimanan dan ketaqwaan kepada Tuhan Yang Maha esa. <br>
                        2. Mengembangkan pendidikan berbasis life skill untuk meningkatkan kemandirian peserta didik.
                        <br>
                        3. Melaksanakan kegiatan keterampilan agar siswa lebih berkreatif. <br>
                        4. Menumbuhkan rasa berkebhinekaan global, bernalar kritis serta kreatif.
                    </p>

                </div>
                <div class="col-lg-4">
                    <h2 class="fw-bold">Tujuan</h2>

                    <p> 1. Agar lulusan menjadi insan yang religius dalam setiap tindakannya. <br>
                        2. Agar lulusan melakukan segala sesuatunya dilandasi dengan keimanan dan ketaqwaan terhadap
                        Tuhan YME, sehingga menjadi insan yang berakhlak mulia <br>
                        3. Agar menghasilkan lulusan yang mandiri, berprestasi baik akademik maupun nonakademik. <br>
                    </p>

                </div>
            </div>
        </div>
    </section>
    {{-- Section VIDEO --}}

    {{-- Section Foto --}}

    <section id="foto" class="section-foto parallax">
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
                        <img src="{{ asset('assets/images/smanja-rantangpramuka.jpg') }}" class="img-fluid"
                            alt="">
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

    {{-- Section Prestasi --}}

    <section id="Prestasi" class="section-foto parallax">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center mb-5">
                <div class="d-flex align-items-center">
                    <div class="stripe-putih me-2"></div>
                    <h5 class="fw-bold text-white">Prestasi sekolah</h5>
                </div>
                <div>
                    <a href="/prestasi" class="btn btn-outline-danger">Prestasi Lainnya</a>
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
