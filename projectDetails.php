<?php
/**
 * Template Name: Projects details
 */
?>

<?php get_header();?>

<?php

$projects = get_posts('category=3&numberposts=5'); 
$out = '';
foreach ($projects as $project) {
	$out .= '<li><a style="cursor:pointer" data-href="' . $project->post_name . '"><img src="/wp-content/themes/ronald_pro2/images/projects/'. $project->post_name .'-small.jpg" /></a></li>';
}
?>



<div class="greybg cont1">
	<div class="cont2">
		<div class="proj-info">
			<div class="proj-img"></div>
			<div class="proj-desc"></div>
		</div>
		<div class="gallery2">
			<ul>
				<?php echo $out;?>
			</ul>
		</div>
		<div class="arrows btn-prev"></div>
		<div class="arrows btn-next"></div>
	</div>
</div>

<script type="text/javascript">
	(function($){


		var getPage = function(url, container){
			window.location.hash = url;
			$('.proj-img').html('<img src="/wp-content/themes/ronald_pro2/images/projects/'+ url +'-big.jpg" />');
			container.empty();
			$.ajax({
				url: '/' + url,
				success:function(data){
					container.html(data);
				}/*,
				error:function(data){
					container.html(data);
				}*/
			});
		}
		var url = window.location.hash.replace('#', '');
		if(url) {
			getPage(url, $('.proj-desc'));
		}
		$('.gallery2 a').click(function(){
			getPage($(this).data('href'), $('.proj-desc'));
		});
	})(jQuery)
</script>

<?php get_footer(); ?>