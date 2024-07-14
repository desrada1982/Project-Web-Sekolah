@extends('layout')
@section('content')

    <div class="card">
        <div class="card-header">Masukan Data Guru</div>
        <div class="card-body">

            <form action="{{ url('teachers') }}" method="post">
                {!! csrf_field() !!}
                <label>Name</label></br>
                <input type="text" name="name" id="name" class="form-control"></br>
                <label>Alamat</label></br>
                <input type="text" name="alamat" id="alamat" class="form-control"></br>
                <label>No handphone</label></br>
                <input type="text" name="nohp" id="nohp" class="form-control"></br>
                <label>Gender</label></br>
                <input type="text" name="gender" id="gender" class="form-control"></br>
                <label>Tahun Lahir</label></br>
                <input type="text" name="thnlahir" id="thnlahir" class="form-control"></br>
                <input type="submit" value="Save" class="btn btn-success"></br>
            </form>

        </div>
    </div>

@stop
