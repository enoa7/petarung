<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Admin </title>

<style type="text/css">

/*body,td,th {
	font-family: Arial, Helvetica, sans-serif;
}
.style4 {
	font-size: 24px;
	font-weight: bold;
}
.style5 {
	font-size: 12px;
	font-style: italic;
}
.style6 {
	font-size: 14px;
	font-weight: bold;
	font-style: italic;
}*/
    </style>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
<?php
	include "koneksi.php";
	
	$id = abs((int)$_GET['id']);
	//$id = $_REQUEST['id'];
	$item = mysqli_real_escape_string($koneksi, $id);
	$sql = "select * from berita where beritaID = '$item'";
	$rs = mysqli_query($koneksi, $sql);
	
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
	
	if($fetch = mysqli_fetch_array($rs))
	{
?>
  <table width="100%" height="626" border="0" align="center">
    <tr>
        <td width="66%" height="622">
	      <p style="text-align:center;"><img src="admin/images/berita/<?php echo $fetch['foto1'];?>" width="100%" height="300"/></p><br />
          <h2><?php echo $fetch['judul'];?></h2>


          <p style="text-align:justify; "><?php echo htmlspecialchars_decode(stripslashes($fetch['isi']), ENT_QUOTES);?>

          </p>
          <p style="font-size:13px; color:#999; font-style:italic;">ditulis oleh <?php echo $fetch['username'];?> pada tanggal <?php echo $fetch['tanggal_terbit'];?></p>
          <p>[ <a href="index.php">Back</a> ]</p>
      <hr></td> 
	</tr>
  
  <?php
  }

  ?>
  </table>
</form>
</body>
</html>
