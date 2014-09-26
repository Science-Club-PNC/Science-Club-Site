<!Doctype HTML>
<html>
<head>
	<title>
		Home
	</title>
	<meta charset="utf-8"/>
	<link rel="stylesheet" href="../css/css.css">
	<link rel="shortcut icon" type="image/png" href="../img/icon.png">
</head>
<body>
	<div>
		<div class="container">
			<!--Navigation Bar-->
			<div id="nav" class="nav">
				<a href="../index.php">Home</a>
				<a href="index.php">Projecten</a>
				<a href="index.php">Anders</a>
				<a href="index.php">Deze</a>
			</div>

			<!--Website content-->
			<div class="content">
				<?php

				if(empty($_GET['page']) || !isset($_GET['page'])) {
					$page = "projecten";
				} else {
					$page = $_GET['page'];
				}

				$path = "../pages/" . $page . ".php";

				if(!file_exists($path)) {
					$path = "pages/404.php";
				}

				include_once($path);

                ?>
			</div>
		</div>
	</div>
</body>
</html>