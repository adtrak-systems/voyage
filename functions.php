<?php 

/*
    This will be the place for theme specific functions, this includes things such as
    changing the length of excerpts, pagination, etc. We will use this to properly define
    specific functionality which should not be directly included into a function.
 */

function voyage_setup() {
    load_theme_textdomain( 'voyage', trailingslashit( get_template_directory() ) . 'languages' );
    add_theme_support( 'html5', array( 'search-form', 'gallery' ) );

    global $content_width;
    if ( !isset( $content_width ) || !is_int( $content_width ) )
       $content_width = (int) 1200;

    register_nav_menu( 'header', __( 'Header menu', 'voyage' ) );
}
add_action( 'after_setup_theme', 'voyage_setup', 11 );