@extends('layout/master')
@section('konten')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Pilih Laporan Absen</h3>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ url('laporan/guru') }}">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="cars">Pilih bulan:</label>
                <select class="form-control form-control-border" id="cars" name="bulan">
                    <option value="01">Januari</option>
                    <option value="02">Februari</option>
                    <option value="03">Maret</option>
                    <option value="04">April</option>
                    <option value="05">Mei</option>
                    <option value="06">Juni</option>
                    <option value="07">Juli</option>
                    <option value="08">Agustus</option>
                    <option value="09">September</option>
                    <option value="10">Oktober</option>
                    <option value="11">November</option>
                    <option value="12">Desember</option>
                </select>
            </div>
            <div class="form-group">
                <label for="cars">Pilih tahun:</label>
                <select class="form-control form-control-border" id="cars" name="tahun">
                    <option value="2022">2022</option>
                    <option value="2023">2023</option>
                    <option value="2024">2024</option>
                </select>
            </div>
            <div class="form-group">
                <label for="cars">Pilih Keterangan:</label>
                <select class="form-control form-control-border" id="cars" name="keterangan">
                    <option value="Masuk">Masuk</option>
                    <option value="Keluar">Keluar</option>
                </select>
            </div>
            <div class="form-group">
                <label for="cars">Pilih Kategori:</label>
                <select class="form-control form-control-border" id="cars" name="kategori">
                    <option value="guru">Guru</option>
                    <option value="siswa">Siswa</option>
                </select>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-block btn-primary">Cari</button>
            </div>
        </form>
        </div>
    </div>
@endsection
