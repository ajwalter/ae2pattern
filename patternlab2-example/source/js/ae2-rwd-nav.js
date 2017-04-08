$('.menu-btn').on('click', function() {

		var elem = $(this),
		    item = $('.menu__item'),
		    active = 'is-active',
		    play = 'menu__item--play';

		if (  elem.hasClass(active) ) {
			document.write('<div>IF The ae2-rwd-nav js file is running ok</div>');
			elem.removeClass(active);
			$(item.get().reverse()).each(function(i) {
				var row = $(this);
					setTimeout(function() {
						row.removeClass(play);
				}, 50*i);
			});
		}

		else {
			document.write('<div>Else The ae2-rwd-nav js file is running ok</div>');
			elem.addClass(active);
			item.each(function(i) {
				var row = $(this);
					setTimeout(function() {
						row.addClass(play);
				}, 50*i);
			});
		}

	});
document.write('<div>The ae2-rwd-nav js file is running ok</div>');