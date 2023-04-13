<?php
	include "../koneksi.php";
$NO=$_GET['No'];

$sql="select id_tgl from dt_pps WHERE No='$NO'";
$query=mysql_query($sql);
while ($data = mysql_fetch_array($query)) {
	$ID_TGL=$data['id_tgl'];	

$sql1="delete from dt_pps where No='$NO'";
$query1=mysql_query($sql1);

if($query1){		
header('location:../../data-pps.php?id_tgl='.$ID_TGL.'');
	}else{
		echo "Data Gagal Dihapus!";
	}
}
?>