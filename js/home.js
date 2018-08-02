(function($) {

    var containerWidth = Math.round($(window).width() / 2 - 100);

	$(document).ready(function () {   
        resize();
    });

    $( window ).resize(function() {
        containerWidth = Math.round($(window).width() / 2 - 100);
        resize();
        //$("#fb-frame").load(location.href + " #fb-frame"); // Add space between URL and selector.
        //location.reload();
    });
    
    function resize() {
        if (containerWidth < 500) {
            console.log("resizing...");
            $(".fb-page").attr("data-width", containerWidth);
        }
    }

    //Listen for changes in viewport size and resize accordingly.
    //Remember to change containerWidth and src.

})( jQuery );