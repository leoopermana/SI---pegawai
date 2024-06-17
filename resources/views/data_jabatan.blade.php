@extends('layout.main')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Data Jabatan</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active">Data Jabatan</li>
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
                        data-toggle="modal" data-target="#tambahJabatan">Tambah +
                    </button>
                </div>

                <div class="modal fade" id="tambahJabatan">
                    <div class="modal-dialog modal-dialog-scrollable">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Form Tambah Jabatan</h4>
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
                                                                Kode
                                                            </label>
                                                            <input class="form-control"
                                                                type="text"
                                                                id="default-input"
                                                                placeholder="Masukan Kode">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-xl-12">
                                                        <div class="mb-3">
                                                            <label class="form-label"
                                                                for="default-input">
                                                                Jabatan
                                                            </label>
                                                            <input class="form-control"
                                                                type="text"
                                                                id="default-input"
                                                                placeholder="Masukan Jabatan">
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
                        <th width="20px">Kode</th>
                        <th>Jabatan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>1201</td>
                        <td>DIREKTUR UTAMA</td>
                        <td>
                            <!-- Modal Form Edit -->
                            <a href="#" class="btn btn-primary shadow btn-xs"
                            data-toggle="modal" data-target="#editJabatan1"><i
                            class="fas fa-pencil-alt"></i></a>

                            <div class="modal fade" id="editJabatan1">
                                <div class="modal-dialog modal-dialog-scrollable">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Form Edit Data Jabatan</h4>
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
                                                                            Kode
                                                                        </label>
                                                                        <input class="form-control"
                                                                            type="text"
                                                                            id="default-input"
                                                                            value="1201">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-xl-12">
                                                                    <div class="mb-3">
                                                                        <label class="form-label"
                                                                            for="default-input">
                                                                            Jabatan
                                                                        </label>
                                                                        <input class="form-control"
                                                                            type="text"
                                                                            id="default-input"
                                                                            value="DIREKTIR UTAMA">
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
                        </td>
                    </tr>
        
                    <tr>
                        <td>2</td>
                        <td>1202</td>
                        <td>PENANGGUNG JAWAB KLINIK</td>
                        <td>
                            <a href="#" class="btn btn-primary shadow btn-xs"
                            data-toggle="modal" data-target="#editJabatan2"><i
                            class="fas fa-pencil-alt"></i></a>

                            <div class="modal fade" id="editJabatan2">
                                <div class="modal-dialog modal-dialog-scrollable">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Form Edit Data Jabatan</h4>
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
                                                                            Kode
                                                                        </label>
                                                                        <input class="form-control"
                                                                            type="text"
                                                                            id="default-input"
                                                                            value="1202">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-xl-12">
                                                                    <div class="mb-3">
                                                                        <label class="form-label"
                                                                            for="default-input">
                                                                            Jabatan
                                                                        </label>
                                                                        <input class="form-control"
                                                                            type="text"
                                                                            id="default-input"
                                                                            value="PENANGGUNG JAWAB KLINIK">
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
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>1203</td>
                        <td>PJ. PELAYANAN MEDIS</td>
                        <td>
                            <a href="#" class="btn btn-primary shadow btn-xs"
                            data-toggle="modal" data-target="#editJabatan3"><i
                            class="fas fa-pencil-alt"></i></a>

                            <div class="modal fade" id="editJabatan3">
                                <div class="modal-dialog modal-dialog-scrollable">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Form Edit Data Jabatan</h4>
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
                                                                            Kode
                                                                        </label>
                                                                        <input class="form-control"
                                                                            type="text"
                                                                            id="default-input"
                                                                            value="1203">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-xl-12">
                                                                    <div class="mb-3">
                                                                        <label class="form-label"
                                                                            for="default-input">
                                                                            Jabatan
                                                                        </label>
                                                                        <input class="form-control"
                                                                            type="text"
                                                                            id="default-input"
                                                                            value="PJ. PELAYANAN MEDIS">
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
                            class="fas fa-trash sa-warning sa-warning del"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>1204</td>
                        <td>KOOR. PEL DOKTER UMUM</td>
                        <td>
                            <a href="#" class="btn btn-primary shadow btn-xs"
                            data-toggle="modal" data-target="#editJabatan4"><i
                            class="fas fa-pencil-alt"></i></a>

                            <div class="modal fade" id="editJabatan4">
                                <div class="modal-dialog modal-dialog-scrollable">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Form Edit Data Jabatan</h4>
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
                                                                            Kode
                                                                        </label>
                                                                        <input class="form-control"
                                                                            type="text"
                                                                            id="default-input"
                                                                            value="1204">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-xl-12">
                                                                    <div class="mb-3">
                                                                        <label class="form-label"
                                                                            for="default-input">
                                                                            Jabatan
                                                                        </label>
                                                                        <input class="form-control"
                                                                            type="text"
                                                                            id="default-input"
                                                                            value="KOOR. PEL DOKTER UMUM">
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
                        </td>
                    </tr>
        
                    <tr>
                        <td>5</td>
                        <td>1205</td>
                        <td>KOOR PEL DOKTER GIGI</td>
                        <td>
                            <a href="#" class="btn btn-primary shadow btn-xs"
                            data-toggle="modal" data-target="#editJabatan5"><i
                            class="fas fa-pencil-alt"></i></a>

                            <div class="modal fade" id="editJabatan5">
                                <div class="modal-dialog modal-dialog-scrollable">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Form Edit Data Jabatan</h4>
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
                                                                            Kode
                                                                        </label>
                                                                        <input class="form-control"
                                                                            type="text"
                                                                            id="default-input"
                                                                            value="1205">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-xl-12">
                                                                    <div class="mb-3">
                                                                        <label class="form-label"
                                                                            for="default-input">
                                                                            Jabatan
                                                                        </label>
                                                                        <input class="form-control"
                                                                            type="text"
                                                                            id="default-input"
                                                                            value="KOOR PEL DOKTER GIGI">
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
                        </td>
                    </tr>
        
                    <tr>
                        <td>6</td>
                        <td>1206</td>
                        <td>KOOR PENDAFTARAN & REKAM MEDIS</td>
                        <td>
                            <a href="#" class="btn btn-primary shadow btn-xs"
                            data-toggle="modal" data-target="#editJabatan6"><i
                            class="fas fa-pencil-alt"></i></a>

                            <div class="modal fade" id="editJabatan6">
                                <div class="modal-dialog modal-dialog-scrollable">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Form Edit Data Jabatan</h4>
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
                                                                            Kode
                                                                        </label>
                                                                        <input class="form-control"
                                                                            type="text"
                                                                            id="default-input"
                                                                            value="1206">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-xl-12">
                                                                    <div class="mb-3">
                                                                        <label class="form-label"
                                                                            for="default-input">
                                                                            Jabatan
                                                                        </label>
                                                                        <input class="form-control"
                                                                            type="text"
                                                                            id="default-input"
                                                                            value="KOOR PENDAFTARAN & REKAM MEDIS">
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
                        </td>
                    </tr>
        
                    <tr>
                        <td>7</td>
                        <td>1207</td>
                        <td>KOOR KIA & KB</td>
                        <td>
                            <a href="#" class="btn btn-primary shadow btn-xs"
                            data-toggle="modal" data-target="#editJabatan7"><i
                            class="fas fa-pencil-alt"></i></a>

                            <div class="modal fade" id="editJabatan7">
                                <div class="modal-dialog modal-dialog-scrollable">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Form Edit Data Jabatan</h4>
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
                                                                            Kode
                                                                        </label>
                                                                        <input class="form-control"
                                                                            type="text"
                                                                            id="default-input"
                                                                            value="1207">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-xl-12">
                                                                    <div class="mb-3">
                                                                        <label class="form-label"
                                                                            for="default-input">
                                                                            Jabatan
                                                                        </label>
                                                                        <input class="form-control"
                                                                            type="text"
                                                                            id="default-input"
                                                                            value="KOOR KIA & KB">
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
                        </td>
                    </tr>
        
                    <tr>
                        <td>8</td>
                        <td>1208</td>
                        <td>PJ. PENUNJANG MEDIS</td>
                        <td>
                            <a href="#" class="btn btn-primary shadow btn-xs"
                            data-toggle="modal" data-target="#editJabatan8"><i
                            class="fas fa-pencil-alt"></i></a>

                            <div class="modal fade" id="editJabatan8">
                                <div class="modal-dialog modal-dialog-scrollable">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Form Edit Data Jabatan</h4>
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
                                                                            Kode
                                                                        </label>
                                                                        <input class="form-control"
                                                                            type="text"
                                                                            id="default-input"
                                                                            value="1208">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-xl-12">
                                                                    <div class="mb-3">
                                                                        <label class="form-label"
                                                                            for="default-input">
                                                                            Jabatan
                                                                        </label>
                                                                        <input class="form-control"
                                                                            type="text"
                                                                            id="default-input"
                                                                            value="PJ. PENUNJANG MEDIS">
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
                        </td>
                    </tr>
        
                    <tr>
                        <td>9</td>
                        <td>1209</td>
                        <td>KOOR PEL KEFARMASIAN</td>
                        <td>
                            <a href="#" class="btn btn-primary shadow btn-xs"
                            data-toggle="modal" data-target="#editJabatan9"><i
                            class="fas fa-pencil-alt"></i></a>

                            <div class="modal fade" id="editJabatan9">
                                <div class="modal-dialog modal-dialog-scrollable">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Form Edit Data Jabatan</h4>
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
                                                                            Kode
                                                                        </label>
                                                                        <input class="form-control"
                                                                            type="text"
                                                                            id="default-input"
                                                                            value="1209">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-xl-12">
                                                                    <div class="mb-3">
                                                                        <label class="form-label"
                                                                            for="default-input">
                                                                            Jabatan
                                                                        </label>
                                                                        <input class="form-control"
                                                                            type="text"
                                                                            id="default-input"
                                                                            value="KOOR PEL KEFARMASIAN">
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
                        </td>
                    </tr>
        
                    <tr>
                        <td>10</td>
                        <td>1210</td>
                        <td>KOOR PEL LABORATORIUM</td>
                        <td>
                            <a href="#" class="btn btn-primary shadow btn-xs"
                            data-toggle="modal" data-target="#editJabatan10"><i
                            class="fas fa-pencil-alt"></i></a>

                            <div class="modal fade" id="editJabatan10">
                                <div class="modal-dialog modal-dialog-scrollable">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Form Edit Data Jabatan</h4>
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
                                                                            Kode
                                                                        </label>
                                                                        <input class="form-control"
                                                                            type="text"
                                                                            id="default-input"
                                                                            value="1210">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-xl-12">
                                                                    <div class="mb-3">
                                                                        <label class="form-label"
                                                                            for="default-input">
                                                                            Jabatan
                                                                        </label>
                                                                        <input class="form-control"
                                                                            type="text"
                                                                            id="default-input"
                                                                            value="KOOR PEL LABORATORIUM">
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
                        </td>
                    </tr>
        
                    <tr>
                        <td>11</td>
                        <td>1211</td>
                        <td>PJ. MUTU</td>
                        <td>
                            <a href="#" class="btn btn-primary shadow btn-xs"
                            data-toggle="modal" data-target="#editJabatan11"><i
                            class="fas fa-pencil-alt"></i></a>

                            <div class="modal fade" id="editJabatan11">
                                <div class="modal-dialog modal-dialog-scrollable">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Form Edit Data Jabatan</h4>
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
                                                                            Kode
                                                                        </label>
                                                                        <input class="form-control"
                                                                            type="text"
                                                                            id="default-input"
                                                                            value="1211">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-xl-12">
                                                                    <div class="mb-3">
                                                                        <label class="form-label"
                                                                            for="default-input">
                                                                            Jabatan
                                                                        </label>
                                                                        <input class="form-control"
                                                                            type="text"
                                                                            id="default-input"
                                                                            value="PJ. MUTU">
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
                        </td>
                    </tr>
        
                    <tr>
                        <td>12</td>
                        <td>1212</td>
                        <td>KOOR PPI</td>
                        <td>
                            <a href="#" class="btn btn-primary shadow btn-xs"
                            data-toggle="modal" data-target="#editJabatan12"><i
                            class="fas fa-pencil-alt"></i></a>

                            <div class="modal fade" id="editJabatan12">
                                <div class="modal-dialog modal-dialog-scrollable">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Form Edit Data Jabatan</h4>
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
                                                                            Kode
                                                                        </label>
                                                                        <input class="form-control"
                                                                            type="text"
                                                                            id="default-input"
                                                                            value="1212">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-xl-12">
                                                                    <div class="mb-3">
                                                                        <label class="form-label"
                                                                            for="default-input">
                                                                            Jabatan
                                                                        </label>
                                                                        <input class="form-control"
                                                                            type="text"
                                                                            id="default-input"
                                                                            value="KOOR PPI">
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
                        </td>
                    </tr>
        
                    <tr>
                        <td>13</td>
                        <td>1213</td>
                        <td>KOOR K3 & MANAJEMEN RESIKO</td>
                        <td>
                            <a href="#" class="btn btn-primary shadow btn-xs"
                            data-toggle="modal" data-target="#editJabatan13"><i
                            class="fas fa-pencil-alt"></i></a>

                            <div class="modal fade" id="editJabatan13">
                                <div class="modal-dialog modal-dialog-scrollable">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Form Edit Data Jabatan</h4>
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
                                                                            Kode
                                                                        </label>
                                                                        <input class="form-control"
                                                                            type="text"
                                                                            id="default-input"
                                                                            value="1213">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-xl-12">
                                                                    <div class="mb-3">
                                                                        <label class="form-label"
                                                                            for="default-input">
                                                                            Jabatan
                                                                        </label>
                                                                        <input class="form-control"
                                                                            type="text"
                                                                            id="default-input"
                                                                            value="KOOR K3 & MANAJEMEN RESIKO">
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
                        </td>
                    </tr>
        
                    <tr>
                        <td>14</td>
                        <td>1214</td>
                        <td>KOOR KELUHAN PELANGGAN</td>
                        <td>
                            <a href="#" class="btn btn-primary shadow btn-xs"
                            data-toggle="modal" data-target="#editJabatan14"><i
                            class="fas fa-pencil-alt"></i></a>

                            <div class="modal fade" id="editJabatan14">
                                <div class="modal-dialog modal-dialog-scrollable">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Form Edit Data Jabatan</h4>
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
                                                                            Kode
                                                                        </label>
                                                                        <input class="form-control"
                                                                            type="text"
                                                                            id="default-input"
                                                                            value="1214">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-xl-12">
                                                                    <div class="mb-3">
                                                                        <label class="form-label"
                                                                            for="default-input">
                                                                            Jabatan
                                                                        </label>
                                                                        <input class="form-control"
                                                                            type="text"
                                                                            id="default-input"
                                                                            value="KOOR KELUHAN PELANGGAN">
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
                        </td>
                    </tr>
        
                    <tr>
                        <td>15</td>
                        <td>1215</td>
                        <td>KOOR KESELAMATAN PASIEN</td>
                        <td>
                            <a href="#" class="btn btn-primary shadow btn-xs"
                            data-toggle="modal" data-target="#editJabatan15"><i
                            class="fas fa-pencil-alt"></i></a>

                            <div class="modal fade" id="editJabatan15">
                                <div class="modal-dialog modal-dialog-scrollable">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Form Edit Data Jabatan</h4>
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
                                                                            Kode
                                                                        </label>
                                                                        <input class="form-control"
                                                                            type="text"
                                                                            id="default-input"
                                                                            value="1215">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-xl-12">
                                                                    <div class="mb-3">
                                                                        <label class="form-label"
                                                                            for="default-input">
                                                                            Jabatan
                                                                        </label>
                                                                        <input class="form-control"
                                                                            type="text"
                                                                            id="default-input"
                                                                            value="KOOR KESELAMATAN PASIEN">
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
                        </td>
                    </tr>
        
                    <tr>
                        <td>16</td>
                        <td>1216</td>
                        <td>PJ. ADMINISTRASI & MANAJEMEN</td>
                        <td>
                            <a href="#" class="btn btn-primary shadow btn-xs"
                            data-toggle="modal" data-target="#editJabatan16"><i
                            class="fas fa-pencil-alt"></i></a>

                            <div class="modal fade" id="editJabatan16">
                                <div class="modal-dialog modal-dialog-scrollable">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Form Edit Data Jabatan</h4>
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
                                                                            Kode
                                                                        </label>
                                                                        <input class="form-control"
                                                                            type="text"
                                                                            id="default-input"
                                                                            value="1216">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-xl-12">
                                                                    <div class="mb-3">
                                                                        <label class="form-label"
                                                                            for="default-input">
                                                                            Jabatan
                                                                        </label>
                                                                        <input class="form-control"
                                                                            type="text"
                                                                            id="default-input"
                                                                            value="PJ. ADMINISTRASI & MANAJEMEN">
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
                        </td>
                    </tr>
        
                    <tr>
                        <td>17</td>
                        <td>1217</td>
                        <td>KOOR SARANA & PRASARANA</td>
                        <td>
                            <a href="#" class="btn btn-primary shadow btn-xs"
                            data-toggle="modal" data-target="#editJabatan17"><i
                            class="fas fa-pencil-alt"></i></a>

                            <div class="modal fade" id="editJabatan17">
                                <div class="modal-dialog modal-dialog-scrollable">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Form Edit Data Jabatan</h4>
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
                                                                            Kode
                                                                        </label>
                                                                        <input class="form-control"
                                                                            type="text"
                                                                            id="default-input"
                                                                            value="1217">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-xl-12">
                                                                    <div class="mb-3">
                                                                        <label class="form-label"
                                                                            for="default-input">
                                                                            Jabatan
                                                                        </label>
                                                                        <input class="form-control"
                                                                            type="text"
                                                                            id="default-input"
                                                                            value="KOOR SARANA & PRASARANA">
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
                        </td>
                    </tr>
        
                    <tr>
                        <td>18</td>
                        <td>1218</td>
                        <td>KOOR KEPEGAWAIAN</td>
                        <td>
                            <a href="#" class="btn btn-primary shadow btn-xs"
                            data-toggle="modal" data-target="#editJabatan18"><i
                            class="fas fa-pencil-alt"></i></a>

                            <div class="modal fade" id="editJabatan18">
                                <div class="modal-dialog modal-dialog-scrollable">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Form Edit Data Jabatan</h4>
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
                                                                            Kode
                                                                        </label>
                                                                        <input class="form-control"
                                                                            type="text"
                                                                            id="default-input"
                                                                            value="1218">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-xl-12">
                                                                    <div class="mb-3">
                                                                        <label class="form-label"
                                                                            for="default-input">
                                                                            Jabatan
                                                                        </label>
                                                                        <input class="form-control"
                                                                            type="text"
                                                                            id="default-input"
                                                                            value="KOOR KEPEGAWAIAN">
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
                        </td>
                    </tr>
        
                    <tr>
                        <td>19</td>
                        <td>1219</td>
                        <td>KOOR SISTEM INFORMASI</td>
                        <td>
                            <a href="#" class="btn btn-primary shadow btn-xs"
                            data-toggle="modal" data-target="#editJabatan19"><i
                            class="fas fa-pencil-alt"></i></a>

                            <div class="modal fade" id="editJabatan19">
                                <div class="modal-dialog modal-dialog-scrollable">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Form Edit Data Jabatan</h4>
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
                                                                            Kode
                                                                        </label>
                                                                        <input class="form-control"
                                                                            type="text"
                                                                            id="default-input"
                                                                            value="1219">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-xl-12">
                                                                    <div class="mb-3">
                                                                        <label class="form-label"
                                                                            for="default-input">
                                                                            Jabatan
                                                                        </label>
                                                                        <input class="form-control"
                                                                            type="text"
                                                                            id="default-input"
                                                                            value="KOOR SISTEM INFORMASI">
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
                        </td>
                    </tr>
        
                    <tr>
                        <td>20</td>
                        <td>1220</td>
                        <td>KOOR KEUANGAN</td>
                        <td>
                            <a href="#" class="btn btn-primary shadow btn-xs"
                            data-toggle="modal" data-target="#editJabatan19"><i
                            class="fas fa-pencil-alt"></i></a>

                            <div class="modal fade" id="editJabatan19">
                                <div class="modal-dialog modal-dialog-scrollable">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Form Edit Data Jabatan</h4>
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
                                                                            Kode
                                                                        </label>
                                                                        <input class="form-control"
                                                                            type="text"
                                                                            id="default-input"
                                                                            value="1220">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-xl-12">
                                                                    <div class="mb-3">
                                                                        <label class="form-label"
                                                                            for="default-input">
                                                                            Jabatan
                                                                        </label>
                                                                        <input class="form-control"
                                                                            type="text"
                                                                            id="default-input"
                                                                            value="KOOR KEUANGAN">
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
@endsection


