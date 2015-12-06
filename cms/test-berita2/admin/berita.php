<?php 
	session_start();
	if(isset($_SESSION["username"])) {
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Admin </title>
<link href="style.css" rel="stylesheet" type="text/css" />
	<script>
		function cek_delete()
		{
			if(confirm('Yakin akan di hapus ?')){
				return true;
			} else {
				return false;
			}
		}
	</script>
    <style type="text/css">

/*.style1 {
	font-weight: bold;
	color: #FFFFFF;
}
body,td,th {
	font-family: Arial, Helvetica, sans-serif;
}
.style4 {
	font-size: 24px;
	font-weight: bold;
}
*/
    </style>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <table width="100%" height="313" border="0" align="center" bgcolor="#ADC1D6">
    <tr>
      <td height="151" colspan="7" bgcolor="#FFFFFF"><blockquote>
        <p align="right" class="style34"><a href="add_berita.php"><img src="images/add.png" width="48" height="48" title="Create News" /></a></p>
      </blockquote>
        <p align="center" class="style34 style4">NEWS</p>
        <p align="center"><a href="home.php">Back To Home</a></p>
        <table width="90%" height="86" border="0" align="center" cellpadding="4" cellspacing="5" bordercolor="#000000">
        <tr>
         <td width="26" height="23" bgcolor="#999999"><div align="center" class="style33 style1">
           <div align="center">#</div>
         </div></td>
          <td width="153" bgcolor="#999999"><div align="center" class="style33 style1">
            <div align="center">TITLE</div>
          </div></td>
          <td width="79" bgcolor="#999999"><div align="center" class="style33 style1"> 
            <div align="center">POST</div>
          </div></td>
          <td width="103" bgcolor="#999999" class="style33"><div align="center" class="style1">CATEGORY </div></td>
          <td width="103" bgcolor="#999999" class="style33"><div align="center" class="style1">SUBCATEGORY </div></td>
          <td width="101" bgcolor="#999999" class="style33"><div align="center" class="style1">SETTING</div></td>
        </tr>

  <?php
  	include "koneksi.php";
	$i=0;
	$sql = "select * from berita order by beritaID desc";
	$rs = mysqli_query($koneksi, $sql);
	
	
	while($fetch = mysqli_fetch_array($rs))
	{
	$i++;
   ?>
        <tr valign="top" bgcolor="#FFCCFF">
          <td height="44"><div align="center">
            <?php echo $i;?>
          </div></td>
          <td><div align="justify">
            <?php echo $fetch['judul']?>
          </div></td>
          <td><div align="center">
            <?php echo $fetch['tanggal_terbit']?>
          </div></td>
          <td><div align="center">
            <?php echo $fetch['kategori1']?>&nbsp;<?php echo $fetch['kategori2']?>&nbsp;<?php echo $fetch['kategori3']?>&nbsp;<?php echo $fetch['kategori4']?>&nbsp;<?php echo $fetch['kategori5']?>&nbsp;<?php echo $fetch['kategori6']?>&nbsp;<?php echo $fetch['kategori7']?>
          </div></td>
          <td><div align="center"> <?php echo $fetch['subkategori']?>&nbsp;</div></td>
          <td><div align="center"><a href="edit_berita.php?beritaID=<?php echo $fetch[0]; ?>">Edit</a> -  
            <a href="delete.php?id=<?php echo $fetch[0]?>" onclick="return cek_delete();">Delete</a></div></td>
        </tr>
   <?php
    }
   ?>
      </table>
      <p>&nbsp;</p></td>
    </tr>
  </table>
</form>
</body>
</html>
<?php 
	}
	else { 
		header("location:index.php");
	}
?>