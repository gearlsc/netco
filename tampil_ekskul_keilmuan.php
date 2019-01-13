<?php 
include "config.php";
$sql=mysql_query("SELECT * from ekskul_keilmuan");
?>
<table class="responstable">
  <tr>
    <th>Kode Ekskul</th>
    <th>Nama Ekskul</th>
    <th width="160px;">Tentang Ekskul</th>
    <th>Struktur</th>
    <th>Jadwal</th>
    <th>Gambar 1</th>
    <th>Gambar 2</th>
    <th>Gambar 3</th>
    <th>Option</th>
  </tr>
  <?php
    while($record=mysql_fetch_array($sql)){
  ?>
  <tr>
    <td><?php echo $record['kode_ekskul'];?></td>
    <td><?php echo $record['nama_ekskul'];?></td>
    <td id="appadd"><?php echo $record['tentang_ekskul'];?></td>
    <td id="appadd"><?php echo $record['struktur'];?></td>
    <td id="appadd"><?php echo $record['jadwal'];?></td>
    <td><?php echo $record['img1'];?></td>
    <td><?php echo $record['img2'];?></td>
    <td><?php echo $record['img3'];?></td>  
    <td><a href="home.php?page=edit_ekskul_keilmuan.php&kode=<?php echo $record['kode_ekskul']; ?>">EDIT</a> | <a href="proses_hapus_ekskul.php?kode=<?php echo $record['kode_ekskul'];?>&page=ekskul_keilmuan" onclick="return confirm('Apakah kamu yakin ingin menghapus data ini ?');">HAPUS</a></td>
  </tr>
  <?php 
    }
  ?>
  
</table>

<style type="text/css">
  #appadd {
    white-space: nowrap;
    overflow: hidden;
    width: 10px;
    height: 10px;
    text-overflow: ellipsis; 
}

  .responstable {
  margin: 1em 0;
  width: 1100px;
  overflow: hidden;
  background: #FFF;
  color: #024457;
  border-radius: 10px;
  border: 1px solid #167F92;
}
.responstable tr {
  border: 1px solid #D9E4E6;
}
.responstable tr:nth-child(odd) {
  background-color: #EAF3F3;
}
.responstable th {
  display: none;
  border: 1px solid #FFF;
  background-color: #167F92;
  color: #FFF;
  padding: 1em;
}
.responstable th:first-child {
  display: table-cell;
  text-align: center;
}
.responstable th:nth-child(2) {
  display: table-cell;
}
.responstable th:nth-child(2) span {
  display: none;
}
.responstable th:nth-child(2):after {
  content: attr(data-th);
}
@media (min-width: 480px) {
  .responstable th:nth-child(2) span {
    display: block;
  }
  .responstable th:nth-child(2):after {
    display: none;
  }
}
.responstable td {
  display: block;
  word-wrap: break-word;
  max-width: 7em;
}
.responstable td:first-child {
  display: table-cell;
  text-align: center;
  border-right: 1px solid #D9E4E6;
}
@media (min-width: 480px) {
  .responstable td {
    border: 1px solid #D9E4E6;
  }
}
.responstable th, .responstable td {
  text-align: left;
  margin: .5em 1em;
}
@media (min-width: 480px) {
  .responstable th, .responstable td {
    display: table-cell;
    padding: 1em;
  }
}

h1 {
  font-family: Verdana;
  font-weight: normal;
  color: #024457;
}
h1 span {
  color: #167F92;
}

</style>