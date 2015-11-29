// @koala-prepend 'vendor/jquery.min.js'
// @koala-prepend 'vendor/fastclick.js'
// @koala-prepend 'vendor/bootstrap/js/bootstrap.min.js'
// @koala-prepend 'vendor/slick/js/slick.min.js'


$(document).ready(function() {

    // instantiate
    FastClick.attach(document.body);
    $('.trigger').click(function() {
        $('.mobile-menu-overlay').toggleClass('deactivate active');
    });

    var itemStatus = $('.item-status-list > .item-status');
    $(itemStatus).each(function(index, element){
    	var list = $(this).attr('data-value');
    	var getfill = $(this).attr('data-fcolor');
    	console.log(getfill);
    	var getemptyfill = $(this).attr('data-bcolor');
    	$(this).circleProgress({
    		value: list,
    		size: '45',
    		fill: {color: getfill},
    		emptyFill: getemptyfill
    	}).on('circle-animation-progress', function(event, progress, stepValue) {
    		$(this).find('span').text(String(stepValue.toFixed(2)).substr(2));
		});
    });
});
