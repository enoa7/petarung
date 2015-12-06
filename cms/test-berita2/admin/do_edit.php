<?php
	session_start();
	include "koneksi.php";
	
	header("location:berita.php");
	exit();
	
	$id = $_POST['id'];
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
	$topper			= $_POST["topper"];
	
	$fileName = "";
	// var_dump($_FILES);
	if($_FILES['foto']['name'] !== ""){  
		$fileName = $_FILES['foto']['name'];  
		$fileSize = $_FILES['foto']['size'];  
		$fileError = $_FILES['foto']['error'];  
		copy($_FILES['foto']['tmp_name'], 'images/berita/'.$fileName);  
	}
	$bannerName = "";
	// var_dump($_FILES);
	if($_FILES['banner']['name'] !== ""){  
		$bannerName = $_FILES['banner']['name'];  
		$bannerSize = $_FILES['banner']['size'];  
		$bannerError = $_FILES['banner']['error'];  
		copy($_FILES['banner']['tmp_name'], 'images/berita/'.$bannerName);  
	}
	
	
	if($judul == "")
	{
		echo '<script type="text/javascript">'; 
		echo 'alert("Please fill in the title!");'; 
		echo 'history.go(-1);';
		echo '</script>';
	}
	else if($isi == "")
	{
		echo '<script type="text/javascript">'; 
		echo 'alert("Please fill in the Description!");'; 
		echo 'history.go(-1);';
		echo '</script>';
	}
	else
	{
	
		if($fileName ==""):
			$tanggal = date('Y-m-d');
			$sql = "update berita set foto1='$bannerName', judul = '".$judul."', isi = '".str_replace("'", "\'", $isi)."', tanggal_ubah = '$tanggal', username = '$user', kategori1 = '$kategori1', kategori2 = '$kategori2', kategori3 = '$kategori3', kategori4 = '$kategori4', kategori5 = '$kategori5', kategori6 = '$kategori6',kategori7 = '$kategori7',subkategori = '$subkategori', topper='$topper' where beritaID =$id";
			//mysql_query($sql);
			//echo $id." jpg kosong tanggal: ".$tanggal; die();
		elseif($bannerName ==""):
		$tanggal = date('Y-m-d');
			$sql = "update berita set foto2='$fileName', judul = '".$judul."', isi = '".str_replace("'", "\'", $isi)."', tanggal_ubah = '$tanggal', username = '$user', kategori1 = '$kategori1', kategori2 = '$kategori2', kategori3 = '$kategori3', kategori4 = '$kategori4', kategori5 = '$kategori5', kategori6 = '$kategori6',kategori7 = '$kategori7',subkategori = '$subkategori', topper='$topper' where beritaID =$id";
		elseif($fileName =="" && $bannerName ==""):
		$tanggal = date('Y-m-d');
			$sql = "update berita set judul = '".$judul."', isi = '".str_replace("'", "\'", $isi)."', tanggal_ubah = '$tanggal', username = '$user', kategori1 = '$kategori1', kategori2 = '$kategori2', kategori3 = '$kategori3', kategori4 = '$kategori4', kategori5 = '$kategori5', kategori6 = '$kategori6',kategori7 = '$kategori7',subkategori = '$subkategori', topper='$topper' where beritaID =$id";
		else:
			//echo $id." jpg ada tanggal: ".$tanggal; die();
			$sql = "update berita set foto1='$bannerName', foto2='$fileName', judul = '$judul', isi = '$isi', tanggal_ubah = '".date('Y-m-d')."', username = '$user', kategori1 = '$kategori1', kategori2 = '$kategori2', kategori3 = '$kategori3', kategori4 = '$kategori4', kategori5 = '$kategori5', kategori6 = '$kategori6',kategori7 = '$kategori7',subkategori = '$subkategori', topper='$topper' where beritaID = $id";
		endif;
	
	mysql_query($sql);
}	
?>