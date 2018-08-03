(function($) {

    var containerWidth = Math.round($(window).width() / 2 - 100);


	$(document).ready(function () {
        setTimeout(function() {
            var containerHeight = $("#sb_instagram").height();
            resizeFb(containerWidth, containerHeight);
        }, 5000);
        
    });

    $( window ).resize(function() {
        if ($(window).width() > 750) {
            containerWidth = Math.round($(window).width() / 2 - 100);
        } else {
            containerWidth = Math.round($(window).width() - 40);
        }
        
        var containerHeight = $("#sb_instagram").height();
        resizeFb(containerWidth, containerHeight);
    });
    
    function resizeFb(containerWidth, containerHeight) {
        var url = "https://www.facebook.com/plugins/page.php" +
        "?href=https%3A%2F%2Fwww.facebook.com%2Fntuwsc%2F" +
        "&tabs=timeline" +
        "&width=" + containerWidth +
        "&height=" + containerHeight +
        "&small_header=false" +
        "&adapt_container_width=true" +
        "&hide_cover=false" +
        "&show_facepile=true" +
        "&appId";
        $("#fb-frame").attr("src", url);
        //$(".fb-page").attr("data-width", containerWidth);
        //$(".fb-page").attr("data-height", containerHeight);
        $("#fb-frame").load(window.location.href + " #fb-frame", function( response, status, xhr ) {
            console.log("reload done~");
            if ( status == "error" ) {
                var msg = "Sorry but there was an error: ";
                console.log( msg + xhr.status + " " + xhr.statusText );
              }
        }); // Add space between URL and selector.
    }

})( jQuery );