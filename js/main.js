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
    	function() {}
    );

    //Sign in/out
    $('#menu .fa.fa-sign-in').click(function() {
    	var currentHeight = $('#menu').css('height');
    	if (currentHeight === '150px' || currentHeight === '60px') {
	    	$('#menu').css('height', '100%');
	    	toggleHeaderText('big');
    	} else {
    		if ($(window).scrollTop() > 50) {
    			toggleHeaderHeight('small');
    			toggleHeaderText('small');
    		} else {
     			toggleHeaderHeight('big');
    			toggleHeaderText('big');
    		}
    	}

    });

    //Banner buttons
  	$('#menu .right > .fa').hover(
  		function() {
  			var color = $('#menu').css('background-color');

  			$(this).css('color', 'color');
  			$(this).css('opacity', '0.6');
  		},
  		function() {
  			$(this).css('color', '#fff');
   			$(this).css('opacity', '1');
  		}
  	);

  	//Login buttons
   	$('#menu .btn').hover(
  		function() {
  			var color = $('#menu').css('background-color');

  			$(this).css('color', 'color');
  			$(this).css('opacity', '0.6');
  		},
  		function() {
  			$(this).css('color', '#fff');
   			$(this).css('opacity', '1');
  		}
  	);

  	//Toggle login/register/forgot_pw views
  	$('#menu .btn.login').click(function() {
  		toggleViews('login', 'register', 'forgot-pw');
  	});

  	$('#menu .btn.register').click(function() {
	  	toggleViews('register', 'forgot-pw', 'login');
  	});

  	$('#menu .btn.forgot').click(function() {
  		toggleViews('forgot-pw', 'register', 'login');
  	});

    //Window scroll
    var lastScroll = 0;
    $(window).scroll(function() {
    	if (lastScroll < $(window).scrollTop() && $(window).scrollTop() > 50 && $('#menu').css('height') === '150px') {
  			toggleHeaderHeight('small');
  			toggleHeaderText('small');
    	} else if (lastScroll > $(window).scrollTop() && $(window).scrollTop() < 50 && $('#menu').css('height') === '60px') {
    		toggleHeaderHeight('big');
  			toggleHeaderText('big');
    	}

     	lastScroll = $(window).scrollTop();
    });

    //Delete Item
    $('.delete.btn').click(function() {
    	$(this).closest('li').fadeOut(300, function() {
    		$(this).closest('li').remove();
    	});
    });

    //Add Item
    $('.addBtn').click(function() {
    	var listItems = $(this).closest('li').siblings();
    	var lastItem = listItems[listItems.length-1];
    	var newItem = "<li><div class='item' style='background-color:" + "#ff0000" + ";'><h3>" + "Newly added item" + "</h3><span class='arrow'><i class='fa fa-chevron-right'></i></span></div><div class='hover-container'><span class='delete btn'><i class='fa fa-times'></i></span><span class='done btn'><i class='fa fa-check'></i></span></div></li>";

    	$(newItem).insertAfter(lastItem);
    });

    //Helper functions
    function toggleHeaderText(size) {
    	if (size === 'small') {
  			$('#menu h1').css('margin-top', '10px');
  			$('#menu h1').css('font-size', '23px');
   			$('#menu h2').css('margin-top', '4px');
  			$('#menu h2').css('font-size', '13px');
    	} else {
				$('#menu h1').css('margin-top', '40px');
				$('#menu h1').css('font-size', '40px');
	 			$('#menu h2').css('margin-top', '10px');
				$('#menu h2').css('font-size', '15px');
    	}
    }

    function toggleHeaderHeight(size) {
    	if (size === 'small') {
    		$('#menu').css('height', '60px');
    	} else {
     		$('#menu').css('height', '150px');
    	}
    }

    function toggleViews(show, hide1, hide2) {
  		$('#menu .menu-view.'+show).css('display', 'block');
  		$('#menu .menu-view.'+hide1).css('display', 'none');
  		$('#menu .menu-view.'+hide2).css('display', 'none');  	
    }
});