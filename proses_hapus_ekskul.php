<?php
include("config.php");
$kode = $_GET['kode'];
$page = $_GET['page'];

	$hapus = mysql_query("delete from $page where kode_ekskul = '$kode'");
	if($hapus) {
		echo "<script> alert('Data Berhasil DIHAPUS!!'); location = 'index.php'; </script>";
 	} else {
		echo "<script> alert('Data Gagal DIHAPUS!!'); location = 'index.php'; </script>";
	}
?>