@extends('layout/master')
@section('konten')

<div class="card">
                <div class="card-header">
                    <h3 class="card-title">Data Siswa</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Nip</th>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>ID User</th>
                                <th>Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($siswa as $s)
                                <tr>
                                    <td>{{ $s->nisn }}</td>
                                    <td>{{ $s->nama }}</td>
                                    <td>{{ $s->alamat }}</td>
                                    <td>{{ $s->id_user }}</td>
                                    <td>
                                        <a href="/siswa/edit/{{ $s->id_siswa }}">
                                            <button type="button" class="btn btn-sm btn-info" title="Edit Data">
                                                <i class="fas fa-edit"></i>
                                            </button>
                                        </a>
                                        <a href="/siswa/hapus/{{ $s->id_siswa }}">
                                            <button type="submit" title="Hapus Data" class="btn btn-danger btn-sm">
                                                <i class="fas fa-trash-alt"></i>
                                            </button>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <a href="{{ url('siswa/tambah') }}"><button type="button" class="btn btn-block btn-primary">+  Tambah Data Siswa</button></a>
                </div>
                <!-- /.card-body -->
            </div>

@endsection