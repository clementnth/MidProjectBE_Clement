<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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


Route::get('/home', [HomeCotnroller::class, 'index'])->name('home');
Route::get('/', [PegawaiController::class, 'index'])->name('data');
Route::get('/createPegawai', [PegawaiController::class, 'create'])->name('createPegawai');
Route::post('/savePegawai', [PegawaiController::class, 'store'])->name('savePegawai');
Route::get('/editPegawai/{id}', [PegawaiController::class, 'edit'])->name('editPegawai');
Route::post('/updatePegawai/{id}', [PegawaiController::class, 'update'])->name('updatePegawai');
Route::get('/deletePegawai/{id}', [PegawaiController::class, 'destroy'])->name('deletePegawai');







// Route::post('/create', function() {
//     $employee = new employee();
//     $employee->nama = request('nama');
//     $employee->umur = request('umur');
//     $employee->alamat = request('alamat');
//     $employee->no_telp = request('no-telp');
//     $employee->save();
// });