@extends('layout.main')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Data Pendidikan</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active">Data Pendidikan</li>
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
                    data-toggle="modal" data-target="#tambahPendidikan">Tambah +
                    </button>
                </div>

                <div class="modal fade" id="tambahPendidikan">
                    <div class="modal-dialog modal-dialog-scrollable">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Form Tambah Data Pendidikan</h4>
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
                                                                Program Studi
                                                            </label>
                                                            <input class="form-control"
                                                                type="text"
                                                                id="default-input"
                                                                placeholder="Masukan Program Studi">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-xl-12">
                                                        <div class="mb-3">
                                                            <label class="form-label"
                                                                for="default-input">
                                                                Sekolah/Perguruan Tinggi
                                                            </label>
                                                            <input class="form-control"
                                                                type="text"
                                                                id="default-input"
                                                                placeholder="Masukan Sekolah/Program Studi">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-xl-12">
                                                        <div class="mb-3">
                                                            <label class="form-label"
                                                                for="default-input">
                                                                Tahun Lulus
                                                            </label>
                                                            <input class="form-control"
                                                                type="text"
                                                                id="default-input"
                                                                placeholder="Masukan Tahun Lulus">
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
                        <th>Jabatan</th>
                        <th>Program Studi</th>
                        <th>Asal Sekolah / Perguruan Tinggi</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>35132240402610001</td>
                        <td>Budi Setiawan S. Kom</td>
                        <td>DIREKTUR UTAMA</td>
                        <td>Sarjana Komputer</td>
                        <td>Universitas Airlangga</td>
                        <td>
                            <a href="#" class="btn btn-secondary shadow btn-xs sharp mr-1"
                            data-toggle="modal" data-target="#detailPendidikan1"><i
                            class="fas fa-eye"></i></a>
    
                            <!-- Modal Form Edit -->
                            <a href="#" class="btn btn-primary shadow btn-xs"
                            data-toggle="modal" data-target="#editPendidikan1"><i
                            class="fas fa-pencil-alt"></i></a>

                            <div class="modal fade" id="editPendidikan1">
                                <div class="modal-dialog modal-dialog-scrollable">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Form Edit Data Pendidikan</h4>
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
                                                                            Program Studi
                                                                        </label>
                                                                        <input class="form-control"
                                                                            type="text"
                                                                            id="default-input"
                                                                            value="Teknik Informatika">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-xl-12">
                                                                    <div class="mb-3">
                                                                        <label class="form-label"
                                                                            for="default-input">
                                                                            Asal Sekolah/Perguruan Tinggi
                                                                        </label>
                                                                        <input class="form-control"
                                                                            type="text"
                                                                            id="default-input"
                                                                            value="Universitas Airlangga">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <label class="form-label"
                                                                for="default-input">
                                                                <b>Pendidikan</b>
                                                            </label>

                                                            <div class="row">
                                                                <div class="col-xl-12">
                                                                    <div class="mb-3">
                                                                        <label class="form-label"
                                                                            for="default-input">
                                                                            S1
                                                                        </label>
                                                                        <input class="form-control"
                                                                            type="text"
                                                                            id="default-input"
                                                                            value="Universitas Airlangga">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-xl-12">
                                                                    <div class="mb-3">
                                                                        <label class="form-label"
                                                                            for="default-input">
                                                                            S2
                                                                        </label>
                                                                        <input class="form-control"
                                                                            type="text"
                                                                            id="default-input"
                                                                            value="Institute Teknologi Surabaya">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </form> <!-- end form -->
                                                    </div>
                                                </div><!-- end col -->   
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
                        <td>2</td>
                        <td>32512440402620002</td>
                        <td>dr. Amanda Clarisa</td>
                        <td>PENANGGUNG JAWAB KLINIK</td>
                        <td>Dokter</td>
                        <td>Universitas Airlangga</td>
                        <td> 
                            <a href="#" class="btn btn-secondary shadow btn-xs sharp mr-1"
                            data-toggle="modal" data-target="#detailPendidikan2"><i
                            class="fas fa-eye"></i></a>
    
                            <!-- Modal Form Edit -->
                            <a href="#" class="btn btn-primary shadow btn-xs"
                            data-toggle="modal" data-target="#editPendidikan2"><i
                            class="fas fa-pencil-alt"></i></a>

                            <div class="modal fade" id="editPendidikan2">
                                <div class="modal-dialog modal-dialog-scrollable">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Form Edit Data Pendidikan</h4>
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
                                                                            Program Studi
                                                                        </label>
                                                                        <input class="form-control"
                                                                            type="text"
                                                                            id="default-input"
                                                                            value="Dokter">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-xl-12">
                                                                    <div class="mb-3">
                                                                        <label class="form-label"
                                                                            for="default-input">
                                                                            Asal Sekolah/Perguruan Tinggi
                                                                        </label>
                                                                        <input class="form-control"
                                                                            type="text"
                                                                            id="default-input"
                                                                            value="Universitas Airlangga">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <label class="form-label"
                                                                for="default-input">
                                                                <b>Pendidikan</b>
                                                            </label>

                                                            <div class="row">
                                                                <div class="col-xl-12">
                                                                    <div class="mb-3">
                                                                        <label class="form-label"
                                                                            for="default-input">
                                                                            S1
                                                                        </label>
                                                                        <input class="form-control"
                                                                            type="text"
                                                                            id="default-input"
                                                                            value="Universitas Airlangga">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-xl-12">
                                                                    <div class="mb-3">
                                                                        <label class="form-label"
                                                                            for="default-input">
                                                                            S2
                                                                        </label>
                                                                        <input class="form-control"
                                                                            type="text"
                                                                            id="default-input"
                                                                            value="-">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </form> <!-- end form -->
                                                    </div>
                                                </div><!-- end col -->   
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
                        <td>Dokter</td>
                        <td>Universitas Brawijaya</td>
                        <td>
                            <a href="#" class="btn btn-secondary shadow btn-xs sharp mr-1"
                            data-toggle="modal" data-target="#detailPendidikan3"><i
                            class="fas fa-eye"></i></a>
    
                            <!-- Modal Form Edit -->
                            <a href="#" class="btn btn-primary shadow btn-xs"
                            data-toggle="modal" data-target="#editPendidikan3"><i
                            class="fas fa-pencil-alt"></i></a>

                            <div class="modal fade" id="editPendidikan3">
                                <div class="modal-dialog modal-dialog-scrollable">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Form Edit Data Pendidikan</h4>
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
                                                                            Program Studi
                                                                        </label>
                                                                        <input class="form-control"
                                                                            type="text"
                                                                            id="default-input"
                                                                            value="Dokter">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-xl-12">
                                                                    <div class="mb-3">
                                                                        <label class="form-label"
                                                                            for="default-input">
                                                                            Asal Sekolah/Perguruan Tinggi
                                                                        </label>
                                                                        <input class="form-control"
                                                                            type="text"
                                                                            id="default-input"
                                                                            value="Universitas Brawijaya">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <label class="form-label"
                                                                for="default-input">
                                                                <b>Pendidikan</b>
                                                            </label>

                                                            <div class="row">
                                                                <div class="col-xl-12">
                                                                    <div class="mb-3">
                                                                        <label class="form-label"
                                                                            for="default-input">
                                                                            S1
                                                                        </label>
                                                                        <input class="form-control"
                                                                            type="text"
                                                                            id="default-input"
                                                                            value="Universitas Airlangga">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-xl-12">
                                                                    <div class="mb-3">
                                                                        <label class="form-label"
                                                                            for="default-input">
                                                                            S2
                                                                        </label>
                                                                        <input class="form-control"
                                                                            type="text"
                                                                            id="default-input"
                                                                            value="-">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </form> <!-- end form -->
                                                    </div>
                                                </div><!-- end col -->   
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
                        <td>Dokter</td>
                        <td>Universitas Gajah Mada</td>
                        <td> 
                            <a href="#" class="btn btn-secondary shadow btn-xs sharp mr-1"
                            data-toggle="modal" data-target="#detailPendidikan4"><i
                            class="fas fa-eye"></i></a>
    
                            <!-- Modal Form Edit -->
                            <a href="#" class="btn btn-primary shadow btn-xs"
                            data-toggle="modal" data-target="#editPendidikan4"><i
                            class="fas fa-pencil-alt"></i></a>

                            <div class="modal fade" id="editPendidikan4">
                                <div class="modal-dialog modal-dialog-scrollable">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Form Edit Data Pendidikan</h4>
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
                                                                            Program Studi
                                                                        </label>
                                                                        <input class="form-control"
                                                                            type="text"
                                                                            id="default-input"
                                                                            value="Dokter">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-xl-12">
                                                                    <div class="mb-3">
                                                                        <label class="form-label"
                                                                            for="default-input">
                                                                            Asal Sekolah/Perguruan Tinggi
                                                                        </label>
                                                                        <input class="form-control"
                                                                            type="text"
                                                                            id="default-input"
                                                                            value="Universitas Gajah Mada">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <label class="form-label"
                                                                for="default-input">
                                                                <b>Pendidikan</b>
                                                            </label>

                                                            <div class="row">
                                                                <div class="col-xl-12">
                                                                    <div class="mb-3">
                                                                        <label class="form-label"
                                                                            for="default-input">
                                                                            S1
                                                                        </label>
                                                                        <input class="form-control"
                                                                            type="text"
                                                                            id="default-input"
                                                                            value="Universitas Gajah Mada">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-xl-12">
                                                                    <div class="mb-3">
                                                                        <label class="form-label"
                                                                            for="default-input">
                                                                            S2
                                                                        </label>
                                                                        <input class="form-control"
                                                                            type="text"
                                                                            id="default-input"
                                                                            value="-">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </form> <!-- end form -->
                                                    </div>
                                                </div><!-- end col -->   
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
                        <td>5</td>
                        <td>35342440402610005</td>
                        <td>drg. Airi Putri Cendikia</td>
                        <td>PJ. MUTU</td>
                        <td>Dokter Gigi</td>
                        <td>Universitas Indonesia</td>
                        <td> 
                                <a href="#" class="btn btn-secondary shadow btn-xs sharp mr-1"
                                data-toggle="modal" data-target="#detailPendidikan5"><i
                                class="fas fa-eye"></i></a>
    
                                <!-- Modal Form Edit -->
                                <a href="#" class="btn btn-primary shadow btn-xs"
                                data-toggle="modal" data-target="#editPendidikan5"><i
                                class="fas fa-pencil-alt"></i></a>

                                <div class="modal fade" id="editPendidikan5">
                                    <div class="modal-dialog modal-dialog-scrollable">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Form Edit Data Pendidikan</h4>
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
                                                                                Program Studi
                                                                            </label>
                                                                            <input class="form-control"
                                                                                type="text"
                                                                                id="default-input"
                                                                                value="Dokter">
                                                                        </div>
                                                                    </div>
                                                                </div>
    
                                                                <div class="row">
                                                                    <div class="col-xl-12">
                                                                        <div class="mb-3">
                                                                            <label class="form-label"
                                                                                for="default-input">
                                                                                Asal Sekolah/Perguruan Tinggi
                                                                            </label>
                                                                            <input class="form-control"
                                                                                type="text"
                                                                                id="default-input"
                                                                                value="Universitas Indonesia">
                                                                        </div>
                                                                    </div>
                                                                </div>
    
                                                                <label class="form-label"
                                                                    for="default-input">
                                                                    <b>Pendidikan</b>
                                                                </label>
    
                                                                <div class="row">
                                                                    <div class="col-xl-12">
                                                                        <div class="mb-3">
                                                                            <label class="form-label"
                                                                                for="default-input">
                                                                                S1
                                                                            </label>
                                                                            <input class="form-control"
                                                                                type="text"
                                                                                id="default-input"
                                                                                value="Universitas Indonesia">
                                                                        </div>
                                                                    </div>
                                                                </div>
    
                                                                <div class="row">
                                                                    <div class="col-xl-12">
                                                                        <div class="mb-3">
                                                                            <label class="form-label"
                                                                                for="default-input">
                                                                                S2
                                                                            </label>
                                                                            <input class="form-control"
                                                                                type="text"
                                                                                id="default-input"
                                                                                value="-">
                                                                        </div>
                                                                    </div>
                                                                </div>
    
                                                            </form> <!-- end form -->
                                                        </div>
                                                    </div><!-- end col -->   
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
<div class="modal fade" id="detailPendidikan1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Lihat Data Pendidikan</h4>
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
                        <td>Program Studi</td>
                        <td>:</td>
                        <td>Teknik Informatika</td>
                    </tr>


                    <tr>
                        <td><b>Pendidikan</b></td>
                    </tr>

                    <tr>
                        <td>S1</td>
                        <td>:</td>
                        <td>Sarjana Komputer</td>
                    </tr>

                    <tr>
                        <td>Tahun Lulus</td>
                        <td>:</td>
                        <td>2015</td>
                    </tr>

                    <tr>
                        <td>Asal Sekolah/Perguruan Tinggi</td>
                        <td>:</td>
                        <td>Universitas Airlangga</td>
                    </tr>

                    <tr>
                        <td>S2</td>
                        <td>:</td>
                        <td>Magister Informasi Manajement</td>
                    </tr>

                    <tr>
                        <td>Tahun Lulus</td>
                        <td>:</td>
                        <td>2018</td>
                    </tr>

                    <tr>
                        <td>Asal Sekolah/Perguruan Tinggi</td>
                        <td>:</td>
                        <td>Institute Teknologi Surabaya</td>
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
<!-- Akhir detai 1 -->

