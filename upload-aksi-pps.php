<!-- import excel ke mysql -->

<?php 
// menghubungkan dengan koneksi
include 'controller/koneksi.php';
$ID_TGL=$_GET['id_tgl'];
// menghubungkan dengan library excel reader
include "excel_reader2.php";
?>

<?php
$ID_TGL=$_GET['id_tgl'];
// upload file xls
$target = basename($_FILES['import_excel']['name']) ;
move_uploaded_file($_FILES['import_excel']['tmp_name'], $target);

// beri permisi agar file xls dapat di baca
chmod($_FILES['import_excel']['name'],0777);

// mengambil isi file xls
$data = new Spreadsheet_Excel_Reader($_FILES['import_excel']['name'],false);
// menghitung jumlah baris data yang ada
$jumlah_baris = $data->rowcount($sheet_index=0);

// jumlah default data yang berhasil di import
$berhasil = 0;
for ($i=2; $i<=$jumlah_baris; $i++){

	// menangkap data dan memasukkan ke variabel sesuai dengan kolumnya masing-masing
	$ID_TGL=$_GET['id_tgl'];
	$kcmt      = $data->val($i, 1);
	$ds_kel    = $data->val($i, 2);
	$jbtn      = $data->val($i, 3);
	$nm        = $data->val($i, 4);
	$nik       = $data->val($i, 5);
	$jk        = $data->val($i, 6);
	$t_lh      = $data->val($i, 7);
	$tgl_lh    = $data->val($i, 8);
	$us        = $data->val($i, 9);
	$pndd      = $data->val($i, 10);
	$pkj       = $data->val($i, 11);
	$almt      = $data->val($i, 12);
	$hp_tlp    = $data->val($i, 13);
	$email     = $data->val($i, 14);
	$medsos    = $data->val($i, 15);
	$rwy_sakit = $data->val($i, 16);
	$ket	   = $data->val($i, 17);

	if($ID_TGL != "" && $kcmt != "" && $ds_kel != "" && $jbtn != "" && $nm != "" && $nik != "" && $jk != "" && $t_lh != "" && $tgl_lh != "" && $us != "" && $pndd != "" && $pkj != "" && $almt != "" && $hp_tlp != "" && $email != "" && $medsos != "" && $rwy_sakit != "" && $ket != ""){
		// input data ke database (table data_ppk)
		mysql_query("INSERT into dt_pps values('','$ID_TGL','$kcmt','$ds_kel','$jbtn','$nm','$nik','$jk','$t_lh','$tgl_lh','$us','$pndd','$pkj','$almt','$hp_tlp','$email','$medsos','$rwy_sakit','$ket')");
		$berhasil++;
	}
}

// hapus kembali file .xls yang di upload tadi
unlink($_FILES['import_excel']['name']);

// alihkan halaman ke data-ppk.php
header("location:data-pps.php?berhasil=$berhasil&id_tgl=$ID_TGL"); 
?>