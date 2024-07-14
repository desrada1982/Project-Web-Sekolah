@extends('layout')
@section('content')
    <div class="card">
        <div class="card-header">Data Guru</div>
        <div class="card-body">


            <div class="card-body">
                <h5 class="card-title">Nama : {{ $teachers->name }}</h5>
                <p class="card-text">Alamat : {{ $teachers->alamat }}</p>
                <p class="card-text">No handphone : {{ $teachers->nohp }}</p>
                <p class="card-text">Gender : {{ $teachers->gender }}</p>
                <p class="card-text">Tahun Lahir : {{ $teachers->thnlahir }}</p>
            </div>

            </hr>

        </div>
    </div>
@endsection
