<!DOCTYPE html>
<html>
<head>
	<title>Rens Blog</title>
	<link rel="stylesheet" type="text/css" href="<?php echo ASSET; ?>css/style.css">
	<link href="<?php echo ASSET; ?>images/wings.ico" rel="shortcut icon">
</head>
<body>
	<div class="container">
		<div class="header">
			<img src="<?php echo ASSET;?>images/header.png">
		</div>

		<div class="menu">
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

		<div class="footer">
			Copyright 2020 &copy; Programmed By Reni Yunita
		</div>
	</div>
</body>
</html>