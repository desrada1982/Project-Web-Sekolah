@extends('layouts.layouts')

@section('konten')
    <section id="detail" style="margin-top:100px" class="py-5">
        <div class="container col-lg-10">
            <img src="{{ asset('assets/images/smanja-readaton.jpg') }}" class="img-fluid mb-3 rounded-3" alt=""
                width="50%" height="50%" data-aos="fade-up-right">
            <div class="konten-berita">
                <p class="mb-3 text-secondary">07/02/2024</p>
                <h4 class="fw-bold mb-3">Kegiatan Readaton di hari rabu pagi</h4>
                <p class="text-secondary">Berjumpa lagi dengan Readathon SMA Negeri 1 Jatiluhur di hari rabu pagi bersama
                    kelas 10.5 yang akan berbagi resensi kepada seluruh siswa siswi SMANJA.
                    Gerakan literasi dengan membudayakan gerakan membaca terus digaungkan di SMA Negeri 1 Jatiluhur guna
                    meningkatkan kesadaran akan pentingnya membaca buku dan menjadi kebiasaan positif bagi seluruh siswa.
                </p>
            </div>
        </div>
    </section>
@endsection
