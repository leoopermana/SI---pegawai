<html>
<head>
    <title>Lapora Pegawai </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.5/css/buttons.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
</head>

<body>
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Laporan</h1>
                </div><!-- /.col -->
                <div class="card-body">
                    <table class="table table-bordered" id="mauexport">
                        <thead>
                            <tr>
                                <th width="20px">No.</th>
                                <th>Nama</th>
                                <th>Jabatan</th>
                                <th>Presentase Kehadiran</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Budi Setiawan S. Kom</td>
                                <td>Direktur Utama</td>
                                <td>100%</td>
                            </tr>
            
                            <tr>
                                <td>2</td>
                                <td>dr. Amanda Clarisa</td>
                                <td>PJ. PEL MUTU</td>
                                <td>100%</td>
                            </tr>
            
                            <tr>
                                <td>3</td>
                                <td>dr. Suharti Pertiwi</td>
                                <td>PJ. PEL MEDIS</td>
                                <td>90%</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>dr. Kelly Cristiani</td>
                                <td>PJ. PENUNJANG MEDIS</td>
                                <td>80%</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>drg. Airi Putri  Cendikia</td>
                                <td>PJ. MUTU</td>
                                <td>100%</td>
            
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
	
<script>
$(document).ready(function() {
    $('#mauexport').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy','csv','excel', 'pdf', 'print'
        ]
    } );
} );

</script>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js"></script>

	

</body>

</html>