<?php 
  $kode = $_GET ['kode'];
  $sql = mysql_fetch_array(mysql_query("SELECT * from berita where kode_berita='$kode'"));
  if($_SESSION['username'] == "admin"){
    ?>
    <div class="form-style-10">
      <h1>Berita<span>Silahkan isi form di bawah ini untuk menambah berita !</span></h1>
      <form method="post" action="proses_edit_berita.php?kode=<?php echo $kode; ?>" enctype="multipart/form-data">
        <div class="section"><span>1</span>Username &amp; Password</div>
        <div class="inner-wrap">
            <label>Tanggal <input type="text" name="tanggal" value="<?php echo $sql['tanggal_berita'] ; ?>" readonly></label>
            <label>Gambar <input type="file" name="image"></label>
            <label>Judul <input type="text" name="judul" value="<?php echo $sql['judul_berita'] ; ?>" /></label>
            <label>Category <input type="text" name="category" value="<?php echo $sql['category_berita'] ; ?>"/></label>
            <label>Isi <textarea rows="20" name="isi" ><?php echo $sql['isi_berita'] ; ?></textarea></label>
        </div>
        <div class="button-section">
          <input type="submit" name="submit" />
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