<?php 
include("config.php");
$sql = mysql_query("SELECT * from ekskul_keilmuan");
$record = "registrasi_keilmuan.php";
        if(!isset($_SESSION['username'])){
            $username ="";
            echo "<script> alert('Hanya Admin yang bisa mengakses halaman');location ='index.php' </script>";
        }
        if(isset($_SESSION['username'])){
            $username = $_SESSION['username'];
            if($username != "admin"){
            echo "<script> alert('Anda Harus Login Untuk Mengakses Halaman Ini !');location ='index.php' </script>";
            }
            else {          
?>

<div class="form-style-10">
<h1>Pendaftaran Ekstrakulikuler Keilmuan NETCO<span>Silahkan isi form di bawah ini !</span></h1>
<form method="post" action="proses_registrasi.php?kode=<?php echo $record;?>">
    <div class="section"><span>1</span>Username &amp; Password</div>
    <div class="inner-wrap">
        <label>username <input type="text" name="username" /></label>
        <label>password <input type="password" name="password" /></label>
    </div>

    <div class="section"><span>2</span>Personal information</div>
    <div class="inner-wrap">
        <label>Nama <input type="text" name="nama" /></label>
        <label>Nomor HP <input type="text" name="nomorhp" /></label>
        <label>Email<input type="text" name="email" /></label>
        <label>Jenis Kelamin
          <select name="jk">
            <option value="Laki - Laki">Laki - Laki</option>
            <option value="Perempuan">Perempuan</option>
          </select>
        </label>
        <label>Ekskul<input type="text" name="ekskul" value="Ekstrakulikuler Keilmuan" readonly></label>
        <label>Jenis Ekskul
          <select name="jenis_ekskul">
            <?php 
              while($d = mysql_fetch_array($sql)){
              echo "<option value=$d[nama_ekskul]>$d[nama_ekskul]</option>";
            }
            ?>
          </select>
        </label>
    </div>
    <div class="button-section">
     <input type="submit" name="Sign Up" />
     <span class="privacy-policy">
     You agree to our Terms and Policy. 
     </span>
    </div>
</form>
</div>
<?php
}
  }
?>