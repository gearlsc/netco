<?php 
  error_reporting(0);
  include('config.php');
  $tanggal = date("Y-m-d");
  $judul = mysql_query("SELECT * from berita");
  if($_SESSION['username'] == "admin"){
    ?>
    <div class="form-style-10">
      <h1>Berita<span>Silahkan isi form di bawah ini untuk menambah berita !</span></h1>
      <form method="post" action="proses_tambah_berita.php" enctype="multipart/form-data">
        <div class="section"><span>1</span>Username &amp; Password</div>
        <div class="inner-wrap">
            <label>Tanggal <input type="text" name="tanggal" value="<?php echo $tanggal; ?>" readonly></label>
            <label>Gambar <input type="file" name="image"></label>
            <label>Judul <input type="text" name="judul" /></label>
            <label>Category <input type="text" name="category" /></label>
            <label>Isi <textarea rows="20" name="isi"></textarea></label>
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