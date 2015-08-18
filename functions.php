<?php
/**
 * Sample Performag child theme for Thrive Theme customers.
 * Child themes documentation:- https://thrivethemes.com/thrive-knowledge-base/?section_id=5354&parent=603
 */


/**
 * Load Javascript / CSS Files used by the child theme
 */
function PREFIX_enqueue_child_style() {

    // Enqueue main child theme style.css file and make sure parent theme files are set as dependencies
    wp_enqueue_style("thrive_child_css", get_stylesheet_uri(), array("thrive-main-style", "thrive-reset"));

    // Example for how to Enqueue a separate css file "/css/custom.css".
    wp_enqueue_style("thrive_example_css", get_stylesheet_directory_uri() . "/css/custom.css", array("thrive-main-style", "thrive-reset", "thrive_child_css"));

    // Example for how to enqueue a separate js file "/js/example.js".  Dependant on jQuery.
    wp_enqueue_script("thrive_example_javascript", get_stylesheet_directory_uri() . "/js/example.js", array("jquery"));

    // use this code to remove the parent CSS file (warning: will remove most of theme styles!)
    // wp_dequeue_style( 'thrive-main-style' );
    // wp_deregister_style( 'thrive-main-style' );

}

add_action( 'wp_enqueue_scripts', 'PREFIX_enqueue_child_style' );

