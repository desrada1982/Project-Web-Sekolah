@extends('layout')
@section('content')

    <div class="card">
        <div class="card-header">Edit Data Siswa</div>
        <div class="card-body">

            <form action="{{ url('students/' . $students->id) }}" method="post">
                {!! csrf_field() !!}
                @method('PATCH')
                <input type="hidden" name="id" id="id" value="{{ $students->id }}" id="id" />
                <label>Name</label></br>
                <input type="text" name="name" id="name" value="{{ $students->name }}" class="form-control"></br>
                <label>Alamat</label></br>
                <input type="text" name="alamat" id="alamat" value="{{ $students->alamat }}"
                    class="form-control"></br>
                <label>No handphone</label></br>
                <input type="text" name="nohp" id="nohp" value="{{ $students->nohp }}" class="form-control"></br>
                <input type="submit" value="Update" class="btn btn-success"></br>
            </form>

        </div>
    </div>

@stop
