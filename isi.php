<?php
$page=htmlentities($_GET['page']);
if(!file_exists($page) || empty($page)){
	include "kosong.php";
}else{
	include "$page";
}

?>