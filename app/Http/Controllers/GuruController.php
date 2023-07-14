<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function dashbor ()
    {
        $guru = DB::table('guru')->get();
        $siswa = DB::table('siswa')->get();
        $absen = DB::table('absen')->get();
        $users = DB::table('users')->get();
        // count($guru);
        return view('dashboard.dashboard', ['guru' => $guru, 'siswa' =>$siswa, 'absen' =>$absen, 'users' => $users]);
    }
    public function index(Request $request)
    {
        $guru = DB::table('guru')->get();
        return view('guru/index', ['guru' => $guru]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('guru.addguru');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::table('guru')->insert([
            'nip' => $request->nip,
            'nama' => $request->nama,
            'no_hp' => $request->hp,
            'id_user' => $request->id_user
        ]);
        return redirect('/guru')->with('success', 'Data berhasil di tambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $guru = DB::table('guru')->where('id_guru', $id)->get();
        return view('guru/editguru', ['guru' => $guru]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        DB::table('guru')->where('id_guru', $request->id_guru)->update([
            'nip' => $request->nip,
            'nama' => $request->nama,
            'no_hp' => $request->hp,
            'id_user' => $request->id_user
        ]);
        return redirect('/guru')->with('success', 'Data berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('guru')->where('id_guru', $id)->delete();
        return redirect('/guru')->with('success', 'Data berhasil di hapus');
    }
}
