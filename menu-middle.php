<?php

	if(!isset($_SESSION['username'])){
       $username ="";
    }
    if(isset($_SESSION['username'])){
    	$username = $_SESSION['username'];
    }
    if($username == "admin"){
?>
<a id="middle1" href="home.php?page=tambah_gejala.php">tambah gejala<br><br><br><img src="gambar/middle1.png"></a>
<a id="middle2" href="home.php?page=tambah_kerusakan.php">tambah kerusakan<br><br><br><img src="gambar/middle1.png"></a>
<a id="middle3" href="home.php?page=tambah_rule.php">tambah rule<br><br><br><img src="gambar/middle1.png"></a>
<?php
	}
?>