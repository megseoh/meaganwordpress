(function ($, root, undefined) {
	
	$(function () {
		
		'use strict';
		
		// js for turquoise o's in primary navigation
		var current = $('.current_page_item a, .current_page_parent a, .current-menu-item a');

		var newText = current.text().replace(/o/g, '<span class="selectedNav">o</span>');
		current.html(newText);
		

		// js for sticky nav
		var body = $('body');
		var wrapper = $('.wrapper');
		var headerWrapper = $('.headerWrapper');
		var header = $('.header');
		var logo = $('.logo-img');
		var name = $('.name');
		var top = $(window).scrollTop();

		if (top > 190) {
			logo.css({
				width: 75,
				height : 75
			});
		}
	
		// js for logo on
		$(window).scroll(function() {
			top = $(this).scrollTop();
			if (top > 140) {
				wrapper.addClass("f-wrapper");
				headerWrapper.addClass("f-headerWrapper");
				header.addClass("f-header");
				name.fadeIn();
			} else {
				wrapper.removeClass("f-wrapper");
				headerWrapper.removeClass("f-headerWrapper");
				header.removeClass("f-header");
				name.fadeOut();
			}
			if (top < 190) {
				logo.css({
					width: 200 - top/1.3,
					height : 200 - top/1.3
				});
			}
		});


		/*  Replace all SVG images with inline SVG */
		$('img.svg').each(function(){
			var $img = $(this);
			var imgID = $img.attr('id');
			var imgClass = $img.attr('class');
			var imgURL = $img.attr('src');

			$.get(imgURL, function(data) {
				// Get the SVG tag, ignore the rest
				var $svg = $(data).find('svg');
				// Add replaced image's ID to the new SVG
				if (typeof imgID !== 'undefined') {
					$svg = $svg.attr('id', imgID);
				}
				// Add replaced image's classes to the new SVG
				if (typeof imgClass !== 'undefined') {
					$svg = $svg.attr('class', imgClass+' replaced-svg');
				}
				// Remove any invalid XML tags as per http://validator.w3.org
				$svg = $svg.removeAttr('xmlns:a');
				// Replace image with new SVG
				$img.replaceWith($svg);
			});
		});


		// adding little twitter icon before list items
		$('.really_simple_twitter_widget li').before('<span class="fa fa-twitter">');


	});
	
})(jQuery, this);
