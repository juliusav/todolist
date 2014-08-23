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
});