<!Doctype HTML>
<html>
<head>
    <!--
    NOTE:
    
    This version only works on a webserver with the php extention working!
    Please use index.html for a local working version.
    -->
	<title>Home</title>
	<meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/css.css">
	<link rel="icon" type="image/png" href="img/icon.png">
</head>
<body>
	<div>
		<div class="container">
		 	<!--Navigation Bar-->
			<div id="nav" class="nav">
				<a href="index.html">Home</a>
				<a href="projecten/index.php">Projecten</a>
				<a href="index.html">Anders</a>
				<a href="index.html">Deze</a>
			</div>
	
			<!--Website content-->
			<div class="content">
				<?php
                
                //TODO: Create page system, placeholer for now
                include_once("page/home.php");
                
                ?>
			</div>
		</div>
	</div>
</body>
</html>