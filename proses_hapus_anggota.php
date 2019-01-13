<?php
include("config.php");
$kode = $_GET['kode'];

	$hapus = mysql_query("delete from anggota where username = '$kode'");
	if($hapus) {
		echo "<script> alert('Data Berhasil DIHAPUS!!'); location = 'home.php?page=tampil_anggota.php'; </script>";
 	} else {
		echo "<script> alert('Data Gagal DIHAPUS!!'); location = 'home.php?page=tampil_anggota.php'; </script>";
	}
?>