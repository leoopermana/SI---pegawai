@extends('layout.main')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Data Regristasi dan Perizinan</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active">Regristasi dan  Perizinan</li>
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
                    data-toggle="modal" data-target="#tambahRegrisizin">Tambah +
                    </button>
                </div>

                <div class="modal fade" id="tambahRegrisizin">
                    <div class="modal-dialog modal-dialog-scrollable">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Form Tambah Data Regristasi dan Perizinan</h4>
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
                                                                No. STR
                                                            </label>
                                                            <input class="form-control"
                                                                type="text"
                                                                id="default-input"
                                                                placeholder="Masukan No. STR">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-xl-12">
                                                        <div class="mb-3">
                                                            <label class="form-label"
                                                                for="default-input">
                                                                Tanggal
                                                                Terbit STR
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
                                                            <label class="form-label"
                                                                for="default-input">
                                                                STR Berlaku Hingga
                                                            </label>
                                                            <input class="form-control"
                                                                type="text"
                                                                id="default-input"
                                                                placeholder="Maukan STR Berlaku">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-xl-12">
                                                        <div class="mb-3">
                                                            <label class="form-label"
                                                                for="default-input">
                                                                No. SIP
                                                            </label>
                                                            <input class="form-control"
                                                                type="text"
                                                                id="default-input"
                                                                placeholder="Masukan No. STR">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-xl-12">
                                                        <div class="mb-3">
                                                            <label class="form-label"
                                                                for="default-input">
                                                                Tanggal
                                                                Terbit SIP
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
                                                            <label class="form-label"
                                                                for="default-input">
                                                                SIP Berlaku Hingga
                                                            </label>
                                                            <input class="form-control"
                                                                type="text"
                                                                id="default-input"
                                                                placeholder="Maukan STR Berlaku">
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
                        <th>Jabatan</th>
                        <th>No. STR</th>
                        <th>No. SIP</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>35132240402610001</td>
                        <td>Budi Setiawan S. Kom</td>
                        <td>DIREKTUR UTAMA</td>
                        <td>-</td>
                        <td>-</td>
                        <td>
                            <a href="#" class="btn btn-secondary shadow btn-xs sharp mr-1"
                            data-toggle="modal" data-target="#detailRegrisizin1"><i
                            class="fas fa-eye"></i></a>
    
                            <!-- Modal Form Edit -->
                            <a href="#" class="btn btn-primary shadow btn-xs"
                            data-toggle="modal" data-target="#editRegrisizin1"><i
                            class="fas fa-pencil-alt"></i></a>

                            <div class="modal fade" id="editRegrisizin1">
                                <div class="modal-dialog modal-dialog-scrollable">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Form Tambah Data Regristasi dan Perizinan</h4>
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
                                                                            No. STR 
                                                                        </label>
                                                                        <input class="form-control"
                                                                            type="text"
                                                                            id="default-input"
                                                                            value="-">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-xl-12">
                                                                    <div class="mb-3">
                                                                        <label class="form-label"
                                                                            for="default-input">
                                                                            Tanggal
                                                                            Terbit STR
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
                                                                        <label class="form-label"
                                                                            for="default-input">
                                                                            STR Berlaku Hingga
                                                                        </label>
                                                                        <input class="form-control"
                                                                            type="text"
                                                                            id="default-input"
                                                                            value="-">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-xl-12">
                                                                    <div class="mb-3">
                                                                        <label class="form-label"
                                                                            for="default-input">
                                                                            No. SIP
                                                                        </label>
                                                                        <input class="form-control"
                                                                            type="text"
                                                                            id="default-input"
                                                                            value="-">
                                                                    </div>
                                                                </div>
                                                            </div>
            
                                                            <div class="row">
                                                                <div class="col-xl-12">
                                                                    <div class="mb-3">
                                                                        <label class="form-label"
                                                                            for="default-input">
                                                                            Tanggal
                                                                            Terbit SIP
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
                                                                        <label class="form-label"
                                                                            for="default-input">
                                                                            SIP Berlaku Hingga
                                                                        </label>
                                                                        <input class="form-control"
                                                                            type="text"
                                                                            id="default-input"
                                                                            value="-">
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
                                                                            placeholder="Karyawan">
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
                                class="fas fa-trash waves-effect waves-light sa-warning del"></i>
                            </a>
                        </td>
                    </tr>
    
                    <tr>
                        <td>2</td>
                        <td>32512440402620002</td>
                        <td>dr. Amanda Clarisa</td>
                        <td>PJ. PEL MUTU</td>
                        <td>3521100112304732</td>
                        <td>446/214/437.52/2019</td>
                        <td> 
                            <a href="#" class="btn btn-secondary shadow btn-xs sharp mr-1"
                            data-toggle="modal" data-target="#detailRegrisizin2"><i
                            class="fas fa-eye"></i></a>
    
                            <!-- Modal Form Edit -->
                            <a href="#" class="btn btn-primary shadow btn-xs"
                            data-toggle="modal" data-target="#editRegrisizin2"><i
                            class="fas fa-pencil-alt"></i></a>

                            <div class="modal fade" id="editRegrisizin2">
                                <div class="modal-dialog modal-dialog-scrollable">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Form Tambah Data Regristasi dan Perizinan</h4>
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
                                                                            No. STR
                                                                        </label>
                                                                        <input class="form-control"
                                                                            type="text"
                                                                            id="default-input"
                                                                            value="3521100112304732">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-xl-12">
                                                                    <div class="mb-3">
                                                                        <label class="form-label"
                                                                            for="default-input">
                                                                            Tanggal
                                                                            Terbit STR
                                                                        </label>
                                                                        <input class="form-control"
                                                                            type="date"
                                                                            value="2018-05-10"
                                                                            id="example-date-input">
                                                                    </div>
                                                                </div>
                                                            </div>
            
                                                            <div class="row">
                                                                <div class="col-xl-12">
                                                                    <div class="mb-3">
                                                                        <label class="form-label"
                                                                            for="default-input">
                                                                            STR Berlaku Hingga
                                                                        </label>
                                                                        <input class="form-control"
                                                                            type="text"
                                                                            id="default-input"
                                                                            value="10/05/2023">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-xl-12">
                                                                    <div class="mb-3">
                                                                        <label class="form-label"
                                                                            for="default-input">
                                                                            No. SIP
                                                                        </label>
                                                                        <input class="form-control"
                                                                            type="text"
                                                                            id="default-input"
                                                                            value="446/214/437.52/2019">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-xl-12">
                                                                    <div class="mb-3">
                                                                        <label class="form-label"
                                                                            for="default-input">
                                                                            Tanggal
                                                                            Terbit SIP
                                                                        </label>
                                                                        <input class="form-control"
                                                                            type="date"
                                                                            value="2018-05-10"
                                                                            id="example-date-input">
                                                                    </div>
                                                                </div>
                                                            </div>
            
                                                            <div class="row">
                                                                <div class="col-xl-12">
                                                                    <div class="mb-3">
                                                                        <label class="form-label"
                                                                            for="default-input">
                                                                            SIP Berlaku Hingga
                                                                        </label>
                                                                        <input class="form-control"
                                                                            type="text"
                                                                            id="default-input"
                                                                            value="10/05/2023">
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
                                                                                value="Karyawan">
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
                        <td>PJ. PEL MEDIS</td>
                        <td>3521100310113246</td>
                        <td>446/124/437.52/2018</td>
                        <td> 
                            <a href="#" class="btn btn-secondary shadow btn-xs sharp mr-1"
                            data-toggle="modal" data-target="#detailRegrisizin2"><i
                            class="fas fa-eye"></i></a>
    
                            <!-- Modal Form Edit -->
                            <a href="#" class="btn btn-primary shadow btn-xs"
                            data-toggle="modal" data-target="#editRegrisizin3"><i
                            class="fas fa-pencil-alt"></i></a>

                            <div class="modal fade" id="editRegrisizin3">
                                <div class="modal-dialog modal-dialog-scrollable">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Form Tambah Data Regristasi dan Perizinan</h4>
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
                                                                            No. STR
                                                                        </label>
                                                                        <input class="form-control"
                                                                            type="text"
                                                                            id="default-input"
                                                                            value="3521100310113246">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-xl-12">
                                                                    <div class="mb-3">
                                                                        <label class="form-label"
                                                                            for="default-input">
                                                                            Tanggal
                                                                            Terbit STR
                                                                        </label>
                                                                        <input class="form-control"
                                                                            type="date"
                                                                            placeholder="2017-04-20"
                                                                            id="example-date-input">
                                                                    </div>
                                                                </div>
                                                            </div>
            
                                                            <div class="row">
                                                                <div class="col-xl-12">
                                                                    <div class="mb-3">
                                                                        <label class="form-label"
                                                                            for="default-input">
                                                                            STR Berlaku Hingga
                                                                        </label>
                                                                        <input class="form-control"
                                                                            type="text"
                                                                            id="default-input"
                                                                            value="20/04/2022">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-xl-12">
                                                                    <div class="mb-3">
                                                                        <label class="form-label"
                                                                            for="default-input">
                                                                            No. SIP
                                                                        </label>
                                                                        <input class="form-control"
                                                                            type="text"
                                                                            id="default-input"
                                                                            value="446/124/437.52/2018">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-xl-12">
                                                                    <div class="mb-3">
                                                                        <label class="form-label"
                                                                            for="default-input">
                                                                            Tanggal
                                                                            Terbit SIP
                                                                        </label>
                                                                        <input class="form-control"
                                                                            type="date"
                                                                            placeholder="2017-04-20"
                                                                            id="example-date-input">
                                                                    </div>
                                                                </div>
                                                            </div>
            
                                                            <div class="row">
                                                                <div class="col-xl-12">
                                                                    <div class="mb-3">
                                                                        <label class="form-label"
                                                                            for="default-input">
                                                                            SIP Berlaku Hingga
                                                                        </label>
                                                                        <input class="form-control"
                                                                            type="text"
                                                                            id="default-input"
                                                                            value="20/04/2022">
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
                                                                            value="Karyawan">
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
                        <td>4</td>
                        <td>34142440402460004</td>
                        <td>dr. Kelly Cristiani</td>
                        <td>PJ. PENUNJANG MEDIS</td>
                        <td>3521100440314126</td>
                        <td>446/122/437.52/2019</td>
                        <td> 
                            <a href="#" class="btn btn-secondary shadow btn-xs sharp mr-1"
                            data-toggle="modal" data-target="#detailRegrisizin4"><i
                            class="fas fa-eye"></i></a>
                                
                            <!-- Modal Form Edit -->
                            <a href="#" class="btn btn-primary shadow btn-xs"
                            data-toggle="modal" data-target="#editRegrisizin4"><i
                            class="fas fa-pencil-alt"></i></a>
    
                            <div class="modal fade" id="editRegrisizin4">
                                <div class="modal-dialog modal-dialog-scrollable">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Form Tambah Data Regristasi dan Perizinan</h4>
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
                                                                            No. STR
                                                                        </label>
                                                                        <input class="form-control"
                                                                            type="text"
                                                                            id="default-input"
                                                                            value="3521100440314126">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-xl-12">
                                                                    <div class="mb-3">
                                                                        <label class="form-label"
                                                                            for="default-input">
                                                                            Tanggal
                                                                            Terbit STR
                                                                        </label>
                                                                        <input class="form-control"
                                                                            type="date"
                                                                            value="2018-06-18"
                                                                            id="example-date-input">
                                                                    </div>
                                                                </div>
                                                            </div>
            
                                                            <div class="row">
                                                                <div class="col-xl-12">
                                                                    <div class="mb-3">
                                                                        <label class="form-label"
                                                                            for="default-input">
                                                                            STR Berlaku Hingga
                                                                        </label>
                                                                        <input class="form-control"
                                                                            type="text"
                                                                            id="default-input"
                                                                            value="18/06/2023">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-xl-12">
                                                                    <div class="mb-3">
                                                                        <label class="form-label"
                                                                            for="default-input">
                                                                            No. SIP
                                                                        </label>
                                                                        <input class="form-control"
                                                                            type="text"
                                                                            id="default-input"
                                                                            value="446/122/437.52/2019">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-xl-12">
                                                                    <div class="mb-3">
                                                                        <label class="form-label"
                                                                            for="default-input">
                                                                            Tanggal
                                                                            Terbit SIP
                                                                        </label>
                                                                        <input class="form-control"
                                                                            type="date"
                                                                            value="2018-06-18"
                                                                            id="example-date-input">
                                                                    </div>
                                                                </div>
                                                            </div>
            
                                                            <div class="row">
                                                                <div class="col-xl-12">
                                                                    <div class="mb-3">
                                                                        <label class="form-label"
                                                                            for="default-input">
                                                                            SIP Berlaku Hingga
                                                                        </label>
                                                                        <input class="form-control"
                                                                            type="text"
                                                                            id="default-input"
                                                                            value="18/06/2023">
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
                                                                                value="Karyawan">
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
                                class="fas fa-trash waves-effect waves-light sa-warning del">
                            </i>
                            </a>
                            
                        </td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>35342440402610005</td>
                        <td>drg. Airi Putri Cendikia</td>
                        <td>PJ. MUTU</td>
                        <td>3521100512051750</td>
                        <td>446/520/437.52/2018</td>
                        <td> 
                            <a href="#" class="btn btn-secondary shadow btn-xs sharp mr-1"
                            data-toggle="modal" data-target="#detailRegrisizin5"><i
                            class="fas fa-eye"></i></a>
    
                            <!-- Modal Form Edit -->
                            <a href="#" class="btn btn-primary shadow btn-xs"
                            data-toggle="modal" data-target="#editRegrisizin5"><i
                            class="fas fa-pencil-alt"></i></a>
                            
                            <div class="modal fade" id="editRegrisizin5">
                                <div class="modal-dialog modal-dialog-scrollable">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Form Tambah Data Regristasi dan Perizinan</h4>
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
                                                                            No. STR
                                                                        </label>
                                                                        <input class="form-control"
                                                                            type="text"
                                                                            id="default-input"
                                                                            value="3521100512051750">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-xl-12">
                                                                    <div class="mb-3">
                                                                        <label class="form-label"
                                                                            for="default-input">
                                                                            Tanggal
                                                                            Terbit STR
                                                                        </label>
                                                                        <input class="form-control"
                                                                            type="date"
                                                                            placeholder="2017-07-30"
                                                                            id="example-date-input">
                                                                    </div>
                                                                </div>
                                                            </div>
            
                                                            <div class="row">
                                                                <div class="col-xl-12">
                                                                    <div class="mb-3">
                                                                        <label class="form-label"
                                                                            for="default-input">
                                                                            STR Berlaku Hingga
                                                                        </label>
                                                                        <input class="form-control"
                                                                            type="text"
                                                                            id="default-input"
                                                                            value="30/07/2022">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-xl-12">
                                                                    <div class="mb-3">
                                                                        <label class="form-label"
                                                                            for="default-input">
                                                                            No. SIP
                                                                        </label>
                                                                        <input class="form-control"
                                                                            type="text"
                                                                            id="default-input"
                                                                            value="446/520/437.52/2018">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-xl-12">
                                                                    <div class="mb-3">
                                                                        <label class="form-label"
                                                                            for="default-input">
                                                                            Tanggal
                                                                            Terbit SIP
                                                                        </label>
                                                                        <input class="form-control"
                                                                            type="date"
                                                                            placeholder="2017-07-30"
                                                                            id="example-date-input">
                                                                    </div>
                                                                </div>
                                                            </div>
            
                                                            <div class="row">
                                                                <div class="col-xl-12">
                                                                    <div class="mb-3">
                                                                        <label class="form-label"
                                                                            for="default-input">
                                                                            SIP Berlaku Hingga
                                                                        </label>
                                                                        <input class="form-control"
                                                                            type="text"
                                                                            id="default-input"
                                                                            value="30/07/2022">
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
                                                                            value="Karyawan">
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
                                class="fas fa-trash waves-effect waves-light sa-warning"></i>
                            </a>
                            
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


