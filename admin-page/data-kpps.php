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
     <!-- SCRIPT VALIDASI INPUT HANYA ANGKA -->  
      <script>
        function mungAngka(evt) {
          var charCode = (evt.which) ? evt.which : event.keyCode
           if (charCode > 31 && (charCode < 48 || charCode > 57))
     
            return false;
          return true;
        }
      </script>

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

        <!-- Content -->
        <div class="content">
<?php
include 'controller/koneksi.php';
$ID_TGL=$_GET['id_tgl'];
$dt=mysql_query("select tgl_inp from tgl_dft_kpps where id_tgl='$ID_TGL'");
while ($dtt = mysql_fetch_array($dt)) {
    $TGL = $dtt['tgl_inp'];
    $ForTGLInp=date('Y', strtotime($TGL)); 
?>
<!-- ISI KONTEN DISINI -->
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">DATA KPPS TAHUN <?php echo $ForTGLInp; ?></strong>
<?php
}
?>
                            </div>
                            <div class="card-body">
                                <button type="button" class="btn btn-outline-secondary" data-toggle="modal" data-target="#ModalInput"><i class="fa fa-pencil"></i> Input Data KPPS</button>
                                <button type="button" class="btn btn-outline-secondary" data-toggle="modal" data-target="#ModalImport"><i class="fa fa-file"></i> Import Data (Excel)</button><br><br>

