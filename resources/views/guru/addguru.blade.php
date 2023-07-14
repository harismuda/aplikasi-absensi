@extends('layout/master')
@section('konten')
    <div class="card-body">
        <form method="POST" action="{{ url('guru/store') }}">
            {{ csrf_field() }}
            <h4>Input Data Guru</h4>
            <div class="form-group">
                <label for="exampleInputBorder">NIP</label>
                <input type="text" class="form-control form-control-border" name="nip" id="exampleInputBorder" placeholder="Masukkan NIP">
            </div>
            <div class="form-group">
                <label for="exampleInputBorder">NAMA</label>
                <input type="text" class="form-control form-control-border" name="nama" id="exampleInputBorder" placeholder="Masukkan Nama">
            </div>
            <div class="form-group">
                <label for="exampleInputBorder">NO HP</label>
                <input type="text" class="form-control form-control-border" name="hp" id="exampleInputBorder" placeholder="Masukkan NO HP">
            </div>
            <div class="form-group">
                <label for="exampleInputBorder">ID User</label>
                <input type="text" class="form-control form-control-border" name="id_user" id="exampleInputBorder" placeholder="Masukkan ID User">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-block btn-primary">Save</button>
            </div>
        </form>
    </div>

@endsection