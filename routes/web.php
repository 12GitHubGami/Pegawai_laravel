<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\DivisiController;
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\PegawaiController;
 
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
/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/welcome', function () {
    return '<h1>Semangat Belajar Laravel Framework</h1>';
});

Route::get('/salam', function () {
    return view('halaman_salam');
});

Route::get('/pegawai/{nama}/{divisi}', function ($nama,$divisi) {
    return '<ul>
                <li>Nama: '.$nama.'</li>
                <li>Divisi: '.$divisi.'</li>
            </ul>';
});

Route::get('/nilai', function () {
    return view('nilai');
});

Route::get('/mahasiswa', [MahasiswaController::class, 'dataMahasiswa']);
Route::get('/nilaimahasiswa', [MahasiswaController::class, 'nilaiMahasiswa']);

//---------------routing landing page--------------
Route::get('/', function () {
    return view('landingpage.home');
});

Route::get('/home', function () {
    return view('landingpage.home');
});

Route::get('/about', function () {
    return view('landingpage.about');
});

Route::get('/contact', function () {
    return view('landingpage.kontak');
});

Route::get('/login', function () {
    return view('landingpage.login_form');
});

//---------------routing admin page--------------
Route::get('/administrator', function () {
    return view('admin.home');
});

Route::resource('staff',StaffController::class);
Route::resource('divisi',DivisiController::class);
Route::resource('jabatan',JabatanController::class);
Route::resource('pegawai',PegawaiController::class);
Route::get('pegawai-edit/{id}', [PegawaiController::class,'edit']);