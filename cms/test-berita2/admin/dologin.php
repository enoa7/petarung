<?php
include"koneksi.php";
session_start();
// deklarasi variabel
$username = $_POST["username"];
$password = $_POST["password"];
$encrip = md5($password);

// jika user mengosongkan Username
if (empty($username)) {
	echo '<script type="text/javascript">'; 
	echo 'alert("Anda harus mengisi username...");'; 
	echo 'history.go(-1);';
	echo '</script>';
}	
// jika user mengosongkan Password
else if (empty($password)) {
	echo '<script type="text/javascript">'; 
	echo 'alert("Anda harus mengisi password...");'; 
	echo 'history.go(-1);';
	echo '</script>';
}
// jika semua telah diisi dengan benar
else {
	// buat session "user"
	// misal md5 aktif $password di dolar $sql dan if ganti $encrypt
	$sql=mysqli_query($koneksi, "select * from user where username='$username' and password='$encrip'");
	$temp = mysqli_fetch_array($sql);
	if($temp['username']!=$username && $temp['password']!=$password)
	{
		header("location: index.php?err=Account tidak terdaftar");
	}else{
	$_SESSION['level'] = $temp['id_level'];
	$_SESSION["username"] = $username;
	header("location: home.php");
	}
}
?>