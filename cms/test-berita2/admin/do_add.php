<?php
	session_start();
	include "koneksi.php";
	
	header("location:berita.php");


	$judul 			= htmlspecialchars($_POST["judul"]);
	$isi 			= $_POST["isi"];
	$tgl			= $_POST["tglterbit"];
	$kategori1		= $_POST["kategori1"];
	$kategori2		= $_POST["kategori2"];
	$kategori3		= $_POST["kategori3"];
	$kategori4		= $_POST["kategori4"];
	$kategori5		= $_POST["kategori5"];
	$kategori6		= $_POST["kategori6"];
	$kategori7		= $_POST["kategori7"];
	$subkategori	= $_POST["subkategori"];
	$user			= $_SESSION["username"];
	
	$bannerName = $_FILES['banner']['name'];  
	$bannerSize = $_FILES['banner']['size'];  
	$bannerError = $_FILES['banner']['error'];  
	if($bannerSize > 0 || $bannerError == 0){  
		copy($_FILES['banner']['tmp_name'], 'images/berita/'.$bannerName);  
	}
		$fileName = $_FILES['foto']['name'];  
	$fileSize = $_FILES['foto']['size'];  
	$fileError = $_FILES['foto']['error'];  
	if($fileSize > 0 || $fileError == 0){  
		copy($_FILES['foto']['tmp_name'], 'images/berita/'.$fileName);  
	}
	
	$query = mysqli_query($koneksi, "insert into berita (foto1, foto2, judul, isi, kategori1, kategori2, kategori3, kategori4, kategori5, kategori6, kategori7, subkategori, tanggal_terbit, username) values('$bannerName', '$fileName','$judul','$isi', '$kategori1', '$kategori2', '$kategori3', '$kategori4', '$kategori5', '$kategori6', '$kategori7', '$subkategori', '$tgl', '$user')");
	exit();

?>