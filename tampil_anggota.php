<?php 
include "config.php";
$sql=mysql_query("SELECT * from anggota");

?>
<h2>DAFTAR ANGGOTA</h2>
<br>
<table class="responstable">
	<tr style="font-weight:bold;font-size:20px;color: white;" bgcolor="#34495e">
		<th width="">NAMA</td>
		<th width="">USERNAME</td>
		<th width="">PASSWORD</td>
		<th width="">NOMOR HP</td>
		<th width="">EMAIL</td>
		<th width="">JK</td>
		<th width="">EKSKUL</td>
		<th width="">JENIS EKSKUL</td>
		<th width="">OPTION</td>
	</tr>
	<?php
		while($record=mysql_fetch_array($sql)){
	?>
	<tr>
		<td><?php echo $record['nama'];?></td>
		<td><?php echo $record['username'];?></td>
		<td><?php echo $record['password'];?></td>
		<td><?php echo $record['nomorhp'];?></td>
		<td><?php echo $record['email'];?></td>
		<td><?php echo $record['jk'];?></td>
		<td><?php echo $record['ekskul'];?></td>
		<td><?php echo $record['jenis_ekskul'];?></td>
		<td>[<a href="home.php?page=edit_anggota.php&kode=<?php echo $record['username']; ?>">Edit</a>]  [<a href="home.php?page=proses_hapus_anggota.php&kode=<?php echo $record['username'];?>" onclick="return confirm('Apakah kamu yakin ingin menghapus data ini ?');">Hapus</a>]</td>
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
