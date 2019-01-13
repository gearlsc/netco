<?php
	include("config.php");
		$a	= $_GET['kode'];
		$eks = $_GET['eks'];

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
		if (empty($kode)){
			echo "<script> alert('Harap isi Field yang kosong');location ='index.php' </script>";
		}
		else{
		move_uploaded_file($_FILES['image1']['tmp_name'],$target1);
		move_uploaded_file($_FILES['image2']['tmp_name'],$target2);
		move_uploaded_file($_FILES['image3']['tmp_name'],$target3);
		mysql_query("UPDATE $a SET kode_ekskul = '$kode', nama_ekskul = '$nama', tentang_ekskul = '$tentang', struktur = '$struktur', jadwal = '$jadwal', img1 = '$gambar1', img2 = '$gambar2', img3 = '$gambar3' where kode_ekskul = '$eks' ");
			echo "<script> alert('Ekskul Berhasil di Update');location ='index.php' </script>";
		}
		?>