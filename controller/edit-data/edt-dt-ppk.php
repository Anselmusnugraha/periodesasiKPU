<?php
	include '../koneksi.php';
	
/*Edit Data PPK*/
$NO=$_GET['No'];
$KECAMATAN=$_GET['kcmt'];
$JABATAN=$_GET['jbtn'];
$NAMA=$_GET['nm'];
$NIK=$_GET['nik'];
$JK=$_GET['jk'];
$TMP_LH=$_GET['t_lh'];
$TGL_LH=$_GET['tgl_lh']; 

$USIA=$_GET['us'];
$PENDIDIKAN=$_GET['pndd'];
$PEKERJAAN=$_GET['pkj'];
$ALAMAT=$_GET['almt'];
$NO_TELP=$_GET['hp_tlp'];
$EMAIL=$_GET['email'];
$MEDSOS=$_GET['medsos'];
$RWY_SAKIT=$_GET['rwy_sakit'];
$KET=$_GET['ket'];

$sql="select id_tgl from dt_ppk WHERE No='$NO'";
$query=mysql_query($sql);
while ($data = mysql_fetch_array($query)) {
	$ID_TGL=$data['id_tgl'];

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
		$sql1="update dt_ppk SET kcmt='$KECAMATAN', jbtn='$JABATAN', nm='$NAMA', nik='$NIK', jk='$JK', t_lh='$TMP_LH', tgl_lh='$TGL_LH', us='$USIA', pndd='$PENDIDIKAN', pkj='$PEKERJAAN', almt='$ALAMAT', hp_tlp='$NO_TELP', email='$EMAIL', medsos='$MEDSOS', rwy_sakit='$RWY_SAKIT', ket='$KET' where No='$NO'";
		$query1=mysql_query($sql1);

		if ($query1) {
			header('location:../../data-ppk.php?id_tgl='.$ID_TGL.'');
		}else{
			echo "Data Gagal Diubah !";
		}
	}
}
 ?>