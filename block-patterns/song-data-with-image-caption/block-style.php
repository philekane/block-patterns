<?php
/**
 * Register custom block styles.
 *
 * @author Phil Kane
 * @package bwe-block-patterns
 */

namespace BweBlockPatterns\BlockPatterns\SongDataWithImageCaption;

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

/**
 * Register Block Styles
 */
class Block_Style {

	/**
	 * Construct the plugin object
	 */
    public function __construct() {
		add_action( 'init', array( $this, 'bwe_register_block_styles' ) );
	}
	/**
	 * Register block styles
	 *
	 * @return void
	 */
	public function bwe_register_block_styles() {

		register_block_style(
			'core/image',
			array(
				'name'         => 'bwe-image-caption',
				'label'        => __( 'Bwe Image Caption', 'textdomain' ),
				'inline_style' => '.bwe-image-caption {
					font-size: small!important;
					font-style: italic!important;
					color:#000000!important;
				}',
			)
		);
	}
}