@extends('layout/master')
@section('konten')
    <div class="card-body">
        <form method="POST" action="{{ url('user/store') }}">
            {{ csrf_field() }}
            <h4>Input Data Users</h4>
            <div class="form-group">
                <label for="exampleInputBorder">Name</label>
                <input type="text" class="form-control form-control-border" name="name" id="exampleInputBorder" placeholder="Masukkan Nama">
            </div>
            <div class="form-group">
                <label for="exampleInputBorder">Email</label>
                <input type="text" class="form-control form-control-border" name="email" id="exampleInputBorder" placeholder="Masukkan Email">
            </div>
            <div class="form-group">
                <label for="exampleInputBorder">Password</label>
                <input type="password" class="form-control form-control-border" name="password" id="exampleInputBorder" placeholder="Masukkan Password">
            </div>
            <div class="form-group">
                <label for="exampleInputBorder">Role</label>
                <select name="role">
                    <option value="admin">Admin</option>
                    <option value="guru">Guru</option>
                    <option value="siswa">Siswa</option>
                </select>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-block btn-primary">Save</button>
            </div>
        </form>
    </div>

@endsection