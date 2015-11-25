<?php
	ob_start();
	include("header.php");
	$buffer=ob_get_contents();
	ob_end_clean();
	$buffer=str_replace("%TITLE%","Petarung Indonesia | Beranda ",$buffer);
	echo $buffer;
?>

<?php require('nav.php') ?>

<div class="page-wrap ulasan">
    <div class="page-banner">
        <div class="container">
            <div>
                <img class="img-responsive center-block" src="asset/images/banner_gloves.png">
            </div>
        </div>
    </div>
</div>
<?php require('footer.php') ?>