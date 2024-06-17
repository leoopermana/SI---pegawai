@extends('layout.main')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Data BPJS</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active">Data BPJS</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main Content -->
    <div class="card">
        <div class="card-header">
            <div class="col-sm-6 col-md-1 col-xl-3">
                <div class="my-3">
                    <!-- Small modal -->
                    <button type="button" class="btn btn-primary"
                    data-toggle="modal" data-target="#tambahBPJS">Tambah +
                    </button>
                </div>

                <div class="modal fade" id="tambahBPJS">
                    <div class="modal-dialog modal-dialog-scrollable">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Form Tambah BPJS</h4>
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
                                                                No. JKN Pekerja
                                                            </label>
                                                            <input class="form-control"
                                                                type="text"
                                                                id="default-input"
                                                                placeholder="Masukan No. JKN Pekerja">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-xl-12">
                                                        <div class="mb-3">
                                                            <label class="form-label"
                                                                for="default-input">
                                                                Peserta BPJS
                                                            </label>
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
                                                                placeholder="Masukan Nama Peserta">
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
                                                                No. JKN Peserta
                                                            </label>
                                                            <input class="form-control"
                                                                type="text"
                                                                id="default-input"
                                                                placeholder="Masukan No Peserta">
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
                        <th>No. JKN Pekerja</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>35132240402610001</td>
                        <td>Budi Setiawan S. Kom</td>
                        <td>DIREKTUR UTAMA</td>
                        <td>0001235671121</td>
                        <td>
                            <a href="#" class="btn btn-secondary shadow btn-xs sharp mr-1"
                            data-toggle="modal" data-target="#detailBPJS1"><i
                            class="fas fa-eye"></i></a>
    
                            <!-- Modal Form Edit -->
                            <a href="#" class="btn btn-primary shadow btn-xs"
                            data-toggle="modal" data-target="#editBPJS1"><i
                            class="fas fa-pencil-alt"></i></a>

                            <div class="modal fade" id="editBPJS1">
                                <div class="modal-dialog modal-dialog-scrollable">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Form Edit Data BPJS</h4>
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
                                                                            No. JKN Pekerja
                                                                        </label>
                                                                        <input class="form-control"
                                                                            type="text"
                                                                            id="default-input"
                                                                            value="0001235671121">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-xl-12">
                                                                    <div class="mb-3">
                                                                        <label class="form-label"
                                                                            for="default-input">
                                                                            Peserta BPJS
                                                                        </label>
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
                                                                            placeholder="Masukan Nama Peserta">
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
                                                                            No. JKN Peserta
                                                                        </label>
                                                                        <input class="form-control"
                                                                            type="text"
                                                                            id="default-input"
                                                                            placeholder="Masukan No Peserta">
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
                        <td>2</td>
                        <td>32512440402620002</td>
                        <td>dr. Amanda Clarisa</td>
                        <td>PJ. PEL MUTU</td>
                        <td>0001134251322</td>
                        <td> 
                            <a href="#" class="btn btn-secondary shadow btn-xs sharp mr-1"
                            data-toggle="modal" data-target="#detailBPJS2"><i
                            class="fas fa-eye"></i></a>
    
                            <!-- Modal Form Edit -->
                            <a href="#" class="btn btn-primary shadow btn-xs"
                            data-toggle="modal" data-target="#editBPJS2"><i
                            class="fas fa-pencil-alt"></i></a>

                            <div class="modal fade" id="editBPJS2">
                                <div class="modal-dialog modal-dialog-scrollable">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Form Edit Data BPJS</h4>
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
                                                                            No. JKN Pekerja
                                                                        </label>
                                                                        <input class="form-control"
                                                                            type="text"
                                                                            id="default-input"
                                                                            value="0001134251322">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-xl-12">
                                                                    <div class="mb-3">
                                                                        <label class="form-label"
                                                                            for="default-input">
                                                                            Peserta BPJS
                                                                        </label>
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
                                                                            placeholder="Masukan Nama Peserta">
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
                                                                            No. JKN Peserta
                                                                        </label>
                                                                        <input class="form-control"
                                                                            type="text"
                                                                            id="default-input"
                                                                            placeholder="Masukan No Peserta">
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
                        <td>0002125346123</td>
                        <td> 
                            <a href="#" class="btn btn-secondary shadow btn-xs sharp mr-1"
                            data-toggle="modal" data-target="#detailBPJS3"><i
                            class="fas fa-eye"></i></a>
    
                            <!-- Modal Form Edit -->
                            <a href="#" class="btn btn-primary shadow btn-xs"
                            data-toggle="modal" data-target="#editBPJS3"><i
                            class="fas fa-pencil-alt"></i></a>

                            <div class="modal fade" id="editBPJS3">
                                <div class="modal-dialog modal-dialog-scrollable">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Form Edit Data BPJS</h4>
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
                                                                            No. JKN Pekerja
                                                                        </label>
                                                                        <input class="form-control"
                                                                            type="text"
                                                                            id="default-input"
                                                                            value="0002125346123">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-xl-12">
                                                                    <div class="mb-3">
                                                                        <label class="form-label"
                                                                            for="default-input">
                                                                            Peserta BPJS
                                                                        </label>
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
                                                                            placeholder="Masukan Nama Peserta">
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
                                                                            No. JKN Peserta
                                                                        </label>
                                                                        <input class="form-control"
                                                                            type="text"
                                                                            id="default-input"
                                                                            placeholder="Masukan No Peserta">
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
                        <td>0004161253321</td>
                        <td> 
                            <a href="#" class="btn btn-secondary shadow btn-xs sharp mr-1"
                            data-toggle="modal" data-target="#detailBPJS4"><i
                            class="fas fa-eye"></i></a>
                                
                            <!-- Modal Form Edit -->
                            <a href="#" class="btn btn-primary shadow btn-xs"
                            data-toggle="modal" data-target="#editBPJS4"><i
                            class="fas fa-pencil-alt"></i></a>
    
                            <div class="modal fade" id="editBPJS4">
                                <div class="modal-dialog modal-dialog-scrollable">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Form Edit Data BPJS</h4>
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
                                                                            No. JKN Pekerja
                                                                        </label>
                                                                        <input class="form-control"
                                                                            type="text"
                                                                            id="default-input"
                                                                            value="0004161253321">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-xl-12">
                                                                    <div class="mb-3">
                                                                        <label class="form-label"
                                                                            for="default-input">
                                                                            Peserta BPJS
                                                                        </label>
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
                                                                            placeholder="Masukan Nama Peserta">
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
                                                                            No. JKN Peserta
                                                                        </label>
                                                                        <input class="form-control"
                                                                            type="text"
                                                                            id="default-input"
                                                                            placeholder="Masukan No Peserta">
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
                        <td>5</td>
                        <td>35342440402610005</td>
                        <td>drg. Airi Putri  Cendikia</td>
                        <td>PJ. MUTU</td>
                        <td>0005331231524</td>
                        <td> 
                            <a href="#" class="btn btn-secondary shadow btn-xs sharp mr-1"
                            data-toggle="modal" data-target="#detailBPJS3"><i
                            class="fas fa-eye"></i></a>
    
                            <!-- Modal Form Edit -->
                            <a href="#" class="btn btn-primary shadow btn-xs"
                            data-toggle="modal" data-target="#editBPJS5"><i
                            class="fas fa-pencil-alt"></i></a>
                            
                            <div class="modal fade" id="editBPJS5">
                                <div class="modal-dialog modal-dialog-scrollable">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Form Edit Data BPJS</h4>
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
                                                                            No. JKN Pekerja
                                                                        </label>
                                                                        <input class="form-control"
                                                                            type="text"
                                                                            id="default-input"
                                                                            value="0005331231525">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-xl-12">
                                                                    <div class="mb-3">
                                                                        <label class="form-label"
                                                                            for="default-input">
                                                                            Peserta BPJS
                                                                        </label>
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
                                                                            placeholder="Masukan Nama Peserta">
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
                                                                            No. JKN Peserta
                                                                        </label>
                                                                        <input class="form-control"
                                                                            type="text"
                                                                            id="default-input"
                                                                            placeholder="Masukan No Peserta">
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

