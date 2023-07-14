<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LaporanController extends Controller
{
    public function bulan()
    {
        return view('laporan/index');
    }
    public function index(Request $request)
    {
        $guru = DB::table('guru')->get();
        // $siswa = DB::table('siswa')->get();

        $month = $request->bulan;
        $year = $request->tahun;
        $ket = $request->keterangan;
        $kategori = $request->kategori;

        $daysInMonth = cal_days_in_month(CAL_GREGORIAN, $month, $year);
        $jumlah = $daysInMonth;
        $absen = [];

        for ($x = 1; $x <= $jumlah; $x++) {
            $tgl = $year.'-'.$month.'-'.$x;
            $check = DB::table('absen')
            ->select('*')
            ->where(['tanggal' => $tgl, 'kategori' => $kategori,'jenis' => $ket])
            ->get();
            if (count($check) > 0) {
                foreach($check as $key=>$value) {
                    $absen[$value->id_user][$tgl] = $value->jenis;
                }
            }else{
                
            }
        }
        $guru = DB::table($kategori)->get();
        // if ($guru = DB::table($kategori)->get()){
  
            return view('laporan/guru', ['guru' => $guru, 'absen' => $absen, 'month' => $month, 'year' => $year, 'ket' => $ket, 'kategori' => $kategori]);
        // } else {
                
        // }
        
    }
}
