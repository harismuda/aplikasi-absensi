@extends('layout/master')
@section('konten')
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Data Guru</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Nip</th>
                                <th>Nama</th>
                                <th>No Hp</th>
                                <th>ID User</th>
                                <th>Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($guru as $g)
                                <tr>
                                    <td>{{ $g->nip }}</td>
                                    <td>{{ $g->nama }}</td>
                                    <td>{{ $g->no_hp }}</td>
                                    <td>{{ $g->id_user }}</td>
                                    <td>
                                        <a href="/guru/editguru/{{ $g->id_guru }}">
                                            <button type="button" class="btn btn-sm btn-info" title="Edit Data">
                                                <i class="fas fa-edit"></i>
                                            </button>
                                        </a>
                                        <a href="/guru/hapus/{{ $g->id_guru }}">
                                            <button type="submit" title="Hapus Data" class="btn btn-danger btn-sm">
                                                <i class="fas fa-trash-alt"></i>
                                            </button>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                          <a href="{{ url('guru/addguru') }}"><button type="button" class="btn btn-block btn-primary">+  Tambah Data Guru</button></a>

                </div>
                <!-- /.card-body -->
            </div>
            
@endsection
