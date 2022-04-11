<?php

if( ! function_exists('temacustom_setup')){
    function temacustom_setup(){
        add_theme_support("title-tag");

        add_theme_support("automatic-feed-links");

        add_theme_support("post-thumbnails");

        add_image_size('temacustom_single',800,493,true);
        add_image_size('temacustom_big',1400,928,true);

        register_nav_menus( array(
            'header'=>esc_html__('Header','temacustom')
        ));

        load_theme_textdomain('temacustom', get_template_directory().'/languages');


    }
}
add_action('after_setup_theme','temacustom_setup');


if ( ! function_exists( 'temacustom_styles_scripts' ) ) {

	function temacustom_style_scripts() {

		wp_enqueue_script( 'temacustom-scripts', get_template_directory_uri() . '/js/scripts.js', array( 'jquery' ),'', true );

		wp_enqueue_style( 'temacustom-sourcesanspro','//fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700');

		wp_enqueue_style( 'temacustom-normalize', 'https://cdnjs.cloudflare.com/ajax/libs/normalize/4.2.0/normalize.min.css');

		wp_enqueue_style( 'temacustom', get_template_directory_uri().'/style.css');

	}

}
add_action( 'wp_enqueue_scripts', 'temacustom_style_scripts' );



/*  Register sidebars
/* ------------------------------------ */
if ( ! function_exists( 'temacustom_sidebars' ) ) {

	function temacustom_sidebars()	{
		register_sidebar(array( 'name' => esc_html__( 'Primary', 'temacustom' ),'id' => 'primary','description' => esc_html__( 'Normal full width sidebar.', 'temacustom' ), 'before_widget' => '<div id="%1$s" class="widget %2$s">','after_widget' => '</div>','before_title' => '<h3>','after_title' => '</h3>'));
	}

}
add_action( 'widgets_init', 'temacustom_sidebars' );

?>