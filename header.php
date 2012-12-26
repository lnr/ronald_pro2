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
$uri = $_SERVER['REQUEST_URI'];
if (!defined(LANG))
	define('LANG', (strpos($uri, 'lang/ru')) ? 'ru' : 'en');
	$url = substr($uri, strpos($uri, 'lang/') + 7);
/*echo '<pre>';print_r($_SERVER);echo '</pre>';*/
?><!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="<?php echo THEME_PATH; ?>style.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo THEME_PATH; ?>css/rotator-styles.css" />
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.3/jquery.min.js"></script>
		<script type="text/javascript" src="<?php echo THEME_PATH; ?>js/stupidSlider.js"></script>
		<script type="text/javascript" src="<?php echo THEME_PATH; ?>js/jquery.rotator.min.js"></script>
		<style>
			.<?=LANG?>-text{display:block !important;}
		</style>
	</head>
	<body>
		<div id="main-container" class="width page-<?php echo $title;?>">
			<div class="header ">
				<a class="logo" href="/lang/<?=LANG?>"></a>
				<div class="language-switcher">
					<a class="lang <?php echo LANG == 'en' ? 'active"' : '" href="/lang/en';?><?=$url?>" >Eng</a>
					<a class="lang <?php echo LANG == 'ru' ? 'active"' : '" href="/lang/ru';?><?=$url?>" >Рус</a>
				</div>
			</div>
			<div class="middle-container">