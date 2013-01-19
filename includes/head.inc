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
</head>
<body>
<div id="main_head">
<a href="index.php" id="logo"></a>