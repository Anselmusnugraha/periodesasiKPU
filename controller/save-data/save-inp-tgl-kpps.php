<?php
	include "../koneksi.php";
/*INPUT TANGGAL*/
$ID_TGL=$_POST['id_tgl'];
$TGL=$_POST['tgl_inp'];

	if (empty($ID_TGL)){ 
	echo "<script>alert('Id Tanggal Kosong!')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../../inp-kpps.php'>"; }
	elseif (empty($TGL)){
	echo "<script>alert('Tanggal belum diisi!')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../../inp-kpps.php'>";}
	else{
		$sql="insert into tgl_dft_kpps values ('$ID_TGL','$TGL')";
		$query=mysql_query($sql);

		if ($query) {
			header('location:../../inp-kpps.php');
		}else{
			echo $ID_TGL; 
			echo "<br>";
			echo $TGL;
			echo "<br>";
			echo "Data Gagal Disimpan !";
		}
	}
?>