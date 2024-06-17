@extends('layout.main')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Data Sertifikat</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active">Data Sertifikat</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <div class="card">
        <div class="card-header">
            <div class="col-sm-6 col-md-1 col-xl-3">
                <div class="my-3">
                    <!-- Small modal -->
                    <button type="button" class="btn btn-primary"
                    data-toggle="modal" data-target="#tambahSertif">Tambah +
                    </button>
                </div>

                <div class="modal fade" id="tambahSertif">
                    <div class="modal-dialog modal-dialog-scrollable">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Form Tambah Data Sertifikat</h4>
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
                                                            <div class="form-group">
                                                                <label>Pegawai</label>
                                                                <select class="form-control">
                                                                    <option class="text-center" selected>
                                                                        -- Pilih Pegawai --
                                                                    </option>
                                                                    <option value="1">Budi Setiawan S. Kom</option>
                                                                    <option value="2">dr. Amanda Clarisa</option>
                                                                    <option value="3">dr. Suharti Pertiwi</option>
                                                                    <option value="4">dr. kelly Cristiani</option>
                                                                    <option value="5">drg. Airi Putri Cendikia</option>
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
                                                                Rumpun Pelatihan
                                                            </label>
                                                            <input class="form-control"
                                                                type="text"
                                                                id="default-input"
                                                                placeholder="Masukan Rumpun Pelatihan">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-xl-12">
                                                        <div class="mb-3">
                                                            <label class="form-label"
                                                                for="default-input">
                                                                Jenis Pelatihan
                                                            </label>
                                                            <input class="form-control"
                                                                type="text"
                                                                id="default-input"
                                                                placeholder="Masukan Jenis Pelatihan">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-xl-12">
                                                        <div class="mb-3">
                                                            <label class="form-label"
                                                                for="default-input">
                                                                Kodifikasi Diklat
                                                            </label>
                                                            <input class="form-control"
                                                                type="text"
                                                                id="default-input"
                                                                placeholder="Masukan Kodifikasi Diklat">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-xl-12">
                                                        <div class="mb-3">
                                                            <label class="form-label"
                                                                for="default-input">
                                                                Nama Diklat
                                                            </label>
                                                            <input class="form-control"
                                                                type="text"
                                                                id="default-input"
                                                                placeholder="Masukan Nama Diklat">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-xl-12">
                                                        <div class="mb-3">
                                                            <label class="form-label"
                                                                for="default-input">
                                                                Akriditasi Pelatihan
                                                            </label>
                                                            <input class="form-control"
                                                                type="text"
                                                                id="default-input"
                                                                placeholder="Masukan Akreditasi">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-xl-12">
                                                        <div class="mb-3">
                                                            <label class="form-label"
                                                                for="default-input">
                                                                Tempat Pelatihan
                                                            </label>
                                                            <input class="form-control"
                                                                type="text"
                                                                id="default-input"
                                                                placeholder="Masukan Tempat Pelatihan">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-xl-12">
                                                        <div class="mb-3">
                                                            <label class="form-label"
                                                                for="default-input">
                                                                Tanggal Pelaksanaan
                                                            </label>
                                                            <input class="form-control"
                                                                type="date"
                                                                placeholder="2000-08-27"
                                                                id="example-date-input">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-xl-12">
                                                        <div class="mb-3">
                                                            <label class="form-label"
                                                                for="default-input">
                                                                Lama Pelatihan
                                                            </label>
                                                            <input class="form-control"
                                                                type="text"
                                                                id="default-input"
                                                                placeholder="Masuka Lama Pelatihan">
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
                    <th>Nama</th>
                    <th>Rumpun Pelatihan</th>
                    <th>Jenis Pelatihan</th>
                    <th>Nama Diklat</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>35132240402610001</td>
                    <td>Budi Setiawan S. Kom</td>
                    <td>IT</td>
                    <td>Workshop</td>
                    <td>Data Analysis</td>
                    <td>
                        <a href="#" class="btn btn-secondary shadow btn-xs sharp mr-1"
                        data-toggle="modal" data-target="#detailSertif1"><i
                        class="fas fa-eye"></i></a>

                        <a href="#" class="btn btn-primary shadow btn-xs"
                        data-toggle="modal" data-target="#editSertif1"><i
                        class="fas fa-pencil-alt"></i></a>

                        <div class="modal fade" id="editSertif1">
                            <div class="modal-dialog modal-dialog-scrollable">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Form Edit Data Sertifikat</h4>
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
                                                                    <div class="form-group">
                                                                        <label>Pegawai</label>
                                                                        <select class="form-control">
                                                                            <option class="text-center" selected>
                                                                                -- Pilih Pegawai --
                                                                            </option>
                                                                            <option value="1">Budi Setiawan S. Kom</option>
                                                                            <option value="2">dr. Amanda Clarisa</option>
                                                                            <option value="3">dr. Suharti Pertiwi</option>
                                                                            <option value="4">dr. kelly Cristiani</option>
                                                                            <option value="5">drg. Airi Putri Cendikia</option>
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
                                                                        Rumpun Pelatihan
                                                                    </label>
                                                                    <input class="form-control"
                                                                        type="text"
                                                                        id="default-input"
                                                                        value="IT">
                                                                </div>
                                                            </div>
                                                        </div>
        
                                                        <div class="row">
                                                            <div class="col-xl-12">
                                                                <div class="mb-3">
                                                                    <label class="form-label"
                                                                        for="default-input">
                                                                        Jenis Pelatihan
                                                                    </label>
                                                                    <input class="form-control"
                                                                        type="text"
                                                                        id="default-input"
                                                                        value="Workshop">
                                                                </div>
                                                            </div>
                                                        </div>
        
                                                        <div class="row">
                                                            <div class="col-xl-12">
                                                                <div class="mb-3">
                                                                    <label class="form-label"
                                                                        for="default-input">
                                                                        Kodifikasi Diklat
                                                                    </label>
                                                                    <input class="form-control"
                                                                        type="text"
                                                                        id="default-input"
                                                                        value="DA 201">
                                                                </div>
                                                            </div>
                                                        </div>
        
                                                        <div class="row">
                                                            <div class="col-xl-12">
                                                                <div class="mb-3">
                                                                    <label class="form-label"
                                                                        for="default-input">
                                                                        Nama Diklat
                                                                    </label>
                                                                    <input class="form-control"
                                                                        type="text"
                                                                        id="default-input"
                                                                        value="Data Analysis">
                                                                </div>
                                                            </div>
                                                        </div>
        
                                                        <div class="row">
                                                            <div class="col-xl-12">
                                                                <div class="mb-3">
                                                                    <label class="form-label"
                                                                        for="default-input">
                                                                        Akriditasi Pelatihan
                                                                    </label>
                                                                    <input class="form-control"
                                                                        type="text"
                                                                        id="default-input"
                                                                        value="A">
                                                                </div>
                                                            </div>
                                                        </div>
        
                                                        <div class="row">
                                                            <div class="col-xl-12">
                                                                <div class="mb-3">
                                                                    <label class="form-label"
                                                                        for="default-input">
                                                                        Tempat Pelatihan
                                                                    </label>
                                                                    <input class="form-control"
                                                                        type="text"
                                                                        id="default-input"
                                                                        value="Balai Latihan Kerja">
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-xl-12">
                                                                <div class="mb-3">
                                                                    <label class="form-label"
                                                                        for="default-input">
                                                                        Tanggal Pelaksanaan
                                                                    </label>
                                                                    <input class="form-control"
                                                                        type="date"
                                                                        value="2000-08-27"
                                                                        id="example-date-input">
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-xl-12">
                                                                <div class="mb-3">
                                                                    <label class="form-label"
                                                                        for="default-input">
                                                                        Lama Pelatihan
                                                                    </label>
                                                                    <input class="form-control"
                                                                        type="text"
                                                                        id="default-input"
                                                                        value="3 Hari">
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

                        <a href="#" class="btn btn-danger shadow btn-xs sharp"><i
                        class="fas fa-trash waves-effect waves-light sa-warning del"></i></a>
                    </td>
                </tr>

                <tr >
                    <td>2</td>
                    <td>32512440402620002</td>
                    <td>dr. Amanda Clarisa</td>
                    <td>Penyakit Dalam</td>
                    <td>Pelatihan</td>
                    <td>Penatalaksanaan Hipertensi</td>
                    <td> 
                        <a href="#" class="btn btn-secondary shadow btn-xs sharp mr-1"
                        data-toggle="modal" data-target="#detailSertif2"><i
                        class="fas fa-eye"></i></a>

                        <a href="#" class="btn btn-primary shadow btn-xs"
                        data-toggle="modal" data-target="#editSertif2"><i
                        class="fas fa-pencil-alt"></i></a>

                        <div class="modal fade" id="editSertif2">
                            <div class="modal-dialog modal-dialog-scrollable">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Form Edit Data Sertifikat</h4>
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
                                                                    <div class="form-group">
                                                                        <label>Pegawai</label>
                                                                        <select class="form-control">
                                                                            <option class="text-center" selected>
                                                                                -- Pilih Pegawai --
                                                                            </option>
                                                                            <option value="1">Budi Setiawan S. Kom</option>
                                                                            <option value="2">dr. Amanda Clarisa</option>
                                                                            <option value="3">dr. Suharti Pertiwi</option>
                                                                            <option value="4">dr. kelly Cristiani</option>
                                                                            <option value="5">drg. Airi Putri Cendikia</option>
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
                                                                        Rumpun Pelatihan
                                                                    </label>
                                                                    <input class="form-control"
                                                                        type="text"
                                                                        id="default-input"
                                                                        value="Penyakit Dalam">
                                                                </div>
                                                            </div>
                                                        </div>
        
                                                        <div class="row">
                                                            <div class="col-xl-12">
                                                                <div class="mb-3">
                                                                    <label class="form-label"
                                                                        for="default-input">
                                                                        Jenis Pelatihan
                                                                    </label>
                                                                    <input class="form-control"
                                                                        type="text"
                                                                        id="default-input"
                                                                        value="Pelatihan">
                                                                </div>
                                                            </div>
                                                        </div>
        
                                                        <div class="row">
                                                            <div class="col-xl-12">
                                                                <div class="mb-3">
                                                                    <label class="form-label"
                                                                        for="default-input">
                                                                        Kodifikasi Diklat
                                                                    </label>
                                                                    <input class="form-control"
                                                                        type="text"
                                                                        id="default-input"
                                                                        value="PT 301">
                                                                </div>
                                                            </div>
                                                        </div>
        
                                                        <div class="row">
                                                            <div class="col-xl-12">
                                                                <div class="mb-3">
                                                                    <label class="form-label"
                                                                        for="default-input">
                                                                        Nama Diklat
                                                                    </label>
                                                                    <input class="form-control"
                                                                        type="text"
                                                                        id="default-input"
                                                                        value="Penatalaksanaan Hipertensi">
                                                                </div>
                                                            </div>
                                                        </div>
        
                                                        <div class="row">
                                                            <div class="col-xl-12">
                                                                <div class="mb-3">
                                                                    <label class="form-label"
                                                                        for="default-input">
                                                                        Akriditasi Pelatihan
                                                                    </label>
                                                                    <input class="form-control"
                                                                        type="text"
                                                                        id="default-input"
                                                                        value="A">
                                                                </div>
                                                            </div>
                                                        </div>
        
                                                        <div class="row">
                                                            <div class="col-xl-12">
                                                                <div class="mb-3">
                                                                    <label class="form-label"
                                                                        for="default-input">
                                                                        Tempat Pelatihan
                                                                    </label>
                                                                    <input class="form-control"
                                                                        type="text"
                                                                        id="default-input"
                                                                        value="Rumah Sakit">
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-xl-12">
                                                                <div class="mb-3">
                                                                    <label class="form-label"
                                                                        for="default-input">
                                                                        Tanggal Pelaksanaan
                                                                    </label>
                                                                    <input class="form-control"
                                                                        type="date"
                                                                        value="1999-05-15"
                                                                        id="example-date-input">
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-xl-12">
                                                                <div class="mb-3">
                                                                    <label class="form-label"
                                                                        for="default-input">
                                                                        Lama Pelatihan
                                                                    </label>
                                                                    <input class="form-control"
                                                                        type="text"
                                                                        id="default-input"
                                                                        value=" Hari">
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

                        <a href="#" class="btn btn-danger shadow btn-xs sharp"><i
                        class="fas fa-trash waves-effect waves-light sa-warning del"></i></a>
                    </td>
                </tr>

                <tr>
                    <td>3</td>
                    <td>33153440402630003</td>
                    <td>dr. Suharti Pertiwi</td>
                    <td>Anestesiologi</td>
                    <td>Seminar</td>
                    <td>Manajemen Nyeri Post-Operasi</td>
                    <td> 
                        <a href="#" class="btn btn-secondary shadow btn-xs sharp mr-1"
                        data-toggle="modal" data-target="#detailSertif3"><i
                        class="fas fa-eye"></i></a>

                        <a href="#" class="btn btn-primary shadow btn-xs"
                        data-toggle="modal" data-target="#editSertif3"><i
                        class="fas fa-pencil-alt"></i></a>

                        <div class="modal fade" id="editSertif3">
                            <div class="modal-dialog modal-dialog-scrollable">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Form Edit Data Sertifikat</h4>
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
                                                                    <div class="form-group">
                                                                        <label>Pegawai</label>
                                                                        <select class="form-control">
                                                                            <option class="text-center" selected>
                                                                                -- Pilih Pegawai --
                                                                            </option>
                                                                            <option value="1">Budi Setiawan S. Kom</option>
                                                                            <option value="2">dr. Amanda Clarisa</option>
                                                                            <option value="3">dr. Suharti Pertiwi</option>
                                                                            <option value="4">dr. kelly Cristiani</option>
                                                                            <option value="5">drg. Airi Putri Cendikia</option>
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
                                                                        Rumpun Pelatihan
                                                                    </label>
                                                                    <input class="form-control"
                                                                        type="text"
                                                                        id="default-input"
                                                                        value="Anestesiologi">
                                                                </div>
                                                            </div>
                                                        </div>
        
                                                        <div class="row">
                                                            <div class="col-xl-12">
                                                                <div class="mb-3">
                                                                    <label class="form-label"
                                                                        for="default-input">
                                                                        Jenis Pelatihan
                                                                    </label>
                                                                    <input class="form-control"
                                                                        type="text"
                                                                        id="default-input"
                                                                        value="Seminar">
                                                                </div>
                                                            </div>
                                                        </div>
        
                                                        <div class="row">
                                                            <div class="col-xl-12">
                                                                <div class="mb-3">
                                                                    <label class="form-label"
                                                                        for="default-input">
                                                                        Kodifikasi Diklat
                                                                    </label>
                                                                    <input class="form-control"
                                                                        type="text"
                                                                        id="default-input"
                                                                        value="SM 402">
                                                                </div>
                                                            </div>
                                                        </div>
        
                                                        <div class="row">
                                                            <div class="col-xl-12">
                                                                <div class="mb-3">
                                                                    <label class="form-label"
                                                                        for="default-input">
                                                                        Nama Diklat
                                                                    </label>
                                                                    <input class="form-control"
                                                                        type="text"
                                                                        id="default-input"
                                                                        value="Manajemen Nyeri Post-Operasi">
                                                                </div>
                                                            </div>
                                                        </div>
        
                                                        <div class="row">
                                                            <div class="col-xl-12">
                                                                <div class="mb-3">
                                                                    <label class="form-label"
                                                                        for="default-input">
                                                                        Akriditasi Pelatihan
                                                                    </label>
                                                                    <input class="form-control"
                                                                        type="text"
                                                                        id="default-input"
                                                                        value="A">
                                                                </div>
                                                            </div>
                                                        </div>
        
                                                        <div class="row">
                                                            <div class="col-xl-12">
                                                                <div class="mb-3">
                                                                    <label class="form-label"
                                                                        for="default-input">
                                                                        Tempat Pelatihan
                                                                    </label>
                                                                    <input class="form-control"
                                                                        type="text"
                                                                        id="default-input"
                                                                        value="Rumah Sakit">
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-xl-12">
                                                                <div class="mb-3">
                                                                    <label class="form-label"
                                                                        for="default-input">
                                                                        Tanggal Pelaksanaan
                                                                    </label>
                                                                    <input class="form-control"
                                                                        type="date"
                                                                        value="1990-02-11"
                                                                        id="example-date-input">
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-xl-12">
                                                                <div class="mb-3">
                                                                    <label class="form-label"
                                                                        for="default-input">
                                                                        Lama Pelatihan
                                                                    </label>
                                                                    <input class="form-control"
                                                                        type="text"
                                                                        id="default-input"
                                                                        value="1 Hari">
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


                        <a href="#" class="btn btn-danger shadow btn-xs sharp"><i
                        class="fas fa-trash waves-effect waves-light sa-warning del"></i></a>
                        
                    </td>
                </tr>
                <tr >
                    <td>4</td>
                    <td>34142440402460004</td>
                    <td>dr. Kelly Cristiani</td>
                    <td>Dermatologi</td>
                    <td>Pelatihan</td>
                    <td>Penggunaan Laser dalam Kedokteran Kulit</td>
                    <td> 
                        <a href="#" class="btn btn-secondary shadow btn-xs sharp mr-1"
                        data-toggle="modal" data-target="#detailSertif4"><i
                        class="fas fa-eye"></i></a>

                        <a href="#" class="btn btn-primary shadow btn-xs"
                        data-toggle="modal" data-target="#editSertif4"><i
                        class="fas fa-pencil-alt"></i></a>

                        <div class="modal fade" id="editSertif4">
                            <div class="modal-dialog modal-dialog-scrollable">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Form Edit Data Sertifikat</h4>
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
                                                                    <div class="form-group">
                                                                        <label>Pegawai</label>
                                                                        <select class="form-control">
                                                                            <option class="text-center" selected>
                                                                                -- Pilih Pegawai --
                                                                            </option>
                                                                            <option value="1">Budi Setiawan S. Kom</option>
                                                                            <option value="2">dr. Amanda Clarisa</option>
                                                                            <option value="3">dr. Suharti Pertiwi</option>
                                                                            <option value="4">dr. kelly Cristiani</option>
                                                                            <option value="5">drg. Airi Putri Cendikia</option>
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
                                                                        Rumpun Pelatihan
                                                                    </label>
                                                                    <input class="form-control"
                                                                        type="text"
                                                                        id="default-input"
                                                                        value="Dermatologi">
                                                                </div>
                                                            </div>
                                                        </div>
        
                                                        <div class="row">
                                                            <div class="col-xl-12">
                                                                <div class="mb-3">
                                                                    <label class="form-label"
                                                                        for="default-input">
                                                                        Jenis Pelatihan
                                                                    </label>
                                                                    <input class="form-control"
                                                                        type="text"
                                                                        id="default-input"
                                                                        value="Dermatologi">
                                                                </div>
                                                            </div>
                                                        </div>
        
                                                        <div class="row">
                                                            <div class="col-xl-12">
                                                                <div class="mb-3">
                                                                    <label class="form-label"
                                                                        for="default-input">
                                                                        Kodifikasi Diklat
                                                                    </label>
                                                                    <input class="form-control"
                                                                        type="text"
                                                                        id="default-input"
                                                                        value="PT 501">
                                                                </div>
                                                            </div>
                                                        </div>
        
                                                        <div class="row">
                                                            <div class="col-xl-12">
                                                                <div class="mb-3">
                                                                    <label class="form-label"
                                                                        for="default-input">
                                                                        Nama Diklat
                                                                    </label>
                                                                    <input class="form-control"
                                                                        type="text"
                                                                        id="default-input"
                                                                        value="Penggunaan Laser dalam Kedokteran Kulit">
                                                                </div>
                                                            </div>
                                                        </div>
        
                                                        <div class="row">
                                                            <div class="col-xl-12">
                                                                <div class="mb-3">
                                                                    <label class="form-label"
                                                                        for="default-input">
                                                                        Akriditasi Pelatihan
                                                                    </label>
                                                                    <input class="form-control"
                                                                        type="text"
                                                                        id="default-input"
                                                                        value="A">
                                                                </div>
                                                            </div>
                                                        </div>
        
                                                        <div class="row">
                                                            <div class="col-xl-12">
                                                                <div class="mb-3">
                                                                    <label class="form-label"
                                                                        for="default-input">
                                                                        Tempat Pelatihan
                                                                    </label>
                                                                    <input class="form-control"
                                                                        type="text"
                                                                        id="default-input"
                                                                        value="Rumah Sakit">
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-xl-12">
                                                                <div class="mb-3">
                                                                    <label class="form-label"
                                                                        for="default-input">
                                                                        Tanggal Pelaksanaan
                                                                    </label>
                                                                    <input class="form-control"
                                                                        type="date"
                                                                        value="1993-05-21"
                                                                        id="example-date-input">
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-xl-12">
                                                                <div class="mb-3">
                                                                    <label class="form-label"
                                                                        for="default-input">
                                                                        Lama Pelatihan
                                                                    </label>
                                                                    <input class="form-control"
                                                                        type="text"
                                                                        id="default-input"
                                                                        value="1 Hari">
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


                        <a href="#" class="btn btn-danger shadow btn-xs sharp"><i
                        class="fas fa-trash waves-effect waves-light sa-warning del"></i></a>
                    </td>
                </tr>
                <tr >
                    <td>5</td>
                    <td>35342440402610005</td>
                    <td>drg. Airi Putri Cendikia</td>
                    <td>Kedokteran Gigi</td>
                    <td>Workshop</td>
                    <td>Teknik Restorasi Estetik</td>
                    <td> 
                        <a href="#" class="btn btn-secondary shadow btn-xs sharp mr-1"
                        data-toggle="modal" data-target="#detailSertif5"><i
                        class="fas fa-eye"></i></a>

                        <a href="#" class="btn btn-primary shadow btn-xs"
                        data-toggle="modal" data-target="#editSertif2"><i
                        class="fas fa-pencil-alt"></i></a>

                        <div class="modal fade" id="editSertif5">
                            <div class="modal-dialog modal-dialog-scrollable">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Form Edit Data Sertifikat</h4>
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
                                                                    <div class="form-group">
                                                                        <label>Pegawai</label>
                                                                        <select class="form-control">
                                                                            <option class="text-center" selected>
                                                                                -- Pilih Pegawai --
                                                                            </option>
                                                                            <option value="1">Budi Setiawan S. Kom</option>
                                                                            <option value="2">dr. Amanda Clarisa</option>
                                                                            <option value="3">dr. Suharti Pertiwi</option>
                                                                            <option value="4">dr. kelly Cristiani</option>
                                                                            <option value="5">drg. Airi Putri Cendikia</option>
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
                                                                        Rumpun Pelatihan
                                                                    </label>
                                                                    <input class="form-control"
                                                                        type="text"
                                                                        id="default-input"
                                                                        value="Kedokteran Gigi">
                                                                </div>
                                                            </div>
                                                        </div>
        
                                                        <div class="row">
                                                            <div class="col-xl-12">
                                                                <div class="mb-3">
                                                                    <label class="form-label"
                                                                        for="default-input">
                                                                        Jenis Pelatihan
                                                                    </label>
                                                                    <input class="form-control"
                                                                        type="text"
                                                                        id="default-input"
                                                                        value="Workshop">
                                                                </div>
                                                            </div>
                                                        </div>
        
                                                        <div class="row">
                                                            <div class="col-xl-12">
                                                                <div class="mb-3">
                                                                    <label class="form-label"
                                                                        for="default-input">
                                                                        Kodifikasi Diklat
                                                                    </label>
                                                                    <input class="form-control"
                                                                        type="text"
                                                                        id="default-input"
                                                                        value="WS 601">
                                                                </div>
                                                            </div>
                                                        </div>
        
                                                        <div class="row">
                                                            <div class="col-xl-12">
                                                                <div class="mb-3">
                                                                    <label class="form-label"
                                                                        for="default-input">
                                                                        Nama Diklat
                                                                    </label>
                                                                    <input class="form-control"
                                                                        type="text"
                                                                        id="default-input"
                                                                        value="Teknik Restorasi Estetik">
                                                                </div>
                                                            </div>
                                                        </div>
        
                                                        <div class="row">
                                                            <div class="col-xl-12">
                                                                <div class="mb-3">
                                                                    <label class="form-label"
                                                                        for="default-input">
                                                                        Akriditasi Pelatihan
                                                                    </label>
                                                                    <input class="form-control"
                                                                        type="text"
                                                                        id="default-input"
                                                                        value="A">
                                                                </div>
                                                            </div>
                                                        </div>
        
                                                        <div class="row">
                                                            <div class="col-xl-12">
                                                                <div class="mb-3">
                                                                    <label class="form-label"
                                                                        for="default-input">
                                                                        Tempat Pelatihan
                                                                    </label>
                                                                    <input class="form-control"
                                                                        type="text"
                                                                        id="default-input"
                                                                        value="Rumah Sakit">
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-xl-12">
                                                                <div class="mb-3">
                                                                    <label class="form-label"
                                                                        for="default-input">
                                                                        Tanggal Pelaksanaan
                                                                    </label>
                                                                    <input class="form-control"
                                                                        type="date"
                                                                        value="1995-10-05"
                                                                        id="example-date-input">
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-xl-12">
                                                                <div class="mb-3">
                                                                    <label class="form-label"
                                                                        for="default-input">
                                                                        Lama Pelatihan
                                                                    </label>
                                                                    <input class="form-control"
                                                                        type="text"
                                                                        id="default-input"
                                                                        value="1 Hari">
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


                        <a href="#" class="btn btn-danger shadow btn-xs sharp"><i
                        class="fas fa-trash waves-effect waves-light sa-warning del"></i></a>
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
    <!-- /.card -->


    <!-- /.content -->
