@extends('layout/master')
@section('konten')

    <div class="card-body">
        @foreach($guru as $p)
        <form method="POST" action="{{ url('guru/update') }}">
            {{ csrf_field() }}
            <h4>Input Data Guru</h4>
            <div class="form-group">
                <input type="hidden" class="form-control form-control-border" name="id_guru" id="exampleInputBorder" value="{{ $p->id_guru }}">
            </div>
            <div class="form-group">
                <label for="exampleInputBorder">NIP</label>
                <input type="text" class="form-control form-control-border" name="nip" id="exampleInputBorder" value="{{ $p->nip }}">
            </div>
            <div class="form-group">
                <label for="exampleInputBorder">NAMA</label>
                <input type="text" class="form-control form-control-border" name="nama" id="exampleInputBorder" value="{{ $p->nama }}">
            </div>
            <div class="form-group">
                <label for="exampleInputBorder">NO HP</label>
                <input type="text" class="form-control form-control-border" name="hp" id="exampleInputBorder" value="{{ $p->no_hp }}">
            </div>
            <div class="form-group">
                <label for="exampleInputBorder">ID User</label>
                <input type="text" class="form-control form-control-border" name="id_user" id="exampleInputBorder" value="{{ $p->id_user }}">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-block btn-primary">Save</button>
            </div>
        </form>
        @endforeach
    </div>

@endsection