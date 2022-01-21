<?php
/**
 * Create a block pattern.
 *
 * @author Phil Kane
 * @package bwe-block-patterns
 */

namespace BweBlockPatterns\BlockPatterns\Lyrics;

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

/**
 * Lyrics block pattern class
 */
class Register_Lyrics_Block {

	/**
	 * Construct the plugin object
	 */
    public function __construct() {
		add_action( 'init', array( $this, 'bwetc_register_lyrics_block_patterns' ) );
		require_once __DIR__ . '/content.php';
	}
	/**
	 * Register the lyrics block pattern
	 *
	 * @return void
	 */
	public function bwetc_register_lyrics_block_patterns() {

		if ( class_exists( 'WP_Block_Patterns_Registry' ) ) {
			// get content from content.php.
			$content = new Content();
			register_block_pattern(
				'bwe-blockpatterns/song-lyrics',
				array(
					'title'         => __( 'Song Lyrics', 'textdomain' ),
					'description'   => _x( 'Verse block for writing lyrics.', 'Block pattern description', 'textdomain' ),
					'content'       => trim( $content->content ),
					'categories'    => array( 'bwe-patterns' ),
					'keywords'      => array( 'bwe, song lyrics' ),
					'viewportWidth' => 900,
					'blockTypes'    => array( 'core/verse' ),
					'inserter'      => true,
				)
			);
		}
	}
}

