//Color Switcher
//Copyright 2014 8Guild.com

$(document).ready(function(e) {
	
	var toggle = $('.color-switcher .toggle');
	var colorTile = $('.color-switcher a'); 
	toggle.click(function(){
		$(this).parent().toggleClass('open');
	});
	
	colorTile.click(function(e){
		colorTile.removeClass('current');
		$(this).addClass('current');
		var color = $(this).attr('data-color');
		$('head link.color-scheme').attr('href', 'http://localhost/Eitmad/public/frontend/ecommerce/assets/css/colors/color-' + color + '.css');
		e.preventDefault();
	});
	
});
	