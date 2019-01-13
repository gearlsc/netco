<div class="wrap-slide">
  <img id="top-slide" class="mySlides" src="gambar/1.jpg" style="width:860px">
  <img class="mySlides" src="gambar/2.jpg" style="width:860px">
  <img class="mySlides" src="gambar/3.png" style="width:860px">
  <img class="mySlides" src="gambar/4.png" style="width:860px">
  <img id="bot-slide" class="mySlides" src="gambar/5.png" style="width:860PX">

  <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
  <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
</div>
 <?php  if(!isset($_SESSION['username'])){
            $username ="";
        }
        if(isset($_SESSION['username'])){
            $username = $_SESSION['username'];
        }
        if($username == "admin"){           
          ?>
            <div class="clear"></div>
            <br>
            <H1>HALAMAN ADMIN</H3>
            <a id="middle1" href="home.php?page=tambah_ekskul_keilmuan.php"><br><br>TAMBAH EKSTRAKULIKULER KEILMUAN</a>
            <a id="middle1" href="home.php?page=tambah_ekskul_non_keilmuan.php"><br><br>TAMBAH EKSTRAKULIKULER NON KEILMUAN</a>
            <a id="middle1" href="home.php?page=tambah_berita.php"><br><br>TAMBAH BERITA</a>
            <a id="middle1" href="home.php?page=tampil_ekskul_keilmuan.php"><br><br>EDIT EKSTRAKULIKULER KEILMUAN</a>
            <a id="middle1" href="home.php?page=tampil_non_ekskul_keilmuan.php"><br><br>EDIT ESKTRAKULIKULER NON KEILMUAN</a>
            <a id="middle1" href="home.php?page=tampil_anggota.php"><br><br>EDIT ANGGOTA</a>


          <?php
  }
  else{
    ?>



    <div class="kiri">
      <h1>VISI DAN MISI</h1><BR>
      <h3 align="left">Visi : </h3>
      <p align="left"> 
      <ul align="left"><li>Memiliki sikap, perilaku dan budi pekerti yang mulia</li>
      <li>Menjadi pribadi yang kompetitif, berprestasi dan peduli lingkungan</li>
      </ul> 
      </p>
      <h3 align="left">Misi</h3>
      <p align="left"> 
      <ul align="left"><li>Mengoptimalkan kompetensi siswa dalam bidang ilmu pengetahuan, olahraga dan seni sesuai dengan bakat dan minat yang dimiliki</li>
      <li>Menyelenggarakan proses pembelajaran aktif, inovatif, kreatif, efektid dan menyenangkan.</li>
      </ul> 
      </p>
    </div>
    <div class="kanan">
      <h1>PENGANTAR EKSTRAKULIKULER</h1>
      <p align="justify">
      Kegiatan Ekstra Kurikuler adalah kegiatan pendidikan di luar mata pelajaran dan pelayanan konseling untuk membantu pengembangan peserta didik sesuai dengan kebutuhan, potensi, bakat, dan minat mereka melalui kegiatan yang secara khusus diselenggarakan oleh pendidik dan atau tenaga kependidikan yang berkemampuan dan berkewenangan di sekolah.  
      </p>
    </div>
    <div class="float-left">
      <h3>CALENDER</h3>
      <?php include('calender.php');?>
    </div>



    <?php
  }

?>


<style type="text/css">

#middle1 {
  clear: both;
  margin: 10px 0px 10px 380px;
  text-align: center;
  color: white;
  display: block;
  width: 500px;
  height: 95px;
  background-color:#0050EF;
  box-shadow: 0px 0px 30px black;
}


.float-left {
  float: left;
}
.mySlides{
  margin-top: 20px;
}

.wrap-slide{
  box-shadow: 0px 0px 30px black;
  width: 1250px;
  float: left;
}
.kiri {
  padding: 20px;
  float: left;
  margin-top: 20px;
  min-height: 500px;
  width: 420px;
  margin-left: 20px;
  background:rgba(27, 161, 226,0.01);
  box-shadow: 0px 0px 1px black;
}
.kanan {
  padding: 20PX;
  float: left;
  margin-top: 20px;
  min-height: 500px;
  width: 420px;
  margin-left: 20px;
  margin-bottom: 20px;
  background:rgba(27, 161, 226,0.01);
  box-shadow: 0px 0px 1px black;
}


