(function($) {
	$(document).ready(function () {   
		//remove href for top menus with dropdown.
		$($(".unclickable a")[0]).removeAttr("href"); //about us top menu
		$($(".unclickable a")[7]).removeAttr("href"); //about us top menu on mobile
	});
})( jQuery );