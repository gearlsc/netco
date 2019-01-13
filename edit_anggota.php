<?php 
include("config.php");
$kode = $_GET ['kode'];
$sql2 = mysql_fetch_array(mysql_query("SELECT * from anggota where username='$kode'"));
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
<h1>Edit Anggota <span>Silahkan isi form di bawah ini !</span></h1>
<form method="post" action="proses_edit_anggota.php?kode=<?php echo $sql2['username'];?>">
    <div class="section"><span>1</span>Username &amp; Password</div>
    <div class="inner-wrap">
        <label>username <input type="text" name="username" value="<?php echo $sql2['username'] ; ?>"/></label>
        <label>password <input type="text" name="password" value="<?php echo $sql2['password'] ; ?>"/></label>
    </div>

    <div class="section"><span>2</span>Personal information</div>
    <div class="inner-wrap">
        <label>Nama <input type="text" name="nama" value="<?php echo $sql2['nama'] ; ?>"/></label>
        <label>Nomor HP <input type="text" name="nomorhp" value="<?php echo $sql2['nomorhp'] ; ?>"/></label>
        <label>Email<input type="text" name="email" value="<?php echo $sql2['email'] ; ?>"/></label>
        <label>Jenis Kelamin
          <select name="jk">
            <option value="Laki - Laki">Laki - Laki</option>
            <option value="Perempuan">Perempuan</option>
          </select>
        </label>
        <label>Ekskul<input type="text" name="ekskul" value="<?php echo $sql2['ekskul'] ; ?>" readonly></label>
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