<!-- Detai pegawai 2 -->
<div class="modal fade" id="detailPendidikan2">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Lihat Data Pendidikan</h4>
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
                        <td>PENANGGUNG JAWAB KLINIK</td>
                    </tr>

                    <tr>
                        <td>Program Studi</td>
                        <td>:</td>
                        <td>Dokter</td>
                    </tr>


                    <tr>
                        <td><b>Pendidikan</b></td>
                    </tr>

                    <tr>
                        <td>S1</td>
                        <td>:</td>
                        <td>
                            Dokter
                        </td>
                    </tr>

                    <tr>
                        <td>Tahun Lulus</td>
                        <td>:</td>
                        <td>2018</td>
                    </tr>

                    <tr>
                        <td>Asak Sekolah/Perguruan Tinggi</td>
                        <td>:</td>
                        <td> Universitas Airlangga</td>
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
<!-- Akhir detail 2 -->

<!-- Detai pegawai 3 -->
<div class="modal fade" id="detailPendidikan3">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Lihat Data Pendidikan</h4>
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
                        <td>Program Studi</td>
                        <td>:</td>
                        <td>Dokter</td>
                    </tr>


                    <tr>
                        <td><b>Pendidikan</b></td>
                    </tr>

                    <tr>
                        <td>S1</td>
                        <td>:</td>
                        <td>
                            Dokter
                        </td>
                    </tr>

                    <tr>
                        <td>Tahun Lulus</td>
                        <td>:</td>
                        <td>2017</td>
                    </tr>

                    <tr>
                        <td>Asal Sekolah/Perguruan Tinggi</td>
                        <td>:</td>
                        <td>Universitas Airlangga</td>
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
<!-- Akhir detail 3 -->

