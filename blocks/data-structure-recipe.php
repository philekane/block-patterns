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
			'location_name',
				array(
				//'object_subtype' => 'event_post',
				'show_in_rest'   => true,
				'single'         => true,
				'type'           => 'string'
				),
			);
				/*
		register_block_type( 'data-structure/data-structure-block', array(
			'editor_script' => 'data-editor',
			'editor_style'  => 'data-editor',
			'style'         => 'data-style',
			
		) );
		*/
		
		register_meta(
			'post',
			'location_description',
			 array(
			//'object_subtype' => 'event_post',
			'show_in_rest'   => true,
			'single'         => true,
			'type'           => 'string'
			)
		);
		register_meta(
			'post',
			'data_structure_type',
			 array(
			//'object_subtype' => 'event_post',
			//'show_in_rest' => true,
			'show_in_rest' => [
				'schema' => [
					'type'    => 'string',
					'default' => 'recipe',
				]
			],
			
			'single'       => true,
			'type'         => 'string',
			//'default'      => 'repro',
			)
		);
		/*
		register_meta(
			'post', 'event_post_time', array(
			'object_subtype' => 'event_post',
			'show_in_rest'   => true,
			'single'         => true,
			'type'           => 'string'
			)
		);
		register_meta(
			'post', 'event_post_end_time', array(
			'object_subtype' => 'event_post',
			'show_in_rest'   => true,
			'single'         => true,
			'type'           => 'string'
			)
		);
		
		*/
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
			'data-meta-index',
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
			'data-meta-style',
			plugins_url($data_meta_style_css, __FILE__),
			array()
		);

		$data_meta_json_index_js = 'data_structure_meta/json-index.js';
		wp_enqueue_script(
			'data-meta-json-index',
			plugins_url( $data_meta_json_index_js, __FILE__ ),
			array( 'wp-blocks', 'wp-element', 'wp-components', 'wp-editor', 'wp-i18n' ),
			'false',
			'true' // put in footer
		);
		global $post;
		$post_id = $post->ID;
		$post_meta = get_post_meta( $post_id );
		if ( isset( $post_meta['data_structure_type'] ) ) {
		$data_structure_type = $post_meta['data_structure_type'][0];
		
		switch ($data_structure_type) {
			case 'recipe':
				$name = $post_meta['location_name'][0];
				$location = $post_meta['location_description'][0];
				global $wp_query;
			wp_localize_script(
				'data-meta-json-index',
				'dataStructure',
				array(
					'name'     => $name,
					'location' => $location,
				),
			);
				//prd($location,109);
				break;
			
			default:
				# code...
				break;
		}
	}
		

	}
	

}