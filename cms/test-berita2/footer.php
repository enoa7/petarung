<?php if( $detect->isMobile() && !$detect->isTablet() ){ ?>
    <footer id="page-footer">
        <hr class="petarung-line-highlight">
            <div class="container">
                <div class="back-to-top">
                    <i class="fa fa-chevron-circle-up">&nbsp;</i>
                </div>
            </div>
        <hr class="petarung-line-highlight">
        <div class="copyright col-sm-6 text-center">
            <div><i class="fa fa-copyright">&nbsp;</i><span>petarung indonesia 2015</span></div>
        </div>
    </footer>
<?php } else { ?>
    <footer id="page-footer">
        <hr class="petarung-line">
        <div class="container spacepad">
            <div class="left-column col-sm-7">
                <div class="right">
                    <ul class="nodots">
                        <li><a href="">home</a></li>
                        <li><a href="">berita beladiri</a></li>
                        <li><a href="">artikel</a></li>
                        <li><a href="">ulasan</a></li>
                        <li><a href="">kontak</a></li>
                    </ul>
                    <ul class="nodots">
                        <li><a href="">tentang kami</a></li>
                        <li><a href="">karir</a></li>
                        <li><a href="">policy</a></li>
                    </ul>
                </div>
            </div>
            <div class="right-column col-sm-5">
                <div class="form-group col-xs-12 searchbox">
                    <input type="text" placeholder="Cari topik, artikel, atau ulasan" class="form-control">
                    <i class="fa fa-search"></i>
                </div>
                <div class="copyright col-sm-6 pull-right text-right">
                    <div><i class="fa fa-copyright">&nbsp;</i><span>petarung indonesia 2015</span></div>
                </div>
            </div>
        </div>
    </footer>
<?php } ?>
    <!-- all compiled scripts -->
    <script type="text/javascript" src="asset/main.min.js"></script>
    <script type="text/javascript" src="asset/vendor/jquery-circle-progress/dist/circle-progress.js"></script>