<!-- Detai pegawai 4 -->
<div class="modal fade" id="detailPendidikan4">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Lihat Data Pendidikan</h4>
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
                        <td>Program Studi</td>
                        <td>:</td>
                        <td>Dokter</td>
                    </tr>

                    <tr>
                        <td><b>Pendidikan</b></td>
                    </tr>

                    <tr>
                        <td>S1</td>
                        <td>:</td>
                        <td>Dokter</td>
                    </tr>

                    <tr>
                        <td>Tahun Lulus</td>
                        <td>:</td>
                        <td>2018</td>
                    </tr>

                    <tr>
                        <td>Asal Sekolah/Perguruan Tinggi</td>
                        <td>:</td>
                        <td>Universitas Gajah Mada</td>
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
<!-- Akhir detail 4 -->

<!-- Detai pegawai 5 -->
<div class="modal fade" id="detailPendidikan5">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Lihat Data Pendidikan</h4>
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
                        <td>Program Studi</td>
                        <td>:</td>
                        <td>Dokter Gigi</td>
                    </tr>
                    
                    <tr>
                        <td><b>Pendidikan</b></td>
                    </tr>

                    <tr>
                        <td>S1</td>
                        <td>:</td>
                        <td>Dokter Gigi</td>
                    </tr>

                    <tr>
                        <td>Tahun Lulus</td>
                        <td>:</td>
                        <td>2017</td>
                    </tr>

                    <tr>
                        <td>Asal Sekolah/ Perguruan Tinggi</td>
                        <td>:</td>
                        <td>Universitas Indonesia</td>
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
<!-- Akhir detail 5 -->
@endsection
