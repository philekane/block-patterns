<?php 
/**
 * Create a block pattern.
 *
 * @author Phil Kane
 * @package bwe-block-patterns
 */

namespace BweBlockPatterns\BlockPatterns\Portfolio;

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}
/**
 * Block class
 */
class Register_Portfolio_Block {

	/**
	 * Construct the plugin object
	 */
    public function __construct() {
		add_action( 'init', array( $this, 'bwetc_register_portfolio_block_patterns' ) );
		require_once __DIR__ . '/content.php';
	}
	/**
	 * Register block pattern
	 *
	 * @return void
	 */
	public function bwetc_register_portfolio_block_patterns() {

		if ( class_exists( 'WP_Block_Patterns_Registry' ) ) {
			// get content from content.php.
			$content = new Content();
			register_block_pattern(
				'bwe-blockpatterns/portfolio',
				array(
					'title'         => __( 'Portfolio', 'textdomain' ),
					'description'   => _x( 'Portfolio.', 'Block pattern description', 'textdomain' ),
					'content'       => trim( $content->content ),
					'categories'    => array( 'bwe-patterns' ),
					'keywords'      => array( 'bwe, portfolio' ),
					'viewportWidth' => 900,
					'blockTypes'    => array( 'core/embed', 'core/paragraph' ),
					'inserter'      => true,
				)
			);
		}
	}
}

