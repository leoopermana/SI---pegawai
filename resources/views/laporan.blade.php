@extends('layout.main')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Laporan</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Laporan</li>
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
                    <div class="btn-group">
                        <button type="button" class="btn btn-secondary">Tahun</button>
                        <button type="button" class="btn btn-secondary dropdown-toggle dropdown-icon" data-toggle="dropdown">
                            <span class="sr-only">Toggle Dropdown</span>
                        </button>
                        <div class="dropdown-menu" role="menu">
                            <a class="dropdown-item" href="#">2020</a>
                            <a class="dropdown-item" href="#">2021</a>
                            <a class="dropdown-item" href="#">2022</a>
                            <a class="dropdown-item" href="#">2023</a>
                        </div>
                    </div>

                    <a href="/excel" class="btn btn-secondary">Export</a>
                </div>
            </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th width="20px">No.</th>
                        <th>Nama</th>
                        <th>Jabatan</th>
                        <th>Presentase Kehadiran</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Budi Setiawan S. Kom</td>
                        <td>Direktur Utama</td>
                        <td>100%</td>
                        <td>
                            <a href="#" class="btn btn-secondary shadow btn-xs sharp mr-1"
                            data-toggle="modal" data-target="#detailLaporan1"><i
                            class="fas fa-eye"></i></a>

                        </td>
                    </tr>
    
                    <tr>
                        <td>2</td>
                        <td>dr. Amanda Clarisa</td>
                        <td>PJ. PEL MUTU</td>
                        <td>100%</td>
                        <td> 
                            <a href="#" class="btn btn-secondary shadow btn-xs sharp mr-1"
                            data-toggle="modal" data-target="#detailLaporan2"><i
                            class="fas fa-eye"></i></a>
                        </td>
                    </tr>
    
                    <tr>
                        <td>3</td>
                        <td>dr. Suharti Pertiwi</td>
                        <td>PJ. PEL MEDIS</td>
                        <td>99%</td>
                        <td> 
                            <a href="#" class="btn btn-secondary shadow btn-xs sharp mr-1"
                            data-toggle="modal" data-target="#detailLaporan3"><i
                            class="fas fa-eye"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>dr. Kelly Cristiani</td>
                        <td>PJ. PENUNJANG MEDIS</td>
                        <td>98%</td>
                        <td> 
                            <a href="#" class="btn btn-secondary shadow btn-xs sharp mr-1"
                            data-toggle="modal" data-target="#detailLaporan4"><i
                            class="fas fa-eye"></i></a>
                            
                        </td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>drg. Airi Putri  Cendikia</td>
                        <td>PJ. MUTU</td>
                        <td>100%</td>
                        <td> 
                            <a href="#" class="btn btn-secondary shadow btn-xs sharp mr-1"
                            data-toggle="modal" data-target="#detailLaporan5"><i
                            class="fas fa-eye"></i></a>
                            
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
<div class="modal fade" id="detailLaporan1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Lihat Laporan</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <table cellpadding="5" align="jutify">
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
                        <td>Priode</td>
                        <td>:</td>
                        <td>
                            <div class="btn-group">
                                <button type="button" class="btn btn-secondary">Bulan</button>
                                <button type="button" class="btn btn-secondary dropdown-toggle dropdown-icon" data-toggle="dropdown">
                                    <span class="sr-only">Toggle Dropdown</span>
                                </button>
                                <div class="dropdown-menu" role="menu">
                                    <a class="dropdown-item" href="#">Januari</a>
                                    <a class="dropdown-item" href="#">Februari</a>
                                    <a class="dropdown-item" href="#">Maret</a>
                                    <a class="dropdown-item" href="#">April</a>
                                    <a class="dropdown-item" href="#">Mei</a>
                                    <a class="dropdown-item" href="#">Juni</a>
                                    <a class="dropdown-item" href="#">Juli</a>
                                    <a class="dropdown-item" href="#">Agustus</a>
                                    <a class="dropdown-item" href="#">September</a>
                                    <a class="dropdown-item" href="#">Oktober</a>
                                    <a class="dropdown-item" href="#">November</a>
                                    <a class="dropdown-item" href="#">Desember</a>
                                </div>
                            </div>
                            
                            <div class="btn-group">
                                <button type="button" class="btn btn-secondary">Tahun</button>
                                <button type="button" class="btn btn-secondary dropdown-toggle dropdown-icon" data-toggle="dropdown">
                                    <span class="sr-only">Toggle Dropdown</span>
                                </button>
                                <div class="dropdown-menu" role="menu">
                                    <a class="dropdown-item" href="#">2020</a>
                                    <a class="dropdown-item" href="#">2021</a>
                                    <a class="dropdown-item" href="#">2022</a>
                                    <a class="dropdown-item" href="#">2023</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                </table>

                <div class="table-resposive">
                    <table id="datatable" class="table table-bordered dt-responsive nowrap table-nowrap align-middle"
                    style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                        <tr>
                            <th>1</th>
                            <th>2</th>
                            <th>3</th>
                            <th>4</th>
                            <th>5</th>
                            <th>6</th>
                            <th>7</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>H</td>
                            <td>H</td>
                            <td>H</td>
                            <td>H</td>
                            <td>H</td>
                            <td>H</td>
                            <td>H</td>
                        </tr>

                        <tr>
                            <td>H</td>
                            <td>H</td>
                            <td>H</td>
                            <td>H</td>
                            <td>H</td>
                            <td>H</td>
                            <td>H</td>
                        </tr>

                        <tr>
                            <td>H</td>
                            <td>H</td>
                            <td>H</td>
                            <td>H</td>
                            <td>H</td>
                            <td>H</td>
                            <td>H</td>
                        </tr>

                        <tr>
                            <td>H</td>
                            <td>H</td>
                            <td>H</td>
                            <td>H</td>
                            <td>H</td>
                            <td>H</td>
                            <td>H</td>
                        </tr>
                    </tbody>
                    </table>

                </div>

                <table cellpadding="5" align="jutify">
                    <tr><b>Keterangan</b></tr>
                    <tr>
                        <td>Hadir</td>
                        <td>:</td>
                        <td>31</td>
                    </tr>

                    <tr>
                        <td>Sakit</td>
                        <td>:</td>
                        <td>0</td>
                    </tr>

                    <tr>
                        <td>Izin</td>
                        <td>:</td>
                        <td>0</td>
                    </tr>

                    <tr>
                        <td>Cuti</td>
                        <td>:</td>
                        <td>0</td>
                    </tr>

                    <tr>
                        <td>Tidak Hadir</td>
                        <td>:</td>
                        <td>0</td>
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
<div class="modal fade" id="detailLaporan2">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Lihat Laporan</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <table cellpadding="5" align="jutify">
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
                        <td>Priode</td>
                        <td>:</td>
                        <td>
                            <div class="btn-group" role="group">
                                <button id="btnGroupVerticalDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Bulan
                                </button>
                                <div class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop1">
                                    <a class="dropdown-item" href="#">Januari</a>
                                    <a class="dropdown-item" href="#">Februari</a>
                                    <a class="dropdown-item" href="#">Maret</a>
                                    <a class="dropdown-item" href="#">April</a>
                                    <a class="dropdown-item" href="#">Mei</a>
                                    <a class="dropdown-item" href="#">Juni</a>
                                    <a class="dropdown-item" href="#">Juli</a>
                                    <a class="dropdown-item" href="#">Agustus</a>
                                    <a class="dropdown-item" href="#">September</a>
                                    <a class="dropdown-item" href="#">Oktober</a>
                                    <a class="dropdown-item" href="#">November</a>
                                    <a class="dropdown-item" href="#">Desember</a>
                                </div>
                            </div>

                            <div class="btn-group" role="group">
                                <button id="btnGroupVerticalDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Tahun
                                </button>
                                <div class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop1">
                                    <a class="dropdown-item" href="#">2015</a>
                                    <a class="dropdown-item" href="#">2016</a>
                                    <a class="dropdown-item" href="#">2017</a>
                                    <a class="dropdown-item" href="#">2018</a>
                                    <a class="dropdown-item" href="#">2019</a>
                                    <a class="dropdown-item" href="#">2020</a>
                                    <a class="dropdown-item" href="#">2021</a>
                                    <a class="dropdown-item" href="#">2022</a>
                                    <a class="dropdown-item" href="#">2023</a>
                                    <a class="dropdown-item" href="#">2024</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                </table>

                <div class="table-resposive">
                    <table id="datatable" class="table table-bordered dt-responsive nowrap table-nowrap align-middle"
                    style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                        <tr>
                            <th>1</th>
                            <th>2</th>
                            <th>3</th>
                            <th>4</th>
                            <th>5</th>
                            <th>6</th>
                            <th>7</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>H</td>
                            <td>H</td>
                            <td>H</td>
                            <td>H</td>
                            <td>H</td>
                            <td>H</td>
                            <td>H</td>
                        </tr>

                        <tr>
                            <td>H</td>
                            <td>H</td>
                            <td>H</td>
                            <td>H</td>
                            <td>H</td>
                            <td>H</td>
                            <td>H</td>
                        </tr>

                        <tr>
                            <td>H</td>
                            <td>H</td>
                            <td>H</td>
                            <td>H</td>
                            <td>H</td>
                            <td>H</td>
                            <td>H</td>
                        </tr>

                        <tr>
                            <td>H</td>
                            <td>H</td>
                            <td>H</td>
                            <td>H</td>
                            <td>H</td>
                            <td>H</td>
                            <td>H</td>
                        </tr>

                    </tbody>
                    </table>

                </div>

                <table cellpadding="5" align="jutify">
                    <tr><b>Keterangan</b></tr>
                    <tr>
                        <td>Hadir</td>
                        <td>:</td>
                        <td>31</td>
                    </tr>

                    <tr>
                        <td>Sakit</td>
                        <td>:</td>
                        <td>0</td>
                    </tr>

                    <tr>
                        <td>Izin</td>
                        <td>:</td>
                        <td>0</td>
                    </tr>

                    <tr>
                        <td>Cuti</td>
                        <td>:</td>
                        <td>0</td>
                    </tr>

                    <tr>
                        <td>Tidak Hadir</td>
                        <td>:</td>
                        <td>0</td>
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
<div class="modal fade" id="detailLaporan3">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Lihat Laporan</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <table cellpadding="5" align="jutify">
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
                        <td>Priode</td>
                        <td>:</td>
                        <td>
                            <div class="btn-group" role="group">
                                <button id="btnGroupVerticalDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Bulan
                                </button>
                                <div class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop1">
                                    <a class="dropdown-item" href="#">Januari</a>
                                    <a class="dropdown-item" href="#">Februari</a>
                                    <a class="dropdown-item" href="#">Maret</a>
                                    <a class="dropdown-item" href="#">April</a>
                                    <a class="dropdown-item" href="#">Mei</a>
                                    <a class="dropdown-item" href="#">Juni</a>
                                    <a class="dropdown-item" href="#">Juli</a>
                                    <a class="dropdown-item" href="#">Agustus</a>
                                    <a class="dropdown-item" href="#">September</a>
                                    <a class="dropdown-item" href="#">Oktober</a>
                                    <a class="dropdown-item" href="#">November</a>
                                    <a class="dropdown-item" href="#">Desember</a>
                                </div>
                            </div>

                            <div class="btn-group" role="group">
                                <button id="btnGroupVerticalDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Tahun
                                </button>
                                <div class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop1">
                                    <a class="dropdown-item" href="#">2015</a>
                                    <a class="dropdown-item" href="#">2016</a>
                                    <a class="dropdown-item" href="#">2017</a>
                                    <a class="dropdown-item" href="#">2018</a>
                                    <a class="dropdown-item" href="#">2019</a>
                                    <a class="dropdown-item" href="#">2020</a>
                                    <a class="dropdown-item" href="#">2021</a>
                                    <a class="dropdown-item" href="#">2022</a>
                                    <a class="dropdown-item" href="#">2023</a>
                                    <a class="dropdown-item" href="#">2024</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                </table>

                <div class="table-resposive">
                    <table id="datatable" class="table table-bordered dt-responsive nowrap table-nowrap align-middle"
                    style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                        <tr>
                            <th>1</th>
                            <th>2</th>
                            <th>3</th>
                            <th>4</th>
                            <th>5</th>
                            <th>6</th>
                            <th>7</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>H</td>
                            <td>H</td>
                            <td>H</td>
                            <td>H</td>
                            <td>H</td>
                            <td>H</td>
                            <td>H</td>
                        </tr>

                        <tr>
                            <td>H</td>
                            <td>H</td>
                            <td>H</td>
                            <td>I</td>
                            <td>H</td>
                            <td>H</td>
                            <td>H</td>
                        </tr>

                        <tr>
                            <td>H</td>
                            <td>H</td>
                            <td>H</td>
                            <td>H</td>
                            <td>H</td>
                            <td>H</td>
                            <td>H</td>
                        </tr>

                        <tr>
                            <td>H</td>
                            <td>H</td>
                            <td>H</td>
                            <td>H</td>
                            <td>H</td>
                            <td>H</td>
                            <td>H</td>
                        </tr>

                    </tbody>
                    </table>

                </div>

                <table cellpadding="5" align="jutify">
                    <tr><b>Keterangan</b></tr>
                    <tr>
                        <td>Hadir</td>
                        <td>:</td>
                        <td>29</td>
                    </tr>

                    <tr>
                        <td>Sakit</td>
                        <td>:</td>
                        <td>0</td>
                    </tr>

                    <tr>
                        <td>Izin</td>
                        <td>:</td>
                        <td>1</td>
                    </tr>

                    <tr>
                        <td>Cuti</td>
                        <td>:</td>
                        <td>0</td>
                    </tr>

                    <tr>
                        <td>Tidak Hadir</td>
                        <td>:</td>
                        <td>0</td>
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
<div class="modal fade" id="detailLaporan4">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Lihat Laporan</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <table cellpadding="5" align="jutify">
                    <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td>dr. Kelly Cristianim</td>
                    </tr>

                    <tr>
                        <td>Jabatan</td>
                        <td>:</td>
                        <td>PJ. PENUNJANG MEDIS</td>
                    </tr>

                    <tr>
                        <td>Priode</td>
                        <td>:</td>
                        <td>
                            <div class="btn-group" role="group">
                                <button id="btnGroupVerticalDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Bulan
                                </button>
                                <div class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop1">
                                    <a class="dropdown-item" href="#">Januari</a>
                                    <a class="dropdown-item" href="#">Februari</a>
                                    <a class="dropdown-item" href="#">Maret</a>
                                    <a class="dropdown-item" href="#">April</a>
                                    <a class="dropdown-item" href="#">Mei</a>
                                    <a class="dropdown-item" href="#">Juni</a>
                                    <a class="dropdown-item" href="#">Juli</a>
                                    <a class="dropdown-item" href="#">Agustus</a>
                                    <a class="dropdown-item" href="#">September</a>
                                    <a class="dropdown-item" href="#">Oktober</a>
                                    <a class="dropdown-item" href="#">November</a>
                                    <a class="dropdown-item" href="#">Desember</a>
                                </div>
                            </div>

                            <div class="btn-group" role="group">
                                <button id="btnGroupVerticalDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Tahun
                                </button>
                                <div class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop1">
                                    <a class="dropdown-item" href="#">2015</a>
                                    <a class="dropdown-item" href="#">2016</a>
                                    <a class="dropdown-item" href="#">2017</a>
                                    <a class="dropdown-item" href="#">2018</a>
                                    <a class="dropdown-item" href="#">2019</a>
                                    <a class="dropdown-item" href="#">2020</a>
                                    <a class="dropdown-item" href="#">2021</a>
                                    <a class="dropdown-item" href="#">2022</a>
                                    <a class="dropdown-item" href="#">2023</a>
                                    <a class="dropdown-item" href="#">2024</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                </table>

                <div class="table-resposive">
                    <table id="datatable" class="table table-bordered dt-responsive nowrap table-nowrap align-middle"
                    style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                        <tr>
                            <th>1</th>
                            <th>2</th>
                            <th>3</th>
                            <th>4</th>
                            <th>5</th>
                            <th>6</th>
                            <th>7</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>H</td>
                            <td>H</td>
                            <td>H</td>
                            <td>H</td>
                            <td>H</td>
                            <td>I</td>
                            <td>H</td>
                        </tr>

                        <tr>
                            <td>H</td>
                            <td>H</td>
                            <td>I</td>
                            <td>H</td>
                            <td>H</td>
                            <td>H</td>
                            <td>H</td>
                        </tr>

                        <tr>
                            <td>H</td>
                            <td>H</td>
                            <td>H</td>
                            <td>H</td>
                            <td>H</td>
                            <td>H</td>
                            <td>H</td>
                        </tr>

                        <tr>
                            <td>H</td>
                            <td>H</td>
                            <td>H</td>
                            <td>H</td>
                            <td>H</td>
                            <td>H</td>
                            <td>H</td>
                        </tr>
                    </tbody>
                    </table>

                </div>

                <table cellpadding="5" align="jutify">
                    <tr><b>Keterangan</b></tr>
                    <tr>
                        <td>Hadir</td>
                        <td>:</td>
                        <td>28</td>
                    </tr>

                    <tr>
                        <td>Sakit</td>
                        <td>:</td>
                        <td>0</td>
                    </tr>

                    <tr>
                        <td>Izin</td>
                        <td>:</td>
                        <td>2</td>
                    </tr>

                    <tr>
                        <td>Cuti</td>
                        <td>:</td>
                        <td>0</td>
                    </tr>

                    <tr>
                        <td>Tidak Hadir</td>
                        <td>:</td>
                        <td>0</td>
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
<div class="modal fade" id="detailLaporan5">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Lihat Laporan</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <table cellpadding="5" align="jutify">
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
                        <td>Priode</td>
                        <td>:</td>
                        <td>
                            <div class="btn-group" role="group">
                                <button id="btnGroupVerticalDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Bulan
                                </button>
                                <div class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop1">
                                    <a class="dropdown-item" href="#">Januari</a>
                                    <a class="dropdown-item" href="#">Februari</a>
                                    <a class="dropdown-item" href="#">Maret</a>
                                    <a class="dropdown-item" href="#">April</a>
                                    <a class="dropdown-item" href="#">Mei</a>
                                    <a class="dropdown-item" href="#">Juni</a>
                                    <a class="dropdown-item" href="#">Juli</a>
                                    <a class="dropdown-item" href="#">Agustus</a>
                                    <a class="dropdown-item" href="#">September</a>
                                    <a class="dropdown-item" href="#">Oktober</a>
                                    <a class="dropdown-item" href="#">November</a>
                                    <a class="dropdown-item" href="#">Desember</a>
                                </div>
                            </div>

                            <div class="btn-group" role="group">
                                <button id="btnGroupVerticalDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Tahun
                                </button>
                                <div class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop1">
                                    <a class="dropdown-item" href="#">2015</a>
                                    <a class="dropdown-item" href="#">2016</a>
                                    <a class="dropdown-item" href="#">2017</a>
                                    <a class="dropdown-item" href="#">2018</a>
                                    <a class="dropdown-item" href="#">2019</a>
                                    <a class="dropdown-item" href="#">2020</a>
                                    <a class="dropdown-item" href="#">2021</a>
                                    <a class="dropdown-item" href="#">2022</a>
                                    <a class="dropdown-item" href="#">2023</a>
                                    <a class="dropdown-item" href="#">2024</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                </table>

                <div class="table-resposive">
                    <table id="datatable" class="table table-bordered dt-responsive nowrap table-nowrap align-middle"
                    style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                        <tr>
                            <th>1</th>
                            <th>2</th>
                            <th>3</th>
                            <th>4</th>
                            <th>5</th>
                            <th>6</th>
                            <th>7</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>H</td>
                            <td>H</td>
                            <td>H</td>
                            <td>H</td>
                            <td>H</td>
                            <td>H</td>
                            <td>H</td>
                        </tr>

                        <tr>
                            <td>H</td>
                            <td>H</td>
                            <td>H</td>
                            <td>H</td>
                            <td>H</td>
                            <td>H</td>
                            <td>H</td>
                        </tr>

                        <tr>
                            <td>H</td>
                            <td>H</td>
                            <td>H</td>
                            <td>H</td>
                            <td>H</td>
                            <td>H</td>
                            <td>H</td>
                        </tr>

                        <tr>
                            <td>H</td>
                            <td>H</td>
                            <td>H</td>
                            <td>H</td>
                            <td>H</td>
                            <td>H</td>
                            <td>H</td>
                        </tr>
                    </tbody>
                    </table>

                </div>

                <table cellpadding="5" align="jutify">
                    <tr><b>Keterangan</b></tr>
                    <tr>
                        <td>Hadir</td>
                        <td>:</td>
                        <td>31</td>
                    </tr>

                    <tr>
                        <td>Sakit</td>
                        <td>:</td>
                        <td>0</td>
                    </tr>

                    <tr>
                        <td>Izin</td>
                        <td>:</td>
                        <td>0</td>
                    </tr>

                    <tr>
                        <td>Cuti</td>
                        <td>:</td>
                        <td>0</td>
                    </tr>

                    <tr>
                        <td>Tidak Hadir</td>
                        <td>:</td>
                        <td>0</td>
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