<!-- Detail pegawai 1 -->
<div class="modal fade" id="detailRegrisizin1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Lihat Data Regristasi dan Perizinan</h4>
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
                        <td>Jabatan</td>
                        <td>:</td>
                        <td>DIREKTUR UTAMA</td>
                    </tr>

                    <tr>
                        <td>No. STR</td>
                        <td>:</td>
                        <td>-</td>
                    </tr>

                    <tr>
                        <td>Tanggal Terbit STR</td>
                        <td>:</td>
                        <td>-</td>
                    </tr>

                    <tr>
                        <td>STR Berlaku hingga</td>
                        <td>:</td>
                        <td>-</td>
                    </tr>


                    <tr>
                        <td>No. SIP</td>
                        <td>:</td>
                        <td>-</td>
                    </tr>

                    <tr>
                        <td>Tanggal Terbit SIP</td>
                        <td>:</td>
                        <td>-</td>
                    </tr>

                    <tr>
                        <td>SIP Berlaku hingga</td>
                        <td>:</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>Status</td>
                        <td>:</td>
                        <td>Karyawan</td>
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

<!-- Detail pegawai 2 -->
<div class="modal fade" id="detailRegrisizin2">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Lihat Data Regristasi dan Perizinan</h4>
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
                        <td>Jabatan</td>
                        <td>:</td>
                        <td>PJ. PEL MUTU</td>
                    </tr>

                    <tr>
                        <td>No. STR</td>
                        <td>:</td>
                        <td>3521100112304732</td>
                    </tr>

                    <tr>
                        <td>Tanggal Terbit STR</td>
                        <td>:</td>
                        <td>10/05/2018</td>
                    </tr>

                    <tr>
                        <td>STR Berlaku hingga</td>
                        <td>:</td>
                        <td>10/05/2023</td>
                    </tr>

                    <tr>
                        <td>No. SIP</td>
                        <td>:</td>
                        <td>446/214/437.52/2019</td>
                    </tr>

                    <tr>
                        <td>Tanggal Terbit SIP</td>
                        <td>:</td>
                        <td>10/05/2018</td>
                    </tr>

                    <tr>
                        <td>SIP Berlaku hingga</td>
                        <td>:</td>
                        <td>10/05/2023</td>
                    </tr>
                    <tr>
                        <td>Status</td>
                        <td>:</td>
                        <td>Karyawan</td>
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
<!-- AKhir detail 2 -->

