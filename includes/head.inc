<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<title>
<?php

// This will add the title, but add LiquidTec first.
if ($title) {
	echo $title.' - Liquid Tec';
}
else 
{
	echo 'Liquid Tec';
};
?></title>

<?php 
if($extra_head) {
	echo $extra_head;
}
?>
<!-- roboto -->
<link rel="stylesheet" type="text/css" href="fonts/roboto.css" />
<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.0/themes/base/jquery-ui.css" />
<script src="http://code.jquery.com/jquery-1.5.2.min.js"></script>
<script src="http://code.jquery.com/ui/1.10.0/jquery-ui.js"></script>
</head>
<body>
<!--[if lt IE 8]>
	<link href="includes/ie_style.css" rel="stylesheet" type="text/css" />
<![endif]-->
<div id="main_head">
<div id="main_head_wrap">
<a href="index.php" title="Liquid Tec" id="logo">Liquid Tec</a>