<?php get_header();?>

	<div class="main-slider"></div>
	<script type="text/javascript">
		var path = '<?php echo THEME_PATH; ?>images/slides/';
		$('.main-slider').rotator({
			width: 1200,
			height: 450,
			fx:'fade', //slide or fade
			autorun: true, 
			nav: false,
			slides: [
				{url:'',img: path + 'bulk.jpg'},
				{url:'',img: path + 'concordia.jpg'},
				{url:'',img: path + 'crane`.jpg'},
				{url:'',img: path + 'crane``.jpg'},
				{url:'',img: path + 'drilling.jpg'}
			]
		});
	</script>
<?php get_footer(); ?>