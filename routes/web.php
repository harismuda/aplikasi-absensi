<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::middleware(['guest'])->group(function(){
    Route::get('/', 'App\Http\Controllers\SesiController@index')->name('login');
    Route::post('/', 'App\Http\Controllers\SesiController@login');
});
Route::middleware(['auth'])->group(function () {
    Route::get('/home', 'App\Http\Controllers\HomeController@home');

    //dashbor
    Route::get('/dashboruser', 'App\Http\Controllers\UserController@dashboruser');
    Route::get('/absen', 'App\Http\Controllers\UserController@absen');
    Route::get('/dashbor', 'App\Http\Controllers\GuruController@dashbor')->middleware('checkRole:admin');
    //guru
    Route::get('/guru', 'App\Http\Controllers\GuruController@index')->middleware('checkRole:admin');
    Route::get('/guru/addguru', 'App\Http\Controllers\GuruController@create')->middleware('checkRole:admin');
    Route::post('/guru/store', 'App\Http\Controllers\GuruController@store')->middleware('checkRole:admin');
    Route::get('/guru/editguru/{id}', 'App\Http\Controllers\GuruController@edit')->middleware('checkRole:admin');
    Route::post('/guru/update', 'App\Http\Controllers\GuruController@update')->middleware('checkRole:admin');
    Route::get('/guru/hapus/{id}', 'App\Http\Controllers\GuruController@destroy')->middleware('checkRole:admin');

    //siswa
    Route::get('/siswa', 'App\Http\Controllers\SiswaController@index')->middleware('checkRole:admin');
    Route::get('/siswa/tambah', 'App\Http\Controllers\SiswaController@tambah')->middleware('checkRole:admin');
    Route::post('/siswa/store', 'App\Http\Controllers\SiswaController@store')->middleware('checkRole:admin');
    Route::get('/siswa/edit/{id}', 'App\Http\Controllers\SiswaController@edit')->middleware('checkRole:admin');
    Route::post('/siswa/update', 'App\Http\Controllers\SiswaController@update')->middleware('checkRole:admin');
    Route::get('/siswa/hapus/{id}', 'App\Http\Controllers\SiswaController@destroy')->middleware('checkRole:admin');

    //Absen
    Route::get('/absen/guru', 'App\Http\Controllers\AbsenController@index')->middleware('checkRole:admin');
    Route::get('/absen/siswa', 'App\Http\Controllers\AbsenController@siswa')->middleware('checkRole:admin');
    Route::get('/absen/detailsiswa/{id}', 'App\Http\Controllers\AbsenController@detail')->middleware('checkRole:admin');
    Route::get('/absen/detailguru/{id}', 'App\Http\Controllers\AbsenController@detailguru')->middleware('checkRole:admin');

    //User
    Route::get('/user', 'App\Http\Controllers\UserController@index')->middleware('checkRole:admin');
    Route::get('/user/tambah', 'App\Http\Controllers\UserController@tambah')->middleware('checkRole:admin');
    Route::post('/user/store', 'App\Http\Controllers\UserController@store')->middleware('checkRole:admin');
    Route::get('/user/edit/{id}', 'App\Http\Controllers\UserController@edit')->middleware('checkRole:admin');
    Route::post('/user/update', 'App\Http\Controllers\UserController@update')->middleware('checkRole:admin');

    //Laporan
    Route::get('/laporan', 'App\Http\Controllers\LaporanController@bulan')->middleware('checkRole:admin');
    Route::post('/laporan/guru', 'App\Http\Controllers\LaporanController@index')->middleware('checkRole:admin');

    Route::get('/logout', 'App\Http\Controllers\SesiController@logout');
});

Route::get('/master1', function () {
    return view('layout/master1');
});

