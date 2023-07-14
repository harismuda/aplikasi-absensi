@extends('layout/master')
@section('konten')
    <div class="card-body">
        <form method="POST" action="{{ url('siswa/store') }}">
            {{ csrf_field() }}
            <h4>Input Data Siswa</h4>
            <div class="form-group">
                <label for="exampleInputBorder">NISN</label>
                <input type="text" class="form-control form-control-border" name="nisn" id="exampleInputBorder" placeholder="Masukkan NISN">
            </div>
            <div class="form-group">
                <label for="exampleInputBorder">NAMA</label>
                <input type="text" class="form-control form-control-border" name="nama" id="exampleInputBorder" placeholder="Masukkan Nama">
            </div>
            <div class="form-group">
                <label for="exampleInputBorder">ALAMAT</label>
                <input type="text" class="form-control form-control-border" name="alamat" id="exampleInputBorder" placeholder="Masukkan Alamat">
            </div>
            <div class="form-group">
                <label for="exampleInputBorder">ALAMAT</label>
                <input type="text" class="form-control form-control-border" name="id_user" id="exampleInputBorder" placeholder="Masukkan ID User">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-block btn-primary">Save</button>
            </div>
        </form>
    </div>

@endsection