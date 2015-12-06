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

    if ($(window).width() >= 768) {
        var circleSize = '55';
    } else if ($(window).width() <= 320) {
        var circleSize = '45';
    } else {
        var circleSize = '50';
    };


    $(itemStatus).each(function(index, element) {
        var list = $(this).attr('data-value');

        var getfill = $(this).attr('data-fcolor');
        var getemptyfill = $(this).attr('data-bcolor');
        $(this).circleProgress({
            value: list,
            size: circleSize,
            fill: {
                color: getfill
            },
            emptyFill: getemptyfill
        }).on('circle-animation-progress', function(event, progress, stepValue) {
            $(this).find('span').text(String(stepValue.toFixed(2)).substr(2));
        });
    });


    // $(itemStatus).each(function(index, element) {
    //     var x = 0;
    //     var list = $(this).attr('data-value');
    //     var x = (parseInt($(list)));
    //     var sum += $(this);
    //     return sum;

    // });
    // var total = 0,
    //     valid_labels = 0,
    //     average;

    // $('.pm_label').each(function () {
    //     var val = parseInt(this.innerHTML, 10);
    //     if (val !== 0) {
    //         valid_labels += 1;
    //         total += val;
    //     }
    // });

    // average = total / valid_labels;
    // $('.average').val(average);

    function calculateSum() {

        //set the variables
        var total = 0,
            valid_labels = 0,
            average;

        //use each() to iterate thorough the value
        $(itemStatus).each(function() {

            // get the value
            var list = $(this).attr('data-value');

            // multiply it by 100
            var newlist = list * 100;

            // change the type to INT
            var val = parseInt(newlist, 10);

            //calculate how many element there is
            if (val !== 0) {
                valid_labels += 1;
                total += val;
            };

        });

        //calculate the average
        average = total / valid_labels;

        //display it
        // $('.average').html(average);
        console.log(average);
    }

    // call the function
    calculateSum();

});
