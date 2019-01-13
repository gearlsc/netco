<?php
	  $eks = $_GET['eks'];
	  $jeks = $_GET['jeks'];
	  $judul = $_GET['judul'];
      $sql = mysql_fetch_array(mysql_query("SELECT * from $eks where kode_ekskul='$jeks'"));
      if(!isset($_SESSION['username'])){
           	echo "<script> alert('Anda Harus Login Untuk Mengakses Halaman Ini !');location ='index.php' </script>";
        }
      elseif (isset($_SESSION['username'])){
?>

<h2 align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	&nbsp;&nbsp;&nbsp; Ekstrakulikuler <?php echo $sql['nama_ekskul']; ?> </h2>
<div class="ekskul">
<ul>
	<li><a href="home.php?page=tampil_ekskul.php&eks=<?php echo $eks; ?>&judul=tentang&jeks=<?php echo $sql['kode_ekskul']; ?>">TENTANG EKSKUL</a></li>
	<li><a href="home.php?page=tampil_ekskul.php&eks=<?php echo $eks; ?>&judul=struktur&jeks=<?php echo $sql['kode_ekskul']; ?>">STRUKTUR</a></li>
	<li><a href="home.php?page=tampil_ekskul.php&eks=<?php echo $eks; ?>&judul=jadwal&jeks=<?php echo $sql['kode_ekskul']; ?>">JADWAL</a></li>
</ul>
</div>


<div class="clear"></div>

<p></p>
<div class="wrap-ekskul">
<p align="justify" style="font-size: 20px;">

<?php

	if ($judul == "tentang") {
		echo "<h1>TENTANG EKSKUL</h1><p align='justify' style='font-size:20px;'><br><br>";
		echo nl2br($sql['tentang_ekskul']); 
		echo "</p>";
	}
	elseif ($judul == "struktur") {
		echo "<h1>STRUKTUR</h1><p align='justify' style='font-size:20px;'><br><br>";
		echo nl2br($sql['struktur']); 
		echo "</p>";
	}
	elseif ($judul == "jadwal") {
		echo "<h1>JADWAL</h1><p align='justify' style='font-size:20px;'><br><br>";
		echo nl2br($sql['jadwal']); 
		echo "</p>";
	}


?>

</p>
</div>

<h4>Foto Ekstrakulikuler <?php echo $sql['nama_ekskul']; ?></h4>
<div class="wrap-slide">
  <?php echo "<img id='top-slide' class='mySlides' style='width:400px'  src='gambar/$eks/".$sql['img1']."' >"; ?>
  <?php echo "<img id='top-slide' class='mySlides' style='width:400px'  src='gambar/$eks/".$sql['img2']."' >"; ?>
  <?php echo "<img id='top-slide' class='mySlides' style='width:400px'  src='gambar/$eks/".$sql['img3']."' >"; ?>

  <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
  <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
</div>
<?php 
	}
?>


<style type="text/css">
	.wrap-ekskul{
		width: 750px;
		float: left;
		margin: 20px;
	}
	.ekskul {
		border-radius: 10px;
		width: 100%;
		float: left;
		background-color: grey;
	}
	.ekskul ul {
	margin: 0px;
	}

	.ekskul ul li ul {
		display: none;
	}
	.ekskul ul li {
		float:left;
		border-right: solid 2px black;
		list-style: none;
	}

	.ekskul ul li a{ /* font untuk teks navbar */
		color: white;
		display:block;
	    font: 15px arial, verdana, sans-serif;
	    font-weight: bold;
	    padding: 26.5px 20px;
	    text-decoration: none;
	}

	.ekskul ul li a:hover{
		background-color: white; /*warna navbar saat hover */
		color:black;
		-webkit-transition: all 0.4s ease-out;   /*membuat efek transisi warna */
	    -moz-transition: all 0.4s ease-out;
	    -ms-transition: all 0.4s ease-out;
	    -o-transition: all 0.4s ease-out;
	    transition: all 0.4s ease-out;

	}

	.ekskul ul li:hover ul{ /*menampilkan anak navbar*/
		display:block;
		background-color: #778899;
	    padding: 3px 0px 0px 3px;
	    width: 160px;
	    position: absolute; /*agar ukuran navbar tidak berubah saat hover */
	}

	.ekskul ul li:hover ul li a{
		color:black;
	}	

	.ekskul ul li:hover ul li {
		border: none; /*garis putih anak navbar hilang */
		float: none;  /*urutan anak navbar mengurut ke bawah */
	}

	.ekskul ul li:hover ul li a{
		background-color: white;
		padding:10px;
	}

	.ekskul ul li:hover ul li a:hover{
		background-color: black;
		color: white; 
		-webkit-transition: all 0.4s ease-out;   /*membuat efek transisi warna */
	    -moz-transition: all 0.4s ease-out;
	    -ms-transition: all 0.4s ease-out;
	    -o-transition: all 0.4s ease-out;
	     transition: all 0.4s ease-out;
	}


	.mySlides{
	 margin-top: 20px;
	}

	.wrap-slide{
	  box-shadow: 0px 0px 30px black;
	  width: 400px;
	  float: left;
	  margin-left: 20px;
	}
</style>

<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
</script>