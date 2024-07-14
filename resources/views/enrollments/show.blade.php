@extends('layout')
@section('content')
    <div class="card">
        <div class="card-header">Data Siswa</div>
        <div class="card-body">


            <div class="card-body">
                <h5 class="card-title">Enroll No : {{ $enrollments->enroll_no }}</h5>
                <p class="card-text">Id batch : {{ $enrollments->batch_id }}</p>
                <p class="card-text">Id siswa : {{ $enrollments->student_id }}</p>
                <p class="card-text">Tanggal Masuk : {{ $enrollments->join_date }}</p>
                <p class="card-text">Nominal : {{ $enrollments->fee }}</p>
            </div>

            </hr>

        </div>
    </div>
@endsection
