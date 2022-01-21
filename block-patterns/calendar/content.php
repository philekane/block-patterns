<?php
/**
 * Content for the block pattern.
 *
 * @author Phil Kane
 * @package bwe-block-patterns
 */

namespace BweBlockPatterns\BlockPatterns\Calendar;

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

		$this->content = '<!-- wp:shortcode -->
		[bizSitesEtcEventsCalendar style=1]
		<!-- /wp:shortcode -->';
	}
}