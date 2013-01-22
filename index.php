<?php
$extra_head = '<link rel="stylesheet" type="text/css" href="includes/style.css" />';
include('includes/head.inc');
?>
<script src="http://code.jquery.com/jquery-1.5.2.min.js"></script>

<script type="text/javascript">
	$(document).ready(function(){
		var max = -1920;
		var min = 0;
		var current = 0;
		var slide = $('#slide_panel');
		var r = $('#arrow_right');
		var l = $('#arrow_left');
		r.fadeTo('fast', 0.5, function() {
			// Animation complete.
		});
		l.fadeTo('fast', 0.5, function() {
				// Animation complete.
		});
		// initializing what arrows are shown depending on location.
			if (current != min && current != max) {
				r.fadeIn("fast");
				l.fadeIn("fast");
			}
			else if (current == min) {
				l.fadeOut("fast");
				r.fadeIn("fast");
			}
			else if (current == max) {
				r.fadeOut("fast");
				l.fadeIn("fast");
			}
		r.click(function() {
			slide.animate({left:"-=960"},1000);
			current -= 960;
			if (current != min && current != max) {
				r.fadeIn("slow");
				l.fadeIn("slow");
			}
			else if (current == min) {
				l.hide();
				r.fadeIn("slow");
			}
			else if (current == max) {
				r.fadeOut("slow");
				l.fadeIn("slow");
			}
		});
		l.click(function() {
			slide.animate({left:"+=960"},1000);
			current += 960;
			if (current != min && current != max) {
				r.fadeIn("slow");
				l.fadeIn("slow");
			}
			else if (current == min) {
				l.hide();
				r.fadeIn("slow");
			}
			else if (current == max) {
				r.fadeOut("slow");
				l.fadeIn("slow");
			}
		});
		r.mouseover(function() {
			r.fadeTo('fast', 1.0, function() {
				// Animation complete.
			});
		});
		r.mouseleave(function() {
			r.fadeTo('fast', 0.5, function() {
				// Animation complete.
			});
		});
		l.mouseover(function() {
			l.fadeTo('fast', 1.0, function() {
				// Animation complete.
			});
		});
		l.mouseleave(function() {
			l.fadeTo('fast', 0.5, function() {
				// Animation complete.
			});
		});
	
	// timing for the main slider
		$('#slide_2').hide();
		var shown = 0;
		var slide_time = setInterval(change_slide, 10000);
		function change_slide() {
			if (shown == 0) {
				$('#slide_1').fadeOut("slow");
				$('#slide_2').fadeIn("slow");
				shown = 1;
			}
			else if (shown == 1) {
				$('#slide_2').fadeOut("slow");
				$('#slide_1').fadeIn("slow");
				shown = 0;
			}
		}
	});
</script>

<?php 
$nav = 0;
include('includes/nav.inc'); 
?>
<div id="main_slide">
<img src="images/mission.png" id="slide_1" alt="Our Mission" style="width:1100px; margin-left:2px; margin-right:2px;" />
<img src="images/mission2.png" id="slide_2" alt="Our Mission" style="width:1100px; margin-left:2px; margin-right:2px;" />
<div id="slide_frame"></div>
</div>
<div id="mission">
From <span class="blue">educating</span> and <span class="blue">consulting</span>, <span class="orange">customization</span> and <span class="orange">creation</span>, to <span class="green">diagnosis</span> and <span class="green">repair</span>; our team of experts does it <span style="font-family:'RobotoCondensed', sans-serif;">all!</span>
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