@extends('layout.main')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Data Pegawai</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active">Data Pegawai</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
        <!-- Main Content -->
        <div class="card">
            <div class="card-header">
                <div class="col-sm-6 col-md-1 col-xl-3">
                    <div class="my-3">
                        <button type="button" class="btn btn-primary btn-default" 
                        data-toggle="modal" data-target="#tambahPegawai">
                            Tambah +
                        </button>
                    </div>

                    <div class="modal fade" id="tambahPegawai">
                        <div class="modal-dialog modal-dialog-scrollable">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">Form Tambah Data Pegawai</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="card-body">
                                                <form>
                                                    <div class="row">
                                                        <div class="col-xl-12">
                                                            <div class="mb-3">
                                                                <label class="form-label"
                                                                    for="default-input">
                                                                    NIK
                                                                </label>
                                                                <input class="form-control"
                                                                    type="text"
                                                                    id="default-input"
                                                                    placeholder="Masukan NIK Pegawai">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-xl-12">
                                                            <div class="mb-3">
                                                                <label class="form-label"
                                                                    for="default-input">
                                                                    NIP
                                                                </label>
                                                                <input class="form-control"
                                                                    type="text"
                                                                    id="default-input"
                                                                    placeholder="Masukan NIP Pegawai">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-xl-12">
                                                            <div class="mb-3">
                                                                <label class="form-label"
                                                                    for="default-input">
                                                                    Nama
                                                                </label>
                                                                <input class="form-control"
                                                                    type="text"
                                                                    id="default-input"
                                                                    placeholder="Masukan Nama Pegawai">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-xl-12">
                                                            <div class="mb-3">
                                                                <label class="form-label"
                                                                    for="default-input">
                                                                    Tempat
                                                                    Lahir
                                                                </label>
                                                                <input class="form-control"
                                                                    type="text"
                                                                    id="default-input"
                                                                    placeholder="Tempat Lahir">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-xl-12">
                                                            <div class="mb-3">
                                                                <label class="form-label"
                                                                    for="default-input">
                                                                    Tanggal
                                                                    Lahir
                                                                </label>
                                                                <input class="form-control"
                                                                    type="date"
                                                                    placeholder="2011-08-19"
                                                                    id="example-date-input">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-xl-12">
                                                            <div class="mb-3">
                                                                <label class="form-label">
                                                                    Alamat
                                                                </label>
                                                        
                                                            <textarea id="textarea" 
                                                            class="form-control" 
                                                            maxlength="225" rows="3" 
                                                            placeholder="
                                                            This textarea has a limit of 225 chars.">
                                                            </textarea>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-xl-12">
                                                            <div class="mb-3">
                                                                <label class="form-label"
                                                                    for="default-input">
                                                                    Nomor HP
                                                                </label>
                                                                <input class="form-control"
                                                                    type="text"
                                                                    id="default-input"
                                                                    placeholder="Masukan Nomor HP">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-xl-12">
                                                            <div class="mb-3">
                                                                <label class="form-label"
                                                                    for="default-input">
                                                                    Email
                                                                </label>
                                                                <input class="form-control"
                                                                    type="text"
                                                                    id="default-input"
                                                                    placeholder="Masukan Email">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-xl-12">
                                                            <div class="mb-3">
                                                            <div class="form-group">
                                                                <label>Jabatan</label>
                                                                <select class="form-control">
                                                                    <option class="text-center"
                                                                    disabled> -- Pilih Salah Satu --
                                                                    </option>
                                                                    <option value="">DIREKTUR UTAMA</option>
                                                                    <option value="">PENANGGUNG JAWAB KLINIK</option>
                                                                    <option value="">PJ. PELAYANAN MEDIS</option>
                                                                    <option value="">KOOR PEL DOKTER UMUM</option>
                                                                    <option value="">KOOR PEL PEL DOKTER GIGI</option>
                                                                    <option value="">KOOR PENDAFTARAN & REKAM MEDIS</option>
                                                                    <option value="">KOOR KIA & KB</option>
                                                                    <option value="">PJ. PENUNJANG MEDIS</option>
                                                                    <option value="">KOOR PEL KEFARMASIAN</option>
                                                                    <option value="">KOOR PEL LABORATORIUM</option>
                                                                    <option value="">PJ. MUTU</option>
                                                                    <option value="">KOOR PPI</option>
                                                                    <option value="">KOOR K3 & MANAJEMEN RESIKO</option>
                                                                    <option value="">KOOR KELUHAN PELANGGAN</option>
                                                                    <option value="">KOOR KESELAMATAN PASIEN</option>
                                                                    <option value="">PJ. ADMINISTRASI & MANAJEMEN</option>
                                                                    <option value="">KOOR SARANA & PRASARANA</option>
                                                                    <option value="">KOOR KEPEGAWAIAN</option>
                                                                    <option value="">KOOR SISTEM INFORMASI</option>
                                                                    <option value="">KOOR KEUANGAN</option>
                                                                </select>
                                                            </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-xl-12">
                                                            <div class="mb-3">
                                                                <div class="form-group">
                                                                    <label>Jenis-Kelamin</label>
                                                                    <select class="form-control">
                                                                        <option class="text-center"
                                                                        disabled> -- Pilih Salah Satu --
                                                                        </option>
                                                                        <option value="">Laki-laki</option>
                                                                        <option value="">Perempuan</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-xl-12">
                                                            <div class="mb-3">
                                                                <label class="form-label"
                                                                    for="default-input">
                                                                    Status
                                                                </label>
                                                                <input class="form-control"
                                                                    type="text"
                                                                    id="default-input"
                                                                    placeholder="Masukan Status">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-xl-12">
                                                            <div class="mb-3">
                                                                <label class="form-label"
                                                                    for="default-input">
                                                                    Tanggal
                                                                    Mulai Bekerja
                                                                </label>
                                                                <input class="form-control"
                                                                    type="date"
                                                                    placeholder="2011-08-19"
                                                                    id="example-date-input">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form> <!-- end form -->
                                            </div>
                                        </div> <!-- end col -->
                                    </div>
                                </div>
                                <div class="modal-footer justify-content-between">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                                    <button type="button" class="btn btn-primary">Simpan</button>
                                </div>
                            </div>
                            <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                    </div>
                    <!-- /.modal -->
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th width="20px">No.</th>
                        <th>NIK</th>
                        <th>NIP</th>
                        <th>Nama</th>
                        <th>Jabatan</th>
                        <th>Status</th>
                        <th>Jenis Kelamin</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>35132240402610001</td>
                        <td>196407141984031001</td>
                        <td>Budi Setiawan S. Kom</td>
                        <td>DIREKTUR UTAMA</td>
                        <td>Pegawai Tetap</td>
                        <td>Laki-Laki</td>
                        <td>
                            <div>
                                <a href="#" class="btn btn-secondary shadow btn-xs sharp mr-1"
                                data-toggle="modal" data-target="#detailPegawai1"><i
                                class="fas fa-eye"></i></a>
        
                                <!-- Modal Form Edit -->
                                <a href="#" class="btn btn-primary shadow btn-xs"
                                data-toggle="modal" data-target="#editPegawai1"><i
                                class="fas fa-pencil-alt"></i></a>

                                <div class="modal fade" id="editPegawai1">
                                    <div class="modal-dialog modal-dialog-scrollable">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Form Edit Data Pegawai</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="card-body">
                                                            <form>
                                                                <div class="row">
                                                                    <div class="col-xl-12">
                                                                        <div class="mb-3">
                                                                            <label class="form-label"
                                                                                for="default-input">
                                                                                NIK
                                                                            </label>
                                                                            <input class="form-control"
                                                                                type="text"
                                                                                id="default-input"
                                                                                value="35132240402610001">
                                                                        </div>
                                                                    </div>
                                                                </div>
            
                                                                <div class="row">
                                                                    <div class="col-xl-12">
                                                                        <div class="mb-3">
                                                                            <label class="form-label"
                                                                                for="default-input">
                                                                                NIP
                                                                            </label>
                                                                            <input class="form-control"
                                                                                type="text"
                                                                                id="default-input"
                                                                                value="196407141984031001">
                                                                        </div>
                                                                    </div>
                                                                </div>
            
                                                                <div class="row">
                                                                    <div class="col-xl-12">
                                                                        <div class="mb-3">
                                                                            <label class="form-label"
                                                                                for="default-input">
                                                                                Nama
                                                                            </label>
                                                                            <input class="form-control"
                                                                                type="text"
                                                                                id="default-input"
                                                                                value="Budi Setiawan S.Kom">
                                                                        </div>
                                                                    </div>
                                                                </div>
            
                                                                <div class="row">
                                                                    <div class="col-xl-12">
                                                                        <div class="mb-3">
                                                                            <label class="form-label"
                                                                                for="default-input">
                                                                                Tempat
                                                                                Lahir
                                                                            </label>
                                                                            <input class="form-control"
                                                                                type="text"
                                                                                id="default-input"
                                                                                value="Surabaya">
                                                                        </div>
                                                                    </div>
                                                                </div>
            
                                                                <div class="row">
                                                                    <div class="col-xl-12">
                                                                        <div class="mb-3">
                                                                            <label class="form-label"
                                                                                for="default-input">
                                                                                Tanggal
                                                                                Lahir
                                                                            </label>
                                                                            <input class="form-control"
                                                                                type="date"
                                                                                value="1980-01-15"
                                                                                id="example-date-input">
                                                                        </div>
                                                                    </div>
                                                                </div>
            
                                                                <div class="row">
                                                                    <div class="col-xl-12">
                                                                        <div class="mb-3">
                                                                            <label class="form-label">
                                                                                Alamat
                                                                            </label>
                                                                    
                                                                        <textarea id="textarea" 
                                                                        class="form-control" 
                                                                        maxlength="225" rows="3" 
                                                                        placeholder="
                                                                        This textarea has a limit of 225 chars.">
                                                                        </textarea>
                                                                        </div>
                                                                    </div>
                                                                </div>
            
                                                                <div class="row">
                                                                    <div class="col-xl-12">
                                                                        <div class="mb-3">
                                                                            <label class="form-label"
                                                                                for="default-input">
                                                                                Nomor HP
                                                                            </label>
                                                                            <input class="form-control"
                                                                                type="text"
                                                                                id="default-input"
                                                                                value="081782121267">
                                                                        </div>
                                                                    </div>
                                                                </div>
            
                                                                <div class="row">
                                                                    <div class="col-xl-12">
                                                                        <div class="mb-3">
                                                                            <label class="form-label"
                                                                                for="default-input">
                                                                                Email
                                                                            </label>
                                                                            <input class="form-control"
                                                                                type="text"
                                                                                id="default-input"
                                                                                value="budisetiaawan@gmail.com">
                                                                        </div>
                                                                    </div>
                                                                </div>
            
                                                                <div class="row">
                                                                    <div class="col-xl-12">
                                                                        <div class="mb-3">
                                                                        <div class="form-group">
                                                                            <label>Jabatan</label>
                                                                            <select class="form-control">
                                                                                <option class="text-center"
                                                                                disabled> -- Pilih Salah Satu --
                                                                                </option>
                                                                                <option value="">DIREKTUR UTAMA</option>
                                                                                <option value="">PENANGGUNG JAWAB KLINIK</option>
                                                                                <option value="">PJ. PELAYANAN MEDIS</option>
                                                                                <option value="">KOOR PEL DOKTER UMUM</option>
                                                                                <option value="">KOOR PEL PEL DOKTER GIGI</option>
                                                                                <option value="">KOOR PENDAFTARAN & REKAM MEDIS</option>
                                                                                <option value="">KOOR KIA & KB</option>
                                                                                <option value="">PJ. PENUNJANG MEDIS</option>
                                                                                <option value="">KOOR PEL KEFARMASIAN</option>
                                                                                <option value="">KOOR PEL LABORATORIUM</option>
                                                                                <option value="">PJ. MUTU</option>
                                                                                <option value="">KOOR PPI</option>
                                                                                <option value="">KOOR K3 & MANAJEMEN RESIKO</option>
                                                                                <option value="">KOOR KELUHAN PELANGGAN</option>
                                                                                <option value="">KOOR KESELAMATAN PASIEN</option>
                                                                                <option value="">PJ. ADMINISTRASI & MANAJEMEN</option>
                                                                                <option value="">KOOR SARANA & PRASARANA</option>
                                                                                <option value="">KOOR KEPEGAWAIAN</option>
                                                                                <option value="">KOOR SISTEM INFORMASI</option>
                                                                                <option value="">KOOR KEUANGAN</option>
                                                                            </select>
                                                                        </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
            
                                                                <div class="row">
                                                                    <div class="col-xl-12">
                                                                        <div class="mb-3">
                                                                            <div class="form-group">
                                                                                <label>Jenis-Kelamin</label>
                                                                                <select class="form-control">
                                                                                    <option class="text-center"
                                                                                    disabled> -- Pilih Salah Satu --
                                                                                    </option>
                                                                                    <option value="">Laki-laki</option>
                                                                                    <option value="">Perempuan</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
            
                                                                <div class="row">
                                                                    <div class="col-xl-12">
                                                                        <div class="mb-3">
                                                                            <label class="form-label"
                                                                                for="default-input">
                                                                                Status
                                                                            </label>
                                                                            <input class="form-control"
                                                                                type="text"
                                                                                id="default-input"
                                                                                value="Pegawai Tetap">
                                                                        </div>
                                                                    </div>
                                                                </div>
            
                                                                <div class="row">
                                                                    <div class="col-xl-12">
                                                                        <div class="mb-3">
                                                                            <label class="form-label"
                                                                                for="default-input">
                                                                                Tanggal
                                                                                Mulai Bekerja
                                                                            </label>
                                                                            <input class="form-control"
                                                                                type="date"
                                                                                value="2015-05-12"
                                                                                id="example-date-input">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </form> <!-- end form -->
                                                        </div>
                                                    </div> <!-- end col -->
                                                </div>
                                            </div>
                                            <div class="modal-footer justify-content-between">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                                                <button type="button" class="btn btn-primary">Simpan</button>
                                            </div>
                                        </div>
                                        <!-- /.modal-content -->
                                    </div>
                                    <!-- /.modal-dialog -->
                                </div>
                                <!-- /.modal -->
        
                                <a href="#" class="btn btn-danger shadow btn-xs sharp "><i
                                class="fas fa-trash waves-effect waves-light sa-warning del"></i></a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>32512440402620002</td>
                        <td>196401141544032002</td>
                        <td>dr. Amanda Clarisa</td>
                        <td>PENANGGUNG JAWAB KLINIK</td>
                        <td>Pegawai Tetap</td>
                        <td>Perempuan</td>
                        <td> 
                            <div>
                                <a href="#" class="btn btn-secondary shadow btn-xs sharp mr-1"
                                data-toggle="modal" data-target="#detailPegawai2"><i
                                class="fas fa-eye"></i></a>
        
                                <!-- Modal Form Edit -->
                                <a href="#" class="btn btn-primary shadow btn-xs"
                                data-toggle="modal" data-target="#editPegawai2"><i
                                class="fas fa-pencil-alt"></i></a>
        
                                <div class="modal fade" id="editPegawai2">
                                    <div class="modal-dialog modal-dialog-scrollable">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Form Edit Data Pegawai</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="card-body">
                                                            <form>
                                                                <div class="row">
                                                                    <div class="col-xl-12">
                                                                        <div class="mb-3">
                                                                            <label class="form-label"
                                                                                for="default-input">
                                                                                NIK
                                                                            </label>
                                                                            <input class="form-control"
                                                                                type="text"
                                                                                id="default-input"
                                                                                value="32512440402620002">
                                                                        </div>
                                                                    </div>
                                                                </div>
            
                                                                <div class="row">
                                                                    <div class="col-xl-12">
                                                                        <div class="mb-3">
                                                                            <label class="form-label"
                                                                                for="default-input">
                                                                                NIP
                                                                            </label>
                                                                            <input class="form-control"
                                                                                type="text"
                                                                                id="default-input"
                                                                                value="196401141544032002">
                                                                        </div>
                                                                    </div>
                                                                </div>
            
                                                                <div class="row">
                                                                    <div class="col-xl-12">
                                                                        <div class="mb-3">
                                                                            <label class="form-label"
                                                                                for="default-input">
                                                                                Nama
                                                                            </label>
                                                                            <input class="form-control"
                                                                                type="text"
                                                                                id="default-input"
                                                                                value="dr. Amanda Clarisa">
                                                                        </div>
                                                                    </div>
                                                                </div>
            
                                                                <div class="row">
                                                                    <div class="col-xl-12">
                                                                        <div class="mb-3">
                                                                            <label class="form-label"
                                                                                for="default-input">
                                                                                Tempat
                                                                                Lahir
                                                                            </label>
                                                                            <input class="form-control"
                                                                                type="text"
                                                                                id="default-input"
                                                                                value="Sidoarjo">
                                                                        </div>
                                                                    </div>
                                                                </div>
            
                                                                <div class="row">
                                                                    <div class="col-xl-12">
                                                                        <div class="mb-3">
                                                                            <label class="form-label"
                                                                                for="default-input">
                                                                                Tanggal
                                                                                Lahir
                                                                            </label>
                                                                            <input class="form-control"
                                                                                type="date"
                                                                                value="1975-02-11"
                                                                                id="example-date-input">
                                                                        </div>
                                                                    </div>
                                                                </div>
            
                                                                <div class="row">
                                                                    <div class="col-xl-12">
                                                                        <div class="mb-3">
                                                                            <label class="form-label">
                                                                                Alamat
                                                                            </label>
                                                                    
                                                                        <textarea id="textarea" 
                                                                        class="form-control" 
                                                                        maxlength="225" rows="3" 
                                                                        placeholder="
                                                                        This textarea has a limit of 225 chars.">
                                                                        </textarea>
                                                                        </div>
                                                                    </div>
                                                                </div>
            
                                                                <div class="row">
                                                                    <div class="col-xl-12">
                                                                        <div class="mb-3">
                                                                            <label class="form-label"
                                                                                for="default-input">
                                                                                Nomor HP
                                                                            </label>
                                                                            <input class="form-control"
                                                                                type="text"
                                                                                id="default-input"
                                                                                value="081932131467">
                                                                        </div>
                                                                    </div>
                                                                </div>
            
                                                                <div class="row">
                                                                    <div class="col-xl-12">
                                                                        <div class="mb-3">
                                                                            <label class="form-label"
                                                                                for="default-input">
                                                                                Email
                                                                            </label>
                                                                            <input class="form-control"
                                                                                type="text"
                                                                                id="default-input"
                                                                                value="amandaclarisa@gmail.com">
                                                                        </div>
                                                                    </div>
                                                                </div>
            
                                                                <div class="row">
                                                                    <div class="col-xl-12">
                                                                        <div class="mb-3">
                                                                        <div class="form-group">
                                                                            <label>Jabatan</label>
                                                                            <select class="form-control">
                                                                                <option class="text-center"
                                                                                disabled> -- Pilih Salah Satu --
                                                                                </option>
                                                                                <option value="">DIREKTUR UTAMA</option>
                                                                                <option value="">PENANGGUNG JAWAB KLINIK</option>
                                                                                <option value="">PJ. PELAYANAN MEDIS</option>
                                                                                <option value="">KOOR PEL DOKTER UMUM</option>
                                                                                <option value="">KOOR PEL PEL DOKTER GIGI</option>
                                                                                <option value="">KOOR PENDAFTARAN & REKAM MEDIS</option>
                                                                                <option value="">KOOR KIA & KB</option>
                                                                                <option value="">PJ. PENUNJANG MEDIS</option>
                                                                                <option value="">KOOR PEL KEFARMASIAN</option>
                                                                                <option value="">KOOR PEL LABORATORIUM</option>
                                                                                <option value="">PJ. MUTU</option>
                                                                                <option value="">KOOR PPI</option>
                                                                                <option value="">KOOR K3 & MANAJEMEN RESIKO</option>
                                                                                <option value="">KOOR KELUHAN PELANGGAN</option>
                                                                                <option value="">KOOR KESELAMATAN PASIEN</option>
                                                                                <option value="">PJ. ADMINISTRASI & MANAJEMEN</option>
                                                                                <option value="">KOOR SARANA & PRASARANA</option>
                                                                                <option value="">KOOR KEPEGAWAIAN</option>
                                                                                <option value="">KOOR SISTEM INFORMASI</option>
                                                                                <option value="">KOOR KEUANGAN</option>
                                                                            </select>
                                                                        </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
            
                                                                <div class="row">
                                                                    <div class="col-xl-12">
                                                                        <div class="mb-3">
                                                                            <div class="form-group">
                                                                                <label>Jenis-Kelamin</label>
                                                                                <select class="form-control">
                                                                                    <option class="text-center"
                                                                                    disabled> -- Pilih Salah Satu --
                                                                                    </option>
                                                                                    <option value="">Laki-laki</option>
                                                                                    <option value="">Perempuan</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
            
                                                                <div class="row">
                                                                    <div class="col-xl-12">
                                                                        <div class="mb-3">
                                                                            <label class="form-label"
                                                                                for="default-input">
                                                                                Status
                                                                            </label>
                                                                            <input class="form-control"
                                                                                type="text"
                                                                                id="default-input"
                                                                                value="Pegawai Tetap">
                                                                        </div>
                                                                    </div>
                                                                </div>
            
                                                                <div class="row">
                                                                    <div class="col-xl-12">
                                                                        <div class="mb-3">
                                                                            <label class="form-label"
                                                                                for="default-input">
                                                                                Tanggal
                                                                                Mulai Bekerja
                                                                            </label>
                                                                            <input class="form-control"
                                                                                type="date"
                                                                                value="2018-05-10"
                                                                                id="example-date-input">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </form> <!-- end form -->
                                                        </div>
                                                    </div> <!-- end col -->
                                                </div>
                                            </div>
                                            <div class="modal-footer justify-content-between">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                                                <button type="button" class="btn btn-primary">Simpan</button>
                                            </div>
                                        </div>
                                        <!-- /.modal-content -->
                                    </div>
                                    <!-- /.modal-dialog -->
                                </div>
                                <!-- /.modal -->
        
                                <a href="#" class="btn btn-danger shadow btn-xs sharp"><i
                                class="fas fa-trash waves-effect waves-light sa-warning del"></i></a>
        
                            </div>
                        </td>
                    </tr>
        
                    <tr>
                        <td>3</td>
                        <td>33153440402630003</td>
                        <td>196407141984033003</td>
                        <td>dr. Suharti Pertiwi</td>
                        <td>PJ. PEL MEDIS</td>
                        <td>Pegawai Tetap</td>
                        <td>Perempuan</td>
                        <td> 
                            <div>
                                <a href="#" class="btn btn-secondary shadow btn-xs sharp mr-1"
                                data-toggle="modal" data-target="#detailPegawai3"><i
                                class="fas fa-eye"></i></a>
        
                                <!-- Modal Form Edit -->
                                <a href="#" class="btn btn-primary shadow btn-xs"
                                data-toggle="modal" data-target="#editPegawai3"><i
                                class="fas fa-pencil-alt"></i></a>

                                <div class="modal fade" id="editPegawai3">
                                    <div class="modal-dialog modal-dialog-scrollable">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Form Edit Data Pegawai</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="card-body">
                                                            <form>
                                                                <div class="row">
                                                                    <div class="col-xl-12">
                                                                        <div class="mb-3">
                                                                            <label class="form-label"
                                                                                for="default-input">
                                                                                NIK
                                                                            </label>
                                                                            <input class="form-control"
                                                                                type="text"
                                                                                id="default-input"
                                                                                value="33153440402630003">
                                                                        </div>
                                                                    </div>
                                                                </div>
            
                                                                <div class="row">
                                                                    <div class="col-xl-12">
                                                                        <div class="mb-3">
                                                                            <label class="form-label"
                                                                                for="default-input">
                                                                                NIP
                                                                            </label>
                                                                            <input class="form-control"
                                                                                type="text"
                                                                                id="default-input"
                                                                                value="196407141984033003">
                                                                        </div>
                                                                    </div>
                                                                </div>
            
                                                                <div class="row">
                                                                    <div class="col-xl-12">
                                                                        <div class="mb-3">
                                                                            <label class="form-label"
                                                                                for="default-input">
                                                                                Nama
                                                                            </label>
                                                                            <input class="form-control"
                                                                                type="text"
                                                                                id="default-input"
                                                                                value="dr. Suharti Pertiwi">
                                                                        </div>
                                                                    </div>
                                                                </div>
            
                                                                <div class="row">
                                                                    <div class="col-xl-12">
                                                                        <div class="mb-3">
                                                                            <label class="form-label"
                                                                                for="default-input">
                                                                                Tempat
                                                                                Lahir
                                                                            </label>
                                                                            <input class="form-control"
                                                                                type="text"
                                                                                id="default-input"
                                                                                value="Sidoarjo">
                                                                        </div>
                                                                    </div>
                                                                </div>
            
                                                                <div class="row">
                                                                    <div class="col-xl-12">
                                                                        <div class="mb-3">
                                                                            <label class="form-label"
                                                                                for="default-input">
                                                                                Tanggal
                                                                                Lahir
                                                                            </label>
                                                                            <input class="form-control"
                                                                                type="date"
                                                                                value="1970-03-21"
                                                                                id="example-date-input">
                                                                        </div>
                                                                    </div>
                                                                </div>
            
                                                                <div class="row">
                                                                    <div class="col-xl-12">
                                                                        <div class="mb-3">
                                                                            <label class="form-label">
                                                                                Alamat
                                                                            </label>
                                                                    
                                                                        <textarea id="textarea" 
                                                                        class="form-control" 
                                                                        maxlength="225" rows="3" 
                                                                        placeholder="
                                                                        This textarea has a limit of 225 chars.">
                                                                        </textarea>
                                                                        </div>
                                                                    </div>
                                                                </div>
            
                                                                <div class="row">
                                                                    <div class="col-xl-12">
                                                                        <div class="mb-3">
                                                                            <label class="form-label"
                                                                                for="default-input">
                                                                                Nomor HP
                                                                            </label>
                                                                            <input class="form-control"
                                                                                type="text"
                                                                                id="default-input"
                                                                                value="08123411363">
                                                                        </div>
                                                                    </div>
                                                                </div>
            
                                                                <div class="row">
                                                                    <div class="col-xl-12">
                                                                        <div class="mb-3">
                                                                            <label class="form-label"
                                                                                for="default-input">
                                                                                Email
                                                                            </label>
                                                                            <input class="form-control"
                                                                                type="text"
                                                                                id="default-input"
                                                                                value="suhartipertiwi@gmail.com">
                                                                        </div>
                                                                    </div>
                                                                </div>
            
                                                                <div class="row">
                                                                    <div class="col-xl-12">
                                                                        <div class="mb-3">
                                                                        <div class="form-group">
                                                                            <label>Jabatan</label>
                                                                            <select class="form-control">
                                                                                <option class="text-center"
                                                                                disabled> -- Pilih Salah Satu --
                                                                                </option>
                                                                                <option value="">DIREKTUR UTAMA</option>
                                                                                <option value="">PENANGGUNG JAWAB KLINIK</option>
                                                                                <option value="">PJ. PELAYANAN MEDIS</option>
                                                                                <option value="">KOOR PEL DOKTER UMUM</option>
                                                                                <option value="">KOOR PEL PEL DOKTER GIGI</option>
                                                                                <option value="">KOOR PENDAFTARAN & REKAM MEDIS</option>
                                                                                <option value="">KOOR KIA & KB</option>
                                                                                <option value="">PJ. PENUNJANG MEDIS</option>
                                                                                <option value="">KOOR PEL KEFARMASIAN</option>
                                                                                <option value="">KOOR PEL LABORATORIUM</option>
                                                                                <option value="">PJ. MUTU</option>
                                                                                <option value="">KOOR PPI</option>
                                                                                <option value="">KOOR K3 & MANAJEMEN RESIKO</option>
                                                                                <option value="">KOOR KELUHAN PELANGGAN</option>
                                                                                <option value="">KOOR KESELAMATAN PASIEN</option>
                                                                                <option value="">PJ. ADMINISTRASI & MANAJEMEN</option>
                                                                                <option value="">KOOR SARANA & PRASARANA</option>
                                                                                <option value="">KOOR KEPEGAWAIAN</option>
                                                                                <option value="">KOOR SISTEM INFORMASI</option>
                                                                                <option value="">KOOR KEUANGAN</option>
                                                                            </select>
                                                                        </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
            
                                                                <div class="row">
                                                                    <div class="col-xl-12">
                                                                        <div class="mb-3">
                                                                            <div class="form-group">
                                                                                <label>Jenis-Kelamin</label>
                                                                                <select class="form-control">
                                                                                    <option class="text-center"
                                                                                    disabled> -- Pilih Salah Satu --
                                                                                    </option>
                                                                                    <option value="">Laki-laki</option>
                                                                                    <option value="">Perempuan</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
            
                                                                <div class="row">
                                                                    <div class="col-xl-12">
                                                                        <div class="mb-3">
                                                                            <label class="form-label"
                                                                                for="default-input">
                                                                                Status
                                                                            </label>
                                                                            <input class="form-control"
                                                                                type="text"
                                                                                id="default-input"
                                                                                value="Pegawai Tetap">
                                                                        </div>
                                                                    </div>
                                                                </div>
            
                                                                <div class="row">
                                                                    <div class="col-xl-12">
                                                                        <div class="mb-3">
                                                                            <label class="form-label"
                                                                                for="default-input">
                                                                                Tanggal
                                                                                Mulai Bekerja
                                                                            </label>
                                                                            <input class="form-control"
                                                                                type="date"
                                                                                value="2017-04-20"
                                                                                id="example-date-input">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </form> <!-- end form -->
                                                        </div>
                                                    </div> <!-- end col -->
                                                </div>
                                            </div>
                                            <div class="modal-footer justify-content-between">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                                                <button type="button" class="btn btn-primary">Simpan</button>
                                            </div>
                                        </div>
                                        <!-- /.modal-content -->
                                    </div>
                                    <!-- /.modal-dialog -->
                                </div>
                                <!-- /.modal -->

                                <a href="#" class="btn btn-danger shadow btn-xs sharp"><i
                                class="fas fa-trash waves-effect waves-light sa-warning del"></i></a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>34142440402460004</td>
                        <td>196407141984034004</td>
                        <td>dr. Kelly Cristiani</td>
                        <td>PJ. PENUNJANG MEDIS</td>
                        <td>Pegawai Tetap</td>
                        <td>Perempuan</td>
                        <td> 
                            <div>
                                <a href="#" class="btn btn-secondary shadow btn-xs sharp mr-1"
                                data-toggle="modal" data-target="#detailPegawai4"><i
                                class="fas fa-eye"></i></a>
        
                                <!-- Modal Form Edit -->
                                <a href="#" class="btn btn-primary shadow btn-xs"
                                data-toggle="modal" data-target="#editPegawai4"><i
                                class="fas fa-pencil-alt"></i></a>

                                <div class="modal fade" id="editPegawai4">
                                    <div class="modal-dialog modal-dialog-scrollable">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Form Edit Data Pegawai</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="card-body">
                                                            <form>
                                                                <div class="row">
                                                                    <div class="col-xl-12">
                                                                        <div class="mb-3">
                                                                            <label class="form-label"
                                                                                for="default-input">
                                                                                NIK
                                                                            </label>
                                                                            <input class="form-control"
                                                                                type="text"
                                                                                id="default-input"
                                                                                value="34142440402460004">
                                                                        </div>
                                                                    </div>
                                                                </div>
            
                                                                <div class="row">
                                                                    <div class="col-xl-12">
                                                                        <div class="mb-3">
                                                                            <label class="form-label"
                                                                                for="default-input">
                                                                                NIP
                                                                            </label>
                                                                            <input class="form-control"
                                                                                type="text"
                                                                                id="default-input"
                                                                                value="196407141984034004">
                                                                        </div>
                                                                    </div>
                                                                </div>
            
                                                                <div class="row">
                                                                    <div class="col-xl-12">
                                                                        <div class="mb-3">
                                                                            <label class="form-label"
                                                                                for="default-input">
                                                                                Nama
                                                                            </label>
                                                                            <input class="form-control"
                                                                                type="text"
                                                                                id="default-input"
                                                                                value="dr. Kelly Cristiani">
                                                                        </div>
                                                                    </div>
                                                                </div>
            
                                                                <div class="row">
                                                                    <div class="col-xl-12">
                                                                        <div class="mb-3">
                                                                            <label class="form-label"
                                                                                for="default-input">
                                                                                Tempat
                                                                                Lahir
                                                                            </label>
                                                                            <input class="form-control"
                                                                                type="text"
                                                                                id="default-input"
                                                                                value="Surabaya">
                                                                        </div>
                                                                    </div>
                                                                </div>
            
                                                                <div class="row">
                                                                    <div class="col-xl-12">
                                                                        <div class="mb-3">
                                                                            <label class="form-label"
                                                                                for="default-input">
                                                                                Tanggal
                                                                                Lahir
                                                                            </label>
                                                                            <input class="form-control"
                                                                                type="date"
                                                                                value="1975-04-25"
                                                                                id="example-date-input">
                                                                        </div>
                                                                    </div>
                                                                </div>
            
                                                                <div class="row">
                                                                    <div class="col-xl-12">
                                                                        <div class="mb-3">
                                                                            <label class="form-label">
                                                                                Alamat
                                                                            </label>
                                                                    
                                                                        <textarea id="textarea" 
                                                                        class="form-control" 
                                                                        maxlength="225" rows="3" 
                                                                        placeholder="
                                                                        This textarea has a limit of 225 chars.">
                                                                        </textarea>
                                                                        </div>
                                                                    </div>
                                                                </div>
            
                                                                <div class="row">
                                                                    <div class="col-xl-12">
                                                                        <div class="mb-3">
                                                                            <label class="form-label"
                                                                                for="default-input">
                                                                                Nomor HP
                                                                            </label>
                                                                            <input class="form-control"
                                                                                type="text"
                                                                                id="default-input"
                                                                                value="081342176262">
                                                                        </div>
                                                                    </div>
                                                                </div>
            
                                                                <div class="row">
                                                                    <div class="col-xl-12">
                                                                        <div class="mb-3">
                                                                            <label class="form-label"
                                                                                for="default-input">
                                                                                Email
                                                                            </label>
                                                                            <input class="form-control"
                                                                                type="text"
                                                                                id="default-input"
                                                                                value="kellycristiani@gmail.com">
                                                                        </div>
                                                                    </div>
                                                                </div>
            
                                                                <div class="row">
                                                                    <div class="col-xl-12">
                                                                        <div class="mb-3">
                                                                        <div class="form-group">
                                                                            <label>Jabatan</label>
                                                                            <select class="form-control">
                                                                                <option class="text-center"
                                                                                disabled> -- Pilih Salah Satu --
                                                                                </option>
                                                                                <option value="">DIREKTUR UTAMA</option>
                                                                                <option value="">PENANGGUNG JAWAB KLINIK</option>
                                                                                <option value="">PJ. PELAYANAN MEDIS</option>
                                                                                <option value="">KOOR PEL DOKTER UMUM</option>
                                                                                <option value="">KOOR PEL PEL DOKTER GIGI</option>
                                                                                <option value="">KOOR PENDAFTARAN & REKAM MEDIS</option>
                                                                                <option value="">KOOR KIA & KB</option>
                                                                                <option value="">PJ. PENUNJANG MEDIS</option>
                                                                                <option value="">KOOR PEL KEFARMASIAN</option>
                                                                                <option value="">KOOR PEL LABORATORIUM</option>
                                                                                <option value="">PJ. MUTU</option>
                                                                                <option value="">KOOR PPI</option>
                                                                                <option value="">KOOR K3 & MANAJEMEN RESIKO</option>
                                                                                <option value="">KOOR KELUHAN PELANGGAN</option>
                                                                                <option value="">KOOR KESELAMATAN PASIEN</option>
                                                                                <option value="">PJ. ADMINISTRASI & MANAJEMEN</option>
                                                                                <option value="">KOOR SARANA & PRASARANA</option>
                                                                                <option value="">KOOR KEPEGAWAIAN</option>
                                                                                <option value="">KOOR SISTEM INFORMASI</option>
                                                                                <option value="">KOOR KEUANGAN</option>
                                                                            </select>
                                                                        </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
            
                                                                <div class="row">
                                                                    <div class="col-xl-12">
                                                                        <div class="mb-3">
                                                                            <div class="form-group">
                                                                                <label>Jenis-Kelamin</label>
                                                                                <select class="form-control">
                                                                                    <option class="text-center"
                                                                                    disabled> -- Pilih Salah Satu --
                                                                                    </option>
                                                                                    <option value="">Laki-laki</option>
                                                                                    <option value="">Perempuan</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
            
                                                                <div class="row">
                                                                    <div class="col-xl-12">
                                                                        <div class="mb-3">
                                                                            <label class="form-label"
                                                                                for="default-input">
                                                                                Status
                                                                            </label>
                                                                            <input class="form-control"
                                                                                type="text"
                                                                                id="default-input"
                                                                                value="Pegawai Tetap">
                                                                        </div>
                                                                    </div>
                                                                </div>
            
                                                                <div class="row">
                                                                    <div class="col-xl-12">
                                                                        <div class="mb-3">
                                                                            <label class="form-label"
                                                                                for="default-input">
                                                                                Tanggal
                                                                                Mulai Bekerja
                                                                            </label>
                                                                            <input class="form-control"
                                                                                type="date"
                                                                                value="2018-06-18"
                                                                                id="example-date-input">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </form> <!-- end form -->
                                                        </div>
                                                    </div> <!-- end col -->
                                                </div>
                                            </div>
                                            <div class="modal-footer justify-content-between">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                                                <button type="button" class="btn btn-primary">Simpan</button>
                                            </div>
                                        </div>
                                        <!-- /.modal-content -->
                                    </div>
                                    <!-- /.modal-dialog -->
                                </div>
                                <!-- /.modal -->

                                <a href="#" class="btn btn-danger shadow btn-xs sharp"><i
                                class="fas fa-trash waves-effect waves-light sa-warning del"></i></a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>35342440402610005</td>
                        <td>196407141984035005</td>
                        <td>drg. Airi Putri Cendikia</td>
                        <td>PJ. MUTU</td>
                        <td>Pegawai Tetap</td>
                        <td>Perempuan</td>
                        <td> 
                            <div>
                                <a href="#" class="btn btn-secondary shadow btn-xs sharp mr-1"
                                data-toggle="modal" data-target="#detailPegawai5"><i
                                class="fas fa-eye"></i></a>
                                
                                <!-- Modal Form Edit -->
                                <a href="#" class="btn btn-primary shadow btn-xs"
                                data-toggle="modal" data-target="#editPegawai5"><i
                                class="fas fa-pencil-alt"></i></a>

                                <div class="modal fade" id="editPegawai5">
                                    <div class="modal-dialog modal-dialog-scrollable">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Form Edit Data Pegawai</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="card-body">
                                                            <form>
                                                                <div class="row">
                                                                    <div class="col-xl-12">
                                                                        <div class="mb-3">
                                                                            <label class="form-label"
                                                                                for="default-input">
                                                                                NIK
                                                                            </label>
                                                                            <input class="form-control"
                                                                                type="text"
                                                                                id="default-input"
                                                                                value="35342440402610005">
                                                                        </div>
                                                                    </div>
                                                                </div>
            
                                                                <div class="row">
                                                                    <div class="col-xl-12">
                                                                        <div class="mb-3">
                                                                            <label class="form-label"
                                                                                for="default-input">
                                                                                NIP
                                                                            </label>
                                                                            <input class="form-control"
                                                                                type="text"
                                                                                id="default-input"
                                                                                value="196407141984035005">
                                                                        </div>
                                                                    </div>
                                                                </div>
            
                                                                <div class="row">
                                                                    <div class="col-xl-12">
                                                                        <div class="mb-3">
                                                                            <label class="form-label"
                                                                                for="default-input">
                                                                                Nama
                                                                            </label>
                                                                            <input class="form-control"
                                                                                type="text"
                                                                                id="default-input"
                                                                                value="drg. Airi Putri Cendikia">
                                                                        </div>
                                                                    </div>
                                                                </div>
            
                                                                <div class="row">
                                                                    <div class="col-xl-12">
                                                                        <div class="mb-3">
                                                                            <label class="form-label"
                                                                                for="default-input">
                                                                                Tempat
                                                                                Lahir
                                                                            </label>
                                                                            <input class="form-control"
                                                                                type="text"
                                                                                id="default-input"
                                                                                value="Sidoarjo">
                                                                        </div>
                                                                    </div>
                                                                </div>
            
                                                                <div class="row">
                                                                    <div class="col-xl-12">
                                                                        <div class="mb-3">
                                                                            <label class="form-label"
                                                                                for="default-input">
                                                                                Tanggal
                                                                                Lahir
                                                                            </label>
                                                                            <input class="form-control"
                                                                                type="date"
                                                                                value="1995-05-05"
                                                                                id="example-date-input">
                                                                        </div>
                                                                    </div>
                                                                </div>
            
                                                                <div class="row">
                                                                    <div class="col-xl-12">
                                                                        <div class="mb-3">
                                                                            <label class="form-label">
                                                                                Alamat
                                                                            </label>
                                                                    
                                                                        <textarea id="textarea" 
                                                                        class="form-control" 
                                                                        maxlength="225" rows="3" 
                                                                        placeholder="
                                                                        This textarea has a limit of 225 chars.">
                                                                        </textarea>
                                                                        </div>
                                                                    </div>
                                                                </div>
            
                                                                <div class="row">
                                                                    <div class="col-xl-12">
                                                                        <div class="mb-3">
                                                                            <label class="form-label"
                                                                                for="default-input">
                                                                                Nomor HP
                                                                            </label>
                                                                            <input class="form-control"
                                                                                type="text"
                                                                                id="default-input"
                                                                                value="081732141265">
                                                                        </div>
                                                                    </div>
                                                                </div>
            
                                                                <div class="row">
                                                                    <div class="col-xl-12">
                                                                        <div class="mb-3">
                                                                            <label class="form-label"
                                                                                for="default-input">
                                                                                Email
                                                                            </label>
                                                                            <input class="form-control"
                                                                                type="text"
                                                                                id="default-input"
                                                                                value="airiputri@gmail.com">
                                                                        </div>
                                                                    </div>
                                                                </div>
            
                                                                <div class="row">
                                                                    <div class="col-xl-12">
                                                                        <div class="mb-3">
                                                                        <div class="form-group">
                                                                            <label>Jabatan</label>
                                                                            <select class="form-control">
                                                                                <option class="text-center"
                                                                                disabled> -- Pilih Salah Satu --
                                                                                </option>
                                                                                <option value="">DIREKTUR UTAMA</option>
                                                                                <option value="">PENANGGUNG JAWAB KLINIK</option>
                                                                                <option value="">PJ. PELAYANAN MEDIS</option>
                                                                                <option value="">KOOR PEL DOKTER UMUM</option>
                                                                                <option value="">KOOR PEL PEL DOKTER GIGI</option>
                                                                                <option value="">KOOR PENDAFTARAN & REKAM MEDIS</option>
                                                                                <option value="">KOOR KIA & KB</option>
                                                                                <option value="">PJ. PENUNJANG MEDIS</option>
                                                                                <option value="">KOOR PEL KEFARMASIAN</option>
                                                                                <option value="">KOOR PEL LABORATORIUM</option>
                                                                                <option value="">PJ. MUTU</option>
                                                                                <option value="">KOOR PPI</option>
                                                                                <option value="">KOOR K3 & MANAJEMEN RESIKO</option>
                                                                                <option value="">KOOR KELUHAN PELANGGAN</option>
                                                                                <option value="">KOOR KESELAMATAN PASIEN</option>
                                                                                <option value="">PJ. ADMINISTRASI & MANAJEMEN</option>
                                                                                <option value="">KOOR SARANA & PRASARANA</option>
                                                                                <option value="">KOOR KEPEGAWAIAN</option>
                                                                                <option value="">KOOR SISTEM INFORMASI</option>
                                                                                <option value="">KOOR KEUANGAN</option>
                                                                            </select>
                                                                        </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
            
                                                                <div class="row">
                                                                    <div class="col-xl-12">
                                                                        <div class="mb-3">
                                                                            <div class="form-group">
                                                                                <label>Jenis-Kelamin</label>
                                                                                <select class="form-control">
                                                                                    <option class="text-center"
                                                                                    disabled> -- Pilih Salah Satu --
                                                                                    </option>
                                                                                    <option value="">Laki-laki</option>
                                                                                    <option value="">Perempuan</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
            
                                                                <div class="row">
                                                                    <div class="col-xl-12">
                                                                        <div class="mb-3">
                                                                            <label class="form-label"
                                                                                for="default-input">
                                                                                Status
                                                                            </label>
                                                                            <input class="form-control"
                                                                                type="text"
                                                                                id="default-input"
                                                                                value="Pegawai Tetap">
                                                                        </div>
                                                                    </div>
                                                                </div>
            
                                                                <div class="row">
                                                                    <div class="col-xl-12">
                                                                        <div class="mb-3">
                                                                            <label class="form-label"
                                                                                for="default-input">
                                                                                Tanggal
                                                                                Mulai Bekerja
                                                                            </label>
                                                                            <input class="form-control"
                                                                                type="date"
                                                                                value="2017-07-30"
                                                                                id="example-date-input">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </form> <!-- end form -->
                                                        </div>
                                                    </div> <!-- end col -->
                                                </div>
                                            </div>
                                            <div class="modal-footer justify-content-between">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                                                <button type="button" class="btn btn-primary">Simpan</button>
                                            </div>
                                        </div>
                                        <!-- /.modal-content -->
                                    </div>
                                    <!-- /.modal-dialog -->
                                </div>
                                <!-- /.modal -->
        
                                <a href="#" class="btn btn-danger shadow btn-xs sharp"><i
                                class="fas fa-trash waves-effect waves-light sa-warning del"></i></a>
                            </div>
                        </td>
                    </tr>
    
                </tbody>
            </table>
            </div>
            <!-- /.card-body -->
            <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-right">
                    <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                </ul>
            </div>
        </div>
        <!-- /.Card -->
        <!-- /.Content -->
    </div>

