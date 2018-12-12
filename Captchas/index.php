<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Captcha</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="container">
	<p>Veuillez saisir le code</p>
		<?php echo "<img src='script_captchas.php' alt='captchas'/>"; ?>
		<form method="post">
			<br>
			<br>
			<div>
			<label for="captcha" class="verif">Vérification: </label>
				<input type="text" name="captcha" id="captcha" maxlength="5">
			</div>
			<br>
			<br>
			<span><input type="submit" name="submit" id="submit"></span>
		</form>
		<?php
			if (isset($_POST['submit'])) 
				{
				if (!empty($_POST['captcha']))
					{
					$reponse = strtoupper(trim($_POST['captcha']));
					$bonne_rep = $_SESSION['code'];
					if ($reponse != $bonne_rep) 
						{
						echo '<br><p>Mauvais captcha, veuillez réessayer !</p>';
						}
					else
						{
						$_SESSION['valid'] = true;
						header('Location: captcha_valid.php');
						}
					}
				else if (empty($_POST['captcha']))
					{
					echo '<br><p>Veuillez inscrire le code captchas !</p>';
					}
				}
		?>
	</div>
</body>
</html>