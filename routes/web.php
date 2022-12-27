<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\BioSiswaController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\PegawaiController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/index', [BioSiswaController::class, 'index_siswa'])->name('index_siswa');
Route::get('/index/create', [BioSiswaController::class, 'create_bio'])->name('create_bio');
Route::post('/index/store', [BioSiswaController::class, 'store_bio'])->name('store_bio');

//admin
Route::get('/index/pegawai', [PegawaiController::class, 'index_pegawai'])->name('index_pegawai');
Route::get('/index/data/pegawai', [PegawaiController::class, 'data_pegawai'])->name('data_pegawai');
Route::get('/index/tambah/pegawai', [PegawaiController::class, 'add_pegawai'])->name('add_pegawai');
Route::post('/index/tambah/pegawai', [PegawaiController::class, 'store_pegawai'])->name('store_pegawai');
Route::get('/index/pegawai/{pegawai}/edit', [PegawaiController::class, 'edit_pegawai'])->name('edit_pegawai');
Route::patch('/index/pegawai/{pegawai}/update', [PegawaiController::class, 'update_pegawai'])->name('update_pegawai');
Route::delete('/index/pegawai/{pegawai}/delete', [PegawaiController::class, 'delete_pegawai'])->name('delete_pegawai');
Route::get('/index/create/user/guru', [RegisterController::class, 'register_guru'])->name('register_guru');
Route::post('/index/create', [RegisterController::class, 'create_user'])->name('create_user');

//guru
Route::get('/index/guru', [GuruController::class, 'index_guru'])->name('index_guru');
Route::get('/index/guru/data/kelas', [GuruController::class, 'data_kelas'])->name('data_kelas');