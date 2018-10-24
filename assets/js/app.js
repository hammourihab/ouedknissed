$(document).ready(function () {
	$("#small_screens_sidebar").sidebar('setting', 'transition', 'overlay').sidebar('attach events', '.toc.item');
	$('#sidebar_toggle').on('click', function(){
		$('#small_screens_sidebar').sidebar('hide');
	});
	/**
	 * Dropdown
	 */
	$('.ui.dropdown').dropdown();
	/**
	 * Accordion
	 */
	$('.ui.accordion').accordion();
	/**
	 * Messages
	 */
	$('.message .close')
		.on('click', function () {
			$(this)
				.closest('.message')
				.transition('scale');
		});
});