</div>

<!-- Detai Pegawai 1 -->
<div class="modal fade" id="detailSertif1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Lihat Data Sertifikat</h4>
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
                        <td>Nama</td>
                        <td>:</td>
                        <td>Budi Setiawan S. Kom</td>
                    </tr>
    
                    <tr>
                        <td>Rumpun Pelatihan</td>
                        <td>:</td>
                        <td>IT</td>
                    </tr>
    
                    <tr>
                        <td>Jenis Pelatihan</td>
                        <td>:</td>
                        <td>Workshop</td>
                    </tr>
    
                    <tr>
                        <td>Kodifikasi Diklat</td>
                        <td>:</td>
                        <td>DA 201</td>
                    </tr>
    
                    <tr>
                        <td>Nama Diklat</td>
                        <td>:</td>
                        <td>Data Analysis</td>
                    </tr>
    
                    <tr>
                        <td>Akreditasi Pelatihan</td>
                        <td>:</td>
                        <td>A</td>
                    </tr>
    
                    <tr>
                        <td>Tempat Pelatihan</td>
                        <td>:</td>
                        <td>Balai Latian Kerja</td>
                    </tr>
    
                    <tr>
                        <td>Tanggal Pelaksanaan</td>
                        <td>:</td>
                        <td>27/08/2000</td>
                    </tr>
    
                    <tr>
                        <td>Lama Pelatihan</td>
                        <td>:</td>
                        <td>3 Hari</td>
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
<!-- AKhir Detai Pegawai 1 -->


