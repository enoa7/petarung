<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Admin </title>
<link href="style.css" rel="stylesheet" type="text/css" />

<style type="text/css">
body,td,th {
	font-family: Arial, Helvetica, sans-serif;
}
.style4 {
	font-size: 24px;
	font-weight: bold;
}
.style5 {
	font-size: 12px;
	font-style: italic;
	color: #666666;
}
.style6 {
	font-size: 14px;
	font-weight: bold;
	font-style: italic;
}

    </style>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <table width="100%" height="313" border="0" align="center" bgcolor="#ADC1D6">
    <tr>
      <td height="151" colspan="7" bgcolor="#FFFFFF"><blockquote>
        <div align="center" class="style4">NEWS</div>
      </blockquote>
        <div id="textblog">
 <?php
		include ('koneksi.php');
		$query="select * from berita order by beritaID desc limit 10";
		$rs=mysqli_query($koneksi, $query);
		while($data=mysqli_fetch_array($rs))
		{
			if(strlen($data['isi'])>300)
			{
			$isi   = substr(htmlspecialchars_decode(stripslashes($data['isi'])),0,300);
			$isi   = substr($isi,0,strrpos($isi," "));
		?>
		  <h2><?php echo($data['judul']);?></h2>
                <p style="font-size:10px; color:#999; font-style:italic;">ditulis tanggal <?php echo $data['tanggal_terbit'];?></p>
		  <p align="justify"><?php echo($isi);?>
	         <a href="detailberita.php?id=<?php echo $data[0]?>">.read more</a></br><hr> </p>
		<?php
			echo("<br>");
		   }
		   else
		   {
		?>
			   <h4><?php echo($data['judul']);?></h4>
			   <?php
			   echo($data['isi']."<br>");
			}
		}
?>
    
  </div>
      <p>&nbsp;</p></td>
    </tr>
  </table>
</form>
</body>
</html>
