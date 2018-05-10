<html>
    <head>
        <title></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Bootstrap -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/bootstrap/css/bootstrap-theme.css'); ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/bootstrap/css/bootstrap-theme.css.map'); ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/bootstrap/css/bootstrap-theme.min.css'); ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/bootstrap/css/bootstrap-theme.min.css.map'); ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/bootstrap/css/bootstrap.css'); ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/bootstrap/css/bootstrap.css.map'); ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css'); ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css.map'); ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/data_mahasiswa.css'); ?>">
  <script src="<?php echo base_url('assets/bootstrap/js/jquery-3.1.1.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js'); ?>"></script>
        <link href="css/bootstrap.min.css" rel="stylesheet">
 
    </head>
    <body>
    <div class="container">      
    <br/>
        <!-- Tombol untuk menampilkan modal-->
        <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Detail</button>
    </center>
 
    <!-- Modal -->
    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- konten modal-->
            <div class="modal-content">
                <!-- heading modal -->
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <!-- body modal -->
                <div class="modal-body">
                    <h5 name="name">Nama</h5>
                    <h5 name="nim">Nim</h5>
                    <h5 name="prodi">Program Studi</h5>
                    <h5 name="hp">No Hp</h5><br/>
                    <h5>Pinjaman:</h5>
                    <h5 name="pinjaman">Rp.xxx.xxx</h5><br/>
                    <h5>Cicilan:</h5>
                    <div class="container">
           
                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Tanggal</th>
                        <th>Cicilan</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <!-- footer modal -->
                <div class="modal-footer">
                    <h5>Sisa Pinjaman:</h5>
                    <h5 name="sisa">Rp.XXX.XXX</h5>
                </div>
            </div>
        </div>
    </div>
   </div>        
    <script src="https://code.jquery.com/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    </body>
</html>