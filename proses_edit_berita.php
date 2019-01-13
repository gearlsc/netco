<?php
	include("config.php");
		$target = "gambar/berita/".basename($_FILES['image']['name']);
		$kode = $_GET ['kode'];
		$tanggal= $_POST['tanggal'];
		$gambar = $_FILES['image']['name'];
		$judul	= $_POST['judul'];
		$category = $_POST['category'];
		$isi	= $_POST['isi'];

		/*echo $tanggal,$gambar,$judul,$category,$isi;*/
	if (empty($judul) || empty($isi)){
		echo "<script> alert('Harap isi Field yang kosong');location ='home.php?page=tambah_rule.php' </script>";
	}
	else {
		move_uploaded_file($_FILES['image']['tmp_name'],$target);
		mysql_query ("UPDATE berita set judul_berita='$judul', category_berita='$category', isi_berita='$isi', gbr_berita='$gambar' where kode_berita = '$kode '");
		echo "<script> alert('UPDATE Berita SUKSES!!'); location = 'index.php'; </script>";
	}
		
?>