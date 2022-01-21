<?php 
/**
 * Create a block pattern.
 *
 * @author Phil Kane
 * @package bwe-block-patterns
 */

namespace BweBlockPatterns\BlockPatterns\SongDataWithImageCaption;

use BweBlockPatterns\BlockPatterns\SongDataWithImageCaption\Block_Style;
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}
/**
 * Register block pattern class
 *
 * @return void
 */
class Register_Song_Data_With_Caption_Block {

	/**
	 * Construct the plugin object
	 */
    public function __construct() {
		add_action( 'init', array( $this, 'bwetc_register_song_data_with_image_caption_block_patterns' ) );
        require_once __DIR__ . '/content.php';
        require_once __DIR__ . '/block-style.php';
        $style = new Block_Style();
	}
    /**
     * Register block pattern
     *
     * @return void
     */
	public function bwetc_register_song_data_with_image_caption_block_patterns() {

		if ( class_exists( 'WP_Block_Patterns_Registry' ) ) {
            // get content from content.php.
            $content = new Content();
            register_block_pattern(
                'bwe-blockpatterns/song-information-with-image-caption',
                array(
                    'title'         => __( 'Song Information With Image Caption', 'textdomain' ),
                    'description'   => _x( 'Has the artist name, song title, label, release date, genre and an image.', 'Block pattern description', 'textdomain' ),
                    'content'       => trim( $content->content ),
                    'categories'    => array( 'bwe-patterns' ),
                    'keywords'      => array( 'bwe, song data' ),
                    'viewportWidth' => 1400,
                    'blockTypes'    => array( 'core/columns' ),
                    'inserter'      => true,
                )
            );
		}
	}
}

