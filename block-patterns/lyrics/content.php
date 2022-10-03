<?php
/**
 * Content for the block pattern.
 *
 * @author Phil Kane
 * @package bwe-block-patterns
 */

namespace BweBlockPatterns\BlockPatterns\Lyrics;

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}
/**
 * Lyrics block pattern content class
 */
class Content {

	/**
	 * Construct the plugin object
	 * 
	 * <!-- wp:pattern {"Song Title": "namespace/title"} /-->
	 */
    public function __construct() {

		$this->content = '<!-- wp:verse -->
		<pre class="wp-block-verse">		
			Song Title: "Default Title"
			written by: Phil Kane (2022)
		</pre>
		<!-- /wp:verse -->';
	}
}