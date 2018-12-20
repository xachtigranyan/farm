$(document).ready(function() {
	$('.main-nav li').each(function() {
		if($(this).attr('data-current') == $('body').attr('data-current')) {
			$(this).addClass('active');
			return false;
		}
	});
});