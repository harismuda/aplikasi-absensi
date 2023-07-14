<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AbsenController extends Controller
{
    public function index(Request $request)
    {
        $absen = DB::table('absen')
        ->select('*')
        ->join('guru','guru.id_user','=','absen.id_user')
        ->where(['kategori' => 'Guru'])
        ->get();
        return view('absen/guru', ['absen' => $absen]);
    }
    public function siswa(Request $request)
    {
        $absen = DB::table('absen')
        ->select('*')
            ->join('siswa', 'siswa.id_user', '=', 'absen.id_user')
            ->where(['kategori' => 'Siswa'])
            ->get();
        return view('absen/siswa', ['absen' => $absen]);
    }
    public function detail($id)
    {
        $absen = DB::table('absen')
            ->select('*')
                ->join('siswa', 'siswa.id_user', '=', 'absen.id_user')
                ->where(['absen.kategori' => 'Siswa', 'absen.id_user' => $id])
                ->get();
        return view('absen/detailsiswa', ['absen' => $absen]);
    }
    public function detailguru($id)
    {
        $absen = DB::table('absen')
        ->select('*')
            ->join('guru', 'guru.id_user', '=', 'absen.id_user')
            ->where(['absen.kategori' => 'Guru', 'absen.id_user'=> $id])
            ->get();
        return view('absen/detailguru', ['absen' => $absen]);
    }
}
