<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\MedicalController;
use Illuminate\Auth\Events\Login;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [MedicalController::class, 'tampil_home']);
Route::get('/pegawai', [MedicalController::class, 'tampil_pegawai']);
Route::get('/jabatan', [MedicalController::class, 'tampil_jabatan']);
Route::get('/bpjs', [MedicalController::class, 'tampil_bpjs']);
Route::get('/pendidikan', [MedicalController::class, 'tampil_pendidikan']);
Route::get('/sertif', [MedicalController::class, 'tampil_sertif']);
Route::get('/regrisizin', [MedicalController::class, 'tampil_regris_izin']);
Route::get('/laporan', [MedicalController::class, 'tampil_laporan']);

Route::get('/excel', [MedicalController::class, 'print_excel']);

Route::get('/login', [LoginController::class, 'tampil_login']);

Route::get('/register', [LoginController::class, 'tampil_register']);