<!-- Detail pegawai 3 -->
<div class="modal fade" id="detailRegrisizin3">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Lihat Data Regristasi dan Perizinan</h4>
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
                        <td>Jabatan</td>
                        <td>:</td>
                        <td>PJ. PEL MEDIS</td>
                    </tr>

                    <tr>
                        <td>No. STR</td>
                        <td>:</td>
                        <td>3521100310113246</td>
                    </tr>

                    <tr>
                        <td>Tanggal Terbit STR</td>
                        <td>:</td>
                        <td>20/04/2017</td>
                    </tr>

                    <tr>
                        <td>STR Berlaku hingga</td>
                        <td>:</td>
                        <td>20/04/2022</td>
                    </tr>


                    <tr>
                        <td>No. SIP</td>
                        <td>:</td>
                        <td>446/124/437.52/2018</td>
                    </tr>

                    <tr>
                        <td>Tanggal Terbit SIP</td>
                        <td>:</td>
                        <td>20/04/2017</td>
                    </tr>

                    <tr>
                        <td>SIP Berlaku hingga</td>
                        <td>:</td>
                        <td>20/04/2022</td>
                    </tr>
                    <tr>
                        <td>Status</td>
                        <td>:</td>
                        <td>Karyawan</td>
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
<!-- AKhir detail 3 -->

