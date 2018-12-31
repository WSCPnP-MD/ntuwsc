<?php
    $genre_url = add_query_arg('genre', 'lol', get_permalink());
    $portfolioID = $_GET['genre'];
    $IMG_FOLDER = './wp-content/themes/stand-out/assets/img/portfolio-page-image-showcase';
    # Outputs for example: http://my_wordpress.com/photos?genre=pop

    // function cdl_query_vars( $query_vars ){

    // once again, PHP is dumb so the only way to access global variables is through the $GLOBALS super-global variable.
    $directory_to_open = $GLOBALS['IMG_FOLDER'] . "/$portfolioID";
    
    // check if directory exists
    if (@opendir($directory_to_open) === false)
    {
        echo ''; // return nothing if directory doesnt exist
    } 
    else
    {
        $first = true;
        if ($handle = @opendir($directory_to_open)) {

            while (false !== ($entry = readdir($handle))) {
        
                if ($entry != "." && $entry != "..") {
                    if (!$first)
                        echo ",";
                    echo "$entry";
                    $first = false;
                }
            }
        
            closedir($handle);
        }
    }

?>