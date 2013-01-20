<?php
$extra_head = '<link rel="stylesheet" type="text/css" href="includes/style.css" />';
include('includes/head.inc');
?>
<script src="http://code.jquery.com/jquery-1.5.2.min.js"></script>

<script type="text/javascript">
	$(document).ready(function(){
		var slide = $('#slide_panel');
		var r = $('#arrow_right');
		var l = $('#arrow_left');
		l.hide();
		l.click(function() {
			l.hide();
			r.show();
			var position = slide.position();
			slide.animate({left:"-=960"},1000);
		});
		r.click(function() {
			r.hide();
			l.show();
			var position = slide.position();
			slide.animate({left:"+=960"},1000);
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
		</div>
	</div>
	
</div>

<?php include('includes/foot.inc');