<?php

error_log("error1");
include "koneksi.php";
$id = $_REQUEST["id"];
$sql = "delete from berita where beritaID = $id";
mysqli_query($koneksi, $sql);

header("location:berita.php");
error_log("error2");
?> 