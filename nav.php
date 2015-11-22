
<?php  if( $detect->isMobile() && !$detect->isTablet() ) { ?>
 <nav class="navbar mobile nomarginbottom">
    <div class="container">
        <div class="">
            <div class="logo col-xs-4 nopaddingleft">
                <img class="img-responsive"src="asset/images/petarung_logo_mobile.png">
            </div>
            <div class="header_form col-xs-7 pull-right nopaddingright">
                <div class="col-xs-4 text-left pull-right hamburger">
                    <i class="fa fa-bars hover"></i>
                </div>
                <div class="col-xs-2 separator pull-right text-center">|</div>
                <div class="col-xs-4 text-right pull-right searchbox">
                    <i class="fa fa-search hover"></i>
                </div>
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
<?php } else { ?>
<nav class="navbar desktop nomarginbottom">
    <div class="container">
        <div class="logo col-sm-4 col-md-7">
            <img class="img-responsive"src="asset/images/petarung_logo.jpg">
        </div>
        <div class="header_form col-sm-8 col-md-5">
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
    </div>
</nav>
<?php }?>
