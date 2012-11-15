(function( $ ){
	$.fn.stupidSlider = function(inOptions) {

		var options = {
			'loop' : false,
			'visibleElementsCount' : 4,
			'orientation' : 'hor',
			'prev' : 'btn-prev',
			'next' : 'btn-next',
			'step' : 160,
			'speed' : 400,
			'ready' : function(){
				console.log('init success');
			}
		};



		$.extend( options, inOptions );


		var   $this = this
			, limit = options.step * ($this.find('li').size() - options.visibleElementsCount)
			, isMove = false
			;

		$('.' + options.prev + ", ." + options.next).click(function(){
			if(isMove) return;
			var   offset = $(this).hasClass(options.prev) ? options.step :  -options.step
				, pos = $this.position()
				, direction = (options.orientation == 'hor') ? 'left' : 'top'
				, newPos = pos[direction] + offset
				;

			isMove = true;

			if(pos[direction] + offset > 0 || (0 - pos[direction] - offset) > limit ) { 
				isMove = false; 
				return; 
			}
			
			var cssObj = (options.orientation == 'hor') ? {'left' : newPos} : {'top' : newPos};

			$this.animate(cssObj, options.speed, function(){
				isMove = false;
			});
			
		});

		options.ready();

	};
})( jQuery );