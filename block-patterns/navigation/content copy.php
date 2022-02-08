<?php
/**
 * Content for the block pattern.
 *
 * @author Phil Kane
 * @package bwe-block-patterns
 */

namespace BweBlockPatterns\BlockPatterns\Navigation;

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}
/**
 * Block pattern content class
 */
class Content {

	/**
	 * Construct the plugin object
	 */
    public function __construct() {

		$this->content = '<!-- wp:columns {"verticalAlignment":null} -->
		<div class="wp-block-columns"><!-- wp:column {"width":"100%"} -->
		<div class="wp-block-column" style="flex-basis:100%"><!-- wp:columns {"verticalAlignment":"center","backgroundColor":"tertiary",} -->
		
		<div class="wp-block-columns are-vertically-aligned-center has-tertiary-background-color" ><!-- wp:column {"verticalAlignment":"center", "width":"7%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:7%"><!-- wp:site-logo {"shouldSyncIcon":false} /--></div>
		<!-- /wp:column -->
		
		<!-- wp:column {"verticalAlignment":"center"} -->
		<div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading {"level":1} -->
		<h1 id="" ><strong>Website Title</strong></h1>
		<!-- /wp:heading --></div>
		<!-- /wp:column -->
		
		<!-- wp:column {"verticalAlignment":"center"} -->
		<div class="wp-block-column is-vertically-aligned-center"><!-- wp:navigation {"ref":191,"layout":{"type":"flex","justifyContent":"left","flexWrap":"wrap"},"fontSize":"large"} /--></div>
		<!-- /wp:column --></div>
		
		<!-- /wp:columns --></div>
		<!-- /wp:column --></div>
		<!-- /wp:columns -->';
	}
}