<?php
$extra_head = '<link rel="stylesheet" type="text/css" href="includes/style.css" />';
include('includes/head.inc');
?>
<script src="http://code.jquery.com/jquery-1.5.2.min.js"></script>

<script type="text/javascript">
	$(document).ready(function(){
	// initial change variables
		var total_slides = 3; // total slides in the 'Our Mission' slider
		
		var r = $('#arrow_right');
		var l = $('#arrow_left');
		
		var option_slider {
			min: 0,
			max: -960,
			current: 0,
			slide: $('#slide_panel'),
			init: function() {
				current = 0;
				l.fadeTo('fast', 0);
				r.fadeTo('fast', 1.0);
				slide.animate({left:current},1000);
			},
			moveright:function() {
				current += 960;
				if (current > min) {
					current = min;
				}
				slide.animate({left:current},1000);
			if (current != min && current != max) {
				r.fadeTo('fast', 1.0);
				l.fadeTo('fast', 1.0);
			}
			else if (current == min) {
				l.fadeTo('fast', 0);
				r.fadeTo('fast', 1.0);
			}
			else if (current == max) {
				r.fadeTo('fast', 0);
				l.fadeTo('fast', 1.0);
			}
			},
			moveleft:function() {
				current -= 960;
				if (current < max) {
					current = max;
				}
				slide.animate({left:current},1000);
				if (current != min && current != max) {
					r.fadeTo('fast', 1.0);
					l.fadeTo('fast', 1.0);
				}
				else if (current == min) {
					l.fadeTo('fast', 0);
					r.fadeTo('fast', 1.0);
				}
				else if (current == max) {
					r.fadeTo('fast', 0);
					l.fadeTo('fast', 1.0);
				}
			}
		};
		
/*		function arrows_pick(offset) {
			current += offset;
			if (current < max) {
				current = max;
			}
			else if (current > min) {
				current = min;
			}
			slide.animate({left:current},1000);
			

			if (current != min && current != max) {
				r.fadeTo('fast', 1.0);
				l.fadeTo('fast', 1.0);
			}
			else if (current == min) {
				l.fadeTo('fast', 0);
				r.fadeTo('fast', 1.0);
			}
			else if (current == max) {
				r.fadeTo('fast', 0);
				l.fadeTo('fast', 1.0);
			}
		} */
		// calls function and passes the offset amount
		option_slider.init();
		r.click(function() {
			option_slider.moveright();
		});
		l.click(function() {
			option_slider.moveleft();
		});

	
	// timing for the main slider
		$('#slide_1').show();
		var shown = 1;
		if (total_slides > 1) {
			var slide_time = setInterval(change_slide, 10000);
		}
		function change_slide() {
			$('#slide_' + shown).fadeOut(500);
			if (++shown > total_slides) {
				shown = 1;
			}
			$('#slide_' + (shown)).fadeIn(1500);
		}
	});
</script>

<?php 
$nav = 0;
include('includes/nav.inc'); 
?>
<div id="main_slide">
<img src="images/mission.png" class="slide_image" id="slide_1" alt="Our Mission" style="display:none;" />
<img src="images/mission2.png" class="slide_image" id="slide_2" alt="Our Mission" style="display:none;" />
<img src="images/mission3.png" class="slide_image" id="slide_3" alt="Our Mission" style="display:none;" />
<div id="slide_frame"></div>
</div>
<div id="mission">
From <span class="blue">educating</span> and <span class="blue">consulting</span>, <span class="orange">customization</span> and <span class="orange">creation</span>, to <span class="green">diagnosis</span> and <span class="green">repair</span>; our expert team does it <span style="font-family:'RobotoCondensed', sans-serif;">all!</span>
</div>
<div id="option_arrows">
<div id="arrow_left"></div>
<div id="arrow_right"></div>
	<div id="option_slider">
		<div id="slide_panel">
			<span class="panel" id="educate"></span>
			<span class="ring"></span>
			<span class="panel" id="create"></span>
			<span class="ring"></span>
			<span class="panel" id="diagnose"></span>
			<!-- section 2 -->
			<span class="panel" id="educate"></span>
			<span class="ring"></span>
			<span class="panel" id="create"></span>
			<span class="ring"></span>
			<span class="panel" id="diagnose"></span>
		</div>
	</div>
</div>
<div id="bottom_pin">
</div>

<?php include('includes/foot.inc');?>
