<?php 
/**
 * Create a block pattern.
 *
 * @author Phil Kane
 * @package bwe-block-patterns
 */

namespace BweBlockPatterns\BlockPatterns\SongData;

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

/**
 * Register block pattern class
 */
class Register_Song_Data_Block {

	/**
	 * Construct the plugin object
	 */
    public function __construct() {
		add_action( 'init', array( $this, 'bwetc_register_song_data_block_patterns' ) );
		require_once __DIR__ . '/content.php';
		require_once __DIR__ . '/block-style.php';
        $style = new Block_Style();
	}
	/**
	 * Register block pattern
	 */
	public function bwetc_register_song_data_block_patterns() {

		if ( class_exists( 'WP_Block_Patterns_Registry' ) ) {
			// get content from content.php.
			$content = new Content();
			register_block_pattern(
				'bwe-blockpatterns/song-meta-data',
				array(
					'title'         => __( 'Song Meta Data', 'textdomain' ),
					'description'   => _x( 'Has the artist name, song title, label, release date, genre and an image.', 'Block pattern description', 'textdomain' ),
					'content'       => trim( $content->content ),
					'categories'    => array( 'bwe-patterns' ),
					'keywords'      => array( 'bwe, song data' ),
					'viewportWidth' => 1400,
					'blockTypes'    => array( 'core/columns, core/media' ),
					'inserter'      => true,
				)
			);
		}
	}
}

