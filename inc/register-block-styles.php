<?php
/**
 * Block styles.
 *
 * @package buddysphere
 * @since 1.0.0
 */

/**
 * Register block styles
 *
 * @since 1.0.0
 *
 * @return void
 */
function buddysphere_register_block_styles() {

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/button',
		array(
			'name'  => 'buddysphere-flat-button',
			'label' => __( 'Flat button', 'buddysphere' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/list',
		array(
			'name'  => 'buddysphere-list-underline',
			'label' => __( 'Underlined list items', 'buddysphere' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/group',
		array(
			'name'  => 'buddysphere-box-shadow',
			'label' => __( 'Box shadow', 'buddysphere' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/column',
		array(
			'name'  => 'buddysphere-box-shadow',
			'label' => __( 'Box shadow', 'buddysphere' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/columns',
		array(
			'name'  => 'buddysphere-box-shadow',
			'label' => __( 'Box shadow', 'buddysphere' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/details',
		array(
			'name'  => 'buddysphere-plus',
			'label' => __( 'Plus & minus', 'buddysphere' ),
		)
	);
}
add_action( 'init', 'buddysphere_register_block_styles' );

/**
 * This is an example of how to unregister a core block style.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/block-api/block-styles/
 * @see https://github.com/WordPress/gutenberg/pull/37580
 *
 * @since 1.0.0
 *
 * @return void
 */
function buddysphere_unregister_block_style() {
	wp_enqueue_script(
		'buddysphere-unregister',
		get_stylesheet_directory_uri() . '/assets/js/unregister.js',
		array( 'wp-blocks', 'wp-dom-ready', 'wp-edit-post' ),
		BUDDYSPHERE_VERSION,
		true
	);
}
add_action( 'enqueue_block_editor_assets', 'buddysphere_unregister_block_style' );