<!-- Detail pegawai 1 -->
<div class="modal fade" id="detailPegawai1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Lihat Data Pegawai</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <table cellpadding="5" align="jutify">
                    <tr>
                        <td>NIK</td>
                        <td>:</td>
                        <td>35132240402610001</td>
                    </tr>

                    <tr>
                        <td>NIP</td>
                        <td>:</td>
                        <td>196407141984031001</td>
                    </tr>

                    <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td>Budi Setiawan S. Kom</td>
                    </tr>

                    <tr>
                        <td>Tanggal Lahir</td>
                        <td>:</td>
                        <td>15/01/1980</td>
                    </tr>

                    <tr>
                        <td>Alamat</td>
                        <td>:</td>
                        <td>Desa Sidomulyo Block B17, Kec. Kenjeran Kota Surabaya</td>
                    </tr>

                    <tr>
                        <td>Nomor HP</td>
                        <td>:</td>
                        <td>081782121267</td>
                    </tr>

                    <tr>
                        <td>Email</td>
                        <td>:</td>
                        <td>budisetiawan@gmail.com</td>
                    </tr>

                    <tr>
                        <td>Jabatan</td>
                        <td>:</td>
                        <td>DIREKTUR UTAMA</td>
                    </tr>

                    <tr>
                        <td>Jenis Kelamin</td>
                        <td>:</td>
                        <td>Laki-laki</td>
                    </tr>

                    <tr>
                        <td>Status</td>
                        <td>:</td>
                        <td>Pegawai Tetap</td>
                    </tr>

                    <tr>
                        <td>Tanggal Mulai Bekerja</td>
                        <td>:</td>
                        <td>12/05/2015</td>
                    </tr>
                </table>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- AKhir detail 1 -->

