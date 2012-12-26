<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 */
function theLang($lang)
{
	$langs = array(
		'History' => 'История',
		'About' => 'О нас',
		'Contact' => 'Контакты',
		'Projects' => 'Проекты',
		'News' => 'Новости'
	);

	echo (LANG == 'ru' && isset($langs[$lang])) ? $langs[$lang] : $lang;
}
$title = get_the_title();
//the_permalink();
?>
				<div class="menu">
					<ul>
						<li class="menu-history"><a class=<?php echo ($title == 'history') ? '"active"' : '"" href="/lang/'.LANG.'/history"';?>><?php theLang('History');?></a></li>
						<li class="menu-about"><a class=<?php echo ($title == 'about') ? '"active"' : '"" href="/lang/'.LANG.'/about"';?>><?php theLang('About');?></a></li>
						<li class="menu-contact"><a class=<?php echo ($title == 'contact') ? '"active"' : '"" href="/lang/'.LANG.'/contact"';?>><?php theLang('Contact');?></a></li>
						<li class="menu-projects"><a class=<?php echo ($title == 'projects') ? '"active"' : '"" href="/lang/'.LANG.'/projects"';?>><?php theLang('Projects');?></a></li>
						<li class="menu-news"><a class=<?php echo ($title == 'news') ? '"active"' : '"" href="/lang/'.LANG.'/news"';?>><?php theLang('News');?></a></li>
					</ul>
					<div style="clear:both;"></div>
				</div> 

			</div> <!-- middle-container -->
			<div class="footer">
				<div class="width">
					<div class="copyright">&copy; van Dijk<br />FEM engineering</div>
					<a class="femto" href="http://femto.nl"></a>
				</div>
			</div>
		</div> <!-- main-container -->
	</body>
</html>