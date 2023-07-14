@extends('layout/master')
@section('konten')
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Absen Siswa</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        @csrf
                        <thead>
                            <tr>
                                <th>ID User</th>
                                <th>NIP</th>
                                <th>Nama</th>
                                <th>Status</th>
                                <th>Waktu</th>
                                <th>NO HP</th>
                                <th>Keterangan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($absen as $a)
                                <tr>
                                    <td>{{ $a->id_user }}</td>
                                    <td>{{ $a->nip }}</td>
                                    <td>{{ $a->nama }}</td>
                                    <td>@if ($a->jenis == 'Masuk')
                                            <button class="btn btn-success">{{ $a->jenis }}</button>
                                        @else
                                            <button class="btn btn-danger">{{ $a->jenis }}</button> 
                                        @endif
                                    </td>
                                    <td>{{ $a->waktu }}</td>
                                    <td>{{ $a->no_hp }}</td>
                                    <td>{{ $a->keterangan }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
@endsection
