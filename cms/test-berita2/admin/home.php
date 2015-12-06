<!-- get template header -->
<?php 

$pageTitle = 'Petarung Admin - Home page';
include 'template/admin-header.php' 
?>

<!-- <body>
<form id="form1" name="form1" method="post" action="">
  <p>&nbsp;</p>
  <table width="367" height="283" border="0" align="center">
    <tr>
      <td><div align="center"><a href="berita.php">News</a></div></td>
    </tr>
    <tr>
      <td><div align="center"><a href="#">Artikel</a></div></td>
    </tr>
    <tr>
      <td><div align="center"><a href="#">Ulasan Perlengkapan</a></div></td>
    </tr>
    <tr>
      <td><div align="center"><a href="#">Ulasan Gym</a></div></td>
    </tr>
    <tr>
      <td><a href="logout.php">LogOut</a></td>
    </tr>
  </table>
</form>
</body> -->
<body>
<form id="form1" name="form1" method="post" action="">
  <div class="jumbotron">
    <div class="container">
      <div class="petarung-logo spacepad">
        <img class="img-responsive center-block" src="images/petarung_logo.jpg">
      </div>
      <div class="menu-list">
      <div>
        <div class="col-xs-12 text-center"><a href="berita.php">Berita</a></div>
        <div class="col-xs-12 text-center"><a href="#">Artikel</a></div>
        <div class="col-xs-12 text-center"><a href="#">Ulasan Perlengkapan</a></div>
        <div class="col-xs-12 text-center"><a href="#">Ulasan Gym</a></div>
        <button type="button" class="btn btn-primary"><a href="logout.php">Log Out</a></button>
      </div>
      </div>
    </div>
  </div>
</form>
</body>
</html>
