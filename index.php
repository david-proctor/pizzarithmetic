<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
      "https://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="https://www.w3.org/1999/xhtml">

<head>
	<title>PIZZARITHMETIC DOT COM</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<?php if(! isset($_GET['p'])){ ?>
	<script src="pizzamath.js"></script>
	<?php	} ?>
	<script src="https://api.html5media.info/1.1.6/html5media.min.js"></script>
	<meta name="keywords" content="pizza, how many pizza, math, slice, small, medium, large, pizzarithmetic">
	<meta name="description" content="How many pizza do I need? We will tell you. That is the only thing this site does".>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-17654052-3', 'pizzarithmetic.com');
  ga('send', 'pageview');

</script>
</head>
<body>

<div id="container">
	<div id="header">
		<img src="banner.gif" alt="PIZZARITHMETIC!" title="PIZZARITHMETIC!" />
	</div>
	<div id="navigation">
		<ul>
			<li><a href="index.php">Pizzarithmetic</a></li>
			<li><a href="index.php?p=invest">Investment Opportunities</a></li>
			<li><a href="index.php?p=faq">FAQ</a></li>
			<li><a href="index.php?p=aboot">About </a></li>
		</ul>
	</div>
	<div id="content">
	
	<?php
		if(! isset($_GET['p'])){
			include('pizzaform.php');
		} 
		else {
			if(file_exists($_GET['p'].'.php')){
				include($_GET['p'].'.php');
			}
			else{
				echo('fuck you');
			}
		}
	?>
	
	</div>
	<div id="footer">
		<audio src="PizzaSong.ogg" controls preload autoplay></audio><br />
		Putting the "pizza" in "pizza party" since November 26, 2013<br />
		<?php include('counter.php'); ?>
	</div>
</div>

</body>
</html>
