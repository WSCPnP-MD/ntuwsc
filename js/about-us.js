
(function($) {
	var periods = {};
	var x = window.matchMedia("(max-width: 600px)");
	function myFunction(x) {
		if (x.matches) { // If media query matches
			$(".timeline-content").each(function(index, element) {
				$(element).find(".timeline-title").text(periods[index][1] + " (" + periods[index][0] + ")");
				$(element).find(".timeline-period").hide();
			})
		}
		else {
			$(".timeline-content").each(function(index, element) {
				$(element).find(".timeline-title").text(periods[index][1]);
				$(element).find(".timeline-period").show();
			})
		}
	}
	$(document).ready(function() {
		$(".timeline-content").each(function(index, element) {
			//finds all timeline periods and timeline titles and store them respectively.
			periods[index] = [$(element).find(".timeline-period").text(), $(element).find(".timeline-title").text()];
		});
		myFunction(x); // Call listener function at run time
	});
	
	x.addListener(myFunction) // Attach listener function on state changes
})( jQuery );