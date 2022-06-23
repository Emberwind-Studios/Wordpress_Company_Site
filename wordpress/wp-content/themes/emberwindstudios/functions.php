<?php
if ( ! function_exists( 'emberwind_studios_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook.
 */
function emberwind_studios_setup() {
	// Add support for block styles.
	add_theme_support( 'wp-block-styles' );

	// Enqueue editor styles.
	add_editor_style( 'editor-style.css' );
}
endif; // myfirsttheme_setup
add_action( 'after_setup_theme', 'emberwind_studios_setup' );

if ( ! function_exists( 'emberwind_studios_styles' ) ) :

/**
	 * Enqueue styles.
	 *
	 * @since Emberwind studios 1.0
	 *
	 * @return void
	 */
	function emberwind_studios_styles() {
		// Register theme stylesheet.
		$theme_version = wp_get_theme()->get( 'Version' );

		$version_string = is_string( $theme_version ) ? $theme_version : false;
		wp_register_style(
			'emberwind-studios-style',
			get_template_directory_uri() . '/style.css',
			array(),
			$version_string
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'emberwind-studios-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'emberwind_studios_styles' );

