<?php
/**
 * Block for google data structure.
 *
 * @author Phil Kane
 * @package bwe-block-patterns
 */

namespace BweBlockPatterns\Blocks;

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}
/**
 * Block class
 */
class Data_Structure_Meta {

	 /**
         * Construct the plugin object
         */
        public function __construct()
        {
            // Initialize Settings
			add_action('enqueue_block_assets', [ $this, 'data_structure_style_enqueue' ]);
			add_action('init', [ $this, 'data_structure_register_meta' ]);
			add_action( 'enqueue_block_editor_assets', [ $this, 'data_structure_enqueue' ] );
		}

	/**
	 * Registers all block assets so that they can be enqueued through Gutenberg in
	 * the corresponding context.
	 *
	 * @see https://wordpress.org/gutenberg/handbook/blocks/writing-your-first-block-type/#enqueuing-block-scripts
	 */
	// register custom meta tag field
	function data_structure_register_meta()
	{
		register_meta(
			'post',
			'bwetc_data_structure_markup',
				array(
				//'object_subtype' => 'event_post',
				'show_in_rest'   => true,
				'single'         => true,
				'type'           => 'string',
				),
			);
	}

	function data_structure_enqueue()
	{
		$data_meta_editor_css = 'data_structure_meta/editor.css';
		wp_enqueue_style(
			'data-meta-editor',
			plugins_url($data_meta_editor_css, __FILE__),
			array()
		);

		$data_meta_index_js = 'data_structure_meta/index.js';
		wp_enqueue_script(
			'bwetc_data-meta-index',
			plugins_url( $data_meta_index_js, __FILE__ ),
			array( 'wp-blocks', 'wp-element', 'wp-components', 'wp-editor', 'wp-i18n' )
		);
	}

	/**
	 *  Enqueues the style.css for the frontend
	 */
	function data_structure_style_enqueue()
	{
		$data_meta_style_css = 'data_structure_meta/style.css';
		wp_enqueue_style(
			'bwetc_data-meta-style',
			plugins_url($data_meta_style_css, __FILE__),
			array()
		);

		$data_meta_json_index_js = 'data_structure_meta/json-index.js';
		wp_enqueue_script(
			'bwetc_data-structure-markup-index',
			plugins_url( $data_meta_json_index_js, __FILE__ ),
			array( 'wp-blocks', 'wp-element', 'wp-components', 'wp-editor', 'wp-i18n' ),
			'false',
			'true' // put in footer
		);
		global $post;

		if ( $post ) {
			$post_id = $post->ID;
			$post_meta = get_post_meta( $post_id );
			if ( isset( $post_meta['bwetc_data_structure_markup'] ) ) {
				$data_structure_markup = esc_html($post_meta['bwetc_data_structure_markup'][0]);

				global $wp_query;
				wp_localize_script(
					'bwetc_data-structure-markup-index',
					'bwetcDataStructure',
					array(
						'markup' => esc_attr($data_structure_markup),
					),
				);
			}
		}
	}

}