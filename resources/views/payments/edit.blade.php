@extends('layout')
@section('content')

    <div class="card">
        <div class="card-header">Pembayaran</div>
        <div class="card-body">

            <form action="{{ url('payments/' . $payments->id) }}" method="post">
                {!! csrf_field() !!}
                @method('PATCH')
                <input type="hidden" name="id" id="id" value="{{ $payments->id }}" id="id" />
                <label>No enrollment</label></br>
                <input type="text" name="name" id="name" value="{{ $payments->enrollment_id }}"
                    class="form-control"></br>
                <label>Tanggal Pembayaran</label></br>
                <input type="text" name="paid_date" id="paid_date" value="{{ $payments->paid_date }}"
                    class="form-control"></br>
                <label>Nominal</label></br>
                <input type="text" name="amount" id="amount" value="{{ $payments->amount }}"
                    class="form-control"></br>
                <input type="submit" value="Update" class="btn btn-success"></br>
            </form>

        </div>
    </div>

@stop
