<?php
/**
 * BWE Block Patterns Plugin
 *
 * @package           bwe-block-patterns
 * @author            Phil Kane
 * @copyright         2022 Business Websites Et-cetera
 * @license           GPL-2.0-or-later
 *
 * @wordpress-plugin
 * Plugin Name:       Biz Sites Etc. Custom Block Patterns
 * Plugin URI:        https://business-websites-etc.com
 * Description:       Plugin for creating block patterns for posts
 * Version:           1.0.0
 * Requires at least: 5.7
 * Requires PHP:      7.3
 * Author:            Phil Kane
 * Author URI:        https://philekane.com
 * Text Domain:       bwe-block-patterns
 * License:           GPL v2 or later
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Update URI:        https://business-websites-etc.com
 */
/*
BWE Vehicle Listings is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.

BWE Vehicle Listings is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with BWE Vehicle Listings. If not, see {URI to Plugin License}.
*/

namespace BweBlockPatterns;

use BweBlockPatterns\BlockPatterns\Lyrics\Register_Lyrics_Block;
use BweBlockPatterns\BlockPatterns\Audio\Register_audio_Block;
use BweBlockPatterns\BlockPatterns\SongData\Register_Song_Data_Block;
use BweBlockPatterns\BlockPatterns\SongDataWithImageCaption\Register_Song_Data_With_Caption_Block;
use BweBlockPatterns\BlockPatterns\Calendar\Register_Calendar_Block;
use BweBlockPatterns\BlockPatterns\ContactUsPage\Register_Contact_Us_Page_Block;

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

/**
 * Block Pattern plugin
 */
class Custom_Block_Patterns {
    /**
     * Construct the plugin object
     */
    public function __construct() {

		require_once __DIR__ . '/block-patterns/custom-block-category.php';
		$new_category = new Block_Category();

		require_once __DIR__ . '/block-patterns/lyrics/index.php';
		$register_lyrics_block = new Register_Lyrics_Block();

		require_once __DIR__ . '/block-patterns/audio/index.php';
		$register_audio_block = new Register_Audio_Block();

		require_once __DIR__ . '/block-patterns/song-data/index.php';
		$register_song_data_block = new Register_Song_Data_Block();

		require_once __DIR__ . '/block-patterns/song-data-with-image-caption/index.php';
		$register_song_data_block_with_image_caption = new Register_Song_Data_With_Caption_Block();
       
        require_once __DIR__ . '/block-patterns/calendar/index.php';
		$register_calendar_block_pattern = new Register_Calendar_Block();
       
        require_once __DIR__ . '/block-patterns/contact-us-page/index.php';
		$register_contact_us_page_block_pattern = new Register_Contact_Us_Page_Block();
	}

	/**
     * Activate the plugin
     */
    public static function activate() {
        // Do nothing.
    }   // END public static function activate

    /**
     * Deactivate the plugin
     */
    public static function deactivate() {
        // Do nothing.
    } // END public static function deactivate
}

if ( class_exists( 'BweBlockPatterns\Custom_Block_Patterns' ) ) {

    // Installation and uninstallation hooks.
    register_activation_hook( __FILE__, array( 'Custom_Block_Patterns', 'activate' ) );
    register_deactivation_hook( __FILE__, array( 'Custom_Block_Patterns', 'deactivate' ) );

    $custom_block_patterns = new Custom_Block_Patterns();
}
