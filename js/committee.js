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
            },
            dots: false
        });

        $("#23rd").click(function() {
            $("#main-image").attr("src", "../wp-content/themes/stand-out/assets/img/23rd-exco.jpg");
            showCarousel();
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
        $( ".committee-select" ).change(function() {
            switch ($(this).val()) {
                case '23': {
                    $("#main-image").attr("src", "../wp-content/themes/stand-out/assets/img/23rd-exco.jpg");
                    showCarousel();
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
        $(".owl-carousel").hide();
    }
    function showCarousel() {
        $(".owl-carousel").show();
    }
    
})( jQuery );