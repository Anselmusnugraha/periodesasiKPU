<?php
	include "../koneksi.php";
/*INPUT DATA PPK*/
$ID_TGL=$_POST['id_tgl'];
$NO=$_POST['No'];
$KECAMATAN=$_POST['kcmt'];
$JABATAN=$_POST['jbtn'];
$NAMA=$_POST['nm'];
$NIK=$_POST['nik'];
$JK=$_POST['jk'];
$TMP_LH=$_POST['t_lh'];
$TGL_LH=$_POST['tgl_lh']; 

$USIA=$_POST['us'];
$PENDIDIKAN=$_POST['pndd'];
$PEKERJAAN=$_POST['pkj'];
$ALAMAT=$_POST['almt'];
$NO_TELP=$_POST['hp_tlp'];
$EMAIL=$_POST['email'];
$MEDSOS=$_POST['medsos'];
$RWY_SAKIT=$_POST['rwy_sakit'];
$KET=$_POST['ket'];

	if (empty($ID_TGL)){ 
	echo "<script>alert('Id Tanggal Kosong!')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../../data-ppk.php?id_tgl='.$ID_TGL.''>";}
	elseif (empty($NO)){
	echo "<script>alert('Nomor Kosong!')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../../data-ppk.php?id_tgl='.$ID_TGL.''>";}
	elseif (empty($KECAMATAN)){
	echo "<script>alert('Kecamatan Belum Diisi!')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../../data-ppk.php?id_tgl='.$ID_TGL.''>";}
	elseif (empty($JABATAN)){
	echo "<script>alert('Jabatan Belum Diisi!')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../../data-ppk.php?id_tgl='.$ID_TGL.''>";}
	elseif (empty($NAMA)){
	echo "<script>alert('Nama Belum Diisi!')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../../data-ppk.php?id_tgl='.$ID_TGL.''>";}
	elseif (empty($NIK)){
	echo "<script>alert('NIK Belum Diisi!')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../../data-ppk.php?id_tgl='.$ID_TGL.''>";}
	elseif (empty($JK)){
	echo "<script>alert('Jenis Kelamin Belum Diisi!')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../../data-ppk.php?id_tgl='.$ID_TGL.''>";}
	elseif (empty($TMP_LH)){
	echo "<script>alert('Tempat Lahir Belum Diisi!')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../../data-ppk.php?id_tgl='.$ID_TGL.''>";}
	elseif (empty($TGL_LH)){
	echo "<script>alert('Tanggal Lahir Belum Diisi!')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../../data-ppk.php?id_tgl='.$ID_TGL.''>";}
	elseif (empty($USIA)){
	echo "<script>alert('Usia Belum Diisi!')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../../data-ppk.php?id_tgl='.$ID_TGL.''>";}
	elseif (empty($PENDIDIKAN)){
	echo "<script>alert('Pendidikan Belum Diisi!')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../../data-ppk.php?id_tgl='.$ID_TGL.''>";}
	elseif (empty($PEKERJAAN)){
	echo "<script>alert('Pekerjaan Belum Diisi!')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../../data-ppk.php?id_tgl='.$ID_TGL.''>";}
	elseif (empty($ALAMAT)){
	echo "<script>alert('Alamat Belum Diisi!')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../../data-ppk.php?id_tgl='.$ID_TGL.''>";}
	elseif (empty($NO_TELP)){
	echo "<script>alert('Nomor Telepon Belum Diisi!')</script>"; 
	echo "<meta http-equiv='refresh' content='1 url=../../data-ppk.php?id_tgl='.$ID_TGL.''>";}
	else{
		$sql="insert into dt_ppk values ('$NO','$ID_TGL','$KECAMATAN','$JABATAN','$NAMA','$NIK','$JK','$TMP_LH','$TGL_LH','$USIA','$PENDIDIKAN','$PEKERJAAN','$ALAMAT','$NO_TELP','$EMAIL','$MEDSOS','$RWY_SAKIT','$KET')";
		$query=mysql_query($sql);

		if ($query) {
			header('location:../../data-ppk.php?id_tgl='.$ID_TGL.'');
		}else{
			echo $ID_TGL; 
			echo "<br>";
			echo $TGL;
			echo "<br>";
			echo "Data Gagal Disimpan !";
		}
	}
?>