<!-- Detai Pergawai 2 -->
<div class="modal fade" id="detailPegawai2">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Lihat Data Pegawai</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <table cellpadding="5" align="jutify">
                    <tr>
                        <td>NIK</td>
                        <td>:</td>
                        <td>32512440402620002</td>
                    </tr>

                    <tr>
                        <td>NIP</td>
                        <td>:</td>
                        <td>196401141544032002</td>
                    </tr>

                    <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td>dr. Amanda Clarisa</td>
                    </tr>

                    <tr>
                        <td>Tanggal Lahir</td>
                        <td>:</td>
                        <td>11/02/1975</td>
                    </tr>

                    <tr>
                        <td>Alamat</td>
                        <td>:</td>
                        <td>Desa gemurung Block A21, Kec. Sedati Kab. Sidoarjo</td>
                    </tr>

                    <tr>
                        <td>Nomor HP</td>
                        <td>:</td>
                        <td>081932131467</td>
                    </tr>

                    <tr>
                        <td>Email</td>
                        <td>:</td>
                        <td>amandaclarisa@gmail.com</td>
                    </tr>

                    <tr>
                        <td>Jabatan</td>
                        <td>:</td>
                        <td>PENANGGUNG JAWAB KLINIK</td>
                    </tr>

                    <tr>
                        <td>Jenis Kelamin</td>
                        <td>:</td>
                        <td>Perempuan</td>
                    </tr>

                    <tr>
                        <td>Status</td>
                        <td>:</td>
                        <td>Pegawai Teptap</td>
                    </tr>

                    <tr>
                        <td>Tanggal Mulai Bekerja</td>
                        <td>:</td>
                        <td>10/05/2018</td>
                    </tr>
                </table>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- Akhir detai 2 -->