<?php 
if(isset($_GET['berhasil'])){
    echo "<p>".$_GET['berhasil']." Data berhasil di import.</p>";
}
?>

                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>NO</th>
                                            <th>KECAMATAN</th>
                                            <th>DESA/KELURAHAN</th>
                                            <th>TPS</th>
                                            <th>JABATAN (KETUA/ANGGOTA)</th>
                                            <th>NAMA LENGKAP (TANPA GELAR)</th>
                                            <th>NIK</th>
                                            <th>JENIS KELAMIN (L/P)</th>
                                            <th>TEMPAT LAHIR</th>
                                            <th>TANGGAL LAHIR</th>
                                            <th>USIA</th>
                                            <th>STATUS (PERKAWINAN)</th>
                                            <th>PENDIDIKAN TERAKHIR</th>
                                            <th>PEKERJAAN</th>
                                            <th>AGAMA</th>
                                            <th>ALAMAT</th>
                                            <th>NO. HP</th>
                                            <th>EMAIL</th>
                                            <th>MEDIA SOSIAL</th>
                                            <th>RIWAYAT PENYAKIT</th>
                                            <th>KETERANGAN</th>
                                            <th>AKSI</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
                                        $no=1;
                                        $data = mysql_query("select * from dt_kpps where id_tgl='$ID_TGL'");
                                        while($d = mysql_fetch_array($data)){
                                            $TGL_LH=$d['tgl_lh'];
                                            $ForTGLLAHIR=date('d-M-Y', strtotime($TGL_LH)); 
                                    ?>
                                        <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $d['kcmt']; ?></td>
                                            <td><?php echo $d['dskel']; ?></td>
                                            <td><?php echo $d['tps']; ?></td>
                                            <td><?php echo $d['jbtn']; ?></td>
                                            <td><?php echo $d['nm']; ?></td>
                                            <td><?php echo $d['nik']; ?></td>
                                            <td><?php echo $d['jk']; ?></td>
                                            <td><?php echo $d['t_lh']; ?></td>
                                            <td><?php echo $ForTGLLAHIR; ?></td>
                                            <td><?php echo $d['us']; ?></td>
                                            <td><?php echo $d['sts_prkw']; ?></td>
                                            <td><?php echo $d['pndd']; ?></td>
                                            <td><?php echo $d['pkj']; ?></td>
                                            <td><?php echo $d['agm']; ?></td>
                                            <td><?php echo $d['almt']; ?></td>
                                            <td><?php echo $d['hp_tlp']; ?></td>
                                            <td><?php echo $d['email']; ?></td>
                                            <td><?php echo $d['medsos']; ?></td>
                                            <td><?php echo $d['rwy_sakit']; ?></td>
                                            <td><?php echo $d['ket']; ?></td>
                                            <td>
                                                <a data-toggle="modal" data-placement="right" title="Edit" href="#"><button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#myModal<?php echo $d['No']; ?>" ><i class="fa fa-edit"></i> Edit</button></a>
                                                <a data-toggle="modal" data-target="#konfirmasi_hapus" title="Hapus" data-href="controller/del-data/delete-dt-kpps.php?&No=<?php echo $d['No']; ?> "><button type="button" class="btn btn-outline-danger"><i class="fa fa-trash"></i> Hapus</button></a>
                                            </td>
                                        </tr>
<!-- SCRIPT MODAL EDIT TANGGAL -->  
            <div class="modal fade" id="myModal<?php echo $d['No']; ?>" role="dialog">
              <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header" style="background-color: #28a745;">
                    <h3 class="modal-title" style="text-align: center; color: white;">Edit Data PPK <i class="fa fa-edit"></i></h3>
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                        <span class="sr-only">Tutup</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <form role="form" action="controller/edit-data/edt-dt-kpps.php" method="get">
                        <?php
                        $ID_TGL=$_GET['id_tgl'];
                        $NO = $d['No'];
                          $sql1 = "select * from dt_kpps where No='$NO'";
                          $query1 = mysql_query($sql1);
                          while($View1 = mysql_fetch_array($query1)){
                            $JBT=$View1['jbtn'];
                            $JK=$View1['jk'];
                            $PENDD=$View1['pndd'];
                            $AGM=$View1['agm'];  
                            $PRKW=$View1['sts_prkw'];
                        ?>
                        <input type="hidden" name="id_tgl" value="<?php echo $ID_TGL;?>">
                        <input type="hidden" name="No" value="<?php echo $NO;?>">

                        <div class="row form-group"> 
                           <div class="col col-md-6"> 
                            <div class="form-group">
                              <label for="kcmt" class="labelfrm">* Kecamatan</label>
                                <div class="input-group">
                                  <span class="input-group-addon" id="basic-addon1"><span class="fa fa-map-marker"></span></span>
                                  <input id="kcmt" class="form-control" type="text" name="kcmt" required="true" autocomplete="off" value="<?php echo $View1['kcmt'];?>">
                                </div>
                            </div>
                           </div>
                           <div class="col col-md-6"> 
                            <div class="form-group">
                              <label for="ds_kel" class="labelfrm">* Desa/Kelurahan</label>
                                <div class="input-group">
                                  <span class="input-group-addon" id="basic-addon1"><span class="fa fa-map-marker"></span></span>
                                  <input id="ds_kel" class="form-control" type="text" name="ds_kel" required="true" autocomplete="off" value="<?php echo $View1['dskel'];?>">
                                </div>
                            </div>
                           </div>
                        </div>

                        <div class="row form-group"> 
                           <div class="col col-md-6"> 
                            <div class="form-group">
                              <label for="tps" class="labelfrm">* TPS</label>
                                <div class="input-group">
                                  <span class="input-group-addon" id="basic-addon1"><span class="fa fa-thumb-tack"></span></span>
                                  <input id="tps" class="form-control" type="text" name="tps" required="true" autocomplete="off" value="<?php echo $View1['tps'];?>" onkeypress="return mungAngka(event)">
                                </div>
                            </div>
                           </div>
                           <div class="col col-md-6"> 
                            <div class="form-group">
                              <label for="jbtn" class="labelfrm">* Jabatan</label>
                                <div class="input-group">
                                  <span class="input-group-addon" id="basic-addon1"><span class="fa fa-user"></span></span>
                                  <select name="jbtn" id="jbtn" class="form-control" required="true">
                                    <option value="">--- Jabatan ---</option>
                                    <option value="Ketua"<?php if ($JBT=='Ketua') { echo "selected"; } ?> >Ketua</option>
                                    <option value="Anggota"<?php if ($JBT=='Anggota') { echo "selected"; } ?> >Anggota</option>
                                  </select>
                                </div>
                            </div>
                           </div>
                        </div>

                        <div class="row form-group"> 
                           <div class="col col-md-6"> 
                            <div class="form-group">
                              <label for="nm" class="labelfrm">* Nama (Tanpa Gelar)</label>
                                <div class="input-group">
                                  <span class="input-group-addon" id="basic-addon1"><span class="fa fa-font"></span></span>
                                  <input id="nm" class="form-control" type="text" name="nm" required="true" autocomplete="off" value="<?php echo $View1['nm'];?>">
                                </div>
                            </div>
                           </div>
                           <div class="col col-md-6"> 
                            <div class="form-group">
                              <label for="nik" class="labelfrm">* NIK</label>
                                <div class="input-group">
                                  <span class="input-group-addon" id="basic-addon1"><span class="fa fa-credit-card"></span></span>
                                  <input id="nik" class="form-control" type="text" name="nik" required="true" autocomplete="off" value="<?php echo $View1['nik'];?>" onkeypress="return mungAngka(event)">
                                </div>
                            </div>
                           </div>
                        </div>

                        <div class="row form-group"> 
                           <div class="col col-md-6"> 
                            <div class="form-group">
                              <label for="jk" class="labelfrm">* Jenis Kelamin</label>
                                <div class="input-group">
                                  <span class="input-group-addon" id="basic-addon1"><span class="fa fa-user"></span></span>
                                  <select name="jk" id="jk" class="form-control" required="true">
                                    <option value="">--- Jenis Kelamin ---</option>
                                    <option value="L"<?php if ($JK=='L') { echo "selected"; } ?> >Laki-laki</option>
                                    <option value="P"<?php if ($JK=='P') { echo "selected"; } ?> >Perempuan</option>
                                  </select>
                                </div>
                            </div>
                           </div>
                           <div class="col col-md-6"> 
                            <div class="form-group">
                              <label for="t_lh" class="labelfrm">* Tempat Lahir</label>
                                <div class="input-group">
                                  <span class="input-group-addon" id="basic-addon1"><span class="fa fa-map-marker"></span></span>
                                  <input id="t_lh" class="form-control" type="text" name="t_lh" required="true" autocomplete="off" value="<?php echo $View1['t_lh'];?>">
                                </div>
                            </div>
                           </div>
                        </div>

                        <div class="row form-group"> 
                           <div class="col col-md-6"> 
                            <div class="form-group">
                              <label for="tgl_lh" class="labelfrm">* Tanggal Lahir</label>
                                <div class="input-group">
                                  <span class="input-group-addon" id="basic-addon1"><span class="fa fa-calendar"></span></span>
                                  <input id="tgl_lh" class="form-control" type="date" name="tgl_lh" required="true" autocomplete="off" value="<?php echo $View1['tgl_lh'];?>">
                                </div>
                            </div>
                           </div>
                           <div class="col col-md-6"> 
                            <div class="form-group">
                              <label for="us" class="labelfrm">* Usia</label>
                                <div class="input-group">
                                  <span class="input-group-addon" id="basic-addon1"><span class="fa fa-unsorted"></span></span>
                                  <input id="us" class="form-control" type="text" name="us" required="true" autocomplete="off" value="<?php echo $View1['us'];?>" onkeypress="return mungAngka(event)">
                                </div>
                            </div>
                           </div>
                        </div>

                        <div class="row form-group"> 
                           <div class="col col-md-6"> 
                            <div class="form-group">
                              <label for="sts_prkw" class="labelfrm">* Status (Perkawinan)</label>
                                <div class="input-group">
                                  <span class="input-group-addon" id="basic-addon1"><span class="fa fa-certificate"></span></span>
                                  <select name="sts_prkw" id="sts_prkw" class="form-control" required="true">
                                    <option value="">--- Status Perkawinan ---</option>
                                    <option value="Kawin"<?php if ($PRKW=='Kawin') { echo "selected"; } ?> >Kawin</option>
                                    <option value="Belum"<?php if ($PRKW=='Belum') { echo "selected"; } ?> >Belum</option>
                                  </select>
                                </div>
                            </div>
                           </div>
                           <div class="col col-md-6"> 
                            <div class="form-group">
                              <label for="pndd" class="labelfrm">* Pendidikan</label>
                                <div class="input-group">
                                  <span class="input-group-addon" id="basic-addon1"><span class="fa fa-archive"></span></span>
                                  <select name="pndd" id="pndd" class="form-control" required="true">
                                    <option value="">--- Pendidikan Terakhir ---</option>
                                    <option value="SMA/SMK"<?php if ($PENDD=='SMA/SMK') { echo "selected"; } ?> >SMA/SMK</option>
                                    <option value="Diploma 1 (D1)"<?php if ($PENDD=='Diploma 1 (D1)') { echo "selected"; } ?> >Diploma 1 (D1)</option>
                                    <option value="Diploma 2 (D2)"<?php if ($PENDD=='Diploma 2 (D2)') { echo "selected"; } ?> >Diploma 2 (D2)</option>
                                    <option value="Diploma 3 (D3)"<?php if ($PENDD=='Diploma 3 (D3)') { echo "selected"; } ?> >Diploma 3 (D3)</option>
                                    <option value="Strata 1 (S1)/Diploma 4 (D4)"<?php if ($PENDD=='Strata 1 (S1)/Diploma 4 (D4)') { echo "selected"; } ?> >Strata 1 (S1) / Diploma 4 (D4)</option>
                                    <option value="Strata 2 (S2)"<?php if ($PENDD=='Strata 2 (S2)') { echo "selected"; } ?> >Strata 2 (S2)</option> 
                                    <option value="Strata 3 (S3)"<?php if ($PENDD=='Strata 3 (S3)') { echo "selected"; } ?> >Strata 3 (S3)</option>
                                  </select>
                                </div>
                            </div>
                           </div>
                        </div>

                        <div class="row form-group"> 
                           <div class="col col-md-6"> 
                            <div class="form-group">
                              <label for="pkj" class="labelfrm">* Pekerjaan</label>
                                <div class="input-group">
                                  <span class="input-group-addon" id="basic-addon1"><span class="fa fa-briefcase"></span></span>
                                  <input id="pkj" class="form-control" type="text" name="pkj" required="true" autocomplete="off" value="<?php echo $View1['pkj'];?>">
                                </div>
                            </div>
                           </div>
                           <div class="col col-md-6"> 
                            <div class="form-group">
                              <label for="agm" class="labelfrm">* Agama</label>
                                <div class="input-group">
                                  <span class="input-group-addon" id="basic-addon1"><span class="fa fa-circle"></span></span>
                                  <select name="agm" id="agm" class="form-control" required="true">
                                    <option value="">--- Agama ---</option>
                                    <option value="Islam"<?php if ($AGM=='Islam') { echo "selected"; } ?> >Islam</option>
                                    <option value="Kristen"<?php if ($AGM=='Kristen') { echo "selected"; } ?> >Kristen</option>
                                    <option value="Katolik"<?php if ($AGM=='Katolik') { echo "selected"; } ?> >Katolik</option>
                                    <option value="Hindu"<?php if ($AGM=='Hindu') { echo "selected"; } ?> >Hindu</option>
                                    <option value="Budha"<?php if ($AGM=='Budha') { echo "selected"; } ?> >Budha</option>
                                    <option value="Konghuchu"<?php if ($AGM=='Konghuchu') { echo "selected"; } ?> >Konghuchu</option>
                                    <option value="Lain-lain"<?php if ($AGM=='Lain-lain') { echo "selected"; } ?> >Lain-lain</option>
                                  </select>
                                </div>
                            </div>
                           </div>
                        </div>

                        <div class="row form-group"> 
                           <div class="col col-md-6"> 
                            <div class="form-group">
                              <label for="almt" class="labelfrm">* Alamat</label>
                                <div class="input-group">
                                  <span class="input-group-addon" id="basic-addon1"><span class="fa fa-home"></span></span>
                                  <input id="almt" class="form-control" type="text" name="almt" required="true" autocomplete="off" value="<?php echo $View1['almt'];?>">
                                </div>
                            </div>
                           </div>
                           <div class="col col-md-6"> 
                            <div class="form-group">
                              <label for="hp_tlp" class="labelfrm">* Nomor Telp./Hp</label>
                                <div class="input-group">
                                  <span class="input-group-addon" id="basic-addon1"><span class="fa fa-phone"></span></span>
                                  <input id="hp_tlp" class="form-control" type="text" name="hp_tlp" required="true" autocomplete="off" value="<?php echo $View1['hp_tlp'];?>">
                                </div>
                            </div>
                           </div>
                        </div>

                        <div class="row form-group"> 
                           <div class="col col-md-6"> 
                            <div class="form-group">
                              <label for="email" class="labelfrm">Email</label>
                                <div class="input-group">
                                  <span class="input-group-addon" id="basic-addon1"><span class="fa fa-envelope-o"></span></span>
                                  <input id="email" class="form-control" type="text" name="email" autocomplete="off" value="<?php echo $View1['email'];?>">
                                </div>
                            </div>
                           </div>
                           <div class="col col-md-6"> 
                            <div class="form-group">
                              <label for="medsos" class="labelfrm">Media Sosial</label>
                                <div class="input-group">
                                  <span class="input-group-addon" id="basic-addon1"><span class="fa fa-comments-o"></span></span>
                                  <input id="medsos" class="form-control" type="text" name="medsos" autocomplete="off" value="<?php echo $View1['medsos'];?>">
                                </div>
                            </div>
                           </div>
                        </div>

                        <div class="row form-group"> 
                           <div class="col col-md-6"> 
                            <div class="form-group">
                              <label for="rwy_sakit" class="labelfrm">Riwayat Sakit</label>
                                <div class="input-group">
                                  <span class="input-group-addon" id="basic-addon1"><span class="fa fa-stethoscope"></span></span>
                                  <input id="rwy_sakit" class="form-control" type="text" name="rwy_sakit" autocomplete="off" value="<?php echo $View1['rwy_sakit'];?>">
                                </div>
                            </div>
                           </div>
                           <div class="col col-md-6"> 
                            <div class="form-group">
                              <label for="ket" class="labelfrm">Keterangan</label>
                                <div class="input-group">
                                  <span class="input-group-addon" id="basic-addon1"><span class="fa fa-tag"></span></span>
                                  <input id="ket" class="form-control" type="text" name="ket" autocomplete="off" value="<?php echo $View1['ket'];?>">
                                </div>
                            </div>
                           </div>
                        </div>

                        <div class="modal-footer">
                            <div>
                                <p>(*) Wajib Diisi</p>
                            </div>  
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

<!-- SCRIPT MODAL INPUT DATA -->  
<?php
    $ID_TGL=$_GET['id_tgl'];    
    $sql1="select * FROM dt_kpps";
    $query1=mysql_query($sql1); 
?>
<div class="modal fade" id="ModalInput" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <!-- Modal Header -->  
            <div class="modal-header" style="background-color: #DDDDDD;">
                <h3 class="modal-title"  id="largeModalLabel" style="text-align: center;">Input Data KPPS <i class="fa fa-pencil"></i></h3>
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Tutup</span>
                </button>
            </div>
            <!-- Modal Body --> 
            <div class="modal-body">
                <p class="statusMsg"></p>
                <form role="form" id="FormValidation" method="post" action="controller/save-data/save-dt-kpps.php">
                <input type="hidden" name="id_tgl" value=<?php echo $ID_TGL; ?>>
                <input type="hidden" name="No" value=<?php echo $query1; ?>>
                  
                <div class="row form-group"> 
                   <div class="col col-md-6"> 
                    <div class="form-group">
                      <label for="kcmt" class="labelfrm">* Kecamatan</label>
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1"><span class="fa fa-map-marker"></span></span>
                          <input id="kcmt" class="form-control" type="text" name="kcmt" required="true" autocomplete="off">
                        </div>
                    </div>
                   </div>
                   <div class="col col-md-6"> 
                    <div class="form-group">
                      <label for="ds_kel" class="labelfrm">* Desa/Kelurahan</label>
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1"><span class="fa fa-map-marker"></span></span>
                          <input id="ds_kel" class="form-control" type="text" name="ds_kel" required="true" autocomplete="off">
                        </div>
                    </div>
                   </div>
                </div>

                <div class="row form-group"> 
                   <div class="col col-md-6"> 
                    <div class="form-group">
                      <label for="tps" class="labelfrm">* TPS</label>
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1"><span class="fa fa-thumb-tack"></span></span>
                          <input id="tps" class="form-control" type="text" name="tps" required="true" autocomplete="off" onkeypress="return mungAngka(event)">
                        </div>
                    </div>
                   </div>
                   <div class="col col-md-6"> 
                    <div class="form-group">
                      <label for="jbtn" class="labelfrm">* Jabatan</label>
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1"><span class="fa fa-user"></span></span>
                          <select name="jbtn" id="jbtn" class="form-control" required="true">
                              <option value="">--- Jabatan ---</option>
                              <option value="Ketua">Ketua</option>
                              <option value="Anggota">Anggota</option>
                          </select>
                        </div>
                    </div>
                   </div>
                </div>

                <div class="row form-group"> 
                   <div class="col col-md-6"> 
                    <div class="form-group">
                      <label for="nm" class="labelfrm">* Nama (Tanpa Gelar)</label>
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1"><span class="fa fa-font"></span></span>
                          <input id="nm" class="form-control" type="text" name="nm" required="true" autocomplete="off">
                        </div>
                    </div>
                   </div>
                   <div class="col col-md-6"> 
                    <div class="form-group">
                      <label for="nik" class="labelfrm">* NIK</label>
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1"><span class="fa fa-credit-card"></span></span>
                          <input id="nik" class="form-control" type="text" name="nik" required="true" autocomplete="off" onkeypress="return mungAngka(event)">
                        </div>
                    </div>
                   </div>
                </div>

                <div class="row form-group"> 
                   <div class="col col-md-6"> 
                    <div class="form-group">
                      <label for="jk" class="labelfrm">* Jenis Kelamin</label>
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1"><span class="fa fa-user"></span></span>
                          <select name="jk" id="jk" class="form-control" required="true">
                              <option value="">--- Jenis Kelamin ---</option>
                              <option value="L">Laki-laki</option>
                              <option value="P">Perempuan</option>
                          </select>
                        </div>
                    </div>
                   </div>
                   <div class="col col-md-6"> 
                    <div class="form-group">
                      <label for="t_lh" class="labelfrm">* Tempat Lahir</label>
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1"><span class="fa fa-map-marker"></span></span>
                          <input id="t_lh" class="form-control" type="text" name="t_lh" required="true" autocomplete="off">
                        </div>
                    </div>
                   </div>
                </div>

                <div class="row form-group"> 
                   <div class="col col-md-6"> 
                    <div class="form-group">
                      <label for="tgl_lh" class="labelfrm">* Tanggal Lahir</label>
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1"><span class="fa fa-calendar"></span></span>
                          <input id="tgl_lh" class="form-control" type="date" name="tgl_lh" required="true" autocomplete="off">
                        </div>
                    </div>
                   </div>
                   <div class="col col-md-6"> 
                    <div class="form-group">
                      <label for="us" class="labelfrm">* Usia</label>
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1"><span class="fa fa-unsorted"></span></span>
                          <input id="us" class="form-control" type="text" name="us" required="true" autocomplete="off" onkeypress="return mungAngka(event)">
                        </div>
                    </div>
                   </div>
                </div>

                <div class="row form-group"> 
                   <div class="col col-md-6"> 
                    <div class="form-group">
                      <label for="sts_prkw" class="labelfrm">* Status (Perkawinan)</label>
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1"><span class="fa fa-certificate"></span></span>
                          <select name="sts_prkw" id="sts_prkw" class="form-control" required="true">
                              <option value="">--- Status Perkawinan ---</option>
                              <option value="Kawin">Kawin</option>
                              <option value="Belum">Belum</option>
                          </select>
                        </div>
                    </div>
                   </div>
                   <div class="col col-md-6"> 
                    <div class="form-group">
                      <label for="pndd" class="labelfrm">* Pendidikan</label>
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1"><span class="fa fa-archive"></span></span>
                          <select name="pndd" id="pndd" class="form-control" required="true">
                              <option value="">--- Pendidikan Terakhir ---</option>
                              <option value="SMA/SMK">SMA/SMK</option>
                              <option value="Diploma 1 (D1)">Diploma 1 (D1)</option>
                              <option value="Diploma 2 (D2)">Diploma 2 (D2)</option>
                              <option value="Diploma 3 (D3)">Diploma 3 (D3)</option>
                              <option value="Strata 1 (S1)/Diploma 4 (D4)">Strata 1 (S1) / Diploma 4 (D4)</option>
                              <option value="Strata 2 (S2)">Strata 2 (S2)</option> 
                              <option value="Strata 3 (S3)">Strata 3 (S3)</option>
                          </select>
                        </div>
                    </div>
                   </div>
                </div>

                <div class="row form-group"> 
                   <div class="col col-md-6"> 
                    <div class="form-group">
                      <label for="pkj" class="labelfrm">* Pekerjaan</label>
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1"><span class="fa fa-briefcase"></span></span>
                          <input id="pkj" class="form-control" type="text" name="pkj" required="true" autocomplete="off">
                        </div>
                    </div>
                   </div>
                   <div class="col col-md-6"> 
                    <div class="form-group">
                      <label for="agm" class="labelfrm">* Agama</label>
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1"><span class="fa fa-circle"></span></span>
                          <select name="agm" id="agm" class="form-control" required="true">
                              <option value="">--- Agama ---</option>
                              <option value="Islam">Islam</option>
                              <option value="Kristen">Kristen</option>
                              <option value="Katolik">Katolik</option>
                              <option value="Hindu">Hindu</option>
                              <option value="Budha">Budha</option>
                              <option value="Konghuchu">Konghuchu</option> 
                              <option value="Lain-lain">Lain-lain</option>
                          </select>
                        </div>
                    </div>
                   </div>
                </div>

                <div class="row form-group"> 
                   <div class="col col-md-6"> 
                    <div class="form-group">
                      <label for="almt" class="labelfrm">* Alamat</label>
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1"><span class="fa fa-home"></span></span>
                          <input id="almt" class="form-control" type="text" name="almt" required="true" autocomplete="off">
                        </div>
                    </div>
                   </div>
                   <div class="col col-md-6"> 
                    <div class="form-group">
                      <label for="hp_tlp" class="labelfrm">* Nomor Telp./Hp</label>
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1"><span class="fa fa-phone"></span></span>
                          <input id="hp_tlp" class="form-control" type="text" name="hp_tlp" required="true" autocomplete="off">
                        </div>
                    </div>
                   </div>
                </div>

                <div class="row form-group"> 
                   <div class="col col-md-6"> 
                    <div class="form-group">
                      <label for="email" class="labelfrm">Email</label>
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1"><span class="fa fa-envelope-o"></span></span>
                          <input id="email" class="form-control" type="text" name="email" autocomplete="off">
                        </div>
                    </div>
                   </div>
                   <div class="col col-md-6"> 
                    <div class="form-group">
                      <label for="medsos" class="labelfrm">Media Sosial</label>
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1"><span class="fa fa-comments-o"></span></span>
                          <input id="medsos" class="form-control" type="text" name="medsos" autocomplete="off">
                        </div>
                    </div>
                   </div>
                </div>

                <div class="row form-group"> 
                   <div class="col col-md-6"> 
                    <div class="form-group">
                      <label for="rwy_sakit" class="labelfrm">Riwayat Sakit</label>
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1"><span class="fa fa-stethoscope"></span></span>
                          <input id="rwy_sakit" class="form-control" type="text" name="rwy_sakit" autocomplete="off">
                        </div>
                    </div>
                   </div>
                   <div class="col col-md-6"> 
                    <div class="form-group">
                      <label for="ket" class="labelfrm">Keterangan</label>
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1"><span class="fa fa-tag"></span></span>
                          <input id="ket" class="form-control" type="text" name="ket" autocomplete="off">
                        </div>
                    </div>
                   </div>
                </div>

                  <div class="modal-footer">
                    <div>
                        <p>(*) Wajib Diisi</p>
                    </div>
            <button type="submit" data-toggle="tooltip" data-placement="bottom" title="Simpan" class="btn btn-outline-primary">Simpan <i class="fa fa-check"></i></button></a>
            <button type="reset" data-toggle="tooltip" data-placement="bottom" title="Batal" class="btn btn-outline-danger" data-dismiss="modal">Batal <i class="fa fa-close"></i></button>
                  </div>
                </form>
            </div>

            <!-- Modal Footer --> 
        </div>
    </div>
</div>
<!-- //SCRIPT MODAL INPUT DATA -->  

<!-- SCRIPT MODAL IMPORT EXCEL -->  
<div class="modal fade" id="ModalImport" tabindex="-1" role="dialog" aria-labelledby="staticModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->  
            <div class="modal-header" style="background-color: #DDDDDD;">
                <h3 class="modal-title"  id="myModalLabel" style="text-align: center;">Import Data KPPS (Ms. Excel) <i class="fa fa-upload"></i></h3>
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Tutup</span>
                </button>
            </div>
            <!-- Modal Body --> 
            <div class="modal-body">
                <p class="statusMsg"></p>
                <form role="form" id="FormValidation" method="post" enctype="multipart/form-data" action="upload-aksi.php?id_tgl=<?php echo $ID_TGL;?>">
                    
                    <div class="form-group">
                      <label for="import_excel" class="labelfrm">Import Ms. Excel</label>
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1"><span class="fa fa-upload"></span></span>
                          <input id="import_excel" class="form-control" type="file" name="import_excel" required="true" autocomplete="off">
                        </div>
                    </div>

                    <div class="form-group">
                        <p><b>1.</b> Format File Ms. Excel harus <b>(.xls)</b> atau <b>(Simpan Ms. Excel 97-2003 Workbook)</b>.</p>
                        <p><b>2.</b> Data yang tersimpan pada Excel maksimal <b>200 Baris/row</b>.</p>
                        <p><b>3.</b> Jika data lebih dari 200 baris tidak semua <b>data bisa terimport</b>.</p>
                        <p><b>4.</b> Semua kolom/cell dalam Ms. Excel harus terisi semua, jika kosong <b>isi dengan strip (-)</b>.</p>
                        <p><b>5.</b> Sesuaikan dengan format Ms. Excel yang diberikan Developer.</p>
                    </div>
                    
                  <div class="modal-footer">
            <button type="submit" data-toggle="tooltip" data-placement="bottom" title="Import" class="btn btn-outline-primary">Import <i class="fa fa-check"></i></button>
            <button type="reset" data-toggle="tooltip" data-placement="bottom" title="Batal" class="btn btn-outline-danger" data-dismiss="modal">Batal <i class="fa fa-close"></i></button>
                  </div>
                </form>
            </div>

            <!-- Modal Footer --> 
        </div>
    </div>
</div>
<!-- //SCRIPT MODAL IMPORT TANGGAL --> 
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
