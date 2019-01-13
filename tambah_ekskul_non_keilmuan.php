<?php 
  include('config.php');
  $tanggal = date("Y-m-d");
  $judul = mysql_query("SELECT * from berita");
  if($_SESSION['username'] == "admin"){
    ?>
    <div class="form-style-10">
      <h1>TAMBAH EKSTRAKULIKULER NON KEILMUAN<span>Silahkan isi form di bawah ini untuk menambah Ekskul Non Keilmuan !</span></h1>
      <form method="post" action="proses_tambah_ekskul.php?kode=ekskul_non_keilmuan" enctype="multipart/form-data">
        <div class="section"><span>1</span>Username &amp; Password</div>
        <div class="inner-wrap">
            <label>Kode Ekskul <input type="text" name="kode"></label>
            <label>Nama Ekskul <input type="text" name="nama" /></label>
            <label>Tentang <textarea rows="20" name="tentang"></textarea></label>
            <label>Struktur <textarea rows="20" name="struktur"></textarea></label>
            <label>Jadwal <textarea rows="20" name="jadwal"></textarea></label>
            <label>Gambar 1 <input type="file" name="image1"></label>
            <label>Gambar 2 <input type="file" name="image2"></label>
            <label>Gambar 3 <input type="file" name="image3"></label>
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