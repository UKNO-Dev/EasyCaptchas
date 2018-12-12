<?php
	session_start();
echo "Le captcha est correct !";
	if(!isset($_SESSION['check']))
	{
		header('Location: index.php');
	}
//Destuction de la session quand on clique sur le boutton
	echo "<br><a href='destroy.php'>Déconnexion</a>"



	?>


