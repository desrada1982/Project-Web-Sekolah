<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link rel="shortcut icon" href="{{ asset('assets/icons/logo-smanja.png') }}">
    <title>SMAN 1 JATILUHUR</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    {{-- AOS Animation --}}
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    {{-- AOS Animation --}}

    {{-- Magnific --}}
    <link rel="stylesheet" href="{{ asset('assets/css/magnific.css') }}">
    {{-- Magnific --}}

    {{-- SummerNote --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-bs5.min.css" />

    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body>

    {{-- Navbar --}}
    @include('layouts.navbar')
    {{-- Navbar --}}

    {{-- content --}}
    @yield('konten')
    {{-- content --}}

    {{-- Section Footer --}}

    <section id="footer" class="bg-white">
        <div class="container py-4">
            <footer>
                <div class="row">
                    {{-- Kolom 1 Navigasi --}}
                    <div class="col-12 col-md-3 mb-3">
                        <h5 class="fw-bold mb-3">Navigasi</h5>
                        <div class="d-flex">
                            <ul class="nav flex-column me-5">
                                <li class="nav-item mb-2"><a href="" class="nav-link p-0 text-muted">
                                        Berita sekolah</a>
                                </li>
                                <li class="nav-item mb-2"><a href="" class="nav-link p-0 text-muted">
                                        Kegiatan sekolah</a>
                                </li>
                                <li class="nav-item mb-2"><a href="" class="nav-link p-0 text-muted">
                                        Prestasi sekolah</a>
                                </li>
                                <li class="nav-item mb-2"><a href="" class="nav-link p-0 text-muted">
                                        Video Kegiatan Sekolah</a>
                                </li>
                            </ul>
                            <ul class="nav flex-column">
                                <li class="nav-item mb-2"><a href="" class="nav-link p-0 text-muted">Alumni</a>
                                </li>
                                <li class="nav-item mb-2"><a href="" class="nav-link p-0 text-muted">Guru</a>
                                </li>
                                <li class="nav-item mb-2"><a href="" class="nav-link p-0 text-muted">Staff</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    {{-- Kolom 2 Media Sosial --}}
                    <div class="col-12 col-md-3 mb-3">
                        <h5 class="fw-bold mb-3">Follow kami</h5>
                        <div class="d-flex mb-3">
                            <a href="https://www.instagram.com/sman1jatiluhur/?hl=en" target="_blank"
                                class="text-decoration-none text-dark">
                                <img src="{{ asset('assets/images/instagram.png') }}" alt="" height="30"
                                    width="30" class="me-4">
                            </a>
                            <a href="https://web.facebook.com/sman1jatiluhurofficial/?_rdc=1&_rdr" target="_blank"
                                class="text-decoration-none text-dark">
                                <img src="{{ asset('assets/images/facebook.png') }}" alt="" height="30"
                                    width="30" class="me-4">
                            </a>
                            <a href="https://www.youtube.com/@sman1jatiluhurofficial/videos" target="_blank"
                                class="text-decoration-none text-dark">
                                <img src="{{ asset('assets/images/youtube.png') }}" alt="" height="30"
                                    width="30" class="me-4">
                            </a>
                        </div>
                    </div>
                    {{-- Kolom 3 Kontak --}}
                    <div class="col-12 col-md-3 mb-3">
                        <h5 class="fw-bold mb-3 ">Kontak Kami</h5>
                        <ul class="nav flex-column">
                            <li class="nav-item mb-2"><a href=""
                                    class="nav-link p-0 text-muted">sman1jatiluhur@gmail.com</a>
                            </li>
                            <li class="nav-item mb-2"><a href="" class="nav-link p-0 text-muted">02648223708</a>
                            </li>
                        </ul>
                    </div>
                    {{-- Kolom 4 Alamat --}}
                    <div class="col-12 col-md-3 mb-3">
                        <h5 class="fw-bold mb-3">Alamat Sekolah</h5>
                        <p>Jl. Pramuka No.138, Bunder, Kec. Jatiluhur, Kabupaten Purwakarta, Jawa Barat 41161</p>
                    </div>
                </div>
            </footer>
        </div>
    </section>

    <section class="bg-dark border-top">
        <div class="container py-4">
            <div class="d-flex justify-content-between">
                <div class="text-white">
                    SMAN 1 JATILUHUR
                </div>
                <div class="d-flex">
                    <p class="me-4 text-white">Syarat & Ketentuan</p>
                    <p>
                        <a href="" class="text-decoration-none text-white">Kebijakan Privasi</a>
                    </p>
                </div>
            </div>
        </div>
    </section>
    {{-- Section Footer --}}

    {{-- JQUERY --}}
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous"></script>
    {{-- Summernote JS --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-bs5.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

    <script src="{{ asset('assets/js/magnific.js') }}"></script>

    {{-- AOS JS --}}
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script>
        $(document).ready(function() {
            $('#summernote').summernote({
                height: 200,
            });
        });

        const navbar = document.querySelector(".fixed-top");
        window.onscroll = () => {
            if (window.scrollY > 100) {
                navbar.classList.add("scroll-nav-active");
                navbar.classList.add("text-nav-active");
                // navbar.classList.remove("navbar-dark");
            } else {
                navbar.classList.remove("scroll-nav-active");
                // navbar.classList.add("navbar-dark");
            }
        };
        // AOS
        AOS.init();

        // Magnific
        $(document).ready(function() {
            $('.image-link').magnificPopup({
                type: 'image',
                retina: {
                    ratio: 1,
                    replaceSrc: function(item, ratio) {
                        return item.src.replace(/\.\w+$/, function(m) {
                            return '@2x' + m;
                        });
                    }
                }
            });
        });
    </script>

</body>

</html>
