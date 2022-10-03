<?php
/**
 * Content for the block pattern.
 *
 * @author Phil Kane
 * @package bwe-block-patterns
 */

namespace BweBlockPatterns\BlockPatterns\Portfolio;

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

		$this->content = '<!-- wp:columns {"align":"full","style":{"color":{"text":"#000000","background":"#ffffff"}},"className":"is-style-song-info-padding"} -->
		<div class="wp-block-columns alignfull is-style-song-info-padding has-text-color has-background" style="background-color:#ffffff;color:#000000">
		<!-- wp:column -->
		<div class="wp-block-column">
		<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"24px","lineHeight":"1.3"}}} -->
		<h3 style="font-size:24px;line-height:1.3"><strong><a href="http://wordpress.org">PHP</a></strong></h3>
		<!-- /wp:heading --></div>
		<!-- /wp:column -->
		<!-- wp:column -->
		<div class="wp-block-column">
		<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"24px","lineHeight":"1.3"}}} -->
		<h3 style="font-size:24px;line-height:1.3"><strong><a href="http://wordpress.org">JavaScript</a></strong></h3>
		<!-- /wp:heading --></div>
		<!-- /wp:column -->
		<!-- wp:column -->
		<div class="wp-block-column">
		<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"24px","lineHeight":"1.3"}}} -->
		<h3 style="font-size:24px;line-height:1.3"><strong><a href="http://wordpress.org">WordPress</a></strong></h3>
		<!-- /wp:heading --></div>
		<!-- /wp:column --></div>
		<!-- /wp:columns -->
		
		<!-- wp:columns {"className":"is-style-song-info-padding"} -->
		<div class="wp-block-columns is-style-song-info-padding">
		<!-- wp:column {"width":""} -->
		<div class="wp-block-column">
		<!-- wp:image {"id":494,"sizeSlug":"large","linkDestination":"none"} -->
		<figure class="wp-block-image size-large"><img src="http://testevent.local/wp-content/uploads/2022/06/srp-fixed3-1-1024x484.png" alt="" class="wp-image-494"/></figure>
		<!-- /wp:image -->
		
		<!-- wp:paragraph {"style":{"typography":{"fontSize":"14px"}}} -->
		<p style="font-size:14px"><strong>White Irises</strong><br>Ogawa Kazumasa</p>
		<!-- /wp:paragraph --></div>
		<!-- /wp:column -->
		
		<!-- wp:column -->
		<div class="wp-block-column"><!-- wp:image {"id":495,"sizeSlug":"large","linkDestination":"none"} -->
		<figure class="wp-block-image size-large"><img src="http://testevent.local/wp-content/uploads/2022/06/srp-fix1-1-1024x508.png" alt="" class="wp-image-495"/></figure>
		<!-- /wp:image -->
		
		<!-- wp:paragraph {"style":{"typography":{"fontSize":"14px"}}} -->
		<p style="font-size:14px"><strong>Cherry Blossom</strong><br>Ogawa Kazumasa</p>
		<!-- /wp:paragraph -->
		
		<!-- wp:spacer -->
		<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
		<!-- /wp:spacer --></div>
		<!-- /wp:column --></div>
		<!-- /wp:columns -->
		
		<!-- wp:paragraph -->
		<p></p>
		<!-- /wp:paragraph -->';
	}
}