<?php
	session_start();
	include 'koneksi.php';
	
	//Hapus semua session yang ada
	session_destroy();
	header("location: index.php");
?>