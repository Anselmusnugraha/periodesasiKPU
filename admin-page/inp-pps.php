<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Aplikasi Periodesasi Badan Adhock</title>
    <meta name="description" content="Aplikasi Periodesasi Badan Adhock">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="https://i.imgur.com/QRAUqs9.png">
    <link rel="shortcut icon" href="images/favicon.png">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="assets/css/lib/datatable/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

   <style>
    #weatherWidget .currentDesc {
        color: #ffffff!important;
    }
        .traffic-chart {
            min-height: 335px;
        }
        #flotPie1  {
            height: 150px;
        }
        #flotPie1 td {
            padding:3px;
        }
        #flotPie1 table {
            top: 20px!important;
            right: -10px!important;
        }
        .chart-container {
            display: table;
            min-width: 270px ;
            text-align: left;
            padding-top: 10px;
            padding-bottom: 10px;
        }
        #flotLine5  {
             height: 105px;
        }

        #flotBarChart {
            height: 150px;
        }
        #cellPaiChart{
            height: 160px;
        }

    </style>
</head>

<body>
    <!-- Left Panel -->
    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">

                    <li>
                        <a href="index.html"><i class="menu-icon fa fa-laptop"></i>Dashboard </a>
                    </li>

                    <li class="menu-title">Badan Adhock</li><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-users"></i>PPK</a>
                        <ul class="sub-menu children dropdown-menu">                            
                            <li><i class="fa fa-pencil"></i><a href="inp-ppk.php">Input Data PPK</a></li>
                            <li><i class="fa fa-history"></i><a href="prd-ppk.php">Cek Periodesasi PPK</a></li>
                        </ul>
                    </li>

                    <li class="menu-item-has-children dropdown active">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-users"></i>PPS</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-pencil"></i><a href="inp-pps.php">Input Data PPS</a></li>
                            <li><i class="fa fa-history"></i><a href="prd-pps.php">Cek Periodesasi PPS</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-users"></i>KPPS</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-pencil"></i><a href="inp-kpps.php">Input Data KPPS</a></li>
                            <li><i class="menu-icon fa fa-history"></i><a href="prd-kpps.php">Cek Periodesasi KPPS</a></li>
                        </ul>
                    </li>


                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside>
    <!-- /#left-panel -->

    <!-- Right Panel -->
    <div id="right-panel" class="right-panel">
        <!-- Header-->
        <header id="header" class="header">
            <div class="top-left">
                <div class="navbar-header">
                    <a class="navbar-brand" href="./"><img src="images/kpu-pjn.png" alt="Logo"></a>
                    <a class="navbar-brand hidden" href="./"><img src="images/logo-kpu.png" alt="Logo"></a>
                    <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
                </div>
            </div>
            <div class="top-right">
                <div class="header-menu">
                    <div class="header-left">
                        <button class="search-trigger" title="Pencarian"><i class="fa fa-search"></i></button>
                        <div class="form-inline">
                            <form class="search-form">
                                <input class="form-control mr-sm-2" type="text" placeholder="Pencarian ..." aria-label="Search">
                                <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                            </form>
                        </div>

                        <div class="dropdown for-notification">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="notification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" title="Logout">
                                <a href=""><i class="fa fa-sign-out"></i></a>
                            </button>
                        </div>

                    </div>
                </div>
            </div>
        </header>
        <!-- /#header -->

        <!-- Content -->
        <div class="content">
