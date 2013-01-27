<?php
$extra_head = '<link rel="stylesheet" type="text/css" href="includes/style.css" />';
include('includes/head.inc');
?>

<script type="text/javascript">
// var total_slides = 3;
var images_loaded = 0;
var shown = 1;
var slide_time;

function imageload(id) {
	images_loaded++;
	if (images_loaded == $('.slide_image').length) {
		$('#slide_1').show();
		if (images_loaded > 1) {
			$('#loadgif').fadeOut(1000);
			slide_time = setInterval(change_slide, 10000);
		}
	}
};
// timing for the main slider
function change_slide() {
	$('#slide_' + shown).fadeOut(500);
	if (++shown > images_loaded) {
		shown = 1;
	}
	$('#slide_' + (shown)).fadeIn(1500);
};

	$(document).ready(function(){
	// initial change variables
		
		var r = $('#arrow_right');
		var l = $('#arrow_left');
		var slide = $('#slide_panel');
		
		var option_slider = {
			min: 0,
			max: -960,
			current: 0,
			init: function() {
				this.current = 0;
				l.fadeTo('fast', 0);
				r.fadeTo('fast', 1.0);
				slide.animate({left:this.current},1000);
			},
			update: function(offset) {
				this.current += offset;
				if (this.current < this.max) {
					this.current = this.max;
				}
				else if (this.current > this.min) {
					this.current = this.min;
				}
				slide.animate({left:this.current},1000);

				if (this.current != this.min && this.current != this.max) {
					r.fadeTo('fast', 1.0);
					l.fadeTo('fast', 1.0);
				}
				else if (this.current == this.min) {
					l.hide();
					r.fadeTo('fast', 1.0);
				}
				else if (this.current == this.max) {
					r.hide();
					l.fadeTo('fast', 1.0);
				}
			},
			moveright:function() {
				this.update(-960);
			},
			moveleft:function() {
				this.update(960);
			}
		};
		
		// calls function and passes the offset amount
		option_slider.init();
		r.click(function() {
			option_slider.moveright();
		});
		l.click(function() {
			option_slider.moveleft();
		});
	});

</script>

<?php 
$nav = 0;
include('includes/nav.inc'); 
?>
<div id="main_slide">
<img src="images/mission.png" onload="imageload(this.id);" class="slide_image" id="slide_1" alt="Our Mission" style="display:none;" />
<img src="images/mission2.png" onload="imageload(this.id);" class="slide_image" id="slide_2" alt="Our Mission" style="display:none;" />
<img src="images/mission3.png" onload="imageload(this.id);" class="slide_image" id="slide_3" alt="Our Mission" style="display:none;" />
<img src="images/liquidtec_load.gif" alt="loading" id="loadgif" style="margin-top:30px; margin-left:auto; margin-right:auto;" />
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
