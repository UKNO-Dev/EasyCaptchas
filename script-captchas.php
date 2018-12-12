<?php


session_start();



$chaine = '23456789ABCDEFGHJKLMNPQRSTUVWXYZ';


$image = imagecreatefrompng('Images/captcha_1.png');


$color = imagecolorallocate($image, 140, 0, 140);


$font = 'Fonts/Cartoon.ttf';


function getCode($length, $chars) {
	$code = null;
	for ( $i=0; $i < $length; $i++ )
		{
		$code .= $chars { mt_rand( 0, strlen($chars) - 1 ) };
		}
	return $code;


};

$code = getCode(5, $chaine);



$char1 = substr($code,0,1); //
$char2 = substr($code,1,1); //
$char3 = substr($code,2,1); //  Il est possible de remplacer ces 5 variables par un array.
$char4 = substr($code,3,1); //
$char5 = substr($code,4,1); //

imagettftext($image, 28, -10, 0, 37, $color, $font, $char1);
imagettftext($image, 28, 20, 37, 37, $color, $font, $char2);
imagettftext($image, 28, -35, 55, 37, $color, $font, $char3);
imagettftext($image, 28, 25, 100, 37, $color, $font, $char4);
imagettftext($image, 28, -15, 120, 37, $color, $font, $char5);


// Creation d'une variable de session qui stock le contenu de la variable $code
$_SESSION['code']= $code;


header('Content-Type: image/png');
imagepng($image);
imagedestroy($image);

?>