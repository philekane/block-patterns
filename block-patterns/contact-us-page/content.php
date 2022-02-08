<?php
/**
 * Content for the block pattern.
 *
 * @author Phil Kane
 * @package bwe-block-patterns
 */

namespace BweBlockPatterns\BlockPatterns\ContactUsPage;

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
		<div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"top","width":"66.66%","backgroundColor":"white"} -->
		<div class="wp-block-column is-vertically-aligned-top has-white-background-color has-background" style="flex-basis:66.66%"><!-- wp:heading {"level":1} -->
		<h1>Contact Us</h1>
		<!-- /wp:heading -->
		<!-- wp:html -->
		<iframe title="map to dealership" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2674.530396623419!2d-122.2382176484015!3d47.906773875084106!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x549006cca398e365%3A0xbe2e5f3671fe96b3!2s111%20SW%20Everett%20Mall%20Way%2C%20Everett%2C%20WA%2098204!5e0!3m2!1sen!2sus!4v1628283145045!5m2!1sen!2sus" width="100%" height="auto" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
		<!-- /wp:html -->
		</div>
		<!-- wp:shortcode -->
		[bwe_contact_form]
		<!-- /wp:shortcode -->
		<!-- /wp:column -->
		<!-- wp:column {"verticalAlignment":"top","width":"33.33%","backgroundColor":"white","className":"contact-right-sidebar"} -->
		<div class="wp-block-column is-vertically-aligned-top contact-right-sidebar has-white-background-color has-background" style="flex-basis:33.33%">
		<!-- wp:heading -->
		<h2>Our Location</h2>
		<!-- /wp:heading -->
		<!-- wp:shortcode -->
		[bwe_dealer_name]
		[bwe_dealer_street_address]
		[bwe_dealer_city_state_zip]
		[bwe_dealer_phone]
		<!-- /wp:shortcode -->
		<!-- wp:heading -->
		<h2>Sales Hours</h2>
		<!-- /wp:heading -->
		<!-- wp:list -->
		<ul><li>Monday:       7:00am - 7:00pm</li><li>Tuesday:       7:00am - 7:00pm</li><li>Wednesday:  7:00am - 7:00pm</li><li>Thursday:      7:00am - 7:00pm</li><li>Friday:           7:00am - 7:00pm</li><li>Saturday:       7:00am - 7:00pm</li><li>Sunday:         7:00am - 7:00pm</li></ul>
		<!-- /wp:list -->
		<!-- wp:social-links -->
		<ul class="wp-block-social-links"><!-- wp:social-link {"url":"https://www.facebook.com/Honda/","service":"facebook"} /-->
		<!-- wp:social-link {"url":"https://twitter.com/Honda","service":"twitter"} /-->
		<!-- wp:social-link {"url":"https://www.linkedin.com/company/american-honda-motor-company-inc-","service":"linkedin"} /--></ul>
		<!-- /wp:social-links --></div>
		<!-- /wp:column --></div>
		<!-- /wp:columns -->';
	}
}