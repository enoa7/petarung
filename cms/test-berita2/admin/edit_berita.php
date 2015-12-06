<?php 
	session_start();
	if(isset($_SESSION["username"])) {
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Admin </title>
	<link rel="stylesheet" href="./js/jquery.ui.all.css">
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
<form id="form1" name="form1" method="post" action="do_edit.php" enctype="multipart/form-data">
  <table width="100%" height="313" border="0" align="center" bgcolor="#ADC1D6">
    <tr>
      <td height="151" colspan="7" bgcolor="#FFFFFF"><blockquote>&nbsp;</blockquote>
        <table width="79%" height="795" border="0" align="center" cellpadding="2" cellspacing="5" bordercolor="#000000">
        <?php
			include "koneksi.php";
			$id = $_GET["beritaID"];
			$sql = "select * from berita where beritaID = $id";
			$rs = mysqli_query($koneksi, $sql);
	
			if($fetch = mysqli_fetch_array($rs))
			{
		?>
        <tr>
          <td height="75" colspan="4" bgcolor="#999999" class="style33"><div align="right"><span class="style34 style7"><strong>UPDATE NEWS</strong></span></div></td>
          </tr>
        <tr>
          <td height="39" bgcolor="#999999" class="style33"><div align="center" class="style1 style5"><strong>BANNER PHOTO</strong></div><strong> </strong></td>
          <td colspan="3" class="style29"><span class="style31"><em>
          <input type="hidden" name="id" value="<?php echo $id; ?>" />
            <input type="file" name="banner" id="banner" value="<?php echo $fetch['foto1']?>"/> <img src="images/berita/<?php echo $fetch['foto1']?>" width="75" height="75" /> *resolution 1900x1000</em></span></td>
        </tr>
        <tr>
         <td width="175" height="42" bgcolor="#999999" class="style33"><div align="center" class="style1 style5"><strong>NEWS PHOTO</strong></div></td>
          <td colspan="3" class="style29"><span class="style31"><em>
            <input type="file" name="foto" id="foto" value="<?php echo $fetch['foto2']?>"/> <img src="images/berita/<?php echo $fetch['foto2']?>" width="75" height="75" /> *resolution 1900x800</em></span></td>
        </tr>
        <tr>
          <td height="42" bgcolor="#999999" class="style33"><div align="center" class="style1 style5"><strong>TITLE</strong></div></td>
          <td colspan="3" class="style29"><span class="style31">
            <label>
            <input name="judul" type="text" id="judul" value="<?php echo $fetch['judul']?>" size="50" />
            </label>
          </span></td>
        </tr>
        <tr>
          <td height="23" bgcolor="#999999" class="style33"><div align="center" class="style1 style5"><strong>DESCRIPTION</strong></div></td>
          <td colspan="3" class="style29"><span class="style31">
            <label>
            <textarea name="isi" id="isi" cols="80" rows="10" class="ckeditor"><?php echo $fetch['isi']?></textarea>
            </label>
          </span></td>
        </tr>
        <tr>
          <td height="166" bgcolor="#999999" class="style33"><div align="center" class="style1 style5"><strong>CATEGORY</strong></div></td>
          <td class="style29"><span class="style31">
            <label></label>
            <label>
            <input name="kategori1" type="checkbox" id="kategori1" value="tinju" <?php echo ($fetch['kategori1']=='tinju')?'checked':'' ?> />
            </label>
          Tinju 
          <label> <br />
          <input name="kategori2" type="checkbox" id="kategori2" value="muaythai" <?php echo ($fetch['kategori2']=='muaythai')?'checked':'' ?>/>
          </label> 
          Muaythai
</span> <span class="style31">
<label> <br />
<input name="kategori3" type="checkbox" id="kategori3" value="mma" <?php echo ($fetch['kategori3']=='mma')?'checked':'' ?> />
</label> 
MMA
</span> <span class="style31">
<label> <br />
<input name="kategori4" type="checkbox" id="kategori4" value="lain-lain" <?php echo ($fetch['kategori4']=='lain-lain')?'checked':'' ?>/>
</label> 
Lainnya
</span>
<label> <br />
<input name="kategori5" type="checkbox" id="kategori5" value="karate" <?php echo ($fetch['kategori5']=='karate')?'checked':'' ?>/>
</label> 
Karate<span class="style31">
<label>
<br />
<input name="kategori6" type="checkbox" id="kategori6" value="taekwondo" <?php echo ($fetch['kategori6']=='taekwondo')?'checked':'' ?>/>
</label>
Tae Kwon Do
<label> <br />
<input name="kategori7" type="checkbox" id="kategori7" value="pencaksilat" <?php echo ($fetch['kategori7']=='pencaksilat')?'checked':'' ?>/>
</label>
Pencak Silat</span> <span class="style31">
<label> </label>
</span></td>
          <td height="166" bgcolor="#999999" class="style33"><div align="center" class="style1 style5"><strong>SUBCATEGORY</strong></div></td>
          <td class="style29"><span class="style31">
            <label>
            <input name="subkategori" type="radio" id="subkategori" value="internasional" <?php echo ($fetch['subkategori']=='internasional')?'checked':'' ?>/>
            </label>
Internasional </span> <span class="style31">
<label> <br />
<input name="subkategori" type="radio" id="subkategori" value="nasional" <?php echo ($fetch['subkategori']=='nasional')?'checked':'' ?> />
</label>
Nasional </span>
<label> <br />
<input name="subkategori" type="radio" id="subkategori" value="regional" <?php echo ($fetch['subkategori']=='regional')?'checked':'' ?> />
</label>
Regional </td>
        </tr>
        <tr>
          <td height="33" bgcolor="#999999" class="style33"><div align="center" class="style1 style5"><strong>LAST UPDATE</strong></div></td>
          <td width="207"><span class="style29"><span class="style31">
            <input type="text" name="tglterbit" id="tglterbit" value="<?php echo date('Y-m-d');?>" readonly="readonly"/>
          </span></span></td>
          <td width="187" bgcolor="#999999"><div align="center"><span class="style1 style5"><strong>WRITER</strong></span></div></td>
          <td width="192"><input name="user" type="text" disabled="disabled" id="user" value="<?php echo $_SESSION['username'];?>" size="20" /></td>
        </tr>
        <tr>
          <td height="52" colspan="4" bgcolor="#999999" class="style33"><label>
            <div align="center" class="style5">Set this News As : 
              <select name="topper" id="topper">
                <option value="0" <?php echo ($fetch['topper']=='0')?'selected':'' ?>>Default</option>
                <option value="1"<?php echo ($fetch['topper']=='1')?'selected':'' ?>>Editor's Pick</option>
              </select>
              </div>
          </label></td>
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
      </table>
      <p>&nbsp;</p></td>
    </tr>
  </table>
  <?php } ?>
</form>


</body>
</html>
<?php 
	}
	else { 
		header("location:index.php");
	}
?>