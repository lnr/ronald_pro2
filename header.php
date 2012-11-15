<?php

/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
$title = get_the_title();
if (!defined(THEME_PATH))
	define('THEME_PATH', '/wp-content/themes/ronald_pro2/');

?><!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="<?php echo THEME_PATH; ?>style.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo THEME_PATH; ?>css/rotator-styles.css" />
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.3/jquery.min.js"></script>
		<script type="text/javascript" src="<?php echo THEME_PATH; ?>js/stupidSlider.js"></script>
		<script type="text/javascript" src="<?php echo THEME_PATH; ?>js/jquery.rotator.min.js"></script>
	</head>
	<body>
		<div id="main-container" class="width page-<?php echo $title;?>">
			<div class="header ">
				<a class="logo" href="/"></a>
				<div class="language-switcher">
					<a class="lang active" href="#">Eng</a>
					<a class="lang" href="#">Рус</a>
				</div>
			</div>
			<div class="middle-container">