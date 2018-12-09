(function($) {

	$( document ).ready(function() {
		var $grid = $('.grid').isotope({
			// options
			itemSelector: '.box',
			layoutMode: 'fitRows'
		});
			
		$('#getRSP').click(function() {
			$grid.isotope({ filter: '.RSP' });
		});

		$('#getSP').click(function() {
			$grid.isotope({ filter: '.SP' });
		});

		$('#getSC').click(function() {
			$grid.isotope({ filter: '.SC' });
		});

		$('#getAll').click(function() {
			$grid.isotope({ filter: '*' });
		});    
	});

})( jQuery );


