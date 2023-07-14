@extends('layout/master')
@section('konten')

    <div class="card-body">
        @foreach($siswa as $s)
        <form method="POST" action="{{ url('siswa/update') }}">
            {{ csrf_field() }}
            <h4>Edit Data Siswa</h4>
            <div class="form-group">
                <input type="hidden" class="form-control form-control-border" name="id_siswa" id="exampleInputBorder" value="{{ $s->id_siswa }}">
            </div>
            <div class="form-group">
                <label for="exampleInputBorder">NISN</label>
                <input type="text" class="form-control form-control-border" name="nisn" id="exampleInputBorder" value="{{ $s->nisn }}">
            </div>
            <div class="form-group">
                <label for="exampleInputBorder">NAMA</label>
                <input type="text" class="form-control form-control-border" name="nama" id="exampleInputBorder" value="{{ $s->nama }}">
            </div>
            <div class="form-group">
                <label for="exampleInputBorder">ALAMAT</label>
                <input type="text" class="form-control form-control-border" name="alamat" id="exampleInputBorder" value="{{ $s->alamat }}">
            </div>
            <div class="form-group">
                <label for="exampleInputBorder">ID User</label>
                <input type="text" class="form-control form-control-border" name="id_user" id="exampleInputBorder" value="{{ $s->id_user }}">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-block btn-primary">Save</button>
            </div>
        </form>
        @endforeach
    </div>

@endsection