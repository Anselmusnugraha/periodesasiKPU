<?php
	include '../koneksi.php';
	
/*Edit Tanggal Pendaftaran KPPS*/
$ID_TGL=$_GET['id_tgl'];
$TGL=$_GET['tgl_inp'];

	if (empty($ID_TGL)){ 
	echo "<script>alert('Id Tanggal Kosong!')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../../inp-pps.php'>"; }
	elseif (empty($TGL)) {
	echo "<script>alert('Tanggal belum diisi!')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../../inp-pps.php'>";}
	else{

		$sql="update tgl_dft_pps SET tgl_inp='$TGL' where id_tgl='$ID_TGL'";
		$query=mysql_query($sql);

		if ($query) {
			header('location:../../inp-pps.php');
		}else{
			echo "Data Gagal Diubah !";
		}
	}
 ?>