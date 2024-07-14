@extends('layout')
@section('content')
    <div class="card">
        <div class="card-header">Pembayaran</div>
        <div class="card-body">


            <div class="card-body">
                <h5 class="card-title">No enrollment : {{ $payments->enrollment_id }}</h5>
                <p class="card-text">Tanggal Pembayaran : {{ $payments->paid_date }}</p>
                <p class="card-text">nominal : {{ $payments->amount }}</p>
            </div>

            </hr>

        </div>
    </div>
@endsection
