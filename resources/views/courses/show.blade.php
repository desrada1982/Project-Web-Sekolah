@extends('layout')
@section('content')
    <div class="card">
        <div class="card-header">Data Mata Pelajaran</div>
        <div class="card-body">


            <div class="card-body">
                <h5 class="card-title">Kode Mapel : {{ $courses->kode_mapel }}</h5>
                <p class="card-text">Mata pelajaran : {{ $courses->mapel }}</p>
                <p class="card-text">SKS : {{ $courses->sks }}</p>
            </div>

            </hr>

        </div>
    </div>
@endsection
