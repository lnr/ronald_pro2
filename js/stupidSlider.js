(function( $ ){
	$.fn.stupidSlider = function(inOptions) {

		var options = {
			'loop' : false,
			'orientation' : 'hor',
			'prev' : '.btn-prev',
			'next' : '.btn-next',
			'step' : 160,
			'speed' : 400,
			'ready' : function(){
				console.log('init success');
			}
		};



		$.extend( options, inOptions );


		var   $this = this
			, limit = options.step * ($this.find('li').size() - 4)
			, isMove = false
			;

		$(options.prev + ", " + options.next).click(function(){
			if(isMove) return;
			var offset = $(this).hasClass(options.prev) ? options.step :  -options.step;
			var pos = $this.position();

			//console.log(pos.left + ' ' + offset);
			
			if(pos.left + offset > 0 || (0 - pos.left - offset) > limit ) return;
			isMove = true;
			$this.animate({left: (pos.left + offset)}, options.speed, function(){
				isMove = false;
			});
		});

		$this.find('img')
			.mouseover(function(){
				$(this).animate({'opacity' : 0}, options.speed);
			})
			.mouseout(function(){
				$(this).animate({'opacity' : 1}, options.speed);
			});

		options.ready();

	};
})( jQuery );