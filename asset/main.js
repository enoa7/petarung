// @koala-prepend 'vendor/jquery.min.js'
// @koala-prepend 'vendor/fastclick.js'
// @koala-prepend 'vendor/bootstrap/js/bootstrap.min.js'
// @koala-prepend 'vendor/slick/js/slick.min.js'


$(document).ready(function () {

	console.log('start');
	// instantiate
	 FastClick.attach(document.body);
    $('.trigger').click(function() {
    	$('.mobile-menu-overlay').toggleClass('deactivate active');
    });

});