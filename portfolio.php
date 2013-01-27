<?php
$extra_head = '<link rel="stylesheet" type="text/css" href="includes/style.css" />';
include('includes/head.inc');
$nav = 3;
include('includes/nav.inc'); 
?>
<script type="text/javascript">
	$(document).ready(function(){	
	var photo_gallery = {
		// initializing all variables
		total_set: 0,
		set_size: 0,
		current_set: 0,
		current_picture: 0,
		init: function() {
			this.count_set();
			if (this.total_set > 0) { // checks to see if there are any sets
				this.set_size = $('.set1').length / 2; // divides by two because mini and normal
				this.change_set();
			}
		},
		count_set: function() {
			this.total_set = 0;
			var i = 0;
			while ($('.set' + ++i).length > 0) {
				this.total_set++;
			}
		},
		change_set: function() {
			if (this.current_set > 0) { // checks if not initial
			$('.set' + this.current_set).hide(); // hides current set
			}
			if (this.current_set >= this.total_set) { // checks if at max
				this.current_set = 0;
			}
			this.current_set++; // gets new set
			this.set_size = $('.set' + this.current_set).length / 2; // finds new set size
			if (this.set_size <= 3) { // ensures the small pictures will fit and shows amount accordingly.
				for (i=1;i<=this.set_size;i++) {
					$('#m'+this.current_set+'_'+i).show();
				}
			}
			else {
				$('#m'+this.current_set+'_1').show();
				$('#m'+this.current_set+'_2').show();
				$('#m'+this.current_set+'_3').show();
			}
			$('#'+this.current_set+'_1').show(); // shows the first image on the main slider.
			this.current_picture = 1;
			
		}
	};
	photo_gallery.init();
	
	$('#photo_next').click(function() {
		photo_gallery.change_set();
	});
		
	});
</script>

<div id="photo_contain">
	<div id="photo_grad">
		<div id="photo_head">
			<span>Custom Gaming Rig Mid 2012</span>
		</div>
		<div id="photo_current">
			<div id="main_photo">
				<img src="images/photo/custo2012_1_2_small.png" class="set1" id="1_1" style="display:none;" />
				<img src="images/photo/custo2012_1_3_small.png" class="set1" id="1_2" style="display:none;" />
				<img src="images/photo/custo2012_1_4_small.png" class="set1" id="1_3" style="display:none;" />
				<img src="images/photo/custo2012_1_5_small.png" class="set1" id="1_4" style="display:none;" />
				
				<img src="images/photo/custo2012_2_1_small.png" class="set2" id="2_1" style="display:none;" />
				<img src="images/photo/custo2012_2_2_small.png" class="set2" id="2_2" style="display:none;" />
				<img src="images/photo/custo2012_2_3_small.png" class="set2" id="2_3" style="display:none;" />
			</div>
			<div id="side_photo">
				<img src="images/photo/custo2012_1_2_mini.png" class="set1" id="m1_1" style="display:none;" />
				<img src="images/photo/custo2012_1_3_mini.png" class="set1" id="m1_2" style="display:none;" />
				<img src="images/photo/custo2012_1_4_mini.png" class="set1" id="m1_3" style="display:none;" />
				<img src="images/photo/custo2012_1_5_mini.png" class="set1" id="m1_4" style="display:none;" />
				
				<img src="images/photo/custo2012_2_1_mini.png" class="set2" id="m2_1" style="display:none;" />
				<img src="images/photo/custo2012_2_2_mini.png" class="set2" id="m2_2" style="display:none;" />
				<img src="images/photo/custo2012_2_3_mini.png" class="set2" id="m2_3" style="display:none;" />
			</div>
		</div>
		<div id="photo_specs">
			<div>Intel Core i5 3570K</div>
			<div>Gigabyte GA-277 Motherboard</div>
			<div>8 GB Corsair Vengeance</div>
			<div>EVGA GeForce GTX 570</div>
			<div>1 TB HDD</div>
			<div>Windows 8 Professional with Media Center</div>
		</div>
		<div id="photo_next">
			next
		</div>
	</div> <!-- photograd -->
</div> <!-- photocontain -->

<!--
<h1>Portfolio</h1>
				<h3>
	CustoHack Build 1</h3>
<p>
	<img alt="Custom Mac Build 1" href="http://liquidtec.ca/data/uploads/screen-shot-2013-01-08-at-11.10.38-am.png" src="http://liquidtec.ca/data/uploads/screen-shot-2013-01-08-at-11.10.38-am.png" style="width: 600px; height: 338px; " /></p>
