<?php
include("config.php");
$kode			= $_GET['kode'];
$username		= $_POST['username'];
$password 		= $_POST['password'];
$nama			= $_POST['nama'];
$nomorhp		= $_POST['nomorhp'];
$email 			= $_POST['email'];
$jk 			= $_POST['jk'];
$ekskul 		= $_POST['ekskul'];
$jenis_ekskul 	= $_POST['jenis_ekskul'];


//cek username yang sama

//Seleksi field2 yang kosong
if (empty($username) || empty($password) || empty($nama) || empty($nomorhp) || empty($email) || empty($jk) || empty($ekskul) || empty($jenis_ekskul)){
	echo "<script> alert('Harap isi Field yang kosong');location ='home.php?page=$kode' </script>";
	}
elseif($username == "admin"){
echo "<script> alert('Anda tidak bisa mendaftar dengan username ADMIN !');location ='home.php?page=$kode' </script>";
}		
else{
	$sql = "UPDATE anggota set nama = '$nama', username = '$username', password = '$password', nomorhp = '$nomorhp', email = '$email', jk = '$jk', ekskul = '$ekskul', jenis_ekskul = '$jenis_ekskul' where username = '$kode'";
	}
	
$hasil = mysql_query($sql);	
if ($hasil){
	echo "<script> alert('Anggota Berhasil Di Edit'); location = 'home.php?page=tampil_anggota.php'; </script>";
	}
else{
	echo "<script> alert('Data Gagal Di SImpan');  </script>";
	}	
?>