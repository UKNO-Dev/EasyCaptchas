<?php
	session_start();
?>

<!DOCTYPE html>
<html>
 <head>
     <link rel="stylesheet" type="text/css" href="Styles/Styles.css">
     <meta http-equiv="content-type" content="text/html; charset=utf-8" />
</head> 
    <body>
    <h1>OLD SCHOOL CAPTCHA </h1>


<?php
echo "<img src='script-captchas.php' alt='captchas' />";
?>


<?php
if (!isset($_POST['cap']))
    {
     echo "<br>Veuillez saisir le code de sécurité!";
    }
    if (isset($_POST['cap']))
    {
    $back = strtoupper(trim($_POST['cap']));
    $true = $_SESSION['code'];
if ($back != $true)
    {
echo '<br>Mauvais captcha, veuillez réessayer ! (Veillez à bien écrire en majuscules.)';
    }
else
    {
    $_SESSION['check'] = true;
    header('Location: captcha_true.php');
    }
    }

?>
<form action="index.php" method="post" >
  <input type="text" name="cap">
  <br>
  <input type="submit" value="Envoyer">
</form> 



</body>
</html>
