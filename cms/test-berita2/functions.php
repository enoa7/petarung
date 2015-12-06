<?php

function getBerita() {

	include "koneksi.php";

	$id = abs((int)$_GET['id']);
	//$id = $_REQUEST['id'];
	$item = mysqli_real_escape_string($koneksi, $id);
	$sql = "select * from berita where beritaID = '$item'";
	$rs = mysqli_query($koneksi, $sql);
	return $rs;
	//fungsi ambil current url
	function curPageURL() {
	 $pageURL = 'http://';
	 if ($_SERVER["SERVER_PORT"] != "80") {
		$pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
	 } else {
	  $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
	 }
	 return $pageURL;
	 
	}
	// akhir fungsi
}

?>