<!-- Detail pegawai 1 -->
<div class="modal fade" id="detailBPJS1">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Lihat Data BPJS</h4>
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
                        <td>No. JKN Pekerja</td>
                        <td>:</td>
                        <td>0001235671123</td>
                    </tr>

                    <tr>
                        <td>Status</td>
                        <td>:</td>
                        <td>Karyawan</td>
                    </tr>
                    
                </table>
                <div class="table-resposive">
                    <table id="datatable" class="table table-bordered dt-responsive nowrap table-nowrap align-middle"
                    style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Status</th>
                            <th>No. JKN Peserta</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Rahma Putri</td>
                            <td>Istri</td>
                            <td>0001125651123</td>
                        </tr>

                        <tr>
                            <td>2</td>
                            <td>Andi </td>
                            <td>Anak</td>
                            <td>0001223681124</td>
                        </tr>

                    </tbody>

                    </table>
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
<!-- AKhir detail 1 -->

<!-- Detail pegawai 2 -->
<div class="modal fade" id="detailBPJS2">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Lihat Data BPJS</h4>
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
                        <td>No. JKN Pekerja</td>
                        <td>:</td>
                        <td>0001134251324</td>
                    </tr>

                    <tr>
                        <td>Status</td>
                        <td>:</td>
                        <td>Karyawan</td>
                    </tr>

                </table>

                <div class="table-resposive">
                    <table id="datatable" class="table table-bordered dt-responsive nowrap table-editable table-nowrap align-middle"
                    style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Status</th>
                            <th>No. JKN Peserta</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Yulia Rahmawati</td>
                            <td>Istri</td>
                            <td>0001125651123</td>
                        </tr>

                        <tr>
                            <td>2</td>
                            <td>Bagus Dwi Putra</td>
                            <td>Anak</td>
                            <td>0001223681124</td>
                        </tr>

                    </tbody>

                    </table>
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
<!-- AKhir detail 2 -->