<!-- Detai Pegawai 2 -->
<div class="modal fade" id="detailSertif2">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Lihat Data Sertifikat</h4>
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
                        <td>Nama</td>
                        <td>:</td>
                        <td>dr. Amanda Clarisa</td>
                    </tr>
    
                    <tr>
                        <td>Rumpun Pelatihan</td>
                        <td>:</td>
                        <td>Penyakit Dalam</td>
                    </tr>
    
                    <tr>
                        <td>Jenis Pelatihan</td>
                        <td>:</td>
                        <td>Pelatihan</td>
                    </tr>
    
                    <tr>
                        <td>Kodifikasi Diklat</td>
                        <td>:</td>
                        <td>PT 301</td>
                    </tr>
    
                    <tr>
                        <td>Nama Diklat</td>
                        <td>:</td>
                        <td>Penatalaksanaan Hipertensi</td>
                    </tr>
    
                    <tr>
                        <td>Akreditasi Pelatihan</td>
                        <td>:</td>
                        <td>A</td>
                    </tr>
    
                    <tr>
                        <td>Tempat Pelatihan</td>
                        <td>:</td>
                        <td>Rumah Sakit</td>
                    </tr>
    
                    <tr>
                        <td>Tanggal Pelaksanaan</td>
                        <td>:</td>
                        <td>15/05/1999</td>
                    </tr>
    
                    <tr>
                        <td>Lama Pelatihan</td>
                        <td>:</td>
                        <td>1 Hari</td>
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
<!-- AKhir Detai Pegawai 2 -->


