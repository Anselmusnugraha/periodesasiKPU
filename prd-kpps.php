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
    <link rel="stylesheet" href="assets/css/lib/chosen/chosen.min.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

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

                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-users"></i>PPS</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-pencil"></i><a href="inp-pps.php">Input Data PPS</a></li>
                            <li><i class="fa fa-history"></i><a href="prd-pps.php">Cek Periodesasi PPS</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown active">
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

        <div class="breadcrumbs">
            <div class="breadcrumbs-inner">
                <div class="row m-0">
                    <div class="col-sm-4">
                        <div class="page-header float-left">
                            <div class="page-title">
                                <h1>Cek Data Periodesasi KPPS</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="page-header float-right">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a href="index.html">Dashboard</a></li>
                                    <li class="active">Cek Data KPPS</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Content -->
        <div class="content">
<!-- ISI KONTEN DISINI -->
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Cek Data KPPS</strong>
                            </div>
                            <div class="card-body">
                            <div class="row">
                              <div class="col-sm-12 col-md-12">
                                <form method="POST" action="">
                                            <label for="kategori">
                                                <select name="kategori" required="true" class="form-control" tabindex="1">
                                                     <option value="">---- Pilih Kategori ----</option>
                                                     <option value="nm">Nama</option>
                                                     <option value="nik">NIK</option>
                                                     <option value="kcmt">Kecamatan & Desa/Kelurahan</option>
                                                </select>
                                            </label>
                                            <label>
                                                <input type="text" name="txtsearch" class="form-control" required="true" autocomplete="off">
                                            </label>
                                            <label>
                                                <input type="text" name="textDESA" class="form-control" autocomplete="off" placeholder="Desa/Kelurahan">
                                            </label>
                                            <label>
                                                <button name="submit" type="submit" class="btn btn-outline-warning"><i class="fa fa-search"></i> Cari</button>
                                            </label>
                                            <label>
                                                <a href="prd-ppk.php"><button type="button" class="btn btn-outline-danger"><i class="fa fa-refresh"></i> Reset</button></a>
                                            </label>
                                </form>
<?php
  include 'controller/koneksi.php';
  if (isset($_POST['submit'])) {
   $search = $_POST['txtsearch'];
   $DESA = $_POST['textDESA'];
   $ktgr = $_POST['kategori'];
?>
                                            <a href="print-prd-kpps.php?src=<?php echo $search; ?>&ktg=<?php echo $ktgr; ?>&ds=<?php echo $DESA ?>"><button type="button" class="btn btn-outline-primary"><i class="fa fa-print"></i> Cetak</button></a>
                                <br><br>
                              </div>
                            </div>

                                <table class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>NO</th>
                                            <th>KECAMATAN</th>
                                            <th>DESA/KELURAHAN</th>
                                            <th>NAMA LENGKAP (TANPA GELAR)</th>
                                            <th>NIK</th>
                                            <th>JENIS KELAMIN (L/P)</th>
                                            <th>TPS</th>
                                            <th>JABATAN (KETUA/ANGGOTA)</th>
                                            <th>USIA</th>
                                            <th>TAHUN TERDAFTAR</th>
                                        </tr>
                                    </thead>
                                    <tbody>
<?php
   
   $sql = "SELECT dt_kpps.*, tgl_dft_kpps.tgl_inp FROM dt_kpps inner join tgl_dft_kpps on dt_kpps.id_tgl=tgl_dft_kpps.id_tgl WHERE $ktgr LIKE '%$search%' and dt_kpps.dskel LIKE '%$DESA%'";
   $query = mysql_query($sql);
   if (mysql_num_rows($query) == 0) {
    echo '<p></p><p>Pencarian tidak ditemukan</p>';
   } else {
    echo '<p></p>';
    while ($row = mysql_fetch_array($query)) {
            $no=1;
            $TGL = $row['tgl_inp'];
            $ForTGLPrd=date('Y', strtotime($TGL));
?>
                                        <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $row['kcmt']; ?></td>
                                            <td><?php echo $row['dskel']; ?></td>
                                            <td><?php echo $row['nm']; ?></td>
                                            <td><?php echo $row['nik']; ?></td>
                                            <td><?php echo $row['jk']; ?></td>
                                            <td><?php echo $row['tps']; ?></td>
                                            <td><?php echo $row['jbtn']; ?></td>
                                            <td><?php echo $row['us']; ?></td>
                                            <td><?php echo $ForTGLPrd; ?></td>
                                        </tr>
<?php
       }
    }
?>
                                    </tbody>
                                </table>
<?php
    }else{
       unset($_POST['submit']);}
?>
                            </div>
                        </div>
                    </div>


                </div>
            </div><!-- .animated -->

<!-- AKHIR KONTEN -->
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

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
    <script src="assets/js/lib/chosen/chosen.jquery.min.js"></script>

    <script>
        jQuery(document).ready(function() {
            jQuery(".standardSelect").chosen({
                disable_search_threshold: 10,
                no_results_text: "Oops, nothing found!",
                width: "100%"
            });
        });
    </script>

    <script type="text/javascript">
        $(document).ready(function() {
          $('#bootstrap-data-table-export').DataTable();
      } );
  </script>
</body>
</html>