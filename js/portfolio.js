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
		$(".box").children().each(function( key, value ) {
			$(this).click(function() {
				console.log($(this).parent().attr('id'));
				$('html, body').animate({
					scrollTop: $("#info-box").offset().top
				}, 1000);
				$("#info-box").css('visibility', 'visible');
			});
		});

		var owl = $('.owl-carousel');
		owl.owlCarousel({
			items:1,
			loop:true,
			margin:10,
			autoplay:true,
			autoplayTimeout:1000,
			autoplayHoverPause:true
		});
	});

})( jQuery );


