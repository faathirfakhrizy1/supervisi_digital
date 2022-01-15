<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController as HC;
use App\Http\Controllers\JadwalController as JC;
use App\Http\Controllers\GuruController as GC;

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

Route::get('/', function () {
    return redirect()->route('login');
});

Auth::routes();

// akun
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/kurikulum/create', [HC::class, 'create'])->name('kuri.create');
Route::post('/kurikulum/store', [HC::class, 'store'])->name('kuri.store');
Route::get('/kurikulum/show-data', [HC::class, 'show'])->name('kuri.list');
Route::get('/kurikulum/mengaktifkan/{id}', [HC::class, 'diaktifkan'])->name('kuri.aktif');
Route::get('/kurikulum/nonaktifkan/{id}', [HC::class, 'nonaktif'])->name('kuri.nonaktif');
Route::get('/kurikulum/delete/{id}', [HC::class, 'destroy'])->name('kuri.delete');
Route::get('/kurikulum/edit/{id}', [HC::class, 'edit'])->name('kuri.edit');
Route::patch('/kurikulum/update/{id}', [HC::class, 'update']);

// jadwal
Route::get('/jadwal/create', [JC::class, 'create'])->name('jadwal.create');
Route::get('/jadwal/list', [JC::class, 'show'])->name('jadwal.list');
Route::post('/jadwal/store', [JC::class, 'store'])->name('jadwal.store');

// gutu
Route::get('/guru/create', [GC::class, 'create'])->name('guru.create');
Route::get('/guru/show', [GC::class, 'show'])->name('guru.list');
Route::get('/guru/supervisi', [GC::class, 'supervisi'])->name('guru.supervisi');
Route::get('/guru/supervisihya', [GC::class, 'supervisi_ya'])->name('guru.supervisiya');
Route::post('/guru/store', [GC::class, 'store'])->name('guru.store');

