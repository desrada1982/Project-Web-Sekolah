@extends('layout')
@section('content')

    <div class="card">
        <div class="card-header">Masukan Data Siswa</div>
        <div class="card-body">

            <form action="{{ url('students') }}" method="post">
                {!! csrf_field() !!}
                <label>Name</label></br>
                <input type="text" name="name" id="name" class="form-control"></br>
                <label>Alamat</label></br>
                <input type="text" name="alamat" id="address" class="form-control"></br>
                <label>No handphone</label></br>
                <input type="text" name="nohp" id="mobile" class="form-control"></br>
                <input type="submit" value="Save" class="btn btn-success"></br>
            </form>

        </div>
    </div>

@stop
