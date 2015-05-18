<!DOCTYPE html>
<html>
<head>
<!-- ICONS & TITLES !-->
<title>Rainbow Styling</title>
<link rel="shortcut icon" href="favicon.ico" >
<link rel="shortcut icon" href="animated_favicon.gif" type="image/gif" >
<!-- STYLESHEETS !-->
<link rel="stylesheet" href="assets/css/svetty.css" type="text/css" /> 
<link rel="stylesheet" href="assets/css/rainbows.css" type="text/css" />
<link rel="stylesheet" type="text/css" href="assets/css/slick.css"/>
<!-- SCRIPTS !-->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script type="text/javascript" src="assets/js/slick.min.js"></script>
<script src="assets/js/snowfallin.js"></script>
</head>
<body class="catchadream">
	<!-- AUDIO !-->
	<audio autoplay loop>
		<source src="assets/music/music.mp3" type="audio/mpeg">
	</audio>
	<!-- SLIDESHOW !-->
	<center><div class="carousel">
	<?php 
		//load all images from assets folder
		$c = 0;
		foreach(scandir('assets/img/') as $img)
			if($c++ > 1)
				echo '<div><img src="assets/img/' . $img . '"></div>';
	?>
	</div></center>
	<!-- GRASS & SVETTY !-->
	<div id="grass" />
	<div id="svetty"  />
	<!-- START SLIDESHOW !-->
	<script type="text/javascript">
		$(document).ready(function(){
			$('.carousel').slick({
				dots: false,
				arrows: false,
				infinite: true,
				speed: 300,
				fade: true,
				slide: 'div',
				cssEase: 'linear',
				autoplay: true,
				autoplaySpeed: 2000
			});
		});
	</script>
</body>
</html>
