<?php
	include("config.php");
		$target = "gambar/berita/".basename($_FILES['image']['name']);

		$tanggal= $_POST['tanggal'];
		$gambar = $_FILES['image']['name'];
		$judul	= $_POST['judul'];
		$category = $_POST['category'];
		$isi	= $_POST['isi'];

		/*echo $tanggal,$gambar,$judul,$category,$isi;*/

		if (empty($gambar) || empty($judul) || empty($category) || empty($isi)){
			echo "<script> alert('Harap isi Field yang kosong');location ='home.php?page=berita.php' </script>";
		}
		elseif (move_uploaded_file($_FILES['image']['tmp_name'],$target)){
			mysql_query("INSERT INTO berita(tanggal_berita,gbr_berita,judul_berita,category_berita,isi_berita) values ('$tanggal','$gambar','$judul','$category','$isi')");
			echo "<script> alert('Berita berhasil di tambah !');location ='home.php?page=berita.php' </script>";
		}
?>