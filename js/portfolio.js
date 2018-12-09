(function($) {
	var $grid = $('.grid').isotope({
        // options
        itemSelector: '.box',
        layoutMode: 'fitRows'
    });
    
    $('#getRSP').click(function() {
        $grid.isotope({ filter: '.RSP' });
    });
    
    $('#getSP').click(function() {
        $grid.isotope({ filter: '.RSP' });
    });
    
    $('#getSC').click(function() {
        $grid.isotope({ filter: '.RSP' });
    });
    
    $('#getAll').click(function() {
        $grid.isotope({ filter: '*' });
    });    
})( jQuery );


