<?php
include("config.php");
$username = $_POST['username'];
$password = $_POST['password'];

session_start();
if (empty($username) || empty($password))
	{
		echo "<script> alert('username atau password harus di isi !!'); location = 'index.php'; </script>";
	}
else{
$sql = "SELECT * FROM admin WHERE username = '$username' AND password = '$password'";

$hasil = mysql_query($sql, $koneksi);
$record = mysql_fetch_array($hasil);


if($record['username'] == ""){
	echo "<script> alert('Maaf username atau password anda salah !!'); location = 'index.php'; </script>";
	exit();
	}

if($record['username']){
	$_SESSION['username'] = $username;
	echo "<script> alert('Selamat datang $username !!'); location = 'index.php'; </script>";
	
	}
}
  ?>