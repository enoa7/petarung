
<?php  if( $detect->isMobile() && !$detect->isTablet() ) { ?>
 <nav class="navbar mobile nomarginbottom">
    <div class="container">
        <div class="">
            <div class="logo col-xs-5 nopaddingleft">
                <img class="img-responsive"src="asset/images/petarung_logo_mobile.png">
            </div>
            <div class="header_form col-xs-7">
                <div class="hamburger">
                    <i class="fa fa-bars"></i>
                </div>
                <div class="login">log in</div>
                <div class="searchbox">
                    <i class="fa fa-search"></i>
                </div>
                <!-- <div class="col-xs-3 text-left pull-right hamburger">
                    <i class="fa fa-bars hover"></i>
                </div>
                <div class="col-xs-1 separator pull-right text-center">|</div>
                <div class="col-xs-4 pull-right text-center">log in</div>
                <div class="col-xs-1 separator pull-right text-center">|</div>
                <div class="col-xs-3 text-right pull-right searchbox">
                    <i class="fa fa-search hover"></i>
                </div> -->
                <!-- <form class="">
                    <div class="form-group col-xs-12 searchbox">
                        <input type="text" placeholder="Cari topik, artikel, atau ulasan" class="form-control">
                        <i class="fa fa-search"></i>
                    </div>
                    <div class="form-group col-sm-6">
                        <input type="text" placeholder="Email" class="form-control">
                    </div>
                    <div class="col-sm-6">
                       <button type="submit" class="btn btn-warning">subscribe sekarang</button>
                    </div>
                </form> -->
            </div>
        </div>
    </div>
</nav>
<div class="mobile-menu-overlay deactivate">
    <div class="container">
        <ul>
            <li>afqawdw</li>
            <li>afqawdw</li>
            <li>afqawdw</li>
        </ul>
    </div>
</div>
<?php } else { ?>
<nav class="navbar desktop nomarginbottom">
    <div class="container">
        <div class="logo col-sm-4 col-md-7">
            <img class="img-responsive"src="asset/images/petarung_logo.jpg">
        </div>
        <div class="header_form col-sm-8 col-md-5 nopaddingright">
            <form class="">
                <div class="form-group col-xs-12 searchbox">
                    <input type="text" placeholder="Cari topik, artikel, atau ulasan" class="form-control">
                    <i class="fa fa-search"></i>
                </div>
                <div class="form-group col-sm-6 nopaddingright">
                    <input type="text" placeholder="Email" class="form-control">
                </div>
                <div class="col-sm-6">
                   <button type="submit" class="btn btn-warning">subscribe sekarang</button>
                </div>
            </form>
            <div class="ad-text col-xs-12 visible-md visible-lg">
            <div><span class="highlight">LOG IN</span> atau <span class="highlight">DAFTAR SEKARANG</span> untuk sesuaikan berita pilihan Anda</div>
                
            </div>
        </div>
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
</nav>
<?php }?>
