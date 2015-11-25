// @koala-prepend 'vendor/jquery.min.js'
// @koala-prepend 'vendor/fastclick.js'
// @koala-prepend 'vendor/bootstrap/js/bootstrap.min.js'
// @koala-prepend 'vendor/slick/js/slick.min.js'


$(document).ready(function () {

	// instantiate
	 FastClick.attach(document.body);
    $('.navbar.mobile .hamburger').click(function() {
    	$('.red_box').toggleClass('deactivate active');
    });

});