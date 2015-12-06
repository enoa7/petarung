<?php
	ob_start();
	include("head.php");
	$buffer=ob_get_contents();
	ob_end_clean();
	$buffer=str_replace("%TITLE%","Petarung Indonesia | Beranda ",$buffer);
	echo $buffer;
?>
<body>
<?php if( $detect->isTablet() || !$detect->isMobile() ) { ?>
    <?php require('page-header.php') ?>
<?php } ?>

<?php require('page-nav.php') ?>
<?php require('overlay-menu.php') ?>

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
        <?php if( $detect->isMobile() && !$detect->isTablet() ) { ?>    
            <div class="item mobile">
                <div class="container spacepad">
                    <div class="item-category">Perlengkapan MMA</div>
                    <div class="item-name">Consectur MMA Gloves</div>
                    <div class="item-status-list clearfix spacepad">
                        <div class="item-status design" data-value="0.75" data-fcolor="#DC583B" data-bcolor="#F7A08B">
                            <span class="stat-value"></span>
                            <div class="stat-attr">Design</div>
                        </div>
                        <div class="item-status usability" data-value="0.55" data-fcolor="#F7A231" data-bcolor="#F8C989">
                            <span class="stat-value"></span>
                            <div class="stat-attr">Usability</div>
                        </div>
                        <div class="item-status detail" data-value="0.81" data-fcolor="#E7643D" data-bcolor="#F69A8C">
                            <span class="stat-value"></span>
                            <div class="stat-attr">Detail</div>
                        </div>
                        <div class="item-status material" data-value="0.92" data-fcolor="#972F88" data-bcolor="#B670AE">
                            <span class="stat-value"></span>
                            <div class="stat-attr">Material</div>
                        </div>
                        <div class="item-status price" data-value="0.67" data-fcolor="#42A99F" data-bcolor="#99CCC4">
                            <span class="stat-value"></span>
                            <div class="stat-attr">Price</div>
                        </div>
                        <!-- <div class="item-status like" data-value=".45">
                            <span class="stat-value"></span>
                        </div> -->
                    </div>
                    <div class="average"></div>
                    <div class="item-post clearfix">
                        <div class="item-post-date left">
                            <div class="item-post-date-day">jumat</div>
                            <div class="item-post-date-time">Juli 20 2015</div>
                            <div class="item-post-date-hour">12:50</div>
                        </div>
                        <div class="item-post-author">Oleh Irsyad</div>
                    </div>
                    <div class="item-content clearfix spacepad">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>

                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. </p>

                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis.</p>
                    </div>
                </div>
            </div>
            <div class="comment mobile hide">
                <div class="container-fluid">
                    <form action="" method="POST" role="form">
                        <div class="form-group">
                            <input type="text" class="form-control" id="" placeholder="Tulis komentar ...">
                        </div>
                        <div class="text-right"><button type="submit" class="btn btn-primary">Submit</button></div>
                    </form>
                </div>
            </div>
            <div class="related-product">
                <div>
                    <div class="col-xs-6 nopadding">
                        <div class="img"><img class="img-responsive" src="asset/images/produck-terkait1.jpg"></div>
                        <div class="text">test</div>
                    </div>
                    <div class="col-xs-6 nopadding">
                        <div class="img"><img class="img-responsive" src="asset/images/produck-terkait2.jpg"></div>
                        <div class="text">test</div>
                    </div>
                    <div class="col-xs-6 nopadding">
                        <div class="img"><img class="img-responsive" src="asset/images/produck-terkait3.jpg"></div>
                        <div class="text">test</div>
                    </div>
                    <div class="col-xs-6 nopadding">
                        <div class="img"><img class="img-responsive" src="asset/images/produck-terkait4.jpg"></div>
                        <div class="text">test</div>
                    </div>
                </div>
            </div>
        <?php } else { ?>
            <div class="item desktop">
                <div class="container spacepad">
                    <div class="leftCol col-sm-12 col-md-4">
                        <div class="item-page hidden-xs">Ulasan</div>
                        <div class="item-category">Perlengkapan MMA</div>
                        <div class="item-post-author">Oleh Irsyad</div>
                        <div class="item-name">Consectur MMA Gloves</div>
                        <div class="item-status-list clearfix">
                            <div class="item-status design" data-value=".75" data-fcolor="#DC583B" data-bcolor="#F7A08B">
                                <span class="stat-value"></span>
                                <div class="stat-attr">Design</div>
                            </div>
                            <div class="item-status usability" data-value=".55" data-fcolor="#F7A231" data-bcolor="#F8C989">
                                <span class="stat-value"></span>
                                <div class="stat-attr">Usability</div>
                            </div>
                            <div class="item-status detail" data-value=".81" data-fcolor="#E7643D" data-bcolor="#F69A8C">
                                <span class="stat-value"></span>
                                <div class="stat-attr">Detail</div>
                            </div>
                            <div class="item-status material" data-value=".92" data-fcolor="#972F88" data-bcolor="#B670AE">
                                <span class="stat-value"></span>
                                <div class="stat-attr">Material</div>
                            </div>
                            <div class="item-status price" data-value=".67" data-fcolor="#42A99F" data-bcolor="#99CCC4">
                                <span class="stat-value"></span>
                                <div class="stat-attr">Price</div>
                            </div>
                            <!-- <div class="item-status like" data-value=".45">
                                <span class="stat-value"></span>
                            </div> -->
                        </div>
                        <div class="item-post clearfix">
                            <div class="item-post-date left">
                                <div class="item-post-date-day">jumat</div>
                                <div class="item-post-date-time">Juli 20 2015</div>
                                <div class="item-post-date-hour">12:50</div>
                            </div>
                        </div>
                        <div class="item-social">
                            <div class="item-social-text left">Share On</div>
                            <div class="item-social-icon left">
                                <div class="fb"><i class="fa fa-facebook-square fa-lg"></i></div>
                                <div class="twitter"><i class="fa fa-twitter-square fa-lg"></i></div>
                                <div class="email"><i class="fa fa-envelope-square fa-lg"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="rightCol col-sm-12 col-md-8">
                        <div class="item-content clearfix">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>

                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. </p>

                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis.</p>

                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis.</p>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</section>

<?php require('footer.php') ?>
    </body>
</html>