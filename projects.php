<?php
/**
 * Template Name: Projects
 */
?>

<?php get_header();?>
<?php

$projects = get_posts('category=3&numberposts=12'); 
$i = 1;
$out = '';
foreach ($projects as $project) {
	//echo '<pre>';print_r($project);

	if($i & 1)
		$out .= '<li>';
	$out .= '<a href="/lang/'.LANG.'/projects/details#' . $project->post_name . '"><div class="text"><div class="title">' . $project->post_title 
		. '</div><div class="desc">' . $project->post_excerpt . '</div><span>READ MORE</span></div>';
	$out .= '<img src="/wp-content/themes/ronald_pro2/images/projects/'. $project->post_name .'.jpg" />';
	$out .= '</a>';
	if(!($i & 1))
		$out .= '</li>';
	$i++;
}
?>

<div class="greybg cont1">
	<div class="slider">
		<ul>
			<?php echo $out; ?>
		</ul>
	</div>

	<div class="arrows btn-prev"></div>
	<div class="arrows btn-next"></div>

	<script type="text/javascript">
		(function($){
			$('.slider ul')
				.stupidSlider({
					'step' : 240,
					'ready' : function(){
						$('.slider ul')
							.width(10000)
							.fadeIn();
					}
				})
			$('.slider ul img')
				.mouseover(function(){
					$(this).animate({'opacity' : 0}, 240);
				})
				.mouseout(function(){
					$(this).animate({'opacity' : 1}, 240);
				});
		})( jQuery );
	</script>
</div>



<?php get_footer(); ?>

