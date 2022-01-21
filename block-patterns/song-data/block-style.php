<?php
/**
 * Register custom block styles.
 *
 * @author Phil Kane
 * @package bwe-block-patterns
 */

namespace BweBlockPatterns\BlockPatterns\SongData;

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
			'core/columns',
			array(
				'name'         => 'song-info-padding',
				'label'        => __( 'Song Info Padding', 'textdomain' ),
				'inline_style' => '.song-info-padding {
					padding: 0 0 0 4%;
				}',
			)
		);
	}
}