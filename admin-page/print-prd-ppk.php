 <?php
/* 
-- --------------------------------------------------------
-- --------------------------------------------------------
-- Nama File : cetak-Periodesasi 
-- Author    : Ans Nugraha 
-- Email     : anseynugraha@gmail.com
-- Copyright [c] 2020 Ans Nugg 
-- --------------------------------------------------------
*/
 
	header("Content-Type: application/force-download");
	header("Cache-Control: no-cache, must-revalidate");
	header("Expires: Sat, 26 Jul 2010 05:00:00 GMT"); 
	header("content-disposition: attachment;filename=Periodesasi-PPK".date('d/m/Y').".xls");

	include 'controller/koneksi.php';
  session_start();
 ?>

 <table class="table table-bordered table-a" id="dataTable" width="100%" cellspacing="0" border="1">
              <thead>
                <tr>
                  <td colspan="8" align="center"><b>DATA PERIODESASI PPK</b></td>
                </tr>
                <tr>
                  <th>KECAMATAN</th>
                  <th>NAMA LENGKAP (TANPA GELAR)</th>
                  <th>NIK</th>
                  <th>JENIS KELAMIN (L/P)</th>
                  <th>JABATAN (KETUA/ANGGOTA)</th>
                  <th>USIA</th>
                  <th>TAHUN TERDAFTAR</th>
                </tr>
              </thead>

              <tbody>
          <?php 

			   $search = $_GET['src'];
		  	 $ktgr = $_GET['ktg'];	

         $sql = "SELECT dt_ppk.*, tgl_dft_ppk.tgl_inp FROM dt_ppk inner join tgl_dft_ppk on dt_ppk.id_tgl=tgl_dft_ppk.id_tgl WHERE $ktgr LIKE '%$search%'";
			   $query = mysql_query($sql);
			   if (mysql_num_rows($query) == 0) {
			    echo '<p></p><p>Pencarian tidak ditemukan</p>';
			   } else {
			    echo '<p></p>';
			    while ($row = mysql_fetch_array($query)) {
			            $TGL = $row['tgl_inp'];
			            $ForTGLPrd=date('Y', strtotime($TGL)); 
          ?> 
                <tr>
                  <td><?php echo $row['kcmt']; ?></td>
                  <td><?php echo $row['nm']; ?></td>
                  <td><?php echo $row['nik']; ?></td>
                  <td><?php echo $row['jk']; ?></td>
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
