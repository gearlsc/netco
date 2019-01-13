<?php
	include("config.php");
		$a	= $_GET['kode'];

		$target1 = "gambar/$a/".basename($_FILES['image1']['name']);
		$target2 = "gambar/$a/".basename($_FILES['image2']['name']);
		$target3 = "gambar/$a/".basename($_FILES['image3']['name']);
		
		$kode	 = $_POST['kode'];
		$nama 	 = $_POST['nama'];
		$tentang = $_POST['tentang'];
		$struktur= $_POST['struktur'];
		$jadwal	 = $_POST['jadwal'];

		$gambar1 = $_FILES['image1']['name'];
		$gambar2 = $_FILES['image2']['name'];
		$gambar3 = $_FILES['image3']['name'];
		

		/*echo $tanggal,$gambar,$judul,$category,$isi;*/
		if (empty($kode) || empty($nama)){
			echo "<script> alert('Harap isi Field yang kosong');location ='index.php' </script>";
		}
		else{
		move_uploaded_file($_FILES['image1']['tmp_name'],$target1);
		move_uploaded_file($_FILES['image2']['tmp_name'],$target2);
		move_uploaded_file($_FILES['image3']['tmp_name'],$target3);
		mysql_query("INSERT INTO $a (kode_ekskul, nama_ekskul, tentang_ekskul, struktur, jadwal, img1, img2, img3) values ('$kode','$nama','$tentang','$struktur','$jadwal','$gambar1','$gambar2','$gambar3')");
			echo "<script> alert('Ekskul berhasil di tambah !');location ='index.php' </script>";
		}
		?>