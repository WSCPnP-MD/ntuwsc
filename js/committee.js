(function($) {


    $(document).ready(function() {
        $("#24th-carousel").owlCarousel({
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
            },
            dots: false
        });

        $("#23rd-carousel").owlCarousel({
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
            },
            dots: false
        });
        $("#23rd-carousel").hide();
        
        $("#24th").click(function() {
            $("#main-image").attr("src", "../wp-content/themes/stand-out/assets/img/24th-exco.jpg");
            hideCarousel();
            $("#24th-carousel").show();
        });
        $("#23rd").click(function() {
            $("#main-image").attr("src", "../wp-content/themes/stand-out/assets/img/23rd-exco.jpg");
            hideCarousel();
            $("#23rd-carousel").show();
        });
        $("#22nd").click(function() {
            $("#main-image").attr("src", "../wp-content/themes/stand-out/assets/img/22nd-exco.jpg");
            hideCarousel();
        });
        $("#21st").click(function() {
            $("#main-image").attr("src", "../wp-content/themes/stand-out/assets/img/21st-exco.jpg");
            hideCarousel();
        });
        $("#20th").click(function() {
            $("#main-image").attr("src", "../wp-content/themes/stand-out/assets/img/20th-exco.jpg");
            hideCarousel();
        });
                $("#23rd-carousel").owlCarousel({
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
            },
            dots: false
        });
        $("#23rd-carousel").hide();
        
        $("#24th").click(function() {
            $("#main-image").attr("src", "../wp-content/themes/stand-out/assets/img/24th-exco.jpg");
            hideCarousel();
            $("#24th-carousel").show();
        });

        /* For Mobile navigation */
        $( ".committee-select" ).change(function() {
            switch ($(this).val()) {
                case '24': {
                    $("#main-image").attr("src", "../wp-content/themes/stand-out/assets/img/24th-exco.jpg");
                    hideCarousel();
                    $("#24th-carousel").show();
                    break;
                }
                case '23': {
                    $("#main-image").attr("src", "../wp-content/themes/stand-out/assets/img/23rd-exco.jpg");
                    hideCarousel();
                    $("#23rd-carousel").show();
                    break;
                }
                case '22': {
                    $("#main-image").attr("src", "../wp-content/themes/stand-out/assets/img/22nd-exco.jpg");
                    hideCarousel();
                    break;
                }
                case '21': {
                    $("#main-image").attr("src", "../wp-content/themes/stand-out/assets/img/21st-exco.jpg");
                    hideCarousel();
                    break;
                }
                case '20': {
                    $("#main-image").attr("src", "../wp-content/themes/stand-out/assets/img/20th-exco.jpg");
                    hideCarousel();
                    break;
                }
            }
        }); 

    });

    /* This page has an Owl Carousel. These functions are an alias for showing and hiding them. Doesn't help much in terms of refactoring, but good for readability.*/
    function hideCarousel() {
        $("#24th-carousel").hide(); 
        $("#23rd-carousel").hide();
    }
})( jQuery );