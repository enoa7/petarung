<?php 
	session_start();
	if(!isset($_SESSION["username"])) { 
?>

<!-- get template header -->
<?php 

$pageTitle = 'Petarung Admin - Login page';
include 'template/admin-header.php' 
?>

<body>

<div class="jumbotron">
  <div class="container">
    <div class="petarung-logo spacepad">
      <img class="img-responsive center-block" src="images/petarung_logo.jpg">
    </div>
    <div class="admin-login">
      <div>
        <div class="title text-center spacepad">ADMIN LOGIN</div>
      </div>
      <form id="login" name="form1" method="post" action="dologin.php">
          <div class="form-group username">
            <label for="">username</label>
            <input type="text" class="form-control" name="username" id="username" placeholder="">
          </div>
          <div class="form-group password">
            <label for="">password</label>
            <input type="password" class="form-control" name="password" id="password" placeholder="">
          </div>
          <div class="clearfix"><button type="submit" class="btn btn-primary" name="Submit">Submit</button></div>
      </form>
    </div>
  </div>
</div>
</body>
<?php include 'template/admin-footer.php' ?>

<?php 
	} else {
		header("location: home.php");
	}	
?>
