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
class Data_Structure {

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
		/*
		register_meta(
			'post',
			'data_structure',
				array(
				//'object_subtype' => 'event_post',
				'show_in_rest'   => true,
				'single'         => true,
				'type'           => 'string'
				)
		);
		*/
		register_block_type( 'data-structure/data-structure-block', array(
			'editor_script' => 'data-editor',
			'editor_style'  => 'data-editor',
			'style'         => 'data-style',
			
		) );
		/*
		register_meta(
			'post',
			'data_structure_description',
			 array(
			//'object_subtype' => 'event_post',
			'show_in_rest'   => true,
			'single'         => true,
			'type'           => 'string'
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
		$data_editor_css = 'data_structure/editor.css';
		wp_enqueue_style(
			'data-editor',
			plugins_url($data_editor_css, __FILE__),
			array()
		);

		$data_index_js = 'data_structure/index.js';
		wp_enqueue_script(
			'data-index',
			plugins_url( $data_index_js, __FILE__ ),
			array( 'wp-blocks', 'wp-element', 'wp-components', 'wp-editor', 'wp-i18n' )
		);

	}
	



	/**
	 *  Enqueues the style.css for the frontend
	 */
	function data_structure_style_enqueue()
	{
		$data_style_css = 'data_structure/style.css';
		wp_enqueue_style(
			'data-style',
			plugins_url($data_style_css, __FILE__),
			array()
		);
	}
	

}