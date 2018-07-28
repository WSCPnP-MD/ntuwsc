(function($) {


    $(document).ready(function() {
        $('.owl-carousel').owlCarousel({
            loop:true,
            margin:10,
            nav:false,
            autoplay:1000,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:1
                },
                1000:{
                    items:2
                }
            }
        });

        $("#23rd").click(function() {
            $("#main-image").attr("src", "../wp-content/themes/stand-out/assets/img/23rd-exco.jpg");
        });
        $("#22nd").click(function() {
            $("#main-image").attr("src", "../wp-content/themes/stand-out/assets/img/22nd-exco.jpg");
        });
        $("#21st").click(function() {
            $("#main-image").attr("src", "../wp-content/themes/stand-out/assets/img/21st-exco.jpg");
        });
        $("#20th").click(function() {
            $("#main-image").attr("src", "../wp-content/themes/stand-out/assets/img/20th-exco.jpg");
        });
    });
})( jQuery );