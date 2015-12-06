<?php
 $koneksi = mysqli_connect("localhost","root","","testberita");
 	if (!$koneksi) die ("Tidak bisa terhubung ke database: " . mysql_error());
 	//mysql_select_db("testberita", $koneksi);
?>

<?php
// $mysqli = mysqli("localhost", "root", "", "testberita");
// if ($mysqli->connect_errno) {
//     echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
// }
// echo $mysqli->host_info . "\n";

?>