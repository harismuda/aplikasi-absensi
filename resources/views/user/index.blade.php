@extends('layout/master')
@section('konten')

<div class="card">
    <div class="card-header">
        <h3 class="card-title">Data User</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Role</th>
                    <th>Opsi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $u)
                <tr>
                    <td>{{ $u->id }}</td>
                    <td>{{ $u->name }}</td>
                    <td>{{ $u->email }}</td>
                    <td>{{ $u->password }}</td>
                    <td>{{ $u->role }}</td>
                    <td>
                        <a href="/user/edit/{{ $u->id }}">
                            <button type="button" class="btn btn-sm btn-info" title="Edit Data">
                                <i class="fas fa-edit"></i>
                            </button>
                        </a>
                        <a href="/user/hapus/{{ $u->id }}">
                            <button type="submit" title="Hapus Data" class="btn btn-danger btn-sm">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <a href="{{ url('user/tambah') }}"><button type="button" class="btn btn-block btn-primary">+ Tambah Data User</button></a>
    </div>
    <!-- /.card-body -->
</div>

@endsection