<!-- Detail pegawai 4 -->
<div class="modal fade" id="detailRegrisizin4">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Lihat Data Regristasi dan Perizinan</h4>
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
                        <td>Jabatan</td>
                        <td>:</td>
                        <td>PJ. PENUNJANG MEDIS</td>
                    </tr>

                    <tr>
                        <td>No. STR</td>
                        <td>:</td>
                        <td>3521100440314126</td>
                    </tr>

                    <tr>
                        <td>Tanggal Terbit STR</td>
                        <td>:</td>
                        <td>18/06/2018</td>
                    </tr>

                    <tr>
                        <td>STR Berlaku hingga</td>
                        <td>:</td>
                        <td>18/06/2023</td>
                    </tr>


                    <tr>
                        <td>No. SIP</td>
                        <td>:</td>
                        <td>446/122/437.52/2019</td>
                    </tr>

                    <tr>
                        <td>Tanggal Terbit SIP</td>
                        <td>:</td>
                        <td>18/06/2018</td>
                    </tr>

                    <tr>
                        <td>SIP Berlaku hingga</td>
                        <td>:</td>
                        <td>18/06/2023</td>
                    </tr>
                    <tr>
                        <td>Status</td>
                        <td>:</td>
                        <td>Karyawan</td>
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
<!-- AKhir detail 4 -->

