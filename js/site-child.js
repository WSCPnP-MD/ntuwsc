(function($) {
	$(document).ready(function () {
	  //Hide the pre-header if not main page
	  if (window.location.href != "http://clubs.ntu.edu.sg/ntuwsc/" || window.location.href != "https://clubs.ntu.edu.sg/ntuwsc/" ) {
		$("#wpbf-pre-header").hide();
	  }
	});
})( jQuery );