<!-- Detai Pegawai 3 -->
<div class="modal fade" id="detailSertif3">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Lihat Data Sertifikat</h4>
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
                        <td>Nama</td>
                        <td>:</td>
                        <td>dr. Suharti Pertiwi</td>
                    </tr>
    
                    <tr>
                        <td>Rumpun Pelatihan</td>
                        <td>:</td>
                        <td>Anestesiologi</td>
                    </tr>
    
                    <tr>
                        <td>Jenis Pelatihan</td>
                        <td>:</td>
                        <td>Seminar</td>
                    </tr>
    
                    <tr>
                        <td>Kodifikasi Diklat</td>
                        <td>:</td>
                        <td>SM 402</td>
                    </tr>
    
                    <tr>
                        <td>Nama Diklat</td>
                        <td>:</td>
                        <td>Manajemen Nyeri Post-Operasi</td>
                    </tr>
    
                    <tr>
                        <td>Akreditasi Pelatihan</td>
                        <td>:</td>
                        <td>A</td>
                    </tr>
    
                    <tr>
                        <td>Tempat Pelatihan</td>
                        <td>:</td>
                        <td>Rumah Sakit</td>
                    </tr>
    
                    <tr>
                        <td>Tanggal Pelaksanaan</td>
                        <td>:</td>
                        <td>11/02/1990</td>
                    </tr>
    
                    <tr>
                        <td>Lama Pelatihan</td>
                        <td>:</td>
                        <td>1 Hari</td>
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
<!-- AKhir Detai Pegawai 3 -->


