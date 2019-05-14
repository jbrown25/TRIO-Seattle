($ => {
	console.log('js loaded.');

	const search_toggle = $('.navbar .search_toggle');
	const search_form = $('.navbar .search-form');
	const search_input = search_form.find('input[type="search"]');
	const search_overlay = $('.search_overlay');

	search_toggle.on('click', () => {
		search_form.addClass('active');
		search_overlay.show();
		setTimeout(() => {
			search_input.focus();
		}, 250);
	});

	search_overlay.on('click', () => {
		search_form.removeClass('active');
		search_overlay.hide();
	});

})(jQuery);