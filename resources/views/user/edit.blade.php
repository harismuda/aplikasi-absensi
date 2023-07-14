@extends('layout/master')
@section('konten')

    <div class="card-body">
        @foreach($users as $u)
        <form method="POST" action="{{ url('user/update') }}">
            {{ csrf_field() }}
            <h4>Edit Data User</h4>
            <div class="form-group">
                <input type="hidden" class="form-control form-control-border" name="id" id="exampleInputBorder" 
                value="{{ $u->id }}">
            </div>
            <div class="form-group">
                <label for="exampleInputBorder">Nama</label>
                <input type="text" class="form-control form-control-border" name="name" id="exampleInputBorder" value="{{ $u->name }}">
            </div>
            <div class="form-group">
                <label for="exampleInputBorder">Email</label>
                <input type="text" class="form-control form-control-border" name="email" id="exampleInputBorder" value="{{ $u->email }}">
            </div>
            <div class="form-group">
                <label for="exampleInputBorder">Password</label>
                <input type="text" class="form-control form-control-border" name="password" id="exampleInputBorder" value="{{ $u->password }}">
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
        @endforeach
    </div>

@endsection