<!-- Detai Pergawai 3 -->
<div class="modal fade" id="detailPegawai3">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Lihat Data Pegawai</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <table cellpadding="5" align="jutify">
                    <tr>
                        <td>NIK</td>
                        <td>:</td>
                        <td>33153440402630003</td>
                    </tr>

                    <tr>
                        <td>NIP</td>
                        <td>:</td>
                        <td>196407141984033003</td>
                    </tr>

                    <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td>dr. Suharti Pertiwi</td>
                    </tr>

                    <tr>
                        <td>Tanggal Lahir</td>
                        <td>:</td>
                        <td>21/03/1970</td>
                    </tr>

                    <tr>
                        <td>Alamat</td>
                        <td>:</td>
                        <td>Desa Pabean Block C10, <br>Kec. Sedati Kab. Sidoarjo</td>
                    </tr>

                    <tr>
                        <td>Nomor HP</td>
                        <td>:</td>
                        <td>08123411363</td>
                    </tr>

                    <tr>
                        <td>Email</td>
                        <td>:</td>
                        <td>suhartipertiwi@gmail.com</td>
                    </tr>

                    <tr>
                        <td>Jabatan</td>
                        <td>:</td>
                        <td>PJ. PEL MEDIS</td>
                    </tr>

                    <tr>
                        <td>Jenis Kelamin</td>
                        <td>:</td>
                        <td>Perempuan</td>
                    </tr>

                    <tr>
                        <td>Status</td>
                        <td>:</td>
                        <td>Pegawai Tetap</td>
                    </tr>

                    <tr>
                        <td>Tanggal Mulai Bekerja</td>
                        <td>:</td>
                        <td>20/04/2017</td>
                    </tr>
                </table>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- Akhir detai 3 -->

