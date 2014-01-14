<!DOCTYPE html> 
<html lang="en"> 
  <head> 
    <meta charset="utf-8"> 
	<meta name="viewport" content="width=768px, maximum-scale=1.0" /> 
    <title>sketchpad</title> 
	<script type="text/javascript" charset="utf-8"> 
	window.addEventListener('load',function(){
		// get the canvas element and its context
		var canvas = document.getElementById('sketchpad');
		var context = canvas.getContext('2d');
		
		// create a drawer which tracks touch movements
		var drawer = {
			isDrawing: false,
			touchstart: function(coors){
				context.beginPath();
				context.moveTo(coors.x, coors.y);
				this.isDrawing = true;
			},
			touchmove: function(coors){
				if (this.isDrawing) {
			        context.lineTo(coors.x, coors.y);
			        context.stroke();
				}
			},
			touchend: function(coors){
				if (this.isDrawing) {
			        this.touchmove(coors);
			        this.isDrawing = false;
				}
			}
		};
		// create a function to pass touch events and coordinates to drawer
		function draw(event){
			// get the touch coordinates
			var coors = {
				x: event.targetTouches[0].pageX,
				y: event.targetTouches[0].pageY
			};
			// pass the coordinates to the appropriate handler
			drawer[event.type](coors);
		}
		
		// attach the touchstart, touchmove, touchend event listeners.
	    canvas.addEventListener('touchstart',draw, false);
	    canvas.addEventListener('touchmove',draw, false);
	    canvas.addEventListener('touchend',draw, false);
		
		// prevent elastic scrolling
		document.body.addEventListener('touchmove',function(event){
			event.preventDefault();
		},false);	// end body.onTouchMove
		
	},false);	// end window.onLoad
	</script> 
    <style type="text/css"><!--
		body{margin:0;padding:0; font-family:Arial;}
		#container{position:relative;}
		#sketchpad{ border: 1px solid #000;}		
    --></style> 
  </head> 
  <body> 
	<div id="container"> 
      <canvas id="sketchpad" width="766" height="944"> 
        Sorry, your browser is not supported.
      </canvas>		
	</div> 
  </body> 
</html>
