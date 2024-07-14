@extends('layout')
@section('content')

    <div class="card">
        <div class="card-header">Edit Data Guru</div>
        <div class="card-body">

            <form action="{{ url('teachers/' . $teachers->id) }}" method="post">
                {!! csrf_field() !!}
                @method('PATCH')
                <input type="hidden" name="id" id="id" value="{{ $teachers->id }}" id="id" />
                <label>Name</label></br>
                <input type="text" name="name" id="name" value="{{ $teachers->name }}" class="form-control"></br>
                <label>Alamat</label></br>
                <input type="text" name="alamat" id="alamat" value="{{ $teachers->alamat }}"
                    class="form-control"></br>
                <label>No handphone</label></br>
                <input type="text" name="nohp" id="nohp" value="{{ $teachers->nohp }}" class="form-control"></br>
                <label>Gender</label></br>
                <input type="text" name="gender" id="gender" value="{{ $teachers->gender }}"
                    class="form-control"></br>
                <label>Tahun Lahir</label></br>
                <input type="text" name="thnlahir" id="thnlahir" value="{{ $teachers->thnlahir }}"
                    class="form-control"></br>
                <input type="submit" value="Update" class="btn btn-success"></br>
            </form>

        </div>
    </div>

@stop
