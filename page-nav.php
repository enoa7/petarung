
<nav id="page-nav">
<?php  if( $detect->isMobile() && !$detect->isTablet() ) { ?>
 <section class="navbar mobile nomarginbottom">
    <div class="container">
        <div class="">
            <div class="logo col-xs-5 nopaddingleft">
                <img class="img-responsive"src="asset/images/petarung_logo_mobile.png">
            </div>
            <div class="header_form col-xs-7">
                <div class="hamburger trigger">
                    <i class="fa fa-bars"></i>
                </div>
                <div class="login">log in</div>
                <div class="searchbox">
                    <i class="fa fa-search"></i>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="mobile-menu-overlay deactivate">
    <div class="container">
        <div class="close-btn">
            <div><i class="fa fa-times trigger"></i></div>
        </div>
        <ul class="menu-list nopadding nodots nomarginbottom text-center">
            <li>home</li>
            <li>berita terkini</li>
            <li>artikel</li>
            <li>kategory beladiri</li>
            <li>ulasan</li>
            <li>kontak</li>
        </ul>
    </div>
</div>
<?php } else { ?>
<section class="navbar desktop nomarginbottom">
    <div class="container">
        <div class="header_nav col-xs-12 spacepad-nosides">
            <div class="container">
                <div class="menu-list col-sm-8 nopadding">
                    <ul class="nodots nopaddingleft nopaddingright nomarginbottom clearfix">
                        <li class="left"><a href=""><span>Beranda</span></a></li>
                        <li class="left"><a href=""><span>Berita Bela Diri</span></a></li>
                        <li class="left"><a href=""><span>Artikel</span></a></li>
                        <li class="left"><a href=""><span>Ulasan</span></a></li>
                        <li class="left"><a href=""><span>Kontak</span></a></li>
                    </ul>
                </div>
                <div class="social-list col-sm-4">
                    <div>
                        <svg class="social-icons">
                          <use xlink:href="asset/images/icons/social_icons.svg#rss"></use>
                        </svg>
                    </div>
                    <div>
                        <svg class="social-icons">
                          <use xlink:href="asset/images/icons/social_icons.svg#instagram"></use>
                        </svg>
                    </div>
                    <div>
                        <svg class="social-icons">
                          <use xlink:href="asset/images/icons/social_icons.svg#google_plus"></use>
                        </svg>
                    </div>
                    <div>
                        <svg class="social-icons">
                          <use xlink:href="asset/images/icons/social_icons.svg#fb"></use>
                        </svg>
                    </div>
                    <div>
                        <svg class="social-icons">
                          <use xlink:href="asset/images/icons/social_icons.svg#twitter"></use>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php }?>
</nav>