<!-- Detai Pegawai 4 -->
<div class="modal fade" id="detailSertif4">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Lihat Data Sertifikat</h4>
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
                        <td>Nama</td>
                        <td>:</td>
                        <td>dr. Kelly Cristiani</td>
                    </tr>
    
                    <tr>
                        <td>Rumpun Pelatihan</td>
                        <td>:</td>
                        <td>Dermatologi</td>
                    </tr>
    
                    <tr>
                        <td>Jenis Pelatihan</td>
                        <td>:</td>
                        <td>Pelatihan</td>
                    </tr>
    
                    <tr>
                        <td>Kodifikasi Diklat</td>
                        <td>:</td>
                        <td>PT 501</td>
                    </tr>
    
                    <tr>
                        <td>Nama Diklat</td>
                        <td>:</td>
                        <td>Penggunaan Laser dalam Kedokteran Kulit</td>
                    </tr>
    
                    <tr>
                        <td>Akreditasi Pelatihan</td>
                        <td>:</td>
                        <td>A</td>
                    </tr>
    
                    <tr>
                        <td>Tempat Pelatihan</td>
                        <td>:</td>
                        <td>Rumah Sakit</td>
                    </tr>
    
                    <tr>
                        <td>Tanggal Pelaksanaan</td>
                        <td>:</td>
                        <td>21/05/1993</td>
                    </tr>
    
                    <tr>
                        <td>Lama Pelatihan</td>
                        <td>:</td>
                        <td>1 Hari</td>
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
<!-- AKhir Detai Pegawai 4 -->


