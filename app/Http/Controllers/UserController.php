<?php

namespace App\Http\Controllers;

use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function dashboruser()
    {
        $id = Auth::user()->id;
        if (Auth::user()->role == 'siswa') {
            $model = DB::table('absen')
                ->select('*')
                ->join('siswa', 'siswa.id_user', '=', 'absen.id_user')
                ->where(['absen.id_user' => $id])
                ->get();
        } elseif (Auth::user()->role == 'guru') {
            $model = DB::table('absen')
                ->select('*')
                ->join('guru', 'guru.id_user', '=', 'absen.id_user')
                ->where(['absen.id_user' => $id])
                ->get();
        }


        $check = DB::table('absen')
            ->select('*')
            //->join('guru', 'guru.id_user', '=', 'absen.id_user')
            ->where(['tanggal' => date('Y-m-d'), 'id_user' => $id])
            ->get();



        // if (    count($check) == 0     ){
        //     echo "Masuk";
        // } else {
        //     echo "Keluar";
        // }
        return view('dashboard/dashboruser', ['model' => $model, 'jumlah' => count($check)]);
    }
    public function index()
    {
        $users = DB::table('users')->get();
        return view('user/index', ['users' => $users]);
    }
    public function tambah()
    {
        return view('user/tambah');
    }
    public function store(Request $request)
    {
        DB::table('users')->insert([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'role' => $request->role
        ]);
        return redirect('/user')->with('success', 'Data berhasil di Tambahkan');
    }
    public function edit($id)
    {
        $users = DB::table('users')->where('id', $id)->get();
        return view('user/edit', ['users' => $users]);
    }
    public function update(Request $request)
    {
        DB::table('users')->where('id', $request->id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'role' => $request->role

        ]);
        return redirect('/user')->with('success', 'Data berhasil di update');
    }
    public function absen()
    {
        $id = Auth::user()->id;
        $role = Auth::user()->role;
        if (Auth::user()->role == 'siswa') {
            $kategori = 'Siswa';
        } elseif (Auth::user()->role == 'guru') {
            $kategori = 'Guru';
        }
        $check = DB::table('absen')
            ->select('*')
            ->where(['tanggal' => date('Y-m-d'), 'id_user' => $id])
            ->get();
        $ket = true ;
        
    
        $tgl = date("d/m/Y");
        if (count($check) == 0) {

            echo "Masuk";
            $jenis = 'Masuk';
            $time = date('Y/m/d H:i:s');

            $jambatas = new DateTime(date('Y/m/d') . ' 08:00:00');
            $jamsekarang = new DateTime(date('Y/m/d H:i:s'));
            //print_r($time);
            //echo "<br>";
            $selisih = $jambatas->diff($jamsekarang);

            $selisihjam = $selisih->h;
            $selisihmenit = $selisih->i;
            $selisihdetik = $selisih->s;
            $selisihTerlambat = $selisihjam . " jam, " . $selisihmenit . " menit, " . $selisihdetik . " detik";
            //07.00 <= 08.00
            if ($jamsekarang <= $jambatas) {
                $ket = true;
                $keterangan = 'Tepat Waktu';
                $pesan = 'Absen ' . $jenis . ' Berhasil pada jam ' . $time . ' di tanggal ' . $tgl;
            } else {
                $ket = false;
                $keterangan = 'Terlambat '.$selisihTerlambat;
                $pesan = 'Absen ' . $jenis . ' Berhasil (Terlambat ' . $selisihTerlambat . ')';
            }

            DB::table('absen')->insert([
                'id_user' => $id,
                'waktu' => date("Y/m/d H:i:s"),
                'tanggal' => date('Y-m-d'),
                'jenis' => "Masuk",
                'kategori' => $kategori,
                'keterangan' => $keterangan
            ]);
        } else {
            echo "Keluar";
            $jenis = 'Keluar';
            $time = date('H:i:s');

            $jambatas = new DateTime(date('Y/m/d') . ' 17:00:00');
            $jamsekarang = new DateTime(date('Y/m/d H:i:s'));
            //print_r($jamsekarang);
            //echo "<br>";
            $selisih = $jambatas->diff($jamsekarang);

            $selisihjam = $selisih->h;
            $selisihmenit = $selisih->i;
            $selisihdetik = $selisih->s;
            $selisihTerlambat = $selisihjam . " jam, " . $selisihmenit . " menit, " . $selisihdetik . " detik";
            //17.00 < 18.00
            if ($jambatas <= $jamsekarang) {
                $ket = true;
                $keterangan = 'Tepat Waktu';
                $pesan   = 'Absen ' . $jenis . ' Berhasil pada jam ' . $time . ' di tanggal ' . $tgl;
            } else {
                $ket = false;
                $keterangan = 'Terlalu Cepat Pulang '.$selisihTerlambat;
                $pesan = 'Absen ' . $jenis . ' Berhasil (Terlalu cepat ' . $selisihTerlambat . ')';
            }


            DB::table('absen')->insert([
                'id_user' => $id,
                'waktu' => date("Y/m/d H:i:s"),
                'tanggal' => date('Y-m-d'),
                'jenis' => "Keluar",
                'kategori' => $kategori,
                'keterangan' => $keterangan
            ]);
        }

        if ($ket == true) {
            // $pesan = 'Absen ' . $jenis . ' Berhasil pada jam ' . $time . ' di tanggal ' . $tgl;
            return redirect('/dashboruser')->with('success', $pesan);
        } else {
            // $pesan = 'Absen ' . $jenis . ' Berhasil (Terlambat '.$selisihTerlambat.')';
            return redirect('/dashboruser')->with('lambat', $pesan);
        }

    }
}
