<?php
/**
 * Register custom block category.
 *
 * @author Phil Kane 
 * @package bwe-block-patterns
 */

namespace BweBlockPatterns;

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}
/**
 * Create custom block category
 */
class Block_Category {

	/**
	 * Construct the plugin object
	 */
    public function __construct() {
		add_action( 'init', array( $this, 'bwe_register_block_categories' ) );
	}

	function bwe_register_block_categories() {

		if ( class_exists( 'WP_Block_Patterns_Registry' ) ) {
			register_block_pattern_category(
				'bwe-patterns',
				array( 'label' => _x( 'BWE Patterns', 'Block pattern category', 'textdomain' ) )
			);
		}
	}
}