// @koala-prepend 'vendor/jquery.min.js'
// @koala-prepend 'vendor/fastclick.js'
// @koala-prepend 'vendor/bootstrap/js/bootstrap.min.js'
// @koala-prepend 'vendor/slick/js/slick.min.js'


$(document).ready(function () {
	
	$('.hover').bind('touchstart touchend', function(e) {
        e.preventDefault();
        $(this).toggleClass('hover_effect');
    });

});