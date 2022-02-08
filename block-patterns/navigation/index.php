<?php 
/**
 * Create a block pattern.
 *
 * @author Phil Kane
 * @package bwe-block-patterns
 */

namespace BweBlockPatterns\BlockPatterns\Navigation;

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}
/**
 * Block class
 */
class Register_Navigation_Block {

	/**
	 * Construct the plugin object
	 */
    public function __construct() {
		add_action( 'init', array( $this, 'bwetc_register_navigation_block_patterns' ) );
		require_once __DIR__ . '/content.php';
		require_once __DIR__ . '/block-style.php';
	}
	/**
	 * Register block pattern
	 *
	 * @return void
	 */
	public function bwetc_register_navigation_block_patterns() {

		if ( class_exists( 'WP_Block_Patterns_Registry' ) ) {
			// get content from content.php.
			$content = new Content();
			register_block_pattern(
				'bwe-blockpatterns/top-navigation',
				array(
					'title'         => __( 'Top Navigation', 'textdomain' ),
					'description'   => _x( 'Top Navigation with logo and title.', 'Block pattern description', 'textdomain' ),
					'content'       => trim( $content->content ),
					'categories'    => array( 'bwe-patterns' ),
					'keywords'      => array( 'bwe, navigation' ),
					'viewportWidth' => 900,
					'blockTypes'    => array( 'core/template-part/header' ),
					'inserter'      => true,
				)
			);
		}
	}
}