<pre>
<p>
	Intel Core i7 2600K<br />
	ASUS P8Z68-V PRO Motherboard<br />
	16/32 GB Corsair Vengeance<br />
	ASUS GeForce GT 560 1 GB GDDR5 Video Card<br />
	4x HDD (1 TB Each)<br />
	Tri-Booting OS X 10.8.2 &amp; Windows 8 Professional /w Media Center &amp; Windows 7 Ultimate</p>
</pre>
<h3>
	Custom Gaming Rig Mid 2012</h3>
<p>
	<img alt="Boris" src="http://liquidtec.ca/data/uploads/doobzpc.png" style="width: 600px; height: 338px;" /><br />
	<br />
	<img alt="Boris' Rig" src="http://liquidtec.ca/data/uploads/img_0910.jpg" style="width: 600px; height: 400px;" /><br />
	<br />
	<img alt="" src="http://liquidtec.ca/data/uploads/img_0912.jpg" style="width: 600px; height: 400px;" /><br />
	<br />
	<img alt="" src="http://liquidtec.ca/data/uploads/img_0915.jpg" style="width: 600px; height: 400px;" /><br />
	<br />
	<img alt="" src="http://liquidtec.ca/data/uploads/img_0914.jpg" style="width: 600px; height: 400px;" /></p>
<pre>
<p>
	Intel Core i5 3570K&nbsp;<br />
	Gigabyte GA-Z77 Motherboard<br />
	8 GB Corsair Vengeance<br />
	EVGA GeForce GTX 570<br />
	1 TB HDD<br />
	Windows 8 Professional /w Media Center&nbsp;</p>
</pre>
<br />
<h3>
	CustoHack Early 2013</h3>
<p>
	<br />
	<img alt="" src="http://liquidtec.ca/data/uploads/img_0916.jpg" style="width: 600px; height: 400px; " /><br />
	<br />
	<img alt="" src="http://liquidtec.ca/data/uploads/img_0917.jpg" style="width: 600px; height: 400px; " /><br />
	<br />
	<img alt="" src="http://liquidtec.ca/data/uploads/img_0918.jpg" style="width: 600px; height: 400px; " /><br />
	<br />
	&nbsp;</p>
<pre>
<p>
	Intel Core i7 2600K &nbsp;<br />
	ASUS Republic Of Gamers<br />
	RAMPAGE Motherboard<br />
	Gigabyte GTX 480 /w Zallman Turbo-Cooler<br />
	Corsair H70 CPU Liquid Cooling Block<br />
	24 GB Corsair Vengeance RAM<br />
	5 Point Thermal/Fan Digital Controller<br />
	1200W Corsair PSU<br />
	RAID Hard Drive Array<br />
	OS X 10.8.2</p>
</pre>
<p>
	&nbsp;</p>
<h3>
	Budget Build #1 - Early 2013</h3>
<p>
	<img alt="" src="http://liquidtec.ca/data/uploads/img_0930.jpg" style="width: 600px; height: 400px;" /><br />
	<br />
	<img alt="" src="http://liquidtec.ca/data/uploads/img_0921.jpg" style="width: 600px; height: 400px;" /><br />
	<br />
	<img alt="" src="http://liquidtec.ca/data/uploads/img_0926.jpg" style="width: 600px; height: 400px;" /></p>
<pre>
<p>
	AMD A6-3670K&nbsp;<br />
	GA-AA55 Motherboard<br />
	Saphire AMD 6550 Video Card<br />
	8 GB Mushkin RAM<br />
	500 GB HDD<br />
	Windows 7 Professional</p>
</pre>
<p>
	&nbsp;</p>
<h3>
	Custom Gaming Rig Mid 2012 # 2</h3>
<p>
	<img alt="" src="http://liquidtec.ca/data/uploads/bzfront.jpg" style="width: 600px; height: 400px;" /><br />
	<br />
	<img alt="" src="http://liquidtec.ca/data/uploads/bzi5.jpg" style="width: 600px; height: 400px;" /><br />
	<br />
	<img alt="" src="http://liquidtec.ca/data/uploads/bzproc.jpg" style="width: 600px; height: 400px;" /><br />
	<br />
	<img alt="" src="http://liquidtec.ca/data/uploads/bzinside.jpg" style="width: 600px; height: 400px;" /></p>
<pre>
<p>
	Intel Core i5 - 2500K<br />
	ASUS P8z77 Motherboard<br />
	EVGA GeForce 570 CLASSIFIED Edition<br />
	8 GB RAM<br />
	OCZ 600 Watt Modular PSU<br />
	120 GB SSD<br />
	1 TB HDD<br />
	WIndows 7 Ultimate&nbsp;</p>
</pre>
-->
<?php include('includes/foot.inc');?>