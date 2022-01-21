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
	 */
    public function __construct() {

		$this->content = '<!-- wp:verse -->
		<pre class="wp-block-verse">
		Song Title
		written by: Phil Kane (2021)
		</pre>
		<!-- /wp:verse -->';
	}
}