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
$query = mysql_fetch_array(mysql_query("SELECT username FROM anggota WHERE username='$username'"));

//Seleksi field2 yang kosong
if (empty($username) || empty($password) || empty($nama) || empty($nomorhp) || empty($email) || empty($jk) || empty($ekskul) || empty($jenis_ekskul)){
	echo "<script> alert('Harap isi Field yang kosong');location ='home.php?page=$kode' </script>";
	}
elseif($query){
		echo "<script> alert('username telah dipakai');location ='home.php?page=$kode' </script>";
	}
elseif($username == "admin"){
echo "<script> alert('Anda tidak bisa mendaftar dengan username ADMIN !');location ='home.php?page=$kode' </script>";
}		
else{
	$sql = "insert anggota (nama, username, password, nomorhp, email, jk, ekskul, jenis_ekskul) VALUES ('$nama', '$username', '$password', '$nomorhp', '$email', '$jk', '$ekskul', '$jenis_ekskul')";
	}
	
$hasil = mysql_query($sql, $koneksi);	
if ($hasil){
	echo "<script> alert('Selamat. Anda telah terdaftar'); location = 'home.php?page=$kode'; </script>";
	}
else{
	echo "<script> alert('Data Gagal Di SImpan'); location = 'home.php?page=$kode'; </script>";
	}	
?>