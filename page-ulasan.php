<?php
	ob_start();
	include("head.php");
	$buffer=ob_get_contents();
	ob_end_clean();
	$buffer=str_replace("%TITLE%","Petarung Indonesia | Beranda ",$buffer);
	echo $buffer;
?>

<?php if( $detect->isTablet() || !$detect->isMobile() ) { ?>
    <?php require('page-header.php') ?>
<?php } ?>

<?php require('page-nav.php') ?>

<section id="page-content">
    <div class="page-wrap ulasan">
    <div class="page-banner">
        <!-- main banner with container -->
        <div class="container-fluid">
            <div>
                <img class="img-responsive center-block" src="asset/images/banner-gloves2.jpg" alt="gloves-1">
            </div>
        </div>
    </div>
    <div class="page-content"> 
        <div class="item">
            <div class="container spacepad">
                <div class="item-category">Perlengkapan MMA</div>
                <div class="item-name">Consectur MMA Gloves</div>
                <div class="item-status-list clearfix spacepad">
                    <div class="item-status design" data-value=".75" data-fcolor="#DC583B" data-bcolor="#F7A08B">
                        <span class="stat-value"></span>
                    </div>
                    <div class="item-status usability" data-value=".55" data-fcolor="#F7A231" data-bcolor="#F8C989">
                        <span class="stat-value"></span>
                    </div>
                    <div class="item-status detail" data-value=".81" data-fcolor="#E7643D" data-bcolor="#F69A8C">
                        <span class="stat-value"></span>
                    </div>
                    <div class="item-status material" data-value=".92" data-fcolor="#972F88" data-bcolor="#B670AE">
                        <span class="stat-value"></span>
                    </div>
                    <div class="item-status price" data-value=".67" data-fcolor="#42A99F" data-bcolor="#99CCC4">
                        <span class="stat-value"></span>
                    </div>
                    <!-- <div class="item-status like" data-value=".45">
                        <span class="stat-value"></span>
                    </div> -->
                </div>
                <div class="item-post">
                    <div class="item-post-date"></div>
                    <div class="item-post-author"></div>
                </div>
                <div class="item-content"></div>
            </div>
        </div>
    </div>
</div>
</section>

<?php require('footer.php') ?>