@extends('layout')
@section('content')

    <div class="card">
        <div class="card-header">Masukan Data Mata pelajaran</div>
        <div class="card-body">

            <form action="{{ url('courses') }}" method="post">
                {!! csrf_field() !!}
                <label>Kode Mapel</label></br>
                <input type="text" name="kode_mapel" id="kode_mapel" class="form-control"></br>
                <label>Mata Pelajaran</label></br>
                <input type="text" name="mapel" id="mapel" class="form-control"></br>
                <label>SKS</label></br>
                <input type="text" name="sks" id="sks" class="form-control"></br>
                <input type="submit" value="Save" class="btn btn-success"></br>
            </form>

        </div>
    </div>

@stop
