(function( $ ){
	$.fn.stupidSlider = function(inOptions) {

		var options = {
			'loop' : false,
			'leftBtn' : '.btn-left',
			'rightBtn' : '.btn-right',
		};

		$.extend( options, inOptions );

		var   $btnLeft = $(options.leftBtn)
			, $btnRight = $(options.rightBtn)
			, $this = this
			;
		
		$(options.leftBtn + ", " + options.rightBtn).click(function(){
			
		});

		//alert('init success');


	};
})( jQuery );