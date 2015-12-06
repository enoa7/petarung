<?php
	$koneksi = mysqli_connect("localhost","root","","testberita");
	if (!$koneksi) die ("Tidak bisa terhubung ke database: " . mysql_error());
	//mysql_select_db("testberita", $koneksi);
?>