<!-- Detai Pergawai 4 -->
<div class="modal fade" id="detailPegawai4">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Lihat Data Pegawai</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <table cellpadding="5" align="jutify">
                    <tr>
                        <td>NIK</td>
                        <td>:</td>
                        <td>34142440402460004</td>
                    </tr>

                    <tr>
                        <td>NIP</td>
                        <td>:</td>
                        <td>196407141984034004</td>
                    </tr>

                    <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td>dr. Kelly Cristiani</td>
                    </tr>

                    <tr>
                        <td>Tanggal Lahir</td>
                        <td>:</td>
                        <td>25/04/1975</td>
                    </tr>

                    <tr>
                        <td>Alamat</td>
                        <td>:</td>
                        <td>Desa Wedi Block A21,Kec. Gedangan, Kab. Sidoarjo</td>
                    </tr>

                    <tr>
                        <td>Nomor HP</td>
                        <td>:</td>
                        <td>081342176262</td>
                    </tr>

                    <tr>
                        <td>Email</td>
                        <td>:</td>
                        <td>kellycristiani@gmail.com</td>
                    </tr>

                    <tr>
                        <td>Jabatan</td>
                        <td>:</td>
                        <td>PJ. PENUNJANG MEDIS</td>
                    </tr>

                    <tr>
                        <td>Jenis Kelamin</td>
                        <td>:</td>
                        <td>Perempuan</td>
                    </tr>

                    <tr>
                        <td>Status</td>
                        <td>:</td>
                        <td>Pegawai Tetap</td>
                    </tr>

                    <tr>
                        <td>Tanggal Mulai Bekerja</td>
                        <td>:</td>
                        <td>18/06/2018</td>
                    </tr>
                </table>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- Akhir detai 4 -->

