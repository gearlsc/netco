<?php 
include('config.php');
session_start();
$_SESSION['username'] = "";
unset($_SESSION['username']);
print "<script>alert('Logout berhasil'); location = 'index.php'; </script>";

?>