<!-- Detai Pegawai 5 -->
<div class="modal fade" id="detailSertif5">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Lihat Data Sertifikat</h4>
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
                        <td>Nama</td>
                        <td>:</td>
                        <td>drg. Airi Putri Cendikia</td>
                    </tr>
    
                    <tr>
                        <td>Rumpun Pelatihan</td>
                        <td>:</td>
                        <td>Kedokteran Gigi</td>
                    </tr>
    
                    <tr>
                        <td>Jenis Pelatihan</td>
                        <td>:</td>
                        <td>Workshop</td>
                    </tr>
    
                    <tr>
                        <td>Kodifikasi Diklat</td>
                        <td>:</td>
                        <td>WS 601</td>
                    </tr>
    
                    <tr>
                        <td>Nama Diklat</td>
                        <td>:</td>
                        <td>Teknik Restorasi Estetik</td>
                    </tr>
    
                    <tr>
                        <td>Akreditasi Pelatihan</td>
                        <td>:</td>
                        <td>A</td>
                    </tr>
    
                    <tr>
                        <td>Tempat Pelatihan</td>
                        <td>:</td>
                        <td>Rumah Sakit</td>
                    </tr>
    
                    <tr>
                        <td>Tanggal Pelaksanaan</td>
                        <td>:</td>
                        <td>19/10/1995</td>
                    </tr>
    
                    <tr>
                        <td>Lama Pelatihan</td>
                        <td>:</td>
                        <td>1 Hari</td>
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
<!-- AKhir Detai Pegawai 5 -->

@endsection