<!-- Detail pegawai 5 -->
<div class="modal fade" id="detailRegrisizin5">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Lihat Data Regristasi dan Perizinan</h4>
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
                        <td>Jabatan</td>
                        <td>:</td>
                        <td>PJ. MUTU</td>
                    </tr>

                    <tr>
                        <td>No. STR</td>
                        <td>:</td>
                        <td>3521100512051750</td>
                    </tr>

                    <tr>
                        <td>Tanggal Terbit STR</td>
                        <td>:</td>
                        <td>30/07/2017</td>
                    </tr>

                    <tr>
                        <td>STR Berlaku hingga</td>
                        <td>:</td>
                        <td>30/07/2022</td>
                    </tr>


                    <tr>
                        <td>No. SIP</td>
                        <td>:</td>
                        <td>446/520/437.52/2018</td>
                    </tr>

                    <tr>
                        <td>Tanggal Terbit SIP</td>
                        <td>:</td>
                        <td>30/07/2017</td>
                    </tr>

                    <tr>
                        <td>SIP Berlaku hingga</td>
                        <td>:</td>
                        <td>30/07/2022</td>
                    </tr>
                    <tr>
                        <td>Status</td>
                        <td>:</td>
                        <td>Karyawan</td>
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
<!-- AKhir detail 5 -->
@endsection

    