<!-- Detai Pergawai 5 -->
<div class="modal fade" id="detailPegawai5">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Lihat Data Pegawai</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <table cellpadding="5" align="jutify">
                    <tr>
                        <td>NIK</td>
                        <td>:</td>
                        <td>35342440402610005</td>
                    </tr>

                    <tr>
                        <td>NIP</td>
                        <td>:</td>
                        <td>196407141984035005</td>
                    </tr>

                    <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td>drg. Airi Putri Cendikia</td>
                    </tr>

                    <tr>
                        <td>Tanggal Lahir</td>
                        <td>:</td>
                        <td>05/05/1995</td>
                    </tr>

                    <tr>
                        <td>Alamat</td>
                        <td>:</td>
                        <td>Berbek Block D11 Kec. Waru Kab. Sidoarjo</td>
                    </tr>

                    <tr>
                        <td>Nomor HP</td>
                        <td>:</td>
                        <td>081732141265</td>
                    </tr>

                    <tr>
                        <td>Email</td>
                        <td>:</td>
                        <td>airiputri@gmail.com</td>
                    </tr>

                    <tr>
                        <td>Jabatan</td>
                        <td>:</td>
                        <td>PJ. MUTU</td>
                    </tr>

                    <tr>
                        <td>Jenis Kelamin</td>
                        <td>:</td>
                        <td>Perempuan</td>
                    </tr>

                    <tr>
                        <td>Status</td>
                        <td>:</td>
                        <td>Pegawai Tetap</td>
                    </tr>

                    <tr>
                        <td>Tanggal Mulai Bekerja</td>
                        <td>:</td>
                        <td>30/07/2017</td>
                    </tr>
                </table>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- Akhir detai 5 -->


@endsection

    