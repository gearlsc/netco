<img class="logo" src="gambar/logo.jpg">
<img class="logo2" src="gambar/logo2.jpg">
<br>
<?php 
        include('config.php');
        session_start();
        if(!isset($_SESSION['username'])){
            include('login.php');
        }
        if(isset($_SESSION['username'])){
          $username = $_SESSION['username'];
          ?>        
                <form class="form-1" method="post" action="proses_logout.php">
                    <div class="field">
                        <input type="text" name="username" placeholder="<?php echo "Selamat Datang $username"; ?>" readonly>
                        <i class="fa fa-user"></i>
                    </div>
                    <div class="submit">
                        <button type="submit" name="submit"><i class="fa fa-user-times"></i></button>
                    </div>
                </form>
            <?php
        }

?>
<div class="clear"></div>
<div class="wrapper-header">
<ul class="menu cf">
    <li><a href="index.php">Home</a></li>
    <li>
        <a href="">Ekstrakulikuler Keilmuan</a>
        <ul class="submenu">
            <?php
                $judul = mysql_query("SELECT * from ekskul_keilmuan");
                while($record=mysql_fetch_array($judul)){
            ?>
            <li><a href="home.php?page=tampil_ekskul.php&eks=ekskul_keilmuan&judul=tentang&jeks=<?php echo $record['kode_ekskul']; ?>"><?php echo $record['nama_ekskul']; ?></a></li>
            <?php
                }
            ?>
        </ul>           
    </li>
    <li>
        <a href="">Ekstrakulikuler Non Keilmuan</a>
        <ul class="submenu">
            <?php
                $judul = mysql_query("SELECT * from ekskul_non_keilmuan");
                while($record=mysql_fetch_array($judul)){
            ?>
            <li><a href="home.php?page=tampil_ekskul.php&eks=ekskul_non_keilmuan&judul=tentang&jeks=<?php echo $record['kode_ekskul']; ?>"><?php echo $record['nama_ekskul']; ?></a></li>
            <?php
                }
            ?>
        </ul>            
    </li>
    <li><a href="home.php?page=berita.php">Berita</a></li>
    <li>
        <a href="">Daftar</a>
        <ul class="submenu">
            <li><a href="home.php?page=registrasi_keilmuan.php">Keilmuan</a></li>
            <li><a href="home.php?page=registrasi_non_keilmuan.php">Non Keilmuan</a></li>
        </ul> 
    </li>
</ul>
</div>