<?php
include 'controller/koneksi.php';
?>
<!-- ISI KONTEN DISINI -->
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Pendaftaran PPS</strong>
                            </div>
                            <div class="card-body">
                                <button type="button" class="btn btn-outline-secondary" data-toggle="modal" data-target="#ModalInput"><i class="fa fa-calendar"></i> Tambah Tanggal Pendaftaran</button><br><br>
                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Tanggal</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
                                        $no=0;
                                        $sql="select * from tgl_dft_pps";
                                        $query = mysql_query($sql);
                                        while ($View=mysql_fetch_array($query)) {
                                        $no++; 

                                        $TGL = $View['tgl_inp'];
                                        $ForTGLInp=date('d-M-Y', strtotime($TGL));          
                                      ?>
                                        <tr>
                                            <td><?php echo $no; ?></td>
                                            <td><?php echo $ForTGLInp; ?></td>
                                            <td>
                                                <a href="data-pps.php?id_tgl=<?php echo $View['id_tgl']; ?>"><button type="button" class="btn btn-outline-primary"><i class="fa fa-plus"></i> Input Data</button></a>
                                                <a data-toggle="modal" data-placement="right" title="Edit" href="#"><button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#myModal<?php echo $View['id_tgl']; ?>" ><i class="fa fa-edit"></i> Edit</button></a>
                                                <a data-toggle="modal" data-target="#konfirmasi_hapus" title="Hapus" data-href="controller/del-data/delete-tanggal-pps.php?&id_tgl=<?php echo  $View['id_tgl']; ?>"><button type="button" class="btn btn-outline-danger"><i class="fa fa-trash"></i> Hapus</button></a>
                                            </td>
                                        </tr>
<!-- SCRIPT MODAL EDIT TANGGAL -->  
            <div class="modal fade" id="myModal<?php echo $View['id_tgl']; ?>" role="dialog">
              <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header" style="background-color: #28a745;">
                    <h3 class="modal-title" style="text-align: center; color: white;">Edit Tanggal <i class="fa fa-edit"></i></h3>
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                        <span class="sr-only">Tutup</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <form role="form" action="controller/edit-data/edt-tgl-pps.php" method="get">
                        <?php
                        $ID_TGL = $View['id_tgl'];
                          $sql1 = "select * from tgl_dft_pps where id_tgl='$ID_TGL'";
                          $query1 = mysql_query($sql1);
                          while($View1 = mysql_fetch_array($query1)){  
                        ?>
                        <input type="hidden" name="id_tgl" value="<?php echo $ID_TGL;?>">

                        <div class="form-group">
                        <label for="tgl_inp" class="labelfrm">Tanggal</label>
                            <div class="input-group">
                              <span class="input-group-addon" id="basic-addon1"><span class="fa fa-calendar"></span></span>
                              <input id="tgl_inp" class="form-control" type="date" name="tgl_inp" required="true" autocomplete="off" value="<?php echo $View1['tgl_inp']; ?>">
                            </div>
                        </div>
                        <div class="modal-footer">  
                          <button type="submit" data-toggle="tooltip" data-placement="bottom" title="Simpan" class="btn btn-outline-primary">Simpan <i class="fa fa-check"></i></button>
                          <button data-toggle="tooltip" data-placement="bottom" title="Batal" type="button" class="btn btn-outline-danger" data-dismiss="modal">Batal <i class="fa fa-close"></i></button>
                        </div>
                        <?php 
                        }
                        ?>        
                      </form>
                  </div>
                </div>
              </div>
            </div>
<!-- //SCRIPT MODAL EDIT TANGGAL -->              
                                    <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>

<!-- Javascript untuk popup modal Delete--> 
<script type="text/javascript">
 //Javascript untuk popup modal Delete 
        $(document).ready(function() {
        $('#konfirmasi_hapus').on('show.bs.modal', function(e) {
            $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
        });
    });   
</script>

<!-- SCRIPT MODAL DELETE TANGGAL--> 
<div class="modal fade" id="konfirmasi_hapus" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content" style="margin-top:100px;">
      <div class="modal-header" style="background-color: #dc3545;">
        <h4 class="modal-title" style="text-align:center; color: white;">Anda yakin ingin menghapus Data ?</h4>
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
      </div>
      
      <div class="form-group">
        <img src="images/icons-TRASH.gif" style="width: 200px; margin-left: 140px; ">
      </div> 
          
      <div class="modal-footer" style="margin:0px; border-top:0px; text-align: center;">
        <a data-toggle="tooltip" data-placement="bottom" title="Hapus" class="btn btn-outline-danger btn-ok">Hapus <i class="fa fa-trash"></i></a>
        <button data-toggle="tooltip" data-placement="bottom" title="Batal" type="button" class="btn btn-outline-primary" data-dismiss="modal">Batal <i class="fa fa-close"></i></button>
      </div>
    </div>
  </div>
</div>
<!-- //SCRIPT MODAL DELETE TANGGAL--> 

<!-- SCRIPT MODAL INPUT TANGGAL -->  
<?php    
    $sql2="select * FROM tgl_dft_pps";
    $query2=mysql_query($sql2); 
?>
<div class="modal fade" id="ModalInput" tabindex="-1" role="dialog" aria-labelledby="staticModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->  
            <div class="modal-header" style="background-color: #DDDDDD;">
                <h3 class="modal-title"  id="myModalLabel" style="text-align: center;">Input Tanggal Daftar PPS <i class="fa fa-pencil"></i></h3>
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Tutup</span>
                </button>
            </div>
            <!-- Modal Body --> 
            <div class="modal-body">
                <p class="statusMsg"></p>
                <form role="form" id="FormValidation" method="POST" action="controller/save-data/save-inp-tgl-pps.php">
                <input type="hidden" name="id_tgl" value=<?php echo $query2; ?>>
                    
                    <div class="form-group">
                      <label class="labelfrm">Tanggal</label>
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1"><span class="fa fa-calendar"></span></span>
                          <input class="form-control" type="date" name="tgl_inp" required="true" autocomplete="off">
                        </div>
                         <small class="form-text text-muted">dd/mm/YYYY</small>
                    </div>

                  <div class="modal-footer">
            <button type="submit" data-toggle="tooltip" data-placement="bottom" title="Simpan" class="btn btn-outline-primary">Simpan <i class="fa fa-check"></i></button>
            <button type="reset" data-toggle="tooltip" data-placement="bottom" title="Batal" class="btn btn-outline-danger" data-dismiss="modal">Batal <i class="fa fa-close"></i></button>
                  </div>
                </form>
            </div>

            <!-- Modal Footer --> 
        </div>
    </div>
</div>
<!-- //SCRIPT MODAL INPUT TANGGAL --> 

            </div><!-- .animated -->
        </div>
        <!-- /.content -->
        
        <div class="clearfix"></div>
        <!-- Footer -->
        <footer class="site-footer">
            <div class="footer-inner bg-white">
                <div class="row">
                    <div class="col-sm-6">
                        Copyright &copy; 2020 KPU Kabupaten Wonogiri
                    </div>
                    <div class="col-sm-6 text-right">
                        Designed by Nugg
                    </div>
                </div>
            </div>
        </footer>
        <!-- /.site-footer -->
    </div>
    <!-- /#right-panel -->

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script> 
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script> 
    <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
    <script src="assets/js/main.js"></script>


    <script src="assets/js/lib/data-table/datatables.min.js"></script>
    <script src="assets/js/lib/data-table/dataTables.bootstrap.min.js"></script>
    <script src="assets/js/lib/data-table/dataTables.buttons.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.bootstrap.min.js"></script>
    <script src="assets/js/lib/data-table/jszip.min.js"></script>
    <script src="assets/js/lib/data-table/vfs_fonts.js"></script>
    <script src="assets/js/lib/data-table/buttons.html5.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.print.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.colVis.min.js"></script>
    <script src="assets/js/init/datatables-init.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
          $('#bootstrap-data-table-export').DataTable();
      } );
    </script>

</body>
</html>
