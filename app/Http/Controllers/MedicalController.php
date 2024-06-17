<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MedicalController extends Controller
{
    public function tampil_home(){
        return view('home');
    }

    public function tampil_pegawai(){
        return view('data_pegawai');
    }

    public function tampil_jabatan(){
        return view('data_jabatan');
    }

    public function tampil_bpjs(){
        return view('data_bpjs');
    }

    public function tampil_pendidikan(){
        return view('data_pendidikan');
    }

    public function tampil_sertif(){
        return view('data_sertif');
    }

    public function tampil_regris_izin(){
        return view('data_regris_izin');
    }

    public function tampil_laporan(){
        return view('laporan');
    }

    public function print_excel(){
        return view('laporan_excel');
    }

}
