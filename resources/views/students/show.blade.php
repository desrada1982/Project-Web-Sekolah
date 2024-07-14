@extends('layout')
@section('content')
    <div class="card">
        <div class="card-header">Data Siswa</div>
        <div class="card-body">


            <div class="card-body">
                <h5 class="card-title">Nama : {{ $students->name }}</h5>
                <p class="card-text">Alamat : {{ $students->alamat }}</p>
                <p class="card-text">No handphone : {{ $students->nohp }}</p>
            </div>

            </hr>

        </div>
    </div>
@endsection
