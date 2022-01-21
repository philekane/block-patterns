<?php
/**
 * Content for the block pattern.
 *
 * @author Phil Kane
 * @package bwe-block-patterns
 */

namespace BweBlockPatterns\BlockPatterns\Audio;

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

		$this->content = '<!-- wp:audio {"id":776,"data-align":"left"} -->
		<figure class="wp-block-audio alignleft"><audio controls src="https://philekane.com/wp-content/uploads/2021/11/i-had-a-dream.mp3"></audio><figcaption>Song Name</figcaption></figure>
		<!-- /wp:audio -->

		<!-- wp:paragraph -->
		<p>Just a song that came up. I did have a dream where there were cats all around, in all kinds of colors, including, red and purple. I wasn\'t asked by one of the cats "What is it you want to understand?" but I was told, in a dream, years ago, by a quart jar or some kind of old lantern, with a bright light emanating from it, that I could ask it any question, and then I woke up. I might have found the reason "why" everyone is so concerned about.</p>
		<!-- /wp:paragraph -->';
	}
}