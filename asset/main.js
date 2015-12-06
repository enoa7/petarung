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
    
    if($(window).width() >= 768) {
            var circleSize = '55';
    } else if ($(window).width() <= 320) {
            var circleSize = '45';
    } else {
        var circleSize = '50';
    };

    $(itemStatus).each(function(index, element){
    	var list = $(this).attr('data-value');
    	var getfill = $(this).attr('data-fcolor');
    	var getemptyfill = $(this).attr('data-bcolor');
    	$(this).circleProgress({
    		value: list,
    		size: circleSize,
    		fill: {color: getfill},
    		emptyFill: getemptyfill
    	}).on('circle-animation-progress', function(event, progress, stepValue) {
    		$(this).find('span').text(String(stepValue.toFixed(2)).substr(2));
		});
    });
});

// if($(window).width() >= 1024) {
//             // if larger or equal
//             $('.element').show();
//         } else {
//             // if smaller
//             $('.element').hide();
//     }
