<?php 
/**
 * Create a block pattern.
 *
 * @author Phil Kane
 * @package bwe-block-patterns
 */

namespace BweBlockPatterns\BlockPatterns\Audio;

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}
/**
 * Block class
 */
class Register_Audio_Block {

	/**
	 * Construct the plugin object
	 */
    public function __construct() {
		add_action( 'init', array( $this, 'bwetc_register_audio_block_patterns' ) );
		require_once __DIR__ . '/content.php';
	}
	/**
	 * Register block pattern
	 *
	 * @return void
	 */
	public function bwetc_register_audio_block_patterns() {

		if ( class_exists( 'WP_Block_Patterns_Registry' ) ) {
			// get content from content.php.
			$content = new Content();
			register_block_pattern(
				'bwe-blockpatterns/audio-of-song',
				array(
					'title'         => __( 'Audio Of Song', 'textdomain' ),
					'description'   => _x( 'Audio of song and paragraph.', 'Block pattern description', 'textdomain' ),
					'content'       => trim( $content->content ),
					'categories'    => array( 'bwe-patterns' ),
					'keywords'      => array( 'bwe, song audio' ),
					'viewportWidth' => 900,
					'blockTypes'    => array( 'core/audio', 'core/paragraph' ),
					'inserter'      => true,
				)
			);
		}
	}
}

