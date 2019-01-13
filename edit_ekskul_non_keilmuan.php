<?php 
  include('config.php');
  $kode = $_GET ['kode'];
   $sql = mysql_fetch_array(mysql_query("SELECT * from ekskul_non_keilmuan where kode_ekskul='$kode'"));
  if($_SESSION['username'] == "admin"){
    ?>
    <div class="form-style-10">
      <h1>EDIT EKSTRAKULIKULER NON KEILMUAN<span>Silahkan isi form di bawah ini untuk mengedit Ekskul Non Keilmuan !</span></h1>
      <form method="post" action="proses_edit_ekskul.php?kode=ekskul_non_keilmuan&eks=<?php echo $sql['kode_ekskul'] ; ?>" enctype="multipart/form-data">
        <div class="section"><span>1</span>Username &amp; Password</div>
        <div class="inner-wrap">
            <label>Kode Ekskul <input type="text" name="kode" value="<?php echo $sql['kode_ekskul'] ; ?>"></label>
            <label>Nama Ekskul <input type="text" name="nama" value="<?php echo $sql['nama_ekskul'] ; ?>" /></label>
            <label>Tentang <textarea rows="20" name="tentang"><?php echo $sql['tentang_ekskul'] ; ?></textarea></label>
            <label>Struktur <textarea rows="20" name="struktur"><?php echo $sql['struktur'] ; ?></textarea></label>
            <label>Jadwal <textarea rows="20" name="jadwal"><?php echo $sql['jadwal'] ; ?></textarea></label>
            <label>Gambar 1 <input type="file" name="image1" ></label>
            <label>Gambar 2 <input type="file" name="image2" ></label>
            <label>Gambar 3 <input type="file" name="image3" ></label>
        </div>
        <div class="button-section">
          <input type="submit" name="submit" value="EDIT" />
          
        <span class="privacy-policy">
        You agree to our Terms and Policy. 
        </span>
        </div>
      </form>
    </div>
<?php 
  }
  else{
    echo "<script> alert('Hanya Admin yang bisa mengakses halaman ini !'); location = 'index.php'; </script>";
  }
?>