(function ($) {

	$(document).ready(function () {
		var $logo = $('#fresh-logo');

		if(!$logo.length) {
			return;
		}

		$(window).on('resize', handleResize);

		handleResize();

		function handleResize () {
			var width = $logo.width();

			$logo.css({
				position : 'absolute',
				left : 'calc(50% - ' + width/2 + 'px)'
			});
		}
	});

})($);