<?php
/**
* Content for the block pattern.
*
* @author Phil Kane
* @package bwe-block-patterns
*/

namespace BweBlockPatterns\BlockPatterns\SongDataWithImageCaption;

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

		$this->content = '<!-- wp:columns -->
		<div class="wp-block-columns"><!-- wp:column {"className":"song-info-padding"} -->
		<div class="wp-block-column"><!-- wp:heading -->
		<h2>Artist: Phil Kane</h2>
		<!-- /wp:heading -->

		<!-- wp:heading {"level":3} -->
		<h3>Song Title: New Song</h3>
		<!-- /wp:heading -->

		<!-- wp:heading {"level":4} -->
		<h4>Label: PhalKan Tunes</h4>
		<!-- /wp:heading -->

		<!-- wp:heading {"level":4} -->
		<h4>Genre: Americana, Folk</h4>
		<!-- /wp:heading -->

		<!-- wp:heading {"level":4} -->
		<h4>Release Date: 2022</h4>
		<!-- /wp:heading -->

		<!-- wp:heading {"level":4} -->
		<h4>Written By: Phil Kane</h4>
		<!-- /wp:heading --></div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column"><!-- wp:image {"id":72,"sizeSlug":"full","linkDestination":"none", "className":"bwe-image-caption"} -->
		<figure class="wp-block-image size-full"><img src="http://testevent.local/wp-content/uploads/2022/01/blue-sky-and-wispy-clouds.jpg" alt="Blue sky and wispy clouds" class="wp-image-72"/><figcaption><span class="bwe-image-caption">Caption</span></figcaption></figure>
		<!-- /wp:image --></div>
		<!-- /wp:column --></div>
		<!-- /wp:columns -->';
	}
}