<!-- Detail pegawai 3 -->
<div class="modal fade" id="detailBPJS3">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Lihat Data BPJS</h4>
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
                        <td>No. JKN Pekerja</td>
                        <td>:</td>
                        <td>0002125346124</td>
                    </tr>

                    <tr>
                        <td>Status</td>
                        <td>:</td>
                        <td>Karyawan</td>
                    </tr>

                </table>

                <div class="table-resposive">
                    <table id="datatable" class="table table-bordered dt-responsive nowrap table-editable table-nowrap align-middle"
                    style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Status</th>
                            <th>No. JKN Peserta</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Yulia Rahmawati</td>
                            <td>Istri</td>
                            <td>0001125651123</td>
                        </tr>

                        <tr>
                            <td>2</td>
                            <td>Bagus Dwi Putra</td>
                            <td>Anak</td>
                            <td>0001223681124</td>
                        </tr>

                    </tbody>

                    </table>
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
<!-- AKhir detail 3 -->

<!-- Detail pegawai 4 -->
<div class="modal fade" id="detailBPJS4">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Lihat Data BPJS</h4>
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
                        <td>No. JKN Pekerja</td>
                        <td>:</td>
                        <td>0004161253321</td>
                    </tr>

                    <tr>
                        <td>Status</td>
                        <td>:</td>
                        <td>Karyawan</td>
                    </tr>

                </table>
                <div class="table-resposive">
                    <table id="datatable" class="table table-bordered dt-responsive nowrap table-editable table-nowrap align-middle"
                    style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Status</th>
                            <th>No. JKN Peserta</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Yulia Rahmawati</td>
                            <td>Istri</td>
                            <td>0001125651123</td>
                        </tr>

                        <tr>
                            <td>2</td>
                            <td>Bagus Dwi Putra</td>
                            <td>Anak</td>
                            <td>0001223681124</td>
                        </tr>

                    </tbody>

                    </table>
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
<!-- AKhir detail 4 -->

<!-- Detail pegawai 5 -->
<div class="modal fade" id="detailBPJS5">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Lihat Data BPJS</h4>
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
                        <td>No. JKN Pekerja</td>
                        <td>:</td>
                        <td>0005331231524</td>
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
                <button type="button" class="btn btn-primary">Simpan</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- AKhir detail 5 -->

@endsection

    