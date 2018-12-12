<?php
	session_start();
	if(!isset($_SESSION['valid']))
		{
		header('Location: index.php');
		}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Captchas validé</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="container">
		<header>
			<div>
				<h1 style="color:red; font-size: 100px;">Code validé avec succès !</h1>
			</div>
			<div id="deco">
				<a href="destroy_session.php">Déconnexion</a>
			</div>
		</header>
	</div>
</body>
</html>