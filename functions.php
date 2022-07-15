<?php


define('THEME_ROOT', get_template_directory_uri());
define('CSS_DIR', THEME_ROOT . '/assets/css/');
define('JS_DIR', THEME_ROOT . '/assets/js/');
define('VIDEO_DIR', THEME_ROOT . '/assets/video/');
define('IMG_DIR', THEME_ROOT . '/assets/images/');

add_action( 'wp_enqueue_scripts', 'original_styles' );
add_action( 'wp_enqueue_scripts', 'original_scripts' );




function original_styles() {
	wp_enqueue_style( 'main-styles', get_stylesheet_uri() );
	wp_enqueue_style( 'swiper-styles', CSS_DIR . 'swiper-styles.min.css' );
}


function original_scripts() {
	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', '/wp-content/themes/original/assets/js/jquery.min.js', false, null, true );
	wp_enqueue_script( 'jquery' );

    wp_enqueue_script( 'swiper-scripts', JS_DIR . 'swiper.min.js', array(), 'null', true );

    wp_enqueue_script( 'main-scripts', JS_DIR . 'script.js', array(), 'null', true );

}    



add_filter( 'wp_check_filetype_and_ext', 'fix_svg_mime_type', 10, 5 );

# Исправление MIME типа для SVG файлов.
function fix_svg_mime_type( $data, $file, $filename, $mimes, $real_mime = '' ){

	// WP 5.1 +
	if( version_compare( $GLOBALS['wp_version'], '5.1.0', '>=' ) )
		$dosvg = in_array( $real_mime, [ 'image/svg', 'image/svg+xml' ] );
	else
		$dosvg = ( '.svg' === strtolower( substr($filename, -4) ) );

	// mime тип был обнулен, поправим его
	// а также проверим право пользователя
	if( $dosvg ){

		// разрешим
		if( current_user_can('manage_options') ){

			$data['ext']  = 'svg';
			$data['type'] = 'image/svg+xml';
		}
		// запретим
		else {
			$data['ext'] = $type_and_ext['type'] = false;
		}

	}

	return $data;
}