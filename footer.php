<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 */

?>
				<div class="menu">
					<ul>
						<li class="menu-history"><a class=<?php echo ($title == 'history') ? '"active"' : '"" href="/history"';?>>History</a></li>
						<li class="menu-about"><a class=<?php echo ($title == 'about') ? '"active"' : '"" href="/about"';?>>About</a></li>
						<li class="menu-contact"><a class=<?php echo ($title == 'contact') ? '"active"' : '"" href="/contact"';?>>Contact</a></li>
						<li class="menu-projects"><a class=<?php echo ($title == 'projects') ? '"active"' : '"" href="/projects"';?>>Projects</a></li>
						<li class="menu-news"><a class=<?php echo ($title == 'news') ? '"active"' : '"" href="/news"';?>>News</a></li>
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