.wrap{
  margin-left:100px;
}
.box{
  width:40%;
  height:200px;
  float:left;
  background-color:white; 
  margin:25px 15px;
  border-radius:5px;
}
.box h3{
  font-family: 'Didact Gothic', sans-serif;
  font-weight:normal;
  text-align:center;
  padding-top:60px;
  color:#fff;
}
.box1{
  background-color: #EBA39E;
}
.box2{
  background-color: #EDE89A;
}
.box3{
  background-color: #9EEBA1;
}
.box4{
  background-color: #9EEBBF;
}
.box5{
  background-color: #9ED9EB;
}
.box6{
  background-color: #9EB3EB;
}
.box7{
  background-color: #DB9EEB;
}
.box8{
  background-color: #C49EEB;
}
.shadow1, .shadow2, .shadow3,.shadow4,.shadow5,.shadow6,.shadow7,.shadow8{
  position:relative;
}
.shadow1,.shadow2,.shadow3,.shadow4,.shadow5,.shadow6,.shadow7,.shadow8{
    box-shadow:0 1px 4px rgba(0, 0, 0, 0.3), 0 0 20px rgba(0, 0, 0, 0.1) inset;
}
/*****************************************************************dashed border
****************************************************************/
.shadow1 h3, .shadow2 h3, .shadow3 h3, .shadow4 h3, .shadow5 h3, .shadow6 h3, .shadow7 h3, .shadow8 h3{
  width:87%;
  height:100px;
  margin-left:6%;
  border:2px dashed #F7EEEE;
  border-radius:5px;
}
/****************************************************************
*styling shadows
****************************************************************/
.shadow1:before, .shadow1:after{
  position:absolute;
  content:"";
  bottom:12px;left:15px;top:80%;
  width:45%;
  background:#9B7468;
  z-index:-1;
  -webkit-box-shadow: 0 20px 15px #9B7468;
  -moz-box-shadow: 0 20px 15px #9B7468;
  box-shadow: 0 20px 15px #9B7468;
  -webkit-transform: rotate(-6deg);
  -moz-transform: rotate(-6deg);
  transform: rotate(-6deg);
}
.shadow1:after{
  -webkit-transform: rotate(6deg);
  -moz-transform: rotate(6deg);
  transform: rotate(6deg);
  right: 15px;left: auto;
}
.shadow2:before{
  position:absolute;
  content:"";
  width:80%;
  top:140px;bottom:15px;left:30px;
  background-color:#9F8641;
  z-index:-1;
  -webkit-box-shadow:0 23px 17px 0 #9F8641;
  -moz-box-shadow:0 23px 17px 0 #9F8641;
  box-shadow: 0 23px 17px 0 #9F8641;
  -webkit-transform:rotate(-4deg);
  -moz-transform:rotate(-4deg);
  transform:rotate(-4deg);
}
.shadow3:before, .shadow3:after{
  content:"";
  position:absolute;
  bottom:0;top:2px;left:15px;right:15px;
  z-index:-1;
  border-radius:100px/30px;
 -webkit-box-shadow:0 0 30px 2px #479F41;
  -moz-box-shadow:0 0 30px 2px #479F41;
  box-shadow: 0 0 30px 2px #479F41;
}
.shadow4:before, .shadow4:after{
  position:absolute;
  content:"";
  top:14px;bottom:14px;left:0;right:0;
  box-shadow:0 0 25px 3px #548E7F;
  border-radius:100px/10px;
  z-index:-1;
}
.shadow5:before, .shadow5:after{
  position:absolute;
  content:"";
  box-shadow:0 10px 25px 20px #518C96;
  top:40px;left:10px;bottom:50px;
  width:15%;
  z-index:-1;
  -webkit-transform: rotate(-8deg);
  -moz-transform: rotate(-8deg);
  transform: rotate(-8deg);
}
.shadow5:after{
  -webkit-transform: rotate(8deg);
  -moz-transform: rotate(8deg);
  transform: rotate(8deg);
  right: 10px;left: auto;
}
.shadow6:before, .shadow6:after{
  position:absolute;
  content:"";
  top:100px;bottom:5px;left:30px;right:30px;
  z-index:-1;
  box-shadow:0 0 40px 13px #486685;
  border-radius:100px/20px; 
}
.shadow7:before, .shadow7:after{
  position:absolute;
  content:"1";
  top:25px;left:20px;bottom:150px;
  width:80%;
  z-index:-1;
  -webkit-transform: rotate(-6deg);
  -moz-transform: rotate(-6deg);
  transform: rotate(-6deg);
}
.shadow7:before{
  box-shadow:10px -10px 30px 15px #984D8E;
}
.shadow7:after{
  -webkit-transform: rotate(7deg);
  -moz-transform: rotate(7deg);
  transform: rotate(7deg);
  bottom: 25px;top: auto;
  box-shadow:10px 10px 30px 15px #984D8E;
}
.shadow8{
  box-shadow:
 -6px -6px 8px -4px rgba(250,254,118,0.75),
  6px -6px 8px -4px rgba(254,159,50,0.75),
  6px 6px 8px -4px rgba(255,255,0,0.75),
  6px 6px 8px -4px rgba(0,0,255,2.75);
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