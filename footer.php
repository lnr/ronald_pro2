<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 */
?>
					
				
				<div class="menu width">
					<ul>
						<li><a href="/history">History</a></li>
						<li><a href="/about">About</a></li>
						<li><a href="/contact">Contact</a></li>
						<li><a href="/projects">Projects</a></li>
						<li><a href="/news">News</a></li>
					</ul>
					<div style="clear:both;"></div>
				</div> 

			</div> <!-- middle-container -->
			
		</div> <!-- main-container -->
		<div class="footer">
			<div class="width">
				<div class="copyright">&copy; van Dijk<br />FEM engineering</div>
				<a class="femto" href="http://femto.nl"></a>
			</div>
		</div>
		<script type="text/javascript">
			(function(){
				$(".middle-container").offset({'top': ($(window).height() - $(".cont1").height())/2});
				$(window).resize(function(){
					$(".middle-container").offset({'top': ($(window).height() - $(".cont1").height())/2});
				});
			})();
		</script>
	</body>
</html>