<?php
$extra_head = '<link rel="stylesheet" type="text/css" href="includes/style.css" />';
include('includes/head.inc');
?>
<script src="http://code.jquery.com/jquery-1.5.2.min.js"></script>

<script type="text/javascript">
	$(document).ready(function(){
		var max = 960;
		var min = -960;
		var current = 0;
		var slide = $('#slide_panel');
		var r = $('#arrow_right');
		var l = $('#arrow_left');
		l.hide();
		r.click(function() {
			slide.animate({left:"-=960"},1000);
			current -= 960;
			if (current == min) {
				r.hide();
				l.show();
			}
		});
		l.click(function() {
			slide.animate({left:"+=960"},1000);
			current += 960;
			if (current == max) {
				l.hide();
				r.show();
			}
		});
	});
</script>

<?php 
$nav = 0;
include('includes/nav.inc'); 
?>
<div id="main_slide">
<img src="images/mission.png" alt="Our Mission" style="width:1100px; margin-left:2px; margin-right:2px;" />
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

<?php include('includes/foot.inc');?>