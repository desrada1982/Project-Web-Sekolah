@extends('layout')
@section('content')

    <div class="card">
        <div class="card-header">Edit Data Mata Pelajaran</div>
        <div class="card-body">

            <form action="{{ url('courses/' . $courses->id) }}" method="post">
                {!! csrf_field() !!}
                @method('PATCH')
                <input type="hidden" name="id" id="id" value="{{ $courses->id }}" id="id" />
                <label>Kode Mapel</label></br>
                <input type="text" name="kode_mapel" id="kode_mapel" value="{{ $courses->kode_mapel }}"
                    class="form-control"></br>
                <label>Mata Pelajaran</label></br>
                <input type="text" name="mapel" id="mapel" value="{{ $courses->mapel }}" class="form-control"></br>
                <label>No SKS</label></br>
                <input type="text" name="sks" id="sks" value="{{ $courses->sks }}" class="form-control"></br>
                <input type="submit" value="Update" class="btn btn-success"></br>
            </form>

        </div>
    </div>

@stop
