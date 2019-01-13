<?php
include("config.php");
$kode = $_GET['kode'];

	$hapus = mysql_query("delete from berita where kode_berita = '$kode'");
	if($hapus) {
		echo "<script> alert('Data Berhasil DIHAPUS!!'); location = 'home.php?page=berita.php'; </script>";
 	} else {
		echo "<script> alert('Data Gagal DIHAPUS!!'); location = 'home.php?page=berita.php'; </script>";
	}
?>