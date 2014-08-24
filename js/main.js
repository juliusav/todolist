$(function () {

		//When arrow hovered, slide item left
    $('.arrow').hover(
	    function() {
				$(this).closest('.item').addClass('open');
			},
			function() {
				if (!$(this).closest('.item').siblings('.hover-container').is(':hover')) {
					$(this).closest('.item').removeClass('open');
				}
			}
		);

    //Keep item slid to the left if buttons hovered
    $('.hover-container').hover(
	    function() {
				$(this).siblings('.item').addClass('open');
			},
			function() {
				$(this).siblings('.item').removeClass('open');
			}
    );

    //Banner
    $('.box').hover(
    	function() {
    		var newBgColor = $(this).children().first().css('background-color');
    		$('#menu').css('background-color', newBgColor);
    	},
    	function() {
    	}
    );

    //Window scroll
    var lastScroll = 0;

    $(window).scroll(function() {

    	if (lastScroll < $(window).scrollTop() 
    			&& $(window).scrollTop() > 50) {
    			$('#menu').css('height', '60px');
    			$('#menu h1').css('margin-top', '10px');
    			$('#menu h1').css('font-size', '23px');
     			$('#menu h2').css('margin-top', '4px');
    			$('#menu h2').css('font-size', '13px');
    	} else if (lastScroll > $(window).scrollTop() 
    			&& $(window).scrollTop() < 50) {
    			$('#menu').css('height', '150px');
    			$('#menu h1').css('margin-top', '40px');
    			$('#menu h1').css('font-size', '40px');
     			$('#menu h2').css('margin-top', '10px');
    			$('#menu h2').css('font-size', '15px');
    	}

     	lastScroll = $(window).scrollTop();
    })
});