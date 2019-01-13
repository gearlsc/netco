  
    <?php
      $judul = mysql_query("SELECT * from berita order by tanggal_berita desc");
      while($record=mysql_fetch_array($judul)){
      ?>
      <div class="item">
        <div class="image">
          <div>
          <img src="gambar/logo.jpg" />
          <div><?php echo nl2br($record['tanggal_berita']); ?></div>
          </div>
      </div>
      <div class="details">
        <div>
            <?php  if(!isset($_SESSION['username'])){
                      $username ="";
                    }
                   if(isset($_SESSION['username'])){
                      $username = $_SESSION['username'];
                    }
                    if($username == "admin"){
              ?>
                <h4 align='right'> <a href="home.php?page=edit_berita.php&kode=<?php echo $record['kode_berita']; ?>"> EDIT </a> | <a href="proses_hapus_berita.php?kode=<?php echo $record['kode_berita']; ?>" onclick="return confirm('Apakah kamu yakin ingin menghapus data ini ?');"> HAPUS </a> </h4>
              <?php
            }
            ?>


          <h1><?php echo $record['judul_berita']; ?></h1>
          <div align="left"><b><?php echo $record['category_berita']; ?></b></div><BR>
          <?php echo "<img src='gambar/berita/".$record['gbr_berita']."' >"; ?>
          <p align="justify"><?php echo nl2br($record['isi_berita']); ?></p>
        </div>
      </div>
      </div>
      <?php 
                      
    }
    ?>        
