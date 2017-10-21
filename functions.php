<?php

function solvishare_theme_enqueue_styles() {

    // $handle used in the parent theme when it registers its stylesheet
    // Failure to use the proper tag will result in a CSS file needlessly being loaded twice.
    // supportdesk/framework/styles.php contains the parent_style handle for this theme
    $parent_style = 'theme-style';

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        // gecompileerde en geoptimaliseerde css
        get_stylesheet_directory_uri() . '/dist/css/app.css',
        // Eerst de parent styles laden
        array( $parent_style ),
        //
        wp_get_theme()->get('Version')
    );
}
add_action( 'wp_enqueue_scripts', 'solvishare_theme_enqueue_styles' );
