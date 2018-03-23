<?php
/**
* Page layout for jakes archery theme
* PHP version 7
*
* @category  Archerysite
* @package   Jakesarchery
* @author    Jacob Knight <Jacob.knight@knightprogramming.com>
* @copyright 2018 KnightProgramming
* @license   All Rights Reserved.
*            Unauthorized copying of this file is strictly prohibited.
*            Proprietary and confidential.
*            Jakes archery and the origional author are authorized to:
*              use, modify and distrbute commercially.
* @link      http://www.jakesarchery.com
*/
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Jakes Archery</title>
	<?php wp_head(); ?>
</head>
<body>
<header>
	<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img id="logo" src="<?php echo esc_url( get_template_directory_uri() ) . '\img\jakesarchery_logo.png'; ?>"></a>
</header>
