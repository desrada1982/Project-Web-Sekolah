@extends('layouts.layouts')

@section('konten')
    <section id="detail" style="margin-top:100px" class="py-5">
        <div class="container col-lg-10">
            <img src="{{ asset('assets/images/smanja-saroja.jpg') }}" class="img-fluid mb-3 rounded-3" alt=""
                width="50%" height="50%" data-aos="fade-up-right">
            <div class="konten-berita">
                <p class="mb-3 text-secondary">22/04/2024</p>
                <h4 class="fw-bold mb-3">Kegiatan SAROJA di hari Jumat</h4>
                <p class="text-secondary">Mengawali masuk sekolah setelah libur Idulfitri, SAROJA “siraman rohani SMANJA”
                    hadir kembali di jum’at pagi sebelum kegiatan belajar mengajar di SMA Negeri 1 Jatiluhur.</p>
            </div>
        </div>
    </section>
@endsection
