(function () {
	var $grid;

	var setupShuffle = function () {
		$grid = $('.grid');

		$grid
			.shuffle({
				group: 'all',
				itemSelector: '.card'
			});
	};

	var setupFilterEvents = function () {
		$('#filter-bar a[data-filter]')
			.on('click', handleFilter);
	}

	var handleFilter = function (e) {
		e.preventDefault();

		var filter = $(e.target).data('filter');

		$grid.shuffle('shuffle', filter);
	}

	$(document).ready(function () {
		setupShuffle();
		setupFilterEvents();
	});
})();

