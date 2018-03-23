<?php
/**
 * Page layout for jakes archery theme
 * PHP version 7
 *
 * @category  Archerysite
 * @package   jakesarchery
 * @author    Jacob Knight <Jacob.knight@knightprogramming.com>
 * @copyright 2018 Jacob Knight
 * @license   All Rights Reserved.
 *            Unauthorized copying of this file is strictly prohibited.
 *            Proprietary and confidential.
 *            Jakes archery and the origional author are authorized to:
 *              use, modify and distrbute commercially.
 * @link      http://www.jakesarchery.com
 */
function jakesarchery_styles() {
	//add base stylesheet.
	wp_register_style( 'style', get_template_directory_uri() . '/style.css', array(), '1.0' );
	wp_enqueue_style( 'style' );
}

add_action( 'wp_enqueue_styles', 'jakesarchery_styles' );