/**
 * @author matticus
 */

$(function() {
			var pull = $('#pull');
			var	menu = $('ul#mainNav');
			var	menuHeight= menu.height();

			$(pull).click(function(e) {
				e.preventDefault();
				menu.slideToggle();
			});

			$(window).resize(function(){
        		var w = $(window).width();
        		if(w > 320 && menu.is(':hidden')) {
        			menu.removeAttr('style');
        		}
    		});
		});


