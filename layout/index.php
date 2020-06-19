<!DOCTYPE html>
<html>
<head>
	<title>Tiara Ika Sasmita</title>
	<link rel="stylesheet" type="text/css" href="<?php echo ASSET; ?>css/style.css">
</head>
<body>
	<div class="container">
		<div class="header">
			<img src="<?php echo ASSET;?>images/uts6.jpg">
		</div>

		<div align="center" class="menu">
			<a href="index.php">Home</a>
			<a href="index.php?page=index_post">Post</a>
			<a href="index.php?page=index_login">Login</a>
		</div>

		<div class="main">
			
			<?php 

			if (isset($_GET['page'])) {
				include $_GET['page'] . ".php";
			} else {
				include "index_main.php";
			}

			?>

		</div>

		<div align="center" class="footer">

			Copyright 2020 &copy; Programmed By Tiara Ika Sasmita
		</div>
	</div>
</body>
</html>

