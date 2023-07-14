@extends('layout/master')
@section('konten')
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Absen Guru</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Status</th>
                                <th>Waktu</th>
                                <th>Keterangan</th>
                                <th>Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($absen as $a)
                                <tr>
                                    <td>{{ $a->nama }}</td>
                                    <td>@if ($a->jenis == 'Masuk')
                                            <button class="btn btn-success">{{ $a->jenis }}</button>
                                        @else
                                            <button class="btn btn-danger">{{ $a->jenis }}</button> 
                                        @endif
                                    </td>
                                    <td>{{ $a->waktu }}</td>
                                    <td>{{ $a->keterangan }}</td>
                                    <td>
                                        <a href="/absen/detailguru/{{ $a->id_user }}">
                                            <button type="button" class="btn btn-sm btn-info" title="Detail">
                                                <i class="fas fa-edit"></i>
                                                Detail
                                            </button>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
@endsection
