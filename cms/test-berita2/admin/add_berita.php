<?php 
	session_start();
	//if(isset($_SESSION["username"])) {
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Admin </title>
	<link rel="stylesheet" href="./js/jquery.ui.all.css">
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="./js/jquery/jquery-1.9.1.js"></script>
<script src="./js/jquery/jquery.ui.core.js"></script>
<script src="./js/jquery/jquery.ui.widget.js"></script>
<script src="./js/jquery/jquery.ui.datepicker.js"></script>
<script type="text/javascript" src="ckeditor/styles.js"></script>
<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
<script>		
		$(function() {
			$( "#datepicker" ).datepicker({
				'dateFormat': 'yy-mm-dd'
			});
		});
	</script>
<style type="text/css">
/*body,td,th {
	font-family: Arial, Helvetica, sans-serif;
}
.style5 {color: #FFFFFF;}
.style6 {color: #ECE9D8;}
.style7 {font-size: 36px;}*/
</style></head>

<body>
<form id="form1" name="form1" method="post" action="do_add.php" enctype="multipart/form-data">
  <table width="100%" height="313" border="0" align="center" bgcolor="#ADC1D6">
    <tr>
      <td height="151" colspan="7" bgcolor="#FFFFFF"><blockquote>&nbsp;</blockquote>
        <table width="79%" height="653" border="0" align="center" cellpadding="2" cellspacing="5" bordercolor="#000000">
        <tr>
          <td height="75" colspan="4" bgcolor="#999999" class="style33"><div align="right"><span class="style34 style7"><strong>CREATE NEWS</strong></span></div></td>
          </tr>
        <tr>
          <td height="39" bgcolor="#999999" class="style33"><div align="center" class="style1 style5"><strong>BANNER PHOTO</strong></div><strong> </strong></td>
          <td colspan="3" class="style29"><span class="style31"><em>
            <input type="file" name="banner" id="banner" required />
          *resolution 1900x1000</em></span></td>
        </tr>
        <tr>
         <td width="175" height="42" bgcolor="#999999" class="style33"><div align="center" class="style1 style5"><strong>NEWS PHOTO</strong></div></td>
          <td colspan="3" class="style29"><span class="style31"><em>
            <input type="file" name="foto" id="foto" required/>
          *resolution 1900x800</em></span></td>
        </tr>
        <tr>
          <td height="42" bgcolor="#999999" class="style33"><div align="center" class="style1 style5"><strong>TITLE</strong></div></td>
          <td colspan="3" class="style29"><span class="style31">
            <label>
            <input name="judul" type="text" id="judul" value="" size="50" required />
            </label>
          </span></td>
        </tr>
        <tr>
          <td height="23" bgcolor="#999999" class="style33"><div align="center" class="style1 style5"><strong>DESCRIPTION</strong></div></td>
          <td colspan="3" class="style29"><span class="style31">
            <label>
            <textarea name="isi" id="isi" cols="80" rows="10" class="ckeditor"></textarea>
            </label>
          </span></td>
        </tr>
        <tr>
          <td height="166" bgcolor="#999999" class="style33"><div align="center" class="style1 style5"><strong>CATEGORY</strong></div></td>
          <td class="style29"><span class="style31">
            <label></label>
            <label>
            <input name="kategori1" type="checkbox" id="kategori1" value="tinju" />
            </label>
          Tinju 
          <label> <br />
          <input name="kategori2" type="checkbox" id="kategori2" value="muaythai" />
          </label> 
          Muaythai
</span> <span class="style31">
<label> <br />
<input name="kategori3" type="checkbox" id="kategori3" value="mma" />
</label> 
MMA
</span> <span class="style31">
<label> <br />
<input name="kategori4" type="checkbox" id="kategori4" value="lain-lain" />
</label> 
Lainnya
</span>
<label> <br />
<input name="kategori5" type="checkbox" id="kategori5" value="karate" />
</label> 
Karate<span class="style31">
<label>
<br />
<input name="kategori6" type="checkbox" id="kategori6" value="taekwondo" />
</label>
Tae Kwon Do
<label> <br />
<input name="kategori7" type="checkbox" id="kategori7" value="pencaksilat" />
</label>
Pencak Silat</span> <span class="style31">
<label> </label>
</span></td>
          <td height="166" bgcolor="#999999" class="style33"><div align="center" class="style1 style5"><strong>SUBCATEGORY</strong></div></td>
          <td class="style29"><span class="style31">
            <label>
            <input name="subkategori" type="radio" id="subkategori" value="internasional" />
            </label>
Internasional </span> <span class="style31">
<label> <br />
<input name="subkategori" type="radio" id="subkategori" value="nasional" />
</label>
Nasional </span>
<label> <br />
<input name="subkategori" type="radio" id="subkategori" value="regional" />
</label>
Regional </td>
        </tr>
        <tr>
          <td height="33" bgcolor="#999999" class="style33"><div align="center" class="style1 style5"><strong>UPLOAD DATE</strong></div></td>
          <td width="207"><span class="style29"><span class="style31">
            <input type="text" name="tglterbit" id="tglterbit" value="<?php echo date('Y-m-d');?>" readonly="readonly"/>
          </span></span></td>
          <td width="187" bgcolor="#999999"><div align="center"><span class="style1 style5"><strong>WRITER</strong></span></div></td>
          <td width="192"><input name="user" type="text" disabled="disabled" id="user" value="<?php echo $_SESSION['username'];?>" size="20" /></td>
        </tr>
        <tr>
          <td height="44" colspan="4" class="style33 style6"><label>
            <input type="submit" name="submit" id="submit" value="Submit" />
            <input type="reset" name="Reset" id="button" value="Reset" />
          </label>
            <label>
            <input type="button" name="back" id="back" value="Back" onclick="location.href='berita.php';"/>
            </label></td>
          </tr>
      </table></form>
</td>
    </tr>
  </table>

</body>
</html>
<?php 
//}
//else
//		header("location:index.php");
//	}
?>