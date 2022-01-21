<?php
/**
 * Content for the block pattern.
 *
 * @author Phil Kane
 * @package bwe-block-patterns
 */

namespace BweBlockPatterns\BlockPatterns\SongData;

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

		$this->content = '<!-- wp:media-text {"mediaPosition":"right","mediaId":689,"mediaLink":"https://philekane.com/sometimes-akawhat-a-wonderful-ride-life-can-be/blue-sky-and-wispy-clouds/","mediaType":"image"} -->
		<div class="wp-block-media-text alignwide has-media-on-the-right is-stacked-on-mobile"><figure class="wp-block-media-text__media"><img src="https://philekane.com/wp-content/uploads/2021/09/blue-sky-and-wispy-clouds-1024x768.jpg" alt="Beautiful Sky" class="wp-image-689 size-full"/></figure><div class="wp-block-media-text__content"><!-- wp:heading -->
		<h2>Artist: Phil Kane</h2>
		<!-- /wp:heading -->

		<!-- wp:heading {"level":3} -->
		<h3>Song Title: </h4>
		<!-- /wp:heading -->

		<!-- wp:heading {"level":4} -->
		<h4>Label: PhalKan Tunes</h4>
		<!-- /wp:heading -->

		<!-- wp:heading {"level":4} -->
		<h4>Release Date:  2020</h4>
		<!-- /wp:heading -->

		<!-- wp:heading {"level":4} -->
		<h4>Genre: Americana, folk</h4>
		<!-- /wp:heading -->

		</div></div>
		<!-- /wp:media-text -->';
	}
}