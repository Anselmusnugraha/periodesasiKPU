<?php
	include "../koneksi.php";
$ID_TGL=$_GET['id_tgl'];

$sql="delete from tgl_dft_kpps where id_tgl='$ID_TGL'";
$query=mysql_query($sql);

if($query){		
header('location:../../inp-kpps.php');
	}else{
		
echo "Data Gagal Dihapus!";
	}

?>